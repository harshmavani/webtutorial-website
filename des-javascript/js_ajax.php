<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Ajax">
	  <meta name="keywords" content="javascript,JavaScript Ajax">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Ajax - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Ajax</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_es6-features.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_cookies.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Ajax</span></h1>
                <p class="summary">In this tutorial you will learn what Ajax is and how to implement it in JavaScript.</p>
				<h2>What is Ajax?</h2>
				<p>Ajax stands for <b>A</b>synchronous <b>J</b>avascript <b>A</b>nd <b>X</b>ml. Ajax is just a means of loading data from the server and selectively updating parts of a web page without reloading the whole page.</p>
				<p>Basically, what Ajax does is make use of the browser's built-in <code>XMLHttpRequest</code> (XHR) object to send and receive information to and from a web server asynchronously, in the background, without blocking the page or interfering with the user's experience.</p>
				<p>Ajax has become so popular that you hardly find an application that doesn't use Ajax to some extent. The example of some large-scale Ajax-driven online applications are: Gmail, Google Maps, Google Docs, YouTube, Facebook, Flickr, and so many other applications.</p>
				<!--Note box-->
				<div class="color-box space">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> Ajax is not a new technology, in fact, Ajax is not even really a technology at all. Ajax is just a term to describe the process of exchanging data from a web server asynchronously through JavaScript, without refreshing the page.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<!--Tip Box-->
                <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> Don't get confused by the term <b>X</b> (i.e. <strong>XML</strong>) in AJAX. It is only there for historical reasons. Other data exchange format such as JSON, HTML, or plain text can be used instead of XML.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
				<h2>Understanding How Ajax Works</h2>
				<p>To perform Ajax communication JavaScript uses a special object built into the browser&mdash;an <code>XMLHttpRequest</code> (XHR) object&mdash;to make HTTP requests to the server and receive data in response.</p>
				<p>All modern browsers (Chrome, Firefox, IE7+, Safari, Opera) support the <code>XMLHttpRequest</code> object.</p>
				<p>The following illustrations demonstrate how Ajax communication works:</p>
				<p class="text-center"><img src="../assets/images/ajax.jpg" alt="Ajax Illustration" /></p>
				<p>Since Ajax requests are usually asynchronous, execution of the script continues as soon as the Ajax request is sent, i.e. the browser will not halt the script execution until the server response comes back.</p>
				<p>In the following section we'll discuss each step involved in this process one by one:</p>
				<h2>Sending Request and Retrieving the Response</h2>
				<p>Before you perform Ajax communication between client and server, the first thing you must do is to instantiate an <code>XMLHttpRequest</code> object, as shown below:</p>
				<div class="green-box break">var request = new XMLHttpRequest();</div>
				<p>Now, the next step in sending the request to the server is to instantiating the newly-created request object using the <code>open()</code> method of the XMLHttpRequest object.</p>
				<p>The <code>open()</code> method typically accepts two parameters&mdash; the HTTP request method to use, such as "GET", "POST", etc., and the URL to send the request to, like this:</p>
				<div class="pink-box break">request.open("GET", "info.txt"); -Or- request.open("POST", "add-user.php");</div>				
				<!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> The file can be of any kind, like <code>.txt</code> or <code>.xml</code>, or server-side scripting files, like <code>.php</code> or <code>.asp</code>, which can perform some actions on the server (e.g. inserting or reading data from database) before sending the response back to the client.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
				<p>And finally send the request to the server using the <code>send()</code> method of the XMLHttpRequest object.</p>				
				<div class="sky-box break">request.send(); -Or- request.send(<em>body</em>);</div>
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The <code>send()</code> method accepts an optional <code><em>body</em></code> parameter which allow us to specify the request's body. This is primarily used for HTTP POST requests, since the HTTP GET request doesn't have a request body, just request headers.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<p>The GET method is generally used to send small amount of data to the server. Whereas, the POST method is used to send large amount of data, such as form data.</p>
				<p>In GET method, the data is sent as URL parameters. But, in POST method, the data is sent to the server as a part of the HTTP request body. Data sent through POST method will not visible in the URL.</p>
				<p>See the chapter on <a href="../php-tutorial/php-get-and-post.php">HTTP GET vs. POST</a> for a detailed comparison of these two methods.</p>
				<p class="space">In the following section we'll take a closer look at how Ajax requests actually works.</p>
				<h2>Performing an Ajax GET Request</h2>
				<p>The GET request is typically used to get or retrieve some kind of information from the server that doesn't require any manipulation or change in database, for example, fetching search results based on a term, fetching user details based on their id or name, and so on.</p>
				<p>The following example will show you how to make an Ajax GET request in JavaScript.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab37d3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

						<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>JavaScript Ajax GET Demo</title>
