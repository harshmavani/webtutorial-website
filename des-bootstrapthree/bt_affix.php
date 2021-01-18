<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="How to Use Bootstrap 3 Affix Plugin">
	  <meta name="keywords" content="Bootstrap,Bootstrap4,Bootstrap 3 Affix Plugin">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Use Bootstrap 3 Affix Plugin - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Use Bootstrap 3 Affix Plugin</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
      </div>
      <a href="../twitter-bt_examples.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_scrollspy.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Affix</span></h1>
                <p class="summary">Bootstrap affix plugin is used to add affix behavior to any element.</p>
                <h2>Creating Pinned Element with Bootstrap</h2>
                <p>In this tutorial you will learn how to apply pinning i.e. <a href="../des-css/style_position.php">fixed positioning</a> on a navbar or any other element automatically when they are scrolled beyond a certain distance as well as toggle its pinning on and off using the Bootstrap affix plugin. The pinning of an element is enabled through changing the value of its <code><a href="../info-css/style_position-property.php">position</a></code> CSS property from <code>static</code> to <code>fixed</code>.</p>
		  <p>To do this, the affix plugin toggles between three classes: <code>.affix</code>, <code>.affix-top</code>, and <code>.affix-bottom</code>. Each class represents a particular state.</p>
		  <ul>
		      <li>Initially, the plugin adds <code>.affix-top</code> or <code>.affix-bottom</code> class to indicate the element is in its top-most or bottom-most position.</li>
		      <li>When the element scrolling past the offset limit provided by the <code>data-offset-</code> attribute the plugin replaces the <code>.affix-top</code> or <code>.affix-bottom</code> class with the <code>.affix</code> class (sets <code>position: fixed;</code>), which trigger the actual affixing.</li>
		      <li>At this point the appropriate CSS <code><a href="../css-reference/css-top-property.php">top</a></code> or <code><a href="../info-css/style_bottom-property.php">bottom</a></code> property is required to determine the position of affix element on the viewport.</li>
		  </ul>
		  <p class="space">Let's check out the following example to see it in real action.</p>
		  <h2>Enable Affix via Data Attributes</h2>                
                <p>You can easily add affix behavior to any element &mdash; just add <code>data-spy="affix"</code> to the element you want to spy on. Then use <code>data-offset-</code> attributes to define when to toggle the pinning of an element 'on' and 'off'.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1b01.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<ul class="nav nav-tabs nav-stacked" data-spy="affix" data-offset-top="195">
    <li class="active"><a href="#one">Section One</a></li>
    <li><a href="#two">Section Two</a></li>
    <li><a href="#three">Section Three</a></li>
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The <code>data-offset-</code> attributes only specify how many pixels that you must scroll in order to toggle the pinning of an element, it did not set the position of pinned element. You must define the <code><a href="../info-css/style_top-property.php">top</a></code> or <code><a href="../info-css/style_bottom-property.php">bottom</a></code> CSS property for the pinned element specifically in your style sheet to set its position in the viewport.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Enable Affix via JavaScript</h2>
                <p>You may also enable the affix plugin manually using the JavaScript &mdash; just call the <code>affix()</code> method with the <code>id</code> or <code>class</code> <a href="../des-css/style_selectors.php">selector</a> of the required element in your JavaScript code.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabecd9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<script type="text/javascript">
$(document).ready(function(){
    $("#myNav").affix({
        offset: { 
            top: $(".header").outerHeight(true)
        }
    });
});
</script>

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
                <h2>Options</h2>
                <p>There are certain options which may be passed to <code>affix()</code> Bootstrap method to customize the functionality of the affix plugin.</p>
                <div class="shadow">
                	<table class="data">
                    	<thead>
                        	<tr>
                            	<th style="width:43px;">Name</th>
                                <th>Type</th>
                                <th>Default&nbsp;Value</th>
                                <th>Description</th>
                            </tr>                        	
                        </thead>
                        <tbody>
                        	<tr>
                            	<td>offset</td>
                                <td>number&nbsp;|<br /> function&nbsp;|<br /> object</td>
                                <td>10</td>
                                <td>
                                	<p>Specify the number of pixels to offset from screen when calculating position of scroll. If a single number is provided, the offset will be applied in both top and bottom directions. To set offset for a single direction, or multiple unique offsets &mdash; just provide an object like <code>offset: {top:50, bottom:100}</code></p>
                                    <p>You can also use a function if you want to dynamically provide an offset in case of responsive designs.</p>
                                </td>
                            </tr>
							<tr>
								<td>target</td>
								<td>selector&nbsp;|<br /> node&nbsp;|<br /> jQuery element</td>
								<td>the <code>window</code> object</td>
								<td>Specifies the target element of the affix.</td>
							</tr>
                        </tbody>
                    </table>
                </div>
				<p>You can also set these options for affix using the data attributes &mdash; just append the option name to <code>data-</code>, like <code>data-offset-top="195"</code>.</p>
                <hr />
				<h2>Methods</h2>
				<p class="space">These are the standard bootstrap's affix methods:</p>
				<h2>.affix(options)</h2>
				<p>This method activates your content as affixed content. Accepts an optional options <code>object</code>, like <code>offset: {top: 10}</code> or <code>offset: {top:50, bottom:100}</code>.</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4550.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<script type="text/javascript">
$(document).ready(function(){
    $("#myNav").affix({
        offset: { 
            bottom: 195 
        }
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
				<hr />
				<h2>Events</h2>
				<p>Bootstrap's affix class includes few events for hooking into modal functionality.</p>
				<div class="shadow">
                	<table class="data">
                    	<thead>
                        	<tr>
                            	<th style="width: 150px;">Event</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<tr>
                            	<td>affix.bs.affix</td>
                                <td>This event fires immediately before the element has been&thinsp;affixed.</td>
                            </tr>
                            <tr>
                            	<td>affixed.bs.affix</td>
                                <td>This event is fired after the element has been affixed.</td>
                            </tr>
                            <tr>
                            	<td>affix-top.bs.affix</td>
                                <td>This event fires immediately before the element has been affixed to top.</td>
                            </tr>
                            <tr>
                            	<td>affixed-top.bs.affix</td>
                                <td>This event is fired after the element has been affixed to top.</td>
                            </tr>
							<tr>
                            	<td>affix-bottom.bs.affix</td>
                                <td>This event fires immediately before the element has been affixed-bottom.</td>
                            </tr>
							<tr>
                            	<td>affixed-bottom.bs.affix</td>
                                <td>This event is fired after the element has been affixed to bottom.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
				<p>The following example displays an alert message when navigation menu has been affixed.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc279.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

<script type="text/javascript">
$(document).ready(function(){
    $("#myNav").on('affixed.bs.affix', function(){
        alert("The navigation menu has been affixed. Now it doesn't scroll with the page.");
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
                <div class="bottom-link clearfix">
                    <a href="bt_scrollspy.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="../twitter-bt_examples.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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