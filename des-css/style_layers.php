<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,z-index">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS Layers - Overlapping Elements with Z-Index</title>
    <meta name="description" content="CSS Layers - Overlapping Elements with Z-Index" />
	 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS Layers - Overlapping Elements with Z-Index</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_float.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="style_position.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Layers</span></h1>
                <p class="summary">The CSS <code>z-index</code> property can be used in conjugation with the position property to create an effect of layers like Photoshop.</p>
                <h2>Stacking Elements in Layers Using z-index Property</h2>
                <p>Usually HTML pages are considered two-dimensional, because text, images and other elements are arranged on the page without overlapping. However, in addition to their horizontal and vertical positions, boxes can be stacked along the z-axis as well i.e. one on top of the other by using the CSS <code>z-index</code> property. This property specifies the stack level of a box whose <a href="style_position.php"><code>position</code></a> value is one of <code>absolute</code>, <code>fixed</code>, or <code>relative</code>.</p>
                <p>The z-axis position of each layer is expressed as an integer representing the stacking order for rendering. An element with a larger <code>z-index</code> overlaps an element with a lower one.</p>
                <p>A <code>z-index</code> property can help you to create more complex webpage layouts. Following is the example which shows how to create layers in CSS.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6332.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

.box {
    position: absolute;
    left: 10px;
    top: 20px;
    z-index: 2;
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
                <div class="bottom-link clearfix">
                    <a href="style_position.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_float.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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