<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="Bootstrap 4 Tabs and Pills Nav Component">
	  <meta name="keywords" content="Bootstrap,Bootstrap4,Bootstrap 4 Tabs and Pills Nav Component,tabs,pills nav">
	  <meta name="author" content="webschooltoday.com">
    <title>Bootstrap 4 Tabs and Pills Nav Component - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">Bootstrap 4 Tabs and Pills Nav Component</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
<div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
               </div>
               <a href="bt_navbar.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_icons.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap Nav:<span> Tabs and Pills</span></h1>
                <p class="summary">In this tutorial you will learn how to create Bootstrap nav components.</p>
                <h2>Bootstrap Nav Components</h2>
                <p class="space">Bootstrap provides an easy and quick way to create basic nav components like tabs and pills which are very flexible and elegant. All the Bootstrap's nav components&mdash;tabs and pills&mdash;share the same base markup and styles through the base <code>.nav</code> class.</p>
                <h2>Creating Basic Nav with Bootstrap</h2>
                <p>You can use the Bootstrap <code>.nav</code> class to create a basic navigation menu, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1cc7.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1" >
<nav class="nav">
    <a href="#" class="nav-item nav-link active">Home</a>
    <a href="#" class="nav-item nav-link">Profile</a>
    <a href="#" class="nav-item nav-link">Messages</a>
    <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
</nav>
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
               <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> You can use the class <code>.disabled</code> to make a link look like disabled. But, the <code>.disabled</code> class only changes the visual appearance of the link by making it gray and removing the hover effect, however the link will remain clickable unless you <a href="../faq/how-to-remove-clickable-behavior-from-a-disabled-link-using-jquery.php">remove the <code>"href"</code> attribute</a>.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Alignment of Nav Items</h2>  
                <p>By default, navs are left-aligned, but you can easily align them to center or right using flexbox utilities.</p>    
                <p>The following example uses the class <code>.justify-content-center</code> to align nav items to center.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab634d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2" >
<nav class="nav justify-content-center">
    <a href="#" class="nav-item nav-link active">Home</a>
    <a href="#" class="nav-item nav-link">Profile</a>
    <a href="#" class="nav-item nav-link">Messages</a>
    <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
</nav>
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
                <p>Similarly, you can align nav items to right using the class <code>.justify-content-end</code>, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4c59.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3" >
<nav class="nav justify-content-center">
    <a href="#" class="nav-item nav-link active">Home</a>
    <a href="#" class="nav-item nav-link">Profile</a>
    <a href="#" class="nav-item nav-link">Messages</a>
    <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
</nav>
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

                <p>Moreover, you can even vertically stack your nav items by changing the flex item direction with the class <code>.flex-column</code>, as demonstrated in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba8db.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4" >
<nav class="nav justify-content-end">
    <a href="#" class="nav-item nav-link active">Home</a>
    <a href="#" class="nav-item nav-link">Profile</a>
    <a href="#" class="nav-item nav-link">Messages</a>
    <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
</nav>
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
                <h2>Creating the Basic Tabs</h2>
                <p>Simply, add the class <code>.nav-tabs</code> to the basic nav to generate a tabbed navigation, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2ff3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5" >
<nav class="nav flex-column">
    <a href="#" class="nav-item nav-link active">Home</a>
    <a href="#" class="nav-item nav-link">Profile</a>
    <a href="#" class="nav-item nav-link">Messages</a>
    <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
</nav>
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

                <p>You can also add icons to your tab items to make it more attractive, as shown here:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab43ec.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6" >
<nav class="nav nav-tabs">
    <a href="#" class="nav-item nav-link active">
        <i class="fa fa-home"></i> Home
    </a>
    <a href="#" class="nav-item nav-link">
        <i class="fa fa-user"></i> Profile
    </a>
    <a href="#" class="nav-item nav-link">
        <i class="fa fa-envelope"></i> Messages
    </a>
    <a href="#" class="nav-item nav-link disabled" tabindex="-1">
        <i class="fa fa-line-chart"></i> Reports
    </a>
</nav>
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

                <hr />
                <h2>Creating the Pills Nav</h2>
                <p>Similarly, you can create pill based navigation by adding the class <code>.nav-pills</code> on the basic nav instead of class <code>.nav-tabs</code>, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3b07.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7" >
<nav class="nav nav-pills">
    <a href="#" class="nav-item nav-link active">Home</a>
    <a href="#" class="nav-item nav-link">Profile</a>
    <a href="#" class="nav-item nav-link">Messages</a>
    <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
</nav>
                 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code7"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
                    </div>
                </div>

                <p>Similarly, like nav tabs you can also add icons to your pills nav to make it more attractive:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2697.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8" >
