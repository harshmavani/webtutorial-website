<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Beginning Web Development with jQuery">
	  <meta name="keywords" content="jquery,jq,js,Beginning Web Development with jQuery">
	  <meta name="author" content="webschooltoday.com">
    <title>Beginning Web Development with jQuery - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Beginning Web Development with jQuery</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_syntax.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="index.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery <span>Getting Started</span></h1>
				<p class="summary">In this tutorial you will learn how to make a jQuery powered web page.</p>
				<h2>Downloading jQuery</h2>
				<p>To get started, first download a copy of jQuery and include it in your document. There are two versions of jQuery available for downloading &mdash; <em>compressed</em> and <em>uncompressed</em>.</p>
				<p>The uncompressed file is best suited for development or debugging; while, the minified and compressed file is recommended for production because it saves the precious bandwidth and improves the performance due to small file size.</p>
				<p>You can download jQuery from here: <a href="https://jquery.com/download/" target="_blank" rel="nofollow">https://jquery.com/download/</a></p>
				<p>Once you've downloaded the jQuery file you can see it has <code>.js</code> extension, because the jQuery is just a JavaScript library, therefore you can include the jQuery file in your HTML document with the <a href="../info-html/html-script-tag.php"><code>&lt;script&gt;</code></a> element just like you include normal JavaScript files.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf3a9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Simple HTML Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jq_1.11.3.min.js"></script>
</head>
<body>
    <h1>Hello, World!</h1>
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
				<p>Always include the jQuery file before your custom scripts; otherwise, the jQuery APIs will not be available when your jQuery code attempts to access it.</p>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> As you can see we've skipped the attribute <code>type="text/javascript"</code> inside the <a href="../info-html/html-script-tag.php"><code>&lt;script&gt;</code></a> tag. Because this is not required in HTML5. JavaScript is the default scripting language in HTML5 and in all modern browsers. However, you can still use this to make the code more explicable for the users.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Including jQuery from CDN</h2>
				<p>Alternatively, you can include jQuery in your document through freely available CDN (Content Delivery Network) links, if you don't want to download and host jQuery yourself.</p>
				<p>CDNs can offer a performance benefit by reducing the loading time, because they are hosting jQuery on multiple servers spread across the globe and when a user requests the file, it will be served from the server nearest to them.</p>
				<p>This also offers an advantage that if the visitor to your webpage has already downloaded a copy of jQuery from the same CDN while visiting other sites, it won't have to be re-downloaded since it is already there in the browser's cache.</p>
				<h3>jQuery's CDN provided by MaxCDN</h3>
				<div class="shadow">
					<div class="syntax"><span class="tag">&lt;script <span class="attribute">src</span>="<span class="attribute-value">https://code.jquery.com/jq_1.12.4.min.js</span>"&gt;</span><span class="tag">&lt;/script&gt;</span></div>
				</div>
				<p>You can also include jQuery through <a rel="nofollow" href="https://developers.google.com/speed/libraries/#jquery" target="_blank">Google</a> and <a rel="nofollow" href="http://www.asp.net/ajax/cdn#jQuery_Releases_on_the_CDN_0" target="_blank">Microsoft</a> CDN's.</p>
				<hr />
				<h2>Creating Your First jQuery Powered Web Page</h2>
				<p>So far you have understood the purposes of jQuery library as well as how to include this in your document, now it's time to put jQuery into real use.</p>
				<p>In this section, we will perform a simple jQuery operation by changing the color of the heading text from the default black color to red.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1dd1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code2">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My First jQuery Powered Web Page</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jq_1.11.3.min.js"></script>
    <script>
        $(document).ready(function(){
            $("h1").css("color", "#0088ff");
        });
    </script>
</head>
<body>
    <h1>Hello, World!</h1>
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
				<p>In the above example we've performed a simple jQuery operation by changing the color of the heading i.e. the <a href="../des-html/html-headings.php"><code>&lt;h1&gt;</code></a> element using the jQuery element selector and <code>css()</code> method when the document is ready which is known as document ready event. We'll learn about jQuery selectors, events and methods in upcoming chapters.</p>
				<div class="bottom-link clearfix">
					<a href="index.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_syntax.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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