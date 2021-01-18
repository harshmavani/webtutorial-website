<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Switch Case Statements">
	  <meta name="keywords" content="javascript,js,JavaScript Switch Case Statements">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Switch Case Statements - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Switch Case Statements</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_arrays.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_if-else-statements.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Switch...Case</span> Statements</h1>
                <p class="summary">In this tutorial you will learn how to use the switch...case statement to test or evaluate an expression with different values in JavaScript.</p>
				<h2>Using the Switch...Case Statement</h2>
				<p class="space">The <em>switch..case</em> statement is an alternative to the <em>if...else if...else</em> statement, which does almost the same thing. The <em>switch...case</em> statement tests a variable or expression against a series of values until it finds a match, and then executes the block of code corresponding to that match. It's syntax is:</p>
                <div class="shadow break">
                    <div class="syntax">
                        <span class="keyword">switch</span>(x){<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">case</span> value1:<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Code to be executed if x === value1<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">case</span> value2:<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Code to be executed if x === value2<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;...<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">default</span>:<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Code to be executed if x is different from all values<br />
                        }
                    </div>
                </div>
                <p>Consider the following example, which display the name of the day of the week.</p>				
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabcdad.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

						var d = new Date();
	
	switch(d.getDay()) {
		case 0:
			alert("Today is Sunday.");
			break;
		case 1:
			alert("Today is Monday.");
			break;
		case 2:
			alert("Today is Tuesday.");
			break;
		case 3:
			alert("Today is Wednesday.");
			break;
		case 4:
			alert("Today is Thursday.");
			break;
		case 5:
			alert("Today is Friday.");
			break;
		case 6:
			alert("Today is Saturday.");
			break;   
		default:
			alert("No information available for that day.");
			break;
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
				<p>The <code>getDay()</code> method returns the weekday as a number from 0 and 6, where 0 represents Sunday. See the <a href="js_date-and-time.php">JavaScript date and time</a> chapter to learn more about date methods.</p>
				<!--Note box-->
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> In a <em>switch...case</em> statement, the value of the expression or variable is compared against the case value using the strict equality operator (<code>===</code>). That means if <code>x = "0"</code>, it doesn't match <code>case 0:</code>, because their <a href="js_data-types.php">data types</a> are not equal.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<p>The <em>switch...case</em> statement differs from the <em>if...else</em> statement in one important way. The switch statement executes line by line (i.e. statement by statement) and once JavaScript finds a <code>case</code> clause that evaluates to true, it's not only executes the code corresponding to that case clause, but also executes all the subsequent <code>case</code> clauses till the end of the <code>switch</code> block automatically.</p>
                <p>To prevent this you must include a <code>break</code> statement after each <code>case</code> (as you can see in the above example). The <code>break</code> statement tells the JavaScript interpreter to break out of the <em>switch...case</em> statement block once it executes the code associated with the first true case.</p>
				<p>The <code>break</code> statement is however not required for the <code>case</code> or <code>default</code> clause, when it appears at last in a switch statement. Although, it a good programming practice to terminate the last <code>case</code>, or <code>default</code> clause in a switch statement with a <code>break</code>. It prevents a possible programming error later if another case statement is added to the switch statement.</p>
				<p>The <code>default</code> clause is optional, which specify the actions to be performed if no <code>case</code> matches the switch expression. The <code>default</code> clause does not have to be the last clause to appear in a switch statement. Here's an example, where <code>default</code> is not the last clause.</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab8a6d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code2">

						var d = new Date();

switch(d.getDay()) {
    default: 
        alert("Looking forward to the weekend.");
        break;
    case 6:
        alert("Today is Saturday.");
        break; 
    case 0:
        alert("Today is Sunday.");
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
				<h2>Multiple Cases Sharing Same Action</h2>
				<p>Each case value must be unique within a switch statement. However, different cases don't need to have a unique action. Several cases can share the same action, as shown here:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabe131.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code3">

						var d = new Date();

switch(d.getDay()) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        alert("It is a weekday.");
        break; 
    case 0:
    case 6:
        alert("It is a weekend day.");
        break;
    default: 
        alert("Enjoy every day of your life.");
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
				<!--Bottom Navigation-->				
                <div class="bottom-link clearfix">
                    <a href="js_if-else-statements.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_arrays.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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