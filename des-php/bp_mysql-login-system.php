<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Creating a User Login System with PHP and MySQL">
	  <meta name="keywords" content="php,php basicmCreating a User Login System with PHP and MySQL">
	  <meta name="author" content="webschooltoday.com">
    <title>Creating a User Login System with PHP and MySQL - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to create a simple user registration and login system using PHP and MySQL." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Creating a User Login System with PHP and MySQL</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="../bp_examples.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_mysql-ajax-live-search.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP MySQL <span>Login System</span></h1>
                <p class="summary">In this tutorial you will learn how to build a login system with PHP and MySQL.</p>
                <h2>Implementing User Authentication Mechanism</h2>
                <p>User authentication is very common in modern web application. It is a security mechanism that is used to restrict unauthorized access to member-only areas and tools on a site.</p>
				<p class="space">In this tutorial we'll create a simple registration and login system using the PHP and MySQL. This tutorial is comprised of two parts: in the first part we'll create a user registration form, and in the second part we'll create a login form, as well as a welcome page and a logout script.</p>
                <h2>Building the Registration System</h2>
				<p>In this section we'll build a registration system that allows users to create a new account by filling out a web form. But, first we need to create a table that will hold all the user data.</p>
				<h3>Step 1: Creating the Database Table</h3>
				<p>Execute the following SQL query to create the <i>users</i> table inside your MySQL database.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/downloads/users-table.zip" target="_top" class="download-btn" title="Download Users Table"><span>Download</span></a></div>
                        <textarea id="code1">

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);</code>
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
				<h3>Step 2: Creating the Config File</h3>
				<p>After creating the table, we need create a PHP script in order to connect to the MySQL database server. Let's create a file named "config.php" and put the following code inside it.</p>
                <div class="example">
                    <div class="my_codeb multi-style-mode">
                        <div class="my_codeb-title">
                        	<h4>Example</h4>
                            <div class="code-style">
                            	<span class="active" data-target="0" data-url="config" title="Show Example Code in Procedural Style">Procedural</span> 
                                <span data-target="1" data-url="config-oo-format" title="Show Example Code in Object Oriented Style">Object Oriented</span> 
                                <span data-target="2" data-url="config-pdo-format" title="Show Example Code in PDO Style">PDO</span>
                            </div>
                        	<a href="../output_file/bin/configfd49.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
                            <span class="box-size"><i title="Maximize"></i></span>
                        </div>
						<pre class="syntax-highlighter line-numbers scroll large"><code class="language-php">&lt;?php
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
?&gt;</code></pre>
						<pre class="syntax-highlighter line-numbers scroll large hide"><code class="language-php">&lt;?php
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
?&gt;</code></pre>
						<pre class="syntax-highlighter line-numbers scroll large hide"><code class="language-php">&lt;?php
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
?&gt;</code></pre>
                    </div>
                </div>
                <!--End:Code box-->
				<p>If you've downloaded the Object Oriented or PDO code examples using the download button, please remove the text "-oo-format" or "-pdo-format" from file names before testing the code.</p>
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> Replace the credentials according to your MySQL server setting before testing this code, for example, replace the database name 'demo' with your own database name, replace username 'root' with your own database username, specify database password if there's any.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<h3>Step 3: Creating the Registration Form</h3>
				<p>Let's create another PHP file "register.php" and put the following example code in it. This example code will create a web form that allows user to register themselves.</p>
				<p>This script will also generate errors if a user tries to submit the form without entering any value, or if username entered by the user is already taken by another user.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb multi-style-mode">
                        <div class="my_codeb-title">
                        	<h4>Example</h4>
                            <div class="code-style">
                            	<span class="active" data-target="0" data-url="register" title="Show Example Code in Procedural Style">Procedural</span> 
                                <span data-target="1" data-url="register-oo-format" title="Show Example Code in Object Oriented Style">Object Oriented</span> 
                                <span data-target="2" data-url="register-pdo-format" title="Show Example Code in PDO Style">PDO</span>
                            </div>
                        	<a href="../output_file/bin/register08db.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
                            <span class="box-size"><i title="Maximize"></i></span>
                        </div>
                        <textarea id="code2">

