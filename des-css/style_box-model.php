<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,CSS Box Modal">
	  <meta name="author" content="webschooltoday.com">
    <title>Understanding CSS Box Modal - WebSchool Today</title>
    <meta name="description" content="Understanding CSS Box Modal" />
	 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Understanding CSS Box Modal</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_dimension.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="style_tables.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Box Model</span></h1>
                <p class="summary">In this tutorial you will learn how elements are visually laid out on the web pages.</p>
                <h2>What is Box Model?</h2>
                <p>Every element that can be displayed on a web page is comprised of one or more rectangular boxes. CSS box model typically describes how these rectangular boxes are laid out on a web page. These boxes can have different properties and can interact with each other in different ways, but every box has a <em><strong>content area</strong></em> and optional surrounding <em><strong>padding</strong></em>, <em><strong>border</strong></em>, and <em><strong>margin areas</strong></em>.</p>
                <p>The following diagram demonstrates how the width, height, padding, border, and margin CSS properties determines how much space an element can take on a web page.</p>
                <div class="box-model space">
                    <img src="../assets/images/style_box-model.png" alt="CSS Box Model" />
                </div>
                <p>Padding is the transparent space between the element's content and its border (or edge of the box, if it has no border), whereas margin is the transparent space around the border.</p>
                <p>Also, if an element has the <a href="style_background.php">background color</a> it will be visible through its padding area. The margin area is always remain transparent, it is not affected by the element's background color, however, it causes the background color of the parent element to be seen through it.</p>
                <hr />
                <h2>Width and Height of the Elements</h2>
                <p>Usually when you set the width and height of an element using the CSS <a href="../info-css/style_width-property.php"><code>width</code></a> and <a href="../info-css/style_width-property.php"><code>height</code></a> properties, in reality you are only setting the width and height of the content area of that element. The actual width and height of the element's box depends on the several factors.</p>
                <p class="break">The actual space that an element's box might take on a web page is calculated like this:</p>
                <div class="shadow break">
                    <table class="data">
                        <tr>
                            <th style="width: 100px;">Box Size</th>
                            <th>CSS Properties</th>
                        </tr>
                        <tr>
                            <td>Total&nbsp;Width</td>
                            <td><code class="plain">width + padding-left + padding-right + border-left + border-right + margin-left + margin-right</code></td>
                        </tr>
                        <tr>
                            <td>Total&nbsp;Height</td>
                            <td><code class="plain">height + padding-top + padding-bottom + border-top + border-bottom  + margin-top + margin-bottom</code></td>
                        </tr>
                    </table>
                </div>
                <p>You will learn about each of these CSS properties in detail in upcoming chapters.</p>
                <p>Now let's try out the following example to understand how the box model actually works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba5b0.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

div {
    width: 300px;
    height: 200px;
    padding: 15px; /* set padding for all four sides */
    border: 10px solid black; /* set border for all four sides */
    margin: 20px auto; /* set top and bottom margin to 20 pixels, and left and right margin to auto */
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> In CSS box model; the content area of an element's box is the area where its content, e.g., text, image, video, etc. appears. It may also contain descendant elements boxes.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="style_tables.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_dimension.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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