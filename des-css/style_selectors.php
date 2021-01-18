<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,CSS Selectors for Styling Elements">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Use CSS Selectors for Styling Elements - WebSchool Today</title>
    <meta name="description" content="How to Use CSS Selectors for Styling Elements" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Use CSS Selectors for Styling Elements</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_color.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="style_syntax.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Selectors</span></h1>
                <p class="summary">In this tutorial you will learn how to use CSS selectors for applying style rules to elements.</p>
                <h2>What is Selector?</h2>
                <p>A CSS selector is a pattern to match the elements on a web page. The style rules associated with that selector will be applied to the elements that match the selector pattern.</p>
                <p>Selectors are one of the most important aspects of CSS as they allow you to target specific elements on your web page in various ways so that they can be styled.</p>
                <p class="space">Several types of selectors are available in CSS, let's take a closer look at them:</p>
                <h2>Universal Selector</h2>
                <p>The universal selector, denoted by an asterisk (<code>*</code>), matches every single element on the page.</p>
                <p>The universal selector may be omitted if other conditions exist on the element. This selector is often used to remove the default margins and paddings from the elements for quick testing purpose.</p>
                <p>Let's try out the following example to understand how it basically works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc805.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

* {
    margin: 0;
    padding: 0;
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
                <p>The style rules inside the <code>*</code> selector will be applied to every element in a document.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> It is recommended <em>not to use</em> the universal selector (<code>*</code>) too often in a production environment, since this selector matches every element on a web page that puts too much of unnecessary pressure on the browsers. Use element type or class selector instead.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Element Type Selectors</h2>
                <p>An element type selector matches all instance of the element in the document with the corresponding element type name. Let's try out an example to see how it actually works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabea90.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

p {
    color: blue;
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
                <p>The style rules inside the <code>p</code> selector will be applied on every <code>&lt;p&gt;</code> element (or paragraph) in the document and color it blue, regardless of their position in the document tree.</p>
                <hr />
                <h2>Id Selectors</h2>
                <p>The id selector is used to define style rules for a <em>single</em> or <em>unique</em> element.</p>
                <p>The id selector is defined with a hash sign (<code>#</code>) immediately followed by the id value.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab56e5.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

#error {
    color: red;
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
                <p>This style rule renders the text of an element in red, whose <code>id</code> attribute is set to <code>error</code>.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The value of an id attribute must be unique within a given document &mdash; meaning no two elements in your HTML document can share the same id value.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Class Selectors</h2>
                <p>The class selectors can be used to select any HTML element that has a <code>class</code> attribute. All the elements having that class will be formatted according to the defined rule.</p>
                <p>The class selector is defined with a period sign (<code>.</code>) immediately followed by the class value.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab084b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

.blue {
    color: blue;
}
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
                <p>The above style rules renders the text in blue of every element in the document that has <code>class</code> attribute set to <code>blue</code>. You can make it a bit more particular. For example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9d73.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <pre class="syntax-highlighter line-numbers"><code class="language-css">p.blue {
    color: blue;
}</code></pre>
                    </div>
                </div>
                <p>The style rule inside the selector <code>p.blue</code> renders the text in blue of only those <code>&lt;p&gt;</code> elements that has <code>class</code> attribute set to <code>blue</code>, and has no effect on other paragraphs.</p>
                <hr />
                <h2>Descendant Selectors</h2>
                <p>You can use these selectors when you need to select an element that is the descendant of another element, for example, if you want to target only those anchors that are contained within an unordered list, rather than targeting all anchor elements. Let's see how it works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1c93.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

p.blue {
    color: blue;
}
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
                <p>The style rules inside the selector <code>ul.menu li a</code> applied to only those <a href="../des-html/html-links.php"><code>&lt;a&gt;</code></a> elements that contained inside an <a href="../des-html/html-lists.php"><code>&lt;ul&gt;</code></a> element having the class <code>.menu</code>, and has no effect on other links inside the document.</p>
                <p>Similarly, the style rules inside the <code>h1 em</code> selector will be applied to only those <a href="../info-html/html-em-tag.php"><code>&lt;em&gt;</code></a> elements that contained inside the <a href="../des-html/html-headings.php"><code>&lt;h1&gt;</code></a> element and has not effect on other <code>&lt;em&gt;</code> elements.</p>
                <hr />
                <h2>Child Selectors</h2>
                <p>A child selector is used to select only those elements that are the direct children of some element.</p>
                <p>A child selector is made up of two or more selectors separated by a greater than symbol (<code>&gt;</code>). You can use this selector, for instance, to select the first level of list elements inside a nested list that has more than one level. Let's check out an example to understand how it works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab797f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

ul.menu li a {
    text-decoration: none;
}
h1 em {
    color: green;
}
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
                <p>The style rule inside the selector <code>ul &gt; li</code> applied to only those <code>&lt;li&gt;</code> elements that are direct children of the <code>&lt;ul&gt;</code> elements, and has no effect on other list elements.</p>
                <hr />
                <h2>Adjacent Sibling Selectors</h2>
                <p>The adjacent sibling selectors can be used to select sibling elements (i.e. elements at the same level). This selector has the syntax like: E1 + E2, where E2 is the target of the selector.</p>
                <p>The selector <code>h1 + p</code> in the following example will select the <a href="../des-html/html-paragraphs.php"><code>&lt;p&gt;</code></a> elements only if both the <a href="../des-html/html-headings.php"><code>&lt;h1&gt;</code></a> and <code>&lt;p&gt;</code> elements share the same parent in the document tree and <code>&lt;h1&gt;</code> is immediately precedes the <code>&lt;p&gt;</code> element. That means only those paragraphs that come immediately after each  <code>&lt;h1&gt;</code> heading will have the associated style rules. Let's see how this selector actually works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6976.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

ul > li {
    list-style: square;
}
ul > li ol {
    list-style: none;
}
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
                <h2>General Sibling Selectors</h2>
                <p>The general sibling selector is similar to the adjacent sibling selector (E1 + E2), but it is less strict. A general sibling selector is made up of two simple selectors separated by the tilde (<code>&#8764;</code>) character. It can be written like: E1 &#8764; E2, where E2 is the target of the selector.</p>
                <p> The selector <code>h1 &#8764; p</code> in the example below will select all the <code>&lt;p&gt;</code> elements that preceded by the <code>&lt;h1&gt;</code> element, where all the elements share the same parent in the document tree.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabfdd6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

h1 + p {
    color: blue;
    font-size: 18px;
}
ul.task + p {
    color: #f0f;
    text-indent: 30px;
}
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
                <p>There are more sophisticated selectors like <a href="style_attribute-selectors.php">attribute selectors</a>, <a href="style_pseudo-classes.php">pseudo-classes</a>, <a href="style_pseudo-elements.php">pseudo-elements</a>. We will discuss about these selectors in detail in the upcoming chapters.</p>
                <hr />
                <h2>Grouping Selectors</h2>
                <p>Often several selectors in a style sheet share the same style rules declarations. You can group them into a comma-separated list to minimize the code in your style sheet. It also prevents you from repeating the same style rules over and over again. Let's take a look:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab37d5.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

h1 ∼ p {
    color: blue;
    font-size: 18px;
}
ul.task ∼ p {
    color: #f0f;
    text-indent: 30px;
}
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
                <p>As you can see in the above example, the same style rule <code>font-weight: normal;</code> is shared by the selectors <code>h1</code>, <code>h2</code> and <code>h3</code>, so it can be grouped in a comma-separated list, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd466.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11">

h1, h2, h3 {
    font-weight: normal;
}
h1 {
    font-size: 36px;
}
h2 {
    font-size: 28px;
}
h3 {
    font-size: 22px;
}
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
                    <a href="style_syntax.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_color.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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