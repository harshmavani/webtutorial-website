
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How HTML5 Server-Sent Events Works">
	  <meta name="keywords" content="css,css3,How HTML5 Server-Sent Events Works">
	  <meta name="author" content="webschooltoday.com">
    <title>How HTML5 Server-Sent Events Works - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to use the HTML5 server sent event feature to receive information from a web server and update the web page automatically." />
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How HTML5 Server-Sent Events Works</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="htl_geolocation.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

            	<a href="htl_web-workers.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML5 <span>Server-Sent Events</span></h1>
                <p class="summary">In this tutorial you will learn how to use the HTML5 server-sent events feature to create a unidirectional and persistent connection between a web page and server.</p>
				<h2>What is Server-Sent Event?</h2>
				<p>HTML5 server-sent event is a new way for the web pages to communicating with the web server. It is also possible with the XMLHttpRequest object that lets your JavaScript code make a request to the web server, but it's a one-for-one exchange &mdash; that means once the web server provides its response, the communication is over. XMLHttpRequest object is the core of all <a href="../javascript-tutorial/javascript-ajax.php">Ajax</a> operations.</p>
				<p>However, there are some situations where web pages require a longer-term connection to the web server. A typical example is stock quotes on finance websites where price updated automatically. Another example is a news ticker running on various media websites.</p>
				<p>You can create such things with the HTML5 server-sent events. It allows a web page to hold an open connection to a web server so that the web server can send a new response automatically at any time, there's no need to reconnect, and run the same server script from scratch over and over again.</p>
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> Server-Sent Events (SSE) are unidirectional that means data are delivered in one direction from the server to client. A client typically is a web browser.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<!--Tip Box-->
                <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> The HTML5's server-sent events feature is supported in all major modern web browsers like Firefox, Chrome, Safari and Opera except Internet Explorer.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
				<h2>Sending Messages with a Server Script</h2>
				<p>Let's create a PHP file named "server_time.php" and type the following script into it. It will simply report the current time of the web server's built-in clock in regular intervals. We will retrieve this time and update the web page accordingly later in this tutorial.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/downloads/htl_server-sent-events.zip" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code1">

                        <?php
header("Content-Type: text/event-stream");
header("Cache-Control: no-cache");
 
// Get the current time on server
$currentTime = date("h:i:s", time());
 
// Send it in a message
echo "data: " . $currentTime . "\n\n";
flush();
?>
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
				<p>The first two line of the <a href="../php-tutorial/index.php">PHP script</a> sets two important headers. First, it sets the MIME type to <code>text/event-stream</code>, which is required by the server-side event standard. The second line tells the web server to turn off caching otherwise the output of your script may be cached.</p>
				<p>Every message send through HTML5 server-sent events must start with the text <code>data:</code> followed by the actual message text and the new line character sequence (<code>\n\n</code>).</p>
				<p>And finally, we have used the PHP <code>flush()</code> function to make sure that the data is sent right away, rather than buffered until the PHP code is complete.</p>
				<hr />
				<h2>Processing Messages in a Web <i class="fa fa-arrow-right" aria-hidden="true"></i>
 Page</h2>
				<p>The <code>EventSource</code> object is used to receive server-sent event messages.</p>
				<p>Now let's create an HTML document named "demo_sse.php" and place it in the same project directory where the "server_time.php" file is located. This HTML document simply receives the current time reported by the web server and display it to the user.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/downloads/htl_server-sent-events.zip" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code2">

                        <!DOCTYPE html>
<html lang="en">
<head>
<title>Using Server-Sent Events</title>
<script>
    window.onload = function() {
        var source = new EventSource("server_time.php");
        source.onmessage = function(event) {
            document.getElementById("result").innerHTML += "New time received from web server: " + event.data + "<br>";
        };
    };
</script>
</head>
<body>
    <div id="result">
        <!--Server response will be inserted here-->
    </div>
</body>
</html>
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
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="htl_web-workers.php" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="htl_geolocation.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
 Page</a>
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