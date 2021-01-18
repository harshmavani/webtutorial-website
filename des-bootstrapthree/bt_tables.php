<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="Bootstrap,Bootstrap3,Striped,Responsive Tables">
	  <meta name="author" content="webschooltoday.com">
    <title>Bootstrap 3 Striped, Responsive Tables and More - WebSchool Today</title>
    <meta name="description" content="Learn how to create bordered, condensed, responsive, Zebra striped tables and so on using the Bootstrap to present your tabular data in elegant way." />
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">Bootstrap 3 Striped, Responsive Tables and More</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
         </div>
         <a href="bt_lists.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_typography.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Tables</span></h1>
                <p class="summary">In this tutorial you will learn how to create elegant tables with Bootstrap.</p>
                <h2>What is Table</h2>
                <p>The HTML tables are used to present data in grid manner like row and columns. Using Bootstrap you can greatly improve the appearance of table in a simple way.</p>
		        <p class="space">See the tutorial on <a href="../ht_tutorial/ht_tables.php">HTML Tables</a> to learn more about tables.</p>
                <h2>Creating a Simple Table with Bootstrap</h2>
                <p>You can create tables with basic styling that has horizontal dividers and small cell padding (8px by default), by just adding the Bootstrap's class <code>.table</code> to the <code><a href="../info-html/ht_table-tag.php">&lt;table&gt;</a></code> element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8321.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code1">

<table class="table">
    <thead>
        <tr>
            <th>Row</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>John</td>
            <td>Carter</td>
            <td>johncarter@mail.com</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Peter</td>
            <td>Parker</td>
            <td>peterparker@mail.com</td>
        </tr>
        <tr>
            <td>3</td>
            <td>John</td>
            <td>Rambo</td>
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
                <h2>Tables with Striped Rows</h2>
                <p>You can create table with alternate background like zebra-stripes by simply adding the Bootstrap's class <code>.table-striped</code> to the <code>.table</code> base class.</p>
                <p>This is achieved by adding the background-color to the table row within <code><a href="../info-html/ht_tbody-tag.html">&lt;tbody&gt;</a></code> element via the <code>:nth-child</code> CSS selector (not supported in IE7-8).</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0a48.html?topic=bt_3&amp;file=table-striped" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code2">

<table class="table table-striped">
    <thead>
        <tr>
            <th>Row</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>John</td>
            <td>Carter</td>
            <td>johncarter@mail.com</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Peter</td>
            <td>Parker</td>
            <td>peterparker@mail.com</td>
        </tr>
        <tr>
            <td>3</td>
            <td>John</td>
            <td>Rambo</td>
            <td>johnrambo@mail.com</td>
        </tr>
    </tbody>
</table>

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code2"), {
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
                <h2>Table with Borders on All Sides</h2>
                <p>You can also add borders to the all table cells by adding an extra Bootstrap's class <code>.table-bordered</code> to the <code>.table</code> base class.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab87b2.html?topic=bt_3&amp;file=table-bordered" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                    	<textarea id="code3">

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Row</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>John</td>
            <td>Carter</td>
            <td>johncarter@mail.com</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Peter</td>
            <td>Parker</td>
            <td>peterparker@mail.com</td>
        </tr>
        <tr>
            <td>3</td>
            <td>John</td>
            <td>Rambo</td>
            <td>johnrambo@mail.com</td>
        </tr>
    </tbody>
</table>

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code3"), {
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
                <h2>Enable Hover State on Table Rows</h2>
                <p>You can also enable a hover state on table rows within a <code><a href="../info-html/ht_tbody-tag.php">&lt;tbody&gt;</a></code> element by adding the Bootstrap's class <code>.table-hover</code> to the <code>.table</code> base class.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbb6a.html?topic=bt_3&amp;file=table-with-hover-states" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code4">

<table class="table table-hover">
    <thead>
        <tr>
            <th>Row</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>John</td>
            <td>Carter</td>
            <td>johncarter@mail.com</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Peter</td>
            <td>Parker</td>
            <td>peterparker@mail.com</td>
        </tr>
        <tr>
            <td>3</td>
            <td>John</td>
            <td>Rambo</td>
            <td>johnrambo@mail.com</td>
        </tr>
    </tbody>
</table>

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code4"), {
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
                <h2>Condensed or Compact Table</h2>
                <p>You can also make your tables more compact and save the space through adding an extra class <code>.table-condensed</code> to the <code>.table</code> base class. The class <code>.table-condensed</code> makes the table compact by cutting the cell padding in half.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8446.html?topic=bt_3&amp;file=condensed-table" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code5">

<table class="table table-condensed">
    <thead>
        <tr>
            <th>Row</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>John</td>
            <td>Carter</td>
            <td>johncarter@mail.com</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Peter</td>
            <td>Parker</td>
            <td>peterparker@mail.com</td>
        </tr>
        <tr>
            <td>3</td>
            <td>John</td>
            <td>Rambo</td>
            <td>johnrambo@mail.com</td>
        </tr>
    </tbody>
