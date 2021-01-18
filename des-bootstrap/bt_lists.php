<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="Formatting Lists with Bootstrap 4">
	  <meta name="keywords" content="Bootstrap,Bootstrap4,Formatting Lists with Bootstrap4,Formatting Lists">
	  <meta name="author" content="webschooltoday.com">
    <title>Formatting Lists with Bootstrap 4 - WebSchool Today
</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">Formatting Lists with Bootstrap 4</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
          </div>
          <a href="bt_list-groups.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_tables.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Lists</span></h1>
                <p class="summary">In this tutorial you will learn how to style HTML lists with Bootstrap.</p>
                <h2>Creating Lists With Bootstrap</h2>
                <p>You can create three different types of HTML lists:</p>
                <ul>
                	<li><strong>Unordered lists</strong> &mdash; A list of items in which the order does not explicitly matter. The list items in unordered lists are marked with bullets.</li>
                    <li><strong>Ordered lists</strong> &mdash; A list of items in which the order does explicitly matter. The list items in ordered lists are marked with numbers, e.g. 1, &#8565;, etc.</li>
                    <li><strong>Definition list</strong> &mdash; A list of terms with their associated descriptions.</li>
                </ul>
                <p>See the tutorial on <a href="../des-html/ht_lists.php">HTML Lists</a>, to learn more about different lists types.</p>
                <hr />
                <h2>Unstyled Ordered and Unordered Lists</h2>
                <p>Sometimes you might need to remove the default styling form the list items. You can do this by simply applying the class <code>.list-unstyled</code> to the respective <code>&lt;ul&gt;</code> or <code>&lt;ol&gt;</code> elements.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2f01.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1" >

<ul class="list-unstyled">
    <li>Home</li>
    <li>Products
        <ul>
            <li>Gadgets</li>
            <li>Accessories</li>
        </ul>
    </li>
    <li>About Us</li>
    <li>Contact</li>
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
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The <code>.list-unstyled</code> class removes the default <code><a href="../info-css/style_list-style-property.php">list-style</a></code> and left <code><a href="../info-css/style_padding-property.php">padding</a></code> only from the list items which are immediate children of the <code>&lt;ul&gt;</code> or <code>&lt;ol&gt;</code> element.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Placing Ordered and Unordered List Items Inline</h2>
                <p>If you want to create a horizontal menu using ordered or unordered list you need to place all list items in a single line i.e. side by side. You can do this by simply applying the class <code>.list-inline</code> to the respective <code>&lt;ul&gt;</code> or <code>&lt;ol&gt;</code>, and the class <code>.list-inline-item</code> to the <code>&lt;li&gt;</code> elements.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabcb79.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2" >

<ul class="list-inline">
    <li class="list-inline-item">Home</li>
    <li class="list-inline-item">Products</li>
    <li class="list-inline-item">About Us</li>
    <li class="list-inline-item">Contact</li>
</ul>
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
                <h2>Creating Horizontal Definition Lists</h2>
                <p>The terms and descriptions in a definition list can also be aligned horizontally side-by-side using the Bootstrap grid system's predefined classes. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5bec.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3" >

<dl class="row">
    <dt class="col-sm-3">User Agent</dt>
    <dd class="col-sm-9">An HTML user agent is any device that interprets HTML documents.</dd>
    <dt class="col-sm-3 text-truncate">Client-side Scripting</dt>
    <dd class="col-sm-9">Client-side scripting generally refers to the category of computer programs on the web that are executed by the user's web browser.</dd>
    <dt class="col-sm-3">Document Tree</dt>
    <dd class="col-sm-9">The tree of elements encoded in the source document.</dd>
</dl>
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

                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585"> 
                            <p><strong>Read Carefully:</strong> For longer definition terms, you can optionally apply the class <code>.text-truncate</code> on the <a href="../info-html/ht_dt-tag.php"><code>&lt;dt&gt;</code></a> element to truncate the text with an ellipsis (&hellip;).</p>
                        </div>
                    </div>
                </div>
				<p>In the next chapter you will learn how to create even more flexible and complex list of elements using the <a href="bt_list-groups.php">Bootstrap list group</a> component.</p>
                <div class="bottom-link clearfix">
                    <a href="bt_tables.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_list-groups.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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