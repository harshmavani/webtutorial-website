<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Select Data from MySQL Database Tables Using PHP">
	  <meta name="keywords" content="php,php basic,How to Select Data from MySQL Database Tables Using PHP">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Select Data from MySQL Database Tables Using PHP - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to select the records from MySQL database tables using the SQL SELECT query in PHP." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Select Data from MySQL Database Tables Using PHP</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_mysql-where-clause.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_mysql-last-inserted-id.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>MySQL SELECT</span> Query</h1>
                <p class="summary">In this tutorial you'll learn how to select records from a MySQL table using PHP.</p>
                <h2>Selecting Data From Database Tables</h2>				
				<div class="shadow">
					<div class="syntax"><span class="keyword">SELECT</span> <i>column1_name</i>, <i>column2_name</i>, <i>columnN_name</i> <span class="keyword">FROM</span> <em title="Replaceable">table_name</em>;</div>
				</div>
				<p>Let's make a SQL query using the <code>SELECT</code> statement, after that we will execute this SQL query through passing it to the PHP <code>mysqli_query()</code> function to retrieve the table data.</p>
				<p>Consider our <i>persons</i> database table has the following records:</p>
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
				<p>The PHP code in the following example selects all the data stored in the <i>persons</i> table (using the asterisk character (<code>*</code>) in place of column name selects all the data in the table).</p>
				<div class="my_codeb-rg3-w space">
					<div class="my_codeb multi-style-mode">
						<div class="my_codeb-title">
                        	<h4>Example</h4>
                            <div class="code-style">
                            	<span class="active" data-target="0" data-url="mysql-select-query">Procedural</span> 
                                <span data-target="1" data-url="mysql-select-query-oo-format">Object Oriented</span> 
                                <span data-target="2" data-url="mysql-select-query-pdo-format">PDO</span>
                            </div>
                        	<a href="../output_file/bin/mysql-select-query9712.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
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
$sql = "SELECT * FROM persons";
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
        // Free result set
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
$sql = "SELECT * FROM persons";
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
    $sql = "SELECT * FROM persons";   
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
                <h2>Explanation of Code (Procedural style)</h2>
				<p>In the example above, the data returned by the <code>mysqli_query()</code> function is stored in the <code>$result</code> variable. Each time <code>mysqli_fetch_array()</code> is invoked, it returns the next row from the result set as an array. The <a href="bp_loops.php">while loop</a> is used to loops through all the rows in the result set. Finally the value of individual field can be accessed from the row either by passing the field index or field name to the <code>$row</code> variable like <code>$row['id']</code> or <code>$row[0]</code>, <code>$row['first_name']</code> or <code>$row[1]</code>, <code>$row['last_name']</code> or <code>$row[2]</code>, and <code>$row['email']</code> or <code>$row[3]</code>.</p>
				<p>If you want to use the <a href="bp_loops.php"><code>for</code> loop</a> you can obtain the loop counter value or the number of rows returned by the query by passing the <code>$result</code> variable to the <code>mysqli_num_rows()</code> function. This loop counter value determines how many times the loop should run.</p>
                <div class="bottom-link clearfix">
                    <a href="bp_mysql-last-inserted-id.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_mysql-where-clause.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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