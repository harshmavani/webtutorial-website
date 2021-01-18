<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Insert Data Into MySQL Database Table Using PHP">
	  <meta name="keywords" content="php,php basic,How to Insert Data Into MySQL Database Table Using PHP">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Insert Data Into MySQL Database Table Using PHP - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to insert the data into a MySQL database table using the SQL INSERT query in PHP." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Insert Data Into MySQL Database Table Using PHP</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_mysql-prepared-statements.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_mysql-create-table.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>MySQL INSERT</span> Query</h1>
                <p class="summary">In this tutorial you will learn how to insert records in a MySQL table using PHP.</p>
                <h2>Inserting Data into a MySQL Database Table</h2>				
				<p>Let's make a SQL query using the <code>INSERT INTO</code> statement with appropriate values, after that we will execute this insert query through passing it to the PHP <code>mysqli_query()</code> function to insert data in table. Here's an example, which insert a new row to the <i>persons</i> table by specifying values for the <i>first_name</i>, <i>last_name</i> and <i>email</i> fields.</p>
				<div class="example">
					<div class="my_codeb multi-style-mode">
						<div class="my_codeb-title">
                            <h4>Example</h4>
                            <div class="code-style">
                                <span class="active" data-target="0" data-url="insert-records-into-mysql-database-table" title="Show Example Code in Procedural Style">Procedural</span> 
                                <span data-target="1" data-url="insert-records-into-mysql-database-table-oo-format" title="Show Example Code in Object Oriented Style">Object Oriented</span> 
                                <span data-target="2" data-url="insert-records-into-mysql-database-table-pdo-format" title="Show Example Code in PDO Style">PDO</span>
                            </div>
                            <a href="../output_file/bin/insert-records-into-mysql-database-table1702.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
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
 
// Attempt insert query execution
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('Peter', 'Parker', 'peterparker@mail.com')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
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
 
// Attempt insert query execution
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('Peter', 'Parker', 'peterparker@mail.com')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
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
    $sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('Peter', 'Parker', 'peterparker@mail.com')";    
    $pdo->exec($sql);
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
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
				<p>If you remember from the <a href="bp_mysql-create-table.php">preceding chapter</a>, the <i>id</i> field was marked with the <code>AUTO_INCREMENT</code> flag. This modifier tells the MySQL to automatically assign a value to this field if it is left unspecified, by incrementing the previous value by 1.</p>
				<hr />
				<h2>Inserting Multiple Rows into a Table</h2>
				<p>You can also insert multiple rows into a table with a single insert query at once. To do this, include multiple lists of column values within the <code>INSERT INTO</code> statement, where column values for each row must be enclosed within parentheses and separated by a comma.</p>
				<p>Let's insert few more rows into the <i>persons</i> table, like this:</p>
				<div class="example">
					<div class="my_codeb multi-style-mode">
						<div class="my_codeb-title">
                            <h4>Example</h4>
                            <div class="code-style">
                                <span class="active" data-target="0" data-url="insert-multiple-rows-into-table-in-mysql" title="Show Example Code in Procedural Style">Procedural</span> 
                                <span data-target="1" data-url="insert-multiple-rows-into-table-in-mysql-oo-format" title="Show Example Code in Object Oriented Style">Object Oriented</span> 
                                <span data-target="2" data-url="insert-multiple-rows-into-table-in-mysql-pdo-format" title="Show Example Code in PDO Style">PDO</span>
                            </div>
                            <a href="../output_file/bin/insert-multiple-rows-into-table-in-mysql750d.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
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
 
// Attempt insert query execution
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES
            ('John', 'Rambo', 'johnrambo@mail.com'),
            ('Clark', 'Kent', 'clarkkent@mail.com'),
            ('John', 'Carter', 'johncarter@mail.com'),
            ('Harry', 'Potter', 'harrypotter@mail.com')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
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
 
