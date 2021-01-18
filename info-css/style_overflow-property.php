<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS overflow Property">
	  <meta name="keywords" content="css,css3,CSS overflow Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS overflow Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS overflow Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>overflow</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_outline-width-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="stylel_overflow-x-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>overflow</code> property specifies whether to clip content, render scroll bars or display overflow content when content overflows the element's content area.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>visible</code></td>
                        </tr>
                        <tr>
                            <th>Applies to:</th>
                            <td>Block, inline-block and flex containers</td>
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
                            <td>CSS 2, 3</td>
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
                                <td><span class="property">overflow</span>:&nbsp;</td>
                                <td><span class="keyword">auto</span> | <span class="keyword">hidden</span> | <span class="keyword">scroll</span> | <span class="keyword">visible</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>overflow</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab323d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

div {
    width: 400px;
    height: 300px;
    overflow: scroll;
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
                            <th style="width:85px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>visible</code></td>
                            <td>Content is not clipped; it will be rendered outside the element's box, and may thus overlap other content. This is default value.</td>
                        </tr>
                        <tr>
                            <td><code>hidden</code></td>
                            <td>Content that overflows the element's box is clipped and the rest of the content will be invisible.</td>
                        </tr>
                        <tr>
                            <td><code>scroll</code></td>
                            <td>The overflowing content is clipped, just like hidden, but provides a scrolling mechanism to access the overflowed content.</td>
                        </tr>
                        <tr>
                            <td><code>auto</code></td>
                            <td>If content overflows the element's box it provides scrollbars to see the rest of the content.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>overflow</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>overflow</code> property is supported in all major modern browsers.</p>
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
                                        <li>Opera <span>4+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_overflow.php">CSS Overflow</a>.</p>
                <p>Related properties: <code><a href="stylel_overflow-x-property.php">overflow-x</a></code>, <code><a href="stylel_overflow-y-property.php">overflow-y</a></code>, <code><a href="style_clip-property.php">clip</a></code>, <code><a href="stylel_word-wrap-property.php">word-wrap</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="style_outline-width-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="stylel_overflow-x-property.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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