<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Select Descendant Elements in jQuery">
	  <meta name="keywords" content="jquery,jq,js,How to Select Descendant Elements in jQuery">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Select Descendant Elements in jQuery - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Select Descendant Elements in jQuery</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_traversing-siblings.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_traversing-ancestors.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery Traversing <span>Descendants</span></h1>
				<p class="summary">In this tutorial you will learn how to traversing down the DOM tree using jQuery.</p>
				<h2>Traversing Down the DOM Tree</h2>
				<p>In logical relationships a descendant is a child, grandchild, great-grandchild, and so on.</p>
				<p class="space">jQuery provides the useful methods such as <code>children()</code> and <code>find()</code> that you can use to traverse down in the DOM tree either single or multiple levels to easily find or get the child or other descendants of an element in the hierarchy.</p>
				<h2>jQuery <code>children()</code> Method</h2>
				<p>The jQuery <code>children()</code> method is used to get the direct children of the selected element.</p>
				<p>The following example will highlight the direct children of the <a href="../info-html/html-ul-tag.php"><code>&lt;ul&gt;</code></a> element which is <a href="../info-html/html-li-tag.php"><code>&lt;li&gt;</code></a> by adding the class <code>.highlight</code> on document ready.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc089.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery children() Demo</title>
<style>
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("ul").children().addClass("highlight");
});
</script>
</head>
<body>
    <div class="container">
        <h1>Hello World</h1>
        <p>This is a <em>simple paragraph</em>.</p>
        <ul>
            <li>Item One</li>
            <li>Item Two</li>
        </ul>
    </div>
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
				<hr />
				<h2>jQuery <code>find()</code> Method</h2>
				<p>The jQuery <code>find()</code> method is used to get the descendant elements of the selected element.</p>
				<p>The <code>find()</code> and <code>children()</code> methods are similar, except that the <code>find()</code> method search through multiple levels down the DOM tree to the last descendant, whereas the <code>children()</code> method only search a single level down the DOM tree. The following example will add a border around all the <a href="../info-html/html-li-tag.php"><code>&lt;li&gt;</code></a> elements that are descendants of the <a href="../info-html/html-div-tag.php"><code>&lt;div&gt;</code></a> element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5673.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery find() Demo</title>
<style>
    *{
        margin: 10px;
    }
    .frame{
        border: 2px solid green;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("div").find("li").addClass("frame");
});
</script>
</head>
<body>
    <div class="container">
        <h1>Hello World</h1>
        <p>This is a <em>simple paragraph</em>.</p>
        <ul>
            <li>Item One</li>
            <li>Item Two</li>
        </ul>
    </div>
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
				<p>However, if you want to get all the descendant elements you can use the universal selector.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6f6a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery find() Demo</title>
<style>
    *{
        margin: 10px;
    }
    .frame{
        border: 2px solid green;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("div").find("*").addClass("frame");
});
</script>
</head>
<body>
    <div class="container">
        <h1>Hello World</h1>
        <p>This is a <em>simple paragraph</em>.</p>
        <ul>
            <li>Item One</li>
            <li>Item Two</li>
        </ul>
    </div>
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
					<a href="jq_traversing-ancestors.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_traversing-siblings.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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