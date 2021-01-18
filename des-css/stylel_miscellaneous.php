<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Miscellaneous">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS3 Miscellaneous - WebSchool Today</title>
	<meta name="description" content="CSS3 Miscellaneous" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS3 Miscellaneous</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<a href="stylel_media-queries.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <a href="../style_examples.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <h1>CSS3 <span>Miscellaneous</span></h1>
                <p class="summary">In this tutorial we'll learn about few more interesting CSS3 features.</p>
                <h2>Extending User Interface with CSS3</h2>
                <p class="space">In this chapter we'll discuss about some interesting user interface related CSS3 properties like <a href="../info-css/stylel_resize-property.php"><code>resize</code></a>, <a href="../info-css/stylel_outline-offset-property.php"><code>outline-offset</code></a>, etc. that you can use to enhance your web pages.</p>
                <h2>Resizing Elements</h2>
                <p>You can make an element resizable horizontally, vertically or on both directions with the CSS3 <code>resize</code> property. However, this property is typically used to remove the default resizable behavior form the <a href="../info-html/html-textarea-tag.php"><code>&lt;textarea&gt;</code></a> form control.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe3b1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
                        p, div, textarea {
    width: 300px;
    min-height: 100px;
    overflow: auto;
    border: 1px solid black;
}
p {
   resize: horizontal; 
}
div {
    resize: both;
}
textarea {
    resize: none;
}
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
                <hr />
                <h2>Setting Outline Offset</h2>
                <p>In the previous section you've learnt how to set different properties for outlines like width, color and styles. However, CSS3 offer one more property <code>outline-offset</code> for setting the space between an outline and the border edge of an element. This property can accepts negative value that means you can also place outline inside an element.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba157.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
                        p, div {
    margin: 50px;
    height: 100px;
    background: #000;
    outline: 2px solid red;
}
p {
    outline-offset: 10px;
}
div {
    outline-offset: -15px;
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
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="stylel_media-queries.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="../style_examples.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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