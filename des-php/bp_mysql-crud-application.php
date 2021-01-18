<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="PHP MySQL CRUD Application">
	  <meta name="keywords" content="php,php basic,PHP MySQL CRUD Application">
	  <meta name="author" content="webschooltoday.com">
    <title>PHP MySQL CRUD Application - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to build a CRUD application to create, read, update and delete records in a MySQL database table with PHP." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">PHP MySQL CRUD Application</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_mysql-ajax-live-search.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_mysql-delete-query.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP MySQL <span>CRUD Application</span></h1>
                <p class="summary">In this tutorial you'll learn how to build a CRUD application with PHP and MySQL.</p>
                <h2>What is CRUD</h2>				
                <p>CRUD is an acronym for <b>C</b>reate, <b>R</b>ead, <b>U</b>pdate, and <b>D</b>elete. CRUD operations are basic data manipulation for database. We've already learned how to perform create (i.e. insert), read (i.e. select), update and delete operations in previous chapters. In this tutorial we'll create a simple PHP application to perform all these operations on a MySQL database table at one place.</p>
				<p class="space">Well, let's start by creating the table which we'll use in all of our example.</p>
				<h2>Creating the Database Table</h2>
				<p>Execute the following SQL query to create a table named <i>employees</i> inside your MySQL database. We will use this table for all of our future operations.</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/downloads/employees-table.zip" target="_top" class="download-btn" title="Download Countries Table"><span>Download</span></a></div>
                        <textarea id="code1">

CREATE TABLE employees (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    address VARCHAR(255) NOT NULL,
    salary INT(10) NOT NULL
);
 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code1"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
				<hr />
				<h2>Creating the Config File</h2>
				<p>After creating the table, we need create a PHP script in order to connect to the MySQL database server. Let's create a file named "config.php" and put the following code inside it.</p>
				<p>We'll later include this config file in other pages using the PHP <code>require_once()</code> function.</p>
                <div class="example">
                    <div class="my_codeb multi-style-mode">
                        <div class="my_codeb-title">
                        	<h4>Example</h4>
                            <div class="code-style">
                            	<span class="active" data-target="0" data-url="config" title="Show Example Code in MySQLi Procedural Style">Procedural</span> 
                                <span data-target="1" data-url="config-oo-format" title="Show Example Code in MySQLi Object Oriented Style">Object Oriented</span> 
                                <span data-target="2" data-url="config-pdo-format" title="Show Example Code in PDO Style">PDO</span>
                            </div>
                        	<a href="../output_file/bin/configfd49.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
                            <span class="box-size"><i title="Maximize"></i></span>
                        </div>
                        <textarea id="code2">

&lt;?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'demo');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?&gt;

&lt;?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'demo');
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?&gt;

&lt;?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'demo');
 
/* Attempt to connect to MySQL database */
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
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

							</script>                    </div>
                </div>
				<p>If you've downloaded the Object Oriented or PDO code examples using the download button, please remove the text "-oo-format" or "-pdo-format" from file names before testing the code.</p>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
