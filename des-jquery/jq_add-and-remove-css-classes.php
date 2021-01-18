<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="jQuery Add and Remove CSS Classes">
	  <meta name="keywords" content="jquery,jq,js,jQuery Add and Remove CSS Classes">
	  <meta name="author" content="webschooltoday.com">
    <title>jQuery Add and Remove CSS Classes - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">jQuery Add and Remove CSS Classes</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_get-and-set-css-properties.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_remove-elements-and-attribute.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery <span>Add</span> and <span>Remove</span> CSS Classes</h1>
				<p class="summary">In this tutorial you will learn how to add or remove CSS classes using jQuery.</p>
				<h2>jQuery CSS Classes Manipulation</h2>
				<p class="space">jQuery provides several methods, such as <code>addClass()</code>, <code>removeClass()</code>, <code>toggleClass()</code>, etc. to manipulate the CSS classes assigned to HTML elements.</p>
				<h2>jQuery <code>addClass()</code> Method</h2>
				<p>The jQuery <code>addClass()</code> method adds one or more classes to the selected elements.</p>
				<p>The following example will add the class <code>.page-header</code> to the <a href="../info-html/html-headings-tag.php"><code>&lt;h1&gt;</code></a> and the class <code>.highlight</code> to the <a href="../info-html/html-p-tag.php"><code>&lt;p&gt;</code></a> elements with class <code>.hint</code> on button click.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0086.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery addClass() Demo</title>
<style>
    .page-header{
        color: red;
        text-transform: uppercase;
    }
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("h1").addClass("page-header");
        $("p.hint").addClass("highlight");
    });
});
</script>
</head>
<body>
    <h1>Demo Text</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
    <p class="hint"><strong>Tip:</strong> Lorem Ipsum is dummy text.</p>
    <button type="button">Add Class</button>
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
				<p>You can also add multiple classes to the elements at a time. Just specify the space separated list of classes within the <code>addClass()</code> method, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4700.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery addClass() Demo</title>
<style>
    .page-header{
        color: red;
        text-transform: uppercase;
    }
    .highlight{
        background: yellow;
    }         
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("h1").addClass("page-header highlight");
    });
});
</script>
</head>
<body>
    <h1>Hello World</h1>
    <p>The quick brown fox jumps over the lazy dog.</p>
    <button type="button">Add Class</button>
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
				<h2>jQuery <code>removeClass()</code> Method</h2>
				<p>Similarly, you can remove the classes from the elements using the jQuery <code>removeClass()</code> method. The <code>removeClass()</code> method can remove a single class, multiple classes, or all classes at once from the selected elements.</p>
				<p>The following example will remove the class <code>.page-header</code> from the <code>&lt;h1&gt;</code> and the class <code>.hint</code> and <code>.highlight</code> from the <code>&lt;p&gt;</code> elements on button click.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab892e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery removeClass() Demo</title>
<style>
    .page-header{
        color: red;
        text-transform: uppercase;
    }
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("h1").removeClass("page-header");
        $("p").removeClass("hint highlight");
    });
});
</script>
</head>
<body>
    <h1 class="page-header">Demo Text</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
    <p class="hint highlight"><strong>Tip:</strong> Lorem Ipsum is dummy text.</p>
    <button type="button">Remove Class</button>
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
				<p>When the <code>removeClass()</code> method is called without an argument it will remove all the classes from the selected elements. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab993f." target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery removeClass() Demo</title>
<style>
    .page-header{
        color: red;
        text-transform: uppercase;
    }
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("h1").removeClass();
        $("p").removeClass();
    });
});
</script>
</head>
<body>
    <h1 class="page-header">Demo Text</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
    <p class="hint highlight"><strong>Tip:</strong> Lorem Ipsum is dummy text.</p>
    <button type="button">Remove Class</button>
</body>
</html>

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
				<hr />
				<h2>jQuery <code>toggleClass()</code> Method</h2>
				<p>The jQuery <code>toggleClass()</code> add or remove one or more classes from the selected elements in such a way that if the selected element already has the class, then it is removed; if an element does not have the class, then it is added i.e. toggle classes.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabac07.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery toggleClass() Demo</title>
<style>
    p{
        padding: 10px;
        cursor: pointer;        
        font: bold 16px sans-serif;
    }
    .highlight{
        background: yellow;
    }         
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("p").click(function(){
        $(this).toggleClass("highlight");
    });
});
</script>
</head>
<body>
    <p>Click on me to toggle highlighting.</p>
    <p class="highlight">Click on me to toggle highlighting.</p>
    <p>Click on me to toggle highlighting.</p>
</body>
</html>

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
				<p>You will learn about the CSS properties manipulation in <a href="jq_get-and-set-css-properties.php">next chapter &raquo;</a></p>
				<div class="bottom-link clearfix">
					<a href="jq_remove-elements-and-attribute.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_get-and-set-css-properties.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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