// Attempt insert query execution
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES
            ('John', 'Rambo', 'johnrambo@mail.com'),
            ('Clark', 'Kent', 'clarkkent@mail.com'),
            ('John', 'Carter', 'johncarter@mail.com'),
            ('Harry', 'Potter', 'harrypotter@mail.com')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
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
    $sql = "INSERT INTO persons (first_name, last_name, email) VALUES
            ('John', 'Rambo', 'johnrambo@mail.com'),
            ('Clark', 'Kent', 'clarkkent@mail.com'),
            ('John', 'Carter', 'johncarter@mail.com'),
            ('Harry', 'Potter', 'harrypotter@mail.com')";   
    $pdo->exec($sql);
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
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
				<p>Now, go to phpMyAdmin (<code>http://localhost/phpmyadmin/</code>) and check out the <i>persons</i> table data inside <i>demo</i> database. You will find the value for the <i>id</i> column is assigned automatically by incrementing the value of previous <i>id</i> by 1.</p>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> Any number of line breaks may occur within a SQL statement, provided that any line break does not break off keywords, values, expression, etc.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2 id="insert-data-into-database-using-form">Insert Data into a Database from an HTML Form</h2>
				<p>In the previous section, we have learned how to insert data into database from a PHP script. Now, we'll see how we can insert data into database obtained from an HTML form. Let's create an HTML form that can be used to insert new records to <i>persons</i> table.</p>
				<h3>Step 1: Creating the HTML Form</h3>
				<p>Here's a simple HTML form that has three text <a href="../info-html/html-input-tag.php"><code>&lt;input&gt;</code></a> fields and a submit button.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/add-record-form45ee.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code3">

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
&lt;meta charset="UTF-8"&gt;
&lt;title&gt;Add Record Form&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;form action="insert.php" method="post"&gt;
    &lt;p&gt;
        &lt;label for="firstName"&gt;First Name:&lt;/label&gt;
        &lt;input type="text" name="first_name" id="firstName"&gt;
    &lt;/p&gt;
    &lt;p&gt;
        &lt;label for="lastName"&gt;Last Name:&lt;/label&gt;
        &lt;input type="text" name="last_name" id="lastName"&gt;
    &lt;/p&gt;
    &lt;p&gt;
        &lt;label for="emailAddress"&gt;Email Address:&lt;/label&gt;
        &lt;input type="text" name="email" id="emailAddress"&gt;
    &lt;/p&gt;
    &lt;input type="submit" value="Submit"&gt;
&lt;/form&gt;
&lt;/body&gt;
&lt;/html&gt;
 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code3"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>					</div>
				</div>
				<h3>Step 2: Retrieving and Inserting the Form Data</h3>
				<p>When a user clicks the submit button of the add record HTML form, in the example above, the form data is sent to 'insert.php' file. The 'insert.php' file connects to the MySQL database server, retrieves forms fields using the PHP <code>$_REQUEST</code> variables and finally execute the insert query to add the records. Here is the complete code of our 'insert.php' file:</p>
				<div class="example">
					<div class="my_codeb multi-style-mode">
						<div class="my_codeb-title">
                        	<h4>Example</h4>
                            <div class="code-style">
                            	<span class="active" data-target="0" data-url="insert" title="Show Example Code in Procedural Style">Procedural</span> 
                                <span data-target="1" data-url="insert-script-oo-format" title="Show Example Code in Object Oriented Style">Object Oriented</span> 
                                <span data-target="2" data-url="insert-script-pdo-format" title="Show Example Code in PDO Style">PDO</span>
                            </div>
                        	<a href="../output_file/bin/insert48f4.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
                        </div>
                        <textarea id="code4">

&lt;?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
 
// Attempt insert query execution
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
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
 
// Escape user inputs for security
$first_name = $mysqli->real_escape_string($_REQUEST['first_name']);
$last_name = $mysqli->real_escape_string($_REQUEST['last_name']);
$email = $mysqli->real_escape_string($_REQUEST['email']);
 
// Attempt insert query execution
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?&gt;

p&lt;?php
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
    // Create prepared statement
    $sql = "INSERT INTO persons (first_name, last_name, email) VALUES (:first_name, :last_name, :email)";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':first_name', $_REQUEST['first_name']);
    $stmt->bindParam(':last_name', $_REQUEST['last_name']);
    $stmt->bindParam(':email', $_REQUEST['email']);
    
    // Execute the prepared statement
    $stmt->execute();
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?&gt;
 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code4"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>					</div>
				</div>
				<p>In the next chapter we will extend this insert query example and take it one step further by implementing the <a href="bp_mysql-prepared-statements.php">prepared statement</a> for better security and performance.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The <code>mysqli_real_escape_string()</code> function escapes special characters in a string and create a legal SQL string to provide security against <a href="../sql-tutorial/sql-injection.php">SQL injection</a>.</p>
                        </div>
                    </div>
                </div>
				<p>This is very basic example of inserting the form data in a MySQL database table. You can extend this example and make it more interactive by adding validations to the user inputs before inserting it to the database tables. Please check out the tutorial on <a href="bp_form-validation.php">PHP form validation</a> to learn more about sanitizing and validating user inputs using PHP.</p>
                <div class="bottom-link clearfix">
                    <a href="bp_mysql-create-table.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_mysql-prepared-statements.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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