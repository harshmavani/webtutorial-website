<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Update Data in MySQL Database Table Using PHP">
	  <meta name="keywords" content="php,php basic,How to Update Data in MySQL Database Table Using PHP">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Update Data in MySQL Database Table Using PHP - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to update the records in a MySQL database table using the SQL UPDATE query in PHP." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Update Data in MySQL Database Table Using PHP</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_mysql-delete-query.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_mysql-order-by-clause.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>MySQL UPDATE</span> Query</h1>
                <p class="summary">In this tutorial you'll learn how to update the records in a MySQL table using PHP.</p>
				<p>The basic syntax of the <code>UPDATE</code> statement can be given with:</p>
				<div class="shadow">
					<div class="syntax"><span class="keyword">UPDATE</span> table_name <span class="keyword">SET</span> column1=value, column2=value2,... <span class="keyword">WHERE</span> column_name=some_value</div>
				</div>
				<p>Let's make a SQL query using the <code>UPDATE</code> statement and <code>WHERE</code> clause, after that we will execute this query through passing it to the PHP <code>mysqli_query()</code> function to update the tables records. Consider the following <i>persons</i> table inside the <i>demo</i> database:</p>
<pre class="console-output">
+----+------------+-----------+----------------------+
| id | first_name | last_name | email                |
+----+------------+-----------+----------------------+
|  1 | Peter      | Parker    | peterparker@mail.com |
|  2 | John       | Rambo     | johnrambo@mail.com   |
|  3 | Clark      | Kent      | clarkkent@mail.com   |
|  4 | John       | Carter    | johncarter@mail.com  |
|  5 | Harry      | Potter    | harrypotter@mail.com |
+----+------------+-----------+----------------------+
</pre>
				<p>The PHP code in the following example will update the email address of a person in the persons table whose <i>id</i> is equal to 1.</p>
				<div class="example">
					<div class="my_codeb multi-style-mode">
						<div class="my_codeb-title">
                        	<h4>Example</h4>
                            <div class="code-style">
                            	<span class="active" data-target="0" data-url="mysql-update-query">Procedural</span> 
                                <span data-target="1" data-url="mysql-update-query-oo-format">Object Oriented</span> 
                                <span data-target="2" data-url="mysql-update-query-pdo-format">PDO</span>
                            </div>
                            <a href="../output_file/bin/mysql-update-queryd04a.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
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
 
// Attempt update query execution
$sql = "UPDATE persons SET email='peterparker_new@mail.com' WHERE id=1";
if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
} else {
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
 
// Attempt update query execution
$sql = "UPDATE persons SET email='peterparker_new@mail.com' WHERE id=1";
if($mysqli->query($sql) === true){
    echo "Records were updated successfully.";
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
 
// Attempt update query execution
try{
    $sql = "UPDATE persons SET email='peterparker_new@mail.com' WHERE id=1";    
    $pdo->exec($sql);
    echo "Records were updated successfully.";
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
				<p>After update the persons table will look something like this:</p>
<pre class="console-output">
+----+------------+-----------+--------------------------+
| id | first_name | last_name | email                    |
+----+------------+-----------+--------------------------+
|  1 | Peter      | Parker    | peterparker_new@mail.com |
|  2 | John       | Rambo     | johnrambo@mail.com       |
|  3 | Clark      | Kent      | clarkkent@mail.com       |
|  4 | John       | Carter    | johncarter@mail.com      |
|  5 | Harry      | Potter    | harrypotter@mail.com     |
+----+------------+-----------+--------------------------+
</pre>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The <code>WHERE</code> clause in the <code>UPDATE</code> statement specifies which record or records should be updated. If you omit the <code>WHERE</code> clause, all records will be updated.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_mysql-order-by-clause.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_mysql-delete-query.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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