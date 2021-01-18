<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS @import Rule">
	  <meta name="keywords" content="css,css3,CSS @import Rule">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS @import Rule</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS @import Rule</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            <h1>CSS <code>@import</code> rule</h1>
            <p class="topic">Topic: <a href="stylel_properties.html">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_font-face-rule.html"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_keyframes-rule.html"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
	    	<h2>Description</h2>
	    	<p>The <code>@import</code> rule allows to import style rules from other style sheets. The <code>@import</code> keyword must be followed by the URL of the style sheet to include, and a semicolon. A string is also allowed in place of the URL; it will be interpreted as if it had <code>url(...)</code> around it.</p>
			<hr />
	    	<h2>Syntax</h2>
            <p>The syntax of this at-rule is given with:</p>
            <div class="shadow">
                <div class="syntax">
       				<table>
                        <tr>
                            <td>
                        		<span class="at-rule">@import</span> <i>url</i> [media type,...];
                        	</td>
                        </tr>
                    </table>
                </div>
            </div>
            <p>The example below shows the <code>@import</code> property in action.</p>
	    	<div class="example">
                <div class="my_codeb">
                    <div class="my_codeb-title"><h4>Example</h4><a href="../codelab260c.html?topic=css&amp;file=import-rule-01" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                    <textarea id="code1">

                    @import url("css/layout.css");
@import url("css/color.css");
body {
    color:blue;
    font-size:14px;
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
		<p>You can also specify media-dependent <code>@import</code> rules (i.e. media types to which the imported style sheet applies) &mdash; Simply specify the comma-separated <a href="../des-css/style_media-types.html">media types</a> or, <a href="../des-css/style_media-types.html#media-query">media queries</a> after the URL.</p>
		<div class="example">
                <div class="my_codeb">
                    <div class="my_codeb-title"><h4>Example</h4><a href="../codelabcc80.html?topic=css&amp;file=import-rule-02" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                    <textarea id="code2">

                    @import url("css/default.css");
@import url("css/print-style.css") print;
body {
    color: red;
    font-size: 1em;
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
	    	<h2>Browser Compatibility</h2>
            <p>The <code>@import</code> rule is supported in all major modern browsers.</p>
            <div class="shadow">
                <div class="support">
                    <table>
                        <tr>
                            <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                            <td>
                                <h2>Basic Support&mdash;</h2>
                                <ul>
                                    <li>Firefox <span>1+</span></li>
                                    <li>Google Chrome <span>2+</span></li>
                                    <li>Internet Explorer <span>5.5+</span></li>
                                    <li>Apple Safari <span>1.3+</span></li>
                                    <li>Opera <span>6+</span></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <hr />
	    	<h2>Further Reading</h2>
            <p>See tutorial on: <a href="../des-css/style_media-types.html">CSS Media Types</a>.</p>
          	<!--Bottom Navigation-->
            <div class="bottom-link clearfix">
                <a href="style_font-face-rule.html" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                <a href="stylel_keyframes-rule.html" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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