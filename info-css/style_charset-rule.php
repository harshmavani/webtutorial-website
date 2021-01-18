<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS @charset Rule">
	  <meta name="keywords" content="css,css3,CSS @charset Rule">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS @charset Rule</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS @charset Rule</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            <h1>CSS <code>@charset</code> rule</h1>
            <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_z-index-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_font-face-rule.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
	    	<h2>Description</h2>
	    	<p>A single <code>@charset</code> rule can be used in an external sheet to specify the character encoding of the style rules and values.</p>
            <p>The <code>@charset</code> rule should never be used in an <a href="../des-html/html-styles.php#embedded-style-sheet">embedded style sheet</a>, as there are other ways to define character encoding in HTML such as <code><a href="../info-html/html-meta-tag.php">&lt;meta&gt;</a></code> tag.</p>
			<hr />
	    	<h2>Syntax</h2>
            <p>The syntax of this at-rule is given with:</p>
            <div class="shadow">
                <div class="syntax">
       				<table>
                        <tr>
                            <td>
                            	<span class="at-rule">@charset</span> "<i>charset-name</i>";
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <p>The example below shows the <code>@charset</code> property in action.</p>
	    	<div class="example">
                <div class="my_codeb">
                    <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9b3d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                    <textarea id="code1">

                    @charset "UTF-8";
/* CSS Document */
body {
    background: yellow;
}
h1 {
    color: #ff0000;
    font-size: 24px;
}
p {
    color: rgb(0,255,0);
    font-size: 14px;
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
			<!--Note box-->
            <div class="color-box">
                <div class="shadow">
                    <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                    <div class="note-box"  style="background-color:#ff8585">
                        <p><strong>Read Carefully:</strong> Only one <code>@charset</code> rule may appear in an external style sheet, and it must appear at the top of the document. It must not be preceded by any characters, not even comments.</p>
                    </div>
                </div>
            </div>
            <!--End:Note box-->
			<hr />
	    	<h2>Browser Compatibility</h2>
            <p>The <code>@charset</code> rule is supported in all major modern browsers.</p>
            <div class="shadow">
                <div class="support">
                    <table>
                        <tr>
                            <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                            <td>
                                <h2>Basic Support&mdash;</h2>
                                <ul>
                                    <li>Firefox <span>1.5+</span></li>
                                    <li>Google Chrome <span>2+</span></li>
                                    <li>Internet Explorer <span>5.5+</span></li>
                                    <li>Apple Safari <span>4+</span></li>
                                    <li>Opera <span>9+</span></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <hr />
	    	<h2>Further Reading</h2>
            <p>See tutorial on: <a href="../des-html/html-meta.php">HTML Meta</a>.</p>
          	<!--Bottom Navigation-->
            <div class="bottom-link clearfix">
                <a href="style_z-index-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                <a href="style_font-face-rule.php" class="next-page-bottom">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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