<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Formatting Dates and Times in PHP">
	  <meta name="keywords" content="php,php basic,Formatting Dates and Times in PHP">
	  <meta name="author" content="webschooltoday.com">
    <title>Formatting Dates and Times in PHP - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Formatting Dates and Times in PHP</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_include-files.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <a href="bp_include-files.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>

                <a href="bp_get-and-post.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <h1>PHP <span>Date</span> and <span>Time</span></h1>
                <p class="summary">In this tutorial you will learn how to extract or format the date and time in PHP.</p>
                <h2>The PHP <code>Date()</code> Function</h2>
                <p>The PHP <code>date()</code> function convert a timestamp to a more readable date and time.</p>
                <p>The computer stores dates and times in a format called UNIX Timestamp, which measures time as a number of seconds since the beginning of the Unix epoch (midnight Greenwich Mean Time on January 1, 1970 i.e. January 1, 1970 00:00:00 GMT ).</p>
                <p class="space">Since this is an impractical format for humans to read, PHP converts a timestamp to a format that is readable to humans and dates from your notation into a timestamp the computer understands. The syntax of the PHP <code>date()</code> function can be given with.</p>
                <div class="shadow">
					<div class="syntax"><span class="keyword">date</span>(<i>format</i>, <i>timestamp</i>)</div>
				</div>
                <p>The <em>format</em> parameter in the <code>date()</code> function is required which specifies the format of returned date and time. However the <em>timestamp</em> is an optional parameter, if not included then current date and time will be used. The following statement displays today's date:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabec80.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

&lt;?php
$today = date("d/m/Y");
echo $today;
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The PHP <code>date()</code> function return the current date and time according to the built-in clock of the web server on which the script has been executed.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Formatting the Dates and Times with PHP</h2>
                <p>The format parameter of the <code>date()</code> function is in fact a string that can contain multiple characters allowing you to generate a date string containing various components of the date and time, like day of the week, AM or PM, etc. Here are some the date-related formatting characters that are commonly used in format string:</p>
                <ul>
                	<li>d - Represent day of the month; two digits with leading zeros (01 or 31)</li>
                    <li>D - Represent day of the week in text as an abbreviation (Mon to Sun)</li>
                    <li>m - Represent month in numbers with leading zeros (01 or 12)</li>
                    <li>M - Represent month in text, abbreviated (Jan to Dec)</li>
                    <li>y - Represent year in two digits (08 or 14)</li>
                    <li>Y - Represent year in four digits (2008 or 2014)</li>
                </ul>
                <p>The parts of the date can be separated by inserting other characters, like hyphens (<code>-</code>), dots (<code>.</code>), slashes (<code>/</code>), or spaces to add additional visual formatting.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab89fc.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

&lt;?php
echo date("d/m/Y") . "&lt;br&gt;";
echo date("d-m-Y") . "&lt;br&gt;";
echo date("d.m.Y");
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
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> You can use the PHP <code>date()</code> function to automatically update the copyright duration on your website, like: <code>Copyright &amp;copy; 2010-&lt;?php echo date("Y")?&gt;.</code></p>
                        </div>
                    </div>
                </div>
                <p>Similarly you can use the following characters to format the time string:</p>
                <ul>
                    <li>h - Represent hour in 12-hour format with leading zeros (01 to 12)</li>
                    <li>H - Represent hour in in 24-hour format with leading zeros (00 to 23)</li>
                    <li>i - Represent minutes with leading zeros (00 to 59)</li>
                    <li>s - Represent seconds with leading zeros (00 to 59)</li>
                    <li>a - Represent lowercase ante meridiem and post meridiem (am or pm)</li>
                    <li>A - Represent uppercase Ante meridiem and Post meridiem (AM or PM)</li>
                </ul>
                <p>The PHP code in the following example displays the date in different formats:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9d04.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

&lt;?php
echo date("h:i:s") . "&lt;br&gt;";
echo date("F d, Y h:i:s A") . "&lt;br&gt;";
echo date("h:i a");
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
                <p style="display:none;">Please check out the PHP <code><a href="#">date()</a></code> function reference for a complete list of all the characters that can be used inside the format parameter.</p>
                <hr />
                <h2>The PHP <code>time()</code> Function</h2>
                <p>The <code>time()</code> function is used to get the current time as a Unix timestamp (the number of seconds since the beginning of the Unix epoch: January 1 1970 00:00:00 GMT).</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3a3d.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

&lt;?php
// Executed at March 05, 2014 07:19:18
$timestamp = time();
echo($timestamp);
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
                <p>The above example produce the following output.</p>
                <div class="output-box">
                    1394003958
                </div>
                <p>We can convert this timestamp to a human readable date through passing it to the previously introduce <code>date()</code> function.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf783.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

&lt;?php
$timestamp = 1394003958;
echo(date("F d, Y h:i:s", $timestamp));
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

							</script>                    </div>
                </div>
                <p>The above example produce the following output.</p>
                <div class="output-box">
                    March 05, 2014 07:19:18
                </div>
                <hr />
                <h2>The PHP <code>mktime()</code> Function</h2>
                <p>The <code>mktime()</code> function is used to create the timestamp based on a specific date and time. If no date and time is provided, the timestamp for the current date and time is returned.</p>
                <p>The syntax of the <code>mktime()</code> function can be given with:</p>
                <div class="shadow">
                    <div class="syntax"><span class="keyword">mktime</span>(<i>hour</i>, <i>minute</i>, <i>second</i>, <i>month</i>, <i>day</i>, <i>year</i>)</div>
                </div>
                <p>The following example displays the timestamp corresponding to 3:20:12 pm on May 10, 2014:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabcc31.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

&lt;?php
// Create the timestamp for a particular date
echo mktime(15, 20, 12, 5, 10, 2014);
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
                <p>The above example produce the following output.</p>
                <div class="output-box">
                    1399735212
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> You can leave out as many arguments as you like, and the value corresponding to the current time will be used instead. If you omit all the arguments, the <code>mktime()</code> function will return the UNIX timestamp corresponding to the current date and time, just like <code>time()</code>.</p>
                        </div>
                    </div>
                </div>
                <p>The <code>mktime()</code> function can be used to find the weekday name corresponding to a particular date. To do this, simply use the 'l' (lowercase 'L') character with your timestamp, as in the following example, which displays the day that falls on April 1, 2014:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab74ae.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

&lt;?php
// Get the weekday name of a particular date
echo date('l', mktime(0, 0, 0, 4, 1, 2014));
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
                <p>The above example produce the following output.</p>
                <div class="output-box">
                    Tuesday
                </div>
                <p>The <code>mktime()</code> function can also be used to find a particular date in future after a specific time period. As in the following example, which displays the date which falls on after 30 month from the current date?</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab70be.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

&lt;?php
// Executed at March 05, 2014
$futureDate = mktime(0, 0, 0, date("m")+30, date("d"), date("Y"));
echo date("d/m/Y", $futureDate);
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
                <p>The above example produce the following output.</p>
                <div class="output-box">
                    05/09/2016 
                </div>
                <hr />
                <h2>Complete PHP Date Reference</h2>
                <p>Please check out the <a href="../bp_reference/bp_date-and-time-functions.php">PHP Date/Time Functions</a> reference section for a complete list of all the useful date and time functions available in PHP.</p>
                <div class="bottom-link clearfix">
                    <a href="bp_get-and-post.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_include-files.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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