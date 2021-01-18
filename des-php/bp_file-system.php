<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Understanding PHP File System Functions">
	  <meta name="keywords" content="php,php basic,Understanding PHP File System Functions">
	  <meta name="author" content="webschooltoday.com">
    <title>Understanding PHP File System Functions - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Understanding PHP File System Functions</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_parsing-directories.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_include-files.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>File System</span></h1>
                <p class="summary">In this tutorial you will learn how to create, access (or read) and manipulate files dynamically using the PHP's file system functions.</p>
                <h2>Working with Files in PHP</h2>
                <p class="space">Since PHP is a server side programming language, it allows you to work with files and directories stored on the web server. In this tutorial you will learn how to create, access, and manipulate files on your web server using the PHP file system functions.</p>
                <h2>Opening a File with PHP <code>fopen()</code> Function</h2>
                <p>To work with a file you first need to open the file. The PHP <code>fopen()</code> function is used to open a file. The basic syntax of this function can be given with:</p>
                <div class="shadow">
                    <div class="syntax"><span class="keyword">fopen</span>(<em>filename</em>, <em>mode</em>)</div>
                </div>
                <p>The first parameter passed to <code>fopen()</code> specifies the name of the file you want to open, and the second parameter specifies in which mode the file should be opened. For example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabdcad.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

&lt;?php
$handle = fopen("data.txt", "r");
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
                <p>The file may be opened in one of the following modes:</p>
                <div class="shadow" id="modes">
                    <table class="data align-center">
                        <thead>
                            <tr>
                            	<th style="width: 50px;">Modes</th>
                            	<th>What it does</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>r</code></td>
                                <td>Open the file for reading only.</td>
                            </tr>
                            <tr>
                                <td><code>r+</code></td>
                                <td>Open the file for reading and writing.</td>
                            </tr>
                            <tr>
                                <td><code>w</code></td>
                                <td>Open the file for writing only and clears the contents of file. If the file does not exist, PHP will attempt to create it.</td>
                            </tr>
                            <tr>
                                <td><code>w+</code></td>
                                <td>Open the file for reading and writing and clears the contents of file. If the file does not exist, PHP will attempt to create it.</td>
                            </tr>
                            <tr>
                                <td><code>a</code></td>
                                <td>Append. Opens the file for writing only. Preserves file content by writing to the end of the file. If the file does not exist, PHP will attempt to create it.</td>
                            </tr>
                            <tr>
                                <td><code>a+</code></td>
                                <td>Read/Append. Opens the file for reading and writing. Preserves file content by writing to the end of the file. If the file does not exist, PHP will attempt to create it.</td>
                            </tr>
                            <tr>
                                <td><code>x</code></td>
                                <td>Open the file for writing only. Return <code>FALSE</code> and generates an error if the file already exists. If the file does not exist, PHP will attempt to create it.</td>
                            </tr>
                            <tr>
                                <td><code>x+</code></td>
                                <td>Open the file for reading and writing; otherwise it has the same behavior as 'x'.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>If you try to open a file that doesn't exist, PHP will generate a warning message. So, to avoid these error messages you should always implement a simple check whether a file or directory exists or not before trying to access it, with the PHP <code>file_exists()</code> function.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc55f.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

&lt;?php
$file = "data.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Attempt to open the file
    $handle = fopen($file, "r");
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> Operations on files and directories are prone to errors. So it's a good practice to implement some form of error checking so that if an error occurs your script will handle the error gracefully. See the tutorial on <a href="bp_error-handling.php">PHP error handling</a>.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Closing a File with PHP <code>fclose()</code> Function</h2>
                <p>Once you've finished working with a file, it needs to be closed. The <code>fclose()</code> function is used to close the file, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3104.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

