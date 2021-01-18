<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="PHP Indexed, Associative, and Multidimensional Arrays">
	  <meta name="keywords" content="php,php basic,PHP Indexed, Associative, and Multidimensional Arrays">
	  <meta name="author" content="webschooltoday.com">
    <title>PHP Indexed, Associative, and Multidimensional Arrays - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">PHP Indexed, Associative, and Multidimensional Arrays</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_sorting-arrays.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_switch-case-statements.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Arrays</span></h1>
                <p class="summary">In this tutorial you'll learn how to store multiple values in a single variable in PHP.</p>
                <h2>What is PHP Arrays</h2>
                <p>Arrays are complex variables that allow us to store more than one value or a group of values under a single variable name. Let's suppose you want to store colors in your PHP script. Storing the colors one by one in a variable could look something like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5b5f.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
&lt;?php
$color1 = "Red";
$color2 = "Green";
$color3 = "Blue";
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

							</script>
                    </div>
                </div>
                <p>But what, if you want to store the states or city names of a country in variables and this time this not just three may be hundred. It is quite hard, boring, and bad idea to store each city name in a separate variable. And here array comes into play.</p>
                <hr />
                <h2>Types of Arrays in PHP</h2>
                <p>There are three types of arrays that you can create. These are:</p>
                <ul class="space">
                	<li><strong>Indexed array</strong> &mdash; An array with a numeric key.</li>
                    <li><strong>Associative array</strong> &mdash; An array where each key has its own specific value.</li>
                    <li><strong>Multidimensional array</strong> &mdash; An array containing one or more arrays within itself.</li>
                </ul>
                <h2>Indexed Arrays</h2>
                <p>An indexed or numeric array stores each array element with a numeric index. The following examples shows two ways of creating an indexed array, the easiest way is:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabcd5d.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

&lt;?php
// Define an indexed array
$colors = array("Red", "Green", "Blue");
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

							</script>
                    </div>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> In an indexed or numeric array, the indexes are automatically assigned and start with 0, and the values can be any data type.</p>
                        </div>
                    </div>
                </div>
                <p>This is equivalent to the following example, in which indexes are assigned manually:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab47a1.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

&lt;?php
$colors[0] = "Red"; 
$colors[1] = "Green"; 
$colors[2] = "Blue"; 
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

							</script>
                    </div>
                </div>
                <hr />
                <h2>Associative Arrays</h2>
                <p>In an associative array, the keys assigned to values can be arbitrary and user defined strings. In the following example the array uses keys instead of index numbers:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7610.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

&lt;?php
// Define an associative array
$ages = array("Peter"=>22, "Clark"=>32, "John"=>28);
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

							</script>
                    </div>
                </div>
                <p>The following example is equivalent to the previous example, but shows a different way of creating associative arrays:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba94b.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

&lt;?php
$ages["Peter"] = "22";
$ages["Clark"] = "32";
$ages["John"] = "28";
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

							</script>
                    </div>
                </div>
                <hr />
                <h2>Multidimensional Arrays</h2>
                <p>The multidimensional array is an array in which each element can also be an array and each element in the sub-array can be an array or further contain array within itself and so on. An example of a multidimensional array will look something like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3099.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

&lt;?php
// Define a multidimensional array
$contacts = array(
    array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),
    array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
    )
);
// Access nested value
echo "Peter Parker's Email-id is: " . $contacts[0]["email"];
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

							</script>
                    </div>
                </div>
                <hr />
                <h2>Viewing Array Structure and Values</h2>
                <p>You can see the structure and values of any array by using one of two statements &mdash; <code>var_dump()</code> or <code>print_r()</code>. The <code>print_r()</code> statement, however, gives somewhat less information. Consider the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabcdc9.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

&lt;?php
// Define array
$cities = array("London", "Paris", "New York");
 
// Display the cities array
print_r($cities);
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

							</script>
                    </div>
                </div>
                <p>The <code>print_r()</code> statement gives the following output:</p>
                <div class="output-box">
                    Array ( [0] => London [1] => Paris [2] => New York )
                </div>
                <p>This output shows the key and the value for each element in the array. To get more information, use the following statement:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd99b.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

&lt;?php
// Define array
$cities = array("London", "Paris", "New York");
 
// Display the cities array
var_dump($cities);
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

							</script>
                    </div>
                </div>
                <p>This <code>var_dump()</code> statement gives the following output:</p>
                <div class="output-box">
                    array(3)&thinsp;{&thinsp;[0]=>&thinsp;string(6) "London" [1]=>&thinsp;string(5) "Paris" [2]=>&thinsp;string(8) "New&thinsp;York"&thinsp;}
                </div>
                <p>This output shows the data type of each element, such as a string of 6 characters, in addition to the key and value. In the <a href="bp_sorting-arrays.php">next chapter</a> you will learn how to sort array elements.</p>
                <p>You will learn how to loop through the values of an array in the <a href="bp_loops.php">later chapter</a>.</p>
                <div class="bottom-link clearfix">
                    <a href="bp_switch-case-statements.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_sorting-arrays.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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