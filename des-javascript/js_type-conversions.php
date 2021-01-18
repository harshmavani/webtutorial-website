<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Type Conversions">
	  <meta name="keywords" content="javascript,js,JavaScript Type Conversions">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Type Conversions - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Type Conversions</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_event-listeners.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_math-operations.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Type Conversions</span></h1>
                <p class="summary">In this tutorial you will learn how to convert the data type of a value in JavaScript.</p>
				<h2>Automatic Type Conversions</h2>
				<p>Most of the time JavaScript automatically converts values from one data type to another when used in expression. For example, in mathematical operations values are automatically converted to numbers. However, the end result is not always what you expected:</p>
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab95d4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

						alert("3" - 2);  // Outputs: 1 
alert("3" + 2);  // Outputs: "32" (because + is also concatenation operator)
alert(3 + "2");  // Outputs: "32"
alert("3" * "2");  // Outputs: 6
alert("10" / "2");  // Outputs: 5
alert(1 + true);  // Outputs: 2 (because true is converted to 1)
alert(1 + false);  // Outputs: 1 (because false is converted to 0)
alert(1 + undefined);  // Outputs: NaN
alert(3 + null);  // Outputs: 3 (because null is converted to 0)
alert("3" + null);  // Outputs: "3null"
alert(true + null);  // Outputs: 1
alert(true + undefined);  // Outputs: NaN
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
				<p class="space">There are situations when we need to manually convert a value from one data type to another. JavaScript provides a number of different methods to perform such data type conversion task. In the following sections we will discuss those methods in detail.</p>
				<h2>Converting Values to Numbers</h2>
				<p>The numeric conversion is usually required when we read the value from a string-based source like a text input, but we expect a number to be entered, or want to treat it as a number.</p>
				<p>In such situations, you can use the global method <code>Number()</code> to convert strings to numbers.</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelaba8e3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code2">

						var str = "123";
alert(typeof str); // Outputs: string

var num = Number(str); // Becomes a number 123
alert(typeof num); // Outputs: number
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
				<p>If the string is not a valid number, the result will be <code>NaN</code>. Empty strings convert to 0.</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab06e8.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code3">

						Number("10.5")  // returns 10.5
Number(true)  // returns 1
Number(false)  // returns 0
Number(null)  // returns 0
Number(" 123 ")  // returns 123
Number(" ")  // returns 0
Number("")  // returns 0
Number("123e-1")  // returns 12.3
Number("0xFF") // returns 255 (hexadecimal representation)
Number("undefined")  // returns NaN
Number("null")  // returns NaN
Number("Hello World!")  // returns NaN
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
				<hr />
				<h2>Converting Values to Strings</h2>
				<p>Similarly, you can use the <code>String()</code> method to convert a value to a string.</p>
				<p>The following example will show you how to convert a Boolean value to a string.</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab98df.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code4">

						var bool = true;
alert(typeof bool); // Outputs: boolean

var str = String(bool); // Becomes a string "true"
alert(typeof str); // Outputs: string
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
				<p>The <code>String()</code> method can be used on any type of numbers, variables, or expressions:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab0eaf.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code5">

						String(10.5)  // returns "10.5"
String(123)  // returns "123"
String(100 + 23)  // returns "123"
String(true)  // returns "true"
String(false)  // returns "false"
String(123e-1)  // returns "12.3"
String(0xFF) // returns "255"
String(undefined)  // returns "undefined"
String(null)  // returns "null"
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
				<p>Another technique for converting numbers to strings is using the <code>toString()</code> method:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab093f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code6">

						var num = 123;
alert(typeof num); // Outputs: number

var str = num.toString(); // Becomes a string "123"
alert(typeof str); // Outputs: string
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
				<hr />
				<h2>Converting Values to Boolean</h2>
				<p>Boolean conversions are also pretty straight forward. You can use the <code>Boolean()</code> method to convert any value to a Boolean value (i.e. <code>true</code> or <code>false</code>).</p>
				<p>Values that are intuitively empty, like <code>0</code>, <code>null</code>, <code>false</code>, <code>undefined</code>, <code>NaN</code> or an empty string (<code>""</code>) become <code>false</code>. Other values become <code>true</code>, as shown in the example here:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab8c78.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code7">

						Boolean(0) // returns false
Boolean(null)  // returns false
Boolean(false)  // returns false
Boolean(undefined)  // returns false
Boolean(NaN)  // returns false
Boolean("") // returns false
Boolean("0") // returns true
Boolean(1) // returns true
Boolean(true) // returns true
Boolean("false") // returns true
Boolean("Hello World!") // returns true
Boolean(" ") // returns true
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
				<p>If you see the example carefully you'll find the <code>Boolean()</code> method returns <code>true</code> for the string with zero "0", and string "false", whereas it returns <code>false</code> for the values 0 and false.</p>
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> In some programming languages (namely PHP) the string "0" is treated as <code>false</code>. But in JavaScript a non-empty string is always <code>true</code>.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>Object to Primitive Conversions</h2>
				<p>All the conversions we've seen so far are performed on primitive types (data types that can hold only a single value at a time). But what happens with complex data types such as object, let's see.</p>
				<p>JavaScript automatically perform object-to-string conversion when we try to print out an object like <code>alert(obj)</code> or <code>document.write(obj)</code>. Likewise, the object-to-number conversions are automatically performed when we try to add or subtract objects or apply mathematical functions, for example, adding or subtracting date objects. Here's an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab0861.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code8">

						var date1 = new Date(2018, 5, 24);
alert(date1); // Display date string like: Sun Jun 24 2018 00:00:00

var date2 = new Date(2025, 8, 15);
var time = date2 - date1;
alert(time) // Display time in milliseconds: 228096000000
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
				<p>You can also perform the object-to-string conversion manually using the <code>toString()</code> method, which return a string representation of the object. Additionally, you can use the <code>valueOf()</code> method on some objects such as Date to perform object-to-number conversion. Here's an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab15fbhtml" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code9">

						var arr = [1, 2, 3];
arr.toString(); // returns "1,2,3"

var d = new Date(2018, 5, 24);
d.toDateString(); // returns date like Sun Jun 24 2018 00:00:00
d.valueOf(); // returns 1529778600000
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
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> Object-to-Boolean conversion are insignificant, because all objects (including arrays and functions) are true in a boolean context. So there are only string and numeric conversions.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<hr />
				<h2>Type Conversions Using Operators</h2>
				<p>Certain JavaScript operators, such as <code>+</code> and <code>-</code> operators, can also be used to perform type conversions, as demonstrated in the following example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab952c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code10">

						var x = "10"; // x is a string
var y = +x;
alert(typeof(y)); // Outputs: number
alert(y); // Outputs: 10

var x = 10; // x is a number
var y = x + "";
alert(typeof(y)); // Outputs: string
alert(y); // Outputs: 10

var x = "15"; // x is a string
var y = x - 0;
alert(typeof(y)); // Outputs: number
alert(y); // Outputs: 15

var x = "123";
alert(typeof(!!x)); // Outputs: boolean
alert(!!x); // Outputs: true

var x = "Hello World!";
var y = +x;
alert(typeof(y));// Outputs: number
alert(y); // Outputs: NaN
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
				<p>We hope you've understood the basics of data type conversions. Please, check out the chapter on <a href="js_data-types.php">JavaScript data types</a> to learn more about the different data types available in JavaScript.</p>
				<!--Bottom Navigation-->				
                <div class="bottom-link clearfix">
                    <a href="js_math-operations.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_event-listeners.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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