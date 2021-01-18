<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS @font-face Rule">
	  <meta name="keywords" content="css,css3,CSS @font-face Rule">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS @font-face Rule</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS @font-face Rule</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            <h1>CSS <code>@font-face</code> rule</h1>
            <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_charset-rule.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_import-rule.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
	    	<h2>Description</h2>
	    	<p>The <code>@font-face</code> rule is used to associate a font name to be used in a style sheet with some downloadable font. A <code><a href="style_font-family-property.php">font-family</a></code> descriptor is used within the rule to name the font and a <code>src</code> descriptor is associated with an external font name.</p>	
	    	<hr />
	    	<h2>Syntax</h2>
            <p>The syntax of this at-rule is given with:</p>
            <div class="shadow">
                <div class="syntax">
       				<table>
                        <tr>
                            <td><span class="property">@font-face</span>:&nbsp;</td>
                            <td><i>font-description</i></td>
                        </tr>
                    </table>
                </div>
            </div>
	    	<p>The <code>@font-face</code> rule contains one or more property declarations, like those in a regular CSS, which are called font descriptors. You can specify up to 24 different properties, however explaining them all is beyond the scope of this reference &mdash; To learn more about please visit <a href="http://www.w3.org/TR/stylel_fonts/#font-face-rule" rel="nofollow" target="_blank">W3C CSS Fonts Module</a> page.</p>
	    	<p>The general form of an <code>@font-face</code> at-rule is:</p>
	    	<div class="sky-box">
@font-face {
      font-family: fontname;
   src: url(fontfile path);
}
	    	</div>
	    	<p>Later, the font can be used as a name within properties like <code><a href="style_font-family-property.php">font-family</a></code> and <code><a href="style_font-property.php">font</a></code>, though you should specify other font names as a fallback in case downloadable font is not supported or the font fails to load for some reason.</p>
            <p>The example below shows the <code>@font-face</code> property in action.</p>
	    	<div class="example">
                <div class="my_codeb">
                    <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2f64.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                    <textarea id="code1">

                    @font-face {
    font-family: "OpenSans";
    src: url("../fonts/OpenSans-Regular.eot");
    src: url("../fonts/OpenSans-Regular.ttf") format("truetype");
}
body {
    font-family: "OpenSans", Arial, sans-serif;
    font-size: 1.2em;
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
                        <p><strong>Read Carefully:</strong> By using the @font-face rule you don't need to depend on the limited number of fonts users have installed on their computers.</p>
                    </div>
                </div>
            </div>
			<p>It is also possible to set selection of a particular downloadable font when a particular font characteristic like bold or italic is set, by adding the corresponding rule to the <code>@font-face</code>.</p>
	    	<div class="example">
                <div class="my_codeb">
                    <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7930.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                    <textarea id="code2">

                    @font-face {
    font-family: "OpenSans";
    src: url("../fonts/OpenSans-Regular.eot");
    src: url("../fonts/OpenSans-Regular.ttf") format("truetype");
}
@font-face {
    font-family: "OpenSansBold";
    src: url("../fonts/OpenSans-Bold.eot");
    src: url("../fonts/OpenSans-Bold.ttf") format("truetype");
}
h1 {
    font-family: "OpenSansBold", Arial, sans-serif;    /* Specify the OpenSans bold font */
}
p {
    font-family: "OpenSans", Arial, sans-serif;
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
	    	<h2>Parameters</h2>
            <p>Parameters have the following meanings:</p>
            <div class="shadow space">
                <table class="data">
                    <tr>
						<th style="width: 90px;">Parameter</th>
                    	<th style="width: 90px;">Value</th>
                    	<th>Description</th>
                    </tr>
                    <tr>
                        <td class="section" colspan="3"><strong>Required</strong> &mdash; The following parameters are required.</td>
                    </tr>
                    <tr>
						<td><code>font-family</code></td>
                    	<td><code><i>font-family</i></code></td>
                    	<td>Defines the font name that will be used as a <code><a href="style_font-family-property.php">font-family</a></code> value for font properties.</td>
                    </tr>
		    		<tr>
						<td><code>src</code></td>
                    	<td><code><i>url</i></code></td>
                    	<td>Specifies the location of a font file to use.</td>
                    </tr>
                    <tr>
                        <td class="section" colspan="3"><strong>Optional</strong> &mdash; The following parameters are optional.</td>
                    </tr>
		    		<tr>
						<td><code>font-style</code></td>
                    	<td><code><i>font-style</i></code></td>
                    	<td>A valid <code><a href="style_font-style-property.php">font-style</a></code> property value.</td>
                    </tr>
		    		<tr>
						<td><code>font-weight</code></td>
                    	<td><code><i>font-weight</i></code></td>
                    	<td>A valid <code><a href="style_font-weight-property.php">font-weight</a></code> property value (except for the relative values, <code>bolder</code> and <code>lighter</code>).</td>
                    </tr>
                </table>
            </div>
	    	<hr />
	    	<h2>Browser Compatibility</h2>
            <p>The <code>@font-face</code> rule is supported in all major modern browsers.</p>
            <div class="shadow">
                <div class="support">
                    <table>
                        <tr>
                            <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                            <td>
                                <h2>Basic Support&mdash;</h2>
                                <ul>
                                    <li>Firefox <span>3.5+</span></li>
                                    <li>Google Chrome <span>4+</span></li>
                                    <li>Internet Explorer <span>4+</span></li>
                                    <li>Apple Safari <span>3.1+</span></li>
                                    <li>Opera <span>10+</span></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
	    	<div class="color-box">
                <div class="shadow">
                    <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                    <div class="note-box"  style="background-color:#ff8585">
                        <p><strong>Read Carefully:</strong> The support for particular font technologies varies significantly across the browsers. Internet Explorer supports <code>.eot</code> and <code>.wof</code> type fonts, while Firefox, Chrome, Safari, and Opera supports <code>.woff</code>,  <code>.ttf</code> and <code>.otf</code> type fonts.</p>
                    </div>
                </div>
            </div>
            <hr />
	    	<h2>Further Reading</h2>
            <p>See tutorial on: <a href="../des-css/style_fonts.php">CSS Fonts</a>.</p>
          	<!--Bottom Navigation-->
            <div class="bottom-link clearfix">
                <a href="style_charset-rule.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                <a href="style_import-rule.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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