&lt;?php
$file = "data.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Open the file for reading
    $handle = fopen($file, "r") or die("ERROR: Cannot open the file.");
        
    /* Some code to be executed */
        
    // Closing the file handle
    fclose($handle);
} else{
    echo "ERROR: File does not exist.";
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
                <div class="color-box">
                    <div class="shadow">
                    <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                    <div class="note-box"  style="background-color:#ff8585"
>
                        <p><strong>Read Carefully:</strong> Although PHP automatically closes all open files when script terminates, but it's a good practice to close a file after performing all the operations.</p>
                    </div>
                    </div>
                </div>
                <hr />
                <h2>Reading from Files with PHP <code>fread()</code> Function</h2>
                <p>Now that you have understood how to open and close files. In the following section you will learn how to read data from a file. PHP has several functions for reading data from a file. You can read from just one character to the entire file with a single operation.</p>
                <h3>Reading Fixed Number of Characters</h3>
                <p>The  <code>fread()</code> function can be used to read a specified number of characters from a file. The basic syntax of this function can be given with.</p>
                <div class="shadow">
                    <div class="syntax"><span class="keyword">fread</span>(<em>file handle</em>, <em>length in bytes</em>)</div>
                </div>
                <p>This function takes two parameter &mdash; A file handle and the number of bytes to read. The following example reads 20 bytes from the "data.txt" file including spaces. Let's suppose the file "data.txt" contains a paragraph of text "The quick brown fox jumps over the lazy dog."</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4170.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

&lt;?php
$file = "data.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Open the file for reading
    $handle = fopen($file, "r") or die("ERROR: Cannot open the file.");
        
    // Read fixed number of bytes from the file
    $content = fread($handle, "20");
        
    // Closing the file handle
    fclose($handle);
        
    // Display the file content 
    echo $content;
} else{
    echo "ERROR: File does not exist.";
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
                <p>The above example will produce the following output:</p>
                <div class="output-box break">
                    The quick brown fox
                </div>
                <h3>Reading the Entire Contents of a File</h3>
                <p>The <code>fread()</code> function can be used in conjugation with the <code>filesize()</code> function to read the entire file at once. The <code>filesize()</code> function returns the size of the file in bytes.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab06c0.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

&lt;?php
$file = "data.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Open the file for reading
    $handle = fopen($file, "r") or die("ERROR: Cannot open the file.");
        
    // Reading the entire file
    $content = fread($handle, filesize($file));
        
    // Closing the file handle
    fclose($handle);
        
    // Display the file content
    echo $content;
} else{
    echo "ERROR: File does not exist.";
}
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
				<p>The above example will produce the following output:</p>
                <div class="output-box">
                    The quick brown fox jumps over the lazy dog.
                </div>
        		<p>The easiest way to read the entire contents of a file in PHP is with the <code>readfile()</code> function. This function allows you to read the contents of a file without needing to open it. The following example will generate the same output as above example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabacee.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

&lt;?php
$file = "data.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Reads and outputs the entire file
    readfile($file) or die("ERROR: Cannot open the file.");
} else{
    echo "ERROR: File does not exist.";
}
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code6"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
				<p>The above example will produce the following output:</p>
                <div class="output-box">
                    The quick brown fox jumps over the lazy dog.
                </div>
        		<p>Another way to read the whole contents of a file without needing to open it is with the <code>file_get_contents()</code> function. This function accepts the name and path to a file, and reads the entire file into a string variable. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8797.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

&lt;?php
$file = "data.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Reading the entire file into a string
    $content = file_get_contents($file) or die("ERROR: Cannot open the file.");
        
    // Display the file content 
    echo $content;
} else{
    echo "ERROR: File does not exist.";
}
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code7"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
                <p>One more method of reading the whole data from a file is the PHP's <code>file()</code> function. It does a similar job to <code>file_get_contents()</code> function, but it returns the file contents as an array of lines, rather than a single string. Each element of the returned array corresponds to a line in the file.</p>
                <p>To process the file data, you need to iterate over the array using a <a href="bp_loops.php#foreach-loop">foreach loop</a>. Here's an example, which reads a file into an array and then displays it using the loop:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab97e8.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

&lt;?php
$file = "data.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Reading the entire file into an array
    $arr = file($file) or die("ERROR: Cannot open the file.");
    foreach($arr as $line){
        echo $line;
    }
} else{
    echo "ERROR: File does not exist.";
}
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code8"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
                <hr />
                <h2>Writing the Files Using PHP <code>fwrite()</code> Function</h2>
                <p>Similarly, you can write data to a file or append to an existing file using the PHP <code>fwrite()</code> function. The basic syntax of this function can be given with:</p>
                <div class="shadow">
                    <div class="syntax"><span class="keyword">fwrite</span>(<i>file handle</i>, <i>string</i>)</div>
                </div>
                <p>The <code>fwrite()</code> function takes two parameter &mdash; A file handle and the string of data that is to be written, as demonstrated in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

&lt;?php
$file = "note.txt";
    
// String of data to be written
$data = "The quick brown fox jumps over the lazy dog.";
    
// Open the file for writing
$handle = fopen($file, "w") or die("ERROR: Cannot open the file.");
    
// Write data to the file
fwrite($handle, $data) or die ("ERROR: Cannot write the file.");
    
