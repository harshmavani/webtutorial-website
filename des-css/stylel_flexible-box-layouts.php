<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta name="description" content="CSS3 Flexible Box Layouts" />
	  <meta name="keywords" content="css,css3,Flexible Box Layouts">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 Flexible Box Layouts - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 Flexible Box Layouts</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<a href="stylel_box-sizing.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <a href="stylel_filters.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <h1>CSS3 <span>Flexible Box</span> Layouts</h1>
                <p class="summary">CSS3 flexible Box, or flexbox is a new layout model for creating the more flexible user interface design.</p>
                <h2>Understanding the Flex Layout Model</h2>
                <p>Flexible box, commonly referred to as flexbox, is a new layout model introduced in CSS3 for creating the flexible user interface design with multiple rows and columns without using the percentage or fixed length values. The CSS3 flex layout model provides a simple and powerful mechanism for handling the distributing of space and alignment of content automatically through stylesheet without interfering the actual markup.</p>
                <p>The following example demonstrate how to create a three column layout where each column has equal width and height using the flex layout model.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5d5b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
                        <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>CSS3 Three Equal Flex Column</title>
<style>
    .flex-container {
        width: 80%;
        min-height: 300px;
        display: -webkit-flex; /* Safari */     
        display: flex; /* Standard syntax */
        border: 1px solid #808080;
    }
    .flex-container div {
        background: #dbdfe5;
        -webkit-flex: 1; /* Safari */
        -ms-flex: 1; /* IE 10 */
        flex: 1; /* Standard syntax */
    }
</style>
</head>
<body>
    <div class="flex-container">
        <div class="item1">Item 1</div>
        <div class="item2">Item 2</div>
        <div class="item3">Item 3</div>
    </div>
