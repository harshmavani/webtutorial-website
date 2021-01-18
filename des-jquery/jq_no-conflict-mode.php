<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Use jQuery noConflict Method">
	  <meta name="keywords" content="jquery,jq,js,How to Use jQuery noConflict Method">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Use jQuery noConflict Method - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Use jQuery noConflict Method</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="../jq_examples.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_ajax-get-and-post-requests.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery <span>No-Conflict</span> Mode</h1>
				<p class="summary">In this tutorial you will learn how to avoid conflicts between jQuery and other JavaScript library or framework.</p>
				<h2>Using jQuery with Other JavaScript Libraries</h2>
				<p class="space">As you already know, jQuery uses the dollar sign (<code>$</code>) as a shortcut or alias for <code>jQuery</code>. Thus, if you use another JavaScript library that also uses the <code>$</code> sign as a shortcut, along with the jQuery library on the same page, conflicts could occur. Fortunately, jQuery provides a special method named <code>noConflict()</code> to deal with such situation.</p>
				<h2>jQuery noConflict() Method</h2>
				<p>The <code>jQuery.noConflict()</code> method return the control of the <code>$</code> identifier back to other libraries. The jQuery code in the following example (<i>line no-10</i>) will put the jQuery into no-conflict mode immediately after it is loaded onto the page and assign a new variable name <code>$j</code> to replace the <code>$</code> alias in order to avoid conflicts with the prototype framework.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf69c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery noConflict() Demo</title>
<script src="js/prototype.js"></script>
<script src="js/jquery.js"></script>
<script>
// Defining the new alias for jQuery
var $j = jQuery.noConflict();
$j(document).ready(function(){
    // Display an alert message when the element with ID foo is clicked
    $j("#foo").click(function(){
        alert("jQuery is working well with prototype.");
    });
});
 
// Some prototype framework code
document.observe("dom:loaded", function(){
    // Display an alert message when the element with ID bar is clicked
    $("bar").observe("click", function(event){
        alert("Prototype is working well with jQuery.");
    });
});
</script>
</head>
<body>
    <button type="button" id="foo">Run jQuery Code</button>
    <button type="button" id="bar">Run Prototype Code</button>
</body> 
</html>

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
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> Many JavaScript libraries use the <code>$</code> as a function or variable name, just like the jQuery. Some of these libraries are: <a rel="nofollow" href="http://mootools.net/" target="_blank">mootools</a>, <a rel="nofollow" href="http://prototypejs.org/" target="_blank">prototype</a>, <a rel="nofollow" href="http://zeptojs.com/" target="_blank">zepto</a> etc.</p>
						</div>
					</div>
				</div>
				<p>However, if you don't want to define another shortcut for jQuery, may be because you don't want to modify your existing jQuery code or you really like to use <code>$</code> because it saves time and easy to use, then you can adopt another quick approach &mdash; simply pass the <code>$</code> as an argument to your <code>jQuery(document).ready()</code> function, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2dcd.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery noConflict() Demo</title>
<script src="js/prototype.js"></script>
<script src="js/jquery.js"></script>
<script>
jQuery.noConflict();
jQuery(document).ready(function($){
    // The dollar sign in here work as an alias to jQuery
    $("#foo").click(function(){
        alert("jQuery is working well with prototype.");
    });
});
 
// Some prototype framework code
document.observe("dom:loaded", function(){
    // The dollar sign in the global scope refer to prototype
    $("bar").observe("click", function(event){
        alert("Prototype is working well with jQuery.");
    });
});
</script>
</head>
<body>
    <button type="button" id="foo">Run jQuery Code</button>
    <button type="button" id="bar">Run Prototype Code</button>
</body> 
</html>
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
				<hr />
				<h2>Including jQuery Before Other Libraries</h2>
				<p>The above solutions to avoid conflicts rely on jQuery is being loaded after prototype.js is loaded. However, if you include jQuery before other libraries, you may use full name <code>jQuery</code> in your jQuery code to avoid conflicts without calling the <code>jQuery.noConflict()</code>. But in this scenario the <code>$</code> will have the meaning defined in the other library.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab06a1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                       
	<textarea id="code3">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery noConflict() Demo</title>
<script src="js/jquery.js"></script>
<script src="js/prototype.js"></script>
<script>
jQuery(document).ready(function($){
    // Use full jQuery function name to reference jQuery
    jQuery("#foo").click(function(){
        alert("jQuery is working well with prototype.");
    });
});
 
// Some prototype framework code
document.observe("dom:loaded", function(){
    // The dollar sign here will have the meaning defined in prototype
    $("bar").observe("click", function(event){
        alert("Prototype is working well with jQuery.");
    });
});
</script>
</head>
<body>
    <button type="button" id="foo">Run jQuery Code</button>
    <button type="button" id="bar">Run Prototype Code</button>
</body> 
</html>

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
				<div class="bottom-link clearfix">
					<a href="jq_ajax-get-and-post-requests.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="../jq_examples.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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