<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Difference Between HTTP GET and POST Methods">
	  <meta name="keywords" content="php,php basic,Difference Between HTTP GET and POST Methods">
	  <meta name="author" content="webschooltoday.com">
    <title>Difference Between HTTP GET and POST Methods - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Difference Between HTTP GET and POST Methods</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_date-and-time.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_math-operations.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>GET</span> and <span>POST</span></h1>
                <p class="summary">In this tutorial you will learn how to send information to the server using HTTP GET and POST methods and retrieve them using PHP.</p>
                <h2>Methods of Sending Information to Server</h2>
                <p class="space">A web browser communicates with the server typically using one of the two HTTP (Hypertext Transfer Protocol) methods &mdash; GET and POST. Both methods pass the information differently and have different advantages and disadvantages, as described below.</p>
                <h2 id="get-method">The GET Method</h2>
                <p>In GET method the data is sent as URL parameters that are usually strings of name and value pairs separated by ampersands (<code>&amp;</code>). In general, a URL with GET data will look like this:</p>
                <div class="sky-box">http://www.example.com/action.php?<b>name</b>=<i>john</i>&amp;<b>age</b>=<i>24</i></div>
                <p class="space">The bold parts in the URL are the GET parameters and the italic parts are the value of those parameters. More than one <code>parameter=value</code> can be embedded in the URL by concatenating with ampersands (<code>&amp;</code>). One can only send simple text data via GET method.</p>
                <h2>Advantages and Disadvantages of Using the GET Method</h2>
                <ul>
                	<li>Since the data sent by the GET method are displayed in the URL, it is possible to bookmark the page with specific query string values.</li>
                    <li>The GET method is not suitable for passing sensitive information such as the username and password, because these are fully visible in the URL query string as well as potentially stored in the client browser's memory as a visited page.</li>
                    <li>Because the GET method assigns data to a server environment variable, the length of the URL is limited. So, there is a limitation for the total data to be sent.</li>
                </ul>
				<p>PHP provides the superglobal variable <code>$_GET</code> to access all the information sent either through the URL or submitted through an HTML form using the <code>method="get"</code>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/get-method8701.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code1">

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;title&gt;Example of PHP GET method&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;?php
if(isset($_GET["name"])){
    echo "&lt;p&gt;Hi, " . $_GET["name"] . "&lt;/p&gt;";
}
?&gt;
&lt;form method="get" action="&lt;?php echo $_SERVER["PHP_SELF"];?&gt;"&gt;
    &lt;label for="inputName"&gt;Name:&lt;/label&gt;
    &lt;input type="text" name="name" id="inputName"&gt;
    &lt;input type="submit" value="Submit"&gt;
&lt;/form&gt;
&lt;/body&gt;

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
                <h2 id="post-method">The POST Method</h2>
                <p class="space">In POST method the data is sent to the server as a package in a separate communication with the processing script. Data sent through POST method will not visible in the URL.</p>
                <h2>Advantages and Disadvantages of Using the POST Method</h2>
                <ul>
                	<li>It is more secure than GET because user-entered information is never visible in the URL query string or in the server logs.</li>
                    <li>There is a much larger limit on the amount of data that can be passed and one can send text data as well as binary data (uploading a file) using POST.</li>
                    <li>Since the data sent by the POST method is not visible in the URL, so it is not possible to bookmark the page with specific query.</li>
                </ul>
                <p>Like <code>$_GET</code>, PHP provide another superglobal variable <code>$_POST</code> to access all the information sent via post method or submitted through an HTML form using the <code>method="post"</code>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/post-method54bb.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code2">

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;title&gt;Example of PHP POST method&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;?php
if(isset($_POST["name"])){
    echo "&lt;p&gt;Hi, " . $_POST["name"] . "&lt;/p&gt;";
}
?&gt;
&lt;form method="post" action="&lt;?php echo $_SERVER["PHP_SELF"];?&gt;"&gt;
    &lt;label for="inputName"&gt;Name:&lt;/label&gt;
    &lt;input type="text" name="name" id="inputName"&gt;
    &lt;input type="submit" value="Submit"&gt;
&lt;/form&gt;
&lt;/body&gt;

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
				<hr />
				<h2>The $_REQUEST Variable</h2>
				<p>PHP provides another superglobal variable <code>$_REQUEST</code> that contains the values of both the <code>$_GET</code> and <code>$_POST</code> variables as well as the values of the <code>$_COOKIE</code> superglobal variable.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/request-methoda3f0.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code3">

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;title&gt;Example of PHP $_REQUEST variable&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;?php
if(isset($_REQUEST["name"])){
    echo "&lt;p&gt;Hi, " . $_REQUEST["name"] . "&lt;/p&gt;";
}
?&gt;
&lt;form method="post" action="&lt;?php echo $_SERVER["PHP_SELF"];?&gt;"&gt;
    &lt;label for="inputName"&gt;Name:&lt;/label&gt;
    &lt;input type="text" name="name" id="inputName"&gt;
    &lt;input type="submit" value="Submit"&gt;
&lt;/form&gt;
&lt;/body&gt;

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
				<p>You will learn more about PHP <a href="bp_cookies.php">cookies</a> and <a href="bp_form-validation.php">form handling</a> in advanced section.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Important:</strong> The superglobal variables <code>$_GET</code>, <code>$_POST</code> and <code>$_REQUEST</code> are built-in variables that are always available in all scopes throughout a script.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_math-operations.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_date-and-time.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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