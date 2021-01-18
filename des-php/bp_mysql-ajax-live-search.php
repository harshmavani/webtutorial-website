<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="MySQL Database Live Search with PHP and AJAX">
	  <meta name="keywords" content="php,php basic,MySQL Database Live Search with PHP and AJAX">
	  <meta name="author" content="webschooltoday.com">
    <title>MySQL Database Live Search with PHP and AJAX - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to search the records in MySQL database table using the PHP and Ajax, where suggestions will appear as you start typing into the input box." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">MySQL Database Live Search with PHP and AJAX</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_mysql-login-system.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_mysql-crud-application.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP MySQL <span>Ajax Live Search</span></h1>
                <p class="summary">In this tutorial you'll learn how to create a live MySQL database search feature using PHP and Ajax.</p>
                <h2>Ajax Live Database Search</h2>				
                <p>You can create a simple live database search functionality utilizing the Ajax and PHP, where the search results will be displayed as you start typing some character in search input box.</p>
				<p>In this tutorial we're going to create a live search box that will search the <i>countries</i> table and show the results asynchronously. But, first of all we need to create this table.</p>
				<h3>Step 1: Creating the Database Table</h3>
				<p>Execute the following SQL query to create the <i>countries</i> table in your MySQL database.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../examples/downloads/countries-table.zip" target="_top" class="download-btn" title="Download Countries Table"><span>Download</span></a></div>
	<textarea id="code1">

CREATE TABLE countries (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL
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
				<h3>Step 2: Creating the Search Form</h3>
				<p>Now, let's create a simple web interface that allows user to live search the names of countries available in our <i>countries</i> table, just like an autocomplete or typeahead.</p>
				<p>Create a PHP file named "search-form.php" and put the following code inside of it.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../examples/bin/search-form09e2.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code2">

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
&lt;meta charset="UTF-8"&gt;
&lt;title&gt;PHP Live MySQL Database Search&lt;/title&gt;
&lt;style type="text/css"&gt;
body{
font-family: Arail, sans-serif;
}
/* Formatting search box */
.search-box{
width: 300px;
position: relative;
display: inline-block;
font-size: 14px;
}
.search-box input[type="text"]{
height: 32px;
padding: 5px 10px;
border: 1px solid #CCCCCC;
font-size: 14px;
}
.result{
position: absolute;        
z-index: 999;
top: 100%;
left: 0;
}
.search-box input[type="text"], .result{
width: 100%;
box-sizing: border-box;
}
/* Formatting result items */
.result p{
margin: 0;
padding: 7px 10px;
border: 1px solid #CCCCCC;
border-top: none;
cursor: pointer;
}
.result p:hover{
background: #f2f2f2;
}
&lt;/style&gt;
&lt;script src="https://code.jquery.com/jquery-1.12.4.min.js"&gt;&lt;/script&gt;
&lt;script type="text/javascript"&gt;
$(document).ready(function(){
$('.search-box input[type="text"]').on("keyup input", function(){
/* Get input value on change */
var inputVal = $(this).val();
var resultDropdown = $(this).siblings(".result");
if(inputVal.length){
    $.get("backend-search.php", {term: inputVal}).done(function(data){
        // Display the returned data in browser
        resultDropdown.php(data);
    });
} else{
    resultDropdown.empty();
}
});

// Set search input value on click of result item
$(document).on("click", ".result p", function(){
$(this).parents(".search-box").find('input[type="text"]').val($(this).text());
$(this).parent(".result").empty();
});
});
&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;div class="search-box"&gt;
&lt;input type="text" autocomplete="off" placeholder="Search country..." /&gt;
&lt;div class="result"&gt;&lt;/div&gt;
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

							</script>					</div>
				</div>
				<p>Every time the content of search input is changed or keyup event occur on search input the jQuery code (<i>line no-47 to 67</i>) sent an Ajax request to the "backend-search.php" file which retrieves the records from <i>countries</i> table related to the searched term. Those records later will be inserted inside a <a href="../info-html/html-div-tag.php"><code>&lt;div&gt;</code></a> by the jQuery and displayed on the browser.</p>
				<h3>Step 3: Processing Search Query in Backend</h3>
				<p>And here's the source code of our "backend-search.php" file which searches the database based on query string sent by the Ajax request and send the results back to browser.</p>
				<div class="example">
					<div class="my_codeb multi-style-mode">
						<div class="my_codeb-title">
                        	<h4>Example</h4>
                            <div class="code-style">
                                <span class="active" data-target="0" data-url="backend-search" title="Show Example Code in Procedural Style">Procedural</span> 
                                <span data-target="1" data-url="backend-search-oo-format" title="Show Example Code in Object Oriented Style">Object Oriented</span> 
                                <span data-target="2" data-url="backend-search-pdo-format" title="Show Example Code in PDO Style">PDO</span>
                            </div>
                            <a href="../examples/bin/backend-search75ee.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a><span class="box-size">
                            <i title="Maximize"></i></span>
                        </div>
                        <textarea id="code3">

&lt;?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "SELECT * FROM countries WHERE name LIKE ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "&lt;p&gt;" . $row["name"] . "&lt;/p&gt;";
                }
            } else{
                echo "&lt;p&gt;No matches found&lt;/p&gt;";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
 
// close connection
mysqli_close($link);
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code3"), {
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
                            <p><strong>Read Carefully:</strong> Always filter and validate user input before using it in a SQL statement. You can also use PHP <code>mysqli_real_escape_string()</code> function to escape special characters in a user input and create a legal SQL string to protect against SQL injection.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_mysql-crud-application.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_mysql-login-system.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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