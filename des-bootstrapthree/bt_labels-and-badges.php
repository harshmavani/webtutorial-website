<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta name="description" content="Learn how to create inline labels and badges with Bootstrap. You can use these labels and badges to indicate important information on your website." />   
	  <meta name="keywords" content="Bootstrap,Bootstrap3,Labels,Badges">
	  <meta name="author" content="webschooltoday.com">
    <title>Bootstrap 3 Labels and Badges - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">Bootstrap 3 Labels and Badges</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
            </div>
            <a href="bt_progress-bars.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_pagination.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Labels and Badges</span></h1>
                <p class="summary">In this tutorial you'll learn how to create inline labels and badges with Bootstrap.</p>
                <h2>Creating Inline Labels</h2>
                <p>Inline labels are generally used to indicate some valuable information on the web pages such as important notes, warning messages, etc.</p>
                <p>The following example will show you how to create inline labels using the Bootstrap.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabc6d3.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<h1>Bootstrap heading <span class="label label-default">New</span></h1>
<h2>Bootstrap heading <span class="label label-default">New</span></h2>
<h3>Bootstrap heading <span class="label label-default">New</span></h3>
<h4>Bootstrap heading <span class="label label-default">New</span></h4>
<h5>Bootstrap heading <span class="label label-default">New</span></h5>
<h6>Bootstrap heading <span class="label label-default">New</span></h6>

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

                <p>There are some contextual classes to emphasize these inline labels.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab1530.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<span class="label label-default">Default</span>
<span class="label label-primary">Primary</span>
<span class="label label-success">Success</span>
<span class="label label-info">Info</span>
<span class="label label-warning">Warning</span>
<span class="label label-danger">Danger</span>

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
                <h2>Creating Inline Badges</h2>
                <p>Similarly you can create inline badges to provide important notification to the user such as number received or unread messages, number of friend requests etc. They're most commonly found in email client and social networking websites.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab6339.html">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<ul class="nav nav-pills">
    <li><a href="#">Home</a></li>
    <li><a href="#">Profile</a></li>
    <li class="active"><a href="#">Messages <span class="badge">24</span></a></li>
    
    <li><a href="#">Notification  <span class="badge">5</span></a></li>
</ul>

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
                    <a href="bt_pagination.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_progress-bars.php" class="next-page-bottom">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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