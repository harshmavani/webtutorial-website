<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta name="description" content="Learn how to create different types of progress bars whether it is static or animated using Bootstrap to indicate the status of any process to the users." />
	  <meta name="keywords" content="Bootstrap,Bootstrap3,Progress Bars">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create Progress Bars with Bootstrap 3 - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Create Progress Bars with Bootstrap 3</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
          </div>
          <a href="bt_jumbotron.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_labels-and-badges.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>
                <h1>Bootstrap <span>Progress Bars</span></h1>
                <p class="summary">In this tutorial you will learn how to create progress bars using Bootstrap.</p>
                <h2>Creating Progress Bar with Bootstrap</h2>
                <p>Progress bars can be used for showing the progress of a task or action to the users. The following example will show you how to create a simple progress bar with vertical gradient.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab43a1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<div class="progress">
    <div class="progress-bar" style="width: 60%;">
        <span class="sr-only">60% Complete</span>
    </div>
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
				<p>To show to the progress status as a percentage label just remove the <code><a href="../info-html/ht_span-tag.php">&lt;span&gt;</a></code> with <code>.sr-only</code> class from within the progress bar as demonstrated in example above.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8f02.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<div class="progress">
    <div class="progress-bar" style="width: 60%;">
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
				<p>If you are showing percentage label you should also add a <code><a href="../info-css/style_min-width-property.php">min-width</a></code> to the progress bar to ensure that the label text remains readable even for low percentage, like this.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2ebc.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
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
                <h2>Creating Stripped Progress Bar</h2>
                <p>To create the stripped progress bar just add an extra class <code>.progress-striped</code> to the <code>.progress</code> base class, as shown in the example below:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabba6e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<div class="progress progress-striped">
    <div class="progress-bar" style="width: 60%;">
        <span class="sr-only">60% Complete</span>
    </div>
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
                <p>Similarly you can create the animated progress bar &mdash; just add the <code>.active</code> class to <code>.progress-stripped</code>. The <code>.active</code> class animates the stripes from right to left.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0069.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<div class="progress progress-striped active">
    <div class="progress-bar" style="width: 60%;">
        <span class="sr-only">60% Complete</span>
    </div>
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
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                            <p><strong>Warning:</strong> Due to lack of support for <a href="../des_css/stylel_animations.php">CSS3 animation</a> properties the animated progress bar is not supported in any versions of IE upto IE9. The stripped progress bar uses <a href="../des_css/stylel_gradients.php">CSS3 gradient</a> to create the striped effect which is not supported in IE7-8.</p>
                        </div>
                    </div>
                </div>
				<hr />
				<h2>Changing Progress Bar Value Dynamically</h2>
				<p>Static progress bars aren't very impressive. The following example will give you a rough idea of how to update the status of a Bootstrap progress bar dynamically using jQuery.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab79da.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <ul class="syntax-highlighter lead-zero scroll large">
                        	<li><pre><span class="cm-comment">&lt;!-- Progress bar HTML --&gt;</span></pre></li>
							<li><pre><span class="cm-tag">&lt;div</span> <span class="cm-attribute">class</span>=<span class="cm-string">"progress progress-striped active"</span><span class="cm-tag">&gt;</span></pre></li>
							<li><pre>    <span class="cm-tag">&lt;div</span> <span class="cm-attribute">class</span>=<span class="cm-string">"progress-bar"</span><span class="cm-tag">&gt;&lt;/div&gt;</span></pre></li>
							<li><pre><span class="cm-tag">&lt;/div&gt;</span></pre></li>
							<li><pre> </pre></li>
							<li><pre><span class="cm-comment">&lt;!-- jQuery Script --&gt;</span></pre></li>
							<li><pre><span class="cm-tag">&lt;script</span> <span class="cm-attribute">type</span>=<span class="cm-string">"text/javascript"</span><span class="cm-tag">&gt;</span></pre></li>
							<li><pre>    <span class="cm-keyword">var</span> <span class="cm-variable">i</span> = <span class="cm-number">0</span>;</pre></li>
							<li><pre>    <span class="cm-keyword">function</span> <span class="cm-variable">makeProgress</span>(){</pre></li>
							<li><pre>        <span class="cm-keyword">if</span>(<span class="cm-variable">i</span> &lt; <span class="cm-number">100</span>){</pre></li>
							<li><pre>            <span class="cm-variable">i</span> = <span class="cm-variable">i</span> + <span class="cm-number">1</span>;</pre></li>
							<li><pre>            <span class="cm-variable">$</span>(<span class="cm-string">".progress-bar"</span>).<span class="cm-property">css</span>(<span class="cm-string">"width"</span>, <span class="cm-variable">i</span> + <span class="cm-string">"%"</span>).<span class="cm-property">text</span>(<span class="cm-variable">i</span> + <span class="cm-string">" %"</span>);</pre></li>
							<li><pre>        }</pre></li>
							<li><pre>        <span class="cm-comment">// Wait for sometime before running this script again</span></pre></li>
							<li><pre>        <span class="cm-variable">setTimeout</span>(<span class="cm-string">"makeProgress()"</span>, <span class="cm-number">100</span>);</pre></li>
							<li><pre>    }</pre></li>
							<li><pre>    <span class="cm-variable">makeProgress</span>();</pre></li>
							<li><pre><span class="cm-tag">&lt;/script&gt;</span></pre></li>
                        </ul>	<textarea id="code6">