</body>
</html>
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
				<p>If you notice the above example code carefully you'll find we didn't specify any width on the inner <a href="../info-html/html-div-tag.php"><code>&lt;div&gt;</code></a> of the <code>.flex-container</code>, but you can see in the output, every column has width which is exactly equal to the one third of the parent <code>.flex-container</code> element.</p>
                <hr />
				<h2>How Flex Layout Works</h2>
				<p>Flexbox consists of flex containers and flex items. A flex container can be created by setting the <a href="../info-css/style_display-property.php"><code>display</code></a> property of an element to either <code>flex</code> (generate <a href="style_visual-formatting.php#block-level">block-level</a> flex container) or <code>inline-flex</code> (generate an inline flex container similar to <a href="style_visual-formatting.php#inline-level">inline-block</a>). All child elements of flex container automatically become flex items and are laid out using the flex layout model. The <a href="../info-css/style_float-property.php"><code>float</code></a>, <a href="../info-css/style_clear-property.php"><code>clear</code></a>, and <a href="../info-css/style_vertical-align-property.php"><code>vertical-align</code></a> properties have no effect on flex items.</p>
				<p class="break">Flex items are positioned inside a flex container along a flex line controlled by the <a href="../info-css/stylel_flex-direction-property.php"><code>flex-direction</code></a> property. By default, there is only one flex line per flex container which has the same orientation as the inline axis of the current writing mode or <a href="../info-css/style_text-decoration-property.php">text direction</a>. The following illustration will help you to understand the flex layout terminology.</p>
				<div style="margin-bottom: -15px;">
					<img src="../assets/images/flex1.png" width="100%" alt="Flexbox Illustration" />
				</div>
				<hr />
				<h2>Controlling Flow inside Flex Container</h2>
				<p>In the standard CSS box model, the elements normally displayed in the order as they appear in the underlying HTML markup. Flex layout lets you control the direction of the flow inside a flex container in such a way that the elements can be laid out in any flow direction leftwards, rightwards, downwards, or even upwards.</p>
				<p>The flow of the flex items in a flex container can be specified using the <a href="../info-css/stylel_flex-direction-property.php"><code>flex-direction</code></a> property. The default value of this property is <code>row</code> which is same as the document's current writing mode or text direction e.g. left-to-right in English language.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1959.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
                        .flex-container {
    width: 80%;
    min-height: 300px;
    /* Safari */
    display: -webkit-flex;
    -webkit-flex-direction: row-reverse;
    /* Standard syntax */
    display: flex;
    flex-direction: row-reverse;
    border: 1px solid #666;
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
				<p>Similary, you can disply the flex items inside a flex container in columns instead of row using the value <code>column</code> for the <code>flex-direction</code> property, like this:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf939-2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">
                        .flex-container {
    width: 80%;
    min-height: 300px;
    /* Safari */
    display: -webkit-flex;
    -webkit-flex-direction: column;
    /* Standard syntax */
    display: flex;
    flex-direction: column;
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
				<h2>Controlling the Dimensions of Flex Items</h2>
				<p>The most important aspect of the flex layout is the ability of flex items to alter their width or height to fill the available space. This is achieved with the <a href="../info-css/stylel_flex-property.php"><code>flex</code></a> property. It is shorthand property for <a href="../info-css/stylel_flex-grow-property.php"><code>flex-grow</code></a>, <a href="../info-css/stylel_flex-shrink-property.php"><code>flex-shrink</code></a> and <a href="../info-css/stylel_flex-basis-property.php"><code>flex-basis</code></a> properties.</p>
				<p>A flex container distributes the free space to its items proportional to their flex grow factor, or shrinks them to prevent overflow proportional to their flex shrink factor.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab77fd.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">
                        .flex-container {
    width: 80%;
    min-height: 300px;
    display: -webkit-flex; /* Safari */     
    display: flex; /* Standard syntax */
}
.flex-container div {
    padding: 10px;
    background: #dbdfe5;
}
.item1, .item3 {
    -webkit-flex: 1; /* Safari */
    flex: 1; /* Standard syntax */
}
.item2 {
    -webkit-flex: 2; /* Safari */
    flex: 2; /* Standard syntax */
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
				<p class="push-line">In the above example, the first and third flex items will occupy <sup>1</sup>/<sub>4</sub> i.e. <code><sup>1</sup>/<sub>(1+1+2)</sub></code> of the free space each, whereas the second flex item will occupy <sup>1</sup>/<sub>2</sub> i.e. <code><sup>2</sup>/<sub>(1+1+2)</sub></code> of the free space. Similarly, you can create other flexible layouts using this simple technique.</p>
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> It is strongly recommended to use the shorthand rather than the individual flex properties because it resets unspecified components correctly.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>Aligning Flex Items within Flex Container</h2>
				<p class="space">There are four properties <a href="../info-css/stylel_justify-content-property.php"><code>justify-content</code></a>, <a href="../info-css/stylel_align-content-property.php"><code>align-content</code></a>, <a href="../info-css/stylel_align-items-property.php"><code>align-items</code></a> and <a href="../info-css/stylel_align-self-property.php"><code>align-self</code></a> which are designed to control the alignment of flex items within flex container. The first three of them apply to flex containers whereas the last one applies to the individual flex items.</p>
				<h2>Align Flex Items along Main Axis</h2>
				<p>Flex items can be aligned along the main axis (i.e. in the horizontal direction) of the flex container using the <code>justify-content</code> property. It is typically used when the flex items do not use all the space available along the main axis.</p>
				<p>The <code>justify-content</code> property accepts the following values:</p>
				<ul>
					<li><strong>flex-start</strong> &mdash; Default value. Flex items are placed at the start of the main axis.</li>
					<li><strong>flex-end</strong> &mdash; Flex items are placed at the end of the main axis.</li>
					<li><strong>center</strong> &mdash; Flex items are placed at the center of the main axis with equal amounts of free space at both ends. If the leftover free-space is negative i.e. if the items overflow, then the flex items will overflow equally in both directions.</li>
					<li><strong>space-between</strong> &mdash; Flex items are distributed evenly along the main axis, where the first item placed at the main-start edge and the last one placed at the main-end. If items overflow or there's only one item, this value is equal to <code>flex-start</code>.</li>
					<li><strong>space-around</strong> &mdash; Flex items are distributed evenly with half-size spaces on either end. If they overflow or there's only one item, this value is identical to <code>center</code>.</li>
				</ul>
				<p>The following example will show you the effect of the different values for <code>justify-content</code> property on a multiple-column flex container having fixed width.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb283.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">
                        .flex-container {
    width: 500px;
    min-height: 300px;
    border: 1px solid #666;
    /* Safari */
    display: -webkit-flex;
    -webkit-justify-content: space-around;
    /* Standard syntax */
    display: flex;
    justify-content: space-around;
}
.item1 {
    width: 75px;
    background: #e84d51;
}
.item2 {
    width: 125px;
    background: #7ed636;
}
.item3 {
    width: 175px;
    background: #2f97ff;
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
                <!--End:Code box-->				
				<hr />
				<h2>Align Flex Items along Cross Axis</h2>
				<p>Flex items can be aligned along the cross axis (i.e. in the perpendicular direction) of the flex container using the <code>align-items</code> or <code>align-self</code> property. However, where the <code>align-items</code> is applied to the flex container, the <code>align-self</code> property is applied to the individual flex items, and overrides <code>align-items</code>. Both properties accept the following values:</p>
				<ul>					
					<li><strong>flex-start</strong> &mdash; Flex items are placed at the start of the cross axis.</li>
					<li><strong>flex-end</strong> &mdash; Flex items are placed at the end of the cross axis.</li>
					<li><strong>center</strong> &mdash; Flex items are placed at the center of the cross axis with equal amounts of free space at both ends. If the leftover free-space is negative i.e. if the items overflow, then the flex items will overflow equally in both directions.</li>
					<li><strong>baseline</strong> &mdash; The text baseline (or inline axis) of each flex item is aligned with the baseline of the flex item with the largest <a href="../info-css/style_font-size-property.php"><code>font-size</code></a>.</li>
					<li><strong>stretch</strong> &mdash; The flex item stretches to fill the current row or column unless prevented by the minimum and maximum width or height. Default value for <code>align-items</code> property.</li>
				</ul>
				<p>The following example will show you the effect of the different values for <code>align-items</code> property on a multiple-column flex container having fixed height.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabdc1a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">
                        .flex-container {
    width: 500px;
    min-height: 300px;
    border: 1px solid #666;
    /* Safari */
    display: -webkit-flex;
    -webkit-align-items: center;
    /* Standard syntax */
    display: flex;
    align-items: center;
}
.item1 {
    width: 75px;
    height: 100px;
    background: #e84d51;
}
.item2 {
    width: 125px;
    height: 200px;
    background: #7ed636;
}
.item3 {
    width: 175px;
    height: 150px;
    background: #2f97ff;
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
                <!--End:Code box-->
				<p>You can also distribute free space on the cross axis of a multiple-row or multiple-column flex container. The property <code>align-content</code> is used to align the flex container's lines, for example, rows within the multiple-row flex container when there is extra space in the cross-axis, similar to how <code>justify-content</code> aligns individual items within the main-axis.</p>
				<p>The <code>align-content</code> property accepts the same values as <code>justify-content</code>, but applies them to the cross axis rather than the main axis. It also accepts one more value:</p>
				<ul>
					<li><strong>stretch</strong> The free space is split equally between all rows or columns increasing their cross size. If the leftover free-space is negative, this value is identical to <code>flex-start</code>.</li>
				</ul>
				<p>The following example will show you the effect of the different values for <code>align-content</code> property on a multiple-row flex container having fixed height.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab514e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">
                        .flex-container {
    width: 500px;
    min-height: 300px;
    margin: 0 auto;
    font-size: 32px;
    border: 1px solid #666;
    /* Safari */
    display: -webkit-flex;
    -webkit-flex-flow: row wrap;
    -webkit-align-content: space-around;
    /* Standard syntax */
    display: flex;
    flex-flow: row wrap;
    align-content: space-around;
}
.flex-container div {
    width: 150px;
    height: 100px;
    background: #dbdfe5;
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
                <!--End:Code box-->
				<hr />
				<h2>Reordering Individual Flex Items</h2>
				<p>In addition to altering the flow within a flex container, you can also change the order in which individual flex items are displayed using the <a href="../info-css/stylel_order-property.php"><code>order</code></a> property. This property accepts positive or negative integer as value. By default, all flex items are displayed and laid out in the same order as they appear in the HTML markup as the default value of <code>order</code> is <code>0</code>.</p>
				<p>The following example will show you how to control the order of an individual flex item.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab531d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">
                        .flex-container {
    width: 500px;
    min-height: 300px;
    border: 1px solid #666;
    display: -webkit-flex; /* Safari 6.1+ */
    display: flex;
}
.flex-container div {
    padding: 10px;
    width: 130px;
}
.item1 {
    background: #e84d51;
    -webkit-order: 2; /* Safari 6.1+ */
    order: 2;
}
.item2 {
    background: #7ed636;
    -webkit-order: 1; /* Safari 6.1+ */
    order: 1;
}
.item3 {
    background: #2f97ff;
    -webkit-order: -1; /* Safari 6.1+ */
    order: -1;
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
                <!--End:Code box-->
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> Flex item with the lowest <code>order</code> value laid out first, whereas the item with highest <code>order</code> value laid out at the end. Items with the same <code>order</code> value are displayed in the same order a they appear in the source document.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>Horizontal and Vertical Center Alignment with Flexbox</h2>
				<p>Normally vertical alignment of a content block involves the use of JavaScript or some ugly CSS tricks. But with flexbox you can easily do this without any adjustments.</p>
				<p>The following example will show you how to align a content block vertically and horizontally in the middle easily with the CSS3 flexible box feature.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab11f2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">
                        .flex-container {
    width: 500px;
    min-height: 300px;
    border: 1px solid #666;
    display: -webkit-flex; /* Safari 6.1+ */
    display: flex; /* Standard syntax */
}
.item {
    width: 300px;
    padding: 25px;
    margin: auto;
    background: #f0e68c;
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
                <!--End:Code box-->
				<hr />
				<h2>Enable Wrapping of Flex Items</h2>
				<p>By default, flex containers display only a single row or column of flex items. However, you can use the <a href="../info-css/stylel_flex-wrap-property.php"><code>flex-wrap</code></a> property on the flex container to control whether its flex items will wrap into multiple lines or not, if there is not sufficient space for them on one flex line.</p>
				<p>The <code>flex-wrap</code> property accept the following values:</p>
				<ul>
					<li><strong>nowrap</strong> &mdash; Default value. The flex items are placed in a single line. It may cause overflow, if there is not enough space on the flex line.</li>
					<li><strong>wrap</strong> &mdash;  The flex container breaks its flex items across multiple lines, similar to how text is broken onto a new line when it is too wide to fit on the current line.</li>
					<li><strong>wrap-reverse</strong> &mdash; The flex items will wrap, if necessary, but in reverse order i.e. the <em>cross-start</em> and <em>cross-end</em> directions are swapped.</li>
				</ul>
				<p>The following example will show you how to display the flex items in a single or multiple lines within a flex container using the <code>flex-wrap</code> property.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf739.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">
                        .flex-container {
    width: 500px;
    min-height: 300px;
    border: 1px solid #666;
    /* Safari */
    display: -webkit-flex;
    -webkit-flex-wrap: wrap;
    /* Standard syntax */
    display: flex;
    flex-wrap: wrap;  
}
.flex-container div{
    width: 130px;
    padding: 10px;    
    background: #dbdfe5;
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
                <!--End:Code box-->
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> You can also use the shorthand CSS property <a href="../info-css/stylel_flex-flow-property.php"><code>flex-flow</code></a> for setting both the <code>flex-direction</code> and <code>flex-wrap</code> in a single declaration. It accepts the same values as the individual properties and the values can be in any order.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="stylel_box-sizing.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="stylel_filters.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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