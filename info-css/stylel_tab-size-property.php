<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 tab-size Property">
	  <meta name="keywords" content="css,css3,CSS3 tab-size Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 tab-size Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 tab-size Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>tab-size</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_right-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_table-layout-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>tab-size</code> CSS property is used to customize the width of the tab (U+0009) character.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>8</code></td>
                        </tr>
                        <tr>
                            <th>Applies to:</th>
                            <td>Block containers</td>
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
                                <td><span class="property">tab-size</span>:&nbsp;</td>
                                <td><i>integer</i> | <i>length</i> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>tab-size</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9141.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
		
        pre {
            -moz-tab-size: 4; /* Firefox */
              -o-tab-size: 4; /* Opera */
                 tab-size: 4; /* Standard syntax */
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
                            <td><i>integer</i></td>
                            <td>Specifies the number of spaces in a tab. It must be positive integer.</td>
                        </tr>
                        <tr>
                            <td><i>length</i></td>
                            <td>Specifies the width of a tab as a length value in <code>px</code>, <code>pt</code>, <code>cm</code>, <code>em</code>, etc. Negative length values are not allowed.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>tab-size</code> property.</td>
                        </tr>
                    </table>
                </div>	
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>tab-size</code> property is supported in all major modern browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../lib/images/browsers-icon.png" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span>4+ <sup class="badge">-moz-</sup></span></li>
                                        <li>Google Chrome <span>21+</span></li>
                                        <li>Internet Explorer <span class="red" title="Not Supported">&times;</span></li>
                                        <li>Apple Safari <span>6.1+</span></li>
                                        <li>Opera <span>10.6+ <sup class="badge">-o-</sup></span>, <span>15+</span></li>
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
                            <p><strong>Warning:</strong> The length value for the <code>tab-size</code> property is currently not supported by the most of the browsers. You should better avoid using the length value.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_text.php">CSS Text</a>.</p>
                <p>Related properties: <code><a href="style_white-space-property.php">white-space</a></code>, <code><a href="style_word-spacing-property.php">word-spacing</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="style_right-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_table-layout-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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