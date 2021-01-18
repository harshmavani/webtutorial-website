<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Select Ancestor Elements in jQuery">
	  <meta name="keywords" content="jquery,jq,js,How to Select Ancestor Elements in jQuery">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Select Ancestor Elements in jQuery - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Select Ancestor Elements in jQuery</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_traversing-descendants.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_traversing.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery Traversing <span>Ancestors</span></h1>
				<p class="summary">In this tutorial you will learn how to traversing up the DOM tree using jQuery.</p>
				<h2>Traversing Up the DOM Tree</h2>
				<p>In logical relationships an ancestor is a parent, grandparent, great-grandparent, and so on.</p>
				<p class="space">jQuery provides the useful methods such as <code>parent()</code>, <code>parents()</code> and <code>parentsUntil()</code> that you can use to traverse up in the DOM tree either single or multiple levels to easily get the parent or other ancestors of an element in the hierarchy.</p>
				<h2>jQuery <code>parent()</code> Method</h2>
				<p>The jQuery <code>parent()</code> method is used to get the direct parent of the selected element.</p>
				<p>The following example will highlight the direct parent element of the <code>&lt;li&gt;</code> which is <code>&lt;ul&gt;</code> by adding the class <code>.highlight</code> on document ready.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc8a4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery parent() Demo</title>
<style>
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("li").parent().addClass("highlight");
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
				<h2>jQuery <code>parents()</code> Method</h2>
				<p>The jQuery <code>parents()</code> method is used to get the ancestors of the selected element.</p>
				<p>The following example will add a border around all the ancestor elements of the <a href="../info-html/html-li-tag.php"><code>&lt;li&gt;</code></a> which are <a href="../info-html/html-ul-tag.php"><code>&lt;ul&gt;</code></a>, <a href="../info-html/html-div-tag.php"><code>&lt;div&gt;</code></a>, <a href="../info-html/html-body-tag.php"><code>&lt;body&gt;</code></a> and the <a href="../info-html/html-html-tag.php"><code>&lt;html&gt;</code></a> elements.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf6ea.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery parents() Demo</title>
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
    $("li").parents().addClass("frame");
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
				<p>You can optionally include one or more selector as a parameter within the <code>parents()</code> method to filter your search for the ancestors. The following example will apply the border around all the ancestors of the <code>&lt;li&gt;</code> that are <code>&lt;div&gt;</code> elements.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabfc07.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery parents() Demo</title>
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
    $("li").parents("div").addClass("frame");
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
				<hr />
				<h2>jQuery <code>parentsUntil()</code> Method</h2>
				<p>The jQuery <code>parentsUntil()</code> method is used to get all the ancestors up to but not including the element matched by the selector. In simple words we can say it returns all ancestor elements between two given elements in a DOM hierarchy.</p>
				<p>The following example will add a border around all the ancestor elements of the <code>&lt;li&gt;</code> excluding <code>&lt;html&gt;</code> element i.e. add a border to <code>&lt;ul&gt;</code>, <code>&lt;div&gt;</code> and <code>&lt;body&gt;</code> element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab554f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery parentsUntil() Demo</title>
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
    $("li").parentsUntil("html").addClass("frame");
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
				<div class="bottom-link clearfix">
					<a href="jq_traversing.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_traversing-descendants.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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