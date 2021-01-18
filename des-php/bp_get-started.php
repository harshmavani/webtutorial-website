<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Setting Up Project with PHP and MySQL Database">
	  <meta name="keywords" content="php,php basic,Setting Up Project with PHP and MySQL Database">
	  <meta name="author" content="webschooltoday.com">
    <title>Setting Up Project with PHP and MySQL Database - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to install PHP and MySQL database on your system and create a basic 'Hello World!' application with PHP." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Setting Up Project with PHP and MySQL Database</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_syntax.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="index.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Getting Started</span></h1>
                <p class="summary">Install Wampserver or XAMPP on your PC to quickly create web applications with Apache, PHP and a MySQL database.</p>
                <h2>Getting Started with PHP</h2>
                <p>Here, you will learn how easy it is to create dynamic web pages using PHP. Before begin, be sure to have a code editor and some working knowledge of HTML and CSS.</p>
                <p>If you're just starting out in web development, <a href="../des-html/index.php">start learning from here &raquo;</a></p>
                <p class="space">Well, let's get straight into it.</p>
                <h2>Setting Up a Local Web Server</h2>
                <p>PHP script execute on a web server running PHP. So before you start writing any PHP program you need the following program installed on your computer.</p>
                <ul>
                    <li>The Apache Web server</li>
                    <li>The PHP engine</li>
                    <li>The MySQL database server</li>
                </ul>
                <p>You can either install them individually or choose a pre-configured package for your operating system like Linux and Windows. Popular pre-configured package are XAMPP and WampServer.</p>
                <p>WampServer is a Windows web development environment. It allows you to create web applications with Apache2, PHP and a MySQL database. It will also provide the MySQL administrative tool PhpMyAdmin to easily manage your databases using a web browser.</p>
                <p>The official website for downloading and installation instructions for the WampServer: <a rel="nofollow" href="http://www.wampserver.com/en/" target="_blank">http://www.wampserver.com/en/</a></p>
                <hr />
                <h2>Creating Your First PHP Script</h2>
                <p>Now that you have successfully installed WampServer on your computer. In this section we will create a very simple PHP script that displays the text "Hello, world!" in the browser window.</p>
                <p>Ok, click on the WampServer icon somewhere on your Windows task bar and select the "www directory". Alternatively, you can access the "www" directory through navigating the <code>C:\wamp\www</code>. Create a subdirectory in "www" directory let's say "project".</p>
                <p>Now open up your favorite code editor and create a new PHP file then type the following code:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf5d8.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

&lt;?php
// Display greeting message
echo "Hello, world!";
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
                <p>Now save this file as "hello.php" in your project folder (located at <code>C:\wamp\www\project</code>), and view the result in your browser through visiting this URL: <code>http://localhost/project/hello.php</code>.</p>
				<p>Alternatively, you can access the "hello.php" file through selecting the localhost option and then select the project folder from the WampSever menu on the taskbar.</p>
                <p>PHP can be embedded within a normal HTML web page. That means inside your HTML document you can write the PHP statements, as demonstrated in the follwoing example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab639e.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

&lt;!DOCTYPE HTML&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;PHP Application&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;?php
// Display greeting message
echo 'Hello World!';
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
				<p>You will learn what each of these statements means in upcoming chapters.</p>
                <div class="bottom-link clearfix">
                    <a href="index.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_syntax.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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