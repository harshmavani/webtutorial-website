<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="description" content="How to Create Accordion with Bootstrap 4">
  <meta name="keywords" content="Bootstrap,Bootstrap4,Bootstrap according">
  <meta name="author" content="webschooltoday.com">
    <title>How to Create Accordion with Bootstrap 4 - WebSchool Today</title>
<?php include "../links.php" ?>
   </head>
<body>
  <div>  
  <div class="tital">How to Create Accordion with Bootstrap 4</div>

<?php include "../head_part.php" ?> 
    <div class="rg3-w clearfix"> 
<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
             </div>
             <a href="bt_carousel.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_stateful-buttons.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Accordion</span></h1>
                <p class="summary">In this tutorial you will learn how to create accordion with Bootstrap.</p>
                <h2>Creating Accordion Widget with Bootstrap</h2>
                <p>Accordion menus and widgets are widely used on the websites to manage the large amount of content and navigation lists. With Bootstrap collapse plugin you can either create accordion or a simple collapsible panel without writing any JavaScript code.</p>
				<p>The following example will show you how to build a simple accordion widget using the Bootstrap collapsible plugin and the panel component.</p>

                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabac1d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
<textarea id="code1" >
<div class="accordion" id="myAccordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">1. What is HTML?</button>
            </h2>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#myAccordion">
            <div class="card-body">
                <p>HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.webschooltoday.com/des-html/" target="_blank">Learn more.</a></p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo">2. What is Bootstrap?</button>
            </h2>
        </div>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#myAccordion">
            <div class="card-body">
                <p>Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="https://www.webschooltoday.com/twitter-bt_tutorial/" target="_blank">Learn more.</a></p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingThree">
            <h2 class="mb-0">
                <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree">3. What is CSS?</button>
            </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#myAccordion">
            <div class="card-body">
                <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.webschooltoday.com/des-css/" target="_blank">Learn more.</a></p>
            </div>
        </div>
    </div>
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
				<h2>Bootstrap Accordion with Plus Minus Icons</h2>
				<p>You can also add plus minus icons to the Bootstrap accordion widget to make it visually more attractive with a few lines of jQuery code, as follow:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0ef0.html" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code12" >
<script>
$(document).ready(function(){
    // Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function(){
        $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
    });
    
    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
    }).on('hide.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
    });
});
</script>
                            </textarea>    
                            <script>
							var editor = CodeMirror.fromTextArea(document.getElementById("code12"), {
								mode: "text/html",
								tabMode: "indent",
								lineNumbers: true,
							});
						</script>
                    </div>
                </div>
				
				<p>Similarly, you can <a href="../codelab4f26.html" target="_blank">add arrow icon to a accordion</a> utilizing the jQuery and CSS transition effect.</p>
				<p>The <code>show.bs.collapse</code> and <code>hide.bs.collapse</code> in the example above are <a href="#collapse-events">collapse events</a>, you'll learn about the events little later in this chapter.</p>
                <hr />
                <h2>Expanding and Collapsing Elements via Data Attributes</h2>
                <p>You can use the Bootstrap collapse feature for expanding and collapsing any specific element via data attributes without using the accordion markup.</p>                
                    <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9d80.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code13" >
<!-- Trigger Button HTML -->
<input type="button" class="btn btn-primary" data-toggle="collapse" data-target="#toggleDemo" value="Toggle Button">
    
<!-- Collapsible Element HTML -->
<div id="toggleDemo" class="collapse show"><p>This is a simple example of expanding and collapsing individual element via data attribute. Click on the <b>Toggle Button</b> button to see the effect.</p></div>
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
				<p class="space">We've just created a collapsible control without writing any JavaScript code. Well, let's go through each part of this code one by one for a better understanding.</p>
				<h2>Explanation of Code</h2>
				<p>The Bootstrap collapse plugin basically requires the two elements to work properly &mdash; the controller element such as a button or hyperlink by clicking on which you want to collapse the other element, and the collapsible element itself.</p>
				<ul>
					<li>The <code>data-toggle="collapse"</code> attribute (<i>line no-2</i>) is added to the controller element along with a attribute <code>data-target</code> (for buttons) or href (for anchors) to automatically assign the control of a collapsible element.</li>
					<li>The <code>data-target</code> or <code>href</code> attribute accepts a <a href="../des-css/style_selectors.php">CSS selector</a> to apply the collapse to a specific element. Be sure to add the class <code>.collapse</code> to the collapsible element.</li>
					<li>You can optionally add the class <code>.show</code> (<i>line no-5</i>) to the collapsible element in addition to the class <code>.collapse</code> to make it open by default.</li>
				</ul>
				<p>To make the collapsible controls to work in group like accordion menu, you can utilize the <a href="bt_cards.php">Bootstrap panel component</a> as demonstrated in the previous example.</p>
				<hr />
                <h2>Expanding and Collapsing Elements via JavaScript</h2>
                <p>You may also expand and collapse an individual element manually via JavaScript &mdash; just call the <code>collapse()</code> Bootstrap method with the <code>id</code> or <code>class</code> <a href="../des-css/style_selectors.php">selector</a> of the collapsible element in your JavaScript code.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb290.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>

                        <textarea id="code14" >
<!-- JavaScript to Expand and Collapse Element -->
<script>
$(document).ready(function(){
    $(".btn").click(function(){
        $("#toggleDemo").collapse('toggle');
    });
});
</script>