<!-- Progress bar HTML -->
<div class="progress progress-striped active">
    <div class="progress-bar"></div>
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
                <h2>Creating Stacked Progress Bar</h2>
                <p>You can also place multiple bars into the same progress bar to stack them.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab05c5.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<div class="progress">
    <div class="progress-bar progress-bar-success" style="width: 40%">
        <span class="sr-only">Program Files (40%)</span>
    </div>
    <div class="progress-bar progress-bar-warning" style="width: 25%">
        <span class="sr-only">Residual Files (25%)</span>
    </div>
    <div class="progress-bar progress-bar-danger" style="width: 15%">
        <span class="sr-only">Junk Files (15%)</span>
    </div>
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
                <h2>Progress Bars with Emphasis Classes</h2>
                <p>Bootstrap also provides some emphasis utility classes for progress bars that can be further used to convey meaning through color.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab370d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code6">

<div class="progress">
    <div class="progress-bar progress-bar-info" style="width: 20%">
        <span class="sr-only">20% Used</span>
    </div>
</div>
<div class="progress">
    <div class="progress-bar progress-bar-success" style="width: 40%">
        <span class="sr-only">40% Used</span>
    </div>
</div>
<div class="progress">
    <div class="progress-bar progress-bar-warning" style="width: 80%">
        <span class="sr-only">80% Used</span>
    </div>
</div>
<div class="progress">
    <div class="progress-bar progress-bar-danger" style="width: 90%">
        <span class="sr-only">90% Used</span>
    </div>
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
                <h2>Striped Progress Bars with Emphasis Classes</h2>
                <p>Similar to the solid colors, you can also create varied striped progress bars.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7aa1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code7">

<div class="progress progress-striped">
    <div class="progress-bar progress-bar-info" style="width: 20%">
        <span class="sr-only">20% Used</span>
    </div>
</div>
<div class="progress progress-striped">
    <div class="progress-bar progress-bar-success" style="width: 40%">
        <span class="sr-only">40% Used</span>
    </div>
</div>
<div class="progress progress-striped">
    <div class="progress-bar progress-bar-warning" style="width: 80%">
        <span class="sr-only">80% Used</span>
    </div>
</div>
<div class="progress progress-striped">
    <div class="progress-bar progress-bar-danger" style="width: 90%">
        <span class="sr-only">90% Used</span>
    </div>
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
                <div class="bottom-link clearfix">
                    <a href="bt_labels-and-badges.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_jumbotron.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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