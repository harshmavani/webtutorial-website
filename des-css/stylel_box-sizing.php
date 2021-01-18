<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Box Sizing">
      <meta name="author" content="webschooltoday.com">
      <meta name="description" content="Box Sizing" />

    <title>CSS3 Box Sizing - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Box Sizing</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<a href="stylel_multi-column-layouts.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <a href="stylel_flexible-box-layouts.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <h1>CSS3 <span>Box Sizing</span></h1>
                <p class="summary">With CSS3 box sizing feature you can control element's effective width.</p>
				<h2>Redefining Box Width with Box-Sizing</h2>
				<p>By default, the actual width or height of an element's box visible/rendered on a web page depends on its <a href="../info-css/style_width-property.php"><code>width</code></a> or <a href="../info-css/style_height-property.php"><code>height</code></a>, <a href="../info-css/style_padding-property.php"><code>padding</code></a> and <a href="../info-css/style_border-property.php"><code>border</code></a> property. For example, if you apply some <code>padding</code> and <code>border</code> on a <a href="../info-html/html-div-tag.php"><code>&lt;div&gt;</code></a> element with 100% <code>width</code> the horizontal scrollbar will appear, as you can see in the example below.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4864." target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
                        .box {
    width: 100%;
    padding: 20px;
    border: 5px solid #f08080;
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
                <!--End:Code box-->
                <p>This is very common problem that web designers are facing for a long time. But, CSS3 introduces the <code>box-sizing</code> property to solve this problem and make the CSS layouts much more simple and intuitive. The <code>box-sizing</code> property alter the default CSS box model in such a way that, any <code>padding</code> or <code>border</code> specified on the element is laid out and drawn inside of the content area, so that the rendered width and height of the element is equal to the specified CSS <code>width</code> and <code>height</code> properties.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd8f6.php?topic=css3&amp;file=effect-of-box-sizing-property-on-an-element" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
                        .box {
    width: 100%;
    padding: 20px;
    border: 5px solid #f08080;
    box-sizing: border-box;
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
                <!--End:Code box-->
				<p>If you see the output of this example, you will find the scroll bar has disappeared.</p>
				<!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> When using the CSS <code>box-sizing</code> property the resulting width and height of the content area are calculated by subtracting the <code>border</code> and <code>padding</code> widths of the respective sides from the specified <code>width</code> and <code>height</code> properties.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<hr />
				<h2>Creating Layouts with Box-Sizing</h2>
				<p>With the CSS <code>box-sizing</code> property creating the multiple columns layout using percentages becomes very simple. Now you don't have to worry about the final size of the element's box while adding the padding or border on them.</p>
				<p>The following example will create a two column layout where each column has equal width and are placed side-by-side using the <a href="../info-css/style_float-property.php"><code>float</code></a> property.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7f5b.php?topic=css3&amp;file=two-equal-column-layout-placed-alongside" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">
                        .box {
    width: 50%;
    padding: 20px;
    background: #f2f2f2;
    float: left;
    box-sizing: border-box;
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
                <!--End:Code box-->
				<p>Similarly, you create more complex layouts using this simple technique.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8fee.php?topic=css3&amp;file=three-equal-column-layout-placed-next-to-each-other" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">
                        .box {
    width: 30%;
    padding: 20px;
    margin-left: 5%;
    background: #f2f2f2;
    float: left;
    box-sizing: border-box;
}
.box:first-child {
    margin-left: 0;
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
                <!--End:Code box-->
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="stylel_multi-column-layouts.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="stylel_flexible-box-layouts.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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