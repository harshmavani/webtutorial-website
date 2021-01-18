<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Date and Time">
	  <meta name="keywords" content="javascript,JavaScript Date and Time">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Date and Time - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Date and Time</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_math-operations.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_timers.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Date and Time</span></h1>
                <p class="summary">In this tutorial you will learn how to work with date and time in JavaScript.</p>
				<h2>Using the Date Object</h2>
				<p class="space">The Date object is a built-in JavaScript object. It allows you to get the user's local time by accessing the computer system clock through the browser. The Date object also provides several methods for managing, manipulating, and formatting dates and times.</p>
				<h2 class="section-title"><span>Creating a Date Object</span></h2>
				<p>Before we start working with the date and time, we need to create a Date object. Unlike other built-in objects, such as arrays or functions, dates don't have a corresponding literal form: all date objects need to be created using the Date constructor function which is <code>Date()</code>.</p>
				<p class="space">There are four different ways to create a Date object in JavaScript.</p>
				<h2>The <code>new Date()</code> Syntax</h2>
				<p>You can simply declare a new Date object without initializing its value. In this case, the date and time value will be set to the current date and time on the user's device on which the script is run.</p>
				<!--Code box-->
				<div class="example space">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabd624.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

						var d = new Date();
document.write(d);
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
				<h2>The new Date(<em>year</em>, <em>month</em>, ...) Syntax</h2>
				<p>You can also initialize a Date object by passing the following parameters separated by commas: year, month, day, hours, minutes, seconds, and milliseconds.</p>
				<p>The year and month parameters are required other parameters are optional.</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelaba3f0.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code2">

						var d = new Date(2018,0,31,14,35,20,50);
document.write(d);
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
				<p class="space">This date is actually represent 31 January 2018 at 14:35:20 and 50 milliseconds. You can ignore the time part and specify just the date part if you wish.</p>
				<h2>The new Date(<em>dateString</em>) Syntax</h2>
				<p>JavaScript also allows you to create a Date object by passing the string representing a date, or a date and time, as shown in the following example:</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab4f74.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code3">

						var d = new Date("31 January 2018");
document.write(d);
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
				<p class="space">This date represents 31 January 2018. You can also specify strings like Jan 31 2018, or any of a number of valid variations, JavaScript will automatically handle that.</p>
				<h2>The new Date(<em>milliseconds</em>) Syntax</h2>
				<p>You can also define a Date object by passing the number of milliseconds since January 1, 1970, at 00:00:00 GMT. This time is known as the <em>UNIX epoch</em> because 1970 was the year when the UNIX operating system was formally introduced. Here's an example:</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab1472.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code4">

						var d = new Date(1517356800000);
document.write(d);
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
				<p>The above date represents Wednesday 31 January 2018 05:30:00 GMT+0530.</p>
				<p>Once you have created an instance of the Date object, you can use its methods to perform various tasks, such as getting different component of a date, setting or modifying individual date and time value, etc. These methods are described in detail in the following sections.</p>
				<!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> JavaScript provides shortcuts called "literals" for creating most of the native object without having to use the <code>new</code> operator, like <code>new Object()</code>, <code>new Array()</code>, etc.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<hr />
				<h2>Getting the Current Date and Time</h2>
				<p>To get the current date and time, create a new Date object without passing any parameters. This will create an object with the current date and time. Here's an example:</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab238e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code5">

						var now = new Date();
alert(now); // Display the current date and time
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
                <!--End:Code box-->
				<p>The output of this example will look something like this (depending on time zone offset):</p>
				<div class="output-box" id="dateDemo"></div>
				<script>
					var d = new Date();
					document.getElementById("dateDemo").innerHTML = d;
				</script>				
				<hr />
				<h2>Creating the Date and Time Strings</h2>
				<p>The JavaScript Date object provides several methods, such as <code>toDateString()</code>, <code>toLocaleDateString()</code>, etc. to generate date strings in different formats. Here's is an example:</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab603e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code6">

						var d = new Date();
alert(d.toDateString()); // Display an abbreviated date string
alert(d.toLocaleDateString()); // Display a localized date string
alert(d.toISOString()); // Display the ISO standardized date string
alert(d.toUTCString()); // Display a date string converted to UTC time
alert(d.toString()); // Display the full date string with local time zone
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
                <!--End:Code box-->
				<p>Similarly, you can use the <code>toLocaleTimeString()</code>, <code>toTimeString()</code> methods of the Date object to generate time strings, as shown in the following example:</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabba41.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code7">

						var d = new Date();
alert(d.toTimeString()); // Display the time portion of the date
alert(d.toLocaleTimeString()); // Display a localized time string
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code7"), {
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
				<h2 class="section-title"><span>Getting Specific Date and Time Components</span></h2>
				<p class="space">Once you have a proper date object, a number of methods are available to you to extract details from it, such as the month, date, hours or minutes value etc. The following section describes the various methods of extracting individual pieces of information from a Date object.</p>
				<h2>Getting the Year, Month and Date</h2>
				<p>The Date object provides several methods such as <code>getFullYear()</code>, <code>getMonth()</code>, <code>getDay()</code>, etc. that you can use to extract the specific date components from the Date object, such as year, day of month, day of week, etc. respectively. The following example demonstrates how to get specific date components from the Date object using these methods:</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabf167.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code8">

						var d = new Date();
