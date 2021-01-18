<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Using Prepared Statements in MySQL with PHP ">
	  <meta name="keywords" content="php,php basic,,Using Prepared Statements in MySQL with PHP ">
	  <meta name="author" content="webschooltoday.com">
    <title>Using Prepared Statements in MySQL with PHP - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Using Prepared Statements in MySQL with PHP </div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_mysql-last-inserted-id.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_mysql-insert-query.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>MySQL Prepared</span> Statements</h1>
                <p class="summary">In this tutorial you will learn how to use prepared statements in MySQL using PHP.</p>
                <h2>What is Prepared Statement</h2>
				<p>A prepared statement (also known as parameterized statement) is simply a SQL query template containing placeholder instead of the actual parameter values. These placeholders will be replaced by the actual values at the time of execution of the statement.</p>
				<p>MySQLi supports the use of anonymous positional placeholder (<code>?</code>), as shown below:</p>
				<div class="shadow">
					<div class="syntax">
						<span class="keyword">INSERT INTO</span> persons (first_name, last_name, email) <span class="keyword">VALUES</span> (?, ?, ?);
					</div>
				</div>
				<p>While, PDO supports both anonymous positional placeholder (<code>?</code>), as well as the named placeholders. A named placeholder begins with a colon (<code>:</code>) followed by an identifier, like this:</p>
				<div class="shadow">
					<div class="syntax">
						<span class="keyword">INSERT INTO</span> persons (first_name, last_name, email) <br /><span class="keyword">VALUES</span> (:first_name, :last_name, :email);
					</div>
				</div>
				<p>The prepared statement execution consists of two stages: prepare and execute.</p>
				<ul>
					<li><strong>Prepare</strong> &mdash; At the prepare stage a SQL statement template is created and sent to the database server. The server parses the statement template, performs a syntax check and query optimization, and stores it for later use.</li>
					<li><strong>Execute</strong> &mdash; During execute the parameter values are sent to the server. The server creates a statement from the statement template and these values to execute it.</li>
				</ul>
				<p class="space">Prepared statements is very useful, particularly in situations when you execute a particular statement multiple times with different values, for example, a series of <code>INSERT</code> statements. The following section describes some of the major benefits of using it.</p>
				<h2>Advantages of Using Prepared Statements</h2>
				<p>A prepared statement can execute the same statement repeatedly with high efficiency, because the statement is parsed only once again, while it can be executed multiple times. It also minimize bandwidth usage, since upon every execution only the placeholder values need to be transmitted to the database server instead of the complete SQL statement.</p>
				<p>The following example will show you how prepared statements actually work:</p>
				<div class="example">
					<div class="my_codeb multi-style-mode">
						<div class="my_codeb-title">
                            <h4>Example</h4>
                            <div class="code-style">
                                <span class="active" data-target="0" data-url="prepared-statement" title="Show Example Code in Procedural Style">Procedural</span> 
                                <span data-target="1" data-url="prepared-statement-oo-format" title="Show Example Code in Object Oriented Style">Object Oriented</span> 
                                <span data-target="2" data-url="prepared-statement-pdo-format" title="Show Example Code in PDO Style">PDO</span>
                            </div>
                            <a href="../output_file/bin/prepared-statement1268.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
						</div>
                        <textarea id="code1">

&lt;?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Prepare an insert statement
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES (?, ?, ?)";
 
if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sss", $first_name, $last_name, $email);
    
    /* Set the parameters values and execute
    the statement again to insert another row */
    $first_name = "Hermione";
    $last_name = "Granger";
    $email = "hermionegranger@mail.com";
    mysqli_stmt_execute($stmt);
    
    /* Set the parameters values and execute
    the statement to insert a row */
    $first_name = "Ron";
    $last_name = "Weasley";
    $email = "ronweasley@mail.com";
    mysqli_stmt_execute($stmt);
    
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
}
 
// Close statement
mysqli_stmt_close($stmt);
 
// Close connection
mysqli_close($link);
?&gt;

&lt;?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "demo");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Prepare an insert statement
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES (?, ?, ?)";
 
if($stmt = $mysqli->prepare($sql)){
    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("sss", $first_name, $last_name, $email);
    
    /* Set the parameters values and execute
    the statement again to insert another row */
    $first_name = "Hermione";
    $last_name = "Granger";
    $email = "hermionegranger@mail.com";
    $stmt->execute();
    
    /* Set the parameters values and execute
    the statement to insert a row */
    $first_name = "Ron";
    $last_name = "Weasley";
    $email = "ronweasley@mail.com";
    $stmt->execute();
    
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
}
 
// Close statement
$stmt->close();
 
// Close connection
$mysqli->close();
?&gt;

&lt;?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=demo", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 
// Attempt insert query execution
try{
    // Prepare an insert statement
    $sql = "INSERT INTO persons (first_name, last_name, email) VALUES (:first_name, :last_name, :email)";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
    $stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    
    /* Set the parameters values and execute
    the statement again to insert another row */
    $first_name = "Hermione";
    $last_name = "Granger";
    $email = "hermionegranger@mail.com";
    $stmt->execute();
    
    /* Set the parameters values and execute
    the statement to insert a row */
    $first_name = "Ron";
    $last_name = "Weasley";
    $email = "ronweasley@mail.com";
    $stmt->execute();
    
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not prepare/execute query: $sql. " . $e->getMessage());
}
 
