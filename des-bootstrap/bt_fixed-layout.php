<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="Working with Bootstrap 4 Fixed Layout">
  <meta name="keywords" content="Bootstrap,Bootstrap4,Bootstrap 4 Fixed Layout,Fixed Layout,Layout">
  <meta name="author" content="webschooltoday.com">
    <title>Working with Bootstrap-4 Fixed Layout - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">Working with Bootstrap 4 Fixed Layout</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                </div>
                <a href="bt_fluid-layout.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_grid-system.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Fixed Layout</span></h1>
                <p class="summary">In this tutorial you will learn how to create fixed layouts with Bootstrap.</p>
                <h2>Creating Fixed Layout with Bootstrap</h2>
                <p>With Bootstrap 4 you can still create web page layouts based on fixed number of pixels, however the container width vary depending on the viewport width and the layout is responsive too.</p>
                <p>The process of creating the fixed yet responsive layout basically starts with the <code>.container</code> class. After that you can create rows with the <code>.row</code> class to wrap the horizontal groups of columns. Rows must be placed within a <code>.container</code> for proper alignment and padding.</p>
                <p>Further columns can be created inside a row using predefined grid classes like <code>.col-*</code>, <code>.col-sm-*</code>, <code>.col-md-*</code>, <code>.col-lg-*</code> and <code>.col-xl-*</code> where <code>*</code> represent grid number and should be from 1 to 12. Please check out the <a href="bt_grid-system.php">Bootstrap grid system</a> tutorial to learn more about grid classes.</p>
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box" style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> Actual content like text, images, videos, tables, etc. should be placed within columns, and only columns may be the immediate children of rows.</p>
						</div>
					</div>
				</div>
                <p>The following example creates a fixed width responsive layout that is 720px pixels wide on medium devices having screen width greater than or equal to 768px like tablets, whereas 960px wide on large devices having screen width greater than or equal to 992px like small laptops, and 1140px wide on extra large devices having screen width greater than or equal to 1200px like desktops.</p>
                <p>However, if the device's viewport width is less than 768px but greater than or equal to 576px the layout will be 540px wide. For viewport width less than 576px the layout will cover 100% width. Also, columns will be stacked vertically navbar will be collapsed in both cases.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabaacc.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code1" >

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Fixed Layout Example</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
    <div class="container">
        <a href="#" class="navbar-brand mr-3">WebSchool Today</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">Services</a>
                <a href="#" class="nav-item nav-link">About</a>
                <a href="#" class="nav-item nav-link">Contact</a>
            </div>
            <div class="navbar-nav ml-auto">
                <a href="#" class="nav-item nav-link">Register</a>
                <a href="#" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </div>    
</nav>
<div class="container">
    <div class="jumbotron">
        <h1>Learn to Create Websites</h1>
        <p class="lead">In today's world internet is the most popular way of connecting with the people. At <a href="https://www.webschooltoday.com" target="_blank">webschooltoday.com</a> you will learn the essential web development technologies along with real life practice examples, so that you can create your own website to connect with the people around the world.</p>
        <p><a href="https://www.webschooltoday.com" target="_blank" class="btn btn-success btn-lg">Get started today</a></p>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h2>HTML</h2>
            <p>HTML is the standard markup language for describing the structure of the web pages. Our HTML tutorials will help you to understand the basics of latest HTML5 language, so that you can create your own web pages or website.</p>
            <p><a href="https://www.webschooltoday.com/des-html/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>CSS</h2>
            <p>CSS is used for describing the presentation of web pages. CSS can save a lot of time and effort. Our CSS tutorials will help you to learn the essentials of latest CSS3, so that you can control the style and layout of your website.</p>
            <p><a href="https://www.webschooltoday.com/des_css/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Bootstrap</h2>
            <p>Bootstrap is a powerful front-end framework for faster and easier web development. Our Bootstrap tutorials will help you to learn all the features of latest Bootstrap 4 framework so that you can easily create responsive websites.</p>
            <p><a href="https://www.webschooltoday.com/des-bootstart/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
        </div>
    </div>
    <hr>
    <footer>
        <div class="row">
            <div class="col-md-6">
                <p>Copyright © 2019 WebSchool Today</p>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="#" class="text-dark">Terms of Use</a> 
                <span class="text-muted mx-2">|</span> 
                <a href="#" class="text-dark">Privacy Policy</a>
            </div>
        </div>
    </footer>
</div>
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

               <p>We've used the margin utility classes such as <code>.mb-3</code>, <code>.ml-auto</code>, <code>mx-2</code> etc. to adjust spacing between the elements. Whereas the classes <code>.text-dark</code>, <code>.text-muted</code>, <code>.text-md-right</code> are text utility classes to adjust color and alignment of text. You'll learn about them in later chapters.</p>
                <div class="bottom-link clearfix">
                    <a href="bt_grid-system.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_fluid-layout.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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