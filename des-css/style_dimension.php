<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,CSS Dimension">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS Dimension - Understanding Max/Min Width and Height</title>
    <meta name="description" content="The CSS dimension properties allow you to control the width and height of an element. In CSS, width and height generally refer to the width and height of the content area." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS Dimension - Understanding Max/Min Width and Height</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <a href="style_box-model.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <a href="style_padding.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <h1>CSS <span>Dimension</span></h1>
                <p class="summary">In this tutorial you will learn how to set width and height of an element using CSS.</p>
                <h2>Setting Element Dimensions</h2>
                <p class="space">CSS has several dimension properties, such as <code>width</code>, <code>height</code>, <code>max-width</code>, <code>min-width</code>, <code>max-height</code>, and <code>min-height</code> that allows you to control the width and height of an element. The following sections describe how to use these properties to create a better web page layout.</p>
                <h2>Setting the Width and Height</h2>
                <p>The <code>width</code> and <code>height</code> property defines the width and height of the content area of an element.</p>
                <p>This width and height does not include paddings, borders, or margins. See the <a href="style_box-model.php">CSS box model</a>  to know how the effective width and height of an element's box is calculated.</p>
                <p>Let's try out the following example and see how it actually works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3fe8.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

div {
    width: 300px;
    height: 200px;
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
                <p>The above style rules assigns a fixed width of 300 pixels and height of 200px to the <a href="../info-html/html-div-tag.php"><code>&lt;div&gt;</code></a> element.</p>
                <p>The <code>width</code> and <code>height</code> properties can take the following values:</p>
                <ul>
                    <li><em>length</em> - specifies a width in px, em, rem, pt, cm, etc.</li>
                    <li><em>%</em> - specifies a width in percentage (%) of the width of the containing element.</li>
                    <li>auto - the browser calculates a suitable width for the element.</li>
                    <li>initial - Sets the width and height to its default value, which is <code>auto</code>.</li>
                    <li>inherit - specifies that the width should be inherited from the parent element.</li>
                </ul>
                <p>You can not specify negative values to the width and height properties.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> Typically when you create a block element, such as <code>&lt;div&gt;</code>, <code>&lt;p&gt;</code>, etc. browser automatically set their width to 100% of the available width, and height to whatever is needed to show all the content. You should avoid setting a fixed width and height unless it is necessary.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Setting Maximum Width and Height</h2>
                <p>You can use the <code>max-width</code> and <code>max-height</code> property to specify the maximum width and height of the content area. This maximum width and height does not include paddings, borders, or margins.</p>
                <p>An element cannot be wider than the <code>max-width</code> value, even if the <code>width</code> property value is set to something larger. For instance, if the <code>width</code> is set to 300px and the <code>max-width</code> is set to 200px, the actual width of the element will be 200px. Let's check out an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab84c6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

div {
    width: 300px;
    max-width: 200px;
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> If the <code>min-width</code> property is specified with a value greater than that of <code>max-width</code> property, in this case the <code>min-width</code> value will in fact be the one that's applied. </p>
                        </div>
                    </div>
                </div>
                <p>Likewise, an element that has <code>max-height</code> applied will never be taller than the value specified, even if the <code>height</code> property is set to something larger. For example, if the <code>height</code> is set to 200px and the <code>max-height</code> set to 100px, the actual height of the element will be 100px.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab501c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

div {
    height: 200px;
    max-height: 100px;
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
                            <p><strong>Read Carefully:</strong> If the <code>min-height</code> property is specified with a value greater than that of <code>max-height</code> property, in this case the <code>min-height</code> value will in fact be the one that's applied. </p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Setting Minimum Width and Height</h2>
                <p>You can use the <code>min-width</code> and <code>min-height</code> property specify the minimum width and height of the content area. This minimum width and height does not include paddings, borders, or margins.</p>
                <p>An element cannot be narrower than the <code>min-width</code> value, even if the <code>width</code> property value is set to something lesser. For example, if the <code>width</code> is set to 300px and the <code>min-width</code> is set to 400px, the actual width of the element will be 400px. Let's see how it actually works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6cf3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

div {
    width: 200px;
    min-width: 300px;
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
                            <p><strong>Read Carefully:</strong> The <code>min-width</code> property is usually used to ensure that an element has at least a minimum width even if no content is present. However the element will be allowed to grow normally if its content exceeds the minimum width set.</p>
                        </div>
                    </div>
                </div>
                <p>Similarly, an element to which <code>min-height</code> is applied will never be smaller than the value specified, even if the <code>height</code> property is set to something lesser. For example, if the <code>height</code> is set to 200px, and the <code>min-height</code> is set to 300px, the actual height of the element will be 300px.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc7df.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

div {
    height: 100px;
    min-height: 200px;
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read carefully:</strong> The <code>min-height</code> property is usually used to ensure that an element has at least a minimum height even if no content is present. However the element will be allowed to grow normally if the content exceeds the minimum height set.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Setting a Width and Height Range</h2>
                <p>The <code>min-width</code> and <code>min-height</code> properties are often used in combination with the <code>max-width</code> and <code>max-height</code> properties to produce a width and height range for an element.</p>
                <p>This can be very useful for creating flexible design. In the following example the minimum width of the <code>&lt;div&gt;</code> element would be 300px and it can stretches horizontally up to a maximum 500px.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7912-2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

div {
    min-width: 300px;
    max-width: 500px;
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
                <p>Similarly, you can define a height range for an element. In the example below the minimum height of the <code>&lt;div&gt;</code> element would be 300px and it can stretches vertically up to a maximum 500px.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0f6d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <pre class="syntax-highlighter line-numbers"><code class="language-css">div {
    min-height: 300px;
    max-height: 500px;
}</code></pre>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="style_box-model.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_padding.php" class="next-page-bottom" style="float:right">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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