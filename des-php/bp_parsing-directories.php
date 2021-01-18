<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Parsing and Reading Directories in PHP">
	  <meta name="keywords" content="php,php basic,Parsing and Reading Directories in PHP">
	  <meta name="author" content="webschooltoday.com">
    <title>Parsing and Reading Directories in PHP - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to parse directories, like creating a new directory, list all files in a directory, etc. using PHP." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Parsing and Reading Directories in PHP</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_file-upload.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_file-system.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Parsing Directories</span></h1>
                <p class="summary">In this tutorial you will learn how to process directories or folders using PHP.</p>
                <h2>Working with Directories in PHP</h2>
                <p class="space">In the previous chapter you've learned how to work with files in PHP. Similarly, PHP also allows you to work with directories on the file system, for example, you can open a directory and read its contents, create or delete a directory, list all files in the directory, and so on.</p>
                <h2>Creating a New Directory</h2>
				<p>You can create a new and empty directory by calling the PHP <code>mkdir()</code> function with the path and name of the directory to be created, as shown in the example below:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

&lt;?php
// The directory path
$dir = "testdir";
 
// Check the existence of directory
if(!file_exists($dir)){
    // Attempt to create directory
    if(mkdir($dir)){
        echo "Directory created successfully.";
    } else{
        echo "ERROR: Directory could not be created.";
    }
} else{
    echo "ERROR: Directory already exists.";
}
?&gt;

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
				<p>To make the <code>mkdir()</code> function work, the parent directories in the directory path parameter has to exist already, for example, if you specify the directory path as <code>testdir/subdir</code> than the <code>testdir</code> has to exist otherwise PHP will generate an error.</p>
				<hr />
				<h2>Copying Files from One Location to Another</h2>
				<p>You can copy a file from one location to another by calling PHP <code>copy()</code> function with the file's source and destination paths as arguments. If the destination file already exists it'll be overwritten. Here's an example which creates a copy of "example.txt" file inside backup folder.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

&lt;?php
// Source file path
$file = "example.txt";
 
// Destination file path
$newfile = "backup/example.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Attempt to copy file
    if(copy($file, $newfile)){
        echo "File copied successfully.";
    } else{
        echo "ERROR: File could not be copied.";
    }
} else{
    echo "ERROR: File does not exist.";
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
				<p>To make this example work, the target directory which is <i>backup</i> and the source file i.e. "example.txt" has to exist already; otherwise PHP will generate an error.</p>
				<hr />
				<h2>Listing All Files in a Directory</h2>
				<p>You can use the PHP <code>scandir()</code> function to list files and directories inside the specified path.</p>
				<p>Now we're going to create a custom function that will recursively list all files in a directory using PHP. This script will be helpful if you're working with deeply nested directory structure.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

&lt;?php
// Define a function to output files in a directory
function outputFiles($path){
    // Check directory exists or not
    if(file_exists($path) && is_dir($path)){
        // Scan the files in this directory
        $result = scandir($path);
        
        // Filter out the current (.) and parent (..) directories
        $files = array_diff($result, array('.', '..'));
        
        if(count($files) > 0){
            // Loop through retuned array
            foreach($files as $file){
                if(is_file("$path/$file")){
                    // Display filename
                    echo $file . "&lt;br&gt;";
                } else if(is_dir("$path/$file")){
                    // Recursively call the function if directories found
                    outputFiles("$path/$file");
                }
            }
        } else{
            echo "ERROR: No files found in the directory.";
        }
    } else {
        echo "ERROR: The directory does not exist.";
    }
}
 
// Call the function
outputFiles("mydir");
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
                <hr />
				<h2>Listing All Files of a Certain Type</h2>
				<p>While working on directory and file structure, sometimes you might need to find out certain types of files within the directory, for example, listing only <code>.text</code> or <code>.png</code> files, etc. You can do this easily with the PHP <code>glob()</code> function, which matches files based on the pattern.</p>
				<p>The PHP code in the following example will search the <i>documents</i> directory and list all the files with <code>.text</code> extension. It will not search the subdirectories.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

&lt;?php
/* Search the directory and loop through
returned array containing the matched files */
foreach(glob("documents/*.txt") as $file){
    echo basename($file) . " (size: " . filesize($file) . " bytes)" . "&lt;br&gt;";
}
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code4"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
				<p>The <code>glob()</code> function can also be used to find all the files within a directory or its subdirectories. The function defined in the following example will recursively list all files within a directory, just like we've done in previous example with the <code>scandir()</code> function.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

&lt;?php
// Define a function to output files in a directory
function outputFiles($path){
    // Check directory exists or not
    if(file_exists($path) && is_dir($path)){
        // Search the files in this directory
        $files = glob($path ."/*");
        if(count($files) > 0){
            // Loop through retuned array
            foreach($files as $file){
                if(is_file("$file")){
                    // Display only filename
                    echo basename($file) . "&lt;br&gt;";
                } else if(is_dir("$file")){
                    // Recursively call the function if directories found
                    outputFiles("$file");
                }
            }
        } else{
            echo "ERROR: No such file found in the directory.";
        }
    } else {
        echo "ERROR: The directory does not exist.";
    }
}
 
// Call the function
outputFiles("mydir");
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code5"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_file-system.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_file-upload.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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