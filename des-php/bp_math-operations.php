<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="PHP Math Operations">
	  <meta name="keywords" content="php,php basic,PHP Math Operations">
	  <meta name="author" content="webschooltoday.com">
    <title>PHP Math Operations - WebSchool Today</title>    
    <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">PHP Math Operations</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_get-and-post.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_functions.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Math Operations</span></h1>
                <p class="summary">In this tutorial you will learn how to perform mathematical operations in PHP.</p>
                <h2>Performing Math Operations</h2>
				<p>PHP has several built-in functions that help you perform anything from simple additions or subtraction to advanced calculations. You've already seen how to perform basic mathematical operations in <a href="bp_operators.php">PHP operators</a> chapter. Let's check out one more example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab80db.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

&lt;?php
echo 7 + 3; // 0utputs: 10
echo 7 - 2; // 0utputs: 5
echo 7 * 2; // 0utputs: 14
echo 7 / 2; // 0utputs: 3.5
echo 7 % 2; // 0utputs: 1
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
				<p>Every math operation has a certain precedence level; generally multiplication and division are performed before addition and subtraction. However, parentheses can alter this precedence; expressions enclosed within parentheses are always evaluated first, regardless of the operation's precedence level, as demonstrated in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2807.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

&lt;?php
echo 5 + 4 * 10;         // 0utputs: 45
echo (5 + 4) * 10;       // 0utputs: 90
echo 5 + 4 * 10 / 2;     // 0utputs: 25
echo 8 * 10 / 4 - 2;     // 0utputs: 18
echo 8 * 10 / (4 - 2);   // 0utputs: 40
echo 8 + 10 / 4 - 2;     // 0utputs: 8.5
echo (8 + 10) / (4 - 2); // 0utputs: 9
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
				<p class="space">In the following section we're going to look at some built-in PHP functions that are most frequently used in performing mathematical operations.</p>
				<hr />
				<h2>Find the Absolute Value of a Number</h2>
				<p>The absolute value of an <a href="bp_data-types.php#integer">integer</a> or a <a href="bp_data-types.php#float">float</a> can be found with the <code>abs()</code> function, as demonstrated in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8131.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

&lt;?php
echo abs(5);    // 0utputs: 5 (integer)
echo abs(-5);   // 0utputs: 5 (integer)
echo abs(4.2);  // 0utputs: 4.2 (double/float)
echo abs(-4.2); // 0utputs: 4.2 (double/float)
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
				<p>As you can see if the given number is negative, the valued returned is positive. But, if the number is positive, this function simply returns the number.</p>
				<hr />
				<h2>Round a Fractional Value Up or Down</h2>
				<p>The <code>ceil()</code> function can be used to round a fractional value up to the next highest integer value, whereas the <code>floor()</code> function can be used to round a fractional value down to the next lowest integer value, as demonstrated in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0517.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

&lt;?php
// Round fractions up
echo ceil(4.2);    // 0utputs: 5
echo ceil(9.99);   // 0utputs: 10
echo ceil(-5.18);  // 0utputs: -5
 
// Round fractions down
echo floor(4.2);    // 0utputs: 4
echo floor(9.99);   // 0utputs: 9
echo floor(-5.18);  // 0utputs: -6
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
				<hr />
				<h2>Find the Square Root of a Number</h2>
				<p>You can use the <code>sqrt()</code> function to find the square root of a positive number. This function returns a special value <code>NAN</code> for negative numbers. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9c27.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

&lt;?php
echo sqrt(9);   // 0utputs: 3
echo sqrt(25);  // 0utputs: 5
echo sqrt(10);  // 0utputs: 3.1622776601684
echo sqrt(-16); // 0utputs: NAN
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
				<hr />
				<h2>Generate a Random Number</h2>
				<p>The <code>rand()</code> function can be used to generate a random number. You can optionally specify a range by passing the min, max arguments, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabedb7.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

&lt;?php
// Generate some random numbers
echo rand() . "&lt;br&gt;";
echo rand() . "&lt;br&gt;";
 
// Generate some random numbers between 1 and 10 (inclusive)
echo rand(1, 10) . "&lt;br&gt;";
echo rand(1, 10) . "&lt;br&gt;";
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
				<p>If <code>rand()</code> function is called without the optional <code class="plain"><b>min</b></code>, <code class="plain"><b>max</b></code> arguments, it returns a pseudo-random number between <code>0</code> and <code>getrandmax()</code>. The <code>getrandmax()</code> function show the largest possible random value, which is only 32767 on Windows platform. So, if you require a range larger than 32767, you may simply specify the <code class="plain"><b>min</b></code> and <code class="plain"><b>max</b></code> arguments.</p>
				<hr />
				<h2>Convert Decimal Numbers to Binary and Vice Versa</h2>
				<p>The <code>decbin()</code> function is used to convert a decimal number into binary number. Whereas its counterpart the <code>bindec()</code> function converts a number from binary to decimal.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc8a8.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

