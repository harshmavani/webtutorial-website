<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Upload Files on Server in PHP">
	  <meta name="keywords" content="php,php basic,How to Upload Files on Server in PHP">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Upload Files on Server in PHP - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Upload Files on Server in PHP</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_file-download.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_parsing-directories.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>File Upload</span></h1>
                <p class="summary">In this tutorial you'll learn how to upload a file to the remote web server with PHP.</p>
                <h2>Uploading Files with PHP</h2>
                <p>In this tutorial we will learn how to upload files on remote server using a Simple HTML form and PHP. You can upload any kind of file like images, videos, ZIP files, Microsoft Office documents, PDFs, as well as executables files and a wide range of other file types.</p>
                <h3>Step 1: Creating an HTML form to upload the file</h3> 
                <p>The following example will create a simple HTML form that can be used to upload files.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/file-upload-form1827.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>                        
                        <textarea id="code1">

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;File Upload Form&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;form action="upload-manager.php" method="post" enctype="multipart/form-data"&gt;
        &lt;h2&gt;Upload File&lt;/h2&gt;
        &lt;label for="fileSelect"&gt;Filename:&lt;/label&gt;
        &lt;input type="file" name="photo" id="fileSelect"&gt;
        &lt;input type="submit" name="submit" value="Upload"&gt;
        &lt;p&gt;&lt;strong&gt;Note:&lt;/strong&gt; Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.&lt;/p&gt;
    &lt;/form&gt;
&lt;/body&gt;
&lt;/html&gt;

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
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> In addition to a <a href="../des-html/html-forms.php">file-select</a> field the upload form must use the <a href="bp_get-and-post.php">HTTP post</a> method and must contain an <code>enctype="multipart/form-data"</code> attribute. This attribute ensures that the form data is encoded as mulitpart MIME data &mdash; which is required for uploading the large quantities of binary data such as image, audio, video, etc.</p>
                        </div>
                    </div>
                </div>
                <h3>Step 2: Processing the uploaded file</h3>
				<p>Here's the complete code of our "upload-manager.php" file. It will store the uploaded file in a "upload" folder on permanent basis as well as implement some basic security check like file type and file size to ensure that users upload the correct file type and within the allowed limit.</p>
                <div class="example break">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/upload-manager8c2f.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code2">

&lt;?php
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}
?&gt;

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
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The above script prevents uploading a file with the same name as an existing file in the same folder. However, if you want to allow this just prepend the file name with a random string or timestamp, like <code>$filename = time() . '_' . $_FILES["photo"]["name"];</code></p>
                        </div>
                    </div>
                </div>
				<p class="space">You might be wondering what this code was all about. Well, let's go through each part of this example code one by one for a better understanding of this process.</p>
	            <h2>Explanation of Code</h2>    
				<p>Once the form is submitted information about the uploaded file can be accessed via PHP superglobal array called <code>$_FILES</code>. For example, our upload form contains a file select field called photo (i.e. <code>name="photo"</code>), if any user uploaded a file using this field, we can obtains its details like the name, type, size, temporary name or any error occurred while attempting the upload via the <code>$_FILES["photo"]</code> associative array, like this:</p>
                <ul>
                	<li><code>$_FILES["photo"]["name"]</code> &mdash; This array value specifies the original name of the file, including the file extension. It doesn't include the file path.</li>
                    <li><code>$_FILES["photo"]["type"]</code> &mdash; This array value specifies the MIME type of the file.</li>
                    <li><code>$_FILES["photo"]["size"]</code> &mdash; This array value specifies the file size, in bytes.</li>
                    <li><code>$_FILES["photo"]["tmp_name"]</code> &mdash; This array value specifies the temporary name including full path that is assigned to the file once it has been uploaded to the server.</li>
                    <li><code>$_FILES["photo"]["error"]</code> &mdash; This array value specifies error or status code associated with the file upload, e.g. it will be 0, if there is no error.</li>
                </ul>
                <p>The PHP code in the following example will simply display the details of the uploaded file and stores it in a temporary directory on the web server.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/get-details-of-uploaded-file3b21.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code3">

&lt;?php
if($_FILES["photo"]["error"] > 0){
    echo "Error: " . $_FILES["photo"]["error"] . "&lt;br&gt;";
} else{
    echo "File Name: " . $_FILES["photo"]["name"] . "&lt;br&gt;";
    echo "File Type: " . $_FILES["photo"]["type"] . "&lt;br&gt;";
    echo "File Size: " . ($_FILES["photo"]["size"] / 1024) . " KB&lt;br&gt;";
    echo "Stored in: " . $_FILES["photo"]["tmp_name"];
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
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> Once a file has been successfully uploaded, it is automatically stored in a temporary directory on the server. To store this file on a permanent basis, you need to move it from the temporary directory to a permanent location using the PHP's  <code>move_uploaded_file()</code> function.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_parsing-directories.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_file-download.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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