// Extracting date part
alert(d.getDate()); // Display the day of the month
alert(d.getDay()); // Display the number of days into the week (0-6)
alert(d.getMonth()); // Display the number of months into the year (0-11)
alert(d.getFullYear()); // Display the full year (four digits)
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code8"), {
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
				<p>The <code>getDay()</code> method returns a number representing the day of the week (from 0 to 6) instead of returning a name such as Sunday or Monday in such a way that, if it is Sunday, the method returns 0; and if it is Monday , the method returns 1, and so on.</p>
				<p class="space">Likewise, the <code>getMonth()</code> method returns the number of months (from 0 to 11) instead of name of the month. Here 0 represents the first month of the year. Therefore, if it is January the method returns 0 not 1; and if it is August, the method returns 7.</p>
				<h2>Getting the Hours, Minutes, Seconds, and Milliseconds</h2>
				<p>Similarly, the Date object provides methods like <code>getHours()</code>, <code>getMinutes()</code>, <code>getSeconds()</code>, <code>getTimezoneOffset()</code> etc. to extract the time components from the Date object.</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabec6e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code9">

						var d = new Date();
// Extracting time part 
alert(d.getHours()); // Display the number of hours into the day (0-23)
alert(d.getMinutes()); // Display the number of minutes into the hour (0-59)
alert(d.getSeconds()); // Display the seconds into the minute (0-59)
alert(d.getMilliseconds()); // Display the number of milliseconds into second (0-999)
alert(d.getTime()); // Display the number of milliseconds since 1/1/1970
alert(d.getTimezoneOffset()); // Display the time-zone offset (from Greenwich Mean Time) in minutes
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code9"), {
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
				<p>The <code>getHours()</code> method returns the number of hours into the day (from 0 to 23) according to the 24-hour clock. So, when it is midnight, the method returns 0; and when it is 3:00 P.M., it returns 15.</p>
				<!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The Date objects also have methods to obtain the UTC components. Just place UTC after get, such as <code>getUTCDate()</code>, <code>getUTCHour()</code>, <code>getUTCMinutes()</code>, and so on.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<hr />
				<h2 class="section-title"><span>Setting the Date and Time Values</span></h2>
				<p class="space">In addition to retrieving date and time values, you can also set or modify these values using the JavaScript. This is most often used in program where you have to change the value of a date object from one particular date or time to another. Let's see how it works.</p>
				<h2>Setting the Year, Month and Date</h2>
				<p>The Date object provides methods such as <code>setFullYear()</code>, <code>setMonth()</code> and <code>setDate()</code> methods to set the year, month, date components of the Date object respectively.</p>
				<p>For instance, in the following example we have used <code>setFullYear()</code> method to change the current date stored in a variable ahead of two year in the future.</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab9c6c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code10">

						var d = new Date();
d.setFullYear(d.getFullYear() + 2);
alert(d); // Display future date
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code10"), {
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
				<p>The output of the above example will look something like this:</p>
				<div class="output-box" id="futureDateDemo"></div>
				<script>
					var d = new Date();
					d.setFullYear(d.getFullYear() + 2);
					document.getElementById("futureDateDemo").innerHTML = d;
				</script>
				<p>Likewise, you can use the <code>setMonth()</code> method to set or modify the month part of a Date object.</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabc326.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code11">

						var d = new Date(); // Current date and time
d.setMonth(0); // Sets month to 0, January
document.write(d);
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code11"), {
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
				<p>The <code>setMonth()</code> method require an integer value from 0 to 11, if you set the value of the month greater than 11, the year value of the date object will increment.</p>
				<p>In other words, a value of 12 results in the year value increasing by 1, and the month value set to 0, as demonstrated in the following example:</p>
				<!--Code box-->
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabb6b8.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code12">

						var d = new Date(2018, 5, 24); // June 24, 2018
d.setMonth(12); // Sets month to 12, new date will be January 24, 2019
document.write(d);
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code12"), {
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
				<p>Similarly, you can modify the date part of the date object, like this:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab020e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code13">

						var d = new Date(2018, 5, 24); // June 24, 2018
d.setDate(15); // Sets date to 15, new date will be June 15, 2018
document.write(d);
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code13"), {
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
				<p>The <code>setDate()</code> method require an integer value from 1 to 31. Also, if you pass the values greater than the number of days in the month, the month will increment. For example:</p>
				<!--Code box-->
				<div class="example space">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab49aa.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code14">

						var d = new Date(2018, 5, 24); // June 24, 2018
d.setDate(36); // Sets day to 36, new date will be July 6, 2018
document.write(d);
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code14"), {
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
				<h2>Setting the Hours, Minutes and Seconds</h2>
				<p>Methods for setting the time values are also pretty straight forward. The <code>setHours()</code>, <code>setMinutes()</code>, <code>setSeconds()</code>, <code>setMilliseconds()</code> can be used to set the hour, minutes, seconds, and milliseconds part of the Date object respectively.</p>
				<p>Each method takes integer values as parameters. Hours range from 0 to 23. Minutes and seconds range from 0 to 59. And milliseconds range from 0 to 999. Here is an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab2225.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code15">

						var d = new Date(2018, 5, 24); // June 24, 2018 00:00:00
d.setHours(8);
d.setMinutes(30);
d.setSeconds(45);
d.setMilliseconds(600);
document.write(d);
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code15"), {
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
				<p>The output of the above example will look something like the following:</p>
				<div class="output-box" id="setTimeDemo"></div>
				<script>
					var d = new Date(2018, 5, 24);
					d.setHours(8);
					d.setMinutes(30);
					d.setSeconds(45);
					d.setMilliseconds(600);
					document.getElementById("setTimeDemo").innerHTML = d;
				</script>
				<!--Bottom Navigation-->				
                <div class="bottom-link clearfix">
                    <a href="js_timers.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_math-operations.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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