// Close statement
unset($stmt);
 
// Close connection
unset($pdo);
?&gt;
 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code1"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>					</div>
				</div>
				<p class="space">As you can see in the above example we've prepared the <code>INSERT</code> statement just once but executed it multiple times by passing the different set of parameters.</p>
				<h2>Explanation of Code (Procedural style)</h2>
				<p>Inside the SQL <code>INSERT</code> statement (<i>line no-12</i>) of the example above, the question marks is used as the placeholders for the <i>first_name</i>, <i>last_name</i>, <i>email</i> fields values.</p>
				<p>The <code>mysqli_stmt_bind_param()</code> function (<i>line no-16</i>) bind variables to the placeholders (<code>?</code>) in the SQL statement template. The placeholders (<code>?</code>) will be replaced by the actual values held in the variables at the time of execution. The <i>type</i> definition string provided as second argument i.e. the "sss" string specifies that the data type of each bind variable is string.</p>
				<p>The type definition string specify the data types of the corresponding bind variables and contains one or more of the following four characters:</p>
				<ul>
					<li><strong>b</strong> &mdash; binary (such as image, PDF file, etc.)</li>
					<li><strong>d</strong> &mdash; double (floating point number)</li>
					<li><strong>i</strong> &mdash; integer (whole number)</li>
					<li><strong>s</strong> &mdash; string (text)</li>
				</ul>
				<p>The number of bind variables and the number of characters in type definition string must match the number of placeholders in the SQL statement template.</p>
				<hr />
				<h2>Using Inputs Received through a Web Form</h2>
				<p>If you remember from the previous chapter, we've created an HTML form to <a href="bp_mysql-insert-query.php#insert-data-into-database-using-form">insert data into database</a>. Here, we're going to extend that example by implementing the prepared statement. You can use the same HTML form to test the following insert script example, but just make sure that you're using the correct file name in the <code>action</code> attribute of the form.</p>
				<p>Here's the updated PHP code for inserting the data. If you see the example carefully you'll find we didn't use the <code>mysqli_real_escape_string()</code> to escape the user inputs, like we've done in the previous chapter example. Since in prepared statements, user inputs are never substituted into the query string directly, so they do not need to be escaped correctly.</p>
				<div class="example">
					<div class="my_codeb multi-style-mode">
						<div class="my_codeb-title">
                            <h4>Example</h4>
                            <div class="code-style">
                                <span class="active" data-target="0" data-url="insert-prepared" title="Show Example Code in Procedural Style">Procedural</span> 
                                <span data-target="1" data-url="insert-prepared-script-oo-format" title="Show Example Code in Object Oriented Style">Object Oriented</span> 
                                <span data-target="2" data-url="insert-prepared-script-pdo-format" title="Show Example Code in PDO Style">PDO</span>
                            </div>
                            <a href="../output_file/bin/insert-prepared3121.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
						</div>
                        <textarea id="code2">

&lt;?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Prepare an insert statement
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES (?, ?, ?)";
 
if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sss", $first_name, $last_name, $email);
    
    // Set parameters
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $email = $_REQUEST['email'];
    
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not execute query: $sql. " . mysqli_error($link);
    }
} else{
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
}
 
// Close statement
mysqli_stmt_close($stmt);
 
// Close connection
mysqli_close($link);
?&gt;

&lt;?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "demo");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Prepare an insert statement
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES (?, ?, ?)";
 
if($stmt = $mysqli->prepare($sql)){
    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("sss", $first_name, $last_name, $email);
    
    // Set parameters
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $email = $_REQUEST['email'];
    
    // Attempt to execute the prepared statement
    if($stmt->execute()){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not execute query: $sql. " . $mysqli->error;
    }
} else{
    echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
}
 
// Close statement
$stmt->close();
 
// Close connection
$mysqli->close();
?&gt;

&lt;?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=demo", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 
// Attempt insert query execution
try{
    // Prepare an insert statement
    $sql = "INSERT INTO persons (first_name, last_name, email) VALUES (:first_name, :last_name, :email)";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':first_name', $_REQUEST['first_name'], PDO::PARAM_STR);
    $stmt->bindParam(':last_name', $_REQUEST['last_name'], PDO::PARAM_STR);
    $stmt->bindParam(':email', $_REQUEST['email'], PDO::PARAM_STR);
    
    // Execute the prepared statement
    $stmt->execute();
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not prepare/execute query: $sql. " . $e->getMessage());
}
 
// Close statement
unset($stmt);
 
// Close connection
unset($pdo);
?&gt;
 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code2"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>					</div>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> Though escaping user inputs is not required in prepared statements, you should always validate the type and size of the data received from external sources and enforces appropriate limits to protect against system resources exploitation.</p>
						</div>
					</div>
				</div>
                <div class="bottom-link clearfix">
                    <a href="bp_mysql-insert-query.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_mysql-last-inserted-id.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
            </div>
        </div>        
        <div class="sidebar">
            
        </div>
    </div> 
</div>
	<?php include "../footer.php" ?>

</body>
</html>