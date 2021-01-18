<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Pseudo Classes">
	  <meta name="author" content="webschooltoday.com">
    <title>Working with CSS Pseudo Classes - WebSchool Today</title>
    <meta name="description" content="Working with CSS Pseudo Classes" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Working with CSS Pseudo Classes</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_pseudo-elements.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="style_alignment.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Pseudo-classes</span></h1>
                <p class="summary">A CSS pseudo-class selector matches components based on an additional condition and not necessarily defined by the document tree.</p>
                <h2>What is Pseudo-class</h2>
                <p>The CSS pseudo-classes allow you to style the dynamic states of an element such as hover, active and focus state, as well as elements that are existing in the document tree but can't be targeted via the use of other selectors without adding any IDs or classes to them, for example, targeting the first or last child elements. </p>
                <p>A pseudo-class starts with a colon (<code>:</code>). Its syntax can be given with:</p>
                <div class="shadow">
                    <div class="syntax">
                        selector:pseudo-class { <span class="property">property</span>: <span class="property-value">value</span>; }
                    </div>
                </div>
                <p class="space">The following section describes the most commonly used pseudo-classes.</p>
                <h2>Anchor Pseudo-classes</h2>
                <p>Using <a href="../info-html/html-a-tag.php">anchor</a> pseudo-classes links can be displayed in different ways:</p>
                <p>These pseudo-classes let you style unvisited links differently from visited ones. The most common styling technique is to remove underlines from visited links.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf6b6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

a:link {
    color: blue;
}
a:visited {
    text-decoration: none;
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
                <p>Some anchor pseudo-classes are dynamic &mdash; they're applied as a result of user interaction with the document like on hover, or on focus etc.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabeb3f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

a:hover {
    color: red;
}
a:active {
    color: gray;
}
a:focus {
    color: yellow;
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
                <p>These pseudo-classes change how the links are rendered in response to user actions.</p>
                <ul>
                    <li><code>:hover</code> applies when a user places cursor over the element, but does not select it.</li>
                    <li><code>:active</code> applies when the element is activated or clicked.</li>
                    <li><code>:focus</code> applies when the element has keyboard focus.</li>
                </ul>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> To make these pseudo-classes work perfectly, you must define them in the exact order &mdash; <code>:link</code>, <code>:visited</code>, <code>:hover</code>, <code>:active</code>, <code>:focus</code>.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>The :first-child Pseudo-class</h2>
                <p>The <code>:first-child</code> pseudo-class matches an element that is the first child element of some other element. The selector <code>ol li:first-child</code> in the example below select the first list item of an ordered list and removes the top border form it.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3e49.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

ol li:first-child {
    border-top: none;
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> To make <code>:first-child</code> to work in Internet Explorer 8 and earlier versions, a <a href="../des-html/html-doctypes.php"><code>&lt;!DOCTYPE&gt;</code></a> must be declared at the top of document.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>The :last-child Pseudo-class</h2>
                <p>The <code>:last-child</code> pseudo-class matches an element that is the last child element of some other element. The selector <code>ul li:last-child</code> in the example below select the last list item from an unordered list and removes the right border from it.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab24d4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

ul li:last-child {
    border-right: none;
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The CSS <code>:last-child</code> selector does not work in Internet Explorer 8 and earlier versions. Supports in Internet Explorer 9 and above.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>The :nth-child Pseudo-class</h2>
                <p>The CSS3 introduces a new <code>:nth-child</code> pseudo-class that allows you to target one or more specific children of a given parent element. The basic syntax of this selector can be given with <code>:nth-child(N)</code>, where <code>N</code> is an argument, which can be a number, a keyword (<code>even</code> or <code>odd</code>), or an expression of the form <code>xn+y</code> where <code>x</code> and <code>y</code> are integers (e.g. <code>1n</code>, <code>2n</code>, <code>2n+1</code>, &hellip;).</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4815.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

table tr:nth-child(2n) td {
    background: #eee;
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
                <p>The style rules in the example above simply highlight the alternate table row, without adding any IDs or classes to the <a href="../des-html/html-tables.php"><code>&lt;table&gt;</code></a> elements.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> The CSS <code>:nth-child(N)</code> selector is very useful in the situations where you have to select the elements that appears inside the document tree in a specific interval or pattern like at even or odd places, etc.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>The :lang Pseudo-class</h2>
                <p>The language pseudo-class <code>:lang</code> allows constructing selectors based on the language setting for specific tags. The <code>:lang</code> pseudo-class in the example below defines the quotation marks for <a href="../info-html/html-q-tag.php"><code>&lt;q&gt;</code></a> elements that are explicitly given a language value of <code>no</code>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab64d6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

q:lang(no) {
    quotes: "~" "~";
}
/* HTML code snippet */
<p>Some text <q lang="no">A quote in a paragraph</q> Some text.</p>

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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Internet Explorer up to version 7 does not support the <code>:lang</code> pseudo-class. IE8 supports only if a <a href="../des-html/html-doctypes.php"><code>&lt;!DOCTYPE&gt;</code></a> is specified.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Pseudo-classes and CSS Classes</h2>
                <p>Pseudo-classes can be combined with CSS classes.</p>
                <p>The link with <code>class="red"</code>, in the example below will be displayed in red.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd5d7.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

a.red:link {    /* style rule */
    color: #ff0000;
}
<a class="red" href="#">Click me</a>    /* HTML code snippet */

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
                <div class="bottom-link clearfix">
                    <a href="style_alignment.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_pseudo-elements.php" class="next-page-bottom">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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