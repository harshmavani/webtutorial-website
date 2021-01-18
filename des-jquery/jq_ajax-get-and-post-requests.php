<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="jQuery Ajax GET and POST Requests">
	  <meta name="keywords" content="jquery,jq,js,jQuery Ajax GET and POST Requests">
	  <meta name="author" content="webschooltoday.com">
    <title>jQuery Ajax GET and POST Requests - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">jQuery Ajax GET and POST Requests</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_no-conflict-mode.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_ajax-load.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery Ajax <span>GET</span> and <span>POST</span> Requests</h1>
				<p class="summary">In this tutorial you will learn how to send and receive data from a web server through Ajax via HTTP GET or POST methods using jQuery.</p>
				<h2>jQuery <code>$.get()</code> and <code>$.post()</code> Methods</h2>
				<p>The jQuery's <code>$.get()</code> and <code>$.post()</code> methods provide simple tools to <a href="jq_ajax.php">send and retrieve data asynchronously</a> from a web server. Both the methods are pretty much identical, apart from one major difference &mdash; the <code>$.get()</code> makes Ajax requests using the <a href="../php-tutorial/php-get-and-post.php#get-method">HTTP GET method</a>, whereas the <code>$.post()</code> makes Ajax requests using the <a href="../php-tutorial/php-get-and-post.php#post-method">HTTP POST method</a>.</p>
				<p>The basic syntax of these methods can be given with:</p>
				<div class="shadow">
					<div class="syntax">$.get(<i>URL</i>, <i>data</i>, <i>success</i>); &nbsp; <i>&mdash;Or&mdash;</i> &nbsp; $.post(<i>URL</i>, <i>data</i>, <i>success</i>);</div>
				</div>
				<p>The parameters in the above syntax have the following meaning:</p>
				<ul>
					<li>The required <i>URL</i> parameter specifies the URL to which the request is sent.</li>
					<li>The optional <i>data</i> parameter specifies a set of query string (i.e. key/value pairs) that is sent to the web server along with the request.</li>
					<li>The optional <i>success</i> parameter is basically a callback function that is executed if the request succeeds. It is typically used to retrieve the returned data.</li>
				</ul>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The HTTP GET and POST methods are used to send request from a browser to a server. The main difference between these methods is the way in which the data is passed to the server. Check out the tutorial on <a href="../php-tutorial/php-get-and-post.php">GET and POST methods</a> for the detailed explanation and comparison between these two methods.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Performing GET Request with AJAX using jQuery</h2>
				<p>The following example uses the jQuery <code>$.get()</code> method to make an Ajax request to the "date-time.php" file using HTTP GET method. It simply retrieves the date and time returned from the server and displays it in the browser without refreshing the page.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabcc7f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery get() Demo</title>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $.get("date-time.php", function(data){
            // Display the returned data in browser
            $("#result").php(data);
        });
    });
});
</script>
</head>
<body>
    <div id="result">
        <h2>Content of the result DIV box will be replaced by the server date and time</h2>
    </div>
    <button type="button">Load Date and Time</button>
</body>
</html>

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
				<p>Here's our "date-time.php" file that simply output the current date and time of the server.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/date-timee1e4.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code2">

<?php
// Return current date and time from the server
echo date("F d, Y h:i:s A");
?>

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
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> If you face any difficulty while running these examples locally on your PC, please check out the tutorial on <a href="jq_ajax-load.php">jQuery Ajax load</a> for the solution.</p>
						</div>
					</div>
				</div>
				<p>You can also send some data to the server with the request. In the following example the jQuery code makes an Ajax request to the "create-table.php" as well as sends some additional data to the server along with the request.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5653.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery get() Demo</title>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        // Get value from input element on the page
        var numValue = $("#num").val();
        
        // Send the input data to the server using get
        $.get("create-table.php", {number: numValue} , function(data){
            // Display the returned data in browser
            $("#result").php(data);
        });
    });
});
</script>
</head>
<body>
    <label>Enter a Number: <input type="text" id="num"></label>
    <button type="button">Show Multiplication Table</button>
    <div id="result"></div>
</body>
</html>

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
				<p>Here's the PHP script of our "create-table.php" file that simply output the multiplication table for the number entered by the user on button click.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/create-table17e3.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code4">

<?php
$number = htmlspecialchars($_GET["number"]);
if(is_numeric($number) && $number > 0){
    echo "<table>";
    for($i=0; $i<11; $i++){
        echo "<tr>";
            echo "<td>$number x $i</td>";
            echo "<td>=</td>";
            echo "<td>" . $number * $i . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>

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
				<hr />
				<h2>Performing POST Request with AJAX using jQuery</h2>
				<p>POST requests are identical to GET requests in jQuery. So, generally which method you should use either <code>$.get()</code> or <code>$.post()</code> is basically depends on the requirements of your server-side code. If you have large amount of data to be transmitted (e.g. form data) you need to use POST, because GET has a stringent limit on the data transfer.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabdd26.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery post() Demo</title>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("form").submit(function(event){
        // Stop form from submitting normally
        event.preventDefault();
        
        /* Serialize the submitted form control values to be sent to the web server with the request */
        var formValues = $(this).serialize();
        
        // Send the form data using post
        $.post("display-comment.php", formValues, function(data){
            // Display the returned data in browser
            $("#result").php(data);
        });
    });
});
</script>
</head>
<body>
    <form>
        <label>Name: <input type="text" name="name"></label>
        <label>Comment: <textarea cols="50" name="comment"></textarea></label>
        <input type="submit" value="Send">
    </form>
    <div id="result"></div>
</body>
</html>

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
				<p>Here's our "display-comment.php" file that simply output the data entered by the user.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/display-commentbf5a.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code6">

<?php
$name = htmlspecialchars($_POST["name"]);
$comment = htmlspecialchars($_POST["comment"]);
echo "Hi, $name. Your comment has been received successfully." . "
";
echo "Here's the comment what you've entered: $comment";
?>

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
				<p>Now that you have learnt how to perform various Ajax operations such as loading data, submitting form, etc. asynchronously using jQuery. Before concluding this chapter check out one more <a href="../faq/populate-state-dropdown-based-on-selection-in-country-dropdown-using-jquery.php">classic example of Ajax</a> that will show you how to populate the state or city dropdown based on the option selected in the country dropdown using jQuery.</p>
				<div class="bottom-link clearfix">
					<a href="jq_ajax-load.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_no-conflict-mode.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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