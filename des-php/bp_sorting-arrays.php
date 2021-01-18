<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="PHP Functions for Sorting Arrays">
	  <meta name="keywords" content="php,php basic,PHP Functions for Sorting Arrays">
	  <meta name="author" content="webschooltoday.com">
    <title>PHP Functions for Sorting Arrays - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to use the PHP array sorting function to sort the array elements in ascending or descending order." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">PHP Functions for Sorting Arrays</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_loops.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_arrays.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Sorting</span> Arrays</h1>
                <p class="summary">In this tutorial you will learn how to sort the elements or keys of an array in ascending or descending order in PHP.</p>
                <h2>PHP Functions For Sorting Arrays</h2>
                <p>In the previous chapter you've learnt the essentials of PHP arrays i.e. what arrays are, how to create them, how to view their structure, how to access their elements etc. You can do even more things with arrays like sorting the elements in any order you like.</p>
                <p>PHP comes with a number of built-in functions designed specifically for sorting array elements in different ways like alphabetically or numerically in ascending or descending order. Here we'll explore some of these functions most commonly used for sorting arrays.</p>
                <ul class="space">
                    <li><code>sort()</code> and <code>rsort()</code> &mdash; For sorting indexed arrays</li>
                    <li><code>asort()</code> and <code>arsort()</code> &mdash; For sorting associative arrays by value</li>
                    <li><code>ksort()</code> and <code>krsort()</code> &mdash; For sorting associative arrays by key</li>
                </ul>
                <h2>Sorting Indexed Arrays in Ascending Order</h2>
                <p>The <code>sort()</code> function is used for sorting the elements of the indexed array in ascending order (alphabetically for letters and numerically for numbers).</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab550d.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

&lt;?php
// Define array
$colors = array("Red", "Green", "Blue", "Yellow");
 
// Sorting and printing array
sort($colors);
print_r($colors);
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
				<p>This <code>print_r()</code> statement gives the following output:</p>
                <div class="output-box">
                    Array ( [0] => Blue [1] => Green [2] => Red [3] => Yellow ) 
                </div>
				<p>Similarly you can sort the numeric elements of the array in ascending order.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba616.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

&lt;?php
// Define array
$numbers = array(1, 2, 2.5, 4, 7, 10);
 
// Sorting and printing array
sort($numbers);
print_r($numbers);
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
				<p>This <code>print_r()</code> statement gives the following output:</p>
                <div class="output-box">
                    Array ( [0] => 1 [1] => 2 [2] => 2.5 [3] => 4 [4] => 7 [5] => 10 )
                </div>
                <hr />
                <h2>Sorting Indexed Arrays in Descending Order</h2>
                <p>The <code>rsort()</code> function is used for sorting the elements of the indexed array in descending order (alphabetically for letters and numerically for numbers).</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab57be.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

&lt;?php
// Define array
$colors = array("Red", "Green", "Blue", "Yellow");
 
// Sorting and printing array
rsort($colors);
print_r($colors);
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
				<p>This <code>print_r()</code> statement gives the following output:</p>
                <div class="output-box">
                    Array ( [0] => Yellow [1] => Red [2] => Green [3] => Blue )
                </div>
				<p>Similarly you can sort the numeric elements of the array in descending order.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabafe0.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

&lt;?php
// Define array
$numbers = array(1, 2, 2.5, 4, 7, 10);
 
// Sorting and printing array
rsort($numbers);
print_r($numbers);
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
				<p>This <code>print_r()</code> statement gives the following output:</p>
                <div class="output-box">
                    Array ( [0] => 10 [1] => 7 [2] => 4 [3] => 2.5 [4] => 2 [5] => 1 )
                </div>
                <hr />
                <h2>Sorting Associative Arrays in Ascending Order By Value</h2>
                <p>The <code>asort()</code> function sorts the elements of an associative array in ascending order according to the value. It works just like <code>sort()</code>, but it preserves the association between keys and its values while sorting.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe4d1.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

&lt;?php
// Define array
$age = array("Peter"=>20, "Harry"=>14, "John"=>45, "Clark"=>35);
 
// Sorting array by value and print
asort($age);
print_r($age);
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
				<p>This <code>print_r()</code> statement gives the following output:</p>
                <div class="output-box">
                    Array ( [Harry] => 14 [Peter] => 20 [Clark] => 35 [John] => 45 )
                </div>
                <hr />
                <h2>Sorting Associative Arrays in Descending Order By Value</h2>
                <p>The <code>arsort()</code> function sorts the elements of an associative array in descending order according to the value. It works just like <code>rsort()</code>, but it preserves the association between keys and its values while sorting.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab748e.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

&lt;?php
// Define array
$age = array("Peter"=>20, "Harry"=>14, "John"=>45, "Clark"=>35);
 
// Sorting array by value and print
arsort($age);
print_r($age);
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
				<p>This <code>print_r()</code> statement gives the following output:</p>
                <div class="output-box">
                    Array ( [John] => 45 [Clark] => 35 [Peter] => 20 [Harry] => 14 )
                </div>
                <hr />
                <h2>Sorting Associative Arrays in Ascending Order By Key</h2>
                <p>The <code>ksort()</code> function sorts the elements of an associative array in ascending order by their keys. It preserves the association between keys and its values while sorting, same as <code>asort()</code> function.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabec62.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

&lt;?php
// Define array
$age = array("Peter"=>20, "Harry"=>14, "John"=>45, "Clark"=>35);
 
// Sorting array by key and print
ksort($age);
print_r($age);
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
				<p>This <code>print_r()</code> statement gives the following output:</p>
                <div class="output-box">
                    Array ( [Clark] => 35 [Harry] => 14 [John] => 45 [Peter] => 20 )
                </div>
                <hr />
                <h2>Sorting Associative Arrays in Descending Order By Key</h2>
                <p>The <code>krsort()</code> function sorts the elements of an associative array in descending order by their keys. It preserves the association between keys and its values while sorting, same as <code>arsort()</code> function.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab29e8.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

&lt;?php
// Define array
$age = array("Peter"=>20, "Harry"=>14, "John"=>45, "Clark"=>35);
 
// Sorting array by key and print
krsort($age);
print_r($age);
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
				<p>This <code>print_r()</code> statement gives the following output:</p>
                <div class="output-box">
                    Array ( [Peter] => 20 [John] => 45 [Harry] => 14 [Clark] => 35 )
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_arrays.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_loops.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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