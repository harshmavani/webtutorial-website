<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Selector and Declarations">
	  <meta name="author" content="webschooltoday.com">
    <title>Understanding CSS Selector and Declarations -  WebSchool Today</title>
    <meta name="description" content="Understanding CSS Selector and Declarations" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Understanding CSS Selector and Declarations</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <a href="style_get-started.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <a href="style_selectors.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <h1>CSS <span>Syntax</span></h1>
                <p class="summary">In this tutorial you will learn how to define CSS rules in your stylesheet.</p>
                <h2>Understanding CSS Syntax</h2>
                <p>A CSS stylesheet consists of a set of rules that are interpreted by the web browser and then applied to the corresponding elements such as paragraphs, headings, etc. in the document.</p>
                <p class="space">A CSS rule have two main parts, a selector and one or more declarations:</p>
                <div class="space"><img alt="CSS Selector Syntax Illustration" src="../assets/images/style_syntax.png" width="560" /></div>
                <p>The selector specifies which element or elements in the HTML page the CSS rule applies to.</p>
                <p>Whereas, the declarations within the block determines how the elements are formatted on a webpage. Each declaration consists of a property and a value separated by a colon (<code>:</code>) and ending with a semicolon (<code>;</code>), and the declaration groups are surrounded by curly braces <code>{}</code>.</p>
                <p>The property is the style attribute you want to change; they could be font, color, background, etc. Each property has a value, for example color property can have value either <code>blue</code> or <code>#0000FF</code> etc.</p>
                <div class="shadow">
                    <div class="syntax">
                        <span class="selector">h1</span> {<span class="property">color</span>:<span class="property-value">blue</span>; <span class="property">text-align</span>:<span class="property-value">center</span>;}
                    </div>
                </div>            
                <p>To make the CSS more readable, you can put one declaration on each line, like this:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe659.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
 h1 {
color: blue;
text-align: center;
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
                <p>In the example above <code>h1</code> is a selector, <code>color</code> and <code>text-align</code> are the CSS properties, and the given <code>blue</code> and <code>center</code> are the corresponding values of these properties.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> A CSS declaration always ends with a semicolon "<code>;</code>", and the declaration groups are always surrounded by the curly brackets "<code>{}</code>".</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Writing Comments in CSS</h2>
                <p>Comments are usually added with the purpose of making the source code easier to understand. It may help other developer (or you in the future when you edit the source code) to understand what you were trying to do with the CSS. Comments are significant to programmers but ignored by browsers.</p>
                <p>A CSS comment begins with <code>/*</code>, and ends with <code>*/</code>, as shown in the example below:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0be3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

h1, h2, h3, h4, h5, h6 {
    voice-family: male;
    stress: 20;
    richness: 90;
    cue-before: url("pop.au");
}
p {
    azimuth: center-left;
}
quotes {
    volume: x-soft;
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
                <p>You can also comment out part of your CSS code for debugging purpose, as shown here:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab21f6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        h1 {
    color: blue;
    text-align: center;
}
/*
p {
    font-size: 18px;
    text-transform: uppercase;
}
*/
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
                <hr />
                <h2>Case Sensitivity in CSS</h2>
                <p>CSS property names and many values are not case-sensitive. Whereas, CSS selectors are usually case-sensitive, for instance, the class selector <code>.maincontent</code> is not the same as <code>.mainContent</code>.</p>
                <p>Therefore, to be on safer side, you should assume that all components of CSS rules are case-sensitive.</p>
                <p>You will learn about the various types of CSS selectors in the <a href="style_selectors.php">next chapter</a>.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="style_get-started.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_selectors.php" class="next-page-bottom"  style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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