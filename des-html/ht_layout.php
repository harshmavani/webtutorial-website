
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML Table Vs Div Based Layouts">
	  <meta name="keywords" content="css,css3,HTML Table Vs Div Based Layouts">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML Table Vs Div Based Layouts - WebSchool Today</title>
    <meta name="description" content="You can create amazing web layout if you understand some basic principle. This tutorial will help will to understand the practices behind a well-structured and semantically-rich website." />
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML Table Vs Div Based Layouts</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="ht_head.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="ht_doctypes.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML <span>Layout</span></h1>
                <p class="summary">In this tutorial you will learn about the different methods of creating a web page layout.</p>
                <h2>Creating Website Layouts</h2>
                <p>Creating a website layout is the activity of positioning the various elements that make a web page in a well-structured manner and give appealing look to the website.</p>
                <p class="space">You have seen most websites on the internet usually display their content in multiple rows and columns, formatted like a magazine or newspaper to provide the users a better reading and writing environment. This can be easily achieved by using the HTML tags, such as <a href="../info-html/ht_table-tag.php"><code>&lt;table&gt;</code></a>, <a href="../info-html/ht_div-tag.php"><code>&lt;div&gt;</code></a>, <a href="../info-html/htl_header-tag.php"><code>&lt;header&gt;</code></a>, <a href="../info-html/htl_footer-tag.php"><code>&lt;footer&gt;</code></a>, <a href="../info-html/htl_section-tag.php"><code>&lt;section&gt;</code></a>, etc. and adding some <a href="ht_styles.php">CSS styles</a> to them.</p>
                <h2>HTML Table Based Layout</h2>
                <p>Table provides the simplest way for creating layouts in HTML. Generally, this involves the process of putting the contents such as text, images, and so on into rows and columns.</p>
                <p>The following layout is created using an HTML table with 3 rows and 2 columns &mdash; the first and last row spans both columns using the table's <code>colspan</code> attribute:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8b89.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code1">

                        <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>HTML Table Layout</title>
</head>
<body style="margin:0px;">
    <table style="width:100%; border-collapse:collapse; font:14px Arial,sans-serif;">
        <tr>
            <td colspan="2" style="padding:10px 20px; background-color:#acb3b9;">
                <h1 style="font-size:24px;">Tutorial Republic</h1>
            </td>
        </tr>
        <tr style="height:170px;">
            <td style="width:20%; padding:20px; background-color:#d4d7dc; vertical-align: top;">
                <ul style="list-style:none; padding:0px; line-height:24px;">
                    <li><a href="#" style="color:#333;">Home</a></li>
                    <li><a href="#" style="color:#333;">About</a></li>
                    <li><a href="#" style="color:#333;">Contact</a></li>
                </ul>
            </td>
            <td style="padding:20px; background-color:#f2f2f2; vertical-align:top;">
                <h2>Welcome to our site</h2>
                <p>Here you will learn how to create websites...</p>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="padding:5px; background-color:#acb3b9; text-align:center;">
                <p>copyright &copy; tutorialrepublic.com</p>
            </td>
        </tr>
    </table>
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
                <!--End:Code box-->
                <p class="break">&mdash; The HTML code above will produce the following output:</p>
                <iframe style="width:100%; height:310px; border:none;" src="../output_file/html/table-layout.php"></iframe>
                <!--Warning box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                            <p><strong>Warning:</strong> The method used for creating layout in the above example is not wrong, but it's not recommended. Avoid <a href="ht_tables.php">tables</a> and <a href="ht_styles.php#inline-styles">inline styles</a> for creating layouts. Layouts created using tables often rendered very slowly. Tables should only be used to display tabular data.</p>
                        </div>
                    </div>
                </div>
                <!--End:Warning box-->
                <hr />
                <h2>HTML Div Based Layout</h2>
                <p>Using the <a href="../info-html/ht_div-tag.php"><code>&lt;div&gt;</code></a> elements is the most common method of creating layouts in HTML. The <code>&lt;div&gt;</code> (stands for division) element is used for marking out a block of content, or set of other elements inside an HTML document. It can contain further other div elements if required. </p>
                <p>The following example uses the div elements to create a multiple column layout. It will produce the same result as in the previous example that uses table element:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd41e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code2">

                        <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>HTML Div Layout</title>
