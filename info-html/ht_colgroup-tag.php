
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML colgroup Tag">
      <meta name="keywords" content="html,html5,HTML colgroup Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML colgroup Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML colgroup Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;colgroup&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_col-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="htl_datalist-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;colgroup&gt;</code> (short for column group) tag defines a group of one or more columns within a table. The <code>&lt;colgroup&gt;</code> element can only be used inside a <code><a href="ht_table-tag.php">&lt;table&gt;</a></code> element, after <code><a href="ht_caption-tag.php">&lt;caption&gt;</a></code> element and before the <code><a href="ht_thead-tag.php">&lt;thead&gt;</a></code>, <code><a href="ht_th-tag.php">&lt;th&gt;</a></code>, <code><a href="ht_tfoot-tag.php">&lt;tfoot&gt;</a></code>, <code><a href="ht_tbody-tag.php">&lt;tbody&gt;</a></code>, and <code><a href="ht_tr-tag.php">&lt;tr&gt;</a></code> elements.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Parent:</th>
                            <td><code><a href="ht_table-tag.php">&lt;table&gt;</a></code></td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td><code>0</code> or more <code><a href="ht_col-tag.php">&lt;col&gt;</a></code> elements</td>
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
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;colgroup&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;colgroup&gt;</span> ... <span class="tag">&lt;/colgroup&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;colgroup&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc6ee.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code1">

<table>
    <colgroup>
        <col style="background-color:#adff2f;">
        <col span="2" style="background-color:#f0e68c;">
    </colgroup>
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
                <p>The following table shows the attributes that are specific to the <code>&lt;colgroup&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th style="width:70px;">Attribute</th>
                            <th style="width:85px;">Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>align</code></td>
                            <td><code>left<br />right<br />center<br />justify<br />char</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the horizontal alignment of content within each cell of a column group.</td>
                        </tr>
                        <tr>
                            <td><code>char</code></td>
                            <td><i>character</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Sets the character to which cell contents should align in a column group.</td>
                        </tr>
                        <tr>
                            <td><code>charoff</code></td>
                            <td><i>number</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Defines the number of characters by which cell contents will be offset from the alignment characters specified by the char attribute.</td>
                        </tr>
                        <tr>
                            <td><code>span</code></td>
                            <td><i>length</i></td>
                            <td>Specifies the number of columns in a column group. If not present, its default value is 1. Negative value is not allowed.</td>
                        </tr>
                        <tr>
                            <td><code>valign</code></td>
                            <td><code>top<br />middle<br />bottom<br />baseline</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies the vertical alignment of content within each cell of a column group.</td>
                        </tr>
                        <tr>
                            <td><code>width</code></td>
                            <td><i>length</i></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies a default width for each column in the current column group.</td>
                        </tr>
                    </table>
                </div>	
                <hr />	
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;colgroup&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;colgroup&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;colgroup&gt;</code> tag is supported in all major modern browsers.</p>
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
                <p>See tutorial on: <a href="../des-html/ht_tables.php">HTML Tables</a>.</p>
                <p>Related tags: <code><a href="ht_col-tag.php">&lt;col&gt;</a></code>, <code><a href="ht_table-tag.php">&lt;table&gt;</a></code>.</p>
                <div class="bottom-link clearfix">
                    <a href="ht_col-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="htl_datalist-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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