<script>
function displayFullName() {
    // Creating the XMLHttpRequest object
    var request = new XMLHttpRequest();

    // Instantiating the request object
    request.open("GET", "greet.php?fname=John&lname=Clark");

    // Defining event listener for readystatechange event
    request.onreadystatechange = function() {
        // Check if the request is compete and was successful
        if(this.readyState === 4 && this.status === 200) {
            // Inserting the response from server into an HTML element
            document.getElementById("result").innerHTML = this.responseText;
        }
    };

    // Sending the request to the server
    request.send();
}
</script>
</head>
<body>
    <div id="result">
        <p>Content of the result DIV box will be replaced by the server response</p>
    </div>
    <button type="button" onclick="displayFullName()">Display Full Name</button>
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
                <!--End:Code box-->
				<p>When the request is asynchronous, the <code>send()</code> method returns immediately after sending the request. Therefore you must check where the response currently stands in its lifecycle before processing it using the <code>readyState</code> property of the <code>XMLHttpRequest</code> object.</p>
				<p>The <code>readyState</code> is an integer that specifies the status of an HTTP request. Also, the function assigned to the <code>onreadystatechange</code> event handler called every time the <code>readyState</code> property changes. The possible values of the <code>readyState</code> property are summarized below.</p>
				<div class="shadow">
					<table class="data">
						<tr>
							<th>Value</th>
							<th>State</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code>0</code></td>
							<td><code>UNSENT</code></td>
							<td>An <code>XMLHttpRequest</code> object has been created, but the <code>open()</code> method hasn't been called yet (i.e. request not initialized).</td>
						</tr>
						<tr>
							<td><code>1</code></td>
							<td><code>OPENED</code></td>
							<td>The <code>open()</code> method has been called (i.e. server connection established).</td>
						</tr>
						<tr>
							<td><code>2</code></td>
							<td><code>HEADERS_RECEIVED</code></td>
							<td>The <code>send()</code> method has been called (i.e. server has received the request).</td>
						</tr>
						<tr>
							<td><code>3</code></td>
							<td><code>LOADING</code></td>
							<td>The server is processing the request.</td>
						</tr>
						<tr>
							<td><code>4</code></td>
							<td><code>DONE</code></td>
							<td>The request has been processed and the response is ready.</td>
						</tr>
					</table>
				</div>
				<!--Note box-->
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> Theoretically, the <code>readystatechange</code> event should be triggered every time the <code>readyState</code> property changes. But, most browsers do not fire this event when <code>readyState</code> changes to 0 or 1. However, all browsers fire this event when <code>readyState</code> changes to 4 .</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<p>The <code>status</code> property returns the numerical HTTP status code of the XMLHttpRequest's response. Some of the common HTTP status codes are listed below:</p>
				<ul>
					<li>200 &mdash; OK. The server successfully processed the request.</li>
					<li>404 &mdash; Not Found. The server can't find the requested page.</li>
					<li>503 &mdash; Service Unavailable. The server is temporarily unavailable.</li>
				</ul>
				<p>Please check out the <a href="../info-html/http-status-codes.php">HTTP status codes</a> reference for a complete list of response codes.</p>
				<p>Here's the code from our "greet.php" file that simply creates the full name of a person by joining their first name and last name and outputs a greeting message.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/greet8fea.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code2">

						<?php
