<!DOCTYPE html>
<html lang="en">

<head>
<meta name="description" content="Bootstrap 4 Badges">
  <meta name="keywords" content="Bootstrap,Bootstrap4,Bootstrap 4 Badges">
  <meta name="author" content="webschooltoday.com">
    <title>Bootstrap 4 Badges - WebSchool Today</title>
    <?php include "../links.php" ?>
    </head>
<body>
    <div>
<div class="tital">Bootstrap 4 Badges</div>

<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                </div>
                <a href="bt_progress-bars.php" class="next-page" title="Go to Next Page">	<i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>

                <a href="bt_pagination.php" class="previous-page" title="Go to Previous Page">	<i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>
                <h1>Bootstrap <span>Badges</span></h1>
                <p class="summary">In this tutorial you will learn how to create badges with Bootstrap.</p>
                <h2>Creating Badges with Bootstrap</h2>
                <p>Badges are generally used to indicate some valuable information on the web pages such as important heading, warning messages, notification counter, etc.</p>
                <p>The following example will show you how to create inline badges using the Bootstrap.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab46b2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1" >

<h1>Bootstrap heading <span class="badge badge-secondary">New</span></h1>
<h2>Bootstrap heading <span class="badge badge-secondary">New</span></h2>
<h3>Bootstrap heading <span class="badge badge-secondary">New</span></h3>
<h4>Bootstrap heading <span class="badge badge-secondary">New</span></h4>
<h5>Bootstrap heading <span class="badge badge-secondary">New</span></h5>
<h6>Bootstrap heading <span class="badge badge-secondary">New</span></h6>
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
                <h2>Contextual Classes for Badges</h2>
                <p>There are some contextual or modifier classes to change the appearance of the badges.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabce7d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2" >

<span class="badge badge-primary">Primary</span>
<span class="badge badge-secondary">Secondary</span>
<span class="badge badge-success">Success</span>
<span class="badge badge-danger">Danger</span>
<span class="badge badge-warning">Warning</span>
<span class="badge badge-info">Info</span>
<span class="badge badge-dark">Dark</span>
<span class="badge badge-light">Light</span>

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
                <h2>Creating Pill Badges</h2>
                <p>Similarly, you can create pill shape badges (i.e. badges with more rounded corners) using the <code>.badge-pill</code> modifier class, as demonstrated in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba589.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3" >

<span class="badge badge-pill badge-primary">Primary</span>
<span class="badge badge-pill badge-secondary">Secondary</span>
<span class="badge badge-pill badge-success">Success</span>
<span class="badge badge-pill badge-danger">Danger</span>
<span class="badge badge-pill badge-warning">Warning</span>
<span class="badge badge-pill badge-info">Info</span>
<span class="badge badge-pill badge-dark">Dark</span>
<span class="badge badge-pill badge-light">Light</span>

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
                <h2>Showing Counter with Badges</h2>
                <p>You can also use badges as part of links or buttons to provide a counter, such as number of received or unread messages, number of notifications etc. They're most commonly found in email clients, application dashboards, social networking websites, etc. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3556.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4" >

<ul class="nav nav-pills">
    <li class="nav-item">
        <a href="#" class="nav-link">Home</a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">Profile</a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link active">Messages <span class="badge badge-light">24</span></a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">Notification <span class="badge badge-primary">5</span></a>
    </li>
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
                
                <div class="bottom-link clearfix">
                    <a href="bt_pagination.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>Previous
</a>
                    <a href="bt_progress-bars.php" class="next-page-bottom" style="float: right;"
>Next	<i class="fa fa-arrow-right" aria-hidden="true"></i>
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