&lt;?php
// Convert Decimal to Binary 
echo decbin(2);    // 0utputs: 10  
echo decbin(12);   // 0utputs: 1100  
echo decbin(100);  // 0utputs: 1100100

// Convert Binary to Decimal
echo bindec(10);       // 0utputs: 2 
echo bindec(1100);     // 0utputs: 12  
echo bindec(1100100);  // 0utputs: 100
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
				<hr />
				<h2>Convert Decimal Numbers to Hexadecimal and Vice Versa</h2>
				<p>The <code>dechex()</code> function is used to convert a decimal number into hexadecimal representation. Whereas, the <code>hexdec()</code> function is used to converts a hexadecimal string to a decimal number.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7710.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

&lt;?php
// Convert decimal to hexadecimal 
echo dechex(255);  // 0utputs: ff
echo dechex(196);  // 0utputs: c4
echo dechex(0);    // 0utputs: 0
 
// Convert hexadecimal to decimal
echo hexdec('ff');  // 0utputs: 255
echo hexdec('c4');  // 0utputs: 196
echo hexdec(0);     // 0utputs: 0
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
				<hr />
				<h2>Convert Decimal Numbers to Octal and Vice Versa</h2>
				<p>The <code>decoct()</code> function is used to convert a decimal number into octal representation. Whereas, the <code>octdec()</code> function is used to converts a octal number to a decimal number.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab58c0.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

&lt;?php
// Convert decimal to octal 
echo decoct(12);   // 0utputs: 14
echo decoct(256);  // 0utputs: 400
echo decoct(77);   // 0utputs: 115
 
// Convert octal to decimal
echo octdec('14');   // 0utputs: 12
echo octdec('400');  // 0utputs: 256
echo octdec('115');  // 0utputs: 77
?&gt;

	 </textarea>
		                            <script>
									var editor = CodeMirror.fromTextArea(document.getElementById("code9"), {
										mode: "text/html",
										tabMode: "indent",
										styleActiveLine: true,
										lineNumbers: true,
										lineWrapping: true
									});

								</script>                    </div>
                </div>
				<hr />
				<h2>Convert a Number from One Base System to Another</h2>
				<p>The <code>base_convert()</code> function can be used to convert a number from one base system to other. For example, you can convert decimal (<i>base 10</i>) to binary (<i>base 2</i>), hexadecimal (<i>base 16</i>) to octal (<i>base 8</i>), octal to hexadecimal, hexadecimal to decimal, and so on.</p>
				<p>This function accepts three parameters: the number to convert, the base it's currently in, and the base it's to be converted to. The basic syntax is as follows:</p>
				<div class="shadow">
					<div class="syntax"><span class="keyword">base_convert</span>(number, frombase, tobase);</div>
				</div>
				<p>Here, the number can be either an integer or a string representing an integer. Both <code class="plain"><b>frombase</b></code> and <code class="plain"><b>tobase</b></code> have to be between 2 and 36, inclusive. Digits in numbers with a base higher than 10 will be represented with the letters a-z, where a means 10, b means 11 and z means 35. Here's a simple example to show how this function works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab712c.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code10">

&lt;?php
// Convert decimal to binary
echo base_convert('12', 10, 2);  // 0utputs: 1100
// Convert binary to decimal
echo base_convert('1100', 2, 10);  // 0utputs: 12
 
// Convert decimal to hexadecimal
echo base_convert('10889592', 10, 16);  // 0utputs: a62978
// Convert hexadecimal to decimal
echo base_convert('a62978', 16, 10);  // 0utputs: 10889592
 
// Convert decimal to octal
echo base_convert('82', 10, 8);  // 0utputs: 122
// Convert octal to decimal
echo base_convert('122', 8, 10);  // 0utputs: 82
 
// Convert hexadecimal to octal
echo base_convert('c2c6a8', 16, 8);  // 0utputs: 60543250
// Convert octal to hexadecimal
echo base_convert('60543250', 8, 16);  // 0utputs: c2c6a8
 
// Convert octal to binary
echo base_convert('42', 8, 2);  // 0utputs: 100010
// Convert binary to octal
echo base_convert('100010', 2, 8);  // 0utputs: 42
 
// Convert hexadecimal to binary
echo base_convert('abc', 16, 2);  // 0utputs: 101010111100
// Convert binary to hexadecimal
echo base_convert('101010111100', 2, 16);  // 0utputs: abc
?&gt;

	 </textarea>
		                            <script>
									var editor = CodeMirror.fromTextArea(document.getElementById("code10"), {
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
                        <p><strong>Read Carefully:</strong> The <code>base_convert()</code> function will always return a string value. If the returned value is in base 10 the resulting string can be used as a numeric string in calculations and PHP will convert it to a number when the calculation is performed.</p>
                    </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_functions.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_get-and-post.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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