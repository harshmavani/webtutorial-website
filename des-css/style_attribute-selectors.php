<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Attribute Selectors">
	  <meta name="author" content="webschooltoday.com">
    <title>Working with CSS Attribute Selectors - WebSchool Today</title>
    <meta name="description" content="Working with CSS Attribute Selectors" />
    <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Working with CSS Attribute Selectors</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_validation.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="style_opacity.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Attribute Selectors </span></h1>
                <p class="summary">An attribute selector selects the HTML elements that has a specific attribute or attribute with a specified value.</p>
                <h2>Understanding the Attribute Selectors</h2>
                <p>The CSS attribute selectors provides an easy and powerful way to apply the styles on HTML elements based on the presence of a particular <a href="../des-html/html-attributes.php">attribute or attribute value</a>.</p>
                <p>You can create an attribute selector by putting the attribute&mdash;optionally with a value&mdash;in a pair of square brackets. You can also place an <a href="style_selectors.php">element type selector</a> before it.</p>
                <p class="space">The following sections describe the most common attribute selectors.</p>
                <h2>CSS [attribute] Selector</h2>
                <p>This is the simplest form of an attribute selector that applies the style rules to an element if a given attribute exists. For example, we can style all the elements that have a <code>title</code> attribute by using the following style rules:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabcafe.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

[title] {
    color: blue;
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
                <p>The selector <code>[title]</code> in the above example matches all elements that has a <code>title</code> attribute.</p>
                <p>You can also restrict this selection to a particular HTML element by placing the attribute selector after an element type selector, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab30bc.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

abbr[title] {
    color: red;
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
                <p>The selector <code>abbr[title]</code> matches only <a href="../html-reference/html-abbr-tag.php"><code>&lt;abbr&gt;</code></a> elements that has a <code>title</code> attribute, so it matches the abbreviation, but not the <a href="../html-reference/html-a-tag.php">anchor</a> elements having <code>title</code> attribute.</p>
                <hr />
                <h2>CSS [attribute="value"] Selector</h2>
                <p>You can use the <code>=</code> operator to make an attribute selector matches any element whose attribute value is exactly equal to the given value:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb9ec.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

input[type="submit"] {
    border: 1px solid green;
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
                <p>The selector in the above example matches all <a href="../html-reference/html-input-tag.php"><code>&lt;input&gt;</code></a> element that has a <code>type</code> attribute with a value equal to <code>submit</code>.</p>
                <hr />
                <h2>CSS [attribute~="value"] Selector</h2>
                <p>You can use the <code>~=</code> operator to make an attribute selector matches any element whose attribute value is a list of <em>space-separated</em> values (like <code>class="alert warning"</code>) , one of which is exactly equal to the specified value:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1455.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

[class~="warning"] {
    color: #fff;
    background: red;
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
                <p>This selector matches any HTML element with a <code>class</code> attribute that contains space-separated values, one of which is <code>warning</code>. For example, it matches the elements having the class values <code>warning</code>, <code>alert warning</code> etc.</p>
                <hr />
                <h2>CSS [attribute|="value"] Selector</h2>
                <p>You can use the <code>|=</code> operator to make an attribute selector matches any element whose attribute has a <em>hyphen-separated</em> list of values beginning with the specified value:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb73b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

[lang|=en] {
    color: #fff;
    background: blue;
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
                <p>The selector in the above example matches all elements that has an <a href="../html-reference/html5-global-attributes.php"><code>lang</code></a> attribute containing a value start with <code>en</code>, whether or not that value is followed by a hyphen and more characters. In other words, it matches the elements with <code>lang</code> attribute that has the values <code>en</code>, <code>en-US</code>, <code>en-GB</code>, and so on but not <code>US-en</code>, <code>GB-en</code>.</p>
                <hr />
                <h2>CSS [attribute^="value"] Selector</h2>
                <p>You can use the <code>^=</code> operator to make an attribute selector matches any element whose attribute value <em>starts with</em> a specified value. It does not have to be a whole word.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9d7a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

a[href^="http://"] {
    background: url("external.png") 100% 50% no-repeat;
    padding-right: 15px;
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
                <p>The selector in the example above will target all external links and add a small icon indicating that they will open in a new tab or window.</p>
                <hr />
                <h2>CSS [attribute$="value"] Selector</h2>
                <p>Similarly, you can use the <code>$=</code> operator to select all elements whose attribute value <em>ends with</em> a specified value. It does not have to be a whole word.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3160.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

a[href$=".pdf"] {
    background: url("pdf.png") 0 50% no-repeat;
    padding-left: 20px;
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
                <p>The selector in the example above select all <a href="../html-reference/html-a-tag.php"><code>&lt;a&gt;</code></a> elements that links to a PDF document and add a small PDF icon to provide hints to the user about the link.</p>
                <hr />
                <h2>CSS [attribute*="value"] Selector</h2>
                <p>You can use the <code>*=</code> operator to make an attribute selector matches all elements whose attribute value contains a specified value.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe0c1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

[class*="warning"] {
    color: #fff;
    background: red;
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
                <p>This selector in the example above matches all HTML elements with a <code>class</code> attribute that values contains <code>warning</code>. For example, it matches the elements having class values <code>warning</code>, <code>alert warning</code>, <code>alert-warning</code> or <code>alert_warning</code> etc.</p>
                <hr />
                <h2>Styling Forms with Attribute Selectors</h2>
                <p>The attribute selectors are particularly useful for styling forms without <a href="../html-reference/html5-global-attributes.php"><code>class</code></a> or <a href="../html-reference/html5-global-attributes.php"><code>id</code></a>:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe187.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

input[type="text"], input[type="password"] {
    width: 150px;
    display: block;
    margin-bottom: 10px;
    background: yellow;
}
input[type="submit"] {
    padding: 2px 10px;
    border: 1px solid #804040;
    background: #ff8040;
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
                <div class="bottom-link clearfix">
                    <a href="style_opacity.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_validation.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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