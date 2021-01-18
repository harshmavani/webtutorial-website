<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Overflow Property">
	  <meta name="author" content="webschooltoday.com">
    <title>Working with CSS Overflow Property - WebSchool Today</title>
    <meta name="description" content="Working with CSS Overflow Property" />
	 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Working with CSS Overflow Property</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_units.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="style_cursors.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Overflow</span></h1>
                <p class="summary">The overflow property specifies the behavior that occurs when an element's content overflows (doesn't fit) the element's box.</p>
                <h2>Handling Overflowing Content</h2>
                <p>There may be a situation when the content of an element might be larger than the dimensions of the box itself. For example given width and height properties did not allow enough room to accommodate the content of the element.</p>
                <p>CSS overflow property allowing you to specify whether to clip content, render scroll bars or display overflow content of a <a href="style_visual-formatting.php#block-level">block-level</a> element.</p>
                <p>This property can take one of the following values: <code>visible</code> (default), <code>hidden</code>, <code>scroll</code>, and <code>auto</code>. CSS3 also defines the <a href="../info-css/stylel_overflow-x-property.php"><code>overflow-x</code></a> and <a href="../info-css/stylel_overflow-y-property.php"><code>overflow-y</code></a> properties which allow for independent control of the vertical and horizontal clipping.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab323d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

div {
    width: 250px;
    height: 150px;
    overflow: scroll;
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
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th><pre>Value        </pre></th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>visible</code></td>
                            <td>The default value. Content is not clipped; it will be rendered outside the element's box, and may thus overlap other content.</td>
                        </tr>
                        <tr>
                            <td><code>hidden</code></td>
                            <td>Content that overflows the element's box is clipped and the rest of the content will be invisible.</td>
                        </tr>
                        <tr>
                            <td><code>scroll</code></td>
                            <td>The overflowing content is clipped, just like hidden, but provides a scrolling mechanism to access the overflowed content.</td>
                        </tr>
                        <tr>
                            <td><code>auto</code></td>
                            <td>If content overflows the element's box it will automatically provides the scrollbars to see the rest of the content, otherwise scrollbar will not appear.</td>
                        </tr>
                    </table>
                </div>
                <div class="bottom-link clearfix">
                    <a href="style_cursors.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_units.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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