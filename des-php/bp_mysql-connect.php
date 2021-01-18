<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Connect to MySQL Server through PHP (MySQLi vs. PDO)">
	  <meta name="keywords" content="php,php basic,How to Connect to MySQL Server through PHP (MySQLi vs. PDO)">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Connect to MySQL Server through PHP (MySQLi vs. PDO) - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to connect to the MySQL database server using PHP." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Connect to MySQL Server through PHP (MySQLi vs. PDO)</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_mysql-create-database.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_mysql-introduction.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Connect</span> to <span>MySQL Server</span></h1>
                <p class="summary">In this tutorial you will learn how to connect to the MySQL server using PHP.</p>
                <h2>Ways of Connecting to MySQL through PHP</h2>				
                <p>In order to store or access the data inside a MySQL database, you first need to connect to the MySQL database server. PHP offers two different ways to connect to MySQL server: <strong>MySQLi</strong> (Improved MySQL) and <strong>PDO</strong> (PHP Data Objects) extensions.</p>
				<p>While the PDO extension is more portable and supports more than twelve different databases, MySQLi extension as the name suggests supports MySQL database only. MySQLi extension however provides an easier way to connect to, and execute queries on, a MySQL database server. Both PDO and MySQLi offer an object-oriented API, but MySQLi also offers a procedural API which is relatively easy for beginners to understand.</p>
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> The PHP's MySQLi extension provides both speed and feature benefits over the PDO extension, so it could be a better choice for MySQL-specific projects.</p>
                        </div>
                    </div>
                </div>
				<hr />
				<h2>Connecting to MySQL Database Server</h2>
				<p>In PHP you can easily do this using the <code>mysqli_connect()</code> function. All communication between PHP and the MySQL database server takes place through this connection. Here're the basic syntaxes for connecting to MySQL using MySQLi and PDO extensions:</p>
				<h4>Syntax: MySQLi, Procedural way</h4>
				<div class="green-box space">
					$link = <span class="keyword">mysqli_connect</span>("hostname", "username", "password", "database");
				</div>
				<h4>Syntax: MySQLi, Object Oriented way</h4>
				<div class="pink-box space">
					$mysqli = new <span class="keyword">mysqli</span>("hostname", "username", "password", "database");
				</div>
				<h4>Syntax: PHP Data Objects (PDO) way</h4>
				<div class="sky-box break">
					$pdo = new <span class="keyword">PDO</span>("mysql:host=hostname;dbname=database", "username", "password");
				</div>
				<p>The <i>hostname</i> parameter in the above syntax specify the host name (e.g. <code>localhost</code>), or IP&nbsp;address of the MySQL server, whereas the <i>username</i> and <i>password</i> parameters specifies the credentials to access MySQL server, and the <i>database</i> parameter, if provided will specify the default MySQL database to be used when performing queries.</p>
				<p>The following example shows how to connect to MySQL database server using MySQLi (both <em>procedural</em> and <em>object oriented</em> way) and PDO extension.</p>
				<div class="example">
					<div class="my_codeb multi-style-mode">
						<div class="my_codeb-title">
                        	<h4>Example</h4>
                            <div class="code-style">
                            	<span class="active" data-target="0" data-url="connect-to-mysql-database-server">Procedural</span> 
                                <span data-target="1" data-url="connect-to-mysql-database-server-oo-format">Object Oriented</span> 
                                <span data-target="2" data-url="connect-to-mysql-database-server-pdo-format">PDO</span>
                            </div>
                            <a href="../output_file/bin/connect-to-mysql-database-server3a0b.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
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
 
// Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
?&gt;

&lt;?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "demo");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
// Print host information
echo "Connect Successfully. Host info: " . $mysqli->host_info;
?&gt;

&lt;?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=localhost", "root", "");
    
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Print host information
    echo "Connect Successfully. Host info: " . 
$pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
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
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The default username for MySQL database server is <code>root</code> and there is no password. However to prevent your databases from intrusion and unauthorized access you should set password for MySQL accounts.</p>
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
				<hr />
				<h2>Closing the MySQL Database Server Connection</h2>
				<p>The connection to the MySQL database server will be closed automatically as soon as the execution of the script ends. However, if you want to close it earlier you can do this by simply calling the PHP <code>mysqli_close()</code> function.</p>
				<div class="example">
					<div class="my_codeb multi-style-mode">
						<div class="my_codeb-title">
                        	<h4>Example</h4>
                            <div class="code-style">
                            	<span class="active" data-target="0" data-url="close-mysql-database-server-connection">Procedural</span> 
                                <span data-target="1" data-url="close-mysql-database-server-connection-oo-format">Object Oriented</span> 
                                <span data-target="2" data-url="close-mysql-database-server-connection-pdo-format">PDO</span>
                            </div>
                            <a href="../output_file/bin/close-mysql-database-server-connection578b.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a>
                        </div>
						<textarea id="code2">

&lt;?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
 
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
 
// Print host information
echo "Connect Successfully. Host info: " . $mysqli->host_info;
 
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
    
    // Print host information
    echo "Connect Successfully. Host info: " . 
$pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
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

							</script>
					</div>
				</div>
                <div class="bottom-link clearfix">
                    <a href="bp_mysql-introduction.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_mysql-create-database.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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