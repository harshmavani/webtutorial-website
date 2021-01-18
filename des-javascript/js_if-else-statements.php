<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript If...Else Statements">
	  <meta name="keywords" content="javascript,js,JavaScript If...Else Statements">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript If...Else Statements - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript If...Else Statements</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_switch-case-statements.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_numbers.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>If&hellip;Else</span> Statements</h1>
                <p class="summary">In this tutorial you will learn how to write the decision-making code using if...else...else if conditional statements in JavaScript.</p>
				<h2>JavaScript Conditional Statements</h2>
				<p>Like many other programming languages, JavaScript also allows you to write code that perform different actions based on the results of a logical or comparative test conditions at run time. This means, you can create test conditions in the form of expressions that evaluates to either <code>true</code> or <code>false</code> and based on these results you can perform certain actions.</p>
                <p>There are several conditional statements in JavaScript that you can use to make decisions:</p>
				<ul>
		    		<li>The <strong>if</strong> statement</li>
		    		<li>The <strong>if...else</strong> statement</li>
					<li>The <strong>if...else if....else</strong> statement</li>
		    		<li>The <strong>switch...case</strong> statement</li>
				</ul>
				<p class="space">We will discuss each of these statements in detail in the coming sections.</p>
				<h2>The <code>if</code> Statement</h2>
                <p class="break">The <em>if</em> statement is used to execute a block of code only if the specified condition evaluates to true. This is the simplest JavaScript's conditional statements and can be written like:</p>
                <div class="shadow break">
                	<div class="syntax">
                        <span class="keyword">if</span>(condition) {<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<em>// Code to be executed</em><br />
                        }
                    </div>
                </div>
                <p>The following example will output "Have a nice weekend!" if the current day is Friday:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7917.php?topic=javascript&amp;file=if-statement" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        var now = new Date();
var dayOfWeek = now.getDay(); // Sunday - Saturday : 0 - 6

if(dayOfWeek == 5) {
    alert("Have a nice weekend!");
}
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
				<hr />
				<h2>The <code>if...else</code> Statement</h2>
				<p>You can enhance the decision making capabilities of your JavaScript program by providing an alternative choice through adding an <em>else</em> statement to the <em>if</em> statement.</p>
                <p class="break">The <em>if...else</em> statement allows you to execute one block of code if the specified condition is evaluates to true and another block of code if it is evaluates to false. It can be written, like this:</p>
                <div class="shadow break">
                    <div class="syntax">
                        <span class="keyword">if</span>(condition) {<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="comment"><em>// Code to be executed if condition is true</em></span><br />
                        } <span class="keyword">else</span> {<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="comment"><em>// Code to be executed if condition is false</em></span><br />
                        }
                    </div>
                </div>
                <p>The JavaScript code in the following example will output "Have a nice weekend!" if the current day is Friday, otherwise it will output the text "Have a nice day!".</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab187c.php?topic=javascript&amp;file=if-else-statement" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        var now = new Date();
var dayOfWeek = now.getDay(); // Sunday - Saturday : 0 - 6

if(dayOfWeek == 5) {
    alert("Have a nice weekend!");
} else {
    alert("Have a nice day!");
}
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
                <h2>The <code>if...else if...else</code> Statement</h2>
                <p class="break">The <em>if...else if...else</em> a special statement that is used to combine multiple <em>if...else</em> statements.</p>
                <div class="shadow break">
                    <div class="syntax">
                        <span class="keyword">if</span>(condition1) {<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="comment"><em>// Code to be executed if condition1 is true</em></span><br />
                        } <span class="keyword">else if</span>(condition2) {<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="comment"><em>// Code to be executed if the condition1 is false and condition2 is true</em></span><br />
                        } <span class="keyword">else</span> {<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="comment"><em>// Code to be executed if both condition1 and condition2 are false</em></span><br />
                        }
                    </div>
                </div>
                <p>The following example will output "Have a nice weekend!" if the current day is Friday, and "Have a nice Sunday!" if the current day is Sunday, otherwise it will output "Have a nice day!"</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf887.php?topic=javascript&amp;file=if-elseif-else-statement" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        var now = new Date();
var dayOfWeek = now.getDay(); // Sunday - Saturday : 0 - 6

if(dayOfWeek == 5) {
    alert("Have a nice weekend!");
} else if(dayOfWeek == 0) {
    alert("Have a nice Sunday!");
} else {
    alert("Have a nice day!");
}
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
                <p>You will learn about the <a href="js_switch-case-statements.php">JavaScript switch-case statement</a> in the next chapter.</p>
				<hr />
				<h2>The Ternary Operator</h2>
				<p>The ternary operator provides a shorthand way of writing the <em>if...else</em> statements. The ternary operator is represented by the question mark (<code>?</code>) symbol and it takes three operands: a condition to check, a result for <code>true</code>, and a result for <code>false</code>. Its basic syntax is:</p>
				<div class="shadow break">
                    <div class="syntax">
						<span class="keyword">var</span> result = (condition) ? value1 : value2
                    </div>
                </div>
				<p>If the condition is evaluated to true the value1 will be returned, otherwise value2 will be returned. To understand how this operator works, consider the following examples:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc6a2.php?topic=javascript&amp;file=typical-conditional-statement" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        var userType;
var age = 21;
if(age < 18) {
    userType = 'Child';
} else {
    userType = 'Adult';
}
alert(userType); // Displays Adult
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
				<p>Using the ternary operator the same code could be written in a more compact way:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0285.php?topic=javascript&amp;file=ternary-operator" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        var age = 21;
var userType = age < 18 ? 'Child' : 'Adult';
alert(userType); // Displays Adult
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
				<p>As you can see in the above example, since the specified condition evaluated to false the value on the right side of the colon (<code>:</code>) is returned, which is the string 'Adult'.</p>
				<!--Tip Box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> Code written using the ternary operator can be difficult to read sometimes. However, it provides a great way to write compact if-else statements.</p>
						</div>
					</div>
				</div>
				<!--End:Tip Box-->
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="js_numbers.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_switch-case-statements.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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