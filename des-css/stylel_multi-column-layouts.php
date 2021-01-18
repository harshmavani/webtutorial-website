<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Multi-Column Layouts">
	  <meta name="author" content="webschooltoday.com">
    <title>Working with CSS3 Multi-Column Layouts - WebSchool Today</title>
	<meta name="description" content="Working with CSS3 Multi-Column Layouts" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Working with CSS3 Multi-Column Layouts</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<a href="stylel_animations.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <a href="stylel_box-sizing.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <h1>CSS3 <span>Multi-Column Layouts</span></h1>
                <p class="summary">With CSS3, you can split the text content of an element in multiple columns.</p>
				<h2>Creating Multi-Column Layouts</h2>
				<p>The CSS3 has introduced the multi-column layout module for creating multiple column layouts in an easy and efficient way. Now you can create layouts like you see in magazines and newspapers without using the floating boxes. Here is a simple example of splitting some text into three columns using the CSS3 multiple column layout feature.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba924.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
						p {
    -webkit-column-count: 3; /* Chrome, Safari, Opera */
       -moz-column-count: 3; /* Firefox */
            column-count: 3; /* Standard syntax */
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
                <!--End:Code box-->
				<hr />
				<h2>Setting Column Count or Width</h2>
				<p>The CSS properties <code>column-count</code> and  <code>column-width</code> control whether and how many columns will appear. The <code>column-count</code> property sets the number of columns inside the multicol element, whereas the <code>column-width</code> property sets the desired width of the columns.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab35a8.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
						p {
    -webkit-column-width: 150px; /* Chrome, Safari, Opera */
       -moz-column-width: 150px; /* Firefox */
            column-width: 150px; /* Standard syntax */
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
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> The <code>column-width</code> describes the optimal width of the column. However, the actual column width may be wider or narrower according to the space available. This property should not be used with the <code>column-count</code> property.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>Setting Column Gap</h2>
				<p>You can control the gap between columns using the <code>column-gap</code> property. The same gap is applied between each column. The default gap is normal which is equivalent to <code>1em</code>.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab37aa.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">
						p {
    /* Chrome, Safari, Opera */
    -webkit-column-count: 3;
    -webkit-column-gap: 100px;
    /* Firefox */
    -moz-column-count: 3;
    -moz-column-gap: 100px;
    /* Standard syntax */
    column-count: 3;
    column-gap: 100px;
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
				<hr />
				<h2>Setting Column Rules</h2>
				<p>You can also add a line between the columns i.e. the rule using the <code>column-rule</code> property. It is a shorthand property for setting width, style, and color of the rule in a single declaration. The <code>column-rule</code> property takes the same values as border and outline. </p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd621.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">
						p {
    /* Chrome, Safari, Opera */
    -webkit-column-count: 3;
    -webkit-column-gap: 100px;
    -webkit-column-rule: 2px solid red;
    /* Firefox */
    -moz-column-count: 3;
    -moz-column-gap: 100px;
    -moz-column-rule: 2px solid red;
    /* Standard syntax */
    column-count: 3;
    column-gap: 100px;
    column-rule: 2px solid red;
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
                <!--End:Code box-->
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> The width of column rule does not affect the width of column boxes, but if a column rule is wider than the gap, the adjacent column boxes will overlap the rule.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>CSS3 Multiple Columns Properties</h2>
				<p>The following table provides a brief overview of all the multiple columns properties:</p>
				<div class="shadow">
					<table class="data no-wrap">
						<thead>
							<tr>
								<th>Property</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code><a href="../info-css/stylel_column-count-property.php">column-count</a></code></td>
								<td>Specifies the number of columns inside a multi-column element.</td>
							</tr>
							<tr>
								<td><code><a href="../info-css/stylel_column-fill-property.php">column-fill</a></code></td>
								<td>Specifies how content is spread across columns.</td>
							</tr>
							<tr>
								<td><code><a href="../info-css/stylel_column-gap-property.php">column-gap</a></code></td>
								<td>Specifies the gap between the columns.</td>
							</tr>
							<tr>
								<td><code><a href="../info-css/stylel_column-rule-property.php">column-rule</a></code></td>
								<td>Specifies a straight line or rule, to be drawn between each column.</td>
							</tr>
							<tr>
								<td><code><a href="../info-css/stylel_column-rule-color-property.php">column-rule-color</a></code></td>
								<td>Specifies the color of the rule between columns.</td>
							</tr>
							<tr>
								<td><code><a href="../info-css/stylel_column-rule-style-property.php">column-rule-style</a></code></td>
								<td>Specifies the style of the rule between columns.</td>
							</tr>
							<tr>
								<td><code><a href="../info-css/stylel_column-rule-width-property.php">column-rule-width</a></code></td>
								<td>Specifies the width of the rule between columns.</td>
							</tr>
							<tr>
								<td><code><a href="../info-css/stylel_column-span-property.php">column-span</a></code></td>
								<td>Specifies how many columns an element spans across.</td>
							</tr>
							<tr>
								<td><code><a href="../info-css/stylel_column-width-property.php">column-width</a></code></td>
								<td>Specifies the optimal width of the columns.</td>
							</tr>
							<tr>
								<td><code><a href="../info-css/stylel_columns-property.php">columns</a></code></td>
								<td>A shorthand property for setting both the <a href="../info-css/stylel_column-width-property.php"><code>column-width</code></a> and the <a href="../info-css/stylel_column-count-property.php"><code>column-count</code></a> properties at the same time.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="stylel_animations.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="stylel_box-sizing.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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