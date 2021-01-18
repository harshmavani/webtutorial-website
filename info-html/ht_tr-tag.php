
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML tr Tag">
      <meta name="keywords" content="html,html5,HTML tr Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML tr Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML tr Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;tr&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_title-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="htl_track-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;tr&gt;</code> (short for table row) element defines a row of cells in a table. The <code>&lt;tr&gt;</code> element acts as a container for table cells and contains one or more <code><a href="ht_th-tag.php">&lt;th&gt;</a></code> or <code><a href="ht_td-tag.php">&lt;td&gt;</a></code> elements.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Parent:</th>
                            <td><code><a href="ht_thead-tag.php">&lt;thead&gt;</a></code>, <code><a href="ht_tfoot-tag.php">&lt;tfoot&gt;</a></code>, <code><a href="ht_tbody-tag.php">&lt;tbody&gt;</a></code></td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td><code><a href="ht_th-tag.php">&lt;th&gt;</a></code>, <code><a href="ht_td-tag.php">&lt;td&gt;</a></code></td>
                        </tr>
                        <tr>
                            <th>Start/End Tag:</th>
                            <td>Start tag: <strong>required</strong>, End tag: <strong>optional</strong></td>
                        </tr>
                        <tr>
                            <th>Version:</th>
                            <td>HTML 3.2, 4, 4.01, 5</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;tr&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;tr&gt;</span> ... <span class="tag">&lt;/tr&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;tr&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9f9c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code1">

<table>
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
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
                <p>The following table shows the attributes that are specific to the <code>&lt;tr&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th>Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>align</code></td>
                            <td><code>left<br />right<br />center<br />justify<br />char</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the horizontal alignment of each cell content within the table row.</td>
                        </tr>
                        <tr>
                            <td><code>bgcolor</code></td>
                            <td><i>color</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Sets the background color of each cell of the table row.</td>
                        </tr>
                        <tr>
                            <td><code>char</code></td>
                            <td><i>character</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Sets the character to which cell contents within a table row should align.</td>
                        </tr>
                        <tr>
                            <td><code>charoff</code></td>
                            <td><i>number</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Defines the number of characters by which cell contents within a table will be offset from the alignment characters specified by the char attribute.</td>
                        </tr>
                        <tr>
                            <td><code>valign</code></td>
                            <td><code>top<br />middle<br />bottom<br />baseline</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the vertical alignment of cell contents within a table row.</td>
                        </tr>
                    </table>
                </div>
                <hr />	
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;tr&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;tr&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;tr&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>Other table-related tags:  <code><a href="ht_table-tag.php">&lt;table&gt;</a></code>, <code><a href="ht_thead-tag.php">&lt;thead&gt;</a></code>, <code><a href="ht_tfoot-tag.php">&lt;tfoot&gt;</a></code>, <code><a href="ht_tbody-tag.php">&lt;tbody&gt;</a></code>, <code><a href="ht_caption-tag.php">&lt;caption&gt;</a></code>, <code><a href="ht_colgroup-tag.php">&lt;colgroup&gt;</a></code>, <code><a href="ht_col-tag.php">&lt;col&gt;</a></code>, <code><a href="ht_th-tag.php">&lt;th&gt;</a></code>, <code><a href="ht_td-tag.php">&lt;td&gt;</a></code>.</p> 
                <div class="bottom-link clearfix">
                    <a href="ht_title-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="htl_track-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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