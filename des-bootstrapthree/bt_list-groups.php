<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta name="description" content="Learn how to use Bootstrap list group component to create complex list structure such as sidebar menu to display the list of products or categories on website." />
	  <meta name="keywords" content="Bootstrap,Bootstrap3,List Group Component">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Use Bootstrap 3 List Group Component - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Use Bootstrap 3 List Group Component</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
             </div>
             <a href="bt_forms.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>
                <a href="bt_lists.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>List Groups</span></h1>
                <p class="summary">In this tutorial you will learn how to use Bootstrap list group component.</p>
                <h2>Creating List Groups with Bootstrap</h2>
				<p>The list groups are very useful and flexible component for displaying lists of elements in a beautiful manner. In most basic form a list group is simply an <a href="../des-html/ht_lists.php">unordered list</a> with the class <code>.list-group</code> whereas, the list items having the class <code>.list-group-item</code>.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab70d7.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<ul class="list-group">
    <li class="list-group-item">Pictures</li>
    <li class="list-group-item">Documents</li>        
    <li class="list-group-item">Music</li>
    <li class="list-group-item">Videos</li>
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
				<hr />
				<h2>List Group with Linked Items</h2>
				<p>You can also <a href="../des-html/ht_links.php">hyperlink</a> list group items with the little change in HTML markup.</p>
				<p>Just replace the <code><a href="../info-html/ht_li-tag.php">&lt;li&gt;</a></code> with <code><a href="../info-html/ht_a-tag.php">&lt;a&gt;</a></code> tag and use <code><a href="../info-html/ht_div-tag.php">&lt;div&gt;</a></code> element as a parent instead of <code><a href="../info-html/ht_ul-tag.php">&lt;ul&gt;</a></code>. You can also add <a href="bt_icons.php">icons</a> and <a href="bt_labels-and-badges.php">badges</a> to this list group to make it more elegant. The badges component will automatically be positioned on the right.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabb3dd.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code2">

<div class="list-group">
    <a href="#" class="list-group-item active">
        <span class="glyphicon glyphicon-camera"></span> Pictures <span class="badge">25</span>
    </a>
    <a href="#" class="list-group-item">
        <span class="glyphicon glyphicon-file"></span> Documents <span class="badge">145</span>
    </a>
    <a href="#" class="list-group-item">
        <span class="glyphicon glyphicon-music"></span> Music <span class="badge">50</span>
    </a>
    <a href="#" class="list-group-item">
        <span class="glyphicon glyphicon-film"></span> Videos <span class="badge">8</span>
    </a>
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
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box" style="background-color:#fad28c"
>
							<p><strong>Important:</strong> You can use the Bootstrap list group component for creating the sidebar navigation menu, e.g. displaying the list of products or categories on your website.</p>
						</div>
					</div>
				</div>
				<p>You can also add other HTML elements like headings and paragraph within these list groups.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabeefd.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code3">

<div class="list-group">
    <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">What is HTML?</h4>
        <p class="list-group-item-text">HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages.</p>
    </a>
    <a href="#" class="list-group-item active">
        <h4 class="list-group-item-heading">What is Bootstrap?</h4>
        <p class="list-group-item-text">Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions.</p>
    </a>
    <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">What is CSS?</h4>
        <p class="list-group-item-text">CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc.</p>
    </a>
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
				<h2>List Group with Contextual States</h2>
				<p>Like most of the other components you can also use contextual classes on the list group items to apply extra emphasis on them, like this:</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab65ab.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<ul class="list-group">
    <li class="list-group-item list-group-item-success">200 OK: The server successfully processed the request.</li>
    <li class="list-group-item list-group-item-info">100 Continue: The client should continue with its request.</li>
    <li class="list-group-item list-group-item-warning">503 Service Unavailable: The server is temporarily unable to handle the request.</li>
    <li class="list-group-item list-group-item-danger">400 Bad Request: The request cannot be fulfilled due to bad syntax.</li>
</ul>

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
				<p>Similarly, you can use these contextual classes to the linked list group items. You can also use the class <code>.active</code> to specify the active list group item.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab4117.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<div class="list-group">
    <a href="#" class="list-group-item list-group-item-success">200 OK: The server successfully processed the request.</a>
    <a href="#" class="list-group-item list-group-item-info active">100 Continue: The client should continue with its request.</a>
    <a href="#" class="list-group-item list-group-item-warning">503 Service Unavailable: The server is temporarily unable to handle the request.</a>
    <a href="#" class="list-group-item list-group-item-danger">400 Bad Request: The request cannot be fulfilled due to bad syntax.</a>
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
                <div class="bottom-link clearfix">
                    <a href="bt_lists.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_forms.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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