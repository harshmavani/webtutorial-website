<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS border-collapse Property">
	  <meta name="keywords" content="css,css3,CSS border-collapse Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS border-collapse Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS border-collapse Property</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>border-collapse</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_border-bottom-width-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_border-color-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>border-collapse</code> CSS property specifies whether the cell borders of a table are collapsed in a single border or separated as usual.</p>
                <p class="break">There are two distinct models for setting borders on table cells in CSS.</p>
                <h3>Separated border model</h3>
                <p>In this model, each table cell has an individual border.</p>
                <p>Distance between the borders of adjoining cells given by the <code><a href="style_border-spacing-property.php">border-spacing</a></code> property.</p>
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> In the separated borders model only cells (and the table itself) can have borders; rows, columns, row groups, and column groups cannot.</p>
                        </div>
                    </div>
                </div>
                <h3>Collapsing border model</h3>
                <p>In the collapsing borders model, adjacent table cells share borders.</p>
                <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> In the collapsing border model, it is possible to specify borders that surround all or part of a cell, row, row group, column, and column group.</p>
                        </div>
                    </div>
                </div>
                <p>The <code>border-collapse</code> property selects a table's border model. The value <code>separate</code> selects the separated border model. The value <code>collapse</code> selects the collapsing border model.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td>separate</td>
                        </tr>
                        <tr>
                            <th>Applies to:</th>
                            <td>The <a href="../html-tutorial/html-tables.php">table</a> and inline-table elements</td>
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
                                <td><span class="property">border-collapse</span>:&nbsp;</td>
                                <td><span class="keyword">separate</span> | <span class="keyword">collapse</span> | <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p>The example below shows the <code>border-collapse</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab80d3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        table {
    border-collapse: collapse;
}
th, td {
    border: 1px solid black;
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
                            <th style="width:80px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>separate</code></td>
                            <td>Selects the separated borders model. This is default value.</td>
                        </tr>
                        <tr>
                            <td><code>collapse</code></td>
                            <td>Selects the collapsing borders model. The <code><a href="style_border-spacing-property.php">border-spacing</a></code> and <code><a href="style_empty-cells-property.php">empty-cells</a></code> properties will be ignored.</td>
                        </tr>
						<tr>
							<td><code>initial</code></td>
							<td>Sets this property to its default value.</td>
						</tr>
                        <tr>
                            <td><code>inherit</code></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>border-collapse</code> property.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>border-collapse</code> property is supported in all major modern browsers.</p>
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
                                        <li>Internet Explorer <span>5+</span></li>
                                        <li>Apple Safari <span>1.2+</span></li>
                                        <li>Opera <span>4+</span></li>
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
                            <p><strong>Warning:</strong> Always use the valid <code><a href="../html-tutorial/html-doctypes.php">&lt;!DOCTYPE&gt;</a></code> while using the <code><a href="style_border-collapse-property.php">border-collapse</a></code> property, otherwise it may produce unexpected results.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_border.php">CSS Border</a>, <a href="../des-css/stylel_border.php">CSS3 Border</a>.</p>
                <p>Table-related properties: <code><a href="style_border-spacing-property.php">border-spacing</a></code>, <code><a href="style_empty-cells-property.php">empty-cells</a></code>, <code><a href="style_table-layout-property.php">table-layout</a></code>.</p> 
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="style_border-bottom-width-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_border-color-property.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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