<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Create, Access and Delete Cookies in PHP">
	  <meta name="keywords" content="php,php basic,How to Create, Access and Delete Cookies in PHP">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create, Access and Delete Cookies in PHP - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Create, Access and Delete Cookies in PHP</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_sessions.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_file-download.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Cookies</span></h1>
                <p class="summary">In this tutorial you will learn how to store a small amount of information within the user's browser itself using the PHP cookies.</p>
                <h2>What is a Cookie</h2>
                <p>A cookie is a small text file that lets you store a small amount of data (nearly 4KB) on the user's computer. They are typically used to keeping track of information such as username that the site can retrieve to personalize the page when user visit the website next time.</p>
                <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> Each time the browser requests a page to the server, all the data in the cookie is automatically sent to the server within the request.</p>
                        </div>
                    </div>
                </div>
                <h2>Setting a Cookie in PHP</h2>
                <p>The <code>setcookie()</code> function is used to set a cookie in PHP. Make sure you call the <code>setcookie()</code> function before any output generated by your script otherwise cookie will not set. The basic syntax of this function can be given with:</p>
                <div class="shadow">
                    <div class="syntax"><span class="keyword">setcookie</span>(<i>name</i>, <i>value</i>, <i>expire</i>, <i>path</i>, <i>domain</i>, <i>secure</i>);</div>
                </div>
                <p>The parameters of the <code>setcookie()</code> function have the following meanings:</p>
                <div class="shadow">
                    <table class="data">
                    <thead>
                        <tr>
                        	<th>Parameter</th>
                        	<th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        	<td><code>name</code></td>
                        	<td>The name of the cookie.</td>
                        </tr>
                        <tr>
                        	<td><code>value</code></td>
                        	<td>The value of the cookie. Do not store sensitive information since this value is stored on the user's computer.</td>
                        </tr>
                        <tr>
                        	<td><code>expires</code></td>
                        	<td>The expiry date in UNIX timestamp format. After this time cookie will become inaccessible. The default value is 0.</td>
                        </tr>			    
                        <tr>
                        	<td><code>path</code></td>
                        	<td>Specify the path on the server for which the cookie will be available. If set to <code>/</code>, the cookie will be available within the entire domain.</td>
                        </tr>
                        <tr>
                        	<td><code>domain</code></td>
                        	<td>Specify the domain for which the cookie is available to e.g www.example.com.</td>
                        </tr>
                        <tr>
                        	<td><code>secure</code></td>
                        	<td>This field, if present, indicates that the cookie should be sent only if a secure HTTPS connection exists.</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> If the expiration time of the cookie is set to 0, or omitted, the cookie will expire at the end of the session i.e. when the browser closes.</p>
                        </div>
                    </div>
                </div>
                <p>Here's an example that uses <code>setcookie()</code> function to create a cookie named <code>username</code> and assign the value value <code>John Carter</code> to it. It also specify that the cookie will expire after 30 days (<code>30 days * 24 hours * 60 min * 60 sec</code>).</p>
        		<div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/set-cookiee357.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code1">

&lt;?php
// Setting a cookie
setcookie("username", "John Carter", time()+30*24*60*60);
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
                            <p><strong>Read Carefully:</strong> All the arguments except the name are optional. You may also replace an argument with an empty string ("") in order to skip that argument, however to skip the expire argument use a zero (0) instead, since it is an integer.</p>
                        </div>
                    </div>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                            <p><strong>Warning:</strong> Don't store sensitive data in cookies since it could potentially be manipulated by the malicious user. To store the sensitive data securely use <a href="bp_sessions.php">sessions</a> instead.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Accessing Cookies Values</h2>
                <p>The PHP <code>$_COOKIE</code> superglobal variable is used to retrieve a cookie value.
                It typically an associative array that contains a list of all the cookies values sent by the browser in the current request, keyed by cookie name. The individual cookie value can be accessed using standard array notation, for example to display the username cookie set in the previous example, you could use the following code.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/get-cookie-value275c.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code2">

&lt;?php
// Accessing an individual cookie value
echo $_COOKIE["username"];
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
                <p>The PHP code in the above example produce the following output.</p>
                <div class="output-box">
                    John Carter
                </div>
                <p>It's a good practice to check whether a cookie is set or not before accessing its value. To do this you can use the PHP <code>isset()</code> function, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/check-cookie-is-set-or-not1df4.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code3">

&lt;?php
// Verifying whether a cookie is set or not
if(isset($_COOKIE["username"])){
    echo "Hi " . $_COOKIE["username"];
} else{
    echo "Welcome Guest!";
}
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

							</script>                    </div>
                </div>
                <p>You can use the <code>print_r()</code> function like <code>print_r($_COOKIE);</code> to see the structure of this <code>$_COOKIE</code> associative array, like you with other arrays.</p>
                <hr />
                <h2>Removing Cookies</h2>
                <p>You can delete a cookie by calling the same <code>setcookie()</code> function with the cookie name and any value (such as an empty string) however this time you need the set the expiration date in the past, as shown in the example below:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/delete-a-cookie36f8.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code4">

&lt;?php
// Deleting a cookie
setcookie("username", "", time()-3600);
?&gt;

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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> You should pass exactly the same path, domain, and other arguments that you have used when you first created the cookie in order to ensure that the correct cookie is deleted.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_file-download.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_sessions.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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