&lt;?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) &lt; 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?&gt;
 
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Sign Up&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;style type="text/css"&gt;
        body{ font: 14px sans-serif; }
        .rg3-w{ width: 350px; padding: 20px; }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;h2&gt;Sign Up&lt;/h2&gt;
        &lt;p&gt;Please fill this form to create an account.&lt;/p&gt;
        &lt;form action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?&gt;" method="post"&gt;
            &lt;div class="form-group &lt;?php echo (!empty($username_err)) ? 'has-error' : ''; ?&gt;"&gt;
                &lt;label&gt;Username&lt;/label&gt;
                &lt;input type="text" name="username" class="form-control" value="&lt;?php echo $username; ?&gt;"&gt;
                &lt;span class="help-block"&gt;&lt;?php echo $username_err; ?&gt;&lt;/span&gt;
            &lt;/div&gt;    
            &lt;div class="form-group &lt;?php echo (!empty($password_err)) ? 'has-error' : ''; ?&gt;"&gt;
                &lt;label&gt;Password&lt;/label&gt;
                &lt;input type="password" name="password" class="form-control" value="&lt;?php echo $password; ?&gt;"&gt;
                &lt;span class="help-block"&gt;&lt;?php echo $password_err; ?&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="form-group &lt;?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?&gt;"&gt;
                &lt;label&gt;Confirm Password&lt;/label&gt;
                &lt;input type="password" name="confirm_password" class="form-control" value="&lt;?php echo $confirm_password; ?&gt;"&gt;
                &lt;span class="help-block"&gt;&lt;?php echo $confirm_password_err; ?&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="form-group"&gt;
                &lt;input type="submit" class="btn btn-primary" value="Submit"&gt;
                &lt;input type="reset" class="btn btn-default" value="Reset"&gt;
            &lt;/div&gt;
            &lt;p&gt;Already have an account? &lt;a href="login.php"&gt;Login here&lt;/a&gt;.&lt;/p&gt;
        &lt;/form&gt;
    &lt;/div&gt;    
&lt;/body&gt;
&lt;/html&gt;

&lt;?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = $mysqli-&gt;prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt-&gt;bind_param("s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt-&gt;execute()){
                // store result
                $stmt-&gt;store_result();
                
                if($stmt-&gt;num_rows == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt-&gt;close();
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) &lt; 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = $mysqli-&gt;prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt-&gt;bind_param("ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt-&gt;execute()){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt-&gt;close();
        }
    }
    
    // Close connection
    $mysqli-&gt;close();
}
?&gt;
 
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Sign Up&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;style type="text/css"&gt;
        body{ font: 14px sans-serif; }
        .rg3-w{ width: 350px; padding: 20px; }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;h2&gt;Sign Up&lt;/h2&gt;
        &lt;p&gt;Please fill this form to create an account.&lt;/p&gt;
        &lt;form action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?&gt;" method="post"&gt;
            &lt;div class="form-group &lt;?php echo (!empty($username_err)) ? 'has-error' : ''; ?&gt;"&gt;
                &lt;label&gt;Username&lt;/label&gt;
                &lt;input type="text" name="username" class="form-control" value="&lt;?php echo $username; ?&gt;"&gt;
                &lt;span class="help-block"&gt;&lt;?php echo $username_err; ?&gt;&lt;/span&gt;
            &lt;/div&gt;    
            &lt;div class="form-group &lt;?php echo (!empty($password_err)) ? 'has-error' : ''; ?&gt;"&gt;
                &lt;label&gt;Password&lt;/label&gt;
                &lt;input type="password" name="password" class="form-control" value="&lt;?php echo $password; ?&gt;"&gt;
                &lt;span class="help-block"&gt;&lt;?php echo $password_err; ?&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="form-group &lt;?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?&gt;"&gt;
                &lt;label&gt;Confirm Password&lt;/label&gt;
                &lt;input type="password" name="confirm_password" class="form-control" value="&lt;?php echo $confirm_password; ?&gt;"&gt;
                &lt;span class="help-block"&gt;&lt;?php echo $confirm_password_err; ?&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="form-group"&gt;
                &lt;input type="submit" class="btn btn-primary" value="Submit"&gt;
                &lt;input type="reset" class="btn btn-default" value="Reset"&gt;
            &lt;/div&gt;
            &lt;p&gt;Already have an account? &lt;a href="login.php"&gt;Login here&lt;/a&gt;.&lt;/p&gt;
        &lt;/form&gt;
    &lt;/div&gt;    