if(isset($_GET["fname"]) && isset($_GET["lname"])) {
    $fname = htmlspecialchars($_GET["fname"]);
    $lname = htmlspecialchars($_GET["lname"]);
    
    // Creating full name by joining first and last name
    $fullname = $fname . " " . $lname;

    // Displaying a welcome message
    echo "Hello, $fullname! Welcome to our website.";
} else {
    echo "Hi there! Welcome to our website.";
}
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
                <!--End:Code box-->				
				<hr />
				<h2>Performing an Ajax POST Request</h2>
				<p>The POST method is mainly used to submit a form data to the web server.</p>
				<p>The following example will show you how to submit form data to the server using Ajax.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf4ee.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

						<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>JavaScript Ajax POST Demo</title>
<script>
function postComment() {
    // Creating the XMLHttpRequest object
    var request = new XMLHttpRequest();
    
    // Instantiating the request object
    request.open("POST", "confirmation.php");
    
    // Defining event listener for readystatechange event
    request.onreadystatechange = function() {
        // Check if the request is compete and was successful
        if(this.readyState === 4 && this.status === 200) {
            // Inserting the response from server into an HTML element
            document.getElementById("result").innerHTML = this.responseText;
        }
    };
    
    // Retrieving the form data
    var myForm = document.getElementById("myForm");
    var formData = new FormData(myForm);

    // Sending the request to the server
    request.send(formData);
}
</script>
</head>
<body>
    <form id="myForm">
        <label>Name:</label>
        <div><input type="text" name="name"></div>
        <br>
        <label>Comment:</label>
        <div><textarea name="comment"></textarea></div>
        <p><button type="button" onclick="postComment()">Post Comment</button></p>
    </form>    
    <div id="result">
        <p>Content of the result DIV box will be replaced by the server response</p>
    </div>    
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
                <!--End:Code box-->
				<p>If you are not using the <code>FormData</code> object to send form data, for example, if you're sending the form data to the server in the <em>query string</em> format, i.e. <code>request.send(key1=value1&amp;key2=value2)</code> then you need to <a href="../codelab92f3.html" target="_blank">explicitly set the request header</a> using <code>setRequestHeader()</code> method, like this:</p>
				<div class="pink-box break">request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");</div>
				<p>The <code>setRequestHeader()</code> method, must be called after calling <code>open()</code>, but before calling <code>send()</code>.</p>
				<p>Some common request headers are: <code>application/x-www-form-urlencoded</code>, <code>multipart/form-data</code>, <code>application/json</code>, <code>application/xml</code>, <code>text/plain</code>, <code>text/html</code>, and so on.</p>
				<!--Note box-->
				<div class="color-box space">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The <code>FormData</code> object provides an easy way to construct a set of key/value pairs representing form fields and their values which can be sent using <code>XMLHttpRequest.send()</code> method. The transmitted data is in the same format that the form's <code>submit()</code> method would use to send the data if the form's encoding type were set to <code>multipart/form-data</code>.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<p>Here's the code of our "confirmation.php" file that simply outputs the values submitted by the user.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/confirmationfa1d.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code4">

						<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $comment = htmlspecialchars(trim($_POST["comment"]));
    
    // Check if form fields values are empty
    if(!empty($name) && !empty($comment)) {
        echo "<p>Hi, <b>$name</b>. Your comment has been received successfully.<p>";
        echo "<p>Here's the comment that you've entered: <b>$comment</b></p>";
    } else {
        echo "<p>Please fill all the fields in the form!</p>";
    }
} else {
    echo "<p>Something went wrong. Please try again.</p>";
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
                <!--End:Code box-->
				<p>For security reasons, browsers do not allow you to make cross-domain Ajax requests. This means you can only make Ajax requests to URLs from the same domain as the original page, for example, if your application is running on the domain "mysite.com", you cannot make Ajax request to "othersite.com" or any other domain. This is commonly known as <em>same origin policy</em>.</p>
				<p>However, you can load images, style sheets, JS files, and other resources from any domain.</p>
				<!--Tip Box-->
                <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> Check out the <a href="../jquery-tutorial/jquery-ajax-get-and-post-requests.php">jQuery Ajax methods</a> for quick and seamless Ajax implementation. The jQuery framework provides very convenient methods to implement Ajax functionality.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_cookies.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_es6-features.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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