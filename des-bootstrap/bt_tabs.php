<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="How to Create Dynamic Tabs with Bootstrap 4">
	  <meta name="keywords" content="Bootstrap,Bootstrap4,Create Dynamic Tabs">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create Dynamic Tabs with Bootstrap 4 - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Create Dynamic Tabs with Bootstrap 4</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
          </div>
          <a href="bt_tooltips.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_dropdowns.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Tabs</span></h1>
                <p class="summary">In this tutorial you will learn how to create dynamic tabs to toggle between the content using the Bootstrap tabs plugin.</p>
                <h2>Creating Tabs with Bootstrap</h2>
                <p class="space">Tab based navigations provides an easy and powerful mechanism to handle huge amount of content within a small area through separating content into different panes where each pane is viewable one at a time. The user can quickly access the content through switching between the panes without leaving the page. The following example will show you how to create the basic tabs using the Bootstrap tab component.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0c31.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<ul class="nav nav-tabs">
    <li class="nav-item">
        <a href="#" class="nav-link active">Home</a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">Profile</a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">Messages</a>
    </li>
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

                <p>The tabs plugin also works with pills nav. To create pill nav just replace the class <code>.nav-tabs</code> with <code>.nav-pills</code> in the tab markup, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1939.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<ul class="nav nav-pills">
    <li class="nav-item">
        <a href="#" class="nav-link active">Home</a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">Profile</a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">Messages</a>
    </li>
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
                <h2>Creating Dynamic Tabs via Data Attributes</h2>
                <p>You can activate a tab component without writing any JavaScript &mdash; simply specify the <code>data-toggle="tab"</code> on each tab, as well as create a <code>.tab-pane</code> with unique ID for every tab and wrap them in <code>.tab-content</code>. The following example will show you how to create a basic tabbable tabs via data attributes in Bootstrap.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc76b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<ul class="nav nav-tabs">
    <li class="nav-item">
        <a href="#home" class="nav-link active" data-toggle="tab">Home</a>
    </li>
    <li class="nav-item">
        <a href="#profile" class="nav-link" data-toggle="tab">Profile</a>
    </li>
    <li class="nav-item">
        <a href="#messages" class="nav-link" data-toggle="tab">Messages</a>
    </li>
</ul>
<div class="tab-content">
    <div class="tab-pane fade show active" id="home">
        <p>Home tab content ...</p>
    </div>
    <div class="tab-pane fade" id="profile">
        <p>Profile tab content ...</p>
    </div>
    <div class="tab-pane fade" id="messages">
        <p>Messages tab content ...</p>
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
                <h2>Creating Dynamic Tabs via JavaScript</h2>
                <p>You may also enable tabs via JavaScript. Each tab needs to be activated individually.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabeda9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<script>
$(document).ready(function(){
    $("#myTab a").click(function(e){
        e.preventDefault();
        $(this).tab('show');
    });
});
</script>

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
                <p>You can activate individual tabs in several ways:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3290.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

$('#myTab a[href="#profile"]').tab('show'); // show tab targeted by the selector
$("#myTab a:first").tab('show'); // show first tab
$("#myTab a:last").tab('show'); // show last tab
$("#myTab li:eq(2) a").tab('show'); // show third tab (0-indexed, like an array)

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
                <hr />
                <h2>Methods</h2>
                <p class="space">This is the standard bootstrap's tab method:</p>
                <h2>$().tab('show')</h2>
                <p>Activates a tab element and the related content container. Tab should have either a data-target or an href for targeting a container node in the DOM.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2a3d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

<script>
$(document).ready(function(){
    $("#myTab li:eq(1) a").tab('show');
})
</script>

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
                <h2>Events</h2>
                <p>These are the standard Bootstrap events to enhance the tab functionality.</p>
                <div class="shadow">
                    <table class="data">
                        <thead>
                            <tr>
                                <th>Event</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>show.bs.tab</td>
                                <td>This event fires on tab show, but before the new tab has been shown. You can use the <code>event.target</code> and <code>event.relatedTarget</code> to target the active tab and the previous active tab (if available) respectively.</td>
                            </tr>
                            <tr>
                                <td>shown.bs.tab</td>
                                <td>This event fires on tab show after a tab has been shown. You can use the <code>event.target</code> and <code>event.relatedTarget</code> to target the active tab and the previous active tab (if available) respectively.</td>
                            </tr>
							<tr>
                                <td>hide.bs.tab</td>
                                <td>This event fires when the current active tab is to be hidden and thus a new tab is to be shown. You can use the <code>event.target</code> and <code>event.relatedTarget</code> to target the current active tab and the new tab which is going to be active very soon, respectively.</td>
                            </tr>
							<tr>
                                <td>hidden.bs.tab</td>
                                <td>This event fires after the previous active tab is hidden and a new tab is shown. You can use the <code>event.target</code> and <code>event.relatedTarget</code> to target the previous active tab and the new active tab, respectively.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>The following example displays the names of active tab and previous tab to the user when transition of a tab has been fully completed.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabff80.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

<script>
$(document).ready(function(){
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        e.target // active tab
        e.relatedTarget // previous tab
    })
});
</script>
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
                <div class="bottom-link clearfix">
                    <a href="bt_dropdowns.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
Previous</a>
                    <a href="bt_tooltips.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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