<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Force Download Files Using PHP">
	  <meta name="keywords" content="php,php basic,How to Force Download Files Using PHP">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Force Download Files Using PHP - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Force Download Files Using PHP</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <a href="bp_cookies.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_file-upload.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>File Download</span></h1>
                <p class="summary">In this tutorial you will learn how to force download a file using PHP.</p>
                <h2>Downloading Files with PHP</h2>
                <p>Normally, you don't necessarily need to use any server side scripting language like PHP to download images, zip files, pdf documents, exe files, etc. If such kind of file is stored in a public accessible folder, you can just create a hyperlink pointing to that file, and whenever a user click on the link, browser will automatically downloads that file.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbe57-2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

&lt;a href="downloads/test.zip"&gt;Download Zip file&lt;/a&gt;
&lt;a href="downloads/masters.pdf"&gt;Download PDF file&lt;/a&gt;
&lt;a href="downloads/sample.jpg"&gt;Download Image file&lt;/a&gt;
&lt;a href="downloads/setup.exe"&gt;Download EXE file&lt;/a&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code1"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
				<p>Clicking a link that points to a PDF or an Image file will not cause it to download to your hard drive directly. It will only open the file in your browser. Further you can save it to your hard drive. However, zip and exe files are downloaded automatically to the hard drive by default.</p>
				<hr />
				<h2>Forcing a Download Using PHP</h2>
				<p>You can force images or other kind of files to download directly to the user's hard drive using the PHP <code>readfile()</code> function. Here we're going to create a simple image gallery that allows users to download the image files from the browser with a single mouse click.</p>
				<p>Let's create a file named "image-gallery.php" and place the following code inside it.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd58d.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
&lt;meta charset="UTF-8"&gt;
&lt;title&gt;Simple Image Gallery&lt;/title&gt;
&lt;style type="text/css"&gt;
    .img-box{
        display: inline-block;
        text-align: center;
        margin: 0 15px;
    }
&lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;?php
    // Array containing sample image file names
    $images = array("kites.jpg", "balloons.jpg");
    
    // Loop through array to create image gallery
    foreach($images as $image){
        echo '&lt;div class="img-box"&gt;';
            echo '&lt;img src="images/' . $image . '" width="200" alt="' .  pathinfo($image, PATHINFO_FILENAME) .'"&gt;';
            echo '&lt;p&gt;&lt;a href="download.php?file=' . urlencode($image) . '"&gt;Download&lt;/a&gt;&lt;/p&gt;';
        echo '&lt;/div&gt;';
    }
    ?&gt;
&lt;/body&gt;
&lt;/html&gt;

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
				<p>If you see the above example code carefully, you'll find the download link pints to a "download.php" file, the URL also contains image file name as a query string. Also, we've used PHP <code>urlencode()</code> function to encode the image file names so that it can be safely passed as URL parameter, because file names may contain URL unsafe characters.</p>
				<p>Here's the complete code of "download.php" file, which force image download.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

&lt;?php
if(isset($_REQUEST["file"])){
    // Get parameters
    $file = urldecode($_REQUEST["file"]); // Decode URL-encoded string

    /* Test whether the file name contains illegal characters
    such as "../" using the regular expression */
    if(preg_match('/^[^.][-a-z0-9_.]+[a-z]$/i', $file)){
        $filepath = "images/" . $file;

        // Process download
        if(file_exists($filepath)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filepath));
            flush(); // Flush system output buffer
            readfile($filepath);
            die();
        } else {
            http_response_code(404);
	        die();
        }
    } else {
        die("Invalid file name!");
    }
}
?&gt;

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
				<p>Similarly, you can force download other files formats like word doc, pdf files, etc.</p>
				<p>The regular expression in the above example (<i>line no-8</i>) will simply not allow those files whose name starts or ends with a dot character (<code>.</code>), for example, it allows the file names such as <code>kites.jpg</code> or <code>Kites.jpg</code>, <code>myscript.min.js</code> but do not allow <code>kites.jpg.</code> or <code>.kites.jpg</code>.</p>
				<p>Please check out the tutorial on <a href="bp_regular-expressions.php">regular expressions</a> to learn the regular expressions in details.</p>
                <div class="bottom-link clearfix">
                    <a href="bp_file-upload.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_cookies.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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