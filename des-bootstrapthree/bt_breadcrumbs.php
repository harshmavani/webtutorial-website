<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="Bootstrap 3 Breadcrumb Navigation">
	  <meta name="keywords" content="Bootstrap,Bootstrap3,Bootstrap 3 Breadcrumb Navigation,breadcrumb">
	  <meta name="author" content="webschooltoday.com">
    <title>Bootstrap 3 Breadcrumb Navigation - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">Bootstrap 3 Breadcrumb Navigation</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
              </div>
              <a href="bt_pagination.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_panels.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Breadcrumbs</span></h1>
                <p class="summary">In this tutorial you will learn how to create breadcrumbs with Bootstrap.</p>
                <h2>Creating Breadcrumbs with Bootstrap</h2>
                <p>A breadcrumb is a navigation scheme that indicates current page's location to the user within a website or application. Breadcrumb navigation can greatly enhance the accessibility of the websites having a large number of pages.</p>
                <p>You can create static breadcrumbs layouts with Bootstrap simply using the class <code>.breadcrumb</code> on the <a href="../des-html/ht_lists.php">unordered lists</a>, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3047.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Products</a></li>
    <li class="active">Accessories</li>
</ul>


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

				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box" style="background-color:#fad28c"
>
							<p><strong>Important:</strong> Separators inside the breadcrumbs components are added automatically via CSS through <code><a href="../des-css/style_pseudo-elements.php">::before</a></code> pseudo-element and <code><a href="../info-css/style_content-property.php">content</a></code> property.</p>
						</div>
					</div>
				</div>
                <div class="bottom-link clearfix">
                    <a href="bt_panels.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
Previous</a>
                    <a href="bt_pagination.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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