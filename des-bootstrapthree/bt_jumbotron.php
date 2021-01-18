<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta name="description" content="Learn how to highlight or showcase the key content or information of your website using the flexible and versatile Bootstrap Jumbotron component." />
	  <meta name="keywords" content="Bootstrap,Bootstrap3,Jumbotron Component">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Use Bootstrap 3 Jumbotron Component - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Use Bootstrap 3 Jumbotron Component</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
      </div>
      <a href="bt_wells.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_progress-bars.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Jumbotron</span></h1>
                <p class="summary">In this tutorial you will learn how to use Bootstrap jumbotron component.</p>
                <h2>Showcasing Contents with Jumbotron</h2>
				<p>The Bootstrap jumbotron component provides an excellent way to showcase the key content or information on a web page. Just wrap your featured content like heading, descriptions etc. in a <code><a href="../info-html/ht_div-tag.php">&lt;div&gt;</a></code> element and apply the class <code>.jumbotron</code> on it.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab6b63.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<div class="jumbotron">
    <h1>Learn to Create Websites</h1>
    <p>In today's world internet is the most popular way…</p>
    <p><a href="#" class="btn btn-primary btn-lg">Learn more</a></p>
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
				<h2>Creating Full Page Width Jumbotron</h2>
				<p>To create a jumbotron without rounded corners and that covers the full width of the viewport, place it outside all the containers and add the <code>.container</code> within like this.</p>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab46ee.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<div class="jumbotron">
    <div class="container">
        <h1>Learn to Create Websites</h1>
        <p>In today's world internet is the most popular way…</p>
        <p><a href="#" class="btn btn-primary btn-lg">Learn more</a></p>
    </div>
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
                <div class="bottom-link clearfix">
                    <a href="bt_progress-bars.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_wells.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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