<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Box and Text Shadow Effects,box-shadow">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create CSS3 Box and Text Shadow Effects - WebSchool Today</title>
	<meta name="description" content="How to Create CSS3 Box and Text Shadow Effects" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Create CSS3 Box and Text Shadow Effects</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<a href="stylel_gradients.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <a href="stylel_2d-transforms.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <h1>CSS3 <span>Drop Shadows</span></h1>
                <p class="summary">With CSS3, you can apply drop shadow to an element.</p>
				<h2>Using CSS3 Drop Shadows</h2>
				<p>The CSS3 gives you ability to add drop shadow effects to the elements like you do in Photoshop without using any images. Prior to CSS3, sliced images are used for creating the shadows around the elements that was quite annoying.</p>
				<p class="space">The following section will describe you how to apply the shadow on text and elements.</p>
				<h2>CSS3 <code>box-shadow</code> Property</h2>
				<p>The <code>box-shadow</code> property can be used to add shadow to the element's boxes. You can even apply more than one shadow effects using a comma-separated list of shadows. The basic syntax of creating a box shadow can be given with:</p>
				<div class="shadow">
					<div class="syntax"><span class="keyword">box-shadow:</span> offset-x offset-y blur-radius color;</div>
				</div>
				<p>The components of the <code>box-shadow</code> property have the following meaning:</p>
				<ul>
					<li><strong>offset-x</strong> &mdash; Sets the horizontal offset of the shadow.</li>
					<li><strong>offset-y</strong> &mdash; Sets the vertical offset of the shadow.</li>
					<li><strong>blur-radius</strong> &mdash; Sets the blur radius. The larger the value, the bigger the blur and more the shadow's edge will be blurred. Negative values are not allowed.</li>
					<li><strong>color</strong> &mdash; Sets the color of the shadow. If the color value is omitted or not specified, it takes the value of the <a href="style_color.php">color</a> property.</li>
				</ul>
				<p>See the CSS3 <code>box-shadow</code> property to learn more about the other possible values.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab59cc.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
                        .box{
    width: 200px;
    height: 150px;
    background: #ccc;
    box-shadow: 5px 5px 10px #999;
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
				<!--Note box-->
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully</strong> When adding the <code>box-shadow</code>, if the value for the blur-radius component is not specified, or set to zero (0), the edges of the shadow will be sharp.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<p>Similarly, you can add the multiple box shadow using a comma-separated list:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabfc59.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
                        .box{
    width: 200px;
    height: 150px;
    background: #000;
    box-shadow: 5px 5px 10px red, 10px 10px 20px yellow;
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
				<hr />
				<h2 id="text-shadow">CSS3 <code>text-shadow</code> Property</h2>
				<p>You can use the <code>text-shadow</code> property to apply the shadow effects on text. You can also apply multiple shadows to text using the same notation as <code>box-shadow</code>.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab231f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        h1 {
    text-shadow: 5px 5px 10px #666;
}
h2 {
    text-shadow: 5px 5px 10px red, 10px 10px 20px yellow;
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
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="stylel_gradients.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="stylel_2d-transforms.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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