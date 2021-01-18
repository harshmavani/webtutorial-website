
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML tfoot Tag">
      <meta name="keywords" content="html,html5,HTML tfoot Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML tfoot Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML tfoot Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;tfoot&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_textarea-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="ht_th-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>	
                <p>The <code>&lt;tfoot&gt;</code> (short for table foot) defines a table's footer. It is used to group a set of rows summarizing the columns of the table. It must appears as a child of a <code><a href="ht_table-tag.php">&lt;table&gt;</a></code> tag, after any <code><a href="ht_caption-tag.php">&lt;caption&gt;</a></code>, <code><a href="ht_colgroup-tag.php">&lt;colgroup&gt;</a></code> and <code><a href="ht_thead-tag.php">&lt;thead&gt;</a></code> elements, but before any <code><a href="ht_tbody-tag.php">&lt;tbody&gt;</a></code> and <code><a href="ht_tr-tag.php">&lt;tr&gt;</a></code> element. The <code>&lt;tfoot&gt;</code> element must contain at least one row, defined by the <code><a href="ht_tr-tag.php">&lt;tr&gt;</a></code> tag.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                    <tr>
                        <th>Parent:</th>
                        <td><code><a href="ht_table-tag.php">&lt;table&gt;</a></code></td>
                    </tr>
                    <tr>
                        <th>Content:</th>
                        <td><code><a href="ht_tr-tag.php">&lt;tr&gt;</a></code></td>
                    </tr>
                    <tr>
                        <th>Start/End Tag:</th>
						<td>Start tag: <strong>required</strong>, End tag: <strong>required</strong></td>
                    </tr>
                    <tr>
                        <th>Version:</th>
                        <td>HTML 4, 4.01, 5</td>
                    </tr>
                </table>
                </div>
                <div class="usage">
                    <h3><em>Usage Notes</em></h3>
                    <ul>
                        <li><p>Table rows may be grouped into a table head, table foot, and one or more table body sections, using the <code><a href="ht_thead-tag.php">&lt;thead&gt;</a></code>, <code><a href="ht_tfoot-tag.php">&lt;tfoot&gt;</a></code> and <code><a href="ht_tbody-tag.php">&lt;tbody&gt;</a></code> tags, respectively.</p></li>
                        <li><p>This division enables the browser to support scrolling of table bodies independently of the table head and foot sections. Also, when long tables are printed that spans multiple pages, the table head and foot information may be printed on each page that contains table data.</p></li>
                        <li><p>When present, each <code><a href="ht_thead-tag.php">&lt;thead&gt;</a></code>, <code><a href="ht_tfoot-tag.php">&lt;tfoot&gt;</a></code> and <code><a href="ht_tbody-tag.php">&lt;tbody&gt;</a></code> contains a row group. Each row group must contain at least one row, defined by the <code><a href="ht_tr-tag.php">&lt;tr&gt;</a></code> tag.</p></li>
                    </ul>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;tfoot&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;tfoot&gt;</span> ... <span class="tag">&lt;/tfoot&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;tfoot&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab51a0.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code1">

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td colspan="3">Copyright ©  2015 Tutorial Republic</td>
        </tr>
    </tfoot>
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
                <h2>Tag-Specific Attributes</h2>
                <p>The following table shows the attributes that are specific to the <code>&lt;tfoot&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th style="width:75px;">Attribute</th>
                            <th style="width:80px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>align</code></td>
                            <td><code>left<br />right<br />center<br />justify<br />char</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the horizontal alignment of each cell content inside the table footer.</td>
                        </tr>
                        <tr>
                            <td><code>char</code></td>
                            <td><i>character</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Sets the character to which cell contents of the table footer should align.</td>
                        </tr>
                        <tr>
                            <td><code>charoff</code></td>
                            <td><i>number</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Defines the number of characters by which cell contents of the table footer will be offset from the alignment characters specified by the char attribute.</td>
                        </tr>
                        <tr>
                            <td><code>valign</code></td>
                            <td><code>top<br />middle<br />bottom<br />baseline</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the vertical alignment of the text within each row of cells of the table footer.</td>
                        </tr>
                    </table>
                </div>	
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;tfoot&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;tfoot&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;tfoot&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>Other table-related tags:  <code><a href="ht_table-tag.php">&lt;table&gt;</a></code>, <code><a href="ht_thead-tag.php">&lt;thead&gt;</a></code>, <code><a href="ht_tbody-tag.php">&lt;tbody&gt;</a></code>, <code><a href="ht_caption-tag.php">&lt;caption&gt;</a></code>, <code><a href="ht_colgroup-tag.php">&lt;colgroup&gt;</a></code>, <code><a href="ht_col-tag.php">&lt;col&gt;</a></code>, <code><a href="ht_tr-tag.php">&lt;tr&gt;</a></code>, <code><a href="ht_th-tag.php">&lt;th&gt;</a></code>, <code><a href="ht_td-tag.php">&lt;td&gt;</a></code>.</p> 

                <div class="bottom-link clearfix">
                    <a href="ht_textarea-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="ht_th-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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