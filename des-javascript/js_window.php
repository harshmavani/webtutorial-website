<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Window">
	  <meta name="keywords" content="javascript,js,JavaScript Window">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Window - WebSchool Today</title>
	 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Window</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_window-screen.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_dom-navigation.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Window</span></h1>
                <p class="summary">In this tutorial you will learn about the JavaScript window object.</p>
				<h2>The Window Object</h2>
				<p>The <code>window</code> object represents a window containing a DOM document. A window can be the main window, a frame set or individual frame, or even a new window created with JavaScript.</p>
				<p>If you remember from the preceding chapters we've used the <code>alert()</code> method in our scripts to show popup messages. This is a method of the <code>window</code> object.</p>
				<p>In the next few chapters we will see a number of new methods and properties of the <code>window</code> object that enables us to do things such as prompt user for information, confirm user's action, open new windows, etc. which lets you to add more interactivity to your web pages.</p>
				<hr />
				<h2>Calculating Width and Height of the Window</h2>
				<p>The <code>window</code> object provides the <code>innerWidth</code> and <code>innerHeight</code> property to find out the width and height of the browser window viewport (in pixels) including the horizontal and vertical scrollbar, if rendered. Here's is an example that displays the current size of the window on button click:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8aa3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        <script>
function windowSize(){
    var w = window.innerWidth;
    var h = window.innerHeight;
    alert("Width: " + w + ", " + "Height: " + h);
}
</script>
 
<button type="button" onclick="windowSize();">Get Window Size</button>
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
				<p>However, if you want to find out the width and height of the window excluding the scrollbars you can use the <code>clientWidth</code> and <code>clientHeight</code> property of any DOM element (like a <code>div</code>), as follow:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabcbae.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        <script>
function windowSize(){
    var w = document.documentElement.clientWidth;
    var h = document.documentElement.clientHeight;
    alert("Width: " + w + ", " + "Height: " + h);
}
</script>
 
<button type="button" onclick="windowSize();">Get Window Size</button>
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
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The <code>document.documentElement</code> object represents the root element of the document, which is the <a href="../info-html/html-html-tag.php"><code>&lt;html&gt;</code></a> element, whereas the <code>document.body</code> object represents the <a href="../info-html/html-body-tag.php"><code>&lt;body&gt;</code></a> element. Both are supported in all major browsers.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_dom-navigation.php" class="previous-page-bottom">Previous Page</a>
                    <a href="js_window-screen.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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