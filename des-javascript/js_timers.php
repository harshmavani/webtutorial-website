<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Timer Functions">
	  <meta name="keywords" content="javascript,js,JavaScript Timer Functions">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Timer Functions - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Timer Functions</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_date-and-time.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_dialog-boxes.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Timers</span></h1>
                <p class="summary">In this tutorial you will learn about timer functions in JavaScript.</p>
				<h2>Working with Timers</h2>
				<p>A timer is a function that enables us to execute a function at a particular time.</p>
				<p>Using timers you can delay the execution of code so that it does not get done at the exact moment an event is triggered or the page is loaded. For example, you can use timers to change the advertisement banners on your website at regular intervals, or display a real-time clock, etc. There are two timer functions in JavaScript: <code>setTimeout()</code> and <code>setInterval()</code>.</p>
				<p class="space">The following section will show you how to create timers to delay code execution as well as how to perform one or more actions repeatedly using these functions in JavaScript.</p>
				<h2>Executing Code After a Delay</h2> 
				<p>The <code>setTimeout()</code> function is used to execute a function or specified piece of code just once after a certain period of time. Its basic syntax is <code>setTimeout(<i>function</i>, <i>milliseconds</i>)</code>.</p>
				<p>This function accepts two parameters: a <em>function</em>, which is the function to execute, and an optional <em>delay</em> parameter, which is the number of milliseconds representing the amount of time to wait before executing the function (1 second = 1000 milliseconds). Let's see how it works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1845.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        <script>
function myFunction() {
    alert('Hello World!');
}
</script>
 
<button onclick="setTimeout(myFunction, 2000)">Click Me</button>
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
				<p>The above example will display an alert message after 2 seconds on click of the button.</p>
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> If the <em>delay</em> parameter is omitted or not specified, a value of <code>0</code> is used, that means the specified function is executed "immediately", or, as soon as possible.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>Executing Code at Regular Intervals</h2>
				<p>Similarly, you can use the <code>setInterval()</code> function to execute a function or specified piece of code repeatedly at fixed time intervals. Its basic syntax is <code>setInterval(<i>function</i>, <i>milliseconds</i>)</code>.</p>
				<p>This function also accepts two parameters: a <em>function</em>, which is the function to execute, and <em>interval</em>, which is the number of milliseconds representing the amount of time to wait before executing the function (1 second = 1000 milliseconds). Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab78e6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        <script>
function showTime() {
    var d = new Date();
    document.getElementById("clock").innerHTML = d.toLocaleTimeString();
}
setInterval(showTime, 1000);
</script>
 
<p>The current time on your computer is: <span id="clock"></span></p>
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
				<p>The above example will execute the <code>showTime()</code> function repeatedly after 1 second. This function retrieves the current time on your computer and displays it in the browser.</p>
				<hr />
				<h2>Stopping Code Execution or Cancelling a Timer</h2>
				<p>Both <code>setTimeout()</code> and <code>setInterval()</code> method return an unique ID (a positive integer value, called timer identifier) which identifies the timer created by the these methods.</p>
				<p>This ID can be used to disable or clear the timer and stop the execution of code beforehand. Clearing a timer can be done using two functions: <code>clearTimeout()</code> and <code>clearInterval()</code>.</p>
				<p>The <code>setTimeout()</code> function takes a single parameter, an ID, and clear a <code>setTimeout()</code> timer associated with that ID, as demonstrated in the following example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9214.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        <script>
var timeoutID;
 
function delayedAlert() {
  timeoutID = setTimeout(showAlert, 2000);
}
 
function showAlert() {
  alert('This is a JavaScript alert box.');
}
 
function clearAlert() {
  clearTimeout(timeoutID);
}
</script>
 
<button onclick="delayedAlert();">Show Alert After Two Seconds</button>
 
<button onclick="clearAlert();">Cancel Alert Before It Display</button>
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
				<p>Similarly, the <code>clearInterval()</code> method is used to clear or disable a <code>setInterval()</code> timer.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabaeda.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        <script>
var intervalID;
 
function showTime() {
    var d = new Date();
    document.getElementById("clock").innerHTML = d.toLocaleTimeString();
}
 
function stopClock() {
    clearInterval(intervalID);
}
 
var intervalID = setInterval(showTime, 1000);
</script>
 
<p>The current time on your computer is: <span id="clock"></span></p>
 
<button onclick="stopClock();">Stop Clock</button>
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
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> You can technically use <code>clearTimeout()</code> and <code>clearInterval()</code> interchangeably. However, for clarity and code maintainability you should avoid doing so.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_dialog-boxes.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_date-and-time.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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