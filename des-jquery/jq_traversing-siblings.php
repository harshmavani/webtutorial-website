<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Select Sibling Elements in jQuery">
	  <meta name="keywords" content="jquery,jq,js,How to Select Sibling Elements in jQuery">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Select Sibling Elements in jQuery - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Select Sibling Elements in jQuery</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_filtering.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_traversing-descendants.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery Traversing <span> Siblings</span></h1>
				<p class="summary">In this tutorial you'll learn how to traverse sideways in a DOM tree using jQuery.</p>
				<h2>Traversing Sideways in DOM Tree</h2>
				<p>In logical relationships siblings are those elements that share the same parent.</p>
				<p class="space">jQuery provides several methods such as <code>siblings()</code>, <code>next()</code>, <code>nextAll()</code>, <code>nextUntil()</code>, <code>prev()</code>, <code>prevAll()</code> and <code>prevUntil()</code>  that you can use to traverse sideways in the DOM tree.</p>
				<h2>jQuery <code>siblings()</code> Method</h2>
				<p>The jQuery <code>siblings()</code> method is used to get the sibling elements of the selected element.</p>
				<p>The following example will highlight the siblings of the <a href="../info-html/html-p-tag.php"><code>&lt;p&gt;</code></a> element which are <a href="../info-html/html-headings-tag.php"><code>&lt;h1&gt;</code></a> and <a href="../info-html/html-ul-tag.php"><code>&lt;ul&gt;</code></a> by adding the class <code>.highlight</code> on document ready.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8e13.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery siblings() Demo</title>
<style>
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("p").siblings().addClass("highlight");
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
				<p>You can optionally include one or more selector as a parameter within the <code>siblings()</code> method to filter your search for the siblings. The following example will only apply the border around the siblings of the <code>&lt;p&gt;</code> that are <code>&lt;ul&gt;</code> elements.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8d98.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery siblings() Demo</title>
<style>
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("p").siblings("ul").addClass("highlight");
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
				<hr />
				<h2>jQuery <code>next()</code> Method</h2>
				<p>The jQuery <code>next()</code> method is used to get the immediately following sibling i.e. the next sibling element of the selected element. The following example will highlight the next sibling of the <code>&lt;p&gt;</code> element which is the <code>&lt;ul&gt;</code> element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab593f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery next() Demo</title>
<style>
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("p").next().addClass("highlight");
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
				<h2>jQuery <code>nextAll()</code> Method</h2>
				<p>The jQuery <code>nextAll()</code> method is used to get all following siblings of the selected element.</p>
				<p>The following example will highlight all the siblings of the <code>&lt;p&gt;</code> element that comes next to it.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb6a0.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery nextAll() Demo</title>
<style>
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("p").nextAll().addClass("highlight");
});
</script>
</head>
<body>
    <div class="container">
        <h1>Hello World</h1>
        <p>This is a <em>simple paragraph</em>.</p>
        <p>This is another paragraph.</p>
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
				<hr/>
				<h2>jQuery <code>nextUntil()</code> Method</h2>
				<p>The jQuery <code>nextUntil()</code> method is used to get all the following siblings up to but not including the element matched by the selector. In simple words we can say it returns all the next siblings elements between two given elements in a DOM hierarchy.</p>
				<p>The following example will highlight all the following sibling elements of the <code>&lt;h1&gt;</code> element excluding the <code>&lt;ul&gt;</code> element i.e. highlight both the <code>&lt;p&gt;</code> element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf0c0.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery nextUntil() Demo</title>
<style>
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("h1").nextUntil("ul").addClass("highlight");
});
</script>
</head>
<body>
    <div class="container">
        <h1>Hello World</h1>
        <p>This is a <em>simple paragraph</em>.</p>
        <p>This is another paragraph.</p>
        <ul>
            <li>Item One</li>
            <li>Item Two</li>
        </ul>
    </div>
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
				<hr />
				<h2>jQuery <code>prev()</code> Method</h2>
				<p>The jQuery <code>prev()</code> method is used to get the immediately preceding sibling i.e. the previous sibling element of the selected element. The following example will highlight the previous sibling of the <code>&lt;ul&gt;</code> element which is the <code>&lt;p&gt;</code> element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe86e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery prev() Demo</title>
<style>
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("ul").prev().addClass("highlight");
});
</script>
</head>
<body>
    <div class="container">
        <h1>Hello World</h1>
        <p>This is a <em>simple paragraph</em>.</p>
        <p>This is another paragraph.</p>
        <ul>
            <li>Item One</li>
            <li>Item Two</li>
        </ul>
    </div>
</body>
</html>


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
				<h2>jQuery <code>prevAll()</code> Method</h2>
				<p>The jQuery <code>prevAll()</code> method is used to get all preceding siblings of the selected element.</p>
				<p>The following example will highlight all siblings of the <code>&lt;ul&gt;</code> element that comes prior to this.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab36d4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery prevAll() Demo</title>
<style>
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("ul").prevAll().addClass("highlight");
});
</script>
</head>
<body>
    <div class="container">
        <h1>Hello World</h1>
        <p>This is a <em>simple paragraph</em>.</p>
        <p>This is another paragraph.</p>
        <ul>
            <li>Item One</li>
            <li>Item Two</li>
        </ul>
    </div>
</body>
</html>


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
				<hr />
				<h2>jQuery <code>prevUntil()</code> Method</h2>
				<p>The jQuery <code>prevUntil()</code> method is used to get all the preceding siblings up to but not including the element matched by the selector. In simple words we can say it returns all the previous siblings elements between two given elements in a DOM hierarchy.</p>
				<p>The following example will highlight all the previous sibling elements of the <code>&lt;ul&gt;</code> element excluding the <code>&lt;h1&gt;</code> element i.e. highlight both the <code>&lt;p&gt;</code> element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabda02.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery prevUntil() Demo</title>
<style>
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("ul").prevUntil("h1").addClass("highlight");
});
</script>
</head>
<body>
    <div class="container">
        <h1>Hello World</h1>
        <p>This is a <em>simple paragraph</em>.</p>
        <p>This is another paragraph.</p>
        <ul>
            <li>Item One</li>
            <li>Item Two</li>
        </ul>
    </div>
</body>
</html>


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
				<div class="bottom-link clearfix">
					<a href="jq_traversing-descendants.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_filtering.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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