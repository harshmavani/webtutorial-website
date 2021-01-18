<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="jQuery Get and Set CSS Properties">
	  <meta name="keywords" content="jquery,jq,js,jQuery Get and Set CSS Properties">
	  <meta name="author" content="webschooltoday.com">
    <title>jQuery Get and Set CSS Properties - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">jQuery Get and Set CSS Properties</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_dimensions.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_add-and-remove-css-classes.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery <span>Get</span> and <span>Set</span> CSS Properties</h1>
				<p class="summary">In this tutorial you will learn how to get or set style properties using jQuery.</p>
				<h2>jQuery <code>css()</code> Method</h2>
				<p>The jQuery <code>css()</code> method is used to get the <a href="../definitions.php#computed-value">computed value</a> of a CSS property or set one or more CSS properties for the selected elements.</p>
				<p class="space">This method provides a quick way to apply the styles directly to the HTML elements (i.e. <a href="../des-html/html-styles.php">inline styles</a>) that haven't been or can't easily be defined in a stylesheet.</p>
				<h2>Get a CSS Property Value</h2>
				<p>You can get the computed value of an element's CSS property by simply passing the property name as a parameter to the <code>css()</code> method. Here's the basic syntax:</p>
				<div class="shadow">
                    <div class="syntax">$(selector).css("propertyName");</div>
                </div>
				<p>The following example will retrieve and display the computed value of the CSS <a href="../info-css/css-background-color-property.php"><code>background-color</code></a> property of a <a href="../info-html/html-div-tag.php"><code>&lt;div&gt;</code></a> element, when it is clicked.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7aec.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery css() Demo</title>
<style>
    div{
        width: 100px;
        height: 100px;        
        display: inline-block;
        margin: 10px;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("div").click(function(){
        var color = $(this).css("background-color");
        $("#result").php(color);
    });    
});
</script>
</head>
<body>
    <div style="background-color:orange;"></div>
    <div style="background-color:#ee82ee;"></div>
    <div style="background-color:rgb(139,205,50);"></div>
    <div style="background-color:#f00;"></div>
    <p>The computed background-color property value of the clicked DIV element is: <b id="result"></b></p>
</body>
</html>

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
				<h2>Set a Single CSS Property and Value</h2>
				<p>The <code>css()</code> method can take a property name and value as separate parameters for setting a single CSS property for the elements. The basic syntax can be given with:</p>
				<div class="shadow">
                    <div class="syntax">$(selector).css("propertyName", "value");</div>
                </div>
				<p>The following example will set the CSS <code>background-color</code> property of the <code>&lt;div&gt;</code> elements, to the <a href="../info-css/css-color-values.php">color value</a> <code>blue</code>, when it is clicked.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe8e6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery css() Demo</title>
<style>
    .box{
        width: 100px;
        height: 100px;
        display: inline-block;        
        border: 1px solid #cdcdcd;
        margin: 10px;
    }        
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $(".box").click(function(){
        $(this).css("background-color", "blue");
    });    
});
</script>
</head>
<body>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
    <div class="box"></div>
</body>
</html>

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
				<h2>Set Multiple CSS Properties and Values</h2>
				<p>You can also set multiple CSS properties with the <code>css()</code> method. The basic syntax for setting the more than one property for the elements can be given with:</p>
				<div class="shadow">
                    <div class="syntax">$(selector).css({"propertyName":"value", "propertyName":"value", ...});</div>
                </div>
				<p>The following example will set the <code>background-color</code> as well as the <a href="../info-css/css-padding-property.php"><code>padding</code></a> CSS property for the selected elements at the same time.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbcd2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery css() Demo</title>
<style>
    p{
        font-size: 18px;
        font-family: Arial, sans-serif;
    }
</style>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("p").css({"background-color": "yellow", "padding": "20px"});
    });    
});
</script>
</head>
<body>
    <h1>This is a heading</h1>
    <p style="background-color:orange;">This a paragraph.</p>
    <p style="background-color:#ee82ee;">This is another paragraph.</p>
    <p style="background-color:rgb(139,205,50);">This is none more paragraph.</p>
    <p>This is one last paragraph.</p>
    <button type="button">Add CSS Styles</button>
</body>
</html>

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
				<div class="bottom-link clearfix">
					<a href="jq_add-and-remove-css-classes.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_dimensions.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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