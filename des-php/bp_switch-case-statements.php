<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="PHP Switch Case Conditional Statements">
	  <meta name="keywords" content="php,php basic,PHP Switch Case Conditional Statements">
	  <meta name="author" content="webschooltoday.com">
    <title>PHP Switch Case Conditional Statements - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to use PHP switch-case conditional statements to test an expression against a range of different values." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">PHP Switch Case Conditional Statements</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_arrays.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_if-else-statements.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Switch&hellip;Case</span> Statements</h1>
                <p class="summary">In this tutorial you will learn how to use the switch-case statement to test or evaluate an expression with different values in PHP.</p>
                <h2>PHP If&hellip;Else Vs Switch&hellip;Case</h2>
                <p class="space">The switch-case statement is an alternative to the if-elseif-else statement, which does almost the same thing. The switch-case statement tests a variable against a series of values until it finds a match, and then executes the block of code corresponding to that match.</p>
                <div class="shadow break">
                    <div class="syntax">
                        <span class="keyword">switch</span>(n){<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">case</span> label1:<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Code to be executed if n=label1<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">case</span> label2:<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Code to be executed if n=label2<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;...<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">default</span>:<br />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Code to be executed if n is different from all labels<br />
                        }
                    </div>
                </div>
                <p>Consider the following example, which display a different message for each day.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab121f.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

&lt;?php
$today = date("D");
switch($today){
    case "Mon":
        echo "Today is Monday. Clean your house.";
        break;
    case "Tue":
        echo "Today is Tuesday. Buy some food.";
        break;
    case "Wed":
        echo "Today is Wednesday. Visit a doctor.";
        break;
    case "Thu":
        echo "Today is Thursday. Repair your car.";
        break;
    case "Fri":
        echo "Today is Friday. Party tonight.";
        break;
    case "Sat":
        echo "Today is Saturday. Its movie time.";
        break;
    case "Sun":
        echo "Today is Sunday. Do some rest.";
        break;
    default:
        echo "No information available for that day.";
        break;
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
                <p>The <code>switch-case</code> statement differs from the <code>if-elseif-else</code> statement in one important way. The <code>switch</code> statement executes line by line (i.e. statement by statement) and once PHP finds a <code>case</code> statement that evaluates to true, it's not only executes the code corresponding to that case statement, but also executes all the subsequent <code>case</code> statements till the end of the <code>switch</code> block automatically.</p>
                <p>To prevent this add a <code>break</code> statement to the end of each <code>case</code> block. The <code>break</code> statement tells PHP to break out of the <code>switch-case</code> statement block once it executes the code associated with the first true case.</p>
                <div class="bottom-link clearfix">
                    <a href="bp_if-else-statements.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_arrays.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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