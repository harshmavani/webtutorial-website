	<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta name="description" content="Learn how to create fluid website design or layout using the Bootstrap fluid grid system so that you can utilize 100% width of the device screen or viewport." />
	  <meta name="keywords" content="Bootstrap,Bootstrap3,Fluid Layout">
	  <meta name="author" content="webschooltoday.com">
    <title>Working with Bootstrap 3 Fluid Layout - WebSchool Today</title>
	  	<?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">Working with Bootstrap 3 Fluid Layout</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
        </div>
        <a href="bt_responsive-layout.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_fixed-layout.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Fluid Layout</span></h1>
                <p class="summary">In this tutorial you will learn how to create fluid layouts with Bootstrap.</p>
                <h2>Creating Fluid Layout with Bootstrap</h2>
                <p>In Bootstrap (version 3.2+), you can use the class <code>.container-fluid</code> to create the fluid layouts in order to utilize the 100% width of the viewport.</p>
				<p>The class <code>.container-fluid</code> simply applies the horizontal margin with the value <code>auto</code> and left and right padding of 15px on element to offset the left and right margin of -15px (i.e.&nbsp;<code>margin:&nbsp;0&nbsp;-15px;</code>) used on the <code>.row</code> class.</p>
				<p>The following code creates a fluid layout that covers 100% width of the screen.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6714.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code1">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap 3 Fluid Layout Example</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
    <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container-fluid">
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
    <div class="jumbotron">
        <div class="container-fluid">
            <h1>Learn to Create Websites</h1>
            <p>In today's world internet is the most popular way of connecting with the people. At <a href="https://www.webschooltoday.com" target="_blank">webschooltoday.com</a> you will learn the essential of web development technologies along with real life practice example, so that you can create your own website to connect with the people around the world.</p>
            <p><a href="https://www.webschooltoday.com" target="_blank" class="btn btn-success btn-lg">Get started today</a></p>
        </div>
    </div>
    <div class="container-fluid">
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
						</ul>
                    </div>
                </div>

                <div class="bottom-link clearfix">
                    <a href="bt_fixed-layout.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_responsive-layout.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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