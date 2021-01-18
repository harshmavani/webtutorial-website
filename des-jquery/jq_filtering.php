<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="jQuery Filtering Selection of Elements">
	  <meta name="keywords" content="jquery,jq,js,jQuery Filtering Selection of Elements">
	  <meta name="author" content="webschooltoday.com">
    <title>jQuery Filtering Selection of Elements - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">jQuery Filtering Selection of Elements</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_ajax.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_traversing-siblings.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery <span>Filtering</span></h1>
				<p class="summary">In this tutorial you will learn how to filter element's selection using jQuery.</p>
				<h2>Filtering the Elements Selection</h2>
				<p class="space">jQuery provides several methods such as <code>filter()</code>, <code>first()</code>, <code>last()</code>, <code>eq()</code>, <code>slice()</code>, <code>has()</code>, <code>not()</code>, etc. that you can use to narrow down the search for elements in a DOM tree.</p>
				<h2>jQuery <code>first()</code> Method</h2>
				<p>The jQuery <code>first()</code> method filters the set of matched elements and returns the first element from the set. The following example will only highlight the first <a href="../info-html/html-li-tag.php"><code>&lt;li&gt;</code></a> element within the <a href="../info-html/html-ul-tag.php"><code>&lt;ul&gt;</code></a> element by adding the class <code>.highlight</code> on document ready.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4b74.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery first() Demo</title>
<style>
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("ul li").first().addClass("highlight");
});
</script>
</head>
<body>
    <ul>
        <li>First list item</li>
        <li>Second list item</li>
        <li>Third list item</li>
        <li>Last list item</li>
    </ul>
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
				<h2>jQuery <code>last()</code> Method</h2>
				<p>The jQuery <code>last()</code> method filters the set of matched elements and returns the last element from the set. The following example will only highlight the last <code>&lt;li&gt;</code> element within the <code>&lt;ul&gt;</code> element by adding the class <code>.highlight</code> on document ready.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8c5b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery last() Demo</title>
<style>
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("ul li").last().addClass("highlight");
});
</script>
</head>
<body>
    <ul>
        <li>First list item</li>
        <li>Second list item</li>
        <li>Third list item</li>
        <li>Last list item</li>
    </ul>
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
				<h2>jQuery <code>eq()</code> Method</h2>
				<p>The jQuery <code>eq()</code> method filters the set of matched elements and returns only one element with a specified index number. The following example will highlight the second <code>&lt;li&gt;</code> element within the <code>&lt;ul&gt;</code> element by adding the class <code>.highlight</code> on document ready.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabefaf.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery eq() Demo</title>
<style>
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("ul li").eq(1).addClass("highlight");
});
</script>
</head>
<body>
    <ul>
        <li>First list item</li>
        <li>Second list item</li>
        <li>Third list item</li>
        <li>Last list item</li>
    </ul>
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
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The index supplied to the <code>eq()</code> method indicates the 0-based position of the element that means the index 0 target the first element, the index 1 targets the second element and so on. Also this index refers to the position of the element within the jQuery object, not within the DOM tree.</p>
                        </div>
                    </div>
                </div>
				<p>You can also specify a negative index number. A negative index number indicates a position starting from the end of the set, rather than the beginning. For example, the <code>eq(-2)</code> indicates the second last element within the set of matched elements.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7249.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery eq() Demo</title>
<style>
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("ul li").eq(-2).addClass("highlight");
});
</script>
</head>
<body>
    <ul>
        <li>First list item</li>
        <li>Second list item</li>
        <li>Third list item</li>
        <li>Fourth list item</li>
    </ul>
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
				<h2>jQuery <code>filter()</code> Method</h2>
				<p>The jQuery <code>filter()</code> method can take the selector or a function as its argument to filters the set of matched elements based on a specific criteria.</p>
				<p>The supplied selector or function to the <code>filter()</code> method is tested against each element in the set of matched elements and all the elements that <em>matching</em> the supplied selector or pass the function's test will be included in the result.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe257.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery filter() Demo</title>
<style>
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("ul li").filter(":even").addClass("highlight");
});
</script>
</head>
<body>
    <ul>
        <li>First list item</li>
        <li>Second list item</li>
        <li>Third list item</li>
        <li>Fourth list item</li>
    </ul>
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
				<p>As stated earlier you can also pass a function to the <code>filter()</code> method to filter the set of matched elements based on certain conditions. The following example will test each <code>&lt;li&gt;</code> element within the <code>&lt;ul&gt;</code> and highlight those <code>&lt;li&gt;</code> elements whose indexes are odd numbers i.e. highlights only second and fourth list item as the index is zero-based.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab41de.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery filter() Demo</title>