// Closing the file handle
fclose($handle);
    
echo "Data written to the file successfully.";
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code9"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
				<p>In the above example, if the "note.txt" file doesn't exist PHP will automatically create it and write the data. But, if the "note.txt" file already exist, PHP will erase the contents of this file, if it has any, before writing the new data, however if you just want to append the file and preserve existing contents just use the <a href="#modes">mode</a> <code>a</code> instead of <code>w</code> in the above example.</p>
                <p>An alternative way is using the <code>file_put_contents()</code> function. It is counterpart of <code>file_get_contents()</code> function and provides an easy method of writing the data to a file without needing to open it. This function accepts the name and path to a file together with the data to be written to the file. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

&lt;?php
$file = "note.txt";
    
// String of data to be written
$data = "The quick brown fox jumps over the lazy dog.";
    
// Write data to the file
file_put_contents($file, $data) or die("ERROR: Cannot write the file.");
    
echo "Data written to the file successfully.";
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code10"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
                <p>If the file specified in the <code>file_put_contents()</code> function already exists, PHP will overwrite it by default. If you would like to preserve the file's contents you can pass the special <code>FILE_APPEND</code> flag as a third parameter to the <code>file_put_contents()</code> function. It will simply append the new data to the file instead of overwitting it. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code11">

&lt;?php
$file = "note.txt";
    
// String of data to be written
$data = "The quick brown fox jumps over the lazy dog.";
    
// Write data to the file
file_put_contents($file, $data, FILE_APPEND) or die("ERROR: Cannot write the file.");
    
echo "Data written to the file successfully.";
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code11"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
				<hr />
				<h2>Renaming Files with PHP <code>rename()</code> Function</h2>
				<p>You can rename a file or directory using the PHP's <code>rename()</code> function, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code12">

&lt;?php
$file = "file.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Attempt to rename the file
    if(rename($file, "newfile.txt")){
        echo "File renamed successfully.";
    } else{
        echo "ERROR: File cannot be renamed.";
    }
} else{
    echo "ERROR: File does not exist.";
}
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code12"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
				<hr />
				<h2>Removing Files with PHP <code>unlink()</code> Function</h2>
				<p>You can delete files or directories using the PHP's <code>unlink()</code> function, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code13">

&lt;?php
$file = "note.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Attempt to delete the file
    if(unlink($file)){
        echo "File removed successfully.";
    } else{
        echo "ERROR: File cannot be removed.";
    }
} else{
    echo "ERROR: File does not exist.";
}
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code13"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
				<p>In the next chapter we will learn more about <a href="bp_parsing-directories.php">parsing directories or folders</a> in PHP.</p>
                <hr />
                <h2>PHP Filesystem Functions</h2>
                <p>The following table provides the overview of some other useful PHP filesystem functions that can be used for reading and writing the files dynamically.</p>
                <div class="shadow">
                    <table class="data">
                        <thead>
                            <tr>
                            	<th style="width: 150px;">Function</th>
                            	<th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>fgetc()</code></td>
                                <td>Reads a single character at a time.</td>
                            </tr>
                            <tr>
                                <td><code>fgets()</code></td>
                                <td>Reads a single line at a time.</td>
                            </tr>
                            <tr>
                                <td><code>fgetcsv()</code></td>
                                <td>Reads a line of comma-separated values.</td>
                            </tr>
							<tr>
                                <td><code>filetype()</code></td>
                                <td>Returns the type of the file.</td>
                            </tr>
							<tr>
                                <td><code>feof()</code></td>
                                <td>Checks whether the end of the file has been reached.</td>
                            </tr>
							<tr>
                                <td><code>is_file()</code></td>
                                <td>Checks whether the file is a regular file.</td>
                            </tr>
							<tr>
                                <td><code>is_dir()</code></td>
                                <td>Checks whether the file is a directory.</td>
                            </tr>
							<tr>
                                <td><code>is_executable()</code></td>
                                <td>Checks whether the file is executable.</td>
                            </tr>
							<tr>
                                <td><code>realpath()</code></td>
                                <td>Returns canonicalized absolute pathname.</td>
                            </tr>
							<tr>
                                <td><code>rmdir()</code></td>
                                <td>Removes an empty directory.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>Please check out the <a href="../bp_reference/bp_file-system-functions.php">PHP filesystem reference</a> for other useful PHP filesystem functions.</p>
                <div class="bottom-link clearfix">
                    <a href="bp_include-files.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_parsing-directories.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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