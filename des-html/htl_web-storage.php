
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Use HTML5 localStorage and sessionStorage">
	  <meta name="keywords" content="css,css3,How to Use HTML5 localStorage and sessionStorage">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Use HTML5 localStorage and sessionStorage - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to use HTML5 local and session storage feature to store data on the user's computer in a fast and secure manner." />
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Use HTML5 localStorage and sessionStorage</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="htl_application-cache.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

            	<a href="htl_video.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML5 <span>Web Storage</span></h1>
                <p class="summary">In this tutorial you will learn how to use HTML5 web storage feature to store data on user's browser.</p>
				<h2>What is Web Storage?</h2>
				<p>The HTML5's web storage feature lets you store some information locally on the user's computer, similar to cookies, but it is faster and much better than cookies. However, web storage is no more secure than cookies. Please check out the tutorial on <a href="../php-tutorial/php-cookies.php">PHP cookies</a> to learn more about cookies.</p>
				<p>The information stored in the web storage isn't sent to the web server as opposed to the cookies where data sent to the server with every request. Also, where cookies let you store a small amount of data (nearly 4KB), the web storage allows you to store up to 5MB of data.</p>
				<p>There are two types of web storage, which differ in scope and lifetime:</p>
				<ul>
					<li><strong>Local storage</strong> &mdash; The local storage uses the <code>localStorage</code> object to store data for your entire website on a <em>permanent basis</em>. That means the stored local data will be available on the next day, the next week, or the next year unless you remove it.</li>
					<li><strong>Session storage</strong> &mdash; The session storage uses the <code>sessionStorage</code> object to store data on a <em>temporary basis</em>, for a single browser window or tab. The data disappears when session ends i.e. when the user closes that browser window or tab.</li>
				</ul>
				<!--Tip Box-->
                <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> The HTML5's web storage feature is supported in all major modern web browsers like Firefox, Chrome, Opera, Safari and Internet Explorer 8 and above.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
				<hr />
				<h2>The localStorage Object</h2>
				<p>As stated earlier, the localStorage object stores the data with no expiration date. Each piece of data is stored in a key/value pair. The key identifies the name of the information (like 'first_name'), and the value is the value associated with that key (say 'Peter'). Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5ad3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        <script>
// Check if the localStorage object exists
if(localStorage) {
    // Store data
    localStorage.setItem("first_name", "Peter");
    
    // Retrieve data
    alert("Hi, " + localStorage.getItem("first_name"));
} else {
    alert("Sorry, your browser do not support local storage.");
}
</script>
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
				<h3>Example explained:</h3>
				<p>The above JavaScript code has the following meaning:</p>
				<ul>
					<li><strong>localStorage.setItem(key, value)</strong> stores the value associated with a key.</li>
					<li><strong>localStorage.getItem(key)</strong> retrieves the value associated with the key.</li>
				</ul>
				<p>You can also remove a particular item from the storage if it exists, by passing the key name to the <code>removeItem()</code> method, like <code>localStorage.removeItem("first_name")</code>.</p>
				<p>However, if you want to remove the complete storage use the <code>clear()</code> method, like <code>localStorage.clear()</code>. The <code>clear()</code> method takes no arguments, and simply clears all key/value pairs from localStorage at once, so think carefully before you using it.</p>
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> The web storage data (both <code>localStorage</code> and <code>sessionStorage</code>) will not be available between different browsers, for example the data stored in Firefox browser will not available in Google Chrome, Safari, Internet Explorer or other browsers.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>The sessionStorage Object</h2>
				<p>The <code>sessionStorage</code> object work in the same way as <code>localStorage</code>, except that it stores the data only for one session i.e. the data remains until the user closes that window or tab.</p>
				<p>Let's try out the following example to understand how it basically works:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab989a.v" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        <script>
// Check if the sessionStorage object exists
if(sessionStorage) {
    // Store data
    sessionStorage.setItem("last_name", "Parker");
    
    // Retrieve data
    alert("Hi, " + localStorage.getItem("first_name") + " " + sessionStorage.getItem("last_name"));
} else {
    alert("Sorry, your browser do not support session storage.");
}
</script>
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
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="htl_video.php" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="htl_application-cache.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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