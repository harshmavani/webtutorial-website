<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta name="description" content="Learn how to use Bootstrap helper classes to perform common tasks like emphasizing text, moving elements to left or right, showing and hiding content, etc." />
	  <meta name="keywords" content="Bootstrap,Bootstrap3,Bootstrap 3 Helper Classes">
	  <meta name="author" content="webschooltoday.com">
    <title>Bootstrap 3 Helper Classes - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">Bootstrap 3 Helper Classes</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
         </div>
         <a href="bt_modals.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_wells.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Helper Classes</span></h1>
                <p class="summary">In this tutorial you will learn about the Bootstrap helper classes.</p>
                <h2>Bootstrap Helper Classes</h2>
                <p class="space">Bootstrap provides a handful of CSS classes for common usages.</p>
                <h2>Contextual Colors</h2>
				<p>You can use the contextual color classes like <code>.text-success</code>, <code>.text-info</code>, <code>.text-warning</code> etc. to emphasize the text. See the tutorial on <a href="bt_typography.php#contextual-color-classes">Bootstrap typography</a> for more detail.</p>
                <hr />
				<h2>Contextual Backgrounds</h2>
				<p>Similar to the contextual text color classes, you can use the contextual background color classes to set the <code><a href="../des-css/style_background.php">background-color</a></code> of an element to apply extra emphasis on them.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8db1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<p class="bg-primary">Important: Please read the instructions carefully before proceeding.</p>
<p class="bg-success">Success: Your message has been sent successfully.</p>
<p class="bg-info">Note: You must agree with the terms and conditions to complete the sign up process.</p>
<p class="bg-warning">Warning: There was a problem with your network connection.</p>
<p class="bg-danger">Error: An error has been occurred while submitting your data.</p>

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

			<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box" style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The contextual background classes only apply the CSS <code><a href="../des-css/style_background.php">background-color</a></code> property on the element. To adjust the space between content and border-box you have to set the CSS <code><a href="../des-css/style_padding.php">padding</a></code> property yourself.</p>
						</div>
					</div>
				</div>
				<hr />
                <h2>Close Icon</h2>
                <p>Bootstrap provides a generic close icon that can be used for dismissing modals and alerts.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3f1a.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<div class="alert alert-warning">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Warning!</strong> There was a problem with your network connection.
</div>

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
                <h2>Caret Icon</h2>
                <p>Bootstrap provides a generic caret icon to indicate the dropdown functionality. The direction of the caret icon will reverse automatically in dropup menus.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabd8df.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<ul class="nav nav-pills">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Services <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="#">Design</a></li>
            <li><a href="#">Development</a></li>
        </ul>
    </li>
</ul>

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
				<h2>Center Alignment of Content Blocks</h2>
				<p>You can use the Bootstrap class <code>.center-block</code> to align the content block horizontally center. However, to see the effect of this class you have to set the width of the content block yourself and it should be less than the containing parent element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab99ab.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>

                        <textarea id="code4">

<div class="rg3-w">
   <div class="center-block">Center Aligned DIV Box</div>
</div>
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
				<p>See the tutorial on <a href="../css-tutorial/css-alignment.html">CSS alignment</a> to learn more about aligning the elements.</p>
				<hr />
                <h2>Quick Floats</h2>
                <p class="space">You can quickly float an element to the left or right using the <code>.pull-left</code> and <code>.pull-right</code> classes. These classes included the CSS <code>!important</code> declaration to avoid specificity issues.</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3511.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<div class="pull-left">Floated to left.</div>
<div class="pull-right">Floated to right.</div>

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
                <h2>Clearfix</h2>
                <p>The <code>.clearfix</code> class clears the float on any element. This class is widely used for fixing the <a href="../des-css/style_alignment.php#collapsing-parent">collapsing parent</a> issue, where parent element contains floated boxes.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd453.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

<div class="rg3-w clearfix">
   <div class="pull-left">Float to left</div>
   <div class="pull-right">Float to right</div>
</div>

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
                <p>See the tutorial on <a href="../css-tutorial/css-alignment.php">CSS alignment</a> to learn more about clearing floats on an element.</p>
				<hr />
				<h2>Showing and Hiding Content</h2>
				<p>You can force an element to be shown or hidden on all the devices using the <code>.show</code> and <code>.hidden</code> classes. These classes also included the CSS <code>!important</code> declaration to avoid specificity conflicts, just like the quick floats.</p>
				<p>Furthermore, you can use the class <code>.invisible</code> to toggle only the <a href="../des-css/style_visibility.php">visibility</a> of an element; however the element still occupies the space in the layout.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabfdde.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>

                        <textarea id="code7">
		
        <div class="show">This is visible to the user.</div>
        <div class="hidden">This is not visible to the user.</div>
        <div class="invisible">This is not visible but affects the layout.</div>
        
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
				<h2>Content Specific to Screen Readers</h2>
				<p>The special <code>.sr-only</code> class hides an element to all devices except screen readers.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabad91.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

<p>This paragraph is visible to all devices.</p>
<p class="sr-only">This paragraph is only visible to screen readers.</p>

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
				<h2>Hide Text Only</h2>
				<p>You can use the class <code>.text-hide</code> to hide the text content of an element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4c61.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

<h1 class="text-hide">The text of this heading is not visible</h1>
<p class="text-hide">The text of this paragraph is not visible.</p>

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
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                            <p><strong>Warning:</strong> Think twice before using this class, because it uses the styles <br /><code>color:&thinsp;transparent</code> and <code>font-size:&thinsp;0px</code> to hide the text. Search engines consider such techniques as spam that may result in penalty.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bt_wells.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_modals.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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