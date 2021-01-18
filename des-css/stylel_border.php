<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="Bootstrap,Bootstrap3,Rounded Corners and Border Images">
	  <meta name="author" content="webschooltoday.com">
    <title>Creating CSS3 Rounded Corners and Border Images - WebSchool Today</title>
	<meta name="description" content="Creating CSS3 Rounded Corners and Border Images" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Creating CSS3 Rounded Corners and Border Images</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<a href="style_validation.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <a href="stylel_color.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <h1>CSS3 <span>Border</span></h1>
                <p class="summary">With CSS3, you can apply images to an element's borders.</p>
				<h2>Using CSS3 Borders</h2>
				<p>The CSS3 provides two new properties for styling the borders of an element in a more elegant way &mdash; the <code>border-image</code> property for adding the images to borders, and the <code>border-radius</code> property for making the rounded corners without using any images.</p>
				<p class="space">The following section will describe you these new border properties of CSS3, for other border related properties please check out the <a href="style_border.php">CSS border</a> tutorial.</p>
				<h2>Creating CSS3 Rounded Corners</h2>
				<p>The <code>border-radius</code> property can be used to create rounded corners. This property typically defines the shape of the corner of the outer border edge. Prior to CSS3, sliced images are used for creating the rounded corners that was rather bothersome.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9ec3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
                        .box {
    width: 300px;
    height: 150px;
    background: #ffb6c1;
    border: 2px solid #f08080;
    border-radius: 20px;
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
				<hr />
				<h2>Adding CSS3 Border Images</h2>
				<p>The <code>border-image</code> property allows you to specify an image to act as an element's border.<br /> The design of the border is created from the sides and corners of the image specified in <code>border-image</code> source URL. The border image may be sliced, repeated, scaled and stretched in various ways to fit the size of the border image area.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9e46.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
                        .box {
    width: 300px;
    height: 150px;
    border: 15px solid transparent;
    -webkit-border-image: url("border.png") 30 30 round; /* Safari 3.1-5 */
    -o-border-image: url("border.png") 30 30 round; /* Opera 11-12.1 */
    border-image: url("border.png") 30 30 round;
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
				<!--Tip Box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"  style="background-color:#fad28c"
>
							<p><strong>Important:</strong> The round option is a variation of the repeat option that distributes the image tiles in such a way that the ends are nicely connected.</p>
						</div>
					</div>
				</div>
				<!--End:Tip Box-->
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="style_validation.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="stylel_color.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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