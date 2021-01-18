<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 word-break Property">
	  <meta name="keywords" content="css,css3,CSS3 word-break Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 word-break Property - WebSchool Today</title>
    <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 word-break Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<h1>CSS3 <code>word-break</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_width-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_word-spacing-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>word-break</code> CSS property is used to specify how (or if) to break lines within words.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>normal</code></td>
                        </tr>
                        <tr>
                            <th>Applies to:</th>
                            <td>All elements</td>
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
                                <td><span class="property">word-break</span>:&nbsp;</td>
                                <td><span class="keyword">normal</span> | <span class="keyword">break-all</span> | <span class="keyword">keep-all </span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>word-break</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab88cc.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
		
        p {
            width: 150px;
            background: #90ee90;
            word-break: break-all;
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
                            <td><code>normal</code></td>
                            <td>Words break according to their usual rules.</td>
                        </tr>
                        <tr>
                            <td><code>break-all</code></td>
                            <td>Lines may break between any two letters.</td>
                        </tr>
                        <tr>
                            <td><code>keep-all</code></td>
                            <td>Breaks are prohibited between pairs of letters.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>word-break</code> property.</td>
                        </tr>
                    </table>
                </div>	
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>word-break</code> property is supported in all major modern browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span>15+</span></li>
                                        <li>Google Chrome <span>4+</span></li>
                                        <li>Internet Explorer <span>5.5+</span></li>
                                        <li>Apple Safari <span>3.1+</span></li>
                                        <li>Opera <span>15+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_text.php">CSS Text</a>.</p>
                <p>Related properties: <code><a href="stylel_word-wrap-property.php">word-wrap</a></code>, <code><a href="style_white-space-property.php">white-space</a></code>, <code><a href="stylel_text-overflow-property.php">text-overflow</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="style_width-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_word-spacing-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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