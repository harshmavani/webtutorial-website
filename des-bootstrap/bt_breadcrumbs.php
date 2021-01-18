<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="Bootstrap 4 Breadcrumb Navigation">
  <meta name="keywords" content="Bootstrap,Bootstrap4,Bootstrap 4 Breadcrumb Navigation,navigation,breadcrumbs,breadcrumbs navigation">
  <meta name="author" content="webschooltoday.com">
    <title>Bootstrap 4 Breadcrumb Navigation - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
   
<body>
    <div>
<div class="tital">Bootstrap 4 Breadcrumb Navigation</div>

<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                </div>
                <a href="bt_pagination.php" class="next-page" title="Go to Next Page">	<i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_navbar.php" class="previous-page" title="Go to Previous Page">	<i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Breadcrumbs</span></h1>
                <p class="summary">In this tutorial you will learn how to create breadcrumbs with Bootstrap.</p>
                <h2>Creating Breadcrumbs with Bootstrap</h2>
                <p>A breadcrumb is a navigation scheme that indicates current page's location to the user within a website or application. Breadcrumb navigation can greatly enhance the accessibility of a website having a large number of pages or complex navigational hierarchy.</p>
                <p>You can create static breadcrumbs layouts with Bootstrap simply using the class <code>.breadcrumb</code> on the <a href="../des-html/html-lists.php">ordered lists</a>, as demonstrated in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd030.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1" >

<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Products</a></li>
        <li class="breadcrumb-item active">Accessories</li>
    </ol>
</nav>

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
				
                <p>The default breadcrumb separator is <code>/</code>. But, you can change it with a little custom CSS, for example, if you want to use <code>&gt;</code> as separator, you can apply the following style rules:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabadeb.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2" >

.breadcrumb-item + .breadcrumb-item::before {
    content: ">";
}

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
                <p>&mdash; The output of the above example will look something like this:</p>
				<div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box" style="background-color:#fad28c">
                            <p><strong>Important:</strong> Separators inside the breadcrumb components are added automatically via CSS through the <code><a href="../des-css/style_pseudo-elements.php">::before</a></code> pseudo-element and the <code><a href="../info-css/style_content-property.php">content</a></code> property.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bt_navbar.php" class="previous-page-bottom">	<i class="fa fa-arrow-left" aria-hidden="true"></i>
Previous</a>
                    <a href="bt_pagination.php" class="next-page-bottom" style="float: right;"
>Next	<i class="fa fa-arrow-right" aria-hidden="true"></i>
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