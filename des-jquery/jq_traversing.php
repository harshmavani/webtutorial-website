<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="jQuery Traversing DOM Elements">
	  <meta name="keywords" content="jquery,jq,js,jQuery Traversing DOM Elements">
	  <meta name="author" content="webschooltoday.com">
    <title>jQuery Traversing DOM Elements - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">jQuery Traversing DOM Elements</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_traversing-ancestors.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_dimensions.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery <span>Traversing</span></h1>
				<p class="summary">In this tutorial you will learn how to traverse through HTML DOM using jQuery.</p>
				<h2>What is Traversing</h2>
				<p>The jQuery selectors we've seen so far only allow us to select the elements down the DOM tree. But there are many occasions when you need to select a parent or ancestor element; that is where jQuery's DOM traversal methods come into play. With these traversal methods, we can go up, down, and all around the DOM tree very easily.</p>
				<p>DOM traversing is one of the prominent features of the jQuery. To make the most it you need to understand the relationships between the elements in a DOM tree.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2f3d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

<body>
    <div class="container">
        <h1>Hello World</h1>
        <p>This is a <em>simple paragraph</em>.</p>
        <ul>
            <li>Item One</li>
            <li>Item Two</li>
        </ul>
    </div>
</body>


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
				<p>The HTML code in the example above can be represented by the following DOM tree:</p>
				<div class="illustration">
					<img src="../assets/images/tree1.png" alt="DOM Tree" />
				</div>
				<p>The above diagram showing the parent/child relationships between the elements:</p>
				<ul>
					<li>The <code>&lt;body&gt;</code> element is the <b><i>parent</i></b> of the <code>&lt;div&gt;</code> element, and an <b><i>ancestor</i></b> of everything inside of it. The enclosed <code>&lt;div&gt;</code> element is the <b><i>parent</i></b> of <code>&lt;h1&gt;</code>, <code>&lt;p&gt;</code> and <code>&lt;ul&gt;</code> elements, and a <b><i>child</i></b> of the <code>&lt;body&gt;</code> element.</li>
					<li>The elements <code>&lt;h1&gt;</code>, <code>&lt;p&gt;</code> and <code>&lt;ul&gt;</code> are <b><i>siblings</i></b>, since they share the same parent.</li>
					<li>The <code>&lt;h1&gt;</code> element is a <b><i>child</i></b> of the <code>&lt;div&gt;</code> element and a <b><i>descendant</i></b> of the <code>&lt;body&gt;</code> element. This element does not have any children.</li>
					<li>The <code>&lt;p&gt;</code> element is the <b><i>parent</i></b> of <code>&lt;em&gt;</code> element, <b><i>child</i></b> of the <code>&lt;div&gt;</code> element and a <b><i>descendant</i></b> of the <code>&lt;body&gt;</code> element. The containing <code>&lt;em&gt;</code> element is a <b><i>child</i></b> of this <code>&lt;p&gt;</code> element and a <b><i>descendant</i></b> of the <code>&lt;div&gt;</code> and <code>&lt;body&gt;</code> element.</li>
					<li>Similarly, the <code>&lt;ul&gt;</code> element is the <b><i>parent</i></b> of the <code>&lt;li&gt;</code> elements, <b><i>child</i></b> of the <code>&lt;div&gt;</code> element and a <b><i>descendant</i></b> of the <code>&lt;body&gt;</code> element. The containing <code>&lt;li&gt;</code> elements are the <b><i>child</i></b> of this <code>&lt;ul&gt;</code> element and a <b><i>descendant</i></b> of the <code>&lt;div&gt;</code> and <code>&lt;body&gt;</code> element. Also, both the <code>&lt;li&gt;</code> elements are <b><i>siblings</i></b>.</li>
				</ul>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> In logical relationships, an ancestor is a parent, grandparent, great-grandparent, and so on. A descendant is a child, grandchild, great-grandchild, and so on. Sibling elements are those which share the same parent.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Traversing the DOM Tree</h2>
				<p>Now that you have understood the logical relationships between the elements in a DOM tree. In the upcoming chapters you will learn how to perform various traversing operations such as traversing up, down and sideways the DOM tree using the jQuery.</p>
				<p>In the next chapter you will learn how to select upper elements in a DOM tree.</p>
				<div class="bottom-link clearfix">
					<a href="jq_dimensions.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_traversing-ancestors.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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