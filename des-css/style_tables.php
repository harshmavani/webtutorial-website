<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="Bootstrap,Bootstrap3,CSS Properties for Styling Tables,table">
	  <meta name="author" content="webschooltoday.com">
    <title>Essential CSS Properties for Styling Tables - WebSchool Today</title>
    <meta name="description" content="Essential CSS Properties for Styling Tables" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Essential CSS Properties for Styling Tables</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <a href="style_lists.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <a href="style_box-model.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <h1>CSS <span>Tables</span></h1>
                <p class="summary">In this tutorial you will learn how to style HTML tables with CSS.</p>
                <h2>Styling Tables with CSS</h2>
                <p>Tables are typically used to display tabular data, such as financial reports.</p>
                <p>But when you create an <a href="../des-html/html-tables.php">HTML table</a> without any styles or attributes, browsers display them without any border. With CSS you can greatly improve the appearance your tables.</p>
                <p class="space">CSS provides several properties that allow you to control the layout and presentation of the table elements. In the following section you will see how to use CSS to create elegant and consistent tables.</p>
                <h2>Adding Borders to Tables</h2>
                <p>The CSS <a href="../info-css/style_border-property.php"><code>border</code></a> property is the best way to define the borders for the tables.</p>
                <p>The following example will set a black border for the <a href="../info-html/html-table-tag.php"><code>&lt;table&gt;</code></a>, <a href="../info-html/html-th-tag.php"><code>&lt;th&gt;</code></a>, and <a href="../info-html/html-td-tag.php"><code>&lt;td&gt;</code></a> elements.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab001e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
                        table, th, td {
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
                <p>By default, browser draws a border around the table, as well as around all the cells, with some space in-between, which results in double border. To get rid of this double border problem you can simply collapse the adjoining table cell borders and create clean single line borders.</p>
                <p>Let's take a look at the following illustration to understand how a border is applied to a table.</p>
                <div class="break">
                    <img src="../assets/images/table.jpg" width="100%" alt="Table Border Model Illustration" />
                </div>
                <hr />
                <h2>Collapsing Table Borders</h2>
                <p>There are two distinct models for setting borders on table cells in CSS: <em>separate</em> and <em>collapse</em>.</p>
                <p>In the separate border model, which is the default, each table cell has its own distinct borders, whereas in the collapsed border model, adjacent table cells share a common border. You can set the border model for an HTML table by using the CSS <code>border-collapse</code> property.</p>
                <p>The following style rules will collapse the table cell borders and apply one pixel black border.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba23e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
                        table {
    border-collapse: collapse;
}
th, td {
    border: 1px solid black;
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> You can also remove the space between the table cell borders through setting the value of CSS <a href="../info-css/style_border-spacing-property.php"><code>border-spacing</code></a> property to 0. However, it only removes the space but do not merge the borders like when you set the <code>border-collapse</code> to <code>collapse</code>.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Adjusting Space inside Tables</h2>
                <p>By default, the browser creates the table cells just large enough to contain the data in the cells.</p>
                <p>To add more space between the table cell contents and the cell borders, you can simply use the CSS <code>padding</code> property. Let's try out the following example and see how it works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7b84.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">
 th, td {
    padding: 15px;
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
                <p>You can also adjust the spacing between the borders of the cells using the CSS <a href="../info-css/style_border-spacing-property.php"><code>border-spacing</code></a> property, if the borders of your table are separated (which is default).</p>
                <p>The following style rules apply the spacing of 10 pixels between all borders within a table:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7104.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">
table {
    border-spacing: 10px;
}
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
                <h2>Setting Table Width and Height</h2>
                <p>By default, a table will render just wide and tall enough to contain all of its contents.</p>
                <p>However, you can also set the width and height of the table as well as its cells explicitly using the <code>width</code> and <code>height</code> CSS property. The style rules in the following example will sets the width of the table to 100%, and the height of the table header cells to 40px.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1ac0.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">
                        table {
    width: 100%;
}
th {
    height: 40px;
}
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
                <h2>Controlling the Table Layout</h2>
                <p>A table expands and contracts to accommodate the data contained inside it. This is the default behavior. As data fills inside the table, it continues to expand as long as there is space. Sometimes, however, it is necessary to set a fixed width for the table in order to manage the layout.</p>
                <p>You can do this with the help of CSS <code>table-layout</code> property. This property defines the algorithm to be used to layout the table cells, rows, and columns. This property takes one of two values:</p>
                <ul>
                    <li><strong>auto</strong> &mdash; Uses an automatic table layout algorithm. With this algorithm, the widths of the table and its cells are adjusted to fit the content. This is the default value.</li>
                    <li><strong>fixed</strong> &mdash; Uses the fixed table layout algorithm. With this algorithm, the horizontal layout of the table does not depend on the contents of the cells; it only depends on the table's width, the width of the columns, and borders or cell spacing. It is normally faster than auto.</li>
                </ul>
                <p>The style rules in the following example specify that the HTML table is laid out using the fixed layout algorithm and has a fixed width of 300 pixels. Let's try it out and see how it works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabad46.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">
                        table {
    width: 300px;
    table-layout: fixed;
}
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> You can optimize the table rendering performance by specifying the value <code>fixed</code> for the <code>table-layout</code> property. Fixed value of this property causes the table to be rendered one row at a time, providing users with information at a faster pace.</p>
                        </div>
                    </div>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Without <code>fixed</code> value of the <code>table-layout</code> property on large tables, users won't see any part of the table until the browser has rendered the whole table.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Aligning the Text Inside Table Cells</h2>
                <p>You can align text content inside the table cells either horizontally or vertically.</p>
                <h3>Horizontal Alignment of Cell Contents</h3>
                <p>For horizontal alignment of text inside the table cells you can use the <code>text-align</code> property in the same way as you use with other elements. You align text to either left, right, center or justify.</p>
                <p>The following style rules will left-align the text inside the <code>&lt;th&gt;</code> elements.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe211.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

                        th {
    text-align: left;
}
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Text inside the <code>&lt;td&gt;</code> elements are left-aligned by default, whereas the text inside the <code>&lt;th&gt;</code> elements are center-aligned and rendered in bold font by default.</p>
                        </div>
                    </div>
                </div>
                <h3>Vertical Alignment of Cell Contents</h3>
                <p>Similarly, you can vertically align the content inside the <code>&lt;th&gt;</code> and <code>&lt;td&gt;</code> elements to top, bottom, or middle using the CSS <code>vertical-align</code> property. The default vertical alignment is middle.</p>
                <p>The following style rules will vertically bottom-align the text inside the <code>&lt;th&gt;</code> elements.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6789.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

                        th {
    height: 40px;
    vertical-align: bottom;
}
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code8"), {
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
                <h2>Controlling the Position of Table Caption</h2>
                <p>You can set the vertical position of a table caption using the CSS <code>caption-side</code> property.</p>
                <p>The caption can be placed either at the top or bottom of the table. The default position is top.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba28f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

                        caption {
    caption-side: bottom;
}
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code9"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
                    </div>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> To change the horizontal alignment of the table's caption text (e.g. left or right), you can simply use the CSS <a href="../info-css/style_text-align-property.php"><code>text-align</code></a> property, like you do with normal text.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Handling Empty Cells</h2>
                <p>In tables that uses separate border model, which is default, you can also control the rendering of the cells that have no visible content using the <code>empty-cells</code> CSS property.</p>
                <p>This property accepts a value of either <code>show</code> or <code>hide</code>. The default value is <code>show</code>, which renders empty cells like normal cells, but if the value <code>hide</code> is specified no borders or backgrounds are drawn around the empty cells. Let's try out an example to understand how it really works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9019.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">
                        table {
    border-collapse: separate;
    empty-cells: hide;
}
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code10"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
                    </div>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Placing a non-breaking space (<code>&amp;nbsp;</code>) inside a table cell make it non-empty. Therefore, even if that cell looks empty the <code>hide</code> value will not hide the borders and backgrounds.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Creating Zebra-striped Tables</h2>
                <p>Setting different background colors for alternate rows is a popular technique to improve the readability of tables that has large amount of data. This is commonly known as zebra-striping a table.</p>
                <p>You can simply achieve this effect by using the CSS <code>:nth-child()</code> <a href="style_pseudo-classes.php">pseudo-class</a> selector.</p>
                <p>The following style rules will highlight every odd rows within the table body.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabad3c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11">

                        tbody tr:nth-child(odd) {
    background-color: #f2f2f2;
}
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code11"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
                    </div>
                </div>
                <p>A zebra-striped table typically looks something like the following picture.</p>
                <div class="shadow">
                    <div class="preview-box">
                        <a href="../codelabad3c.html" target="_blank">
                            <img src="../lib/images/zebra-striped-table.png" width="730" height="166" alt="Zebra Striped Table">
                        </a>
                    </div>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The <code>:nth-child()</code> pseudo-class select elements based on their position in a group of siblings. It can take a number, a keyword even or odd, or an expression of the form xn+y where x and y are integers (e.g. 1n, 2n, 2n+1, ...) as an argument.</p>
                        </div>
                    </div>
                </div>
                <hr />                
                <h2>Making a Table Responsive</h2>
                <p>Tables are not responsive in nature. However, to support mobile devices you can add responsiveness to your tables by enabling horizontal scrolling on small screens. To do this simply wrap your table with a <code>&lt;div&gt;</code> element and apply the style <code>overflow-x: auto;</code> as shown below:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba6a5.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code12">

                        <div style="overflow-x: auto;"> 
    <table>
        ... table content ...
    </table>
</div>
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code12"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
                    </div>
                </div>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="style_lists.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_box-model.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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