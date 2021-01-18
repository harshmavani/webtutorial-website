<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS display Property">
	  <meta name="keywords" content="css,css3,CSS display Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS display Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS display Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>display</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_direction-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_empty-cells-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>display</code> CSS property specifies the type of box generated by an element.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>inline</code></td>
                        </tr>
                        <tr>
                            <th>Applies to:</th>
                            <td>All elements</td>
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
                            <td>CSS 1, 2, 3</td>
                        </tr>
                    </table>
                </div>
                <div class="usage">
                    <h3><em>Usage Notes</em></h3>
                    <ul>
                        <li><p>The computed value of the <code>display</code> property may differ from the specified value for the root element and for <a href="../des-css/style_float.php">floated</a> or <a href="../des-css/style_position.php#absolute-positioning">absolutely positioned elements</a>.</p></li>
                        <li><p>If the value of <code>display</code> property is set to <code>none</code> &mdash; the element generates no boxes at all, and has no effect on layout; the element and its content are removed from the formatting structure entirely, and the document is rendered as though the element did not exist in the document tree.</p></li>
                    </ul>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The syntax of the property is given with:</p>
                <div class="shadow">
                    <div class="syntax">
                        <table>
                            <tr>
                                <td><span class="property">display</span>:&nbsp;</td>
                                <td><span class="keyword">inline</span> | <span class="keyword">block</span> | <span class="keyword">contents</span> | <span class="keyword">flex</span> | <span class="keyword">flow</span> | <span class="keyword">flow-root</span> | <span class="keyword">grid</span> | <span class="keyword">inline-block</span> | <span class="keyword">inline-flex</span> | <span class="keyword">inline-grid</span> | <span class="keyword">inline-table</span> | <span class="keyword">list-item</span> | <span class="keyword">run-in</span> | <span class="keyword">table</span> | <span class="keyword">table-caption</span> | <span class="keyword">table-column-group</span> | <span class="keyword">table-header-group</span> | <span class="keyword">table-footer-group</span> | <span class="keyword">table-row-group</span> | <span class="keyword">table-cell</span> | <span class="keyword">table-column</span> | <span class="keyword">table-row</span> | <span class="keyword">none</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>display</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab520b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        div {
    display: inline;
}
span {
    display: block;
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
                            <th style="width:160px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>inline</code></td>
                            <td>The element generates an <a href="../des-css/style_visual-formatting.php#inline-level">inline-level</a> box.</td>
                        </tr>
						<tr>
                            <td><code>block</code></td>
                            <td>The element generates a <a href="../des-css/style_visual-formatting.php#block-level">block-level</a> box.</td>
                        </tr>
						<tr>
							<td><code>contents</code></td>
							<td>The element itself does not generate any boxes, but its children and <a href="../des-css/style_pseudo-elements.php">pseudo-elements</a> generate boxes and text runs as normal.</td>
						</tr>
						<tr>
							<td><code>flex</code></td>
							<td>The element generates a block-level <a href="../des-css/stylel_flexible-box-layouts.php">flex container box</a>.</td>
						</tr>
						<tr>
							<td><code>flow</code></td>
							<td>The element lays out its contents using flow layout (block-and-inline layout).</td>
						</tr>
						<tr>
							<td><code>flow-root</code></td>
							<td>The element generates a block container box, and lays out its contents using flow layout.</td>
						</tr>
						<tr>
							<td><code>grid</code></td>
							<td>The element generates a block-level grid container box.</td>
						</tr>
						<tr>
                            <td><code>inline-block</code></td>
                            <td>The element generates a block box that's laid out as if it were an inline box.</td>
                        </tr>
						<tr>
							<td><code>inline-flex</code></td>
							<td>The element generates an inline-level flex container box.</td>
						</tr>
						<tr>
							<td><code>inline-grid</code></td>
							<td>The element generates an inline-level grid container box.</td>
						</tr>
						<tr>
                            <td><code>inline-table</code></td>
                            <td>The element behaves like a table that,s laid out as if it were an inline box.</td>
                        </tr>
                        <tr>
                            <td><code>list-item</code></td>
                            <td>The element generates a block box for the content and a separate inline box for the list marker.</td>
                        </tr>
                        <tr>
                            <td><code>run-in</code></td>
                            <td>The element generates either a block or an inline box, depending on the context.</td>
                        </tr>
                        <tr>
                            <td><code>table</code></td>
                            <td>The element behaves like the <code><a href="../info-html/html-table-tag.php">&lt;table&gt;</a></code> HTML element.</td>
                        </tr>                        
                        <tr>
                            <td><code>table-caption</code></td>
                            <td>The element behaves like the <code><a href="../info-html/html-caption-tag.php">&lt;caption&gt;</a></code> HTML element.</td>
                        </tr>                        
                        <tr>
                            <td><code>table-column-group</code></td>
                            <td>The element behaves like the <code><a href="../info-html/html-colgroup-tag.php">&lt;colgroup&gt;</a></code> HTML elements.</td>
                        </tr>
                        <tr>
                            <td><code>table-header-group</code></td>
                            <td>The element behaves like the <code><a href="../info-html/html-thead-tag.php">&lt;thead&gt;</a></code> HTML elements.</td>
                        </tr>
						<tr>
                            <td><code>table-footer-group</code></td>
                            <td>The element behaves like the <code><a href="../info-html/html-tfoot-tag.php">&lt;tfoot&gt;</a></code> HTML elements.</td>
                        </tr>
                        <tr>
                            <td><code>table-row-group</code></td>
                            <td>The element behaves like the <code><a href="../info-html/html-tbody-tag.php">&lt;tbody&gt;</a></code> HTML elements.</td>
                        </tr>
                        <tr>
                            <td><code>table-cell</code></td>
                            <td>The element behaves like the <code><a href="../info-html/html-td-tag.php">&lt;td&gt;</a></code> HTML elements.</td>
                        </tr>
						<tr>
                            <td><code>table-column</code></td>
                            <td>The element behaves like the <code><a href="../info-html/html-col-tag.php">&lt;col&gt;</a></code> HTML elements.</td>
                        </tr>
                        <tr>
                            <td><code>table-row</code></td>
                            <td>The element behaves like the <code><a href="../info-html/html-tr-tag.php">&lt;tr&gt;</a></code> HTML elements.</td>
                        </tr>
						<tr>
                            <td><code>none</code></td>
                            <td>Turn off the display of an element. All child elements also have their display turned off, even if their display property is set to something other than none.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>display</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />	
                <h2>Browser Compatibility</h2>
                <p>The <code>display</code> property is supported in all major modern browsers.</p>
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                            <p><strong>Warning:</strong> The values such as <code>contents</code>, <code>flow-root</code>, <code>run-in</code>, etc. are poorly supported in most of the browsers. You should better avoid using them for the time being.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_display.php">CSS Display</a>.</p> 
                <p>Related properties: <code><a href="style_visibility-property.php">visibility</a></code>, <code><a href="style_float-property.php">float</a></code>, <code><a href="style_position-property.php">position</a></code>.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="style_direction-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_empty-cells-property.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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