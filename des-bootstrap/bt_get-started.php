
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="How to Use Bootstrap 4">
  <meta name="keywords" content="Bootstrap,Bootstrap4,how touse bootstrap,Use Bootstrap">
  <meta name="author" content="webschooltoday.com">
    <title>How to Use Bootstrap-4 - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Use Bootstrap 4</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
            </div>
            <a href="bt_grid-system.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="index.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Getting Started</span></h1>
                <p class="summary">In this tutorial you will learn how to create a web page using Bootstrap framework.</p>
				<h2>Getting Started with Bootstrap</h2>
                <p>In this tutorial you will learn how easy it is to create a web page using Bootstrap. But before begin, be sure to have a code editor and some working knowledge of HTML and CSS.</p>
				<p>If you're just starting out in the world of web development, <a href="../des-html/index.php">start learning from here &raquo;</a></p>				
                <p class="space">Well, let's get started creating our first Bootstrap powered web page.</p>
                <h2>Creating Your First Web Page with Bootstrap</h2>
                <p>Now we're going to create a basic Bootstrap template by including the Bootstrap CSS and JS files, as well as other JavaScript dependencies like jQuery and Popper.js via CDN.</p>
                <p>We recommend adding Bootstrap in your project via CDN (Content Delivery Network) because CDN offers performance benefit by reducing the loading time, since they are hosting the files on multiple servers spread across the globe so that when a user requests the file it will be served from the server nearest to them. We're also using the CDN links in our examples:</p>
				<p>Let's walk through the following steps. At the end of this tutorial, you'll have made a simple Bootstrap powered web page that displays "Hello world" message in your web browser.</p>
				<h3>Step 1: Creating a Basic HTML file</h3>
				<p>Open up your favorite code editor and create a new HTML file. Start with an empty window and type the following code and save it as "basic.php" on your desktop.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb0b1.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1" >

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Genral HTML File</title>
</head>
<body>
    <h1>Hello, India!</h1>
</body>
</html>

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
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"  style="background-color:#fad28c">
							<p><strong>Important:</strong> Always include the viewport <a href="../html-tutorial/html-meta.php"><code>&lt;meta&gt;</code></a> tag inside the <a href="../html-tutorial/html-head.php"><code>&lt;head&gt;</code></a> section of your document to enable touch zooming and ensure proper rendering on mobile devices.</p>
						</div>
					</div>
				</div>
				<h3>Step 2: Making this HTML File a Bootstrap Template</h3>
                <p>In order to make this plain HTML file a Bootstrap template, just include the Bootstrap CSS and JS files as well as required jQuery and Popper.js using their CDN links.</p>
                <p>You should include JavaScript files at the bottom of the page, right before the closing <code>&lt;/body&gt;</code> tag to improve the performance of your web pages, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab99f6.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2" >

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Basic Bootstrap Template</title>
    <!-- Bootstrap CSS file -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <h1>Hello, world!</h1>
    <!-- JS files: jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
				<p><strong>And we're all set!</strong> After adding the Bootstrap's CSS and JS files and the required jQuery and Popper.js library, we can begin to develop any site or application with the Bootstrap framework.</p>
                <p>The attributes <code>integrity</code> and <code>crossorigin</code> have been added to CDN links to implement <strong>Subresource Integrity</strong> (SRI). It is a security feature that enables you to mitigate the risk of attacks originating from compromised CDNs, by ensuring that the files your website fetches (from a CDN or anywhere) have been delivered without unexpected or malicious modifications. It works by allowing you to provide a cryptographic hash that a fetched file must match.</p>
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"style="background-color:#fad28c">
							<p><strong>Important:</strong> If the visitor to your website has already downloaded the Bootstrap's CSS and JS files from the same CDN while visiting the other sites, it will be loaded from the browser's cache instead of re-downloading, which leads to faster loading time.</p>
						</div>
					</div>
				</div>
                <h3>Step 3: Saving and Viewing the File</h3>
				<p>Now save the file on your desktop as "bt_template.php".</p>
				<p>To open this file in a web browser, navigate to it, then right click on it, and select your favorite web browser. Alternatively, you can open your browser and drag this file to it.</p>
				<div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585">
                            <p><strong>Raed Carefully:</strong> It is important that the extension <code>.php</code> is specified, some text editors, such as Notepad on Windows, will automatically save it as <code>.txt</code> otherwise.</p>
                        </div>
                    </div>
                </div>
                <hr />
				<h2>Downloading the Bootstrap Files</h2>
				<p>Alternatively, you can also download the Bootstrap's CSS and JS files from their official website and include in your project. There are two versions available for download, <strong>compiled Bootstrap</strong> and <strong>Bootstrap source</strong> files. You can <a href="https://getbootstrap.com/docs/4.3/getting-started/download/" target="_blank" rel="nofollow">download Bootstrap 4 files from here</a>.</p>
				<p>Compiled download contains compiled and minified version of CSS and JavaScript files for faster and easier web development. The compiled version however doesn't include any optional JavaScript dependencies such as jQuery and Popper.js. Whereas, the source download contains original source files for all CSS and JavaScript, along with a local copy of the docs.</p>
                <p>Download and unzip the compiled Bootstrap. Now if you look inside the folders you'll find it contains the compiled CSS and JS files (<code>bootstrap.*</code>), as well as the compiled and minified CSS and JS (<code>bootstrap.min.*</code>). Use the <code>bootstrap.min.css</code> and <code>bootstrap.min.js</code> files.</p>
                <p>Using the minified version of CSS and JS files will improve the performance of your website and saves the precious bandwidth because of lesser HTTP request and download size.</p>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box" style="background-color:#fad28c">
							<p><strong>Important:</strong> Please note that Bootstrap's JavaScript plugins require jQuery to be included. You can download the latest version of jQuery form here <a rel="nofollow" href="https://jquery.com/download/" target="_blank">https://jquery.com/download/</a>. You also need to include <a rel="nofollow" href="https://popper.js.org/" target="_blank">Popper.js</a> before Bootstrap's JS in order for tooltips to work!</p>
						</div>
					</div>
				</div>
                <div class="bottom-link clearfix">
                    <a href="index.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_grid-system.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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