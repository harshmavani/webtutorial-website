<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS3 resize Property">
	  <meta name="keywords" content="css,css3,CSS3 resize Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 resize Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 resize Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS3 <code>resize</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_quotes-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_right-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>resize</code> CSS property specifies whether an element is resizable by the user or not, if so, along which directions. The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>none</code></td>
                        </tr>
                        <tr>
                            <th>Applies to:</th>
                            <td>Elements with <a href="style_overflow-property.php">overflow</a> other than visible</td>
                        </tr>
                        <tr>
                            <th>Inherited:</th>
                            <td>No</td>
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
                                <td><span class="property">resize</span>:&nbsp;</td>
                                <td><span class="keyword">none</span> | <span class="keyword">both</span> | <span class="keyword">horizontal</span> | <span class="keyword">vertical</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>resize</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbfc1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

textarea {
    resize: none;
}
div {
    resize: both;
    overflow: auto;
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
                        <p><strong>Read Carefully:</strong> The <code>resize</code> property applies to an element who's computed <code><a href="style_overflow-property.php">overflow</a></code> value is something other than <code>visible</code>. If <code>overflow</code> is different in a particular axis (i.e. <code><a href="stylel_overflow-x-property.php">overflow-x</a></code> vs. <code><a href="stylel_overflow-y-property.php">overflow-y</a></code>), then this property applies to the dimension(s) which do not have the value <code>visible</code>.</p>
                        </div>
                    </div>
                </div>	
                <hr />
                <h2>Property Values</h2>
                <p>The following table describes the values of this property.</p>
                <div class="shadow space">
                    <table class="data">
                        <tr>
                            <th style="width:80px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>none</code></td>
                            <td>The user cannot resize the element. This is default value.</td>
                        </tr>
                        <tr>
                            <td><code>both</code></td>
                            <td>The element displays a bidirectional resizing mechanism to allow the user to adjust both the height and the width of the element.</td>
                        </tr>
                        <tr>
                            <td><code>horizontal</code></td>
                            <td>The element displays a unidirectional horizontal resizing mechanism to allow the user to adjust only the width of the element.</td>
                        </tr>
                        <tr>
                            <td><code>vertical</code></td>
                            <td>The element displays a unidirectional vertical resizing mechanism to allow the user to adjust only the height of the element.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>resize</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>resize</code> property is supported in all major modern browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span>4+</span></li>
                                        <li>Google Chrome <span>3+</span></li>
                                        <li>Internet Explorer <span class="red" title="Not Supported">&times;</span></li>
                                        <li>Apple Safari <span>3+</span></li>
                                        <li>Opera <span>15+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_overflow.php">CSS Overflow</a>.</p>
				<p>Related properties: <code><a href="style_overflow-property.php">overflow</a></code>, <code><a href="stylel_overflow-x-property.php">overflow-x</a></code>, <code><a href="stylel_overflow-y-property.php">overflow-y</a></code></p>
                <div class="bottom-link clearfix">
                    <a href="style_quotes-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_right-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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