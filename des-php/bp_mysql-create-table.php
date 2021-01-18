<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Create Tables in MySQL Database Using PHP ">
	  <meta name="keywords" content="php,php basic,How to Create Tables in MySQL Database Using PHP ">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create Tables in MySQL Database Using PHP - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to create tables in MySQL database using PHP." />
	 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Create Tables in MySQL Database Using PHP </div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_mysql-insert-query.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_mysql-create-database.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>MySQL Create</span> Tables</h1>
                <p class="summary">In this tutorial you will learn how to create tables in MySQL database using PHP.</p>
                <h2>Creating Tables inside MySQL Database Using PHP</h2>
				<p>Let's make a SQL query using the <code>CREATE TABLE</code> statement, after that we will execute this SQL query through passing it to the PHP <code>mysqli_query()</code> function to finally create our table.</p>
				<div class="example">
					<div class="my_codeb multi-style-mode">
						<div class="my_codeb-title">
                        	<h4>Example</h4>
                            <div class="code-style">
                            	<span class="active" data-target="0" data-url="create-mysql-table">Procedural</span> 
                                <span data-target="1" data-url="create-mysql-table-oo-format">Object Oriented</span> 
                                <span data-target="2" data-url="create-mysql-table-pdo-format">PDO</span>
                            </div>
                            <a href="../output_file/bin/create-mysql-table7642.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
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
 
// Attempt create table query execution
$sql = "CREATE TABLE persons(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE
)";
if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
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
 
// Attempt create table query execution
$sql = "CREATE TABLE persons(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE
)";
if($mysqli->query($sql) === true){
    echo "Table created successfully.";
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
 
// Attempt create table query execution
try{
    $sql = "CREATE TABLE persons(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        email VARCHAR(70) NOT NULL UNIQUE
    )";    
    $pdo->exec($sql);
    echo "Table created successfully.";
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
				<p>The PHP code in the above example creates a table named <i>persons</i> with four columns <i>id</i>, <i>first_name</i>, <i>last_name</i> and <i>email</i> inside the <i>demo</i> database.</p>
				<p>Notice that each field name is followed by a data type declaration; this declaration specifies what type of data the column can hold, whether integer, string, date, etc.</p>
				<p>There are a few additional constraints (also called <i>modifiers</i>) that are specified after the column name in the preceding SQL statement, like <code>NOT NULL</code>, <code>PRIMARY KEY</code>, <code>AUTO_INCREMENT</code>, etc. Constraints define rules regarding the values allowed in columns.</p>
				<p>Please check out the tutorial on <a href="../sql-tutorial/sql-create-table-statement.php">SQL <code>CREATE TABLE</code> statement</a> for the detailed information about syntax, as well as the data types and constraints available in MySQL database system.</p>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> Any number of line breaks may occur within a SQL statement, provided that any line break does not break off keywords, values, expression, etc.</p>
						</div>
					</div>
				</div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> Setting the <code>PDO::ATTR_ERRMODE</code> attribute to <code>PDO::ERRMODE_EXCEPTION</code> tells PDO to throw exceptions whenever a database error occurs.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_mysql-create-database.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_mysql-insert-query.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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