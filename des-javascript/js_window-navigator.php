<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Window Navigator">
	  <meta name="keywords" content="javascript,js,JavaScript Window Navigator">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Window Navigator - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Window Navigator</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_dialog-boxes.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_window-history.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript Window <span>Navigator</span></h1>
                <p class="summary">In this tutorial you will learn about the JavaScript window navigator object.</p>
				<h2>The Navigator Object</h2>
				<p>The navigator property of a window (i.e. <code>window.navigator</code>) is a reference to a Navigator object; it is a read-only property which contains information about the user's browser.</p>
				<p>Since Window is a global object and it is at the top of the scope chain, so properties of the Window object such as <code>window.navigator</code> can be accessed without <code>window.</code> prefix, for example <code>window.navigator.language</code> can be written as <code>navigator.language</code>. </p>
				<p class="space">The following section will show you how to get various information about user's browser.</p>
				<h2>Detect Whether the Browser is Online or Offline</h2>
				<p>You can use the <code>navigator.onLine</code> property to detect whether the browser (or, application) is online or offline. This property returns a Boolean value <code>true</code> meaning online, or <code>false</code> meaning offline.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc754.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        <script>
function checkConnectionStatus() {
    if(navigator.onLine) {
        alert("Application is online.");
    } else {
        alert("Application is offline.");
    }
}
</script>
 
<button type="button" onclick="checkConnectionStatus();">Check Connection Status</button>
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
				<p>Browser fires online and offline events when a connection is establish or lost. You can attach handler functions to these events in order to customize your application for online and offline scenarios.</p>
				<p>Let's take a look at the following JavaScript code to see how this works:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0f2a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        <script>
function goOnline() {
    // Action to be performed when your application goes online
    alert("And we're back!");
}

function goOffline() {
    // Action to be performed when your application goes offline
    alert("Hey, it looks like you're offline.");
}

// Attaching event handler for the online event
window.addEventListener("online", goOnline);

// Attaching event handler for the offline event
window.addEventListener("offline", goOffline);
</script>

<p>Toggle your internet connection on/off to see how it works.</p>
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
				<p>The <code>goOffline()</code> function in the above example will be called automatically by the browser whenever the connection goes offline, whereas the <code>goOnline()</code> function will be called automatically by the browser when the connection status changes to online.</p>
				<hr />
				<h2>Check Whether Cookies Are Enabled or Not</h2>
				<p>You can use the <code>navigator.cookieEnabled</code> to check whether <a href="js_cookies.php">cookies</a> are enabled in the user's browser or not. This property returns a Boolean value <code>true</code> if cookies are enabled, or <code>false</code> if it isn't.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab81bf.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        <script>
function checkCookieEnabled() {
    if(navigator.cookieEnabled) {
        alert("Cookies are enabled in your browser.");
    } else {
        alert("Cookies are disabled in your browser.");
    }
}
</script>
 
<button type="button" onclick="checkCookieEnabled();">Check If Cookies are Enabled</button>
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
				<!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> You should use the <code>navigator.cookieEnabled</code> property to determine whether the cookies are enabled or not before <a href="js_cookies.php">creating or using cookies</a> in your JavaScript code.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
				<hr />
				<h2>Detecting the Browser Language</h2>
				<p>You can use the <code>navigator.language</code> property to detect the language of the browser UI.</p>
				<p>This property returns a string representing the language, e.g. "en", "en-US", etc.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba799.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        <script>
function checkLanguage() {
    alert("Your browser's UI language is: " + navigator.language);
}
</script>
 
<button type="button" onclick="checkLanguage();">Check Language</button>
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
				<hr />
				<h2>Getting Browser Name and Version Information</h2>
				<p>The Navigator object has five main properties that provide name and version information about the user's browser. The following list provides a brief overview of these properties:</p>
				<ul>
					<li><code>appName</code> &mdash; Returns the name of the browser. It always returns "Netscape", in any browser.</li>
					<li><code>appVersion</code> &mdash; Returns the version number and other information about the browser.</li>
					<li><code>appCodeName</code> &mdash; Returns the code name of the browser. It returns "Mozilla", for all browser.</li>
					<li><code>userAgent</code> &mdash; Returns the user agent string for the current browser. This property typically contains all the information in both <code>appName</code> and <code>appVersion</code>.</li>
					<li><code>platform</code> &mdash; Returns the platform on which browser is running (e.g. "Win32", "WebTV OS", etc.)</li>
				</ul>
				<p>As you can see from the above descriptions, the value returned by these properties are misleading and unreliable, so don't use them to determine the user's browser type and version.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabfe01.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        <script>
function getBrowserInformation() {
	var info = "\n App Name: " + navigator.appName;
	   info += "\n App Version: " + navigator.appVersion;
	   info += "\n App Code Name: " + navigator.appCodeName;
	   info += "\n User Agent: " + navigator.userAgent;
	   info += "\n Platform: " + navigator.platform;

    alert("Here're the information related to your browser: " + info);
}
</script>
 
<button type="button" onclick="getBrowserInformation();">Get Browser Information</button>
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
				<h2>Check Whether the Browser is Java Enabled or Not</h2>
				<p>You&thinsp;can&thinsp;use&thinsp;the method <code>javaEnabled()</code> to check whether the current browser is Java-enabled or not.</p>
				<p>This method simply indicates whether the preference that controls Java is on or off, it does not reveal whether the browser offers Java support or Java is installed on the user's system or not.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1d04.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">
                        <script>
function checkJavaEnabled() {
    if(navigator.javaEnabled()) {
        alert("Your browser is Java enabled.");
    } else {
        alert("Your browser is not Java enabled.");
    }
}
</script>
 
<button type="button" onclick="checkJavaEnabled();">Check If Java is Enabled</button>
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
                    <a href="js_window-history.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_dialog-boxes.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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