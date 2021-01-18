<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Link Using CSS">
	  <meta name="author" content="webschooltoday.com">
    <title>Styling Different States of a Link Using CSS - WebSchool Today</title>
    <meta name="description" content="Styling Different States of a Link Using CSS" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Styling Different States of a Link Using CSS</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_lists.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="style_text.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Links</span></h1>
                <p class="summary">In this tutorial you will learn how to style different states of a link using CSS.</p>
                <h2>Styling Links with CSS</h2>
                <p>Links or hyperlinks are an essential part of a website. It allows visitors to navigate through the site. Therefore styling the links properly is an important aspect of building a user-friendly website.</p>
                <p>See the tutorial on <a href="../des-html/html-links.php">HTML links</a> to learn more about links and how to create them.</p>
                <p>A link has four different states &mdash; <code>link</code>, <code>visited</code>, <code>active</code> and <code>hover</code>. These four states of a link can be styled differently through using the following anchor pseudo-class selectors.</p>
                <ul class="break">
                    <li><strong>a:link</strong> &mdash; define styles for normal or unvisited links.</li>
                    <li><strong>a:visited</strong> &mdash; define styles for links that the user has already visited.</li>
                    <li><strong>a:hover</strong> &mdash; define styles for a link when the user place the mouse pointer over it.</li>
                    <li><strong>a:active</strong> &mdash; define styles for links when they are being clicked.</li>
                </ul>
                <p>You can specify any CSS property you'd like e.g. <a href="../info-css/style_color-property.php"><code>color</code></a>, <a href="../info-css/style_font-property.php"><code>font</code></a>, <a href="../info-css/style_background-property.php"><code>background</code></a>, <a href="../info-css/style_border-property.php"><code>border</code></a>, etc. to each of these <a href="style_selectors.php">selectors</a> to customize the style of links, just like you do with the normal text.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0fa4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

a:link {    /* unvisited link */
    color: #ff0000;
    text-decoration: none;
    border-bottom: 1px solid;
}
a:visited {    /* visited link */
    color: #ff00ff;
}
a:hover {    /* mouse over link */
    color: #00ff00;
    border-bottom: none;
}
a:active {    /* active link */
    color: #00ffff;
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
                <p>The order in which you are setting the style for different states of links is important, because what defines last takes precedence over the style rules defined earlier.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> In general, the order of the pseudo classes should be the following &mdash; <code>:link</code>, <code>:visited</code>, <code>:hover</code>, <code>:active</code>, <code>:focus</code> in order for these to work properly.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Modifying Standard Link Styles</h2>
                <p>In all major web browsers such as Chrome, Firefox, Safari, etc. links on the web pages have underlines and uses the browser's default link colors, if you do not set the styles exclusively for them.</p>
                <p>By default, text links will appear as follow in most of the browsers:</p>
                <ul>
                    <li>An <span style="color: blue;text-decoration: underline;">unvisited link</span> as underlined blue text.</li>
                    <li>A <span style="color: purple;text-decoration: underline;">visited link</span> as underlined purple text.</li>
                    <li>An <span style="color: red;text-decoration: underline;">active link</span> as underlined red text.</li>
                </ul>
                <p>However, there is no change in the appearance of link in case of the hover state. It remains blue, purple or red depending on which state (i.e. unvisited, visited or active) they are in.</p>
                <p>Now let's see how to customize the links by overriding its default styling.</p>
                <h3>Setting Custom Color of Links</h3>
                <p>Simply use the CSS <code>color</code> property to define the color of your choice for different state of a link. But when choosing colors make sure that user can clearly differentiate between normal text and links.</p>
                <p>Let's try out the following example to understand how it basically works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe38b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

a:link {
    color: #1ebba3;
}
a:visited {
    color: #ff00f4;
}
a:hover {
    color: #a766ff;
}
a:active {
    color: #ff9800;
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
                <h3>Removing the Default Underline from Links</h3>
                <p>If you don't like the default underline on links, you can simply use the CSS <a href="../info-css/style_text-decoration-property.php"><code>text-decoration</code></a> property to get rid of it. Alternatively, you can apply other styling on links like background color, bottom border, bold font, etc. to make it stand out from the normal text a little better.</p>
                <p>The following example shows how to remove or set underline for different states of a link.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab07ce.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

a:link, a:visited {
    text-decoration: none; 
}
a:hover, a:active {
    text-decoration: underline;
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
                <hr />
                <h2>Making Text Links Look Like Buttons</h2>
                <p>You can also make your ordinary text links look like button using CSS. To do this we need to utilize few more CSS properties such as <code>background-color</code>, <code>border</code>, <code>display</code>, <code>padding</code>, etc. You will learn about these properties in detail in upcoming chapters.</p>
                <p>Let's check out the following example and see how it really works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc2ae.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                    	<textarea id="code4">

a:link, a:visited {
    color: white;    
    background-color: #1ebba3;    
    display: inline-block;
    padding: 10px 20px;
    border: 2px solid #099983;
    text-decoration: none;
    text-align: center;
    font: 14px Arial, sans-serif;  
}
a:hover, a:active {
    background-color: #9c6ae1;
    border-color: #7443b6;
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
                <div class="bottom-link clearfix">
                    <a href="style_text.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_lists.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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