> 
							<p><strong>Read Carefully:</strong> Replace the credentials according to your MySQL server setting before testing this code, for example, replace the database name 'demo' with your own database name, replace username 'root' with your own database username, specify database password if there's any.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Creating the Landing Page</h2>
				<p>First we will create a landing page for our CRUD application that contains a data grid showing the records from the <i>employees</i> database table. It also has action icons for each record displayed in the grid, that you may choose to view its details, update it, or delete it.</p>
				<p>We'll also add a create button on the top of the data grid that can be used for creating new records in the <i>employees</i> table. Create a file named "index.php" and put the following code in it:</p>
                <div class="example">
                    <div class="my_codeb multi-style-mode">
                        <div class="my_codeb-title">
                        	<h4>Example</h4>
                            <div class="code-style">
                            	<span class="active" data-target="0" data-url="index" title="Show Example Code in MySQLi Procedural Style">Procedural</span> 
                                <span data-target="1" data-url="index-oo-format" title="Show Example Code in MySQLi Object Oriented Style">Object Oriented</span> 
                                <span data-target="2" data-url="index-pdo-format" title="Show Example Code in PDO Style">PDO</span>
                            </div>
                        	<a href="../output_file/bin/index7c76.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
                            <span class="box-size"><i title="Maximize"></i></span>
                        </div>
                        <textarea id="code3">

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Dashboard&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"&gt;&lt;/script&gt;
    &lt;style type="text/css"&gt;
        .rg3-w{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    &lt;/style&gt;
    &lt;script type="text/javascript"&gt;
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;div class="container-fluid"&gt;
            &lt;div class="row"&gt;
                &lt;div class="col-md-12"&gt;
                    &lt;div class="page-header clearfix"&gt;
                        &lt;h2 class="pull-left"&gt;Employees Details&lt;/h2&gt;
                        &lt;a href="create.php" class="btn btn-success pull-right"&gt;Add New Employee&lt;/a&gt;
                    &lt;/div&gt;
                    &lt;?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM employees";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) &gt; 0){
                            echo "&lt;table class='table table-bordered table-striped'&gt;";
                                echo "&lt;thead&gt;";
                                    echo "&lt;tr&gt;";
                                        echo "&lt;th&gt;#&lt;/th&gt;";
                                        echo "&lt;th&gt;Name&lt;/th&gt;";
                                        echo "&lt;th&gt;Address&lt;/th&gt;";
                                        echo "&lt;th&gt;Salary&lt;/th&gt;";
                                        echo "&lt;th&gt;Action&lt;/th&gt;";
                                    echo "&lt;/tr&gt;";
                                echo "&lt;/thead&gt;";
                                echo "&lt;tbody&gt;";
                                while($row = mysqli_fetch_array($result)){
                                    echo "&lt;tr&gt;";
                                        echo "&lt;td&gt;" . $row['id'] . "&lt;/td&gt;";
                                        echo "&lt;td&gt;" . $row['name'] . "&lt;/td&gt;";
                                        echo "&lt;td&gt;" . $row['address'] . "&lt;/td&gt;";
                                        echo "&lt;td&gt;" . $row['salary'] . "&lt;/td&gt;";
                                        echo "&lt;td&gt;";
                                            echo "&lt;a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'&gt;&lt;span class='glyphicon glyphicon-eye-open'&gt;&lt;/span&gt;&lt;/a&gt;";
                                            echo "&lt;a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'&gt;&lt;span class='glyphicon glyphicon-pencil'&gt;&lt;/span&gt;&lt;/a&gt;";
                                            echo "&lt;a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'&gt;&lt;span class='glyphicon glyphicon-trash'&gt;&lt;/span&gt;&lt;/a&gt;";
                                        echo "&lt;/td&gt;";
                                    echo "&lt;/tr&gt;";
                                }
                                echo "&lt;/tbody&gt;";                            
                            echo "&lt;/table&gt;";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "&lt;p class='lead'&gt;&lt;em&gt;No records were found.&lt;/em&gt;&lt;/p&gt;";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?&gt;
                &lt;/div&gt;
            &lt;/div&gt;        
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Dashboard&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"&gt;&lt;/script&gt;
    &lt;style type="text/css"&gt;
        .rg3-w{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    &lt;/style&gt;
    &lt;script type="text/javascript"&gt;
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;div class="container-fluid"&gt;
            &lt;div class="row"&gt;
                &lt;div class="col-md-12"&gt;
                    &lt;div class="page-header clearfix"&gt;
                        &lt;h2 class="pull-left"&gt;Employees Details&lt;/h2&gt;
                        &lt;a href="create.php" class="btn btn-success pull-right"&gt;Add New Employee&lt;/a&gt;
                    &lt;/div&gt;
                    &lt;?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM employees";
                    if($result = $mysqli-&gt;query($sql)){
                        if($result-&gt;num_rows &gt; 0){
                            echo "&lt;table class='table table-bordered table-striped'&gt;";
                                echo "&lt;thead&gt;";
                                    echo "&lt;tr&gt;";
                                        echo "&lt;th&gt;#&lt;/th&gt;";
                                        echo "&lt;th&gt;Name&lt;/th&gt;";
                                        echo "&lt;th&gt;Address&lt;/th&gt;";
                                        echo "&lt;th&gt;Salary&lt;/th&gt;";
                                        echo "&lt;th&gt;Action&lt;/th&gt;";
                                    echo "&lt;/tr&gt;";
                                echo "&lt;/thead&gt;";
                                echo "&lt;tbody&gt;";
                                while($row = $result-&gt;fetch_array()){
                                    echo "&lt;tr&gt;";
                                        echo "&lt;td&gt;" . $row['id'] . "&lt;/td&gt;";
                                        echo "&lt;td&gt;" . $row['name'] . "&lt;/td&gt;";
                                        echo "&lt;td&gt;" . $row['address'] . "&lt;/td&gt;";
                                        echo "&lt;td&gt;" . $row['salary'] . "&lt;/td&gt;";
                                        echo "&lt;td&gt;";
                                            echo "&lt;a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'&gt;&lt;span class='glyphicon glyphicon-eye-open'&gt;&lt;/span&gt;&lt;/a&gt;";
                                            echo "&lt;a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'&gt;&lt;span class='glyphicon glyphicon-pencil'&gt;&lt;/span&gt;&lt;/a&gt;";
                                            echo "&lt;a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'&gt;&lt;span class='glyphicon glyphicon-trash'&gt;&lt;/span&gt;&lt;/a&gt;";
                                        echo "&lt;/td&gt;";
                                    echo "&lt;/tr&gt;";
                                }
                                echo "&lt;/tbody&gt;";                            
                            echo "&lt;/table&gt;";
                            // Free result set
                            $result-&gt;free();
                        } else{
                            echo "&lt;p class='lead'&gt;&lt;em&gt;No records were found.&lt;/em&gt;&lt;/p&gt;";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . $mysqli-&gt;error;
                    }
                    
                    // Close connection
                    $mysqli-&gt;close();
                    ?&gt;
                &lt;/div&gt;
            &lt;/div&gt;        
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Dashboard&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"&gt;&lt;/script&gt;
    &lt;style type="text/css"&gt;
        .rg3-w{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    &lt;/style&gt;
    &lt;script type="text/javascript"&gt;
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;div class="container-fluid"&gt;
            &lt;div class="row"&gt;
                &lt;div class="col-md-12"&gt;
                    &lt;div class="page-header clearfix"&gt;
                        &lt;h2 class="pull-left"&gt;Employees Details&lt;/h2&gt;
                        &lt;a href="create.php" class="btn btn-success pull-right"&gt;Add New Employee&lt;/a&gt;
                    &lt;/div&gt;
                    &lt;?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM employees";
                    if($result = $pdo-&gt;query($sql)){
                        if($result-&gt;rowCount() &gt; 0){
                            echo "&lt;table class='table table-bordered table-striped'&gt;";
                                echo "&lt;thead&gt;";
                                    echo "&lt;tr&gt;";
                                        echo "&lt;th&gt;#&lt;/th&gt;";
                                        echo "&lt;th&gt;Name&lt;/th&gt;";
                                        echo "&lt;th&gt;Address&lt;/th&gt;";
                                        echo "&lt;th&gt;Salary&lt;/th&gt;";
                                        echo "&lt;th&gt;Action&lt;/th&gt;";
                                    echo "&lt;/tr&gt;";
                                echo "&lt;/thead&gt;";
                                echo "&lt;tbody&gt;";
                                while($row = $result-&gt;fetch()){
                                    echo "&lt;tr&gt;";
                                        echo "&lt;td&gt;" . $row['id'] . "&lt;/td&gt;";
                                        echo "&lt;td&gt;" . $row['name'] . "&lt;/td&gt;";
                                        echo "&lt;td&gt;" . $row['address'] . "&lt;/td&gt;";
                                        echo "&lt;td&gt;" . $row['salary'] . "&lt;/td&gt;";
                                        echo "&lt;td&gt;";
                                            echo "&lt;a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'&gt;&lt;span class='glyphicon glyphicon-eye-open'&gt;&lt;/span&gt;&lt;/a&gt;";
                                            echo "&lt;a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'&gt;&lt;span class='glyphicon glyphicon-pencil'&gt;&lt;/span&gt;&lt;/a&gt;";
                                            echo "&lt;a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'&gt;&lt;span class='glyphicon glyphicon-trash'&gt;&lt;/span&gt;&lt;/a&gt;";
                                        echo "&lt;/td&gt;";
                                    echo "&lt;/tr&gt;";
                                }
                                echo "&lt;/tbody&gt;";                            
                            echo "&lt;/table&gt;";
                            // Free result set
                            unset($result);
                        } else{
                            echo "&lt;p class='lead'&gt;&lt;em&gt;No records were found.&lt;/em&gt;&lt;/p&gt;";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . $mysqli-&gt;error;
                    }
                    
                    // Close connection
                    unset($pdo);
                    ?&gt;
                &lt;/div&gt;
            &lt;/div&gt;        
        &lt;/div&gt;
    &lt;/div&gt;
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

							</script>                    </div>
                </div>
				<p>Once <i>employees</i> table is populated with some records the landing page i.e. the CRUD data grid may look something like the picture shown below:</p>				
				<div class="shadow">
                    <div class="preview-box">
                        <a href="#" target="_blank">
                            <img src="../assets/images/table1.png" width="730" height="223" alt="PHP MySQL CRUD Grid" />
                        </a>
                    </div>
                </div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> We've used the Bootstrap framework to make this CRUD application layout quickly and beautifully. Bootstrap is the most popular and powerful front-end framework for faster and easier responsive web development. Please, checkout the <a href="../twitter-bootstrap-tutorial/index.php">Bootstrap tutorial</a> section to learn more about this framework.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Creating the Create Page</h2>
				<p>In this section we'll build the <b>C</b>reate functionality of our CRUD application.</p>
				<p>Let's create a file named "create.php" and put the following code inside it. It will generate a web form that can be used to insert records in the <i>employees</i> table.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb multi-style-mode">
                        <div class="my_codeb-title">
                        	<h4>Example</h4>
                            <div class="code-style">
                            	<span class="active" data-target="0" data-url="create" title="Show Example Code in MySQLi Procedural Style">Procedural</span> 
                                <span data-target="1" data-url="create-oo-format" title="Show Example Code in MySQLi Object Oriented Style">Object Oriented</span> 
                                <span data-target="2" data-url="create-pdo-format" title="Show Example Code in PDO Style">PDO</span>
                            </div>
                        	<a href="../output_file/bin/create97d2.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
                            <span class="box-size"><i title="Maximize"></i></span>
                        </div>
                        <textarea id="code4">

&lt;?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $address = $salary = "";
$name_err = $address_err = $salary_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=&gt;array("regexp"=&gt;"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Please enter an address.";     
    } else{
        $address = $input_address;
    }
    
    // Validate salary
    $input_salary = trim($_POST["salary"]);
    if(empty($input_salary)){
        $salary_err = "Please enter the salary amount.";     
    } elseif(!ctype_digit($input_salary)){
        $salary_err = "Please enter a positive integer value.";
    } else{
        $salary = $input_salary;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO employees (name, address, salary) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_address, $param_salary);
            
            // Set parameters
            $param_name = $name;
            $param_address = $address;
            $param_salary = $salary;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?&gt;
 
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Create Record&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;style type="text/css"&gt;
        .rg3-w{
            width: 500px;
            margin: 0 auto;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;div class="container-fluid"&gt;
            &lt;div class="row"&gt;
                &lt;div class="col-md-12"&gt;
                    &lt;div class="page-header"&gt;
                        &lt;h2&gt;Create Record&lt;/h2&gt;
                    &lt;/div&gt;
                    &lt;p&gt;Please fill this form and submit to add employee record to the database.&lt;/p&gt;
                    &lt;form action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?&gt;" method="post"&gt;
                        &lt;div class="form-group &lt;?php echo (!empty($name_err)) ? 'has-error' : ''; ?&gt;"&gt;
                            &lt;label&gt;Name&lt;/label&gt;
                            &lt;input type="text" name="name" class="form-control" value="&lt;?php echo $name; ?&gt;"&gt;
                            &lt;span class="help-block"&gt;&lt;?php echo $name_err;?&gt;&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group &lt;?php echo (!empty($address_err)) ? 'has-error' : ''; ?&gt;"&gt;
                            &lt;label&gt;Address&lt;/label&gt;
                            &lt;textarea name="address" class="form-control"&gt;&lt;?php echo $address; ?&gt;&lt;/textarea&gt;
                            &lt;span class="help-block"&gt;&lt;?php echo $address_err;?&gt;&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group &lt;?php echo (!empty($salary_err)) ? 'has-error' : ''; ?&gt;"&gt;
                            &lt;label&gt;Salary&lt;/label&gt;
                            &lt;input type="text" name="salary" class="form-control" value="&lt;?php echo $salary; ?&gt;"&gt;
                            &lt;span class="help-block"&gt;&lt;?php echo $salary_err;?&gt;&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;input type="submit" class="btn btn-primary" value="Submit"&gt;
                        &lt;a href="index.php" class="btn btn-default"&gt;Cancel&lt;/a&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
            &lt;/div&gt;        
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;

&lt;?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $address = $salary = "";
$name_err = $address_err = $salary_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=&gt;array("regexp"=&gt;"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Please enter an address.";     
    } else{
        $address = $input_address;
    }
    
    // Validate salary
    $input_salary = trim($_POST["salary"]);
    if(empty($input_salary)){
        $salary_err = "Please enter the salary amount.";     
    } elseif(!ctype_digit($input_salary)){
        $salary_err = "Please enter a positive integer value.";
    } else{
        $salary = $input_salary;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO employees (name, address, salary) VALUES (?, ?, ?)";
 
        if($stmt = $mysqli-&gt;prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt-&gt;bind_param("sss", $param_name, $param_address, $param_salary);
            
            // Set parameters
            $param_name = $name;
            $param_address = $address;
            $param_salary = $salary;
            
            // Attempt to execute the prepared statement
            if($stmt-&gt;execute()){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt-&gt;close();
    }
    
    // Close connection
    $mysqli-&gt;close();
}
?&gt;
 
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Create Record&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;style type="text/css"&gt;
        .rg3-w{
            width: 500px;
            margin: 0 auto;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;div class="container-fluid"&gt;
            &lt;div class="row"&gt;
                &lt;div class="col-md-12"&gt;
                    &lt;div class="page-header"&gt;
                        &lt;h2&gt;Create Record&lt;/h2&gt;
                    &lt;/div&gt;
                    &lt;p&gt;Please fill this form and submit to add employee record to the database.&lt;/p&gt;
                    &lt;form action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?&gt;" method="post"&gt;
                        &lt;div class="form-group &lt;?php echo (!empty($name_err)) ? 'has-error' : ''; ?&gt;"&gt;
                            &lt;label&gt;Name&lt;/label&gt;
                            &lt;input type="text" name="name" class="form-control" value="&lt;?php echo $name; ?&gt;"&gt;
                            &lt;span class="help-block"&gt;&lt;?php echo $name_err;?&gt;&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group &lt;?php echo (!empty($address_err)) ? 'has-error' : ''; ?&gt;"&gt;
                            &lt;label&gt;Address&lt;/label&gt;
                            &lt;textarea name="address" class="form-control"&gt;&lt;?php echo $address; ?&gt;&lt;/textarea&gt;
                            &lt;span class="help-block"&gt;&lt;?php echo $address_err;?&gt;&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group &lt;?php echo (!empty($salary_err)) ? 'has-error' : ''; ?&gt;"&gt;
                            &lt;label&gt;Salary&lt;/label&gt;
                            &lt;input type="text" name="salary" class="form-control" value="&lt;?php echo $salary; ?&gt;"&gt;
                            &lt;span class="help-block"&gt;&lt;?php echo $salary_err;?&gt;&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;input type="submit" class="btn btn-primary" value="Submit"&gt;
                        &lt;a href="index.php" class="btn btn-default"&gt;Cancel&lt;/a&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
            &lt;/div&gt;        
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;

&lt;?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $address = $salary = "";
$name_err = $address_err = $salary_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=&gt;array("regexp"=&gt;"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Please enter an address.";     
    } else{
        $address = $input_address;
    }
    
    // Validate salary
    $input_salary = trim($_POST["salary"]);
    if(empty($input_salary)){
        $salary_err = "Please enter the salary amount.";     
    } elseif(!ctype_digit($input_salary)){
        $salary_err = "Please enter a positive integer value.";
    } else{
        $salary = $input_salary;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO employees (name, address, salary) VALUES (:name, :address, :salary)";
 
        if($stmt = $pdo-&gt;prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt-&gt;bindParam(":name", $param_name);
            $stmt-&gt;bindParam(":address", $param_address);
            $stmt-&gt;bindParam(":salary", $param_salary);
            
            // Set parameters
            $param_name = $name;
            $param_address = $address;
            $param_salary = $salary;
            
            // Attempt to execute the prepared statement
            if($stmt-&gt;execute()){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);
}
?&gt;
 
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Create Record&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;style type="text/css"&gt;
        .rg3-w{
            width: 500px;
            margin: 0 auto;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;div class="container-fluid"&gt;
            &lt;div class="row"&gt;
                &lt;div class="col-md-12"&gt;
                    &lt;div class="page-header"&gt;
                        &lt;h2&gt;Create Record&lt;/h2&gt;
                    &lt;/div&gt;
                    &lt;p&gt;Please fill this form and submit to add employee record to the database.&lt;/p&gt;
                    &lt;form action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?&gt;" method="post"&gt;
                        &lt;div class="form-group &lt;?php echo (!empty($name_err)) ? 'has-error' : ''; ?&gt;"&gt;
                            &lt;label&gt;Name&lt;/label&gt;
                            &lt;input type="text" name="name" class="form-control" value="&lt;?php echo $name; ?&gt;"&gt;
                            &lt;span class="help-block"&gt;&lt;?php echo $name_err;?&gt;&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group &lt;?php echo (!empty($address_err)) ? 'has-error' : ''; ?&gt;"&gt;
                            &lt;label&gt;Address&lt;/label&gt;
                            &lt;textarea name="address" class="form-control"&gt;&lt;?php echo $address; ?&gt;&lt;/textarea&gt;
                            &lt;span class="help-block"&gt;&lt;?php echo $address_err;?&gt;&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group &lt;?php echo (!empty($salary_err)) ? 'has-error' : ''; ?&gt;"&gt;
                            &lt;label&gt;Salary&lt;/label&gt;
                            &lt;input type="text" name="salary" class="form-control" value="&lt;?php echo $salary; ?&gt;"&gt;
                            &lt;span class="help-block"&gt;&lt;?php echo $salary_err;?&gt;&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;input type="submit" class="btn btn-primary" value="Submit"&gt;
                        &lt;a href="index.php" class="btn btn-default"&gt;Cancel&lt;/a&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
            &lt;/div&gt;        
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code4"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
				<p>The same "create.php" file will display the HTML form and process the submitted form data. It will also perform basic validation on user inputs (<i>line no-11 to 37</i>) before saving the data.</p>
				<hr />
				<h2>Creating the Read Page</h2>
				<p>Now it's time to build the <b>R</b>ead functionality of our CRUD application.</p>
				<p>Let's create a file named "read.php" and put the following code inside it. It will simply retrieve the records from the <i>employees</i> table based the id attribute of the employee.</p>
                <div class="example">
                    <div class="my_codeb multi-style-mode">
                        <div class="my_codeb-title">
                        	<h4>Example</h4>
                            <div class="code-style">
                            	<span class="active" data-target="0" data-url="read" title="Show Example Code in MySQLi Procedural Style">Procedural</span> 
                                <span data-target="1" data-url="read-oo-format" title="Show Example Code in MySQLi Object Oriented Style">Object Oriented</span> 
                                <span data-target="2" data-url="read-pdo-format" title="Show Example Code in PDO Style">PDO</span>
                            </div>
                        	<a href="../output_file/bin/read5f50.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
                            <span class="box-size"><i title="Maximize"></i></span>
                        </div>
                        <textarea id="code6">

&lt;?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM employees WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $name = $row["name"];
                $address = $row["address"];
                $salary = $row["salary"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?&gt;
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;View Record&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;style type="text/css"&gt;
        .rg3-w{
            width: 500px;
            margin: 0 auto;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;div class="container-fluid"&gt;
            &lt;div class="row"&gt;
                &lt;div class="col-md-12"&gt;
                    &lt;div class="page-header"&gt;
                        &lt;h1&gt;View Record&lt;/h1&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Name&lt;/label&gt;
                        &lt;p class="form-control-static"&gt;&lt;?php echo $row["name"]; ?&gt;&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Address&lt;/label&gt;
                        &lt;p class="form-control-static"&gt;&lt;?php echo $row["address"]; ?&gt;&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Salary&lt;/label&gt;
                        &lt;p class="form-control-static"&gt;&lt;?php echo $row["salary"]; ?&gt;&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;p&gt;&lt;a href="index.php" class="btn btn-primary"&gt;Back&lt;/a&gt;&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;        
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;

&lt;?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM employees WHERE id = ?";
    
    if($stmt = $mysqli-&gt;prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt-&gt;bind_param("i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if($stmt-&gt;execute()){
            $result = $stmt-&gt;get_result();
            
            if($result-&gt;num_rows == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = $result-&gt;fetch_array(MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $name = $row["name"];
                $address = $row["address"];
                $salary = $row["salary"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    $stmt-&gt;close();
    
    // Close connection
    $mysqli-&gt;close();
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?&gt;
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;View Record&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;style type="text/css"&gt;
        .rg3-w{
            width: 500px;
            margin: 0 auto;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;div class="container-fluid"&gt;
            &lt;div class="row"&gt;
                &lt;div class="col-md-12"&gt;
                    &lt;div class="page-header"&gt;
                        &lt;h1&gt;View Record&lt;/h1&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Name&lt;/label&gt;
                        &lt;p class="form-control-static"&gt;&lt;?php echo $row["name"]; ?&gt;&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Address&lt;/label&gt;
                        &lt;p class="form-control-static"&gt;&lt;?php echo $row["address"]; ?&gt;&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Salary&lt;/label&gt;
                        &lt;p class="form-control-static"&gt;&lt;?php echo $row["salary"]; ?&gt;&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;p&gt;&lt;a href="index.php" class="btn btn-primary"&gt;Back&lt;/a&gt;&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;        
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;

&lt;?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM employees WHERE id = :id";
    
    if($stmt = $pdo-&gt;prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt-&gt;bindParam(":id", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if($stmt-&gt;execute()){
            if($stmt-&gt;rowCount() == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = $stmt-&gt;fetch(PDO::FETCH_ASSOC);
                
                // Retrieve individual field value
                $name = $row["name"];
                $address = $row["address"];
                $salary = $row["salary"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    unset($stmt);
    
    // Close connection
    unset($pdo);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?&gt;
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;View Record&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;style type="text/css"&gt;
        .rg3-w{
            width: 500px;
            margin: 0 auto;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;div class="container-fluid"&gt;
            &lt;div class="row"&gt;
                &lt;div class="col-md-12"&gt;
                    &lt;div class="page-header"&gt;
                        &lt;h1&gt;View Record&lt;/h1&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Name&lt;/label&gt;
                        &lt;p class="form-control-static"&gt;&lt;?php echo $row["name"]; ?&gt;&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Address&lt;/label&gt;
                        &lt;p class="form-control-static"&gt;&lt;?php echo $row["address"]; ?&gt;&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;div class="form-group"&gt;
                        &lt;label&gt;Salary&lt;/label&gt;
                        &lt;p class="form-control-static"&gt;&lt;?php echo $row["salary"]; ?&gt;&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;p&gt;&lt;a href="index.php" class="btn btn-primary"&gt;Back&lt;/a&gt;&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;        
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code6"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
				<hr />
				<h2>Creating the Update Page</h2>
				<p>Similarly, we can build the <b>U</b>pdate functionality of our CRUD application.</p>
				<p>Let's create a file named "update.php" and put the following code inside it. It will update the existing records in the <i>employees</i> table based the id attribute of the employee.</p>
                <div class="example">
                    <div class="my_codeb multi-style-mode">
                        <div class="my_codeb-title">
                        	<h4>Example</h4>
                            <div class="code-style">
                            	<span class="active" data-target="0" data-url="update" title="Show Example Code in MySQLi Procedural Style">Procedural</span> 
                                <span data-target="1" data-url="update-oo-format" title="Show Example Code in MySQLi Object Oriented Style">Object Oriented</span> 
                                <span data-target="2" data-url="update-pdo-format" title="Show Example Code in PDO Style">PDO</span>
                            </div>
                        	<a href="../output_file/bin/update9d22.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
                            <span class="box-size"><i title="Maximize"></i></span>
                        </div>
                        <textarea id="code5">

&lt;?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $address = $salary = "";
$name_err = $address_err = $salary_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=&gt;array("regexp"=&gt;"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate address address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Please enter an address.";     
    } else{
        $address = $input_address;
    }
    
    // Validate salary
    $input_salary = trim($_POST["salary"]);
    if(empty($input_salary)){
        $salary_err = "Please enter the salary amount.";     
    } elseif(!ctype_digit($input_salary)){
        $salary_err = "Please enter a positive integer value.";
    } else{
        $salary = $input_salary;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
        // Prepare an update statement
        $sql = "UPDATE employees SET name=?, address=?, salary=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_name, $param_address, $param_salary, $param_id);
            
            // Set parameters
            $param_name = $name;
            $param_address = $address;
            $param_salary = $salary;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM employees WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $name = $row["name"];
                    $address = $row["address"];
                    $salary = $row["salary"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?&gt;
 
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Update Record&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;style type="text/css"&gt;
        .rg3-w{
            width: 500px;
            margin: 0 auto;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;div class="container-fluid"&gt;
            &lt;div class="row"&gt;
                &lt;div class="col-md-12"&gt;
                    &lt;div class="page-header"&gt;
                        &lt;h2&gt;Update Record&lt;/h2&gt;
                    &lt;/div&gt;
                    &lt;p&gt;Please edit the input values and submit to update the record.&lt;/p&gt;
                    &lt;form action="&lt;?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?&gt;" method="post"&gt;
                        &lt;div class="form-group &lt;?php echo (!empty($name_err)) ? 'has-error' : ''; ?&gt;"&gt;
                            &lt;label&gt;Name&lt;/label&gt;
                            &lt;input type="text" name="name" class="form-control" value="&lt;?php echo $name; ?&gt;"&gt;
                            &lt;span class="help-block"&gt;&lt;?php echo $name_err;?&gt;&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group &lt;?php echo (!empty($address_err)) ? 'has-error' : ''; ?&gt;"&gt;
                            &lt;label&gt;Address&lt;/label&gt;
                            &lt;textarea name="address" class="form-control"&gt;&lt;?php echo $address; ?&gt;&lt;/textarea&gt;
                            &lt;span class="help-block"&gt;&lt;?php echo $address_err;?&gt;&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group &lt;?php echo (!empty($salary_err)) ? 'has-error' : ''; ?&gt;"&gt;
                            &lt;label&gt;Salary&lt;/label&gt;
                            &lt;input type="text" name="salary" class="form-control" value="&lt;?php echo $salary; ?&gt;"&gt;
                            &lt;span class="help-block"&gt;&lt;?php echo $salary_err;?&gt;&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;input type="hidden" name="id" value="&lt;?php echo $id; ?&gt;"/&gt;
                        &lt;input type="submit" class="btn btn-primary" value="Submit"&gt;
                        &lt;a href="index.php" class="btn btn-default"&gt;Cancel&lt;/a&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
            &lt;/div&gt;        
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;

&lt;?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $address = $salary = "";
$name_err = $address_err = $salary_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=&gt;array("regexp"=&gt;"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate address address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Please enter an address.";     
    } else{
        $address = $input_address;
    }
    
    // Validate salary
    $input_salary = trim($_POST["salary"]);
    if(empty($input_salary)){
        $salary_err = "Please enter the salary amount.";     
    } elseif(!ctype_digit($input_salary)){
        $salary_err = "Please enter a positive integer value.";
    } else{
        $salary = $input_salary;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
        // Prepare an update statement
        $sql = "UPDATE employees SET name=?, address=?, salary=? WHERE id=?";
 
        if($stmt = $mysqli-&gt;prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt-&gt;bind_param("sssi", $param_name, $param_address, $param_salary, $param_id);
            
            // Set parameters
            $param_name = $name;
            $param_address = $address;
            $param_salary = $salary;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if($stmt-&gt;execute()){
                // Records updated successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt-&gt;close();
    }
    
    // Close connection
    $mysqli-&gt;close();
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM employees WHERE id = ?";
        if($stmt = $mysqli-&gt;prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt-&gt;bind_param("i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if($stmt-&gt;execute()){
                $result = $stmt-&gt;get_result();
                
                if($result-&gt;num_rows == 1){
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = $result-&gt;fetch_array(MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $name = $row["name"];
                    $address = $row["address"];
                    $salary = $row["salary"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        $stmt-&gt;close();
        
        // Close connection
        $mysqli-&gt;close();
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?&gt;
 
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Update Record&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;style type="text/css"&gt;
        .rg3-w{
            width: 500px;
            margin: 0 auto;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;div class="container-fluid"&gt;
            &lt;div class="row"&gt;
                &lt;div class="col-md-12"&gt;
                    &lt;div class="page-header"&gt;
                        &lt;h2&gt;Update Record&lt;/h2&gt;
                    &lt;/div&gt;
                    &lt;p&gt;Please edit the input values and submit to update the record.&lt;/p&gt;
                    &lt;form action="&lt;?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?&gt;" method="post"&gt;
                        &lt;div class="form-group &lt;?php echo (!empty($name_err)) ? 'has-error' : ''; ?&gt;"&gt;
                            &lt;label&gt;Name&lt;/label&gt;
                            &lt;input type="text" name="name" class="form-control" value="&lt;?php echo $name; ?&gt;"&gt;
                            &lt;span class="help-block"&gt;&lt;?php echo $name_err;?&gt;&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group &lt;?php echo (!empty($address_err)) ? 'has-error' : ''; ?&gt;"&gt;
                            &lt;label&gt;Address&lt;/label&gt;
                            &lt;textarea name="address" class="form-control"&gt;&lt;?php echo $address; ?&gt;&lt;/textarea&gt;
                            &lt;span class="help-block"&gt;&lt;?php echo $address_err;?&gt;&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group &lt;?php echo (!empty($salary_err)) ? 'has-error' : ''; ?&gt;"&gt;
                            &lt;label&gt;Salary&lt;/label&gt;
                            &lt;input type="text" name="salary" class="form-control" value="&lt;?php echo $salary; ?&gt;"&gt;
                            &lt;span class="help-block"&gt;&lt;?php echo $salary_err;?&gt;&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;input type="hidden" name="id" value="&lt;?php echo $id; ?&gt;"/&gt;
                        &lt;input type="submit" class="btn btn-primary" value="Submit"&gt;
                        &lt;a href="index.php" class="btn btn-default"&gt;Cancel&lt;/a&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
            &lt;/div&gt;        
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;

&lt;?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $address = $salary = "";
$name_err = $address_err = $salary_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=&gt;array("regexp"=&gt;"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate address address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Please enter an address.";     
    } else{
        $address = $input_address;
    }
    
    // Validate salary
    $input_salary = trim($_POST["salary"]);
    if(empty($input_salary)){
        $salary_err = "Please enter the salary amount.";     
    } elseif(!ctype_digit($input_salary)){
        $salary_err = "Please enter a positive integer value.";
    } else{
        $salary = $input_salary;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
        // Prepare an update statement
        $sql = "UPDATE employees SET name=:name, address=:address, salary=:salary WHERE id=:id";
 
        if($stmt = $pdo-&gt;prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt-&gt;bindParam(":name", $param_name);
            $stmt-&gt;bindParam(":address", $param_address);
            $stmt-&gt;bindParam(":salary", $param_salary);
            $stmt-&gt;bindParam(":id", $param_id);
            
            // Set parameters
            $param_name = $name;
            $param_address = $address;
            $param_salary = $salary;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if($stmt-&gt;execute()){
                // Records updated successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM employees WHERE id = :id";
        if($stmt = $pdo-&gt;prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt-&gt;bindParam(":id", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if($stmt-&gt;execute()){
                if($stmt-&gt;rowCount() == 1){
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = $stmt-&gt;fetch(PDO::FETCH_ASSOC);
                
                    // Retrieve individual field value
                    $name = $row["name"];
                    $address = $row["address"];
                    $salary = $row["salary"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        unset($stmt);
        
        // Close connection
        unset($pdo);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?&gt;
 
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Update Record&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;style type="text/css"&gt;
        .rg3-w{
            width: 500px;
            margin: 0 auto;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;div class="container-fluid"&gt;
            &lt;div class="row"&gt;
                &lt;div class="col-md-12"&gt;
                    &lt;div class="page-header"&gt;
                        &lt;h2&gt;Update Record&lt;/h2&gt;
                    &lt;/div&gt;
                    &lt;p&gt;Please edit the input values and submit to update the record.&lt;/p&gt;
                    &lt;form action="&lt;?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?&gt;" method="post"&gt;
                        &lt;div class="form-group &lt;?php echo (!empty($name_err)) ? 'has-error' : ''; ?&gt;"&gt;
                            &lt;label&gt;Name&lt;/label&gt;
                            &lt;input type="text" name="name" class="form-control" value="&lt;?php echo $name; ?&gt;"&gt;
                            &lt;span class="help-block"&gt;&lt;?php echo $name_err;?&gt;&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group &lt;?php echo (!empty($address_err)) ? 'has-error' : ''; ?&gt;"&gt;
                            &lt;label&gt;Address&lt;/label&gt;
                            &lt;textarea name="address" class="form-control"&gt;&lt;?php echo $address; ?&gt;&lt;/textarea&gt;
                            &lt;span class="help-block"&gt;&lt;?php echo $address_err;?&gt;&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="form-group &lt;?php echo (!empty($salary_err)) ? 'has-error' : ''; ?&gt;"&gt;
                            &lt;label&gt;Salary&lt;/label&gt;
                            &lt;input type="text" name="salary" class="form-control" value="&lt;?php echo $salary; ?&gt;"&gt;
                            &lt;span class="help-block"&gt;&lt;?php echo $salary_err;?&gt;&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;input type="hidden" name="id" value="&lt;?php echo $id; ?&gt;"/&gt;
                        &lt;input type="submit" class="btn btn-primary" value="Submit"&gt;
                        &lt;a href="index.php" class="btn btn-default"&gt;Cancel&lt;/a&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
            &lt;/div&gt;        
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code5"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>
                    </div>
                </div>
				<hr />
				<h2>Creating the Delete Page</h2>
				<p>Finally, we will build the <b>D</b>elete functionality of our CRUD application.</p>
				<p>Let's create a file named "delete.php" and put the following code inside it. It will delete the existing records from the <i>employees</i> table based the id attribute of the employee.</p>
                <div class="example">
                    <div class="my_codeb multi-style-mode">
                        <div class="my_codeb-title">
                        	<h4>Example</h4>
                            <div class="code-style">
                            	<span class="active" data-target="0" data-url="delete" title="Show Example Code in MySQLi Procedural Style">Procedural</span> 
                                <span data-target="1" data-url="delete-oo-format" title="Show Example Code in MySQLi Object Oriented Style">Object Oriented</span> 
                                <span data-target="2" data-url="delete-pdo-format" title="Show Example Code in PDO Style">PDO</span>
                            </div>
                        	<a href="../output_file/bin/delete60ec.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
                            <span class="box-size"><i title="Maximize"></i></span>
                        </div>
                        <textarea id="code7">

&lt;?php
// Process delete operation after confirmation
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Include config file
    require_once "config.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM employees WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: index.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter
    if(empty(trim($_GET["id"]))){
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?&gt;
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;View Record&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;style type="text/css"&gt;
        .rg3-w{
            width: 500px;
            margin: 0 auto;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;div class="container-fluid"&gt;
            &lt;div class="row"&gt;
                &lt;div class="col-md-12"&gt;
                    &lt;div class="page-header"&gt;
                        &lt;h1&gt;Delete Record&lt;/h1&gt;
                    &lt;/div&gt;
                    &lt;form action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?&gt;" method="post"&gt;
                        &lt;div class="alert alert-danger fade in"&gt;
                            &lt;input type="hidden" name="id" value="&lt;?php echo trim($_GET["id"]); ?&gt;"/&gt;
                            &lt;p&gt;Are you sure you want to delete this record?&lt;/p&gt;&lt;br&gt;
                            &lt;p&gt;
                                &lt;input type="submit" value="Yes" class="btn btn-danger"&gt;
                                &lt;a href="index.php" class="btn btn-default"&gt;No&lt;/a&gt;
                            &lt;/p&gt;
                        &lt;/div&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
            &lt;/div&gt;        
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;

&lt;?php
// Process delete operation after confirmation
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Include config file
    require_once "config.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM employees WHERE id = ?";
    
    if($stmt = $mysqli-&gt;prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt-&gt;bind_param("i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["id"]);
        
        // Attempt to execute the prepared statement
        if($stmt-&gt;execute()){
            // Records deleted successfully. Redirect to landing page
            header("location: index.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    $stmt-&gt;close();
    
    // Close connection
    $mysqli-&gt;close();
} else{
    // Check existence of id parameter
    if(empty(trim($_GET["id"]))){
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?&gt;
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;View Record&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;style type="text/css"&gt;
        .rg3-w{
            width: 500px;
            margin: 0 auto;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;div class="container-fluid"&gt;
            &lt;div class="row"&gt;
                &lt;div class="col-md-12"&gt;
                    &lt;div class="page-header"&gt;
                        &lt;h1&gt;Delete Record&lt;/h1&gt;
                    &lt;/div&gt;
                    &lt;form action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?&gt;" method="post"&gt;
                        &lt;div class="alert alert-danger fade in"&gt;
                            &lt;input type="hidden" name="id" value="&lt;?php echo trim($_GET["id"]); ?&gt;"/&gt;
                            &lt;p&gt;Are you sure you want to delete this record?&lt;/p&gt;&lt;br&gt;
                            &lt;p&gt;
                                &lt;input type="submit" value="Yes" class="btn btn-danger"&gt;
                                &lt;a href="index.php" class="btn btn-default"&gt;No&lt;/a&gt;
                            &lt;/p&gt;
                        &lt;/div&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
            &lt;/div&gt;        
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;

&lt;?php
// Process delete operation after confirmation
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Include config file
    require_once "config.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM employees WHERE id = :id";
    
    if($stmt = $pdo-&gt;prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt-&gt;bindParam(":id", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["id"]);
        
        // Attempt to execute the prepared statement
        if($stmt-&gt;execute()){
            // Records deleted successfully. Redirect to landing page
            header("location: index.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    unset($stmt);
    
    // Close connection
    unset($pdo);
} else{
    // Check existence of id parameter
    if(empty(trim($_GET["id"]))){
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?&gt;
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;View Record&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;style type="text/css"&gt;
        .rg3-w{
            width: 500px;
            margin: 0 auto;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;div class="container-fluid"&gt;
            &lt;div class="row"&gt;
                &lt;div class="col-md-12"&gt;
                    &lt;div class="page-header"&gt;
                        &lt;h1&gt;Delete Record&lt;/h1&gt;
                    &lt;/div&gt;
                    &lt;form action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?&gt;" method="post"&gt;
                        &lt;div class="alert alert-danger fade in"&gt;
                            &lt;input type="hidden" name="id" value="&lt;?php echo trim($_GET["id"]); ?&gt;"/&gt;
                            &lt;p&gt;Are you sure you want to delete this record?&lt;/p&gt;&lt;br&gt;
                            &lt;p&gt;
                                &lt;input type="submit" value="Yes" class="btn btn-danger"&gt;
                                &lt;a href="index.php" class="btn btn-default"&gt;No&lt;/a&gt;
                            &lt;/p&gt;
                        &lt;/div&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
            &lt;/div&gt;        
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code7"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>
                    </div>
                </div>
				<hr />				
				<h2>Creating the Error Page</h2>
				<p>At the end, let's create one more file "error.php". This page will be displayed if request is invalid i.e. if id parameter is missing from the URL query string or it is not valid.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/error68bc.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code8">

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Error&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;style type="text/css"&gt;
        .rg3-w{
            width: 750px;
            margin: 0 auto;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;div class="container-fluid"&gt;
            &lt;div class="row"&gt;
                &lt;div class="col-md-12"&gt;
                    &lt;div class="page-header"&gt;
                        &lt;h1&gt;Invalid Request&lt;/h1&gt;
                    &lt;/div&gt;
                    &lt;div class="alert alert-danger fade in"&gt;
                        &lt;p&gt;Sorry, you've made an invalid request. Please &lt;a href="index.php" class="alert-link"&gt;go back&lt;/a&gt; and try again.&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;        
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code8"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>					</div>
                </div>
				<p>After a long journey finally we've finished our CRUD application with PHP and MySQL. We recommend you to check out <a href="bp_mysql-introduction.php">PHP &amp; MySQL database</a> tutorial section from the beginning, if you haven't already covered, for a better understanding of each and every part of this tutorial.</p>
                <div class="bottom-link clearfix">
                    <a href="bp_mysql-delete-query.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_mysql-ajax-live-search.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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