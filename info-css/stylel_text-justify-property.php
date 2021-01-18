<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 text-justify Property">
	  <meta name="keywords" content="css,css3,CSS3 text-justify Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 text-justify Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 text-justify Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>text-justify</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_text-indent-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_text-overflow-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>text-justify</code> CSS property specifies the justification method to use when the <a href="style_text-align-property.php">text-align</a> property is set to '<code>justify</code>'.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>auto</code></td>
                        </tr>
                        <tr>
                            <th>Applies to:</th>
                            <td>Block and optionally inline elements</td>
                        </tr>
                        <tr>
                            <th>Inherited:</th>
                            <td>Yes</td>
                        </tr>
						<tr>
							<th>Animatable:</th>
							<td>No. <a href="style_animatable-properties.php"><i>See</i> <em>animatable properties</em></a>.</td>
						</tr>
                        <tr>
                            <th>Version:</th>
                            <td><span class="stylel_badge"></span> New in CSS3</td>
                        </tr>
                    </table>
                </div>	
                <hr />
                <h2>Syntax</h2>
                <p>The syntax of the property is given with:</p>
                <div class="shadow">
                    <div class="syntax">
                        <table>
                            <tr>
                                <td><span class="property">width</span>:&nbsp;</td>
                                <td><span class="keyword">auto</span> | <span class="keyword">none</span> | <span class="keyword">inter-word</span> | <span class="keyword">distribute</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>text-justify</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab15cd.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
		
        p {
            text-align: justify;
            text-justify: inter-word;
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
                <hr />
                <h2>Property Values</h2>
                <p>The following table describes the values of this property.</p>
                <div class="shadow space">
                    <table class="data">
                        <tr>
                            <th style="width:90px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>auto</code></td>
                            <td>The browser determines the justification algorithm to follow. This is default value.</td>
                        </tr>
                        <tr>
                            <td><code>none</code></td>
                            <td>The justification is disabled.</td>
                        </tr>
                        <tr>
                            <td><code>inter-word</code></td>
                            <td>Increases or decreases the spacing between words.</td>
                        </tr>
                        <tr>
                            <td><code>distribute</code></td>
                            <td>Increases or decreases the spacing between letters and words.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>text-justify</code> property.</td>
                        </tr>
                    </table>
                </div>	
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>text-justify</code> property is not supported in most of the browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span class="red" title="Not Supported">&times;</span></li>
                                        <li>Google Chrome <span class="red" title="Not Supported">&times;</span></li>
                                        <li>Internet Explorer <span>5.5+</span></li>
                                        <li>Apple Safari <span class="red" title="Not Supported">&times;</span></li>
                                        <li>Opera <span class="red" title="Not Supported">&times;</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                            <p><strong>Warning:</strong> The <code>text-justify</code> property is currently not supported by the most of the browsers. You should better avoid using this property.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_text.php">CSS Text</a>.</p>
                <p>Related properties: <code><a href="style_text-align-property.php">text-align</a></code>, <code><a href="style_white-space-property.php">white-space</a></code>, <code><a href="style_letter-spacing-property.php">letter-spacing</a></code>, <code><a href="style_word-spacing-property.php">word-spacing</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="style_text-indent-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="stylel_text-overflow-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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