<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="How to Create Progress Bars with Bootstrap 4">
	  <meta name="keywords" content="Bootstrap,Bootstrap4,Create Progress Bars,Progress Bars">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create Progress Bars with Bootstrap 4 - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Create Progress Bars with Bootstrap 4</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
      </div>
      <a href="bt_spinners.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_badges.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Progress Bars</span></h1>
                <p class="summary">In this tutorial you will learn how to create progress bars using Bootstrap.</p>
                <h2>Creating Progress Bar with Bootstrap</h2>
                <p>Progress bars can be used for showing the progress of a task or action to the users. The following example will show you how to create a simple progress bar with vertical gradient.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab12f1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<div class="progress">
    <div class="progress-bar" style="width: 50%"></div>
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
				<h2>Creating Progress Bar with Label</h2>
				<p>To show to the progress status as a percentage label just remove the <a href="../info-html/ht_span-tag.php"><code>&lt;span&gt;</code></a> with <code>.sr-only</code> class from within the progress bar as demonstrated in example above.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9d38.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<div class="progress">
    <div class="progress-bar" style="width: 60%">
        60%
    </div>
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
				<p>If you are showing percentage label you should also apply a <a href="../info-css/style_min-width-property.php"><code>min-width</code></a> to the progress bar to ensure that the label text remains readable even for low percentage, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb400.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<div class="progress">
    <div class="progress-bar" style="min-width: 20px;">
        0%
    </div>
</div>
<div class="progress">
    <div class="progress-bar" style="min-width: 20px; width: 2%;">
        2%
    </div>
</div>

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
                <h2>Setting the Height of Progress Bars</h2>
                <p>The default height of the progress-bar is <code>16px</code>, but you can also set its height according to your need by setting the CSS <a href="../info-css/style_height-property.php"><code>height</code></a> property on the <code>.progress</code> element, like this:</p>
                 <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab89f2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<!-- Progress bar with 1px height -->
<div class="progress" style="height: 1px;">
    <div class="progress-bar" style="width: 50%;"></div>
</div>
<!-- Progress bar with 20px height -->
<div class="progress" style="height: 20px;">
    <div class="progress-bar" style="width: 50%;"></div>
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
                <hr />
                <h2>Creating Stripped Progress Bar</h2>
                <p>To create the stripped progress bar just add an extra class <code>.progress-bar-striped</code> to the <code>.progress-bar</code> element, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8531.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<div class="progress">
    <div class="progress-bar progress-bar-striped" style="width: 60%;"></div>
</div>

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
				<h2>Creating Animated Progress Bar</h2>
                <p>You can also animate the stripped progress-bar. Add the class <code>.progress-bar-animated</code> to the <code>.progress-bar</code> element, it will animate the stripes from right to left via <a href="../des-css/stylel_animations.php">CSS3 animations</a>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd494.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

<div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 60%"></div>
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
				<hr />
				<h2>Changing Progress Bar Value Dynamically</h2>
				<p>Static progress bars aren't very impressive. The following example will give you a rough idea of how to update the status of a Bootstrap progress bar dynamically using jQuery.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9a47.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

<!-- Progress bar HTML -->
<div class="progress">
    <div class="progress-bar progress-bar-striped" style="min-width: 20px;"></div>
</div>
    
<!-- jQuery Script -->
<script type="text/javascript">
    var i = 0;
    function makeProgress(){
        if(i < 100){
            i = i + 1;
            $(".progress-bar").css("width", i + "%").text(i + " %");
        }
        // Wait for sometime before running this script again
        setTimeout("makeProgress()", 100);
    }
    makeProgress();
</script>

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
                <h2>Creating Stacked Progress Bar</h2>
                <p>You can also place multiple bars into the same progress bar to stack them.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab25fa.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

<div class="progress">
    <div class="progress-bar bg-success" style="width: 40%">
        Program Files (40%)
    </div>
    <div class="progress-bar bg-warning" style="width: 25%">
        Residual Files (25%)
    </div>
    <div class="progress-bar bg-danger" style="width: 15%">
        Junk Files (15%)
    </div>
</div>

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
                <h2>Progress Bars with Emphasis Classes</h2>
                <p>Bootstrap also provides some emphasis utility classes for progress bars that can be further used to convey meaning through color, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3e7b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

<div class="progress">
    <div class="progress-bar bg-info" style="width: 20%"></div>
</div>
<div class="progress">
    <div class="progress-bar bg-success" style="width: 40%"></div>
</div>
<div class="progress">
    <div class="progress-bar bg-warning" style="width: 80%"></div>
</div>
<div class="progress">
    <div class="progress-bar bg-danger" style="width: 90%"></div>
</div>

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
                <hr />
                <h2>Striped Progress Bars with Emphasis Classes</h2>
                <p>Similar to the solid colors, you can also create varied striped progress bars.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabfe78.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

<div class="progress">
    <div class="progress-bar progress-bar-striped bg-info" style="width: 20%"></div>
</div>
<div class="progress">
    <div class="progress-bar progress-bar-striped bg-success" style="width: 40%"></div>
</div>
<div class="progress">
    <div class="progress-bar progress-bar-striped bg-warning" style="width: 80%"></div>
</div>
<div class="progress">
    <div class="progress-bar progress-bar-striped bg-danger" style="width: 90%"></div>
</div>

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
                <div class="bottom-link clearfix">
                    <a href="bt_badges.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_spinners.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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