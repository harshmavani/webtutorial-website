<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="How to Use Bootstrap 4 List Group Component">
	  <meta name="keywords" content="Bootstrap,Bootstrap4,list group,Bootstrap 4 List Group Component,List Group Component">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Use Bootstrap 4 List Group Component - WebSchool Today
</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Use Bootstrap 4 List Group Component</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
             </div>
             <a href="bt_forms.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_lists.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>List Groups</span></h1>
                <p class="summary">In this tutorial you will learn how to use Bootstrap list group component.</p>
                <h2>Creating List Groups with Bootstrap</h2>
				<p>The list groups are very useful and flexible component for displaying lists of elements in a beautiful manner. In most basic form a list group is simply an <a href="../des-html/ht_lists.php">unordered list</a> with the class <code>.list-group</code> whereas, the list items having the class <code>.list-group-item</code>.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3d25.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1" >

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
				<p>Just replace the <a href="../info-html/ht_li-tag.php"><code>&lt;li&gt;</code></a> with <a href="../info-html/ht_a-tag.php"><code>&lt;a&gt;</code></a> tag and use <a href="../info-html/ht_div-tag.php"><code>&lt;div&gt;</code></a> element as a parent instead of <a href="../info-html/ht_ul-tag.php"><code>&lt;ul&gt;</code></a>. You can also add <a href="bt_icons.php">icons</a> and <a href="bt_badges.php">badges</a> to this list group to make it more elegant. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab45bd.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2" >

<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action active">
        <i class="fa fa-home"></i> Home
    </a>
    <a href="#" class="list-group-item list-group-item-action">
        <i class="fa fa-camera"></i> Pictures <span class="badge badge-pill badge-primary pull-right">145</span>
    </a>
    <a href="#" class="list-group-item list-group-item-action">
        <i class="fa fa-music"></i> Music <span class="badge badge-pill badge-primary pull-right">50</span>
    </a>
    <a href="#" class="list-group-item list-group-item-action">
        <i class="fa fa-film"></i> Videos <span class="badge badge-pill badge-primary pull-right">8</span>
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
						<div class="tip-box" style="background-color:#fad28c">
							<p><strong>Important:</strong> You can use the Bootstrap list group component for creating the sidebar navigation menu, e.g. displaying the list of products or categories on your website.</p>
						</div>
					</div>
				</div>
				<p>You can also add other HTML elements like headings and paragraph within these list groups.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9b6e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3" >

<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
            <h4>Asteroid detected near earth</h4>
            <small>1 days ago</small>
        </div>        
        <p>Pulvinar leo id risus pellentesque vestibulum. Sed diam libero, sodales eget sapien vel, porttitor bibendum enim. Donec sed nibh vitae lorem porttitor blandit in nec ante.</p>
    </a>
    <a href="#" class="list-group-item list-group-item-action active">
        <div class="d-flex w-100 justify-content-between">
            <h4>Scientists found massive black hole</h4>
            <small>2 days ago</small>
        </div>
        <p>Vestibulum id metus ac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet sagittis. In tincidunt orci sit amet elementum vestibulum.</p>
    </a>
    <a href="#" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
            <h4>NASA launches solar probe</h4>
            <small>3 days ago</small>
        </div>        
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
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
				<p>Like most of the other components you can also use contextual classes on the list group items to apply extra emphasis on them. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc128.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4" >

<ul class="list-group">
    <li class="list-group-item">A simple default list group item</li>
    <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
    <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
    <li class="list-group-item list-group-item-success">A simple success list group item</li>
    <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
    <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
    <li class="list-group-item list-group-item-info">A simple info list group item</li>
    <li class="list-group-item list-group-item-light">A simple light list group item</li>
    <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
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
				<p>Similarly, you can use these contextual classes to the linked list group items. You can also use the class <code>.active</code> to specify the active list group item. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabae92.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5" >

<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action">A simple default list group item</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A simple primary list group item</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A simple secondary list group item</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A simple danger list group item</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A simple warning list group item</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info list group item</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light list group item</a>
    <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark list group item</a>
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
                <p>Please, check out the <a href="bt_tabs.php">Bootstrap tabs</a> chapter to learn how to create dynamic vertical tabs using the list group component without using any JavaScript code.</p>
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