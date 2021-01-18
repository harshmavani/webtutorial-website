<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Floating Elements with CSS">
	  <meta name="author" content="webschooltoday.com">
    <title>Floating Elements with CSS - WebSchool Today</title>
    <meta name="description" content="The float property is used to place an element to the left or right side of its container, but it only works for the elements that are not absolutely positioned." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Floating Elements with CSS</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_alignment.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="style_layers.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Float</span></h1>
                <p class="summary">The CSS float property specifies whether a box should float or not.</p>
                <h2>Floating Elements with CSS</h2>
                <p>You can float elements to the left or right, but only applies to the elements that generate boxes that are not <a href="style_position.php#absolute-positioning">absolutely positioned</a>. Any element that follows the floated element will flow around the floated element on the other side.</p>
                <p class="break">The <code>float</code> property may have one of the three values:</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>left</code></td>
                            <td>The element floats on the left side of its containing block.</td>
                        </tr>
                        <tr>
                            <td><code>right</code></td>
                            <td>The element floats on the right side of its containing block.</td>
                        </tr>
                        <tr>
                            <td><code>none</code></td>
                            <td>Removes the float property from an element.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>How Elements Float</h2>
                <p>A floated element is taken out of the normal flow and shifted to the left or right as far as possible in the space available of the containing element.</p>
                <p>Other elements normally flow around the floated items, unless they are prevented from doing so by their <a href="../info-css/style_clear-property.php"><code>clear</code></a> property. Elements are floated horizontally, which means that an element can only be floated left or right, not up or down.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc6a1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

img {
    float: left;
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
                <p>If several floating elements are placed adjacently, they will float next to each other if there is horizontal room. If there is not enough room for the float, it is shifted downward until either it fits or there are no more floating elements present.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab145e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

.thumbnail {
    float: left;
    width: 125px;
    height: 125px;
    margin: 10px;
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
                <hr />
                <h2>Turning off Float Using Clear Property</h2>
                <p>Elements that comes after the floating element will flow around it. The <code>clear</code> property specifies which sides of an element's box other floating elements are not allowed.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc284.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

.clear {
    clear: left;
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
                            <p><strong>Read Carefully:</strong> This property can clear an element only from floated boxes within the same block. It doesn't clear the element from floated child boxes within the element itself. To learn more about clearing float see tutorial on <a href="style_alignment.php">CSS Alignment</a>.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="style_layers.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_alignment.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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