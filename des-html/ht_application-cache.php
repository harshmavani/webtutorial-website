
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Creating Offline Application with HTML5 App Cache">
	  <meta name="keywords" content="css,css3,Creating Offline Application with HTML5 App Cache">
	  <meta name="author" content="webschooltoday.com">
    <title>Creating Offline Application with HTML5 App Cache - WebSchool Today</title>
	<?php include "../links.php" ;?>
</head>
<body>
<div>
<div class="tital">Creating Offline Application with HTML5 App Cache</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    <script type="text/javascript">
	atOptions = {
		'key' : '9049f2d3c3d0cdd985d2d490bad266d3',
		'format' : 'iframe',
		'height' : 50,
		'width' : 320,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.displaycontentnetwork.com/9049f2d3c3d0cdd985d2d490bad266d3/invoke.js"></scr' + 'ipt>');
</script>
                    
        </div>
<a href="htl_web-workers.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

            	<a href="htl_web-storage.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML5 <span>Application Cache</span></h1>
                <p class="summary">In this tutorial you will learn how to create offline applications with HTML5 caching feature.</p>
				<h2>What is Application Cache?</h2>
				<p>Typically most web-based applications will work only if you're online. But HTML5 introduces an application cache mechanism that allows the browser to automatically save the HTML file and all the other resources that needs to display it properly on the local machine, so that the browser can still access the web page and its resources without an internet connection.</p>
				<p>Here are some advantages of using the HTML5 application cache feature:</p>
				<ul>
					<li><strong>Offline browsing</strong> &mdash; Users can use the application even when they're offline or there are unexpected disruptions in the network connection.</li>
					<li><strong>Improve performance</strong> &mdash; Cached resources load directly from the user's machine rather than the remote server hence web pages load faster and performing better.</li>
					<li><strong>Reduce HTTP request and server load</strong> &mdash; The browser will only have to download the updated/changed resources from the remote server that minimize the HTTP requests and saves precious bandwidth as well as reduce the load on the web server.</li>
				</ul>
				<!--Tip Box-->
                <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> The HTML5's application cache feature is supported in all major modern web browsers like Firefox, Chrome, Opera, Safari and Internet Explorer 10 and above.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
				<hr />
				<!--ads-->
				<div>
				    <script type="text/javascript">
	atOptions = {
		'key' : '25484e9e29be3f9c30cd9a00ccde11ec',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.displaycontentnetwork.com/25484e9e29be3f9c30cd9a00ccde11ec/invoke.js"></scr' + 'ipt>');
</script>
				</div>
				<!--ads close-->
				<h2>Caching Files with a Manifest</h2>
				<p>To cache the files for offline uses, you need to complete the following steps:</p>
				<h3>Step 1: Create a Cache Manifest File</h3>
				<p>A manifest is a special text file that tells the browsers what files to store, what files not to store, and what files to replace with something else. The manifest file always starts with the words <code>CACHE&nbsp;MANIFEST</code> (in uppercase). Here is an example of a simple manifest file:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                    <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/downloads/htl_cache-manifest-file.zip" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
					<textarea id="code1">
					CACHE MANIFEST
# v1.0 : 10-08-2014
 
CACHE:
# pages
index.php
 
# styles & scripts
css/theme.css
js/jquery.min.js
js/default.js
 
# images
/favicon.ico
images/logo.png
 
NETWORK:
login.php
 
FALLBACK:
/ /offline.php
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
				<h2>Explanation of code</h2>
				<p>You might think what that code was all about. OK, let's get straight into it. A manifest file can have three distinct sections: CACHE, NETWORK, and FALLBACK.</p>
				<ul>
					<li>Files listed under the <code>CACHE:</code> section header (or immediately after the <code>CACHE MANIFEST</code> line) are explicitly cached after they're downloaded for the first time.</li>
					<li>Files listed under the <code>NETWORK:</code> section header are white-listed resources that are never cached and aren't available offline. It means users can only access <code>login.php</code> page when they'r online.</li>
					<li>The <code>FALLBACK:</code> section specifies fallback pages the browser should use in case the connection to the server cannot be established. Each entry in this section lists two URIs — first is the primary resource, the second is the fallback. For example, in our case <code>offline.php</code> page will be displayed if the user is offline. Also, both URIs must be from the same origin as the manifest file.</li>
					<li>Lines starting with a hash symbol (<code>#</code>) are comment lines.</li>
				</ul>
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> If an application cache exists, the browser loads the document and its associated resources directly from the cache, without accessing the network. After that browser checks to see whether the manifest file has been updated on the server, and if it has been updated, the browser downloads the new version of the manifest and the resources listed in it.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<!--Warning box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab warning-icon" title="Warning"><i></i></div>
						<div class="warning-box">
							<p><strong>Warning:</strong> Do not specify the manifest file itself in the cache manifest file,&thinsp;otherwise it will be nearly impossible to inform the browser a new manifest is available.</p>
						</div>
					</div>
				</div>
				<!--End:Warning box-->
				<hr />
				<h2>Step 2: Using Your Cache Manifest File</h2>
				<p>After creating, upload your cache manifest file on the web server &mdash; make sure the web server is configured to serve the manifest files with the MIME type <code>text/cache-manifest</code>.</p>
				<p>Now to put your cache manifest into effect, you need enable it in your web pages, by adding the manifest attribute to the root <a href="../info-html/ht_ht_tag.php"><code>&lt;html&gt;</code></a> element, as shown below:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
						<!DOCTYPE html>
<html lang="en" manifest="example.appcache">
<head>
    <title>Using the Application Cache</title>
</head>
<body>
    <!--The document content will be inserted here-->
</body>
</html>
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
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> On the Apache web servers, the MIME type for the manifest (<code>.appcache</code>) files can be set by adding <code>AddType text/cache-manifest .appcache</code> to a <code>.htaccess</code> file within the root directory of the application, or the same directory as the application.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="htl_web-storage.php" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="htl_web-workers.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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