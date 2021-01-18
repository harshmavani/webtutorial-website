<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="Bootstrap 4 Helper Classes">
	  <meta name="keywords" content="Bootstrap,Bootstrap4,Helper Classes,Classes,Bootstrap 4 Helper Classes">
	  <meta name="author" content="webschooltoday.com">
    <title>Bootstrap 4 Helper Classes - WebSchool Today</title>
    <?php include "../links.php" ?>

	<style>
        .color-code{
            margin: 0 2px;
            font-family: monospace;
        }
        .color-code i{
            display: inline-block;
            width: 9px;
            height: 9px;
            border: 1px solid #6a6a6a;
            margin-right: 2px;
        }
		table td:last-child{
			width: 65px;
		}
    </style>
</head>
<body>
<div>
<div class="tital">Bootstrap 4 Helper Classes</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
               </div>
               <a href="bt_modals.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_jumbotron.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Helper Classes</span></h1>
                <p class="summary">In this tutorial you will learn about the Bootstrap helper/utility classes.</p>
                <h2 id="color-classes">Color Classes</h2>
                <p>You can use the contextual color classes to emphasize the text and convey meaning through color. Here's the complete list of available contextual color classes.</p>
                <div class="shadow">
                    <table class="data no-wrap">
                        <tr>
                            <th>Class</th>
                            <th>Description</th>
                            <th>Test</th>
                        </tr>
                        <tr>
                            <td><code>.text-primary</code></td>
                            <td>Apply blue color (<span class="color-code"><i style="background:#007bff;"></i>#007bff</span>) on text.</td>
                            <td><a href="../codelab0b74.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.text-secondary</code></td>
                            <td>Apply grey color (<span class="color-code"><i style="background:#6c757d;"></i>#6c757d</span>) on text.</td>
                            <td><a href="../codelab0b74.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.text-success</code></td>
                            <td>Apply green color (<span class="color-code"><i style="background:#28a745;"></i>#28a745</span>) on text.</td>
                            <td><a href="../codelab0b74.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.text-danger</code></td>
                            <td>Apply red color (<span class="color-code"><i style="background:#dc3545;"></i>#dc3545</span>) on text.</td>
                            <td><a href="../codelab0b74.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.text-warning</code></td>
                            <td>Apply yellow color (<span class="color-code"><i style="background:#ffc107;"></i>#ffc107</span>) on text.</td>
                            <td><a href="../codelab0b74.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.text-info</code></td>
                            <td>Apply teal color (<span class="color-code"><i style="background:#17a2b8;"></i>#17a2b8</span>) on text.</td>
                            <td><a href="../codelab0b74.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.text-light</code></td>
                            <td>Apply very light grey color (<span class="color-code"><i style="background:#f8f9fa;"></i>#f8f9fa</span>) on text.</td>
                            <td><a href="../codelab0b74.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.text-dark</code></td>
                            <td>Apply dark grey color (<span class="color-code"><i style="background:#343a40;"></i>#343a40</span>) on text.</td>
                            <td><a href="../codelab0b74.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.text-body</code></td>
                            <td>Apply Bootstrap's default body text color (<span class="color-code"><i style="background:#212529;"></i>#212529</span>) on text.</td>
                            <td><a href="../codelab0b74.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.text-muted</code></td>
                            <td>Apply light grey color (<span class="color-code"><i style="background:#6c757d;"></i>#6c757d</span>) on text.</td>
                            <td><a href="../codelab0b74.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.text-white</code></td>
                            <td>Apply white color (<span class="color-code"><i style="background:#fff;"></i>#fff</span>) on text.</td>
                            <td><a href="../codelab0b74.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.text-black-50</code></td>
                            <td>Apply 50% transparent black color (<span class="color-code"><i style="background:rgba(0,0,0,.5);"></i>rgba(0,0,0,.5)</span>) on text.</td>
                            <td><a href="../codelab0b74.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.text-white-50</code></td>
                            <td>Apply 50% transparent white color (<span class="color-code"><i style="background:rgba(255,255,255,.5);"></i>rgba(255,255,255,.5)</span>) on text.</td>
                            <td><a href="../codelab0b74.html" target="_blank">Example</a></td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2 id="background-color-classes">Background Color Classes</h2>
                <p>Similar to the contextual color classes, you can use the contextual background color classes to set the <a href="../des-css/style_background.php"><code>background-color</code></a> of an element to apply extra emphasis on them.</p>
                <div class="shadow">
                    <table class="data no-wrap">
                        <tr>
                            <th>Class</th>
                            <th>Description</th>
                            <th>Test</th>
                        </tr>
                        <tr>
                            <td><code>.bg-primary</code></td>
                            <td>Apply blue background-color (<span class="color-code"><i style="background:#007bff;"></i>#007bff</span>) on an element.</td>
                            <td><a href="../codelaba3a9.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.bg-secondary</code></td>
                            <td>Apply grey background-color (<span class="color-code"><i style="background:#6c757d;"></i>#6c757d</span>) on an element.</td>
                            <td><a href="../codelaba3a9.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.bg-success</code></td>
                            <td>Apply green background-color (<span class="color-code"><i style="background:#28a745;"></i>#28a745</span>) on an element.</td>
                            <td><a href="../codelaba3a9.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.bg-danger</code></td>
                            <td>Apply red background-color (<span class="color-code"><i style="background:#dc3545;"></i>#dc3545</span>) on an element.</td>
                            <td><a href="../codelaba3a9.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.bg-warning</code></td>
                            <td>Apply yellow background-color (<span class="color-code"><i style="background:#ffc107;"></i>#ffc107</span>) on an element.</td>
                            <td><a href="../codelaba3a9.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.bg-info</code></td>
                            <td>Apply teal background-color (<span class="color-code"><i style="background:#17a2b8;"></i>#17a2b8</span>) on an element.</td>
                            <td><a href="../codelaba3a9.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.bg-light</code></td>
                            <td>Apply very light grey background-color (<span class="color-code"><i style="background:#f8f9fa;"></i>#f8f9fa</span>) on an element.</td>
                            <td><a href="../codelaba3a9.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.bg-dark</code></td>
                            <td>Apply dark grey background-color (<span class="color-code"><i style="background:#343a40;"></i>#343a40</span>) on an element.</td>
                            <td><a href="../codelaba3a9.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.bg-white</code></td>
                            <td>Apply white background-color (<span class="color-code"><i style="background:#fff;"></i>#fff</span>) on an element.</td>
                            <td><a href="../codelaba3a9.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.bg-transparent</code></td>
                            <td>Apply transparent background-color (<span class="color-code"><i style="background:transparent;"></i>transparent</span>) on an element.</td>
                            <td><a href="../codelaba3a9.html" target="_blank">Example</a></td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2 id="text-alignment-classes">Text Alignment Classes</h2>
                <p>You can use these text alignment classes to align and format your text content.</p>
                <div class="shadow">
                    <table class="data no-wrap">
                        <tr>
                            <th>Class</th>
                            <th>Description</th>
                            <th>Test</th>
                        </tr>
                        <tr>
                            <td><code>.text-left</code></td>
                            <td>Align the text to the left.</td>
                            <td><a href="../codelabdc18.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.text-center</code></td>
                            <td>Align the text to the center.</td>
                            <td><a href="../codelabdc18.html" target="_blank">Example</a></td>
                        </tr>     
                        <tr>
                            <td><code>.text-right</code></td>
                            <td>Align the text to the right.</td>
                            <td><a href="../codelabdc18.html" target="_blank">Example</a></td>
                        </tr> 
                        <tr>
                            <td><code>.text-justify</code></td>
                            <td>Justify the text content.</td>
                            <td><a href="../codelabdc18.html" target="_blank">Example</a></td>
                        </tr> 
                        <tr>
                            <td><code>.text-wrap</code></td>
                            <td>Wrap the overflowing text.</td>
                            <td><a href="../codelabdc18.html" target="_blank">Example</a></td>
                        </tr>     
                        <tr>
                            <td><code>.text-nowrap</code></td>
                            <td>Prevent text from wrapping.</td>
                            <td><a href="../codelabdc18.html" target="_blank">Example</a></td>
                        </tr> 
                        <tr>
                            <td><code>.text-truncate</code></td>
                            <td>Truncate the text with an ellipsis.</td>
                            <td><a href="../codelabdc18.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.text-break</code></td>
                            <td>Break the long words to prevent overflow.</td>
                            <td><a href="../codelabdc18.html" target="_blank">Example</a></td>
                        </tr> 
                        <tr>
                            <td><code>.text-lowercase</code></td>
                            <td>Transform the text to lowercase.</td>
                            <td><a href="../codelabdc18.html" target="_blank">Example</a></td>
                        </tr>     
                        <tr>
                            <td><code>.text-uppercase</code></td>
                            <td>Transform the text to uppercase.</td>
                            <td><a href="../codelabdc18.html" target="_blank">Example</a></td>
                        </tr> 
                        <tr>
                            <td><code>.text-capitalize</code></td>
                            <td>Capitalize the first letter of each word.</td>
                            <td><a href="../codelabdc18.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.font-weight-bold</code></td>
                            <td>Set the font-weight of an element to <span style="font-weight: 700;">bold</span>.</td>
                            <td><a href="../codelabdc18.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.font-weight-bolder</code></td>
                            <td>Set the font-weight of an element to <span style="font-weight: bolder">bolder</span> (relative to the parent).</td>
                            <td><a href="../codelabdc18.html" target="_blank">Example</a></td>
                        </tr> 
                        <tr>
                            <td><code>.font-weight-normal</code></td>
                            <td>Set the font-weight of an element to <span style="font-weight: 400;">normal</span>.</td>
                            <td><a href="../codelabdc18.html" target="_blank">Example</a></td>
                        </tr>     
                        <tr>
                            <td><code>.font-weight-light</code></td>
                            <td>Set the <span style="font-weight: 300;">light</span> font-weight for an element.</td>
                            <td><a href="../codelabdc18.html" target="_blank">Example</a></td>
                        </tr> 
                        <tr>
                            <td><code>.font-weight-lighter</code></td>
                            <td>Set the <span style="font-weight: lighter;">lighter</span> font-weight for an element (relative to the parent).</td>
                            <td><a href="../codelabdc18.html" target="_blank">Example</a></td>
                        </tr>  
                        <tr>
                            <td><code>.font-italic</code></td>
                            <td>Set the font-style of an element to <span style="font-style: italic;">italic</span>.</td>
                            <td><a href="../codelabdc18.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.text-monospace</code></td>
                            <td>Set the font-family of an element to monospace font (fixed-width)</td>
                            <td><a href="../codelabdc18.html" target="_blank">Example</a></td>
                        </tr> 
                        <tr>
                            <td><code>.text-reset</code></td>
                            <td>Reset the color of a text or link (inherits the color from its parent).</td>
                            <td><a href="../codelabdc18.html" target="_blank">Example</a></td>
                        </tr>     
                        <tr>
                            <td><code>.text-decoration-none</code></td>
                            <td>Remove the text decoration such as underline from a text.</td>
                            <td><a href="../codelabdc18.html" target="_blank">Example</a></td>
                        </tr> 
                    </table>
                </div>
                <hr />
                <h2 id="border-classes">Border Classes</h2>
                <p>You can use the border utility classes to quickly style the border and border-radius of an element. They are very useful for images, buttons, or any other element.</p>
                <div class="shadow">
                    <table class="data no-wrap">
                        <tr>
                            <th>Class</th>
                            <th>Description</th>
                            <th>Test</th>
                        </tr>
                        <tr>
                            <td><code>.border</code></td>
                            <td>Add a border on all sides of an element.</td>
                            <td><a href="../codelabed31.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.border-top</code></td>
                            <td>Add a border on the top side of an element.</td>
                            <td><a href="../codelabed31.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.border-right</code></td>
                            <td>Add a border on the right side of an element.</td>
                            <td><a href="../codelabed31.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.border-bottom</code></td>
                            <td>Add a border on the bottom side of an element.</td>
                            <td><a href="../codelabed31.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.border-left</code></td>
                            <td>Add a border on the left side of an element.</td>
                            <td><a href="../codelabed31.html" target="_blank">Example</a></td>
                        </tr>  
                        <tr>
                            <td><code>.border-0</code></td>
                            <td>Remove the border from all sides of an element.</td>
                            <td><a href="../codelab4041.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.border-top-0</code></td>
                            <td>Remove the border from top side of an element.</td>
                            <td><a href="../codelab4041.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.border-right-0</code></td>
                            <td>Remove the border from right side of an element.</td>
                            <td><a href="../codelab4041.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.border-bottom-0</code></td>
                            <td>Remove the border from bottom side of an element.</td>
                            <td><a href="../codelab4041.html" target="_blank">Example</a></td>
                        </tr>   
                        <tr>
                            <td><code>.border-left-0</code></td>
                            <td>Remove the border from left side of an element.</td>
                            <td><a href="../codelab4041.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.border-primary</code></td>
                            <td>Change the border-color of an element to blue (<span class="color-code"><i style="background:#007bff;"></i>#007bff</span>).</td>
                            <td><a href="../codelab4c1a.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.border-secondary</code></td>
                            <td>Change the border-color of an element to grey (<span class="color-code"><i style="background:#6c757d;"></i>#6c757d</span>).</td>
                            <td><a href="../codelab4c1a.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.border-success</code></td>
                            <td>Change the border-color of an element to green (<span class="color-code"><i style="background:#28a745;"></i>#28a745</span>).</td>
                            <td><a href="../codelab4c1a.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.border-danger</code></td>
                            <td>Change the border-color of an element to red (<span class="color-code"><i style="background:#dc3545;"></i>#dc3545</span>).</td>
                            <td><a href="../codelab4c1a.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.border-warning</code></td>
                            <td>Change the border-color of an element to yellow (<span class="color-code"><i style="background:#ffc107;"></i>#ffc107</span>).</td>
                            <td><a href="../codelab4c1a.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.border-info</code></td>
                            <td>Change the border-color of an element to teal (<span class="color-code"><i style="background:#17a2b8;"></i>#17a2b8</span>).</td>
                            <td><a href="../codelab4c1a.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.border-light</code></td>
                            <td>Change the border-color of an element to very light grey (<span class="color-code"><i style="background:#f8f9fa;"></i>#f8f9fa</span>).</td>
                            <td><a href="../codelab4c1a.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.border-dark</code></td>
                            <td>Change the border-color of an element to dark grey (<span class="color-code"><i style="background:#343a40;"></i>#343a40</span>).</td>
                            <td><a href="../codelab4c1a.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.border-white</code></td>
                            <td>Change the border-color of an element to white (<span class="color-code"><i style="background:#fff;"></i>#fff</span>).</td>
                            <td><a href="../codelab4c1a.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.rounded</code></td>
                            <td>Round all corners of an element.</td>
                            <td><a href="../codelab513d.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.rounded-top</code></td>
                            <td>Round top-left and top-right corners of an element.</td>
                            <td><a href="../codelab513d.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.rounded-right</code></td>
                            <td>Round top-right and bottom-right corners of an element.</td>
                            <td><a href="../codelab513d.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.rounded-bottom</code></td>
                            <td>Round bottom-left and bottom-right corners of an element.</td>
                            <td><a href="../codelab513d.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.rounded-left</code></td>
                            <td>Round top-left and bottom-left corners of an element.</td>
                            <td><a href="../codelab513d.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.rounded-circle</code></td>
                            <td>Round an element into circle shape.</td>
                            <td><a href="../codelab513d.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.rounded-pill</code></td>
                            <td>Round an element into pill shape.</td>
                            <td><a href="../codelab513d.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.rounded-0</code></td>
                            <td>Remove round corners from an element.</td>
                            <td><a href="../codelab513d.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.rounded-sm</code></td>
                            <td>Set smaller border-radius (0.2rem) for an element.</td>
                            <td><a href="../codelab513d.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.rounded-lg</code></td>
                            <td>Set larger border-radius (0.2rem) for an element.</td>
                            <td><a href="../codelab513d.html" target="_blank">Example</a></td>
                        </tr>             
                    </table>
                </div>
                <hr />
                <h2 id="spacing-classes">Spacing Classes</h2>
                <p>You can use the spacing utility classes to quickly adjust the margin and padding of an element.</p>
                <p>The <code>#</code> character in the classes <code>.mt-#</code>, <code>.pt-#</code>, etc. represents the size of the margin or padding. The value of the size can be an integer from <code>0</code> to <code>5</code>, or <code>auto</code>.</p>
                <p>The size <code>0</code> completely removes the margin or padding by setting it to 0, whereas the value <code>auto</code> sets the margin to auto. The integer numbers from <code>1</code> to <code>5</code> sets the margin or padding incrementally (ranging from 0.25rem to 3rem). Try out the examples to see how it works:</p>
                <div class="shadow">
                    <table class="data no-wrap">
                        <tr>
                            <th>Class</th>
                            <th>Description</th>
                            <th>Test</th>
                        </tr>                        
                        <tr>
                            <td><code>.mt-#</code></td>
                            <td>Set the top margin of an element.</td>
                            <td><a href="../codelab24f4.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.mb-#</code></td>
                            <td>Set the bottom margin of an element.</td>
                            <td><a href="../codelab57b2.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.ml-#</code></td>
                            <td>Set the left margin of an element.</td>
                            <td><a href="../codelab5222.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.mr-#</code></td>
                            <td>Set the right margin of an element.</td>
                            <td><a href="../codelab6594.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.mx-#</code></td>
                            <td>Set the left and right margin of an element.</td>
                            <td><a href="../codelabc1b4.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.my-#</code></td>
                            <td>Set the top and bottom margin of an element.</td>
                            <td><a href="../codelab0341.html" target="_blank">Example</a></td>
                        </tr>  
                        <tr>
                            <td><code>.pt-#</code></td>
                            <td>Set the top padding of an element.</td>
                            <td><a href="../codelaba16d.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.pb-#</code></td>
                            <td>Set the bottom padding of an element.</td>
                            <td><a href="../codelab753d.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.pl-#</code></td>
                            <td>Set the left padding of an element.</td>
                            <td><a href="../codelab7fc6.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.pr-#</code></td>
                            <td>Set the right padding of an element.</td>
                            <td><a href="../codelaba5fe.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.px-#</code></td>
                            <td>Set the left and right padding of an element.</td>
                            <td><a href="../codelab5de3.html" target="_blank">Example</a></td>
                        </tr> 
                        <tr>
                            <td><code>.py-#</code></td>
                            <td>Set the top and bottom padding of an element.</td>
                            <td><a href="../codelab26c0.html" target="_blank">Example</a></td>
                        </tr> 
                    </table>
                </div>           
                <!--Tip Box-->
				<div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box" style="background-color:#fad28c">
                            <p><strong>Important:</strong> You can also apply negative margins using the margin utility classes. Just append the size number with the character <code>n</code>, like <code>.mt-n1</code>, <code>.mb-n2</code>, and so on.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->   
                <hr />
                <h2 id="float-classes">Float Classes</h2>    
                <p>You can use the float utility classes to quickly float an element to the left or right or remove float from an element altogether. Here's the list of available float classes.</p>
                <div class="shadow">
                    <table class="data no-wrap">
                        <tr>
                            <th>Class</th>
                            <th>Description</th>
                            <th>Test</th>
                        </tr>                        
                        <tr>
                            <td><code>.float-left</code></td>
                            <td>Float an element to the left.</td>
                            <td><a href="../codelab8a3d.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.float-right</code></td>
                            <td>Float an element to the right.</td>
                            <td><a href="../codelab8a3d.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.float-none</code></td>
                            <td>Disable floating from an element.</td>
                            <td><a href="../codelab8a3d.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.clearfix</code></td>
                            <td>Clear floats to prevent parent element from collapsing.</td>
                            <td><a href="../codelab8a3d.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.float-*-left</code></td>
                            <td>Float an element to the left on based on the viewport size.</td>
                            <td><a href="../codelabce17.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.float-*-right</code></td>
                            <td>Float an element to the right on based on the viewport size.</td>
                            <td><a href="../codelabc788.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.float-*-none</code></td>
                            <td>Disable floating from an element on based on the viewport size.</td>
                            <td><a href="../codelab9857.html" target="_blank">Example</a></td>
                        </tr>                        
                    </table>
                </div>   
                <!--Tip Box-->
				<div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box" style="background-color:#fad28c">
                            <p><strong>Important:</strong> The <code>*</code> character in the classes  <code>.float-*-left</code> and <code>.float-*-right</code> represents responsive breakpoint which can be <code>sm</code>, <code>md</code>, <code>lg</code>, or <code>xl</code>. See <a href="bt_grid-system.php">Bootstrap grid system</a> for more detail.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box--> 
                <hr />
                <h2 id="shadow-classes">Shadow Classes</h2>    
                <p>You can use the shadow utility classes to quickly add or remove shadows to elements.</p>
                <div class="shadow">
                    <table class="data no-wrap">
                        <tr>
                            <th>Class</th>
                            <th>Description</th>
                            <th>Test</th>
                        </tr>                        
                        <tr>
                            <td><code>.shadow</code></td>
                            <td>Add a shadow to an element.</td>
                            <td><a href="../codelab5b6f.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.shadow-sm</code></td>
                            <td>Add a small shadow to an element.</td>
                            <td><a href="../codelab5b6f.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.shadow-lg</code></td>
                            <td>Add a larger shadow to an element.</td>
                            <td><a href="../codelab5b6f.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.shadow-none</code></td>
                            <td>Remove shadow from an element.</td>
                            <td><a href="../codelab5b6f.html" target="_blank">Example</a></td>
                        </tr>
                    </table>
                </div>  
				<hr />
                <h2 id="sizing-classes">Sizing Classes</h2>    
                <p>You can use the sizing utility classes to easily make an element as wide or as tall.</p>
                <div class="shadow">
                    <table class="data no-wrap">
                        <tr>
                            <th style="width: 110px;">Class</th>
                            <th>Description</th>
                            <th>Test</th>
                        </tr>                        
                        <tr>
                            <td><code>.w-25</code></td>
                            <td>Set the width of an element to 25% of its parent element.</td>
                            <td><a href="../codelabdbef.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.w-50</code></td>
                            <td>Set the width of an element to 50% of its parent element.</td>
                            <td><a href="../codelabdbef.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.w-75</code></td>
                            <td>Set the width of an element to 75% of its parent element.</td>
                            <td><a href="../codelabdbef.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.w-100</code></td>
                            <td>Set the width of an element to 100% of its parent element.</td>
                            <td><a href="../codelabdbef.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.w-auto</code></td>
                            <td>Set the width of an element to auto, i.e. the browser will calculate and select a width for the specified element.</td>
                            <td><a href="../codelabdbef.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.mw-100</code></td>
                            <td>Set the max-width of an element to 100%.</td>
                            <td><a href="../codelabbfe4.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.h-25</code></td>
                            <td>Set the height of an element to 25% of its parent element.</td>
                            <td><a href="../codelabaff6.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.h-50</code></td>
                            <td>Set the height of an element to 50% of its parent element.</td>
                            <td><a href="../codelabaff6.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.h-75</code></td>
                            <td>Set the height of an element to 75% of its parent element.</td>
                            <td><a href="../codelabaff6.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.h-100</code></td>
                            <td>Set the height of an element to 100% of its parent element.</td>
                            <td><a href="../codelabaff6.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.h-auto</code></td>
                            <td>Set the height of an element to auto, i.e. the browser will calculate and select a height for the specified element.</td>
                            <td><a href="../codelabaff6.html" target="_blank">Example</a></td>
                        </tr>                        
                        <tr>
                            <td><code>.mh-100</code></td>
                            <td>Set the max-height of an element to 100%.</td>
                            <td><a href="../codelabbfe4.html" target="_blank">Example</a></td>
                        </tr>                        
                        <tr>
                            <td><code>.vw-100</code></td>
                            <td>Set the width of an element to 100% of the width of the viewport.</td>
                            <td><a href="../codelabce29.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.min-vw-100</code></td>
                            <td>Set the min-width of an element to 100% of the width of the viewport.</td>
                            <td><a href="../codelabce29.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.vh-100</code></td>
                            <td>Set the height of an element to 100% of the height of the viewport.</td>
                            <td><a href="../codelabf75d.html" target="_blank">Example</a></td>
                        </tr>                        
                        <tr>
                            <td><code>.min-vh-100</code></td>
                            <td>Set the min-height of an element to 100% of the height of the viewport.</td>
                            <td><a href="../codelabf75d.html" target="_blank">Example</a></td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2 id="vertical-alignment-classes">Vertical Alignment Classes</h2>    
                <p>You can use the vertical alignment utility classes to quickly change the vertical alignment of inline, inline-block, inline-table, and table cell elements.</p>
                <div class="shadow">
                    <table class="data no-wrap">
                        <tr>
                            <th>Class</th>
                            <th>Description</th>
                            <th>Test</th>
                        </tr>                        
                        <tr>
                            <td><code>.align-baseline</code></td>
                            <td>Align the baseline of the element with the baseline of its parent.</td>
                            <td><a href="../codelab6af3.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.align-top</code></td>
                            <td>Align the top of the element with the top of the entire line.</td>
                            <td><a href="../codelab6af3.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.align-middle</code></td>
                            <td>Align the element in the middle of the parent element.</td>
                            <td><a href="../codelab6af3.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.align-bottom</code></td>
                            <td>Align the bottom of the element with the bottom of the entire line.</td>
                            <td><a href="../codelab6af3.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.align-text-top</code></td>
                            <td>Align the top of the element with the top of the parent element's font.</td>
                            <td><a href="../codelab6af3.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.align-text-bottom</code></td>
                            <td>Align the bottom of the element with the bottom of the parent element's font.</td>
                            <td><a href="../codelab6af3.html" target="_blank">Example</a></td>
                        </tr>
                    </table>
                </div>
				<hr />
                <h2>Position Classes</h2>    
                <p>You can use the position utility classes to quickly configuring the position of an element.</p>
                <div class="shadow">
                    <table class="data no-wrap">
                        <tr>
                            <th>Class</th>
                            <th>Description</th>
                            <th>Test</th>
                        </tr>                        
                        <tr>
                            <td><code>.position-static</code></td>
                            <td>Set the position of element to static.</td>
                            <td><a href="../codelabf099.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.position-relative</code></td>
                            <td>Set the position of element to relative.</td>
                            <td><a href="../codelabbf0c.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.position-absolute</code></td>
                            <td>Set the position of element to absolute.</td>
                            <td><a href="../codelab26d0.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.position-fixed</code></td>
                            <td>Set the position of element to fixed.</td>
                            <td><a href="../codelab578e.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.position-sticky</code></td>
                            <td>Set the position of element to sticky.</td>
                            <td><a href="../codelab0d13.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.fixed-top</code></td>
                            <td>Position an element at the top of the viewport, from edge to edge.</td>
                            <td><a href="../codelabad98.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.fixed-bottom</code></td>
                            <td>Position an element at the bottom of the viewport, from edge to edge.</td>
                            <td><a href="../codelab6626.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.sticky-top</code></td>
                            <td>Position an element at the top of the viewport, from edge to edge, but that will only happen after you scroll past it.</td>
                            <td><a href="../codelabfba6.html" target="_blank">Example</a></td>
                        </tr>
                    </table>
                </div>
				<hr />
                <h2>Display Classes</h2>    
                <p>You can use the display utility classes to quickly and responsively toggle the display value of an element. You can also control an element's display when printing the page.</p>
                <div class="shadow">
                    <table class="data no-wrap">
                        <tr>
                            <th>Class</th>
                            <th>Description</th>
                            <th>Test</th>
                        </tr>                        
                        <tr>
                            <td><code>.d-none</code></td>
                            <td>Hide an element. It does not take up any space in the layout.</td>
                            <td><a href="../codelab4de5.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.d-inline</code></td>
                            <td>Force an element to generate an inline-level box.</td>
                            <td><a href="../codelab7394.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.d-inline-block</code></td>
                            <td>Force an element to generate a block box that will be flowed with surrounding content i.e. in the same line as adjacent content like inline box.</td>
                            <td><a href="../codelab735a.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.d-block</code></td>
                            <td>Force an element to generate a block-level box.</td>
                            <td><a href="../codelab11ba.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.d-table</code></td>
                            <td>Force an element to behave like a <a href="../info-html/ht_table-tag.php"><code>&lt;table&gt;</code></a> element.</td>
                            <td><a href="../codelab9ecc.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.d-table-row</code></td>
                            <td>Force an element to behave like a <a href="../info-html/ht_tr-tag.php"><code>&lt;tr&gt;</code></a> element.</td>
                            <td><a href="../codelab9ecc.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.d-table-cell</code></td>
                            <td>Force an element to behave like a <a href="../info-html/ht_td-tag.php"><code>&lt;td&gt;</code></a> element.</td>
                            <td><a href="../codelab9ecc.html" target="_blank">Example</a></td>
                        </tr>                        
                        <tr>
                            <td><code>.d-flex</code></td>
                            <td>Force an element to generate a block-level <a href="../des-css/stylel_flexible-box-layouts.php">flex container box</a>.</td>
                            <td><a href="../codelab6028.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.d-inline-flex</code></td>
                            <td>Force an element to generate an inline-level flex container box.</td>
                            <td><a href="../codelab2a1b.html" target="_blank">Example</a></td>
                        </tr>
                    </table>
                </div>
                <p>You can also use the responsive breakpoints (<code>sm</code>, <code>md</code>, <code>lg</code>, and <code>xl</code>.) with these display utility classes to show or hide elements depending on viewport width using the format <code>.d-{breakpoint}-{value}</code>, for example, <code>.d-sm-none</code>, <code>.d-md-block</code>, <code>.d-xl-block</code>, and so on.</p>
				<p>For a complete set of flex utility classes, please check out the <a rel="nofollow" href="https://getbootstrap.com/docs/4.3/utilities/flex/" target="_blank">Bootstrap flex reference page</a>.</p>
                <!--Tip Box-->
				<div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box" style="background-color:#fad28c">
                            <p><strong>Important:</strong> You can create print variant of the display classes to change the display value of elements when printing by simply inserting the string <code>print-</code> after <code>.d-</code>, for example, <code>.d-print-none</code>, <code>.d-print-inline</code>, <code>.d-print-block</code>, <code>.d-print-table</code>, and so on.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box--> 
				<hr />
                <h2>Miscellaneous Classes</h2>    
                <p>Here's the list some more utility classes that can used for various purposes.</p>
                <div class="shadow">
                    <table class="data no-wrap">
                        <tr>
                            <th>Class</th>
                            <th>Description</th>
                            <th>Test</th>
                        </tr>                        
                        <tr>
                            <td><code>.close</code></td>
                            <td>Create generic close icon for dismissing content like modals and alerts.</td>
                            <td><a href="../codelab33f0.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.overflow-auto</code></td>
                            <td>Provide scrollbars to view overflowed content of an element if required.</td>
                            <td><a href="../codelab09b1.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.overflow-hidden</code></td>
                            <td>Hide overflowed content of an element.</td>
                            <td><a href="../codelab09b1.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.stretched-link</code></td>
                            <td>Make an element clickable by stretching a nested link.</td>
                            <td><a href="../codelabb037.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.visible</code></td>
                            <td>Make an element visible, without modifying the display.</td>
                            <td><a href="../codelabe9a2.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.invisible</code></td>
                            <td>Make an element invisible, but it still take up space in the page.</td>
                            <td><a href="../codelabe9a2.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.sr-only</code></td>
                            <td>Hide an element to all devices except screen readers.</td>
                            <td><a href="../codelabfd4a.html" target="_blank">Example</a></td>
                        </tr>
                        <tr>
                            <td><code>.text-hide</code></td>
                            <td>Replace an element's text content with a background image.</td>
                            <td><a href="../codelabbd4d.html" target="_blank">Example</a></td>
                        </tr>
                    </table>
                </div>        
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="bt_jumbotron.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_modals.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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