</table>

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code5"), {
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
                <h2>Optional Emphasis Classes for Table Rows</h2>
                <p>There are some contextual classes to emphasize the row or individual cells data like success, warning, danger, etc. through coloring its background.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab462a.html?topic=bt_3&amp;file=table-emphasis-classes" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code6">

<table class="table">
    <thead>
        <tr>
            <th>Row</th>
            <th>Bill</th>
            <th>Payment Date</th>
            <th>Payment Status</th>
        </tr>
    </thead>
    <tbody>
        <tr class="active">
            <td>1</td>
            <td>Credit Card</td>
            <td>04/07/2014</td>
            <td>Call in to confirm</td>
        </tr>
        <tr class="success">
            <td>2</td>
            <td>Water</td>
            <td>01/07/2014</td>
            <td>Paid</td>
        </tr>
        <tr class="info">
            <td>3</td>
            <td>Internet</td>
            <td>05/07/2014</td>
            <td>Change plan</td>
        </tr>
        <tr class="warning">
            <td>4</td>
            <td>Electricity</td>
            <td>03/07/2014</td>
            <td>Pending</td>
        </tr>
        <tr class="danger">
            <td>5</td>
            <td>Telephone</td>
            <td>06/07/2014</td>
            <td>Due</td>
        </tr>
    </tbody>
</table>

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code6"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>

                    </div>
                </div>
                <p>Check out the snippets section for examples of some <a href="../snippets/gallery4d19.php?tag=table" target="_blank">beautifully designed Bootstrap tables</a>.</p>                
				<hr />
                <h2>Creating Responsive Tables with Bootstrap</h2>
                <p>With Bootstrap 3 you can also create responsive tables to enable horizontal scrolling on small devices (screen width under 768px). However, viewing responsive tables on other devices having screen width larger than 768px, you will not see any difference.</p>
                <p>To make any table responsive just place the table inside a <code><a href="../info-html/ht_div-tag.php">&lt;div&gt;</a></code> element and apply the class <code>.table-responsive</code> on it, as demonstrated in the example below:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab25ff.html?topic=bt_3&amp;file=responsive-table" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code7">

<div class="table-responsive"> 
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Row</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Biography</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John</td>
                <td>Carter</td>
                <td>johncarter@mail.com</td>
                <td>Lorem ipsum dolor sit amet…</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Peter</td>
                <td>Parker</td>
                <td>peterparker@mail.com</td>
                <td>Vestibulum consectetur scelerisque…</td>
            </tr>
            <tr>
                <td>3</td>
                <td>John</td>
                <td>Rambo</td>
                <td>johnrambo@mail.com</td>
                <td>Integer pulvinar leo id risus…</td>
            </tr>
        </tbody>
    </table>
</div>


     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code7"), {
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
                <h2>Supported Table Elements in Bootstrap</h2>
                <p>The following table lists the supported HTML table elements and how they should be used.</p>
                <div class="shadow">
                	<table class="data">
                    	<thead>
                        	<tr>
                            	<th style="width: 95px;">Tag</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<tr>
                            	<td><code><a href="../info-html/ht_table-tag.php">&lt;table&gt;</a></code></td>
                                <td>rg3-w element for displaying data in a tabular format.</td>
                            </tr>
                            <tr>
                            	<td><code><a href="../info-html/ht_caption-tag.php">&lt;caption&gt;</a></code></td>
                                <td>The title or summary of what the table holds.</td>
                            </tr>
                            <tr>
                            	<td><code><a href="../info-html/ht_thead-tag.php">&lt;thead&gt;</a></code></td>
                                <td>Container element for table header rows (<code>&lt;tr&gt;</code>) that defines headings for table columns.</td>
                            </tr>
                            <tr>
                            	<td><code><a href="../info-html/ht_tbody-tag.php">&lt;tbody&gt;</a></code></td>
                                <td>Container element for table rows (<code>&lt;tr&gt;</code>) that defines the body of a table.</td>
                            </tr>
                            <tr>
                            	<td><code><a href="../info-html/ht_tr-tag.php">&lt;tr&gt;</a></code></td>
                                <td>Container element for a set of table cells (<code>&lt;td&gt;</code> or <code>&lt;th&gt;</code>) that appears in a single row.</td>
                            </tr>
                            <tr>
                            	<td><code><a href="../info-html/ht_th-tag.php">&lt;th&gt;</a></code></td>
                                <td>Special table cell for column headings.</td>
                            </tr>
                            <tr>
                            	<td><code><a href="../info-html/ht_td-tag.php">&lt;td&gt;</a></code></td>
                                <td>Default table cell for placing data.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bt_typography.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_lists.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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
