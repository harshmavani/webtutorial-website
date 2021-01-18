
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML table Tag">
      <meta name="keywords" content="html,html5,HTML table Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML table Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML table Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;table&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_sup-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_tbody-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;table&gt;</code> tag is used to represents data in a grid-like fashion (in rows and columns).</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Block</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>An optional <code><a href="ht_caption-tag.php">&lt;caption&gt;</a></code>, zero or more <code><a href="ht_col-tag.php"> &lt;col&gt;</a></code> or <code><a href="ht_colgroup-tag.php">&lt;colgroup&gt;</a></code> tags, optional <code><a href="ht_thead-tag.php">&lt;thead&gt;</a></code> and <code><a href="ht_tfoot-tag.php">&lt;tfoot&gt;</a></code>, zero or more <code><a href="ht_tbody-tag.php">&lt;tbody&gt;</a></code> tags and at least one <code><a href="ht_tr-tag.php">&lt;tr&gt;</a></code></td>
                        </tr>
                        <tr>
                            <th>Start/End Tag:</th>
                            <td>Start tag: <strong>required</strong>, End tag: <strong>required</strong></td>
                        </tr>
                        <tr>
                            <th>Version:</th>
                            <td>HTML 3.2, 4, 4.01, 5</td>
                        </tr>
                    </table>
                </div>
                <div class="usage">
                    <h3><em>Usage Notes</em></h3>
                    <ul>
                        <li><p>Tables are used to organize data like, text, images, links, forms, form fields, other tables, etc. into rows and columns of cells.</p></li>
                        <li><p>At its most basic, a table is built using the <code>&lt;table&gt;</code> element and one or more, <code><a href="ht_tr-tag.php">&lt;tr&gt;</a></code>, <code><a href="ht_th-tag.php">&lt;th&gt;</a></code> and <code><a href="ht_td-tag.php">&lt;td&gt;</a></code> elements. Where the <code>&lt;tr&gt;</code> element defines a table row, the <code>&lt;th&gt;</code> element defines a table header, and the <code>&lt;td&gt;</code> element defines a table cell.</p></li>
                        <li><p>A more complex table may also include a <code><a href="ht_caption-tag.php">&lt;caption&gt;</a></code>, <code><a href="ht_col-tag.php">&lt;col&gt;</a></code> and <code><a href="ht_colgroup-tag.php">&lt;colgroup&gt;</a></code> elements; and the structural <code><a href="ht_thead-tag.php">&lt;thead&gt;</a></code>, <code><a href="ht_tbody-tag.php">&lt;tbody&gt;</a></code>, and <code><a href="ht_tfoot-tag.php">&lt;tfoot&gt;</a></code> elements, which are used to identify the different regions in the table.</p></li>
                    </ul>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;table&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;table&gt;</span> ... <span class="tag">&lt;/table&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;table&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd7f6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <table>
    <caption>User Details</caption>
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>John Carter</td>
            <td>johncarter@mail.com</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Peter Parker</td>
            <td>peterparker@mail.com</td>
        </tr>
        <tr>
            <td>3</td>
            <td>John Rambo</td>
            <td>johnrambo@mail.com</td>
        </tr>
    </tbody>
</table>
                    </div>
                </div>
				<div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> Consider describing the structure of the table in a <code><a href="ht_caption-tag.php">&lt;caption&gt;</a></code> element or, simplify the structure of the table so that no description is needed.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Tag-Specific Attributes</h2>
                <p>The following table shows the attributes that are specific to the <code>&lt;table&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th style="width: 90px;">Attribute</th>
                            <th style="width: 90px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>align</code></td>
                            <td><code>left<br />center<br />right</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the alignment of the table with respect to the document.</td>
                        </tr>
                        <tr>
                            <td><code>bgcolor</code></td>
                            <td><i>color</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Sets the background color of the table.</td>
                        </tr>
                        <tr>
                            <td><code>border</code></td>
                            <td><code>1<br />0</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies whether the table cells should have borders or not.</td>
                        </tr>
                        <tr>
                            <td><code>cellpadding</code></td>
                            <td><i>length</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the space between the edge of a cell and its content.</td>
                        </tr>
                        <tr>
                            <td><code>cellspacing</code></td>
                            <td><i>length</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the amount of space between individual cells.</td>
                        </tr>
                        <tr>
                            <td><code>frame</code></td>
                            <td><code>above<br />below<br />border<br />box<br />hsides<br />lhs<br />rhs<br />void<br />vsides</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies which sides of the border frame surrounding a table will be visible.</td>
                        </tr>
                        <tr>
                            <td><code>rules</code></td>
                            <td><code>all<br />cols<br />groups<br />none<br />rows</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies which parts of the inside borders will appear between cells within a table.</td>
                        </tr>
						<tr>
                            <td><code>sortable</code></td>
                            <td><code>sortable</code></td>
                            <td>Enables a sorting interface for the table.</td>
                        </tr>
                        <tr>
                            <td><code>summary</code></td>
                            <td><i>text</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies a summary of the content of a table.</td>
                        </tr>
                        <tr>
                            <td><code>width</code></td>
                            <td><i>length</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the width of the entire table.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;table&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;table&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;table&gt;</code> tag is supported in all major modern browsers.</p>
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
                                        <li>Internet Explorer <span>2+</span></li>
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
                <p>See tutorial on: <a href="../des-html/ht_tables.php">HTML Tables</a>.</p>
                <p>Other table-related tags:  <code><a href="ht_thead-tag.php">&lt;thead&gt;</a></code>, <code><a href="ht_tfoot-tag.php">&lt;tfoot&gt;</a></code>, <code><a href="ht_tbody-tag.php">&lt;tbody&gt;</a></code>, <code><a href="ht_caption-tag.php">&lt;caption&gt;</a></code>, <code><a href="ht_colgroup-tag.php">&lt;colgroup&gt;</a></code>, <code><a href="ht_col-tag.php">&lt;col&gt;</a></code>, <code><a href="ht_tr-tag.php">&lt;tr&gt;</a></code>, <code><a href="ht_th-tag.php">&lt;th&gt;</a></code>, <code><a href="ht_td-tag.php">&lt;td&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_sup-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_tbody-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
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