&lt;/body&gt;
&lt;/html&gt;

&lt;?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = :username";
        
        if($stmt = $pdo-&gt;prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt-&gt;bindParam(":username", $param_username, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt-&gt;execute()){
                if($stmt-&gt;rowCount() == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) &lt; 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
         
        if($stmt = $pdo-&gt;prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt-&gt;bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt-&gt;bindParam(":password", $param_password, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt-&gt;execute()){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Close connection
    unset($pdo);
}
?&gt;
 
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Sign Up&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;style type="text/css"&gt;
        body{ font: 14px sans-serif; }
        .rg3-w{ width: 350px; padding: 20px; }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;h2&gt;Sign Up&lt;/h2&gt;
        &lt;p&gt;Please fill this form to create an account.&lt;/p&gt;
        &lt;form action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?&gt;" method="post"&gt;
            &lt;div class="form-group &lt;?php echo (!empty($username_err)) ? 'has-error' : ''; ?&gt;"&gt;
                &lt;label&gt;Username&lt;/label&gt;
                &lt;input type="text" name="username" class="form-control" value="&lt;?php echo $username; ?&gt;"&gt;
                &lt;span class="help-block"&gt;&lt;?php echo $username_err; ?&gt;&lt;/span&gt;
            &lt;/div&gt;    
            &lt;div class="form-group &lt;?php echo (!empty($password_err)) ? 'has-error' : ''; ?&gt;"&gt;
                &lt;label&gt;Password&lt;/label&gt;
                &lt;input type="password" name="password" class="form-control" value="&lt;?php echo $password; ?&gt;"&gt;
                &lt;span class="help-block"&gt;&lt;?php echo $password_err; ?&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="form-group &lt;?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?&gt;"&gt;
                &lt;label&gt;Confirm Password&lt;/label&gt;
                &lt;input type="password" name="confirm_password" class="form-control" value="&lt;?php echo $confirm_password; ?&gt;"&gt;
                &lt;span class="help-block"&gt;&lt;?php echo $confirm_password_err; ?&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="form-group"&gt;
                &lt;input type="submit" class="btn btn-primary" value="Submit"&gt;
                &lt;input type="reset" class="btn btn-default" value="Reset"&gt;
            &lt;/div&gt;
            &lt;p&gt;Already have an account? &lt;a href="login.php"&gt;Login here&lt;/a&gt;.&lt;/p&gt;
        &lt;/form&gt;
    &lt;/div&gt;    
&lt;/body&gt;
&lt;/html&gt;
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
				<p class="break">&mdash; The output of the above example (i.e. signup form) will look something like this:</p>
				<div class="shadow">
                    <div class="preview-box unclickable">
						<img src="../assets/images/register1.png" width="655" height="345" style="margin: 10px auto;" alt="PHP Signup Form">
                    </div>
                </div>
				<p>In the above example, we've used the PHP <code>password_hash()</code> function to create password hash from the password string entered by the user (<i>line no-75</i>). This function creates a password hash using a strong one-way hashing algorithm. It also generates and applies a random salt automatically when hashing the password; this means that even if two users have the same passwords, their password hashes will be different.</p>
				<p>At the time of login we'll verify the given password with the password hash stored in the database using the PHP <code>password_verify()</code> function, as demonstrated in the next example.</p>
				<p>We've used the Bootstrap framework to make the <a href="../twitter-bootstrap-tutorial/bootstrap-forms.php">form layouts</a> quickly and beautifully. Please, checkout the <a href="../twitter-bootstrap-tutorial/index.php">Bootstrap tutorial</a> section to learn more about this framework.</p>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> Password salting is a technique which is widely used to secure passwords by randomizing password hashes, so that if two users have the same password, they will not have the same password hashes. This is done by appending or prepending a random string, called a salt, to the password before hashing.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Building the Login System</h2>
				<p>In this section we'll create a login form where user can enter their username and password. When user submit the form these inputs will be verified against the credentials stored in the database, if the username and password match, the user is authorized and granted access to the site, otherwise the login attempt will be rejected.</p>
				<h3>Step 1: Creating the Login Form</h3>
				<p>Let's create a file named "login.php" and place the following code inside it.</p>
                <div class="example">
                    <div class="my_codeb multi-style-mode">
                        <div class="my_codeb-title">
                        	<h4>Example</h4>
                            <div class="code-style">
                            	<span class="active" data-target="0" data-url="login" title="Show Example Code in Procedural Style">Procedural</span> 
                                <span data-target="1" data-url="login-oo-format" title="Show Example Code in Object Oriented Style">Object Oriented</span> 
                                <span data-target="2" data-url="login-pdo-format" title="Show Example Code in PDO Style">PDO</span>
                            </div>
                        	<a href="../output_file/bin/login581f.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
                            <span class="box-size"><i title="Maximize"></i></span>
                        </div>
                        <textarea id="code3">

&lt;?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?&gt;
 
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Login&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;style type="text/css"&gt;
        body{ font: 14px sans-serif; }
        .rg3-w{ width: 350px; padding: 20px; }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;h2&gt;Login&lt;/h2&gt;
        &lt;p&gt;Please fill in your credentials to login.&lt;/p&gt;
        &lt;form action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?&gt;" method="post"&gt;
            &lt;div class="form-group &lt;?php echo (!empty($username_err)) ? 'has-error' : ''; ?&gt;"&gt;
                &lt;label&gt;Username&lt;/label&gt;
                &lt;input type="text" name="username" class="form-control" value="&lt;?php echo $username; ?&gt;"&gt;
                &lt;span class="help-block"&gt;&lt;?php echo $username_err; ?&gt;&lt;/span&gt;
            &lt;/div&gt;    
            &lt;div class="form-group &lt;?php echo (!empty($password_err)) ? 'has-error' : ''; ?&gt;"&gt;
                &lt;label&gt;Password&lt;/label&gt;
                &lt;input type="password" name="password" class="form-control"&gt;
                &lt;span class="help-block"&gt;&lt;?php echo $password_err; ?&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="form-group"&gt;
                &lt;input type="submit" class="btn btn-primary" value="Login"&gt;
            &lt;/div&gt;
            &lt;p&gt;Don't have an account? &lt;a href="register.php"&gt;Sign up now&lt;/a&gt;.&lt;/p&gt;
        &lt;/form&gt;
    &lt;/div&gt;    
&lt;/body&gt;
&lt;/html&gt;

&lt;?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = $mysqli-&gt;prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt-&gt;bind_param("s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if($stmt-&gt;execute()){
                // Store result
                $stmt-&gt;store_result();
                
                // Check if username exists, if yes then verify password
                if($stmt-&gt;num_rows == 1){                    
                    // Bind result variables
                    $stmt-&gt;bind_result($id, $username, $hashed_password);
                    if($stmt-&gt;fetch()){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt-&gt;close();
        }
    }
    
    // Close connection
    $mysqli-&gt;close();
}
?&gt;
 
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Login&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;style type="text/css"&gt;
        body{ font: 14px sans-serif; }
        .rg3-w{ width: 350px; padding: 20px; }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;h2&gt;Login&lt;/h2&gt;
        &lt;p&gt;Please fill in your credentials to login.&lt;/p&gt;
        &lt;form action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?&gt;" method="post"&gt;
            &lt;div class="form-group &lt;?php echo (!empty($username_err)) ? 'has-error' : ''; ?&gt;"&gt;
                &lt;label&gt;Username&lt;/label&gt;
                &lt;input type="text" name="username" class="form-control" value="&lt;?php echo $username; ?&gt;"&gt;
                &lt;span class="help-block"&gt;&lt;?php echo $username_err; ?&gt;&lt;/span&gt;
            &lt;/div&gt;    
            &lt;div class="form-group &lt;?php echo (!empty($password_err)) ? 'has-error' : ''; ?&gt;"&gt;
                &lt;label&gt;Password&lt;/label&gt;
                &lt;input type="password" name="password" class="form-control"&gt;
                &lt;span class="help-block"&gt;&lt;?php echo $password_err; ?&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="form-group"&gt;
                &lt;input type="submit" class="btn btn-primary" value="Login"&gt;
            &lt;/div&gt;
            &lt;p&gt;Don't have an account? &lt;a href="register.php"&gt;Sign up now&lt;/a&gt;.&lt;/p&gt;
        &lt;/form&gt;
    &lt;/div&gt;    
&lt;/body&gt;
&lt;/html&gt;

&lt;?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = :username";
        
        if($stmt = $pdo-&gt;prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt-&gt;bindParam(":username", $param_username, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt-&gt;execute()){
                // Check if username exists, if yes then verify password
                if($stmt-&gt;rowCount() == 1){
                    if($row = $stmt-&gt;fetch()){
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["password"];
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Close connection
    unset($pdo);
}
?&gt;
 
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Login&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;style type="text/css"&gt;
        body{ font: 14px sans-serif; }
        .rg3-w{ width: 350px; padding: 20px; }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;h2&gt;Login&lt;/h2&gt;
        &lt;p&gt;Please fill in your credentials to login.&lt;/p&gt;
        &lt;form action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?&gt;" method="post"&gt;
            &lt;div class="form-group &lt;?php echo (!empty($username_err)) ? 'has-error' : ''; ?&gt;"&gt;
                &lt;label&gt;Username&lt;/label&gt;
                &lt;input type="text" name="username" class="form-control" value="&lt;?php echo $username; ?&gt;"&gt;
                &lt;span class="help-block"&gt;&lt;?php echo $username_err; ?&gt;&lt;/span&gt;
            &lt;/div&gt;    
            &lt;div class="form-group &lt;?php echo (!empty($password_err)) ? 'has-error' : ''; ?&gt;"&gt;
                &lt;label&gt;Password&lt;/label&gt;
                &lt;input type="password" name="password" class="form-control"&gt;
                &lt;span class="help-block"&gt;&lt;?php echo $password_err; ?&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="form-group"&gt;
                &lt;input type="submit" class="btn btn-primary" value="Login"&gt;
            &lt;/div&gt;
            &lt;p&gt;Don't have an account? &lt;a href="register.php"&gt;Sign up now&lt;/a&gt;.&lt;/p&gt;
        &lt;/form&gt;
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
				<p class="break">&mdash; The output of the above example (i.e. login form) will look something like this:</p>
				<div class="shadow">
                    <div class="preview-box unclickable">
						<img src="../lib/images/bp_login-form.png" width="655" height="277" style="margin: 10px auto;" alt="PHP Login Form">
                    </div>
                </div>
				<h3>Step 2: Creating the Welcome Page</h3>
				<p>Here's the code of our "welcome.php" file, where user is redirected after successful login.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/welcomede14.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code4">

&lt;?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?&gt;
 
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Welcome&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;style type="text/css"&gt;
        body{ font: 14px sans-serif; text-align: center; }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="page-header"&gt;
        &lt;h1&gt;Hi, &lt;b&gt;&lt;?php echo htmlspecialchars($_SESSION["username"]); ?&gt;&lt;/b&gt;. Welcome to our site.&lt;/h1&gt;
    &lt;/div&gt;
    &lt;p&gt;
        &lt;a href="reset-password.php" class="btn btn-warning"&gt;Reset Your Password&lt;/a&gt;
        &lt;a href="logout.php" class="btn btn-danger"&gt;Sign Out of Your Account&lt;/a&gt;
    &lt;/p&gt;
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

							</script>
                    </div>
                </div>
				<p>If data comes from external sources like form filled in by anonymous users, there is a risk that it may contain malicious script indented to launch cross-site scripting (XSS) attacks. Therefore, you must escape this data using the PHP <code>htmlspecialchars()</code> function before displaying it in the browser, so that any HTML tag it contains becomes harmless.</p>
				<p>For example, after escaping special characters the string <code>&lt;script&gt;alert("XSS")&lt;/script&gt;</code> becomes <code style="word-break: break-all;">&amp;lt;script&amp;gt;alert("XSS")&amp;lt;/script&amp;gt;</code> which is not executed by the browser.</p>
				<h3>Step 3: Creating the Logout Script</h3>
				<p>Now, let's create a "logout.php" file. When the user clicks on the log out or sign out link, the script inside this file destroys the session and redirect the user back to the login page.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/logout5f5f.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code5">

&lt;?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: login.php");
exit;
?&gt;
 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code5"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
				<hr />
				<h2>Adding the Password Reset Feature</h2>
				<p>Finally, in this section we will add the password reset utility to our login system. Using this feature <em>logged in users</em> can instantly reset their own password for their accounts.</p>
				<p>Let's create a file named "reset-password.php" and place the following code inside it.</p>
                <div class="example">
                    <div class="my_codeb multi-style-mode">
                        <div class="my_codeb-title">
                        	<h4>Example</h4>
                            <div class="code-style">
                            	<span class="active" data-target="0" data-url="reset-password" title="Show Example Code in Procedural Style">Procedural</span> 
                                <span data-target="1" data-url="reset-password-oo-format" title="Show Example Code in Object Oriented Style">Object Oriented</span> 
                                <span data-target="2" data-url="reset-password-pdo-format" title="Show Example Code in PDO Style">PDO</span>
                            </div>
                        	<a href="../output_file/bin/reset-passwordcbca.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
                            <span class="box-size"><i title="Maximize"></i></span>
                        </div>
                        <textarea id="code6">

&lt;?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) &lt; 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?&gt;
 
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Reset Password&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;style type="text/css"&gt;
        body{ font: 14px sans-serif; }
        .rg3-w{ width: 350px; padding: 20px; }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;h2&gt;Reset Password&lt;/h2&gt;
        &lt;p&gt;Please fill out this form to reset your password.&lt;/p&gt;
        &lt;form action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?&gt;" method="post"&gt; 
            &lt;div class="form-group &lt;?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?&gt;"&gt;
                &lt;label&gt;New Password&lt;/label&gt;
                &lt;input type="password" name="new_password" class="form-control" value="&lt;?php echo $new_password; ?&gt;"&gt;
                &lt;span class="help-block"&gt;&lt;?php echo $new_password_err; ?&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="form-group &lt;?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?&gt;"&gt;
                &lt;label&gt;Confirm Password&lt;/label&gt;
                &lt;input type="password" name="confirm_password" class="form-control"&gt;
                &lt;span class="help-block"&gt;&lt;?php echo $confirm_password_err; ?&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="form-group"&gt;
                &lt;input type="submit" class="btn btn-primary" value="Submit"&gt;
                &lt;a class="btn btn-link" href="welcome.php"&gt;Cancel&lt;/a&gt;
            &lt;/div&gt;
        &lt;/form&gt;
    &lt;/div&gt;    
&lt;/body&gt;
&lt;/html&gt;
&lt;?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) &lt; 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = $mysqli-&gt;prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt-&gt;bind_param("si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if($stmt-&gt;execute()){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt-&gt;close();
        }
    }
    
    // Close connection
    $mysqli-&gt;close();
}
?&gt;
 
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Reset Password&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;style type="text/css"&gt;
        body{ font: 14px sans-serif; }
        .rg3-w{ width: 350px; padding: 20px; }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;h2&gt;Reset Password&lt;/h2&gt;
        &lt;p&gt;Please fill out this form to reset your password.&lt;/p&gt;
        &lt;form action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?&gt;" method="post"&gt; 
            &lt;div class="form-group &lt;?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?&gt;"&gt;
                &lt;label&gt;New Password&lt;/label&gt;
                &lt;input type="password" name="new_password" class="form-control" value="&lt;?php echo $new_password; ?&gt;"&gt;
                &lt;span class="help-block"&gt;&lt;?php echo $new_password_err; ?&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="form-group &lt;?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?&gt;"&gt;
                &lt;label&gt;Confirm Password&lt;/label&gt;
                &lt;input type="password" name="confirm_password" class="form-control"&gt;
                &lt;span class="help-block"&gt;&lt;?php echo $confirm_password_err; ?&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="form-group"&gt;
                &lt;input type="submit" class="btn btn-primary" value="Submit"&gt;
                &lt;a class="btn btn-link" href="welcome.php"&gt;Cancel&lt;/a&gt;
            &lt;/div&gt;
        &lt;/form&gt;
    &lt;/div&gt;    
&lt;/body&gt;
&lt;/html&gt;

&lt;?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) &lt; 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = :password WHERE id = :id";
        
        if($stmt = $pdo-&gt;prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt-&gt;bindParam(":password", $param_password, PDO::PARAM_STR);
            $stmt-&gt;bindParam(":id", $param_id, PDO::PARAM_INT);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if($stmt-&gt;execute()){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: login.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Close connection
    unset($pdo);
}
?&gt;
 
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Reset Password&lt;/title&gt;
    &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"&gt;
    &lt;style type="text/css"&gt;
        body{ font: 14px sans-serif; }
        .rg3-w{ width: 350px; padding: 20px; }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="rg3-w"&gt;
        &lt;h2&gt;Reset Password&lt;/h2&gt;
        &lt;p&gt;Please fill out this form to reset your password.&lt;/p&gt;
        &lt;form action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?&gt;" method="post"&gt; 
            &lt;div class="form-group &lt;?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?&gt;"&gt;
                &lt;label&gt;New Password&lt;/label&gt;
                &lt;input type="password" name="new_password" class="form-control" value="&lt;?php echo $new_password; ?&gt;"&gt;
                &lt;span class="help-block"&gt;&lt;?php echo $new_password_err; ?&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="form-group &lt;?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?&gt;"&gt;
                &lt;label&gt;Confirm Password&lt;/label&gt;
                &lt;input type="password" name="confirm_password" class="form-control"&gt;
                &lt;span class="help-block"&gt;&lt;?php echo $confirm_password_err; ?&gt;&lt;/span&gt;
            &lt;/div&gt;
            &lt;div class="form-group"&gt;
                &lt;input type="submit" class="btn btn-primary" value="Submit"&gt;
                &lt;a class="btn btn-link" href="welcome.php"&gt;Cancel&lt;/a&gt;
            &lt;/div&gt;
        &lt;/form&gt;
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

							</script>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_mysql-ajax-live-search.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="../bp_examples.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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