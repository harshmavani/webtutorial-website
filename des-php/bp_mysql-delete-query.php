<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Delete Data from MySQL Database Table Using PHP">
	  <meta name="keywords" content="php,php basic,How to Delete Data from MySQL Database Table Using PHP">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Delete Data from MySQL Database Table Using PHP - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to delete the records from MySQL database table using the SQL DELETE query in PHP." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Delete Data from MySQL Database Table Using PHP</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_mysql-crud-application.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_mysql-update-query.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>MySQL DELETE</span> Query</h1>
                <p class="summary">In this tutorial you'll learn how to delete records from a MySQL table using PHP.</p>
				<p>The basic syntax of the <code>DELETE</code> statement can be given with:</p>
				<div class="shadow">
					<div class="syntax"><span class="keyword">DELETE</span> <span class="keyword">FROM</span> table_name <span class="keyword">WHERE</span> column_name=some_value</div>
				</div>
				<p>Let's make a SQL query using the <code>DELETE</code> statement and <code>WHERE</code> clause, after that we will execute this query through passing it to the PHP <code>mysqli_query()</code> function to delete the tables records. Consider the following <i>persons</i> table inside the <i>demo</i> database:</p>
<pre class="console-output break">
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
				<p>The PHP code in the following example will delete the records of those persons from the <i>persons</i> table whose <i>first_name</i> is equal to John.</p>
				<div class="example">
					<div class="my_codeb multi-style-mode">
						<div class="my_codeb-title">
                        	<h4>Example</h4>
                            <div class="code-style">
                            	<span class="active" data-target="0" data-url="mysql-delete-query">Procedural</span> 
                                <span data-target="1" data-url="mysql-delete-query-oo-format">Object Oriented</span> 
                                <span data-target="2" data-url="mysql-delete-query-pdo-format">PDO</span>
                            </div>
                            <a href="../output_file/bin/mysql-delete-query606f.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
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
 
// Attempt delete query execution
$sql = "DELETE FROM persons WHERE first_name='John'";
if(mysqli_query($link, $sql)){
    echo "Records were deleted successfully.";
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
 
// Attempt delete query execution
$sql = "DELETE FROM persons WHERE first_name='John'";
if($mysqli->query($sql) === true){
    echo "Records were deleted successfully.";
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
    $sql = "DELETE FROM persons WHERE first_name='John'";  
    $pdo->exec($sql);
    echo "Records were deleted successfully.";
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
				<p>After the deletion the <i>persons</i> table will look something like this:</p>
<pre class="console-output break">
+----+------------+-----------+----------------------+
| id | first_name | last_name | email                |
+----+------------+-----------+----------------------+
|  1 | Peter      | Parker    | peterparker@mail.com |
|  3 | Clark      | Kent      | clarkkent@mail.com   |
|  5 | Harry      | Potter    | harrypotter@mail.com |
+----+------------+-----------+----------------------+
</pre>
				<p>As you can see the records has been deleted successfully from the persons table.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The <code>WHERE</code> clause in the <code>DELETE</code> statement specifies which record or records should be deleted. If you omit the <code>WHERE</code> clause, all records will be deleted.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_mysql-update-query.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_mysql-crud-application.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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