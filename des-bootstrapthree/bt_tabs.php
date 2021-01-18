<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta name="description" content="Learn how to use Bootstrap tab plugin to create togglable or dynamic tabs to manage the contents of a web page easily without writing any JavaScript code." />
	  <meta name="keywords" content="Bootstrap,Bootstrap3,Dynamic Tabs with Bootstrap 3">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create Dynamic Tabs with Bootstrap 3 - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Create Dynamic Tabs with Bootstrap 3</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
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
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe2a1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<ul class="nav nav-tabs">
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">Profile</a></li>
    <li><a href="#">Messages</a></li>
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
                <hr />                
                <h2>Creating Dynamic Tabs via Data Attributes</h2>
                <p>You can activate a tab component without writing any JavaScript &mdash; simply specify the <code>data-toggle="tab"</code> on each tab, as well as create a <code>.tab-pane</code> with unique ID for every tab and wrap them in <code>.tab-content</code>. The following example will show you how to create a basic tabbable tabs via data attributes in Bootstrap.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6036.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code2">

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#sectionA">Section A</a></li>
    <li><a data-toggle="tab" href="#sectionB">Section B</a></li>
    <li class="dropdown">
        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a data-toggle="tab" href="#dropdown1">Dropdown 1</a></li>
            <li><a data-toggle="tab" href="#dropdown2">Dropdown 2</a></li>
        </ul>
    </li>
</ul>
<div class="tab-content">
    <div id="sectionA" class="tab-pane fade in active">
        <p>Section A content…</p>
    </div>
    <div id="sectionB" class="tab-pane fade">
        <p>Section B content…</p>
    </div>
    <div id="dropdown1" class="tab-pane fade">
        <p>Dropdown 1 content…</p>
    </div>
    <div id="dropdown2" class="tab-pane fade">
        <p>Dropdown 2 content…</p>
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
                <hr />
                <h2>Creating Dynamic Tabs via JavaScript</h2>
                <p>You may also enable tabs via JavaScript. Each tab needs to be activated individually.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6a0a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<script type="text/javascript">
$(document).ready(function(){
    $("#myTab a").click(function(e){
        e.preventDefault();
        $(this).tab('show');
    });
});
</script>


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
                <p>You can activate individual tabs in several ways:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4a46.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

$('#myTab a[href="#profile"]').tab('show'); // show tab targeted by the selector
$("#myTab a:first").tab('show'); // show first tab
$("#myTab a:last").tab('show'); // show last tab
$("#myTab li:eq(2) a").tab('show'); // show third tab (0-indexed, like an array)


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
                <h2>Methods</h2>
                <p class="space">This is the standard bootstrap's tab method:</p>
                <h2>$().tab('show')</h2>
                <p>Activates a tab element and the related content container. Tab should have either a data-target or an href for targeting a container node in the DOM.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba07e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<script type="text/javascript">
$(document).ready(function(){
    $("#myTab li:eq(1) a").tab('show');
})
</script>


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
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd889.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

<script type="text/javascript">
$(document).ready(function(){
    $('a[data-toggle="tab"]').on('shown', function(e){
        e.target // active tab
        e.relatedTarget // previous tab
    })
});
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