<nav class="nav nav-pills">
    <a href="#" class="nav-item nav-link active">
        <i class="fa fa-home"></i> Home
    </a>
    <a href="#" class="nav-item nav-link">
        <i class="fa fa-user"></i> Profile
    </a>
    <a href="#" class="nav-item nav-link">
        <i class="fa fa-envelope"></i> Messages
    </a>
    <a href="#" class="nav-item nav-link disabled" tabindex="-1">
        <i class="fa fa-line-chart"></i> Reports
    </a>
</nav>
                 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code8"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>

                    </div>
                </div>

                <p>Additionally, you can apply the class <code>.flex-column</code> on the <code>.nav</code> element to make the pills nav appear vertically stacked, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb0f6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9" >
<nav class="nav nav-pills flex-column">
    <a href="#" class="nav-item nav-link active">
        <i class="fa fa-home"></i> Home
    </a>
    <a href="#" class="nav-item nav-link">
        <i class="fa fa-user"></i> Profile
    </a>
    <a href="#" class="nav-item nav-link">
        <i class="fa fa-envelope"></i> Messages
    </a>
    <a href="#" class="nav-item nav-link disabled" tabindex="-1">
        <i class="fa fa-line-chart"></i> Reports
    </a>
</nav>
                 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code9"), {
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
                <h2>Bootstrap Tabs and Pills Nav with Dropdown Menus</h2>
                <p>You can add dropdown menus to a link inside tabs and pills nav with a little extra markup.</p>
				<p class="break">The four CSS classes <code>.dropdown</code>, <code>.dropdown-toggle</code>, <code>.dropdown-menu</code> and <code>.dropdown-item</code> are required in addition to the <code>.nav</code>, <code>.nav-tabs</code> or <code>.nav-pills</code> classes to create a simple dropdown menu inside the nav without using any JavaScript code.</p>
                <h3>Creating Tabs with Dropdowns</h3>
                <p>The following example will show you how to add simple dropdown menus to a tab.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba999.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10" >
<nav class="nav nav-pills flex-column">
    <a href="#" class="nav-item nav-link active">
        <i class="fa fa-home"></i> Home
    </a>
    <a href="#" class="nav-item nav-link">
        <i class="fa fa-user"></i> Profile
    </a>
    <a href="#" class="nav-item nav-link">
        <i class="fa fa-envelope"></i> Messages
    </a>
    <a href="#" class="nav-item nav-link disabled" tabindex="-1">
        <i class="fa fa-line-chart"></i> Reports
    </a>
</nav>
                 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code10"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
                    </div>
                </div>
                <h3>Creating Pills with Dropdowns</h3>
                <p>The following example will show you how to add simple dropdown menus to a pill nav.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9a69.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11" >
<nav class="nav nav-pills">
    <a href="#" class="nav-item nav-link active">Home</a>
    <a href="#" class="nav-item nav-link">Profile</a>
    <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Messages</a>
        <div class="dropdown-menu">
            <a href="#" class="dropdown-item">Inbox</a>
            <a href="#" class="dropdown-item">Sent</a>
            <a href="#" class="dropdown-item">Drafts</a>
        </div>
    </div>
    <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
</nav>
                 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code11"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
                    </div>
                </div>
				<p>You will learn more about dropdown menus later in <a href="bt_dropdowns.php">Bootstrap dropdowns</a> chapter.</p>
                <hr />
				<h2>Fill and Justify Nav Component</h2>
                <p>You can force your nav items to extend and proportionately fill all available width using the class <code>.nav-fill</code> on the <code>.nav</code> element. In the following example all horizontal space is occupied by the nav items, but every nav item doesn't have the same width.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabec61.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code12" >
<nav class="nav nav-pills nav-fill">
    <a href="#" class="nav-item nav-link">Home</a>
    <a href="#" class="nav-item nav-link">About</a>
    <a href="#" class="nav-item nav-link active">Explore Products</a>
    <a href="#" class="nav-item nav-link">Contact Us</a>
</nav>
                 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code12"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
                    </div>
                </div>
  
                <p>Alternatively, you can use the class <code>.nav-justified</code> instead of<code>.nav-fill</code>, if you want nav that fills all horizontal space as well as every nav item has the same width.</p>                      
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9f69.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code13" >
<nav class="nav nav-pills nav-justified">
    <a href="#" class="nav-item nav-link">Home</a>
    <a href="#" class="nav-item nav-link">About</a>
    <a href="#" class="nav-item nav-link active">Explore Products</a>
    <a href="#" class="nav-item nav-link">Contact Us</a>
</nav>
                 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code13"), {
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
                    <a href="bt_icons.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_navbar.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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