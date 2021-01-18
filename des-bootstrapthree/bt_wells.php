<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta name="description" content="Learn how to apply the simple inset effect to an element so that it appears different from the rest of the content with the help of Bootstrap well component." />
	  <meta name="keywords" content="Bootstrap,Bootstrap3,Well Component">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Use Bootstrap 3 Well Component - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Use Bootstrap 3 Well Component</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
     </div>
     <a href="bp_helper-classes.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bp_jumbotron.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Wells</span></h1>
                <p class="summary">In this tutorial you will learn how to use Bootstrap well component.</p>
                <h2>Placing Content inside Wells</h2>
                <p>The Bootstrap well component provides a quick way to apply a simple inset effect to an element. It will be very helpful if you just want to place some content inside a box to make it look like different from rest of the contents. To use this just enclose the contents with a <code><a href="../info-html/ht_div-tag.php">&lt;div&gt;</a></code> element and apply the class <code>.well</code> on it, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabdfdb.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<div class="well">
    Look, I'm in a well!
</div>

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
				<h2>Varying Well Sizes</h2>
				<p>You can further control the padding and rounded corners of the wells using the two optional modifier classes <code>.well-lg</code> and <code>.well-sm</code>, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4753.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
	<textarea id="code2">

<div class="well well-lg">
    Look, I'm in a large well!
</div>
<div class="well well-sm">
    Look, I'm in a small well!
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
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box" style="background-color:#fad28c"
>
							<p><strong>Important:</strong> If you're going to place the floated content inside a well, make sure to add the class <code>.clearfix</code> to the <code>.well</code> element to prevent <a href="../des-css/style_alignment.php#collapsing-parent">parent collapsing</a>.</p>
						</div>
					</div>
				</div>
                <div class="bottom-link clearfix">
                    <a href="bp_jumbotron.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bp_helper-classes.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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