<style>
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("ul li").filter(function(index){
        return index % 2 !== 0;
    }).addClass("highlight");
});
</script>
</head>
<body>
    <ul>
        <li>First list item</li>
        <li>Second list item</li>
        <li>Third list item</li>
        <li>Last list item</li>
    </ul>
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
				<h2>jQuery <code>has()</code> Method</h2>
				<p>The jQuery <code>has()</code> method filters the set of matched elements and returns only those elements that has the specified descendant element. The following example will highlight all the <code>&lt;li&gt;</code> elements that has the descendant <code>&lt;ul&gt;</code> elements.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9d82.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                      
	<textarea id="code7">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery filter() Demo</title>
<style>
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("ul li").has("ul").addClass("highlight");
});
</script>
</head>
<body>
    <ul>
        <li>Section 1</li>
        <li>Section 2</li>
        <li>
            <ul>
                <li>Section 2.1</li>
                <li>Section 2.2</li>
                <li>Section 2.3</li>
            </ul>
        </li>
        <li>Section 4</li>
    </ul>
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
				<h2>jQuery <code>not()</code> Method</h2>
				<p>The jQuery <code>not()</code> method filters the set of matched elements and returns all elements that does not met the specified conditions. It can take the selector or a function as its argument.</p>
				<p>The supplied selector or function to the <code>not()</code> method is tested against each element in the set of matched elements and all the elements that is <em>not matching</em> the supplied selector or pass the function's test will be included in the result.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0354.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery not() Demo</title>
<style>
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("ul li").not(":even").addClass("highlight");
});
</script>
</head>
<body>
    <ul>
        <li>First list item</li>
        <li>Second list item</li>
        <li>Third list item</li>
        <li>Fourth list item</li>
    </ul>
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
				<p>The <code>not()</code> method can take a function as its argument in the same way that <code>filter()</code> does, but it works just opposite of the <code>filter()</code> method i.e. the elements that pass the function's test are excluded and rest the elements are included in the result.</p>
				<p>The following example will test each <code>&lt;li&gt;</code> element within the <code>&lt;ul&gt;</code> and highlight those <code>&lt;li&gt;</code> elements whose indexes are not the odd numbers i.e. highlights first and third list item.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5544.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery not() Demo</title>
<style>
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("ul li").not(function(index){
        return index % 2 !== 0;
    }).addClass("highlight");
});
</script>
</head>
<body>
    <ul>
        <li>First list item</li>
        <li>Second list item</li>
        <li>Third list item</li>
        <li>Fourth list item</li>
    </ul>
</body>
</html>

  </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code9"), {
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
				<h2>jQuery <code>slice()</code> Method</h2>
				<p>The jQuery <code>slice()</code> method filters the set of matched elements specified by a range of indices. This method accepts <em>start</em> and <em>end</em> (optional) index number as arguments, where the start index specifies the position at which the elements begin to be selected and the end index specify the position at which the elements stop being selected.</p>
				<p>The following example will highlight the first and second <code>&lt;li&gt;</code> elements within the <code>&lt;ul&gt;</code> element by adding the class <code>.highlight</code> on document ready.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabee5b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery slice() Demo</title>
<style>
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("ul li").slice(0, 2).addClass("highlight");
});
</script>
</head>
<body>
    <ul>
        <li>First list item</li>
        <li>Second list item</li>
        <li>Third list item</li>
        <li>Fourth list item</li>
    </ul>
</body>
</html>

  </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code10"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>
                    </div>
                </div>
				<p>You can also specify a negative index numbers. A negative index number indicates a position starting from the end of the set, rather than the beginning. For example, the <code>slice(-2, -1)</code> only highlight the third list item, since it is the only item in the range between two from the end (-2) and one from the end (-1), as end position is not included in result.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4fa2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery slice() Demo</title>
<style>
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("ul li").slice(-2, -1).addClass("highlight");
});
</script>
</head>
<body>
    <ul>
        <li>First list item</li>
        <li>Second list item</li>
        <li>Third list item</li>
        <li>Fourth list item</li>
    </ul>
</body>
</html>

  </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code11"), {
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
					<a href="jq_traversing-siblings.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_ajax.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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