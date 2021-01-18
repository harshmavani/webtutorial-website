<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Math Operations">
	  <meta name="keywords" content="javascript,js,JavaScript Math Operations">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Math Operations - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Math Operations</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_type-conversions.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_date-and-time.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Math Operations</span></h1>
                <p class="summary">In this tutorial you will learn how to perform math operations in JavaScript.</p>
				<h2>Using the Math Object</h2>
				<p class="space">The JavaScript Math object provides a number of useful properties and methods for performing mathematical tasks like, generating random numbers, rounding numbers, obtaining values such as PI and performing calculation, and so on. It also includes methods for performing mathematical task that are normally impossible or too complex to perform using standard <a href="js_operators.php#arithmetic">mathematical operators</a> (<code>+</code>, <code>-</code>,<code>*</code>, and <code>/</code>) such as calculating sine or cosine values.</p>
				<h2>The Math.PI Property</h2>
				<p>The <code>Math.PI</code> property represents the ratio of the circumference of a circle to its diameter. PI (<code>&pi;</code>) is a mathematical constant, which is approximately 3.14159: <code>Math.PI = &pi; &#x2248; 3.14159</code></p>
				<p>Here is an example that calculates the area of a circle using the Math.PI property.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd777.php?topic=javascript&amp;file=pi-property" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        // Printing PI value
document.write(Math.PI);  // Prints: 3.141592653589793
 
// Function to calculate circle area
function calculateCircleArea(radius){
    var area = (Math.PI) * radius * radius;
    return area;
}
 
document.write(calculateCircleArea(5));  // Prints: 78.53981633974483
document.write(calculateCircleArea(10));  // Prints: 314.1592653589793
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
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The Math object is a built-in JavaScript object so its properties and methods can be accessed directly. You'll never need to create a Math object, because it is automatically created by the JavaScript interpreter.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<hr />
				<h2>Getting the Absolute Value</h2>
				<p>The <code>Math.abs()</code> method is used to calculate the absolute (positive) value of a number. Therefore, -1 is returned as 1, -5 as 5, and so on. Here is an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab73eb.php?topic=javascript&amp;file=get-the-absolute-value-of-a-number" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        document.write(Math.abs(-1));  // Prints: 1
document.write(Math.abs(1));  // Prints: 1
document.write(Math.abs(-5));  // Prints: 5
document.write(Math.abs(-10.5));  // Prints: 10.5
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
				<h2>Generating a Random Number</h2>
				<p>The <code>Math.random()</code> method is used to generate a floating-point random number in the range from <code>0</code> inclusive up to but not including <code>1</code>. However, if you want a random integer between zero and an integer higher than one, you could use the following solution:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0973.php?topic=javascript&amp;file=generate-a-random-integer" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        document.write(Math.random());  // Expected output: a number between 0 and 1
 
 // Function to create random integer 
 function getRandomInt(max) {
     return Math.floor(Math.random() * max);
 }
  
 document.write(getRandomInt(3));  // Expected output: 0, 1 or 2
 document.write(getRandomInt(1));  // Expected output: 0
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
				<h2>Calculating the Square Root of a Number</h2>
				<p>The <code>Math.sqrt()</code> method is used to calculate the square root of a number: <code>Math.sqrt(<i>x</i>) = <span class="sqrt"><i>x</i></span></code></p>
				<p>If the number is negative, <a href="js_data-types.php#number"><code>NaN</code></a> is returned. Here is an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba21a.php?topic=javascript&amp;file=calculate-the-square-root-of-a-number" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        document.write(Math.sqrt(4));  // Prints: 2
document.write(Math.sqrt(16));  // Prints: 4
document.write(Math.sqrt(0.25));  // Prints: 0.5
document.write(Math.sqrt(-9));  // Prints: NaN
 
/* Function to calculate hypotenuse.
Hypotenuse is the longest side of a right-angled triangle. */
function calculateHypotenuse(a, b) {
    return Math.sqrt((a * a) + (b * b));
}
 
document.write(calculateHypotenuse(3, 4));  // Prints: 5
document.write(calculateHypotenuse(5, 12));  // Prints: 13
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
				<hr />
				<h2>Rounding Numbers</h2>
				<p>The JavaScript Math object provides few methods to round numbers, each one has its own purpose. The following section will describe these methods in detials.</p>
				<h3 id="ceil">The <code>ceil()</code> Method</h3>
				<p>The <code>Math.ceil()</code> method rounds a number up to the next highest integer. So, 3.5 becomes 4, -5.7 becomes -5 (because -5 is greater than -6). Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba81c.php?topic=javascript&amp;file=round-a-number-up" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        document.write(Math.ceil(3.5));  // Prints: 4
document.write(Math.ceil(-5.7));  // Prints: -5
document.write(Math.ceil(9.99));  // Prints: 10
document.write(Math.ceil(-9.99));  // Prints: -9
document.write(Math.ceil(0));  // Prints: 0
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
				<h3 id="floor">The <code>floor()</code> Method</h3>
				<p>The <code>Math.floor()</code> method rounds a number down to the next lowest integer. So, 3.5 becomes 3, -5.7 becomes -6 (because -6 is lesser than -5). Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab09c1.php?topic=javascript&amp;file=round-a-number-down" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

                        document.write(Math.floor(3.5));  // Prints: 3
