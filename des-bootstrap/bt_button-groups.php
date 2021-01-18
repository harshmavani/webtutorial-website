<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>How to Use Bootstrap 4 Button Group Component - WebSchool Today</title>

<meta name="description" content="How to Use Bootstrap 4 Button Group Component">
  <meta name="keywords" content="Bootstrap,Bootstrap4,Bootstrapbutton,Bootstrap4 Button Group Component">
  <?php include "../links.php" ?>
</head>
<body>
<div>
        <div class="tital">Bootstrap 4 Warning, Info, Success and Error Alerts</div>

<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
              </div>
              <a href="bt_images.php" class="next-page" title="Go to Next Page">	<i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_buttons.php" class="previous-page" title="Go to Previous Page">	<i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Button Groups</span></h1>
                <p class="summary">In this tutorial you will learn how to use Bootstrap button group component.</p>
                <h2>Creating Button Groups with Bootstrap</h2>
				<p>In the previous chapter you've learnt how to create different types of individual buttons and modify them with predefined classes. Bootstrap however, also allows you to group a series of buttons together in a single line through the button group component.</p>
				<p>To create a button groups just wrap a series of buttons with <code>.btn</code> class in a <a href="../info-html/ht_div-tag.php"><code>&lt;div&gt;</code></a> element and apply the class <code>.btn-group</code> on it, as demonstrated in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0569.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1" >

<div class="btn-group">
    <button type="button" class="btn btn-primary">Home</button>
    <button type="button" class="btn btn-primary">About</button>
    <button type="button" class="btn btn-primary">Services</button>
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
				<h2>Creating Button Toolbar</h2>
				<p>You can also combine sets of button groups together for creating more complex components like button toolbar. To create button toolbar just wrap sets of button groups in a <a href="../info-html/ht_div-tag.php"><code>&lt;div&gt;</code></a> element and apply the class <code>.btn-toolbar</code> on it, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab55c2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code2" >

<div class="btn-group mr-2">
    <button type="button" class="btn btn-primary">
        <i class="fa fa-font"></i>
    </button>
    <button type="button" class="btn btn-primary">
        <i class="fa fa-bold"></i>
    </button>
    <button type="button" class="btn btn-primary">
        <i class="fa fa-italic"></i>
    </button>
</div>
<div class="btn-group mr-2">
    <button type="button" class="btn btn-primary">
        <i class="fa fa-align-left"></i>
    </button>
    <button type="button" class="btn btn-primary">
        <i class="fa fa-align-center"></i>
    </button>
    <button type="button" class="btn btn-primary">
        <i class="fa fa-align-right"></i>
    </button>
    <button type="button" class="btn btn-primary">
        <i class="fa fa-align-justify"></i>
    </button>
</div>
<div class="btn-group">
    <button type="button" class="btn btn-primary">
        <i class="fa fa-undo"></i>
    </button>
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
				<hr />
				<h2>Height Sizing of Button Groups</h2>
				<p>Instead of applying button sizing classes to every button in a group, you can simply apply button group sizing classes like <code>.btn-group-lg</code> or <code>.btn-group-sm</code> directly to each <code>.btn-group</code> element to create larger or smaller button groups, as shown in the example below:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1328.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code3" >

<div class="btn-group mb-2 btn-group-lg">
    <button type="button" class="btn btn-primary">Home</button>
    <button type="button" class="btn btn-primary">About</button>
    <button type="button" class="btn btn-primary">Services</button>
</div>
<br>
<div class="btn-group mb-2">
    <button type="button" class="btn btn-primary">Home</button>
    <button type="button" class="btn btn-primary">About</button>
    <button type="button" class="btn btn-primary">Services</button>
</div>
<br>
<div class="btn-group btn-group-sm">
    <button type="button" class="btn btn-primary">Home</button>
    <button type="button" class="btn btn-primary">About</button>
    <button type="button" class="btn btn-primary">Services</button>
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
                <h2>Nesting Button Groups</h2>
                <p>Button groups can also be nested. The following example demonstrates how to place a <code>.btn-group</code> within another <code>.btn-group</code> to create dropdown menus inside button groups.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4d16.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4" >

<div class="btn-group">
    <a href="#" class="btn btn-primary">Home</a>
    <a href="#" class="btn btn-primary">About</a>
    <div class="btn-group">
        <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Services</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Web Design</a>
            <a class="dropdown-item" href="#">Web Development</a>
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
                <h2>Vertically Stacked Button Groups</h2>
                <p>You can also make the button groups appear vertically stacked rather than horizontally. To do this just replace the class <code>.btn-group</code> with the <code>.btn-group-vertical</code>, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab02c0.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5" >

<div class="btn-group-vertical">
    <a href="#" class="btn btn-primary">Home</a>
    <a href="#" class="btn btn-primary">About</a>
    <div class="btn-group">
        <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Services</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Web Design</a>
            <a class="dropdown-item" href="#">Web Development</a>
        </div>
    </div>
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
				<h2>Creating Justified Button Groups</h2>
				<p>You can also stretch your button groups to fill all the available width by applying the flex utility class <code>.d-flex</code> to the <code>.btn-group</code> element. Every button has equal width in this case.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6af5-2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6" >

<div class="btn-group d-flex">
    <button type="button" class="btn btn-primary">Home</button>
    <button type="button" class="btn btn-primary">About</button>
    <button type="button" class="btn btn-primary">Services</button>
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
				<p>The story doesn't ends here; in the advanced section you'll learn more about <a href="bt_dropdowns.php#button-dropdowns">button&nbsp;dropdowns</a>, as well as how create <a href="bt_stateful-buttons.php">stateful buttons</a> to enable radio or checkbox style toggling, and more.</p>
                <div class="bottom-link clearfix">
                    <a href="bt_buttons.php" class="previous-page-bottom">	<i class="fa fa-arrow-left" aria-hidden="true"></i>
Previous</a>
                    <a href="bt_images.php" class="next-page-bottom"  style="float: right;">Next	<i class="fa fa-arrow-right" aria-hidden="true"></i>
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