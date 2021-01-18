
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Use HTML5 Web Workers">
	  <meta name="keywords" content="css,css3,How to Use HTML5 Web Workers">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Use HTML5 Web Workers - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to use HTML5 web workers to do an intensive JavaScript task in the background to improve the performance of the web pages." />
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Use HTML5 Web Workers</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="htl_server-sent-events.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

            	<a href="htl_application-cache.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML5 <span>Web Workers</span></h1>
                <p class="summary">In this tutorial you will learn how to use HTML5 web worker to run JavaScript code in the background.</p>
				<h2>What is Web Worker?</h2>
				<p>If you try to do intensive task with JavaScript that is time-consuming and require hefty calculations browser will freeze up the web page and prevent the user from doing anything until the job is completed. It happens because JavaScript code always runs in the foreground.</p>
				<p>HTML5 introduces a new technology called <em>web worker</em> that is specifically designed to do background work independently of other user-interface scripts, without affecting the performance of the page. Unlike normal JavaScript operations, web worker doesn't interrupt the user and the web page remains responsive because they are running the tasks in the background.</p>
                <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> The HTML5's web worker feature is supported in all major modern web browsers like Firefox, Chrome, Opera, Safari and Internet Explorer 10 and above.</p>
                        </div>
                    </div>
                </div>
				<hr />
				<h2>Create a Web Worker File</h2>
				<p>The simplest use of web workers is for performing a time-consuming task. So here we are going to create a simple JavaScript task that counts from zero to 100,000.</p>
				<p>Let's create an external JavaScript file named "worker.js" and type the following code.</p>
                <div class="example">
                    <div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../output_file/downloads/htl_web-worker-file.zip" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code1">

                        var i = 0;
function countNumbers() {
    if(i < 100000) {
        i = i + 1;
        postMessage(i);
    }
 
    // Wait for sometime before running this script again
    setTimeout("countNumbers()", 500);
}
countNumbers();
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
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> Web workers have no access to the DOM. That means you can't access any DOM elements in the JavaScript code that you intend to run using web workers.</p>
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
                            <p><strong>Important:</strong> The worker object's <code>postMessage()</code> method is used to send a message (like the numbers in the example above) back to the web page from the web worker file.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
				<hr />
				<h2>Doing Work in the Background with Web Worker</h2>
				<p>Now that we have created our web worker file. In this section we are going to initiate the web worker from an HTML document that runs the code inside the file named "worker.js" in the background and progressively displays the result on the web page. Let's see how it works:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc266.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Using Web Worker</title>
<script>
    if(window.Worker) {
        // Create a new web worker
        var worker = new Worker("worker.js");
        
        // Fire onMessage event handler
        worker.onmessage = function(event) {
            document.getElementById("result").innerHTML = event.data;
        };
    } else {
        alert("Sorry, your browser do not support web worker.");
    }
</script>
</head>
<body>
    <div id="result">
        <!--Received messages will be inserted here-->
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
				<h3>Example explained:</h3>
				<p>The JavaScript code in the above example has the following meaning:</p>
				<ul>
					<li>The statement <strong>var worker = new Worker("worker.js");</strong> creates a new web worker object, which is used to communicate with the web worker.</li>
					<li>When the worker posts a message, it fires the <strong>onmessage</strong> event handler (<i>line no-14</i>) that allows the code to receive messages from the web worker.</li>
					<li>The <strong>event.data</strong> element contains the message sent from the web worker.</li>
				</ul>
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> The code that a worker runs is always stored in a separate JavaScript file. This is to prevent web developer from writing the web worker code that attempts to use global variables or directly access the elements on the web page.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>Terminate a Web Worker</h2>
				<p>So far you have learnt how to create worker and start receiving messages. However, you can also terminate a running worker in the middle of the execution.</p>
				<p>The following example will show you how to start and stop worker from a web page through clicking the HTML buttons. It utilizes the same JavaScript file 'worker.js' what we have used in the previous example to count the numbers from zero to 100000. Let's try it out:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab999c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Start/Stop Web Worker</title>
<script>
    // Set up global variable
    var worker;
    
    function startWorker() {
        // Initialize web worker
        worker = new Worker("worker.js");
        
        // Run update function, when we get a message from worker
        worker.onmessage = update;
        
        // Tell worker to get started
        worker.postMessage("start");
    }
    
    function update(event) {
        // Update the page with current message from worker
        document.getElementById("result").innerHTML = event.data;
    }
    
    function stopWorker() {
        // Stop the worker
        worker.terminate();
    }
</script>
</head>
<body>
    <h1>Web Worker Demo</h1>
    <button onclick="startWorker();" type="button">Start web worker</button>
    <button type="button" onclick="stopWorker();">Stop web worker</button>
    <div id="result">
        <!--Received messages will be inserted here-->
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
				<!--Tip Box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"  style="background-color:#fad28c"
>
							<p><strong>Important:</strong> Use the web workers for performing only heavy-weight JavaScript tasks that do not interrupt the user-interface scripts (i.e. scripts that respond to clicks or other user interactions). It's not recommended to use web workers for short tasks.</p>
						</div>
					</div>
				</div>
				<!--End:Tip Box-->
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="htl_application-cache.php" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="htl_server-sent-events.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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