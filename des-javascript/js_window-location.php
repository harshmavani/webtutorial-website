<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Window Location">
	  <meta name="keywords" content="javascript,js,JavaScript Window Location">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Window Location - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Window Location</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_window-history.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_window-screen.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript Window <span>Location</span></h1>
                <p class="summary">In this tutorial you will learn about the JavaScript window location object.</p>
				<h2>The Location Object</h2>
				<p>The location property of a window (i.e. <code>window.location</code>) is a reference to a Location object; it represents the current URL of the document being displayed in that window.</p>
				<p class="space">Since window object is at the top of the scope chain, so properties of the <code>window.location</code> object can be accessed without <code>window.</code> prefix, for example <code>window.location.href</code> can be written as <code>location.href</code>. The following section will show you how to get the URL of page as well as hostname, protocol, etc. using the location object property of the window object.</p>
				<h2>Getting the Current Page URL</h2>
				<p>You can use the <code>window.location.href</code> property to get the entire URL of the current page.</p>
				<p>The following example will display the complete URL of the page on button click:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc518.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        <script>
function getURL() {
    alert("The URL of this page is: " + window.location.href);
}
</script>
 
<button type="button" onclick="getURL();">Get Page URL</button>
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
				<h2>Getting Different Part of a URL</h2>
				<p>Similarly, you can use other properties of the location object such as <code>protocol</code>, <code>hostname</code>, <code>port</code>, <code>pathname</code>, <code>search</code>, etc. to obtain different part of the URL.</p>
				<p>Try out the following example to see how to use the location property of a window.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0e6d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        // Prints complete URL
document.write(window.location.href);
  
// Prints protocol like http: or https:
document.write(window.location.protocol); 
 
// Prints hostname with port like localhost or localhost:3000
document.write(window.location.host);
  
// Prints hostname like localhost or www.example.com
document.write(window.location.hostname);
 
// Prints port number like 3000
document.write(window.location.port);
  
// Prints pathname like /products/search.php
document.write(window.location.pathname); 
 
// Prints query string like ?q=ipad
document.write(window.location.search);
 
// Prints fragment identifier like #featured
document.write(window.location.hash);
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
                            <p><strong>Read Carefully:</strong> When you visit a website, you're always connecting to a specific port (e.g. http://localhost:3000). However, most browsers will simply not display the default port numbers, for example, 80 for HTTP and 443 for HTTPS.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<hr />
				<h2>Loading New Documents</h2>
				<p>You can use the <code>assign()</code> method of the location object i.e. <code>window.location.assign()</code> to load another resource from a URL provided as parameter, for example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1d4f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        <script>
function loadHomePage() {
    window.location.assign("https://www.webschooltoday.com");
}
</script>
 
<button type="button" onclick="loadHomePage();">Load Home Page</button>
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
				<p>You can also use the <code>replace()</code> method to load new document which is almost the same as <code>assign()</code>. The difference is that it doesn't create an entry in the browser's history, meaning the user won't be able to use the back button to navigate to it. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab222a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        <script>
function loadHomePage(){
    window.location.replace("https://www.webschooltoday.com");
}
</script>
 
<button type="button" onclick="loadHomePage();">Load Home Page</button>
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
				<p>Alternatively, you can use the <code>window.location.href</code> property to load new document in the window. It produce the same effect as using <code>assign()</code> method. Here's is an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab042a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        <script>
function loadHomePage() {
    window.location.href = "https://www.webschooltoday.com";
}
</script>
 
<button type="button" onclick="loadHomePage();">Load Home Page</button>
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
				<h2>Reloading the Page Dynamically</h2>
				<p>The <code>reload()</code> method can be used to reload the current page dynamically.</p>
				<p>You can optionally specify a Boolean parameter <code>true</code> or <code>false</code>. If the parameter is <code>true</code>, the method will force the browser to reload the page from the server. If it is <code>false</code> or not specified, the browser may reload the page from its cache. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabff32.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

                        <script>
function forceReload() {
    window.location.reload(true);
}
</script>
 
<button type="button" onclick="forceReload();">Reload Page</button>
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
				<!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The result of calling <code>reload()</code> method is different from clicking browser's Reload/Refresh button. The <code>reload()</code> method clears form control values that otherwise might be retained after clicking the Reload/Refresh button in some browsers.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_window-screen.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_window-history.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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