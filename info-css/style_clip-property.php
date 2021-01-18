<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS clip Property">
	  <meta name="keywords" content="css,css3,CSS clip Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS clip Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS clip Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>clip</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_clear-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_color-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>clip</code> CSS property defines the clipping region for an absolutely positioned element. However, it does not work if the <code><a href="style_overflow-property.php">overflow</a></code> property is set to <code>visible</code>.</p> 
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>auto</code></td>
                        </tr>
                        <tr>
                            <th>Applies to:</th>
                            <td><a href="../des-css/style_position.php#absolute-positioning">Absolutely positioned elements</a></td>
                        </tr>
                        <tr>
                            <th>Inherited:</th>
                            <td>No</td>
                        </tr>
						<tr>
							<th>Animatable:</th>
							<td>Yes. <a href="style_animatable-properties.php"><i>See</i> <em>animatable properties</em></a>.</td>
						</tr>
                        <tr>
                            <th>Version:</th>
                            <td>CSS 2, 3</td>
                        </tr>
                    </table>
                </div>
				<!--Warning box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab warning-icon" title="Warning"><i></i></div>
						<div class="warning-box">
							<p><strong>Warning:</strong> Do not use this property as it has been <a href="../definitions.php#deprecated">deprecated</a> since CSS3 and removed from the future version. Though some browsers may still support it.</p>
						</div>
					</div>
				</div>
				<!--End:Warning box-->
                <hr />
                <h2>Syntax</h2>
                <p>The syntax of the property is given with:</p>
                <div class="shadow">
                    <div class="syntax">
                        <table>
                            <tr>
                                <td><span class="property">clip</span>:&nbsp;</td>
                                <td><i>shape</i> | <span class="keyword">auto</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>clip</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabcf9c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        img {
    position: absolute;
    clip: rect(0px,50px,200px,10px);
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
                            <th style="width:70px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><i>shape</i></td>
                            <td>
                                <p class="up">Clips an element. The only valid shape value is: <code>rect(<i>top</i>, <i>right</i>, <i>bottom</i>, <i>left</i>)</code>. Where <i>top</i> and <i>bottom</i> specify offsets from the top border edge of the box, and <i>right</i> and <i>left</i> specify offsets from the left border edge of the box.</p>
                                <p>The <i>top</i>, <i>right</i>, <i>bottom</i>, and <i>left</i> may either have a length value or <code>auto</code>. Negative lengths are permitted.</p>
                            </td>
                        </tr>
                        <tr>
                            <td><code>auto</code></td>
                            <td>The element does not clip. This is default value.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>clip</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>clip</code> property is supported in all major modern browsers.</p>
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
                                        <li>Internet Explorer <span>4+</span></li>
                                        <li>Apple Safari <span>1+</span></li>
                                        <li>Opera <span>7+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
				<p>See tutorial on: <a href="../des-css/style_position.php">CSS Position</a>, <a href="../des-css/style_overflow.php">CSS Overflow</a>, <a href="../des-css/style_display.php">CSS Display</a>.</p>
                <p>Related properties: <code><a href="style_position-property.php">position</a></code>, <code><a href="style_display-property.php">display</a></code>, <code><a href="style_overflow-property.php">overflow</a></code>, <code><a href="stylel_overflow-x-property.php">overflow-x</a></code>, <code><a href="stylel_overflow-y-property.php">overflow-y</a></code>.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="style_clear-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_color-property.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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