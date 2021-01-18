
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML Ordered, Unordered, and Definition Lists">
	  <meta name="keywords" content="css,css3,HTML Ordered, Unordered, and Definition Lists">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML Ordered, Unordered, and Definition Lists - WebSchool Today</title>

<style type="text/css">
.preview-box{text-align:left;}
.tutorialbox .unordered-list-demo ul,.tutorialbox .ordered-list-demo ul{padding-left:40px}
.tutorialbox .unordered-list-demo ul{list-style-type:disc}
.tutorialbox .ordered-list-demo ul{list-style-type:decimal}
.tutorialbox .unordered-list-demo ul li,.tutorialbox .ordered-list-demo ul li{padding:0;background:none}
.tutorialbox .definition-list-demo dl{margin-top:-4px}
.tutorialbox .definition-list-demo dt{padding-top:4px}
.tutorialbox .definition-list-demo dd{margin-left:40px;padding:4px 0 0}
</style>
<?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">HTML Ordered, Unordered, and Definition Lists</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="ht_forms.html" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="ht_tables.html" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML <span>Lists</span></h1>
                <p class="summary">In this tutorial you will learn how to create different types of lists in HTML.</p>
                <h2>Working with HTML Lists</h2>
                <p>HTML lists are used to present list of information in well formed and semantic way. There are three different types of list in HTML and each one has a specific purpose and meaning.</p>
                <ul>
                    <li><strong>Unordered list</strong> &mdash; Used to create a list of related items, in no particular order.</li>
                    <li><strong>Ordered list</strong> &mdash; Used to create a list of related items, in a specific order.</li>
                    <li><strong>Description list</strong> &mdash; Used to create a list of terms and their descriptions.</li>
                </ul>
                <!--Note box-->
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Inside a list item you can put text, images, links, line breaks, etc. You can also place an entire list inside a list item to create the nested list.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <p class="space">In the following sections we will cover all the three types of list one by one:</p>
                <h2 id="unordered-lists">HTML Unordered Lists</h2>
                <p>An unordered list created using the <code>&lt;ul&gt;</code> element, and each list item starts with the <code>&lt;li&gt;</code> element.</p>
                <p>The list items in unordered lists are marked with bullets. Here's an example:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1f7d.html?topic=html&amp;file=unordered-list" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        <ul>
    <li>Chocolate Cake</li>
    <li>Black Forest Cake</li>
    <li>Pineapple Cake</li>
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
                <!--End:Code box-->
                <p class="break">&mdash; The output of the above example will look something like this:</p>
                <div class="shadow">
                    <div class="preview-box unordered-list-demo text-left">
                        <ul>
                            <li>Chocolate Cake</li>
                            <li>Black Forest Cake</li>
                            <li>Pineapple Cake</li>
                        </ul> 
                    </div>
                </div>
                <p>You can also change the bullet type in your unordered list using the CSS <a href="../info-css/css-list-style-type-property.html"><code>list-style-type</code></a> property. The following style rule changes the type of bullet from the default <em>disc</em> to <em>square</em>:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6684.html?topic=html&amp;file=change-bullet-type-in-an-unordered-list" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        ul {
    list-style-type: square;
}
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
                <!--End:Code box-->
                <p>Please check out the tutorial on <a href="../des-css/css-lists.html">CSS lists</a> to learn about styling HTML lists in details.</p>
                <hr />
                <h2 id="ordered-lists">HTML Ordered Lists</h2>
                <p>An ordered list created using the <code>&lt;ol&gt;</code> element, and each list item starts with the <code>&lt;li&gt;</code> element. Ordered lists are used when the order of the list's items is important.</p>
                <p>The list items in an ordered list are marked with numbers. Here's an example:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab57d7.html?topic=html&amp;file=ordered-list" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        <ol>
    <li>Fasten your seatbelt</li>
    <li>Starts the car's engine</li>
    <li>Look around and go</li>
</ol>
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
                <!--End:Code box-->
                <p>&mdash; The output of the above example will look something like this:</p>
                <div class="shadow">
                    <div class="preview-box ordered-list-demo text-left">
                        <ol style="list-style-type: decimal;padding-left: 40px;">
                            <li>Fasten your seatbelt</li>
                            <li>Starts the car's engine</li>
                            <li>Look around and go</li>
                        </ol> 
                    </div>
                </div>
                <p>The numbering of items in an ordered list typically starts with 1. However, if you want to change that you can use the <code>start</code> attribute, as shown in the following example:</p>
                 <!--Code box-->
                 <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1d88.html?topic=html&amp;file=change-start-number-in-an-ordered-list" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        <ol start="10">
    <li>Mix ingredients</li>
    <li>Bake in oven for an hour</li>
    <li>Allow to stand for ten minutes</li>
</ol>
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
                <!--End:Code box-->
                <p>&mdash; The output of the above example will look something like this:</p>
                <div class="shadow">
                    <div class="preview-box ordered-list-demo text-left">
                        <ol start="10" style="list-style-type: decimal;padding-left: 40px;">
                            <li>Mix ingredients</li>
                            <li>Bake in oven for an hour</li>
                            <li>Allow to stand for ten minutes</li>
                        </ol> 
                    </div>
                </div>
                <p>Like unordered list, you can also use the CSS <a href="../info-css/css-list-style-type-property.html"><code>list-style-type</code></a> property to change the numbering type in an ordered list. The following style rule changes the marker type to roman numbers.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab257e.html?topic=html&amp;file=change-numbering-type-in-an-ordered-list" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        ol {
    list-style-type: upper-roman;
}
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
                <!--End:Code box-->
                <!--Tip Box-->
				<div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> You can also use the <code>type</code> attribute to change the numbering type e.g. <code>type="I"</code>. However, you should avoid this attribute, use the CSS <code>list-style-type</code> property instead.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
                <hr />
                <h2>HTML Description Lists</h2>
                <p>A description list is a list of items with a description or definition of each item.</p>
                <p>The description list is created using <code>&lt;dl&gt;</code> element. The <code>&lt;dl&gt;</code> element is used in conjunction with the <code>&lt;dt&gt;</code> element which specify a term, and the <code>&lt;dd&gt;</code> element which specify the term's definition.</p>
                <p>Browsers usually render the definition lists by placing the terms and definitions in separate lines, where the term's definitions are slightly indented. Here's an example:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe5df.html?topic=html&amp;file=definition-list" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

                        <dl>
    <dt>Bread</dt>
    <dd>A baked food made of flour.</dd>
    <dt>Coffee</dt>
    <dd>A drink made from roasted coffee beans.</dd>
</dl>
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
                <!--End:Code box-->
                <p>&mdash; The output of the above example will look something like this:</p>
                <div class="shadow">
                    <div class="preview-box definition-list-demo text-left">
                        <dl>
                            <dt>Bread</dt>
                            <dd>A baked food made of flour.</dd>
                            <dt>Coffee</dt>
                            <dd>A drink made from roasted coffee beans.</dd>
                        </dl> 
                    </div>
                </div>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="ht_tables.html" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="ht_forms.html" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
 Page</a>
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