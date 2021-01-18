<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="PHP Magic Constants ">
	  <meta name="keywords" content="php,php basic,PHP Magic Constants ">
	  <meta name="author" content="webschooltoday.com">
    <title>PHP Magic Constants - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">PHP Magic Constants </div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_json-parsing.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_classes-and-objects.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Magic Constants</span></h1>
                <p class="summary">In this tutorial you will learn how to work with PHP magic constants.</p>
                <h2>What is Magic Constants</h2>
                <p>In the <a href="bp_constants.php">PHP constants</a> chapter we've learned how to define and use constants in PHP script.</p>
                <p>PHP moreover also provide a set of special predefined constants that change depending on where they are used. These constants are called magic constants. For example, the value of<code> __LINE__</code> depends on the line that it's used on in your script.</p>
                <p class="space">Magic constants begin with two underscores and end with two underscores. The following section describes some of the most useful magical PHP constants.</p>
                <h2>__LINE__</h2>
                <p>The <code>__LINE__</code> constant returns the current line number of the file, like this:</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5fe0.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

&lt;?php
echo "Line number " . __LINE__ . "&lt;br&gt;"; // Displays: Line number 2
echo "Line number " . __LINE__ . "&lt;br&gt;"; // Displays: Line number 3
echo "Line number " . __LINE__ . "&lt;br&gt;"; // Displays: Line number 4
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
                <h2>__FILE__</h2>
                <p>The <code>__FILE__</code> constant returns full path and name of the PHP file that's being executed. If used inside an <a href="bp_include-files.php">include</a>, the name of the included file is returned.</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/get-full-path-of-the-file343d.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code2">

&lt;?php
// Displays the absolute path of this file
echo "The full path of this file is: " . __FILE__;
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
                <h2>__DIR__</h2>
                <p>The <code>__DIR__</code> constant returns the directory of the file. If used inside an include, the directory of the included file is returned. Here's an example:</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/get-directory-of-the-filef60b.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code3">

&lt;?php
// Displays the directory of this file
echo "The directory of this file is: " . __DIR__;
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
				<h2>__FUNCTION__</h2>
                <p>The <code>__FUNCTION__</code> constant returns the name of the current function.</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8dae.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

&lt;?php
function myFunction(){
    echo  "The function name is - " . __FUNCTION__;
}
myFunction(); // Displays: The function name is - myFunction
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
                <h2>__CLASS__</h2>
                <p>The <code>__CLASS__</code> constant returns the name of the current <a href="bp_classes-and-objects.php">class</a>. Here's an example:</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6efa.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

&lt;?php
class MyClass
{
    public function getClassName(){
        return __CLASS__;
    }
}
$obj = new MyClass();
echo $obj->getClassName(); // Displays: MyClass
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
                <h2>__METHOD__</h2>
                <p>The <code>__METHOD__</code> constant returns the name of the current class method.</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8c4c.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

&lt;?php
class Sample
{
    public function myMethod(){
        echo __METHOD__;
    }
}
$obj = new Sample();
$obj->myMethod(); // Displays: Sample::myMethod
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
                <h2>__NAMESPACE__</h2>
                <p>The <code>__NAMESPACE__</code> constant returns the name of the current namespace.</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../output_file/bin/get-the-current-namespaceb1c5.php" target="_top" class="download-btn" title="Download Source Code"><span>Download</span></a></div>
                        <textarea id="code7">

&lt;?php
namespace MyNamespace;
class MyClass
{
    public function getNamespace(){
        return __NAMESPACE__;
    }
}
$obj = new MyClass();
echo $obj->getNamespace(); // Displays: MyNamespace
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
                <div class="bottom-link clearfix">
                    <a href="bp_classes-and-objects.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_json-parsing.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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