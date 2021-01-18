<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Create Database in MySQL Using PHP">
	  <meta name="keywords" content="php,php basic,How to Create Database in MySQL Using PHP">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create Database in MySQL Using PHP - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to create a database in MySQL database server using PHP." />
	 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Create Database in MySQL Using PHP</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_mysql-create-table.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_mysql-connect.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>MySQL Create</span> Database</h1>
                <p class="summary">In this tutorial you will learn how to create a database in MySQL using PHP.</p>
                <h2>Creating MySQL Database Using PHP</h2>				
                <p>Now that you've understood how to open a connection to the MySQL database server. In this tutorial you will learn how to execute SQL query to create a database.</p>
                <p>Let's make a SQL query using the <code>CREATE DATABASE</code> statement, after that we will execute this SQL query through passing it to the PHP <code>mysqli_query()</code> function to finally create our database. The following example creates a database named <i>demo</i>.</p>
				<div class="example">
					<div class="my_codeb multi-style-mode">
						<div class="my_codeb-title">
                        	<h4>Example</h4>
                            <div class="code-style">
                            	<span class="active" data-target="0" data-url="create-mysql-database">Procedural</span> 
                                <span data-target="1" data-url="create-mysql-database-oo-format">Object Oriented</span> 
                                <span data-target="2" data-url="create-mysql-database-pdo-format">PDO</span>
                            </div>
                            <a href="../output_file/bin/create-mysql-database84ed.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
                        </div>
                        <textarea id="code1">

&lt;?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create database query execution
$sql = "CREATE DATABASE demo";
if(mysqli_query($link, $sql)){
    echo "Database created successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?&gt;

&lt;?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Attempt create database query execution
$sql = "CREATE DATABASE demo";
if($mysqli->query($sql) === true){
    echo "Database created successfully";
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
    $pdo = new PDO("mysql:host=localhost;", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 
// Attempt create database query execution
try{
    $sql = "CREATE DATABASE demo";
    $pdo->exec($sql);
    echo "Database created successfully";
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

							</script>
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
                    <a href="bp_mysql-connect.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_mysql-create-table.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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