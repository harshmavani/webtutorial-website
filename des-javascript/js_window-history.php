<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Window History">
	  <meta name="keywords" content="javascript,js,JavaScript Window History">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Window History - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Window History</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_window-navigator.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_window-location.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript Window <span>History</span></h1>
                <p class="summary">In this tutorial you will learn about the JavaScript window history object.</p>
				<h2>The History Object</h2>
				<p>The history property of the Window object refers to the History object. It contains the browser session history, a list of all the pages visited in the current frame or window.</p>
				<p>Since Window is a global object and it is at the top of the scope chain, so properties of the Window object i.e. <code>window.history</code> can be accessed without <code>window.</code> prefix, for example <code>window.history.length</code> can be written as <code>history.length</code>. </p>
				<p class="space">The following section will show you how to get the information of user's browsing history. However, for security reasons scripts are not allowed to access the stored URLs.</p>
				<h2>Getting the Number of Pages Visited</h2>
				<p>The <code>window.history.length</code> property can be used to get the number of pages in the session history of the browser for the current window. It also includes the currently loaded page.</p>
				<p>You can use this property to find out how many pages a user has visited during the current browser session, as demonstrated in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe0a7.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        <script>
function getViews() {
    alert("You've accessed " + history.length + " web pages in this session.");
}
</script>
 
<button type="button" onclick="getViews();">Get Views Count</button>
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
				<h2>Going Back to the Previous Page</h2>
				<p>You can use the <code>back()</code> method of the History object i.e. <code>history.back()</code> to go back to the previous page in session history. It is same as clicking the browser's back button.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        <script>
function goBack() {
    window.history.back();
}
</script>
 
<button type="button" onclick="goBack();">Go Back</button>
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
                <script>
                function goBack() {
                    window.history.back();
                }
                </script>
				<p>If your browser back button is active then clicking this <a href="javascript:void(0);" onclick="goBack();">Go Back</a> link takes you one step back.</p>
				<hr />
				<h2>Going Forward to the Next Page</h2>
				<p>You can use the <code>forward()</code> method of the History object i.e. <code>history.forward()</code> to go forward to the next page in session history. It is same as clicking the browser's forward button.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        <script>
function goForward() {
    window.history.forward();
}
</script>
 
<button type="button" onclick="goForward();">Go Forward</button>
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
                <script>
                function goForward() {
                    window.history.forward();
                }
                </script>
				<p>If your browser forward button is active then clicking this <a href="javascript:void(0);" onclick="goForward();">Go Forward</a> link takes you one step forward.</p>
				<hr />
				<h2>Going to a Specific Page</h2>
				<p>You can also load specific page from the session history using the <code>go()</code> method of the History object i.e. <code>history.go()</code>. This method takes an integer as a parameter. A negative integer moves backward in the history, and a positive integer moves forward in the history.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" class="try-btn disabled" title="Disabled">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        window.history.go(-2);  // Go back two pages
window.history.go(-1); // Go back one page
window.history.go(0);  // Reload the current page
window.history.go(1);  // Go forward one page
window.history.go(2);  // Go forward two pages
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
				<!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> If you attempt to access the page that does not exist in the window's history then the methods <code>back()</code>, <code>forward()</code> and <code>go()</code> will simply do nothing.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_window-location.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_window-navigator.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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