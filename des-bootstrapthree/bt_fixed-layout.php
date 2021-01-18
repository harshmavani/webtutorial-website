	<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta name="description" content="Learn the fastest and easiest way to create fixed width website layout or design which is responsive too using the Bootstrap framework's default grid system." />
	  <meta name="keywords" content="Bootstrap,Bootstrap3,Fixed Layout">
	  <meta name="author" content="webschooltoday.com">
    <title>Working with Bootstrap 3 Fixed Layout - WebSchool Today</title>
	  	<?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">Working with Bootstrap 3 Fixed Layout</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
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
                <p>With Bootstrap 3 you can still create layouts of web pages based on fixed number of pixels, however this time it is responsive from the start as opposed to previous 2.x version where you need to include the responsive style sheet to make it responsive for other devices.</p>
                <p>The process of creating the fixed yet responsive layout starts with the <code>.container</code> class. After that create rows with the <code>.row</code> class to wrap the horizontal groups of columns. Rows must be placed within a <code>.container</code> for proper alignment and padding.</p>
                <p>Further columns can be created inside the rows using the predefined grid classes like <code>.col-xs-*</code>, <code>.col-sm-*</code>, <code>.col-md-*</code> and <code>.col-lg-*</code> where <code>*</code> represent grid number and should be from 1 to 12. Learn more about the <a href="bt_grid-system.php">Bootstrap grid system</a>.</p>
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box" style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> Actual content like text, images, videos, etc. should be placed within columns, and only columns may be the immediate children of rows.</p>
						</div>
					</div>
				</div>
				<p>The following code creates a fixed width responsive layout that is 750px pixels wide on small devices like tablet having screen width &ge;768px, whereas 970px wide on medium devices like desktop and laptop having screen width &ge;992px and 1170px wide on large devices like large desktops having screen width &ge;1200px. However the layout width will be automatically calculated for devices that has screen width &lt;768px like cell phones.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabfe7c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code1">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap 3 Fixed Layout Example</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
    <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">WebSchool Today</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="https://www.webschooltoday.com" target="_blank">Home</a></li>
                    <li><a href="https://www.webschooltoday.com/about-us.php" target="_blank">About</a></li>
                    <li><a href="https://www.webschooltoday.com/contact-us.php" target="_blank">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="jumbotron">
            <h1>Learn to Create Websites</h1>
            <p>In today's world internet is the most popular way of connecting with the people. At <a href="https://www.webschooltoday.com" target="_blank">webschooltoday.com</a> you will learn the essential of web development technologies along with real life practice example, so that you can create your own website to connect with the people around the world.</p>
            <p><a href="https://www.webschooltoday.com" target="_blank" class="btn btn-success btn-lg">Get started today</a></p>
        </div>
        <div class="row">
            <div class="col-xs-4">
                <h2>HTML</h2>
                <p>HTML is a markup language that is used for creating web pages. The HTML tutorial section will help you understand the basics of HTML, so that you can create your own web pages or website.</p>
                <p><a href="https://www.webschooltoday.com/html-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
            </div>
            <div class="col-xs-4">
                <h2>CSS</h2>
                <p>CSS is used for describing the presentation of web pages. The CSS tutorial section will help you learn the essentials of CSS, so that you can fine control the style and layout of your HTML document.</p>
                <p><a href="https://www.webschooltoday.com/css-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
            </div>
            <div class="col-xs-4">
                <h2>Bootstrap</h2>
                <p>Bootstrap is a powerful front-end framework for faster and easier web development. The Bootstrap tutorial section will help you learn the techniques of Bootstrap so that you can quickly create your own website.</p>
                <p><a href="https://www.webschooltoday.com/twitter-bootstrap-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-12">
                <footer>
                    <p>&copy; Copyright 2013 WebSchool Today</p>
                </footer>
            </div>
        </div>
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