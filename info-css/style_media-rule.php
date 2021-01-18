<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS @media Rule">
	  <meta name="keywords" content="css,css3,CSS @media Rule">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS @media Rule</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS @media Rule</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="centercolumn">
            <!--Text Content-->
            <div class="content">
                <div class="leaderboard">
                    
</div>
            <h1>CSS <code>@media</code> rule</h1>
            <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="stylel_keyframes-rule.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_page-rule.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
	    	<h2>Description</h2>
	    	<p>The <code>@media</code> rule can be used to define style rules for multiple media types in a single style sheet. It must be followed by a comma-separated list of media types and a block that contains rules.</p>
	    	<hr />
	    	<h2>Syntax</h2>
            <p>The syntax of this at-rule is given with:</p>
            <div class="shadow">
                <div class="syntax">
       				<table>
                        <tr>
                            <td>
                                <span class="at-rule">@media</span> <i>media type</i>,... {<br />
                                &nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">/* media-specific rules */</span><br />
                                }
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <p>The example below shows the <code>@media</code> property in action.</p>
	    	<div class="example">
                <div class="my_codeb">
                    <div class="my_codeb-title"><h4>Example</h4><a href="../codelab585d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                    <textarea id="code1">

                    @media screen{
    body {
        color: #32cd32;
        font-family: Arial, sans-serif;
        font-size: 14px;
    }
}
@media print {
    body {
        color: #ff6347;
        font-family: Times, serif;
        font-size: 12pt;
    }
}
@media screen, print {
    body {
        line-height: 1.2;
    }
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
                        <p><strong>Read Carefully:</strong> Style rules outside of <code>@media</code> rules apply to all media types that the style sheet applies to. At-rules inside <code>@media</code> are invalid in CSS2.1</p>
                    </div>
                </div>
            </div>
            <hr />
	    	<h2>Browser Compatibility</h2>
            <p>The <code>@media</code> rule is supported in all major modern browsers.</p>
            <div class="shadow">
                <div class="support">
                    <table>
                        <tr>
                            <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                            <td>
                                <h2>Basic Support&mdash;</h2>
                                <ul>
                                    <li>Firefox <span>1+</span></li>
                                    <li>Google Chrome <span>1+</span></li>
                                    <li>Internet Explorer <span>9+</span></li>
                                    <li>Apple Safari <span>1.3+</span></li>
                                    <li>Opera <span>9.2+</span></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <hr />
	    	<h2>Further Reading</h2>
            <p>See tutorial on: <a href="../des-css/style_media-types.php">CSS Media Types</a>.</p>
          	<!--Bottom Navigation-->
            <div class="bottom-link clearfix">
                <a href="stylel_keyframes-rule.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                <a href="style_page-rule.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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