document.write(Math.floor(-5.7));  // Prints: -6
document.write(Math.floor(9.99));  // Prints: 9
document.write(Math.floor(-9.99));  // Prints: -10
document.write(Math.floor(0));  // Prints: 0
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
				<h3 id="round">The <code>round()</code> Method</h3>
				<p>The <code>Math.round()</code> method rounds a number to the nearest integer in such a way that if the decimal part is <code>.5</code> or greater, number is rounded up, otherwise rounded down. So, 3.5 becomes 4, -5.7 becomes -6, 4.49 becomes 4, and so on. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab72d7.php?topic=javascript&amp;file=round-a-number-to-the-nearest-integer" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

                        document.write(Math.round(3.5));  // Prints: 4
document.write(Math.round(-5.7));  // Prints: -6
document.write(Math.round(7.25));  // Prints: 7
document.write(Math.round(4.49));  // Prints: 4
document.write(Math.round(0));  // Prints: 0
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
				<h2>Finding the Largest and Smallest Numbers</h2>
				<p>The <code>Math.max()</code> and <code>Math.min()</code> methods is used to find which number is the largest or smallest in a group of numbers, respectively. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf65f.php?topic=javascript&amp;file=find-the-largest-and-smallest-numbers-in-a-set" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

                        document.write(Math.max(1, 3, 2));  // Prints: 3
document.write(Math.max(-1, -3, -2));  // Prints: -1
 
document.write(Math.min(1, 3, 2));  // Prints: 1
document.write(Math.min(-1, -3, -2));  // Prints: -3
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
				<p>You can also find the maximum or minimum value within an array or an array-like object using the <code>apply()</code> method, as shown in the following example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabadcb.php?topic=javascript&amp;file=find-the-maximum-and-minimum-values-in-an-array" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

                        var numbers = [1, 3, 2];
 
 document.write(Math.max.apply(null, numbers));  // Prints: 3
 document.write(Math.min.apply(null, numbers));  // Prints: 1
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
				<p>There is even simpler way to do this. In ECMAScript 6 you can accomplish the same thing using the new <a href="js_es6-features.php#spread-operator">spread operator</a> (<code>...</code>), as shown in example below:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba937.php?topic=javascript&amp;file=pass-an-array-to-max-and-min-methods-using-spread-operator" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

                        var numbers = [1, 3, 2];
 
 document.write(Math.max(...numbers));  // Prints: 3
 document.write(Math.min(...numbers));  // Prints: 1
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
				<hr />
				<h2>Raising Numbers to a Power</h2>
				<p>The <code>Math.pow()</code> method is used to raise a number to a specified power.</p>
				<p>The expression <code>Math.pow(<i>x</i>, <i>y</i>)</code>&mdash;equivalent to mathmatically <code>x<sup>y</sup></code>&mdash;shows how many times the <em>base</em> <code><i>x</i></code> is multiplied by the <em>exponent</em> <code><i>y</i></code>. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabac60.php?topic=javascript&amp;file=raise-a-number-to-a-certain-power" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11">

                        document.write(Math.pow(3, 2));  // Prints: 9
document.write(Math.pow(0, 1));  // Prints: 0
document.write(Math.pow(5, -2));  // Prints: 0.04
document.write(Math.pow(16, 0.5));  // Prints: 4 (square root of 4)
document.write(Math.pow(8, 1/3));  // Prints: 2 (cube root of 8)
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
				<p>A positive exponent indicates multiplication (5<sup>2</sup> = 5 x 5 = 25), a negative exponent indicates division (5<sup>-2</sup> = 1/5<sup>2</sup> = 0.04), whereas a fractional exponent indicates a root of the base.</p>
				<hr />
				<h2>Performing Trigonometric Operations</h2>
				<p>The JavaScript's Math object also provides several trigonometric methods such as <code>sin()</code>, <code>cos()</code>, <code>tan()</code> to perform trigonometric operations. These methods work in radians, so you need to multiply any degree measurements by <code>&pi;/180</code> before using them.</p>
				<p>Since, pi radians are equal to 180 degrees: <code>&pi; rad = 180&deg;</code>. Therefore, &pi;/2 radians is equal 90 degrees, &pi;/3 radians is equal to 60 degrees, and so on. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1832.php?topic=javascript&amp;file=trigonometric-operations" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code12">

                        document.write(Math.sin(0 * Math.PI / 180));  // Prints: 0
document.write(Math.sin(90 * Math.PI / 180));  // Prints: 1
document.write(Math.cos(0 * Math.PI / 180));  // Prints: 1
document.write(Math.cos(180 * Math.PI / 180));  // Prints: -1
document.write(Math.tan(0 * Math.PI / 180));  // Prints: 0
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
				<!--Bottom Navigation-->				
                <div class="bottom-link clearfix">
                    <a href="js_date-and-time.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_type-conversions.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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