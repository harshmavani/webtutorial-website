
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="New Input Types in HTML5">
	  <meta name="keywords" content="css,css3,New Input Types in HTML5">
	  <meta name="author" content="webschooltoday.com">
    <title>New Input Types in HTML5 - WebSchool Today</title>

	<style>
    .new-input-list ul li{float:left;width:29%}
    </style>
    	<?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">New Input Types in HTML5</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="htl_canvas.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

            	<a href="ht_validation.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML5 <span>New Input Types</span></h1>
                <p class="summary">In this tutorial you will learn about the new input types that have been introduced in HTML5.</p>
				<h2>New Input Types in HTML5</h2>
				<p>HTML5 introduces several new <a href="../info-html/ht_input-tag.php"><code>&lt;input&gt;</code></a> types like email, date, time, color, range, and so on. to improve the user experience and to make the forms more interactive. However, if a browser failed to recognize these new input types, it will treat them like a normal text box.</p>
				<p class="break">In this section we're going to take a brief look at each of the following new input types:</p>
				<div class="new-input-list clearfix space">
					<ul>
						<li><a href="#color-input">color</a></li>
						<li><a href="#date-input">date</a></li>
						<li><a href="#datetime-local-input">datetime-local</a></li>
						<li><a href="#email-input">email</a></li>
						<li><a href="#month-input">month</a></li>
						<li><a href="#number-input">number</a></li>
						<li><a href="#range-input">range</a></li>
						<li><a href="#search-input">search</a></li>
						<li><a href="#tel-input">tel</a></li>
						<li><a href="#time-input">time</a></li>
						<li><a href="#url-input">url</a></li>
						<li><a href="#week-input">week</a></li>
					</ul>
                </div>
                <p>There was also a <code>datetime</code> input type for entering a date and time, but it is now obsolete.</p>
                <hr />
				<h2 id="color-input">Input Type Color</h2>
                <p>The <code>color</code> input type allows the user to select a color from a color picker and returns the color value in hexadecimal format (<code>#rrggbb</code>). If you don't specify a value, the default is <code>#000000</code>, which is black.</p>
                <p>Let's try out the following example to understand how it basically works:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab725b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        <form>
    <label for="mycolor">Select Color:</label>
    <input type="color" value="#00ff00" id="mycolor">
</form>
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
                            <p><strong>Read Carefully:</strong> The color input (i.e. <code>type="color"</code>) is supported in all major modern web browsers such as Firefox, Chrome, Opera, Safari (12.1+), Edge (14+). Not supported by the Microsoft Internet&nbsp;Explorer and older version of Apple Safari browsers.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<hr />
				<h2 id="date-input">Input Type Date</h2>
                <p>The <code>date</code> input type allows the user to select a date from a drop-down calendar.</p>
                <p>The date value includes the year, month, and day, but not the time.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7a4b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        <form>
    <label for="mydate">Select Date:</label>
    <input type="date" value="2019-04-15" id="mydate">
</form>
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
                <!--Note box-->
				<div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The date input (i.e. <code>type="date"</code>) is supported by the Chrome, Firefox, Opera and Edge browsers. Not supported by the Internet Explorer and Safari browsers.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<hr />
				<h2 id="datetime-local-input">Input Type Datetime-local</h2>
                <p>The <code>datetime-local</code> input type allows the user to select both local date and time, including the year, month, and day as well as the time in hours and minutes.</p>
                <p>Let's try out the following example to understand how it basically works:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab861e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        <form>
    <label for="mydatetime">Choose Date and Time:</label>
    <input type="datetime-local" id="mydatetime">
</form>
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
				<!--Warning box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab warning-icon" title="Warning"><i></i></div>
						<div class="warning-box">
							<p><strong>Warning:</strong> The input <code>type="datetime-local"</code> is not supported by Firefox, Safari, and Internet Explorer browsers. Currently supported by Chrome, Edge, and Opera browsers.</p>
						</div>
					</div>
				</div>
				<!--End:Warning box-->
				<hr />
				<h2 id="email-input">Input Type Email</h2>
				<p>The <code>email</code> input type allows the user to enter e-mail address. It is very similar to a standard text input type, but if it is used in combination with the <code>required</code> attribute, the browser may look for the patterns to ensure a properly-formatted e-mail address should be entered.</p>
                <p>Let's try out this example by entering any e-mail address to see how it actually works:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab798e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        <form>
    <label for="myemail">Enter Email Address:</label>
    <input type="email" id="myemail" required>
</form>
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
                <!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> You can style the email input field for different validation states, when an value is entered using the <code>:valid</code>, <code>:invalid</code> or <code>:required</code> <a href="../des-css/css-pseudo-classes.php">pseudo-classes</a>.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
                <!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> The validation for the email input (i.e. <code>type="email"</code>) is supported by all major browsers like Firefox, Chrome, Safari, Opera, Internet Explorer 10 and above.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2 id="month-input">Input Type Month</h2>
                <p>The <code>month</code> input type allows the user to select a month and year from a drop-down calendar.</p>
                <p>The value is a string in the format "YYYY-MM", where YYYY is the four-digit year and MM is the month number. Let's try out an example to see how this basically works:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbd9b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        <form>
    <label for="mymonth">Select Month:</label>
    <input type="month" id="mymonth">
</form>
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
				<!--Warning box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab warning-icon" title="Warning"><i></i></div>
						<div class="warning-box">
							<p><strong>Warning:</strong> The input <code>type="month"</code> is not supported by Firefox, Safari and Internet Explorer browsers. Currently supported in Chrome, Edge, and Opera browsers.</p>
						</div>
					</div>
				</div>
				<!--End:Warning box-->
				<hr />
				<h2 id="number-input">Input Type Number</h2>
				<p>The <code>number</code> input type can be used for entering a numerical value. You can also restrict the user to enter only acceptable values using the additional attributes <code>min</code>, <code>max</code>, and <code>step</code>.</p>
                <p>The following example will allow you to enter a numeric value between 1 to 10.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab67dc.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

                        <form>
    <label for="mynumber">Enter a Number:</label>
    <input type="number" min="1" max="10" step="0.5" id="mynumber">
</form>
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
                <!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> The number input (i.e. <code>type="number"</code>) is supported by all major web browsers such as Firefox, Chrome, Safari, Opera, Internet Explorer 10 and above. Internet Explorer however recognized the number but do not provide increment and decrement spin buttons.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2 id="range-input">Input Type Range</h2>
				<p>The <code>range</code> input type can be used for entering a numerical value within a specified range. It works very similar to <code>number</code> input, but it offers a simpler control for entering a number.</p>
                <p>Let's try out the following example to understand how it basically works: </p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3942.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

                        <form>
    <label for="mynumber">Select a Number:</label>
    <input type="range" min="1" max="10" step="0.5" id="mynumber">    
</form>
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
                <!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> The range input (i.e. <code>type="range"</code>) is supported by all major web browsers such as Firefox, Chrome, Safari, Opera, Internet Explorer 10 and above.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2 id="search-input">Input Type Search</h2>
				<p>The <code>search</code> input type can be used for creating search input fields.</p>
				<p>A search field typically behaves like a regular text field, but in some browsers like Chrome and Safari as soon as you start typing in the search box a small cross appears on the right side of the field that lets you quickly clear the search field. Let's try out an example to see how it works:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf9bc.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

                        <form>
    <label for="mysearch">Search Website:</label>
    <input type="search" id="mysearch">
</form>
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
                <!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> The search input (i.e. <code>type="search"</code>) is supported by all major web browsers such as Firefox, Chrome, Safari, Opera, Internet Explorer 10 and above.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2 id="tel-input">Input Type Tel</h2>
                <p>The <code>tel</code> input type can be used for entering a telephone number.</p>
                <p>Browsers don't support tel input validation natively. However, you can use the <code>placeholder</code> attribute to help users in entering the correct format for a phone number, or specify a <a href="../javascript-tutorial/javascript-regular-expressions.php">regular expression</a> to validate the user input using the <code>pattern</code> attribute. Let's check out an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3608.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

                        <form>
    <label for="myphone">Telephone Number:</label>
    <input type="tel" id="myphone" placeholder="xx-xxxx-xxxx" required>
</form>
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
                <!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> The validation for tel input (i.e. <code>type="tel"</code>) is currently not supported by any browser because format for phone numbers vary so much across countries, but it is still useful. Mobile browsers display a numeric keyboard for tel input field for entering phone numbers.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2 id="time-input">Input Type Time</h2>
                <p>The <code>time</code> input type can be used for entering a time (hours and minutes).</p>
                <p>Browser may use 12- or 24-hour format for inputting times, based on local system's time setting.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8b54.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

                        <form>
    <label for="mytime">Select Time:</label>
    <input type="time" id="mytime">
</form>
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
				<!--Warning box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab warning-icon" title="Warning"><i></i></div>
						<div class="warning-box">
							<p><strong>Warning:</strong> The input <code>type="time"</code> is not supported by Internet Explorer and Safari browsers. Currently supported by Chrome, Firefox, Edge, and Opera browsers.</p>
						</div>
					</div>
				</div>
				<!--End:Warning box-->
				<hr />
				<h2 id="url-input">Input Type URL</h2>
                <p>The <code>url</code> input type can be used for entering URL's or web addresses.</p>
                <p>You can use the <code>multiple</code> attribute to enter more than one URL. Also, if <code>required</code> attribute is specified browser will automatically carry out validation to ensure that only text that matches the standard format for URLs is entered into the input box. Let's see how this works:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab85e4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11">

                        <form>
    <label for="myurl">Enter Website URL:</label>
    <input type="url" id="myurl" required>
</form>
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
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> The validation for the url input (i.e. <code>type="url"</code>) is supported by all major browsers like Firefox, Chrome, Safari, Opera, Internet Explorer 10 and above.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2 id="week-input">Input Type Week</h2>
                <p>The <code>week</code> input type allows the user to select a week and year from a drop-down calendar.</p>
                <p>Let's try out the following example to understand how this works:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab07da.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code12">

                        <form>
    <label for="myweek">Select Week:</label>
    <input type="week" id="myweek">
</form>
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
				<!--Warning box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab warning-icon" title="Warning"><i></i></div>
						<div class="warning-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> The input <code>type="week"</code> is not supported by Firefox, Safari and Internet Explorer browsers. Currently supported by Chrome, Edge, and Opera browsers.</p>
						</div>
					</div>
				</div>
				<!--End:Warning box-->
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="ht_validation.php" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="htl_canvas.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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