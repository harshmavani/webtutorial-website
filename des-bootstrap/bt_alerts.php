<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="Bootstrap 4 Warning, Info, Success and Error Alerts">
  <meta name="keywords" content="Bootstrap,Bootstrap4,Bootstrap 4 Warning,Bootstrap 4 Warning Info,Bootstrap 4 Warning Error,Bootstrap 4 Alerts,Bootatrap alerts">
  <meta name="author" content="webschooltoday.com">
    <title>Bootstrap 4 Warning, Info, Success and Error Alerts - WebSchool Today</title>
<?php include "../links.php" ?>
</head>
<body>
<div class="tital">Bootstrap 4 Warning, Info, Success and Error Alerts - WebSchool Today</div>
<div class="main_body"> 
<div class="tital">Bootstrap 4 Warning, Info, Success and Error Alerts - WebSchool Today</div>

<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    <script type="text/javascript">
	atOptions = {
		'key' : '9049f2d3c3d0cdd985d2d490bad266d3',
		'format' : 'iframe',
		'height' : 50,
		'width' : 320,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.displaycontentnetwork.com/9049f2d3c3d0cdd985d2d490bad266d3/invoke.js"></scr' + 'ipt>');
</script>
               </div>
               <a href="bt_stateful-buttons.php" class="next-page" title="Go to Next Page">	<i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_popovers.php" class="previous-page" title="Go to Previous Page">	<i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Alerts</span></h1>
                <p class="summary">In this tutorial you will learn how to create alerts messages with Bootstrap.</p>
                <h2>Creating Alert Messages with Bootstrap</h2>
				<p>Alert boxes are used quite often to stand out the information that requires immediate attention of the end users such as warning, error or confirmation messages.</p>
                <p>With Bootstrap you can easily create elegant alert messages box for various purposes. You can also add an optional close button to dismiss any alert.</p>
                <p>You can create a simple Bootstrap warning alert message box by adding the contextual class <code>.alert-warning</code> to the <code>.alert</code> base class, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab99e3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1" >

<div class="alert alert-warning alert-dismissible fade show">
    <strong>Warning!</strong> Please enter a valid value in all the required fields before proceeding.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
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
                
                <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box" style="background-color:#fad28c">
                            <p><strong>Important:</strong> The <code>.fade</code> and <code>.show</code> classes on the <code>.alert</code> element enable the fading transition effect while closing the alert boxes. If you don't want animation just removes these classes. Also, the class <code>.alert-dismissible</code> is required on the <code>.alert</code> element for proper positioning of the <code>.close</code> button. If your alert doesn't have a close button you can skip this class.</p>
                        </div>
                    </div>
                </div>
                <p class="space">Bootstrap 4 provides total 8 different types of alerts. The following example will show you the most commonly used alerts, which are: success, error or danger, warning and info alerts.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabad31.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2" >

<!-- Success Alert -->
<div class="alert alert-success alert-dismissible fade show">
    <strong>Success!</strong> Your message has been sent successfully.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<!-- Error Alert -->
<div class="alert alert-danger alert-dismissible fade show">
    <strong>Error!</strong> A problem has been occurred while submitting your data.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<!-- Warning Alert -->
<div class="alert alert-warning alert-dismissible fade show">
    <strong>Warning!</strong> There was a problem with your network connection.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<!-- Info Alert -->
<div class="alert alert-info alert-dismissible fade show">
    <strong>Info!</strong> Please read the comments carefully.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
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
                
                <p>Here're the new alerts introduced in Bootstrap 4 that can be used for various purposes.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4dce.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3" >

<!-- Primary Alert -->
<div class="alert alert-primary alert-dismissible fade show">
    <strong>Primary!</strong> This is a simple primary alert box.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<!-- Secondary Alert -->
<div class="alert alert-secondary alert-dismissible fade show">
    <strong>Secondary!</strong> This is a simple secondary alert box.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<!-- Dark Alert -->
<div class="alert alert-dark alert-dismissible fade show">
    <strong>Dark!</strong> This is a simple dark alert box.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<!-- Light Alert -->
<div class="alert alert-light alert-dismissible fade show">
    <strong>Light!</strong> This is a simple light alert box.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
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
                <!--ads-->
                <div>
                    <script type="text/javascript">
	atOptions = {
		'key' : '25484e9e29be3f9c30cd9a00ccde11ec',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.displaycontentnetwork.com/25484e9e29be3f9c30cd9a00ccde11ec/invoke.js"></scr' + 'ipt>');
</script>
                </div>
                <!--ads close-->
                <h2>Additional Content inside Alerts</h2>
                <p>You can also place additional HTML elements like headings, paragraphs and dividers inside an alert. To manage spacing between the elements you can use margin utility classes, as here:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3793.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4" >

<div class="alert alert-warning alert-dismissible fade show">
    <h4 class="alert-heading"><i class="fa fa-warning"></i> Warning!</h4>
    <p>Please enter a valid value in all the required fields before proceeding. If you need any help just place the mouse pointer above info icon next to the form field.</p>
    <hr>
    <p class="mb-0">Once you have filled all the details, click on the 'Next' button to continue.</p>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
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
				<h2>Matching Links Color inside Alerts</h2>
				<p>Apply the utility class <code>.alert-link</code> to the links inside any alert boxes to quickly create matching colored links, as shown in the example below:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabed44.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5" >

<div class="alert alert-warning alert-dismissible fade show">
    <strong>Warning!</strong> A simple warning alert with <a href="#" class="alert-link">an example link</a>.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
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
				
                <p>Similarly, you can match links inside other alert boxes, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabde92.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code6" >

<!-- Success Alert -->
<div class="alert alert-success alert-dismissible fade show">
    <strong>Success!</strong> A simple success alert with <a href="#" class="alert-link">an example link</a>.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<!-- Error Alert -->
<div class="alert alert-danger alert-dismissible fade show">
    <strong>Error!</strong> A simple danger alert with <a href="#" class="alert-link">an example link</a>.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<!-- Warning Alert -->
<div class="alert alert-warning alert-dismissible fade show">
    <strong>Warning!</strong> A simple warning alert with <a href="#" class="alert-link">an example link</a>.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<!-- Info Alert -->
<div class="alert alert-info alert-dismissible fade show">
    <strong>Info!</strong> A simple info alert with <a href="#" class="alert-link">an example link</a>.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<!-- Primary Alert -->
<div class="alert alert-primary alert-dismissible fade show">
    <strong>Primary!</strong> A simple primary alert with <a href="#" class="alert-link">an example link</a>.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<!-- Secondary Alert -->
<div class="alert alert-secondary alert-dismissible fade show">
    <strong>Secondary!</strong> A simple secondary alert with <a href="#" class="alert-link">an example link</a>.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<!-- Dark Alert -->
<div class="alert alert-dark alert-dismissible fade show">
    <strong>Dark!</strong> A simple dark alert with <a href="#" class="alert-link">an example link</a>.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
<!-- Light Alert -->
<div class="alert alert-light alert-dismissible fade show">
    <strong>Light!</strong> A simple light alert with <a href="#" class="alert-link">an example link</a>.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
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
                <!--ads-->
                <div>
                    <script type="text/javascript">
	atOptions = {
		'key' : '25484e9e29be3f9c30cd9a00ccde11ec',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.displaycontentnetwork.com/25484e9e29be3f9c30cd9a00ccde11ec/invoke.js"></scr' + 'ipt>');
</script>
                </div>
                <!--ads close-->
                <h2>Closing Alerts via Data Attribute</h2>
                <p>Data attributes provides a simple and easy way to add close functionality to the alert boxes. Just add the <code>data-dismiss="alert"</code> to the close button and it will automatically enable the dismissal of the containing alert message box. Also, add the class <code>.alert-dismissible</code> to the <code>.alert</code> element for proper positioning of the <code>.close</code> button. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd443.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7" >
<div class="alert alert-info alert-dismissible fade show">
    <strong>Note!</strong> This is a simple example of dismissible alert.
    <button type="button" class="close" data-dismiss="alert">&times;</button>
</div>
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
                <p>Use the <a href="../info-html/ht_button-tag.html"><code>&lt;button&gt;</code></a> element for creating the close button for proper behavior across all devices.</p>
                <hr />
                <h2>Closing Alerts via JavaScript</h2>
                <p>You may also enable the dismissal of an alert via JavaScript.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb863.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8" >
<script>
$(document).ready(function(){
    $(".close").click(function(){
        $("#myAlert").alert('close');
    });
});  
</script>
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
                <hr />
                <h2>Methods</h2>
                <p class="space">These are the standard bootstrap's alerts methods:</p>
                <h2>$().alert()</h2>
                <p>This method makes an alert listen for click events on descendant elements which have the <code>data-dismiss="alert"</code> attribute. Not necessary when using the data-api's auto-initialization.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc95a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9" >

<script>
$(document).ready(function(){
    $(".alert").alert();
});  
</script>
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
                <h2>$().alert('close')</h2>
                <p>This method closes an alert by removing it from the DOM.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab47cd.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10" >

<script>
$(document).ready(function(){
    $(".close").click(function(){
        $("#myAlert").alert('close');
    });
}); 
</script>
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
                <hr />
                <h2>Events</h2>
                <p>Bootstrap's alert class includes few events for hooking into alert functionality.</p>
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
                            	<td>close.bs.alert</td>
                                <td>This event fires immediately when the close instance method is called.</td>
                            </tr>
                            <tr>
                            	<td>closed.bs.alert</td>
                                <td>This event is fired when the alert message box has been closed. It will wait until the CSS transition process has been fully completed before getting fired.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>The following example displays an alert message to the user when fade out transition of an alert message box has been fully completed.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6db4.html?topic=bootstrap&amp;file=alert-events" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11" >

<script>
$(document).ready(function(){
    $("#myAlert").on('closed.bs.alert', function(){
        alert("Alert message box has been closed.");
    });
});
</script>
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
                <div class="bottom-link clearfix">
                    <a href="bt_popovers.php" class="previous-page-bottom">	<i class="fa fa-arrow-left" aria-hidden="true"></i>
Previous</a>
                    <a href="bt_stateful-buttons.php" class="next-page-bottom" style="float: right;">Next<i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                </div>

</div>


        </div>        
        <div class="sidebar">

    </div>

</div>
<?php include "../footer.php" ?>

</body>
</html>