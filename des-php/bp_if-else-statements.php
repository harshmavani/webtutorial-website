<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="PHP If, Else and Elseif Conditional Statements">
	  <meta name="keywords" content="php,php basic,PHP If, Else and Elseif Conditional Statements">
	  <meta name="author" content="webschooltoday.com">
    <title>PHP If, Else and Elseif Conditional Statements - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to use PHP if, if-else, and if-elseif-else statements to execute different operations based on the different conditions." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">PHP If, Else and Elseif Conditional Statements</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_switch-case-statements.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_operators.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>If&hellip;Else</span> Statements</h1>
                <p class="summary">In this tutorial you'll learn how to write decision-making code using if...else...elseif statements in PHP.</p>
                <h2>PHP Conditional Statements</h2>
				<p>Like most programming languages, PHP also allows you to write code that perform different actions based on the results of a logical or comparative test conditions at run time. This means, you can create test conditions in the form of expressions that evaluates to either <code>true</code> or <code>false</code> and based on these results you can perform certain actions.</p>
                <p>There are several statements in PHP that you can use to make decisions:</p>
				<ul>
		    		<li>The <strong>if</strong> statement</li>
		    		<li>The <strong>if...else</strong> statement</li>
					<li>The <strong>if...elseif....else</strong> statement</li>
		    		<li>The <strong>switch...case</strong> statement</li>
				</ul>
				<p class="space">We will explore each of these statements in the coming sections.</p>
                <h2>The <code>if</code> Statement</h2>
                <p class="break">The <em>if</em> statement is used to execute a block of code only if the specified condition evaluates to true. This is the simplest PHP's conditional statements and can be written like:</p>
                <div class="shadow break">
                	<div class="syntax">
                        <span class="keyword">if</span>(condition){<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<em>// Code to be executed</em><br />
                        }
                    </div>
                </div>
                <p>The following example will output "Have a nice weekend!" if the current day is Friday:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabaa7c.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

&lt;?php
$d = date("D");
if($d == "Fri"){
    echo "Have a nice weekend!";
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
                <h2>The <code>if...else</code> Statement</h2>
                <p class="break">You can enhance the decision making process by providing an alternative choice through adding an <em>else</em> statement to the <em>if</em> statement. The <em>if...else</em> statement allows you to execute one block of code if the specified condition is evaluates to true and another block of code if it is evaluates to false. It can be written, like this:</p>
                <div class="shadow break">
                    <div class="syntax">
                        <span class="keyword">if</span>(condition){<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="comment"><em>// Code to be executed if condition is true</em></span><br />
                        } <span class="keyword">else</span>{<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="comment"><em>// Code to be executed if condition is false</em></span><br />
                        }
                    </div>
                </div>
                <p>The following example will output "Have a nice weekend!" if the current day is Friday, otherwise it will output "Have a nice day!"</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1920.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

&lt;?php
$d = date("D");
if($d == "Fri"){
    echo "Have a nice weekend!";
} else{
    echo "Have a nice day!";
}
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
                <hr />
                <h2>The <code>if...elseif...else</code> Statement</h2>
                <p class="break">The <em>if...elseif...else</em> a special statement that is used to combine multiple <em>if...else</em> statements.</p>
                <div class="shadow break">
                    <div class="syntax">
                        <span class="keyword">if</span>(condition1){<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="comment"><em>// Code to be executed if condition1 is true</em></span><br />
                        } <span class="keyword">elseif</span>(condition2){<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="comment"><em>// Code to be executed if the condition1 is false and condition2 is true</em></span><br />
                        } <span class="keyword">else</span>{<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="comment"><em>// Code to be executed if both condition1 and condition2 are false</em></span><br />
                        }
                    </div>
                </div>
                <p>The following example will output "Have a nice weekend!" if the current day is Friday, and "Have a nice Sunday!" if the current day is Sunday, otherwise it will output "Have a nice day!"</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd96c.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

&lt;?php
$d = date("D");
if($d == "Fri"){
    echo "Have a nice weekend!";
} elseif($d == "Sun"){
    echo "Have a nice Sunday!";
} else{
    echo "Have a nice day!";
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
                <p>You will learn about PHP switch-case statement in the <a href="bp_switch-case-statements.php">next chapter</a>.</p>
				<hr />
				<h2>The Ternary Operator</h2>
				<p>The ternary operator provides a shorthand way of writing the <em>if...else</em> statements. The ternary operator is represented by the question mark (<code>?</code>) symbol and it takes three operands: a condition to check, a result for <code>true</code>, and a result for <code>false</code>.</p>
				<p>To understand how this operator works, consider the following examples:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2806.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

&lt;?php
if($age &lt; 18){
    echo 'Child'; // Display Child if age is less than 18
} else{
    echo 'Adult'; // Display Adult if age is greater than or equal to 18
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
				<p>Using the ternary operator the same code could be written in a more compact way:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabae4a.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

&lt;?php echo ($age &lt; 18) ? 'Child' : 'Adult'; ?&gt;

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
				<p>The ternary operator in the example above selects the value on the left of the colon (i.e. 'Child') if the condition evaluates to true (i.e. if <code>$age</code> is less than 18), and selects the value on the right of the colon (i.e. 'Adult') if the condition evaluates to false.</p>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> Code written using the ternary operator can be hard to read. However, it provides a great way to write compact if-else statements.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>The Null Coalescing Operator <span class="badge" title="New in PHP 7">PHP 7</span></h2>
				<p>PHP 7 introduces a new null coalescing operator (<code>??</code>) which you can use as a shorthand where you need to use a ternary operator in conjunction with <code>isset()</code> function.</p>
				<p>To uderstand this in a better way consider the following line of code. It fetches the value of <code>$_GET['name']</code>, if it does not exist or <code>NULL</code>, it returns 'anonymous'.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabaffc.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

&lt;?php
$name = isset($_GET['name']) ? $_GET['name'] : 'anonymous';
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
				<p>Using the null coalescing operator the same code could be written as:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc336.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

&lt;?php
$name = $_GET['name'] ?? 'anonymous';
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
				<p>As you can see the later syntax is more compact and easy to write.</p>
                <div class="bottom-link clearfix">
                    <a href="bp_operators.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_switch-case-statements.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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