<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Adding Multiple Backgrounds with CSS3">
	  <meta name="author" content="webschooltoday.com">
    <title>Adding Multiple Backgrounds with CSS3 - WebSchool Today</title>
	<meta name="description" content="Adding Multiple Backgrounds with CSS3" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Adding Multiple Backgrounds with CSS3</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<a href="stylel_color.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <a href="stylel_gradients.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <h1>CSS3 <span>Background</span></h1>
                <p class="summary">With CSS3, you can apply multiple backgrounds to elements.</p>
				<h2>Using CSS3 Backgrounds</h2>
				<p>The CSS3 provides several new properties to manipulate the background of an element like background clipping, multiple backgrounds, and the option to adjust the background size.</p>
				<p class="space">The following section will describe you all the new background features of CSS3, for other background related properties please check out the <a href="style_background.php">CSS background</a> tutorial.</p>
				<h2>CSS3 <code>background-size</code> Property</h2>
				<p>The <code>background-size</code> property can be used to specify the size of the background images.&nbsp; Prior to CSS3, the size of the background images was determined by the actual size of the images. The background image size can be specified using the pixels or percentage values as well as the keywords <code>auto</code>, <code>contain</code>, and <code>cover</code>. Negative values are not allowed.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3069.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
                        .box {
    width: 250px;
    height: 150px;
    background: url("images/sky.jpg") no-repeat;
    background-size: contain;
    border: 6px solid #333;
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
				<!--Tip Box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"  style="background-color:#fad28c"
>
							<p><strong>Important:</strong> The <code>background-size</code> property is typically used to create full size background images that scale according to the size of viewport or witdh of the browser.</p>
						</div>
					</div>
				</div>
				<!--End:Tip Box-->
				<hr />
				<h2>CSS3 <code>background-clip</code> Property</h2>
				<p>The <code>background-clip</code> property can be used to specify whether an element's background extends into the border or not. The <code>background-clip</code> property can take the three values: <code>border-box</code>, <code>padding-box</code>, <code>content-box</code>.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabdcce.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
                        .box {
    width: 250px;
    height: 150px;
    padding: 10px;
    border: 6px dashed #333;
    background: orange;
    background-clip: content-box;
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
				<p>See the tutorial on <a href="style_box-model.php">CSS box model</a> to learn more about element's boxes.</p>
				<hr />
				<h2>CSS3 <code>background-origin</code> Property</h2>
				<p>The <code>background-origin</code> property can be used to specify the positioning area of the background images. It can take the same values as <code>background-clip</code> property: <code>border-box</code>, <code>padding-box</code>, <code>content-box</code>.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9f1a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">
                        .box {
    width: 250px;
    height: 150px;
    padding: 10px;
    border: 6px dashed #333;
    background: url("images/sky.jpg") no-repeat;
    background-size: contain;
    background-origin: content-box;
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
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> The <code>background-origin</code> property is ignored if the value of <a href="../info-css/style_background-attachment-property.php"><code>background-attachment</code></a> property is specified as <code>'fixed'</code>.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2 id="stylel_multiple-backgrounds">CSS3 Multiple Backgrounds</h2>
				<p>CSS3 gives you ability to add multiple backgrounds to a single element. The backgrounds are layered on the top of one another. The number of layers is determined by the number of comma-separated values in the <a href="../info-css/style_background-image-property.php"><code>background-image</code></a> or <a href="../info-css/style_background-property.php"><code>background</code></a> shorthand property.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabdf50.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">
                        .box {
    width: 100%;
    height: 500px;
    background: url("images/birds.png") no-repeat center,  url("images/clouds.png")  no-repeat center, lightblue;
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
				<p>The first value in the comma-separated list of backgrounds i.e. the <a href="../info-css/style_background-image-property.php"><code>background-image</code></a> 'birds.png' will appear on the top and the last value i.e. the 'lightblue' color will appear at the bottom. Only the last background can include a <a href="../info-css/style_background-color-property.php"><code>background-color</code></a>.</p>
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="stylel_color.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="stylel_gradients.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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