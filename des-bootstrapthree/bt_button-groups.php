<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="How to Use Bootstrap 3 Button Group Component">
	  <meta name="keywords" content="Bootstrap,Bootstrap3,Use Bootstrap 3 Button Group Component">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Use Bootstrap 3 Button Group Component - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Use Bootstrap 3 Button Group Component</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
        </div>
        <a href="bt_images.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_buttons.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Button Groups</span></h1>
                <p class="summary">In this tutorial you will learn how to use Bootstrap button group component.</p>
                <h2>Creating Button Group with Bootstrap</h2>
				<p>In the previous chapter you've learnt how to create different types of individual buttons and modify them with predefined classes. Bootstrap however, also allows you to group a series of buttons together in a single line through the button group component.</p>
				<p>To create a button groups just wrap a series of buttons in a <code><a href="../info-html/ht_div-tag.php">&lt;div&gt;</a></code> element and apply the class <code>.btn-group</code> on it, like shown in the example below:</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab5e49.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<div class="btn-group">
    <button type="button" class="btn btn-primary">Left</button>
    <button type="button" class="btn btn-primary">Middle</button>
    <button type="button" class="btn btn-primary">Right</button>
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
                <p>You can also make the button groups appear vertically stacked rather than horizontally. To do this just replace the class <code>.btn-group</code> with the <code>.btn-group-vertical</code>.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabc3a9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<div class="btn-group-vertical">
    <button type="button" class="btn btn-primary">Top</button>
    <button type="button" class="btn btn-primary">Middle</button>
    <button type="button" class="btn btn-primary">Bottom</button>
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
				<h2>Creating Button Toolbar</h2>
				<p>You can also combine sets of button groups together for creating more complex components like button toolbar. To create button toolbar just wrap sets of button groups in a <code><a href="../html-reference/html-div-tag.html">&lt;div&gt;</a></code> element and apply the class <code>.btn-toolbar</code> on it.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabb55f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code3">

<div class="btn-toolbar">
    <div class="btn-group">
        <button type="button" class="btn btn-primary">1</button>
        <button type="button" class="btn btn-primary">2</button>
        <button type="button" class="btn btn-primary">3</button>
        <button type="button" class="btn btn-primary">4</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-primary">5</button>
        <button type="button" class="btn btn-primary">6</button>
        <button type="button" class="btn btn-primary">7</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-primary">8</button>
    </div>
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
				<h2>Height Sizing of Button Groups</h2>
				<p>You can also apply relative sizing classes like <code>.btn-group-lg</code>, <code>.btn-group-sm</code> or <code>.btn-group-xs</code> on button groups to create larger or smaller button groups. Just add these button sizing classes directly to the <code>.btn-group</code>, instead of applying to every button.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab20cf.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code4">

<div class="btn-toolbar">
    <div class="btn-group btn-group-lg">
        <button type="button" class="btn btn-primary">Left</button>
        <button type="button" class="btn btn-primary">Middle</button>
        <button type="button" class="btn btn-primary">Right</button>
    </div>
</div>
<div class="btn-toolbar">
    <div class="btn-group">
        <button type="button" class="btn btn-primary">Left</button>
        <button type="button" class="btn btn-primary">Middle</button>
        <button type="button" class="btn btn-primary">Right</button>
    </div>
</div>
<div class="btn-toolbar">
    <div class="btn-group btn-group-sm">
        <button type="button" class="btn btn-primary">Left</button>
        <button type="button" class="btn btn-primary">Middle</button>
        <button type="button" class="btn btn-primary">Right</button>
    </div>
</div>
<div class="btn-toolbar">
    <div class="btn-group btn-group-xs">
        <button type="button" class="btn btn-primary">Left</button>
        <button type="button" class="btn btn-primary">Middle</button>
        <button type="button" class="btn btn-primary">Right</button>
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
				<h2>Creating Justified Button Groups</h2>
				<p>You can also make a group of buttons stretch at the same size to span the entire width of its parent by appling an extra class <code>.btn-group-justified</code> to the <code>.btn-group</code> base class.</p>
				<p>The following example will create a justified button group using the <code><a href="../info-html/ht_a-tag.php">&lt;a&gt;</a></code> element.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab1936.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<div class="btn-group btn-group-justified">
    <a href="#" class="btn btn-primary">Left</a>
    <a href="#" class="btn btn-primary">Middle</a>
    <a href="#" class="btn btn-primary">Right</a>
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
				<p>However, to create justified button groups using the <code>&lt;button&gt;</code> elements, you must wrap each button individually in a <code>.btn-group</code> class, otherwise it will not work.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabb50c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

<div class="btn-group btn-group-justified">
    <div class="btn-group">
        <button type="button" class="btn btn-primary">Left</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-primary">Middle</button>
    </div>
    <div class="btn-group">
        <button type="button" class="btn btn-primary">Right</button>
    </div>
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
				<p>The story doesn't ends here; in the advanced section you'll learn how to create <a href="bt_dropdowns.php#button-dropdowns">button&nbsp;dropdowns</a> as well as <a href="bt_stateful-buttons.php">stateful buttons</a> through activating the toggling and loading state on simple buttons and the button groups component.</p>
                <div class="bottom-link clearfix">
                    <a href="bt_buttons.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_images.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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