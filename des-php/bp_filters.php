<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="PHP Sanitize and Validate Filters">
	  <meta name="keywords" content="php,php basic,PHP Sanitize and Validate Filters">
	  <meta name="author" content="webschooltoday.com">
    <title>PHP Sanitize and Validate Filters - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">PHP Sanitize and Validate Filters</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_error-handling.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_form-validation.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Filters</span></h1>
                <p class="summary">In this tutorial you will learn how to sanitize and validate user inputs in PHP.</p>
                <h2>Validating and Sanitizing Data with Filters</h2>
				<p>Sanitizing and validating user input is one of the most common tasks in a web application. To make this task easier PHP provides native filter extension that you can use to sanitize or validate data such as e-mail addresses, URLs, IP addresses, etc.</p>
                <p>To validate data using filter extension you need to use the PHP's <code>filter_var()</code> function. The basic syntax of this function can be given with:</p>
				<div class="shadow">
					<div class="syntax"><span class="keyword">filter_var</span>(<i>variable</i>, <i>filter</i>, <i>options</i>)</div>
				</div>
				<p class="space">This function takes three parameters out of which the last two are optional. The first parameter is the value to be filtered, the second parameter is the ID of the filter to apply, and the third parameter is the array of options related to filter. Let's see how it works.</p>
                <h2>Sanitize a String</h2>
				<p>The following example will sanitize a string by removing all HTML tags from it:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3ab6.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

&lt;?php
// Sample user comment
$comment = "&lt;h1&gt;Hey there! How are you doing today?&lt;/h1&gt;";
 
// Sanitize and print comment string
$sanitizedComment = filter_var($comment, FILTER_SANITIZE_STRING);
echo $sanitizedComment;
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

							</script>                    </div>
                </div>
				<p>The output of the above example will look something like this:</p>
				<div class="output-box">
                    Hey there! How are you doing today?
                </div>
				<hr />
				<h2>Validate Integer Values</h2>
				<p>The following example will validate whether the value is a valid integer or not.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabcbf2.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

&lt;?php
// Sample integer value
$int = 20;
 
// Validate sample integer value
if(filter_var($int, FILTER_VALIDATE_INT)){
    echo "The &lt;b&gt;$int&lt;/b&gt; is a valid integer";
} else{
    echo "The &lt;b&gt;$int&lt;/b&gt; is not a valid integer";
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
				<p>In the above example, if variable <code>$int</code> is set to 0, the example code will display invalid integer message. To fix this problem, you need to explicitly test for the value 0, as follow:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4d84.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

&lt;?php
// Sample integer value
$int = 0;
 
// Validate sample integer value
if(filter_var($int, FILTER_VALIDATE_INT) === 0 || filter_var($int, FILTER_VALIDATE_INT)){
    echo "The &lt;b&gt;$int&lt;/b&gt; is a valid integer";
} else{
    echo "The &lt;b&gt;$int&lt;/b&gt; is not a valid integer";
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
				<hr />
				<h2>Validate IP Addresses</h2>
				<p>The following example will validate whether the value is a valid IP address or not.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1b04.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

&lt;?php
// Sample IP address
$ip = "172.16.254.1";
 
// Validate sample IP address
if(filter_var($ip, FILTER_VALIDATE_IP)){
    echo "The &lt;b&gt;$ip&lt;/b&gt; is a valid IP address";
} else {
    echo "The &lt;b&gt;$ip&lt;/b&gt; is not a valid IP address";
}
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
				<p>You can further apply validation for IPV4 or IPV6 IP addresses by using the <code>FILTER_FLAG_IPV4</code> or <code>FILTER_FLAG_IPV6</code> flags, respectively. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3335.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

&lt;?php
// Sample IP address
$ip = "172.16.254.1";
 
// Validate sample IP address
if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)){
    echo "The &lt;b&gt;$ip&lt;/b&gt; is a valid IPV6 address";
} else {
    echo "The &lt;b&gt;$ip&lt;/b&gt; is not a valid IPV6 address";
}
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

							</script>
                    </div>
                </div>
				<hr />
				<h2>Sanitize and Validate Email Addresses</h2>
				<p>The following example will show you how to sanitize and validate an e-mail address.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0176.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

&lt;?php
// Sample email address
$email = "someone@@example.com";
 
// Remove all illegal characters from email
$sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
 
// Validate email address
if($email == $sanitizedEmail && filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "The <b>$email</b> is a valid email address";
} else{
    echo "The <b>$email</b> is not a valid email address";
}
?&gt;

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
				<div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The <code>FILTER_SANITIZE_EMAIL</code> filter removes all invalid characters from the provided email address string except letters, digits and <code>!#$%&amp;'*+-=?^_`{|}~@.[]</code>.</p>
                        </div>
                    </div>
                </div>
				<hr />
				<h2>Sanitize and Validate URLs</h2>
				<p>The following example will show you how to sanitize and validate a url.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbaf2.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

&lt;?php
// Sample website url
$url = "http:://www.example.com";
 
// Remove all illegal characters from url
$sanitizedUrl = filter_var($url, FILTER_SANITIZE_URL);
 
// Validate website url
if($url == $sanitizedUrl && filter_var($url, FILTER_VALIDATE_URL)){
    echo "The <b>$url</b> is a valid website url";
} else{
    echo "The <b>$url</b> is not a valid website url";
}
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code7"), {
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
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The <code>FILTER_SANITIZE_URL</code> filter removes all invalid characters from the provided URL string except letters, digits and <code>$-_.+!*'(),{}|\\^~[]`&lt;&gt;#%";/?:@&=</code>.</p>
                        </div>
                    </div>
                </div>
				<p>You can also check whether a URL contains query string or not by using the flag <code>FILTER_FLAG_QUERY_REQUIRED</code>, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab00aa.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

&lt;?php
// Sample website url
$url = "http://www.example.com?topic=filters";
 
// Validate website url for query string
if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
    echo "The &lt;b&gt;$url&lt;/b&gt; contains query string";
} else{
    echo "The &lt;b&gt;$url&lt;/b&gt; does not contain query string";
}
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code8"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
				<p>See the tutorial on <a href="../des-html/html-url.php">HTML URL</a> to learn about the different components of a URL.</p>
				<hr />
				<h2>Validate Integers Within a Range</h2>
				<p>The following example will validate whether the supplied value is an integer or not, as well as whether it lies within the range of 0 to 100 or not.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba8bb.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

&lt;?php
// Sample integer value
$int = 75;
 
// Validate sample integer value
if(filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => 0,"max_range" => 100)))){
    echo "The &lt;b&gt;$int&lt;/b&gt; is within the range of 0 to 100";
} else{
    echo "The &lt;b&gt;$int&lt;/b&gt; is not within the range of 0 to 100";
}
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code9"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_form-validation.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_error-handling.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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