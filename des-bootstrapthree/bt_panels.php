<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="Learn how to use Bootstrap panel component to place your contents like text, tables, list groups etc. in a styled box with proper heading and footer information." />
	  <meta name="keywords" content="Bootstrap,Bootstrap3,Panel Component">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Use Bootstrap 3 Panel Component - WebSchool Today</title>
	<?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Use Bootstrap 3 Panel Component</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
		</div>
		<a href="bt_breadcrumbs.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_navbar.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Panels</span></h1>
                <p class="summary">In this tutorial you will learn how to create panels with Bootstrap.</p>
                <h2>Introducing Bootstrap 3 Panels</h2>
				<p>Sometimes you might require to place your content in box for better presentation. In such situation the Bootstrap panel component can be very useful. In most basic form the panel component applies some <code><a href="../info-css/style_border-property.php">border</a></code> and <code><a href="../info-css/style_padding-property.php">padding</a></code> around the content.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab362d-2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

<div class="panel panel-default">
    <div class="panel-body">Look, I'm in a panel!</div>
</div>

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
				<hr />
				<h2>Panels with Heading</h2>
				<p>You can also add a heading to your panel with <code>.panel-heading</code> class.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabb0d9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code2">

<div class="panel panel-default">
    <div class="panel-heading">This Page is Disabled</div>
    <div class="panel-body">This page is temporarily disabled by the site administrator for some reason.<br> <a href="#">Click here</a> to enable the page.</div>
</div>

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
				<p>You can also include heading elements from <code><a href="../info-html/ht_headings-tag.php">&lt;h1&gt;</a></code> to <code><a href="../info-html/ht_headings-tag.php">&lt;h6&gt;</a></code> with a <code>.panel-title</code> class.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab9fd8.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code3">

<div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="panel-title">Panel Title</h1>
    </div>
    <div class="panel-body">Panel content…</div>
</div>

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
				<hr />
				<h2>Panels with Footer</h2>
				<p>Like heading you can also add footer section to your panels using the <code>.panel-footer</code> class. The panel's footer can be used to wrap buttons or secondary text.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab9ea1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code4">

<div class="panel panel-default">
    <div class="panel-body">This page is temporarily disabled by the site administrator for some reason.</div> 
    <div class="panel-footer clearfix">
        <div class="pull-right">
            <a href="#" class="btn btn-primary">Learn More</a>
            <a href="#" class="btn btn-default">Go Back</a>
        </div>
    </div>
</div>

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
				<h2>Panels with Contextual States</h2>
				<p>Like other component you also add contextual state classes like <code>.panel-primary</code>, <code>.panel-success</code>, <code>.panel-info</code>, <code>.panel-warning</code>, or <code>.panel-danger</code> on the panel components to make it more meaningful and drawing attention of the user.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabb93c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
						<textarea id="code5">

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">301 Moved Permanently</h3>
    </div>
    <div class="panel-body">The requested page has been permanently moved to a new location.</div>
</div>
<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">200 OK</h3>
    </div>
    <div class="panel-body">The server successfully processed the request.</div>
</div>
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">100 Continue</h3>
    </div>
    <div class="panel-body">The client should continue with its request.</div>
</div>
<div class="panel panel-warning">
    <div class="panel-heading">
        <h3 class="panel-title">400 Bad Request</h3>
    </div>
    <div class="panel-body">The request cannot be fulfilled due to bad syntax.</div>
</div>
<div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="panel-title">503 Service Unavailable</h3>
    </div>
    <div class="panel-body">The server is temporarily unable to handle the request.</div>
</div>

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
				<h2>Placing Tables and List Groups inside Panels</h2>
				<p>You can add any <a href="bt_tables.html">non-bordered table</a> within a panel to create more informative tables.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab4172.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
						<textarea id="code6">

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">User Information</div>
    <div class="panel-body">
        <p>The following table contains some personal information about users.</p>
    </div>
    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th>Row</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John</td>
                <td>Carter</td>
                <td>johncarter@mail.com</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Peter</td>
                <td>Parker</td>
                <td>peterparker@mail.com</td>
            </tr>
            <tr>
                <td>3</td>
                <td>John</td>
                <td>Rambo</td>
                <td>johnrambo@mail.com</td>
            </tr>
        </tbody> 
    </table>
</div>

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
				<p>Similarly you can include full-width <a href="bt_lists.php#list-groups">list groups</a> within any panel.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab8502.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
						<textarea id="code7">

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Products</div>
    <div class="panel-body">
        <p>The following products are currently available on our store.</p>
    </div>
    <!-- List group -->
    <div class="list-group">
        <a href="#" class="list-group-item">Mobile Phones <span class="badge">50</span>
        </a>
        <a href="#" class="list-group-item">Laptops &amp; Desktops <span class="badge">145</span>
        </a>
        <a href="#" class="list-group-item">Tablets <span class="badge">30</span>
        </a>  
        <a href="#" class="list-group-item">Audio &amp; Video Players <span class="badge">65</span>
        </a>
        <a href="#" class="list-group-item">Camera <span class="badge">8</span>
        </a>
    </div>
</div>

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
                <div class="bottom-link clearfix">
                    <a href="bt_navbar.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
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