<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Get Last Inserted ID in MySQL Table Using PHP">
	  <meta name="keywords" content="php,php basic,Get Last Inserted ID in MySQL Table Using PHP">
	  <meta name="author" content="webschooltoday.com">
    <title>Get Last Inserted ID in MySQL Table Using PHP - WebSchool Today</title>
	 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Get Last Inserted ID in MySQL Table Using PHP</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_mysql-select-query.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_mysql-prepared-statements.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP MySQL <span>Last Inserted ID</span></h1>
                <p class="summary">In this tutorial you will learn how to retrieve the unique ID of the last inserted row from a MySQL database table using PHP.</p>
                <h2>How to Get the ID of Last Inserted Row</h2>
				<p>In the <a href="bp_mysql-insert-query.php">PHP MySQL insert</a> chapter you've learnt MySQL automatically generate an unique ID for the <code>AUTO_INCREMENT</code> column each time you insert a new record or row into the table. However, there are certain situations when you need that automatically generated ID to insert it into a second table. In these situations you can use the PHP <code>mysqli_insert_id()</code> function to retrieve the most recently generated ID, as shown in the upcoming example.</p>
				<p>For this example we'll use the same <i>persons</i> table that we've created in the <a href="bp_mysql-create-table.php">PHP MySQL create tables</a> chapter, which has four columns <i>id</i>, <i>first_name</i>, <i>last_name</i> and <i>email</i>, where <i>id</i> is the primary key column and marked with <code>AUTO_INCREMENT</code> flag.</p>
				<div class="example">
					<div class="my_codeb multi-style-mode">
						<div class="my_codeb-title">
                            <h4>Example</h4>
                            <div class="code-style">
                                <span class="active" data-target="0" data-url="get-last-inserted-id-from-mysql-database-table" title="Show Example Code in Procedural Style">Procedural</span> 
                                <span data-target="1" data-url="get-last-inserted-id-from-mysql-database-table-oo-format" title="Show Example Code in Object Oriented Style">Object Oriented</span> 
                                <span data-target="2" data-url="get-last-inserted-id-from-mysql-database-table-pdo-format" title="Show Example Code in PDO Style">PDO</span>
                            </div>
                            <a href="../output_file/bin/get-last-inserted-id-from-mysql-database-table2ad1.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
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
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('Ron', 'Weasley', 'ronweasley@mail.com')";
if(mysqli_query($link, $sql)){
    // Obtain last inserted id
    $last_id = mysqli_insert_id($link);
    echo "Records inserted successfully. Last inserted ID is: " . $last_id;
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
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('Ron', 'Weasley', 'ronweasley@mail.com')";
if($mysqli->query($sql) === true){
    // Obtain last inserted id
    $last_id = $mysqli->insert_id;
    echo "Records inserted successfully. Last inserted ID is: " . $last_id;
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
    $sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('Ron', 'Weasley', 'ronweasley@mail.com')";    
    $pdo->exec($sql);
    $last_id = $pdo->lastInsertId();
    echo "Records inserted successfully. Last inserted ID is: " . $last_id;
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
                <div class="bottom-link clearfix">
                    <a href="bp_mysql-prepared-statements.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_mysql-select-query.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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