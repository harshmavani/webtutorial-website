<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="Bootstrap 4 Responsive, Fixed Top / Bottom Navbar and More">
	  <meta name="keywords" content="Bootstrap,Bootstrap4,Fixed Top,Bottom Navbar,Responsive,Bootstrap topbar,bootstrap bottombar">
	  <meta name="author" content="webschooltoday.com">
    <title>Bootstrap 4 Responsive, Fixed Top / Bottom Navbar and More - WebSchool Today
</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">Bootstrap 4 Responsive, Fixed Top / Bottom Navbar and More</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
               </div>
               <a href="bt_breadcrumbs.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_navs.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Navbar</span></h1>
                <p class="summary">In this tutorial you will learn how to create static and fixed positioned responsive navigation headers using the Bootstrap navbar component.</p>
                <h2>Creating a Simple Navbar with Bootstrap</h2>
				<p>You can use the Bootstrap navbar component to create responsive navigation header for your website or application. These responsive navbar initially collapsed on devices having small viewports like cell-phones but expand when user click the toggle button. However, it will be horizontal as normal on the medium and large devices like laptop or desktop.</p>
				<p>You can also create different variations of the navbar such as navbars with dropdown menus and search boxes as well as fixed positioned navbar with much less effort. The following example will show you how to create a simple static navbar with navigation links.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab26cd.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1" >
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="#" class="navbar-brand">Brand</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="#" class="nav-item nav-link active">Home</a>
            <a href="#" class="nav-item nav-link">Profile</a>
            <a href="#" class="nav-item nav-link">Messages</a>
            <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
        </div>
        <div class="navbar-nav ml-auto">
            <a href="#" class="nav-item nav-link">Login</a>
        </div>
    </div>
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
				
				<p>Moreover, instead of plain text, you can also place your logo image inside the navbar. However, you need to set the logo height manually to fit it properly inside the navbar, as shown here:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7de2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2" >
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="#" class="navbar-brand">
        <img src="images/logo.svg" height="28" alt="CoolBrand">
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="#" class="nav-item nav-link active">Home</a>
            <a href="#" class="nav-item nav-link">Profile</a>
            <a href="#" class="nav-item nav-link">Messages</a>
            <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
        </div>
        <div class="navbar-nav ml-auto">
            <a href="#" class="nav-item nav-link">Login</a>
        </div>
    </div>
</nav>
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

                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Use the utility classes such as <code>.ml-auto</code>, <code>.mr-auto</code>, <code>.justify-content-between</code>, etc. to align the nav links, forms, buttons or text inside the navbar.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Adding Dropdowns to Navbar</h2>
				<p>You can also include dropdowns and search box within the navbars, as shown here:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb4e9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3" >
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="#" class="navbar-brand">Brand</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="#" class="nav-item nav-link active">Home</a>
            <a href="#" class="nav-item nav-link">Profile</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Messages</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Inbox</a>
                    <a href="#" class="dropdown-item">Sent</a>
                    <a href="#" class="dropdown-item">Drafts</a>
                </div>
            </div>
        </div>
        <form class="form-inline">
            <div class="input-group">                    
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-append">
                    <button type="button" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
        <div class="navbar-nav">
            <a href="#" class="nav-item nav-link">Login</a>
        </div>
    </div>
</nav>
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

				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box" style="background-color:#fad28c">
							<p><strong>Important:</strong> To create navbars that is not fixed on the top or bottom, place it anywhere within a <code>.container</code>, which sets the width of your site and content.</p>
						</div>
					</div>
				</div>
                <p>Check out the snippets section for examples of some <a href="../snippets/galleryc18d.php?tag=navbar" target="_blank">beautifully designed Bootstrap navbars</a>.</p>
                <hr />
                <h2>Placing Search Form inside Navbar</h2>
                <p>Search form is very common component of the navbars and you have seen it on various website quite often. You can place various form controls and components within a navbar using the class <code>.form-inline</code> on the <a href="../info-html
/ht_form-tag.php"><code>&lt;form&gt;</code></a> element, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5cba.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4" >
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="#" class="navbar-brand">Brand</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="#" class="nav-item nav-link active">Home</a>
            <a href="#" class="nav-item nav-link">About</a>
            <a href="#" class="nav-item nav-link">Products</a>
        </div>
        <form class="form-inline ml-auto">
            <input type="text" class="form-control mr-sm-2" placeholder="Search">
            <button type="submit" class="btn btn-outline-light">Search</button>
        </form>
    </div>
</nav>
                 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code4"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
                    </div>
                </div>

                <hr />
                <h2>Changing the Color Scheme of Navbars</h2>
                <p>You can also change the color scheme of the navbar by using the <code>.navbar-light</code> for the light background colors, or <code>.navbar-dark</code> for the dark background colors. Then, customize it with the background-color utility classes, such as <code>.bg-dark</code>, <code>.bg-primary</code>, and so on.</p>
                <p>Alternatively, you can also apply the CSS <a href="../info-css/style_background-color-property.php"><code>background-color</code></a> property on the <code>.navbar</code> element yourself to customize the navbar theme, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1799.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5" >
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <!-- Navbar content -->
</nav>

<nav class="navbar navbar-dark bg-primary">
    <!-- Navbar content -->
</nav>

<nav class="navbar navbar-light" style="background-color: #ddeeff;">
    <!-- Navbar content -->
</nav>
                 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code5"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
                    </div>
                </div>

                <hr />
				<h2>Bootstrap Fixed Navbar</h2>
                <p>Bootstrap also provides mechanism to create navbar that is fixed on the top or bottom of the viewport and will scroll with the content on the page.</p>
                <h3>Creating the Fixed to Top Navbar</h3>
                <p>Apply the position utility class <code>.fixed-top</code> to the <code>.navbar</code> element to fix the navbar at the top of the viewport, so that it won't scroll with the page. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5cbd.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6" >
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <!-- Navbar content -->
</nav>
                 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code6"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
                    </div>
                </div>
				<h3>Creating the Fixed to Bottom Navbar</h3>
                <p>Similarly, add the class <code>.fixed-bottom</code> on the <code>.navbar</code> element to fix the navbar at the bottom of the viewport, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab29ad.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7" >
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-bottom">
    <!-- Navbar content -->
</nav>
                 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code7"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
                    </div>
                </div>
                <h3>Creating the Sticky Top Navbar</h3>
                <p>You can also create sticky top navbar that scrolls with the page until it reaches the top, then stays there, by simply using the <code>.sticky-top</code> class on the <code>.navbar</code> element, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8b4a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8" >
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <!-- Navbar content -->
</nav>
                 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code8"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
                    </div>
                </div>
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box" style="background-color:#fad28c">
                            <p><strong>Important:</strong> Place the fixed <code>.navbar</code> content inside the <code>.container</code> or <code>.container-fluid</code> for proper padding and alignment with the rest of the content.</p>
                        </div>
                    </div>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Remember to add <code><a href="../info-css/style_padding-property.php">padding</a></code> (at least 70px) to the top or bottom of the <code><a href="../info-html/ht_body-tag.php">&lt;body&gt;</a></code> element to prevent the content to go underneath the navbar while implementing the fixed top or bottom navbar. Also, be sure to add your custom <a href="../des-html/ht_styles.php">style sheet</a> after the core Bootstrap CSS file, otherwise style rules in your style sheet may be overridden by the Bootstrap's one.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bt_navs.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous /a>
                    <a href="bt_breadcrumbs.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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