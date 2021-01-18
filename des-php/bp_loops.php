<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="PHP While, Do-While, For and Foreach Loops ">
	  <meta name="keywords" content="php,php basic,PHP While, Do-While, For and Foreach Loops ">
	  <meta name="author" content="webschooltoday.com">
    <title>PHP While, Do-While, For and Foreach Loops - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to use PHP while, do-while, for and foreach loops to automate the repetitive tasks within a program to save the time and effort." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">PHP While, Do-While, For and Foreach Loops </div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_functions.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_sorting-arrays.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Loops</span></h1>
                <p class="summary">In this tutorial you will learn how to repeat a series of actions using loops in PHP.</p>
                <h2>Different Types of Loops in PHP</h2>
                <p>Loops are used to execute the same block of code again and again, as long as a certain condition is met. The basic idea behind a loop is to automate the repetitive tasks within a program to save the time and effort. PHP supports four different types of loops.</p>
                <ul>
                	<li><strong>while</strong> &mdash; loops through a block of code as long as the condition specified evaluates to true.</li>
                    <li><strong>do&hellip;while</strong> &mdash; the block of code executed once and then condition is evaluated. If the condition is true the statement is repeated as long as the specified condition is true.</li>
                    <li><strong>for</strong> &mdash; loops through a block of code until the counter reaches a specified number.</li>
                    <li><strong>foreach</strong> &mdash; loops through a block of code for each element in an array.</li>
                </ul>
				<p>You will also learn how to loop through the values of array using <a href="#foreach-loop"><code>foreach()</code></a> loop at the end of this chapter. The <code>foreach()</code> loop work specifically with arrays.</p>
				<hr />
                <h2>PHP while Loop</h2>
                <p>The <code>while</code> statement will loops through a block of code as long as the condition specified in the <code>while</code> statement evaluate to true.</p>
                <div class="shadow break">
                    <div class="syntax">
                        <span class="keyword">while</span>(condition){<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;// Code to be executed<br />
                        }
                    </div>
                </div>
                <p>The example below define a loop that starts with <code>$i=1</code>. The loop will continue to run as long as <code>$i</code> is less than or equal to 3. The <code>$i</code> will increase by 1 each time the loop runs:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6e0f.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

&lt;?php
$i = 1;
while($i &lt;= 3){
    $i++;
    echo "The number is " . $i . "&lt;br&gt;";
}
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
                <hr />
                <h2>PHP do&hellip;while Loop</h2>
                <p>The <code>do-while</code> loop is a variant of while loop, which evaluates the condition at the end of each loop iteration. With a <code>do-while</code> loop the block of code executed once, and then the condition is evaluated, if the condition is true, the statement is repeated as long as the specified condition evaluated to is true.</p>
                <div class="shadow break">
                    <div class="syntax">
                        <span class="keyword">do</span>{<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;// Code to be executed<br />
                        }<br />
                        <span class="keyword">while</span>(condition);
                    </div>
                </div>
                <p>The following example define a loop that starts with <code>$i=1</code>. It will then increase <code>$i</code> with 1, and print the output. Then the condition is evaluated, and the loop will continue to run as long as <code>$i</code> is less than, or equal to 3.</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab77ce.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

&lt;?php
$i = 1;
do{
    $i++;
    echo "The number is " . $i . "&lt;br&gt;";
}
while($i &lt;= 3);
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
				<h2>Difference Between while and do&hellip;while Loop</h2>
                <p>The <code>while</code> loop differs from the <code>do-while</code> loop in one important way &mdash; with a <code>while</code> loop, the condition to be evaluated is tested at the beginning of each loop iteration, so if the conditional expression evaluates to false, the loop will never be executed.</p>
                <p>With a <code>do-while</code> loop, on the other hand, the loop will always be executed once, even if the conditional expression is false, because the condition is evaluated at the end of the loop iteration rather than the beginning.</p>
                <hr />
                <h2>PHP for Loop</h2>
                <p>The <code>for</code> loop repeats a block of code as long as a certain condition is met. It is typically used to execute a block of code for certain number of times.</p>
                <div class="shadow break">
                    <div class="syntax">
                        <span class="keyword">for</span>(initialization; condition; increment){<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;// Code to be executed<br />
                        }
                    </div>
                </div>
                <p>The parameters of <code>for</code> loop have following meanings:</p>
                <ul>
                	<li><code>initialization</code> &mdash; it is used to initialize the counter variables, and evaluated once unconditionally before the first execution of the body of the loop.</li>
                    <li><code>condition</code> &mdash; in the beginning of each iteration, condition is evaluated. If it evaluates to <code>true</code>, the loop continues and the nested statements are executed. If it evaluates to <code>false</code>, the execution of the loop ends.</li>
                    <li><code>increment</code> &mdash; it updates the loop counter with a new value. It is evaluate at the end of each iteration.</li>
                </ul>
                <p>The example below defines a loop that starts with <code>$i=1</code>. The loop will continued until <code>$i</code> is less than, or equal to 3. The variable <code>$i</code> will increase by 1 each time the loop runs:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab79a3.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

&lt;?php
for($i=1; $i&lt;=3; $i++){
    echo "The number is " . $i . "&lt;br&gt;";
}
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
                <hr />
                <h2 id="foreach-loop">PHP foreach Loop</h2>
                <p>The <code>foreach</code> loop is used to iterate over arrays.</p>
                <div class="shadow break">
                    <div class="syntax">
                        <span class="keyword">foreach</span>($array <span class="keyword">as</span> $value){<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;// Code to be executed<br />
                        }
                    </div>
                </div>
                <p>The following example demonstrates a loop that will print the values of the given array:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3516.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

&lt;?php
$colors = array("Red", "Green", "Blue");
 
// Loop through colors array
foreach($colors as $value){
    echo $value . "&lt;br&gt;";
}
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
                <p>There is one more syntax of <code>foreach</code> loop, which is extension of the first.</p>
                <div class="shadow break">
                    <div class="syntax">
                        <span class="keyword">foreach</span>($array <span class="keyword">as</span> $key => $value){<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;// Code to be executed<br />
                        }
                    </div>
                </div>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe0fe.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

&lt;?php
$superhero = array(
    "name" => "Peter Parker",
    "email" => "peterparker@mail.com",
    "age" => 18
);
 
// Loop through superhero array
foreach($superhero as $key => $value){
    echo $key . " : " . $value . "&lt;br&gt;";
}
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
                <div class="bottom-link clearfix">
                    <a href="bp_sorting-arrays.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_functions.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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