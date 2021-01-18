
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Create HTML Tables">
	  <meta name="keywords" content="css,css3,How to Create HTML Tables">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create HTML Tables - WebSchool Today</title>
    <meta name="description" content="HTML tables are popular way of presenting data in grid manner like row and column. However use of tables in web layout becomes obsolete but it is still used in arranging data." />
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Create HTML Tables</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    <script type="text/javascript">
	atOptions = {
		'key' : '9049f2d3c3d0cdd985d2d490bad266d3',
		'format' : 'iframe',
		'height' : 50,
		'width' : 320,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.displaycontentnetwork.com/9049f2d3c3d0cdd985d2d490bad266d3/invoke.js"></scr' + 'ipt>');
</script>
</div>
<a href="ht_lists.html" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="ht_images.html" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML <span>Tables</span></h1>
                <p class="summary">In this tutorial you will learn how to display tabular data using HTML tables.</p>
                <h2>Creating Tables in HTML</h2>
                <p>HTML table allows you to arrange data into rows and columns. They are commonly used to display tabular data like product listings, customer's details, financial reports, and so on.</p>
                <p>You can create a table using the <code>&lt;table&gt;</code> element. Inside the <code>&lt;table&gt;</code> element, you can use the <code>&lt;tr&gt;</code> elements to create rows, and to create columns inside a row you can use the <code>&lt;td&gt;</code> elements. You can also define a cell as a header for a group of table cells using the <code>&lt;th&gt;</code> element.</p>
                <p>The following example demonstrates the most basic structure of a table.</p>
                <!--Code box-->
                <!--ads-->
                <div>
                    <script type="text/javascript">
	atOptions = {
		'key' : '25484e9e29be3f9c30cd9a00ccde11ec',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.displaycontentnetwork.com/25484e9e29be3f9c30cd9a00ccde11ec/invoke.js"></scr' + 'ipt>');
</script>
                </div>
                <!--ads close-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3c3c.html?topic=html&amp;file=table" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        <table>
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Age</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Peter Parker</td>
        <td>16</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Clark Kent</td>
        <td>34</td>
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
                <!--End:Code box-->        
                <p>Tables do not have any borders by default. You can use the CSS <a href="../info-css/css-border-property.html"><code>border</code></a> property to add borders to the tables. Also, table cells are sized just large enough to fit the contents by default. To add more space around the content in the table cells you can use the CSS <a href="../info-css/css-padding-property.html"><code>padding</code></a> property.</p>    
                <p>The following style rules add a 1-pixel border to the table and 10-pixels of padding to its cells.</p>      
                <!--Code box-->
                <!--ads-->
                <div>
                    <script type="text/javascript">
	atOptions = {
		'key' : '25484e9e29be3f9c30cd9a00ccde11ec',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.displaycontentnetwork.com/25484e9e29be3f9c30cd9a00ccde11ec/invoke.js"></scr' + 'ipt>');
</script>
                </div>
                <!--ads close-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0830.html?topic=html&amp;file=table-with-borders-and-paddings" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        table, th, td {
    border: 1px solid black;
}
th, td {
    padding: 10px;
}
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
                <!--End:Code box-->
                <p>By default, borders around the table and their cells are separated from each other. But you can collapse them into one by using the <a href="../info-css/css-border-collapse-property.html"><code>border-collapse</code></a> property on the <code>&lt;table&gt;</code> element.</p>
                <p>Also, text inside the <code>&lt;th&gt;</code> elements are displayed in bold font, aligned horizontally center in the cell by default. To change the default alignment you can use the CSS <a href="../info-css/css-text-align-property.html"><code>text-align</code></a> property.</p>
                <p>The following style rules collapse the table borders and align the table header text to left.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8d78.html?topic=html&amp;file=table-with-collapsed-borders" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        table {
    border-collapse: collapse;
}
th {
    text-align: left;
}
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
                <!--End:Code box-->
                <p>Please check out the tutorial on <a href="../des-css/css-tables.html">CSS tables</a> to learn about styling HTML tables in details.</p>
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Most of the <a href="../info-html/ht_table-tag.html"><code>&lt;table&gt;</code></a> element's attribute such as <code>border</code>, <code>cellpadding</code>, <code>cellspacing</code>, <code>width</code>, <code>align</code>, etc. for styling table appearances in earlier versions has been dropped in HTML5, so avoid using them. Use CSS to <a href="../des-css/css-tables.html">style HTML tables</a> instead.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <hr />
                <h2>Spanning Multiple Rows and Columns</h2> 
                <p>Spanning allow you to extend table rows and columns across multiple other rows and columns.</p>               
                <p>Normally, a table cell cannot pass over into the space below or above another table cell. But, you can use the <code>rowspan</code> or <code>colspan</code> attributes to span multiple rows or columns in a table.</p>
                <p>Let's try out the following example to understand how <code>colspan</code> basically works:</p>                
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab544a.html?topic=html&amp;file=span-multiple-table-columns" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        <table>
    <tr>
        <th>Name</th>
        <th colspan="2">Phone</th>
    </tr>
    <tr>
        <td>John Carter</td>
        <td>5550192</td>
        <td>5550152</td>
    </tr>
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
                <!--End:Code box-->
                <p>Similarly, you can use the <code>rowspan</code> attribute to create a cell that spans more than one row. Let's try out an example to understand how row spanning basically works:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba1ce.html?topic=html&amp;file=span-multiple-table-rows" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        <table>
    <tr>
        <th>Name:</th>
        <td>John Carter</td>
    </tr>
    <tr>
        <th rowspan="2">Phone:</th>
        <td>55577854</td>
    </tr>
    <tr>
        <td>55577855</td>
    </tr>
</table>
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code5 "), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
                    </div>
                </div>
                <!--End:Code box-->                
                <hr />
                <h2>Adding Captions to Tables</h2>
                <p>You can specify a caption (or title) for your tables using the <code>&lt;caption&gt;</code> element.</p>
                <p>The <code>&lt;caption&gt;</code> element must be placed directly after the opening <code>&lt;table&gt;</code> tag. By default, caption appears at the top of the table, but you can change its position using the CSS <a href="../info-css/css-caption-side-property.html"><code>caption-side</code></a> property.</p>
                <p>The following example shows how to use this element in a table.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6dfc.html?topic=html&amp;file=add-table-captions" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

                        <table>
    <caption>Users Info</caption>
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Age</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Peter Parker</td>
        <td>16</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Clark Kent</td>
        <td>34</td>
    </tr>
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
                <!--End:Code box-->
                <hr />
                <h2>Defining a Table Header, Body, and Footer</h2>
                <p>HTML provides a series of tags <a href="../info-html/ht_thead-tag.html"><code>&lt;thead&gt;</code></a>, <a href="../info-html/ht_tbody-tag.html"><code>&lt;tbody&gt;</code></a>, and <a href="../info-html/ht_tfoot-tag.html"><code>&lt;tfoot&gt;</code></a> that helps you to create more structured table, by defining header, body and footer regions, respectively.</p>
                <p>The following example demonstrates the use of these elements.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8bad.html?topic=html&amp;file=table-with-a-header-footer-and-body" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

                        <table>
    <thead>
        <tr>
            <th>Items</th>
            <th>Expenditure</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Stationary</td>
            <td>2,000</td>
        </tr>
        <tr>
            <td>Furniture</td>
            <td>10,000</td>
        </tr>        
    </tbody>
    <tfoot>
        <tr>
            <th>Total</th>
            <td>12,000</td>
        </tr>
    </tfoot>
</table>
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
                <!--End:Code box-->
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> In HTML5, the <code>&lt;tfoot&gt;</code> element can be placed either before or after the <code>&lt;tbody&gt;</code> and <code>&lt;tr&gt;</code> elements, but must appear after any <code>&lt;caption&gt;</code>, <code>&lt;colgroup&gt;</code>, and <code>&lt;thead&gt;</code> elements.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->   
                <!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> Do not use tables for creating web page layouts. Table layouts are slower at rendering, and very difficult to maintain. It should be used only to display tabular data.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="ht_images.html" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="ht_lists.html" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
 Page</a>
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