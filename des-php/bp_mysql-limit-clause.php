<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Limiting Data Selections with MySQL LIMIT Clause in PHP">
	  <meta name="keywords" content="php,php basic,Limiting Data Selections with MySQL LIMIT Clause in PHP">
	  <meta name="author" content="webschooltoday.com">
    <title>Limiting Data Selections with MySQL LIMIT Clause in PHP - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to select limited number of records from a MySQL database table using the SQL SELECT query and LIMIT clause in PHP." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Limiting Data Selections with MySQL LIMIT Clause in PHP</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_mysql-order-by-clause.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_mysql-where-clause.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>MySQL LIMIT</span> Clause</h1>
                <p class="summary">In this tutorial you will learn how to fetch limited number of records from a MySQL database table using PHP.</p>
				<p>The basic syntax of the <code>LIMIT</code> clause can be given with:</p>
				<div class="shadow break">
					<div class="syntax"><span class="keyword">SELECT</span> column_name(s) <span class="keyword">FROM</span> table_name <span class="keyword">LIMIT</span> row_offset, row_count;</div>
				</div>
                <p>The <code>LIMIT</code> clause accepts one or two parameters which must be a nonnegative integer:</p>
				<ul>
					<li>When two parameters are specified, the first parameter specifies the offset of the first row to return i.e. the starting point, whereas the second parameter specifies the number of rows to return. The offset of the first row is 0 (not 1).</li>
					<li>Whereas, when only one parameter is given, it specifies the maximum number of rows to return from the beginning of the result set.</li>
				</ul>
				<p>For example, to retrieve the first three rows, you can use the following query:</p>
				<div class="sky-box break" style="margin-top: 5px;"><span class="keyword">SELECT</span> * <span class="keyword">FROM</span> persons <span class="keyword">LIMIT</span> 3;</div>
				<p>To retrieve the rows 2-4 (inclusive) of a result set, you can use the following query:</p>
				<div class="green-box break" style="margin-top: 5px;"><span class="keyword">SELECT</span> * <span class="keyword">FROM</span> persons <span class="keyword">LIMIT</span> 1, 3;</div>
				<p>Let's make a SQL query using the <code>LIMIT</code> clause in <code>SELECT</code> statement, after that we will execute this query through passing it to the PHP <code>mysqli_query()</code> function to get the limited number of records. Consider the following <i>persons</i> table inside the <i>demo</i> database:</p>
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
				<p>The PHP code in the following example will display just three rows from the <i>persons</i> table.</p>
				<div class="example">
					<div class="my_codeb multi-style-mode">
						<div class="my_codeb-title">
                        	<h4>Example</h4>
                            <div class="code-style">
                            	<span class="active" data-target="0" data-url="mysql-limit-clause">Procedural</span> 
                                <span data-target="1" data-url="mysql-limit-clause-oo-format">Object Oriented</span> 
                                <span data-target="2" data-url="mysql-limit-clause-pdo-format">PDO</span>
                            </div>
                        	<a href="../output_file/bin/mysql-limit-clause1c94.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
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
 
// Attempt select query execution
$sql = "SELECT * FROM persons LIMIT 3";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) &gt; 0){
        echo "&lt;table&gt;";
            echo "&lt;tr&gt;";
                echo "&lt;th&gt;id&lt;/th&gt;";
                echo "&lt;th&gt;first_name&lt;/th&gt;";
                echo "&lt;th&gt;last_name&lt;/th&gt;";
                echo "&lt;th&gt;email&lt;/th&gt;";
            echo "&lt;/tr&gt;";
        while($row = mysqli_fetch_array($result)){
            echo "&lt;tr&gt;";
                echo "&lt;td&gt;" . $row['id'] . "&lt;/td&gt;";
                echo "&lt;td&gt;" . $row['first_name'] . "&lt;/td&gt;";
                echo "&lt;td&gt;" . $row['last_name'] . "&lt;/td&gt;";
                echo "&lt;td&gt;" . $row['email'] . "&lt;/td&gt;";
            echo "&lt;/tr&gt;";
        }
        echo "&lt;/table&gt;";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
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
    die("ERROR: Could not connect. " . $mysqli-&gt;connect_error);
}
 
// Attempt select query execution
$sql = "SELECT * FROM persons LIMIT 3";
if($result = $mysqli-&gt;query($sql)){
    if($result-&gt;num_rows &gt; 0){
        echo "&lt;table&gt;";
            echo "&lt;tr&gt;";
                echo "&lt;th&gt;id&lt;/th&gt;";
                echo "&lt;th&gt;first_name&lt;/th&gt;";
                echo "&lt;th&gt;last_name&lt;/th&gt;";
                echo "&lt;th&gt;email&lt;/th&gt;";
            echo "&lt;/tr&gt;";
        while($row = $result-&gt;fetch_array()){
            echo "&lt;tr&gt;";
                echo "&lt;td&gt;" . $row['id'] . "&lt;/td&gt;";
                echo "&lt;td&gt;" . $row['first_name'] . "&lt;/td&gt;";
                echo "&lt;td&gt;" . $row['last_name'] . "&lt;/td&gt;";
                echo "&lt;td&gt;" . $row['email'] . "&lt;/td&gt;";
            echo "&lt;/tr&gt;";
        }
        echo "&lt;/table&gt;";
        // Free result set
        $result-&gt;free();
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli-&gt;error;
}
 
// Close connection
$mysqli-&gt;close();
?&gt;

&lt;?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=demo", "root", "");
    // Set the PDO error mode to exception
    $pdo-&gt;setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e-&gt;getMessage());
}
 
// Attempt select query execution
try{
    $sql = "SELECT * FROM persons LIMIT 3";  
    $result = $pdo-&gt;query($sql);
    if($result-&gt;rowCount() &gt; 0){
        echo "&lt;table&gt;";
            echo "&lt;tr&gt;";
                echo "&lt;th&gt;id&lt;/th&gt;";
                echo "&lt;th&gt;first_name&lt;/th&gt;";
                echo "&lt;th&gt;last_name&lt;/th&gt;";
                echo "&lt;th&gt;email&lt;/th&gt;";
            echo "&lt;/tr&gt;";
        while($row = $result-&gt;fetch()){
            echo "&lt;tr&gt;";
                echo "&lt;td&gt;" . $row['id'] . "&lt;/td&gt;";
                echo "&lt;td&gt;" . $row['first_name'] . "&lt;/td&gt;";
                echo "&lt;td&gt;" . $row['last_name'] . "&lt;/td&gt;";
                echo "&lt;td&gt;" . $row['email'] . "&lt;/td&gt;";
            echo "&lt;/tr&gt;";
        }
        echo "&lt;/table&gt;";
        // Free result set
        unset($result);
    } else{
        echo "No records matching your query were found.";
    }
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e-&gt;getMessage());
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
				<p>After limiting the result set the output will look something like this:</p>
<pre class="console-output">
+----+------------+-----------+----------------------+
| id | first_name | last_name | email                |
+----+------------+-----------+----------------------+
|  1 | Peter      | Parker    | peterparker@mail.com |
|  2 | John       | Rambo     | johnrambo@mail.com   |
|  3 | Clark      | Kent      | clarkkent@mail.com   |
+----+------------+-----------+----------------------+
</pre>
                <div class="bottom-link clearfix">
                    <a href="bp_mysql-where-clause.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_mysql-order-by-clause.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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