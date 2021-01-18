	<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta name="description" content="Learn how to use Bootstrap in your project and how to convert a simple HTML file into a Bootstrap template by including the Bootstrap CSS and JS files." />
	  <meta name="keywords" content="Bootstrap,Bootstrap3">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Use Bootstrap - WebSchool Today</title>
    <?php include "../links.php" ?>

<style type="text/css">
.structure{padding:0;border-radius:4px 4px 4px 4px;margin:15px 0}
.structure pre{line-height:20px;margin:0 25px;font-size:13px}
.structure pre code{color:#2F4959}
</style>
</head>
<body>
<div>
<div class="tital">How to Use Bootstrap</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
              </div>
              <a href="bt_grid-system.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="../twitter-bt_tutorial/index.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Getting Started</span></h1>
                <p class="summary">In this tutorial you'll learn how to create a basic Bootstrap template using the Bootstrap 3 compiled version.</p>
				<h2>Getting Started with Bootstrap</h2>
                <p>Here, you will learn how easy it is to create a web page using Bootstrap. Before begin, be sure to have a code editor and some working knowledge of HTML and CSS.</p>
				<p>If you're just starting out in web development, <a href="../des-html/index.php">start learning from here &raquo;</a></p>
				<p class="space">Well, let's get straight into it.</p>
				<h2>Downloading the Bootstrap Files</h2>
				<p>There are two versions available for download, <strong>compiled Bootstrap</strong> and <strong>Bootstrap source</strong> files. You can <a href="http://getbootstrap.com/getting-started/" target="_blank" rel="nofollow">download  Bootstrap files from here</a>.</p>
				<p>Compiled download contain compiled and minified version of CSS and JavaScript files as well as icons in font format for faster and easier web development, while the source contain original source files for all CSS and JavaScript, along with a local copy of the docs.</p>
                <p class="space">For the purpose of better understanding we'll focus on the compiled Bootstrap files. It saves your time because you don't have to bother every time including separate files for individual functionality. It will also increase the performance of your website and saves the precious bandwidth when you decided to move your site on production because of lesser HTTP request and download size since files are compiled and minified.</p>
				<h2>Understanding the File Structure</h2>
				<p>Once downloaded the compiled Bootstrap, unzip the compressed folder to see the structure. You'll find the following file structure and contents.</p>
				<div class="syntax structure">
<pre>
<code>
bootstrap/
&#124;&mdash;&mdash; css/
&#124;   &#124;&mdash;&mdash; bootstrap.css
&#124;   &#124;&mdash;&mdash; bootstrap.min.css
&#124;   &#124;&mdash;&mdash; bt_theme.css
&#124;   &#124;&mdash;&mdash; bt_theme.min.css
&#124;&mdash;&mdash; js/
&#124;   &#124;&mdash;&mdash; bootstrap.js
&#124;   &#124;&mdash;&mdash; bootstrap.min.js
&#124;&mdash;&mdash; fonts/
&#124;   &#124;&mdash;&mdash; glyphicons-halflings-regular.eot
&#124;   &#124;&mdash;&mdash; glyphicons-halflings-regular.svg
&#124;   &#124;&mdash;&mdash; glyphicons-halflings-regular.ttf
&#124;   &#124;&mdash;&mdash; glyphicons-halflings-regular.woff
</code>
</pre>
				</div>
				<p>As you can see compiled version of Bootstrap provides compiled CSS and JS files (<code>bootstrap.*</code>), as well as compiled and minified CSS and JS (<code>bootstrap.min.*</code>).</p>
                <p>There are four font files (<code>glyphicons-halflings-regular.*</code>) inside the fonts folder. These fonts file includes more than 250 icons from the Glyphicon Halflings set.</p>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box" style="background-color:#fad28c">
							<p><strong>Important:</strong> This is the most basic form of Bootstrap for quick usage in any web project. Please note that Bootstrap's JavaScript plugins require jQuery to be included. You can download the latest version of jQuery form here <a rel="nofollow" href="https://jquery.com/download/" target="_blank">https://jquery.com/download/</a></p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Creating Your First Web Page with Bootstrap</h2>
				<p>So far you have understood the structure and the purposes of Bootstrap files, now it's time to put Bootstrap into real use. In this section, we'll create a basic Bootstrap template that includes everything we mentioned in the file structure.</p>
				<p>Let's walk through the following steps. At the end of the tutorial, you will have made an HTML file that displays "Hello world" message in your web browser.</p>
				<h3>Step 1: Creating a Basic HTML file</h3>
				<p>Open up your favorite code editor and create a new HTML file. Start with an empty window and type the following code and save it as "basic.php" on your desktop.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba037.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basic HTML File</title>
</head>
<body>
    <h1>Hello, world!</h1>
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
						<div class="tip-box" style="background-color:#fad28c">
							<p><strong>Important:</strong> Always include the viewport <code><a href="../des-html/html-meta.php">&lt;meta&gt;</a></code> tag inside the <code><a href="../des-html/ht_head.php">&lt;head&gt;</a></code> section of your document to enable touch zooming and ensure proper rendering on mobile devices. Also include the <code>X-UA-Compatible</code> meta tag with <code>edge</code> mode, which tells the Internet Explorer to display the webpage in the highest mode available.</p>
						</div>
					</div>
				</div>
				<h3>Step 2: Making this HTML File a Bootstrap Template</h3>
				<p>To make this HTML file a Bootstrap template, just include the appropriate Bootstrap CSS and JS files. You should include JavaScript files at the bottom of the page &mdash; before closing of the <code><a href="../info-html/ht_body-tag.php">&lt;body&gt;</a></code> tag (i.e. <code>&lt;/body&gt;</code>) to improve the performance of your web pages.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd364.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basic Bootstrap Template</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
</head>
<body>
    <h1>Hello, world!</h1>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
				<p><strong>And we're all set!</strong> after adding the Bootstrap's CSS and JS files and the required jQuery library, we can begin to develop any site or application with Bootstrap framework.</p>
				<h3>Step 3: Saving the file</h3>
				<p>Now save the file on your desktop as "bt_template.php".</p>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box" style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> It is important that the extension <code>.php</code> is specified &mdash; some text editors, such as Notepad, will automatically save it as <code>.txt</code> otherwise.</p>
						</div>
					</div>
				</div>
				<p>To open the file in a browser. Navigate to your file then double click on it. It will open in your default Web browser. (If it does not, open your browser and drag the file to it.)</p>
				<hr />
				<h2>Including Bootstrap's Files via CDN</h2>
				<p>You can also include the Bootstrap's CSS and JavaScript files as well as the jQuery library JavaScript file in your document using the freely available CDN (Content Delivery Network) links, if you don't want to download and host the Bootstrap or jQuery yourself.</p>
				<p>CDNs can offer a performance benefit by reducing the loading time, because they are hosting the Bootstrap's files on multiple servers spread across the globe and when a user requests the file, it will be served from the server nearest to them.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba86f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Basic Bootstrap Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
    <h1>Hello, world!</h1>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

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
				<p>In the above example, we've included the compiled and minified version of Bootstrap's CSS and JavaScript files as well as the necessary jQuery library using the CDN links. You'll also find these CDN links in most of the practice examples code throughout this site.</p>
				<p>The attributes <code>integrity</code> and <code>crossorigin</code> have been added to Bootstrap CDN to implement <strong>Subresource Integrity</strong> (SRI). It is a security feature that enables you to mitigate the risk of attacks originating from compromised CDNs, by ensuring that the files your website fetches (from a CDN or anywhere) have been delivered without unexpected manipulation. It works by allowing you to provide a cryptographic hash that a fetched file must match.</p>
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box" style="background-color:#fad28c">
							<p><strong>Important:</strong> If the visitor to your site has already downloaded the Bootstrap's files from the same CDN while visiting the other sites, it will be loaded from the browser's cache instead of re-downloading, which leads to faster loading time.</p>
						</div>
					</div>
				</div>
                <div class="bottom-link clearfix">
                    <a href="../des-bootstrap/index.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
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