<!-- Trigger Button HTML -->
<input type="button" class="btn btn-primary" value="Toggle Button">
    
<!-- Collapsible Element HTML -->
<div id="toggleDemo" class="collapse show"><p>This is a simple example of expanding and collapsing individual element via JavaScript. Click on the <b>Simple Collapsible</b> button to see the effect.</p></div>
                            </textarea>    
                            <script>
							var editor = CodeMirror.fromTextArea(document.getElementById("code14"), {
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
                <p>There are certain options which may be passed to <code>collapse()</code> Bootstrap method to customize the functionality of a collapsible element.</p>
                <div class="shadow">
                	<table class="data">
                    	<thead>
                        	<tr>
                            	<th><pre>Name      </pre></th>
                                <th><pre>Type         </pre></th>
                                <th>Default&nbsp;Value</th>
                                <th>Description</th>
                            </tr>                        	
                        </thead>
                        <tbody>
                        	<tr>
                            	<td>parent</td>
                                <td>selector</td>
                                <td>false</td>
                                <td>All other collapsible elements under the specified parent will be closed while this collapsible item is shown on invocation.</td>
                            </tr>
                            <tr>
                            	<td>toggle</td>
                                <td>boolean</td>
                                <td>true</td>
                                <td>Toggles the collapsible element on invocation.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>You can also set these options using the data attributes on accordion &mdash; just append the option name to <code>data-</code>, like <code>data-parent="#myAccordion"</code>, <code>data-toggle="false"</code> etc. as demonstrated in the basic implementation.</p>
                <hr />
                <h2>Methods</h2>
                <p class="space">These are the standard bootstrap's collapse methods:</p>
                <h2>.collapse(options)</h2>
                <p>This method activates your content as a collapsible element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba492.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code15" >
<script>
$(document).ready(function(){
    $(".btn").click(function(){
        $("#myCollapsible").collapse({
            toggle: false
        });
    });
});
</script>
                            </textarea>    
                            <script>
							var editor = CodeMirror.fromTextArea(document.getElementById("code15"), {
								mode: "text/html",
								tabMode: "indent",
								styleActiveLine: true,
								lineNumbers: true,
								lineWrapping: true
							});
						</script>
                    </div>
                </div>
                <h2>.collapse('toggle')</h2>
                <p>This method toggles (show or hide) a collapsible element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba492.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code16" >
<script>
$(document).ready(function(){
    $(".toggle-btn").click(function(){
        $("#myCollapsible").collapse('toggle');
    });
});
</script>                            </textarea>    
                            <script>
							var editor = CodeMirror.fromTextArea(document.getElementById("code16"), {
								mode: "text/html",
								tabMode: "indent",
								styleActiveLine: true,
								lineNumbers: true,
								lineWrapping: true
							});
						</script>
                    </div>
                </div>
                <h2>.collapse('show')</h2>
                <p>This method shows a collapsible element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba492.html
                        " target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code19" >
<script>
$(document).ready(function(){
    $(".show-btn").click(function(){
        $("#myCollapsible").collapse('show');
    });
});
</script>
                  </textarea>    
                            <script>
							var editor = CodeMirror.fromTextArea(document.getElementById("code19"), {
								mode: "text/html",
								tabMode: "indent",
								styleActiveLine: true,
								lineNumbers: true,
								lineWrapping: true
							});
						</script>
                    </div>
                </div>
                <h2>.collapse('hide')</h2>
                <p>This method hides a collapsible element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba492.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code20" >

<script>
$(document).ready(function(){
    $(".hide-btn").click(function(){
        $("#myCollapsible").collapse('hide');
    });
});
</script>
                  </textarea>    
                            <script>
							var editor = CodeMirror.fromTextArea(document.getElementById("code20"), {
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
                <h2 id="collapse-events">Events</h2>
                <p>Bootstrap's collapse class includes few events for hooking into collapse functionality.</p>
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
                            	<td>show.bs.collapse</td>
                                <td>This event fires immediately when the show instance method is called.</td>
                            </tr>
                            <tr>
                            	<td>shown.bs.collapse</td>
                                <td>This event is fired when a collapse element has been made visible to the user. It will wait until the CSS transition process has been fully completed before getting fired.</td>
                            </tr>
                            <tr>
                            	<td>hide.bs.collapse</td>
                                <td>This event is fired immediately when the hide method has been called.</td>
                            </tr>
                            <tr>
                            	<td>hidden.bs.collapse</td>
                                <td>This event is fired when a collapse element has been hidden from the user. It will wait until the CSS transition process has been fully completed before getting fired.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>The following example displays an alert message to the user when sliding transition of a collapsible element has been fully completed.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9de7.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code21" >

<script>
$(document).ready(function(){
    $("#myCollapsible").on('hidden.bs.collapse', function(){
        alert("Collapsible element has been completely closed.");
    });
});
</script>
                  </textarea>    
                            <script>
							var editor = CodeMirror.fromTextArea(document.getElementById("code21"), {
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
                    <a href="bt_stateful-buttons.php" class="previous-page-bottom">	<i class="fa fa-arrow-left" aria-hidden="true"></i>
Previous</a>
                    <a href="bt_carousel.php" class="next-page-bottom" style="float: right;">Next	<i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                </div>
                <div class="bottom-ad clearfix">

               </div>
            </div>
        </div>     
        </div>   
    <?php include "../footer.php" ?>
</body>
</html>