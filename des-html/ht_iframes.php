
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Display a Web Page inside HTML iFrame">
	  <meta name="keywords" content="css,css3,How to Display a Web Page inside HTML iFrame">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Display a Web Page inside HTML iFrame - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Display a Web Page inside HTML iFrame</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="ht_doctypes.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="ht_forms.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML <span>iFrame</span></h1>
                <p class="summary">In this tutorial you will learn how to use an iframe to display a web page within another web page.</p>
                <h2>What is iframe</h2>
                <p>An iframe or inline frame is used to display external objects including other web pages within a web page. An iframe pretty much acts like a mini web browser within a web browser. Also, the content inside an iframe exists entirely independent from the surrounding elements.</p>
                <p>The basic syntax for adding an iframe to a web page can be given with:</p>
                <div class="shadow">
                    <div class="syntax">
                        <span class="tag">&lt;iframe <span class="attribute">src</span>="<i><span class="attribute-value">URL</span></i>"&gt;</span><span class="tag">&lt;/iframe&gt;</span>
                    </div>
                </div>
                <p>The URL specified in the <code>src</code> attribute points to the location of an external object or a web page.</p>
                <p>The following example display "hello.php" file inside an iframe in current document.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf1a3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
                        <iframe src="hello.php"></iframe>

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
                <h2>Setting Width and Height of an iFrame</h2>
                <p>The <code>height</code> and <code>width</code> attributes are used to specify the height and width of the iframe.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5856.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
                        <iframe src="hello.php" width="400" height="200"></iframe>

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code2"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>                    </div>
                </div>
                <!--End:Code box-->
                <!--ads-->
                
                <!--ads close-->
                <p>You can also use CSS to set the width and height of an iframe, as shown here:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5856.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">
                        <iframe src="hello.php" style="width: 400px; height: 200px;"></iframe>

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code3"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>                    </div>
                </div>
                <!--End:Code box-->
                <p>Please see the tutorial on <a href="ht_styles.php">HTML styles</a> to learn the methods of applying CSS to HTML elements.</p>
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The <code>width</code> and <code>height</code> attribute values are specified in pixels by default, but you can also set these values in percentage, such as 50%, 100% and so on. The default width of an iframe is 300 pixels, whereas the default height is 150 pixels.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <hr />
                <h2>Removing Default Frameborder</h2>
                <p>The iframe has a border around it by default. However, if you want to modify or remove the iframe borders, the best way is to use the CSS <a href="../info-css/css-border-property.php"><code>border</code></a> property.</p>
                <p>The following example will simply render the iframe without any borders.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba52a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        <iframe src="hello.php" style="border: none;"></iframe>

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code4"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>                    </div>
                </div>
                <!--End:Code box-->
                <p>Similarly, you can use the <code>border</code> property to add the borders of your choice to an iframe. The following example will render the iframe with 2 pixels blue border.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6238.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        <iframe src="hello.php" style="border: 2px solid blue;"></iframe>

     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code5"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>                    </div>
                </div>
                <!--End:Code box-->
                <hr />
                <h2>Using an iFrame as Link Target</h2>
                <p>An iframe can also be used as a target for the <a href="ht_links.php">hyperlinks</a>.</p>
                <p>An iframe can be named using the <code>name</code> attribute. This implies that when a link with a <code>target</code> attribute with that name as value is clicked, the linked resource will open in that iframe.</p>
                <p>Let's try out an example to understand how it basically works:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab01c3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

                        <iframe src="demo-page.php" name="myFrame"></iframe>
<p><a href="https://www.webschooltoday.com" target="myFrame">Open TutorialRepublic.com</a></p>
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
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="ht_forms.php" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="ht_doctypes.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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