<style>
    body {
        font: 14px Arial,sans-serif; 
        margin: 0px;
    }
    .header {
        padding: 10px 20px;
        background: #acb3b9; 
    }
    .header h1 {
        font-size: 24px;
    }
    .container {
        width: 100%;
        background: #f2f2f2; 
    }
    .nav, .section {
        float: left; 
        padding: 20px;
        min-height: 170px;
        box-sizing: border-box;
    }
    .nav {            
        width: 20%;             
        background: #d4d7dc;
    }
    .section {
        width: 80%;
    }
    .nav ul {
        list-style: none; 
        line-height: 24px;
        padding: 0px; 
    }
    .nav ul li a {
        color: #333;
    }    
    .clearfix:after {
        content: ".";
        display: block;
        height: 0;
        clear: both;
        visibility: hidden;
    }
    .footer {
        background: #acb3b9;            
        text-align: center;
        padding: 5px;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Tutorial Republic</h1>
        </div>
        <div class="rg3-w clearfix">
            <div class="nav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="section">
                <h2>Welcome to our site</h2>
                <p>Here you will learn how to create websites...</p>
            </div>
        </div>
        <div class="footer">
            <p>copyright &copy; tutorialrepublic.com</p>
        </div>
    </div>
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
                <p class="break">&mdash; The HTML code above will produce the same output as the previous example:</p>
                <iframe style="width:100%; height:310px; border:none;" src="../output_file/html/div-layout.php"></iframe>
                <p>We've created this layout using the <a href="../des-css/css-alignment.php#floating-elements">CSS float</a> techniques, since most web browsers support it. Alternatively, you can also use the CSS3 flexbox to create modern and more flexible layouts. See the tutorial on <a href="../des-css/css3-flexible-box-layouts.php">CSS3 flexible box layouts</a> to learn about flexbox in detail.</p>
                <!--Tip box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> Better web page layouts can be created by using the DIV elements and CSS. You can change the layout of all the pages of your website by editing just one CSS file. To learn about CSS in detail, please check out our <a href="../des-css/index.php">CSS tutorial</a> section.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip box-->
				<hr />
				<h2>Using the HTML5 Structural Elements</h2>
                <p>HTML5 has introduced the new structural elements such as <a href="../info-html/htl_header-tag.php"><code>&lt;header&gt;</code></a>, <a href="../info-html/htl_footer-tag.php"><code>&lt;footer&gt;</code></a>, <a href="../info-html/htl_nav-tag.php"><code>&lt;nav&gt;</code></a>, <a href="../info-html/htl_section-tag.php"><code>&lt;section&gt;</code></a>, etc. to define the different parts of a web page in a more semantic way.</p>
                <p>You can consider these elements as a replacement for commonly used classes such as <code>.header</code>, <code>.footer</code>, <code>.nav</code>, <code>.section</code>, etc. The following example uses the new HTML5 structural elements to create the same layout that we have created in the previous examples.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc4aa.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code3">

                        <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>HTML5 Web Page Layout</title>
<style>
    body {
        font: 14px Arial,sans-serif; 
        margin: 0px;
    }
    header {
        padding: 10px 20px;
        background: #acb3b9; 
    }
    header h1 {
        font-size: 24px;
    }
    .container {
        width: 100%;
        background: #f2f2f2;  
    }
    nav, section {
        float: left; 
        padding: 20px;
        min-height: 170px;
        box-sizing: border-box;
    }
    section {
        width: 80%;
    }
    nav {
        width: 20%;             
        background: #d4d7dc;
    }    
    nav ul {
        list-style: none; 
        line-height: 24px;
        padding: 0px; 
    }
    nav ul li a {
        color: #333;
    }
    .clearfix:after {
        content: ".";
        display: block;
        height: 0;
        clear: both;
        visibility: hidden;
    }
    footer {
        background: #acb3b9;            
        text-align: center;
        padding: 5px;
    }
</style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Tutorial Republic</h1>
        </header>
        <div class="rg3-w clearfix">
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <section>
                <h2>Welcome to our site</h2>
                <p>Here you will learn how to create websites...</p>
            </section>
        </div>
        <footer>
            <p>copyright &copy; tutorialrepublic.com</p>
        </footer>
    </div>
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
                <!--End:Code box-->
                <p class="break">&mdash; The HTML code above will also produce the same output as the previous example:</p>
                <iframe style="width:100%; height:310px; border:none;" src="../output_file/html5/semantic-website-layout.php"></iframe>
                <p>The following table provides a brief overview of new HTML5 structural elements.</p>
				<div class="shadow">
					<table class="data">
						<tr>
							<th style="width: 100px;">Tag</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><code><a href="../info-html/htl_header-tag.php">&lt;header&gt;</a></code></td>
							<td>Represents the header of a document or a section.</td>
						</tr>
						<tr>
							<td><code><a href="../info-html/htl_footer-tag.php">&lt;footer&gt;</a></code></td>
							<td>Represents the footer of a document or a section.</td>
						</tr>                          
						<tr>
							<td><code><a href="../info-html/htl_nav-tag.php">&lt;nav&gt;</a></code></td>
							<td>Represents a section of navigation links.</td>
						</tr>
						<tr>
							<td><code><a href="../info-html/htl_section-tag.php">&lt;section&gt;</a></code></td>
							<td>Represents a section of a document, such as header, footer etc.</td>
						</tr>
						<tr>
							<td><code><a href="../info-html/htl_article-tag.php">&lt;article&gt;</a></code></td>
							<td>Represents an article, blog post, or other self-contained unit of information.</td>
						</tr>
						<tr>
							<td><code><a href="../info-html/htl_aside-tag.php">&lt;aside&gt;</a></code></td>
							<td>Represents some content loosely related to the page content.</td>
						</tr>
					</table>
				</div>
				<p>Please check out the reference on <a href="../info-html/htl_tags.php">HTML5 tags</a> to know about the newly introduced tags.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="ht_doctypes.php" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="ht_head.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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