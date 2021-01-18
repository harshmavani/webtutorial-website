<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="Understanding the Bootstrap 4 Grid System">
	  <meta name="keywords" content="Bootstrap,Bootstrap4,Grid System,grid,Bootstrap 4 Grid,bootstrap grid,Understanding grid system">
	  <meta name="author" content="webschooltoday.com">
    <title>Understanding the Bootstrap-4 Grid System - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">Understanding the Bootstrap 4 Grid System</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
          </div>
          <a href="bt_fixed-layout.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                    <a href="bt_get-started.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Grid System</span></h1>
                <p class="summary">The Bootstrap grid system is the fastest and easy way to create responsive web page layout.</p>
                <h2>What is Bootstrap Grid System</h2>
                <p>Bootstrap grid system provides the quick and convenient way to create responsive website layouts. The latest Bootstrap 4 version introduces the new mobile-first <a href="../des-css/stylel_flexible-box-layouts.php">flexbox</a> grid system that appropriately scales up to 12 columns as the device or viewport size increases.</p>
                <p>Bootstrap 4 includes predefined grid classes for quickly making grid layouts for different types of devices like cell phones, tablets, laptops and desktops, etc. For example, you can use the <code>.col-*</code> classes to create grid columns for extra small devices mobile phones in portrait mode, similarly you can use the <code>.col-sm-*</code> classes to create grid columns for small screen devices like mobile phone in landscape mode, the <code>.col-md-*</code> classes for medium screen devices like tablets, the <code>.col-lg-*</code> classes for large devices like desktops, and the <code>.col-xl-*</code> classes for extra large desktop screens.</p>
				<p class="space">The following table summarizes some of the key features of the new grid system.</p>
                <div class="shadow break" id="grid-features">
                    <table class="data">
                        <tr>
                            <th>Features <div class="device">Bootstrap&nbsp;4&nbsp;Grid&nbsp;System</div></th>
                            <th>Extra&nbsp;small <div class="device">&lt;576px</div></th>
                            <th>Small <div class="device">&ge;576px</div></th>
                            <th>Medium <div class="device">&ge;768px</div></th>
                            <th>Large <div class="device">&ge;992px</div></th>
                            <th>Extra large <div class="device">&ge;1200px</div></th>
                        </tr>
                        <tr>
                            <td><pre>Max&nbsp;container&nbsp;width</pre></td>
                            <td>None (auto)</td>
                            <td>540px</td>
                            <td>720px</td>
                            <td>960px</td>
                            <td>1140px</td>
                        </tr>
                        <tr>
                            <td><pre>Ideal&nbsp;for</pre></td>
                            <td>Mobile&nbsp;<small>(Portrait)</small></td>
                            <td>Mobile&nbsp;<small>(Landscape)</small></td>
                            <td>Tablets</td>
                            <td>Laptops</td>
                            <td>Laptops &amp; Desktops</td>
                        </tr>
                        <tr>
                            <td>Class prefix</td>
                            <td><code class="mark">.col-</code></td>
                            <td><code class="mark">.col-sm-</code></td>
                            <td><code class="mark">.col-md-</code></td>
                            <td><code class="mark">.col-lg-</code></td>
                            <td><code class="mark">.col-xl-</code></td>
                        </tr>
                        <tr>
                            <td>Number of columns</td>
                            <td colspan="5">12</td>
                        </tr>
                        <tr>
                            <td>Gutter width</td>
                            <td colspan="5">30px (15px on each side of a column)</td>
                        </tr>
                        <tr>
                            <td>Nestable</td>
                            <td colspan="5">Yes</td>
                        </tr>
                        <tr>
                            <td>Column ordering</td>
                            <td colspan="5">Yes</td>
                        </tr>
                    </table>
                </div>
                <p>Above table demonstrates one important thing, applying any <code>.col-sm-*</code> class to an element will not only affect its styling on small devices, but also on medium, large and extra large devices having screen width greater than or equal to 540px, if a <code>.col-md-*</code>, <code>.col-lg-*</code> or <code>.col-xl-*</code> class is not present. Similarly, the <code>.col-md-*</code> class will not only affect the styling of elements on medium devices, but also on large and extra large devices if a <code>.col-lg-*</code> or <code>.col-xl-</code> class is not present.</p>
				<p class="space">Now the question arises how to create rows and columns using this 12 column responsive grid system. The answer is pretty simple, at first create a container that acts as a rg3-w for your rows and columns using the <code>.container</code> class, after that create rows inside the container using the <code>.row</code> class, and to create columns inside any row you can use the <code>.col-*</code>, <code>.col-sm-*</code>, <code>.col-md-*</code>, <code>.col-lg-*</code> and <code>.col-xl-*</code> classes. The columns are actual content area where we will place our contents. Let's put all these things into real action. Let's see how it actually works:</p>
				<h2>Creating Two Column Layouts</h2>
				<p>The following example will show you how to create two column layouts for medium, large and extra large devices like tables, laptops and desktops etc. However, on mobile phones (screen width less than 768px), the columns will automatically become horizontal.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8682.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1" >

<div class="container">
    <!--Row with two equal columns-->
    <div class="row">
        <div class="col-md-6">Column left</div>
        <div class="col-md-6">Column right</div>
    </div>
    
    <!--Row with two columns divided in 1:2 ratio-->
    <div class="row">
        <div class="col-md-4">Column left</div>
        <div class="col-md-8">Column right</div>
    </div>
    
    <!--Row with two columns divided in 1:3 ratio-->
    <div class="row">
        <div class="col-md-3">Column left</div>
        <div class="col-md-9">Column right</div>
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
				<div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585">
                            <p><strong>Read carefully:</strong> In a grid layout, content must be placed inside columns (<code>.col</code> and <code>.col-*</code>) and only columns may be the immediate children of rows (<code>.row</code>). Rows should be placed inside a <code>.container</code> (fixed-width) or <code>.container-fluid</code> (full-width) for proper padding and alignment.</p>
                        </div>
                    </div>
                </div>
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box" style="background-color:#fad28c">
                            <p><strong>Important:</strong> Grid column widths are set in percentages, so they're always fluid and sized relative to their parent element. In addition, each column has horizontal padding (called a gutter) for controlling the space between individual columns.</p>
                        </div>
                    </div>
                </div>
				<p class="space">Since the Bootstrap grid system is based on 12 columns, therefore to keep the columns in a one line (i.e. side by side), the sum of the grid column numbers within a single row should not be greater than 12. If you go through the above example code carefully you will find the numbers of grid columns (i.e. <code>col-md-*</code>) add up to twelve (6+6, 4+8 and 3+9) for every row.</p>
				<h2>Creating Three Column Layouts</h2>
				<p>Similarly, you can create other layouts based on the above principle. For instance, the following example will typically create three column layouts for laptops and desktops screens. It also works in tablets in landscape mode if screen resolution is more than or equal to 992 pixels (e.g. Apple iPad). However, in portrait mode the grid columns will be horizontal as usual.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3e69.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2" >

<div class="container">
    <!--Row with three equal columns-->
    <div class="row">
        <div class="col-lg-4">Column left</div>
        <div class="col-lg-4">Column middle</div>
        <div class="col-lg-4">Column right</div>
    </div>
    
    <!--Row with three columns divided in 1:4:1 ratio-->
    <div class="row">
        <div class="col-lg-2">Column left</div>
        <div class="col-lg-8">Column middle</div>
        <div class="col-lg-2">Column right</div>
    </div>
    
    <!--Row with three columns divided unevenly-->
    <div class="row">
        <div class="col-lg-3">Column left</div>
        <div class="col-lg-7">Column middle</div>
        <div class="col-lg-2">Column right</div>
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
				<div class="color-box space">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box" style="background-color:#ff8585">
							<p><strong>Read carefully:</strong> If more than 12 grid columns are placed within a single row, then each group of extra columns, as a whole, will wrap onto a new line. See <a href="#column-wrapping">column wrapping behavior</a>.</p>
						</div>
					</div>
				</div>
                <hr />
                <h2>Bootstrap Auto-layout Columns</h2>
                <p>You can also create <em>equal width columns</em> for all devices (extra small, small, medium, large, and extra large) through simply using the class <code>.col</code>, without specifying any column number.</p>
                <p>Let's try out the following example to understand how it exactly works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab01b5.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3" >

<div class="container">
    <!--Row with two equal columns-->
    <div class="row">
        <div class="col">Column one</div>
        <div class="col">Column two</div>
    </div>
    
    <!--Row with three equal columns-->
    <div class="row">
        <div class="col">Column one</div>
        <div class="col">Column two</div>
        <div class="col">Column three</div>
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
                <p>Additionally, you can also set the width of one column and let the sibling columns automatically resize around it equally. You may use the predefined grid classes or inline widths.</p>
                <p>If you try the following example you'll find columns in a row with class <code>.col</code> has equal width.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9128.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4" >

<div class="container">
    <!--Row with two equal columns-->
    <div class="row">
        <div class="col">Column one</div>
        <div class="col">Column two</div>
    </div>
    
    <!--Row with three columns divided in 1:2:1 ratio-->
    <div class="row">
        <div class="col">Column one</div>
        <div class="col-sm-6">Column two</div>
        <div class="col">Column three</div>
    </div>
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
				<h2 id="column-wrapping">Column Wrapping Behavior</h2>
				<p>Now we are going to create more flexible layouts that changes the column orientation based on the viewport size. The following example will create a three column layout on large devices like laptops and desktops, as well as on tablets (e.g. Apple iPad) in landscape mode, but on medium devices like tablets in portrait mode (768px &le; screen width &lt; 992px), it will change into a two column layout where the third column moves at the bottom of the first two columns.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8065.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5" >

<div class="container">
    <div class="row">
        <div class="col-md-4 col-lg-3">Column one</div>
        <div class="col-md-8 col-lg-6">Column two</div>
        <div class="col-md-12 col-lg-3">Column three</div>
    </div>
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
				<p>As you can see in the example above the sum of the medium grid column numbers (i.e. <code>col-md-*</code>) is <code>3&thinsp;+&thinsp;9&thinsp;+&thinsp;12&thinsp;=&thinsp;24&thinsp;&gt;&thinsp;12</code>, therefore the third <a href="../info-html/html-div-tag.php"><code>&lt;div&gt;</code></a> element with the class <code>.col-md-12</code> that is adding the extra columns beyond the maximum 12 columns in a <code>.row</code>, gets wrapped onto a new line as one contiguous unit on the medium screen size devices.</p>
				<p>Similarly, you can create even more adaptable layouts for your websites using the Bootstrap's grid column wrapping feature. Here're some ready to use <a href="bt_grid-examples.php" target="_blank">Bootstrap grid examples</a>.</p>
				<hr />
                <h2>Creating Multi-Column Layouts with Bootstrap</h2>
                <p>With the new Bootstrap 4 mobile first flexbox grid system you can easily control how your website layout will render on different types of devices that have different screen or viewport sizes like mobile phones, tablets, desktops, etc. Let's consider the following illustration.</p>
                <div class="grid-system-illustration"><img src="../lib/images/grid-system-illustration.jpg" width="530" height="148" alt="Bootstrap Grid System Illustration" /></div>
                <p>In the above illustration there are total 12 content boxes in all devices, but its placement varies according to the device screen size, like in mobile device the layout is rendered as one column grid layout which has 1 column and 12 rows placed above one another, whereas in tablet it is rendered as two column grid layout which has 2 columns and 6 rows.</p>
                <p>Further, in large screen size devices like laptops and desktops it is rendered as three column grid layout which has 3 columns and 4 rows and finally in extra large screen devices like large desktops it is rendered as four column grid layout which has 4 columns and 3 rows.</p>
                <p>Now the question is how we can create such responsive layouts using this Bootstrap new grid system. Let's start with the primary target device. Suppose our primary target device is laptop or normal desktop. Since our laptop layout has 3 columns and 4 rows i.e. 3x4 grid layout, so the HTML code for making such grid structure would look something like this.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab754c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6" >

<div class="container">
    <div class="row">
        <div class="col-md-4 col-lg-3">Column one</div>
        <div class="col-md-8 col-lg-6">Column two</div>
        <div class="col-md-12 col-lg-3">Column three</div>
    </div>
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
                <p>If you see the output of the above example in a laptop or desktop which has screen or viewport width greater than or equal to 992px but less than 1200px, you will find the layout has 4 rows where each row has 3 equal columns resulting in 3x4 grid layout.</p>
                <p>Now it's time to customize our layout for other devices. Let's first start by customizing it for tablet device. Since inside the tablet our layout rendered as 2x6 grids (i.e. 2 columns and 6 rows). So, go ahead and add the class <code>.col-md-6</code> on every column.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9534.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7" >

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6"><p>Box 1</p></div>
        <div class="col-lg-4 col-md-6"><p>Box 2</p></div>
        <div class="col-lg-4 col-md-6"><p>Box 3</p></div>
        <div class="col-lg-4 col-md-6"><p>Box 4</p></div>
        <div class="col-lg-4 col-md-6"><p>Box 5</p></div>
        <div class="col-lg-4 col-md-6"><p>Box 6</p></div>
        <div class="col-lg-4 col-md-6"><p>Box 7</p></div>
        <div class="col-lg-4 col-md-6"><p>Box 8</p></div>
        <div class="col-lg-4 col-md-6"><p>Box 9</p></div>
        <div class="col-lg-4 col-md-6"><p>Box 10</p></div>
        <div class="col-lg-4 col-md-6"><p>Box 11</p></div>
        <div class="col-lg-4 col-md-6"><p>Box 12</p></div>
    </div>
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
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box" style="background-color:#fad28c">
							<p><strong>Important:</strong> For convenience choose your primary target device and create layout for that device first after that add classes to make it responsive for other devices.</p>
						</div>
					</div>
				</div>
                <p>Similarly, you can customize the layout for extra large devices like a large desktop screen by adding the class <code>.col-xl-3</code> on each column, as every row in our extra large device layout contains 4 columns. Here's the final code after combining the whole process.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0a2f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8" >

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-xl-3"><p>Box 1</p></div>
        <div class="col-lg-4 col-md-6 col-xl-3"><p>Box 2</p></div>
        <div class="col-lg-4 col-md-6 col-xl-3"><p>Box 3</p></div>
        <div class="col-lg-4 col-md-6 col-xl-3"><p>Box 4</p></div>
        <div class="col-lg-4 col-md-6 col-xl-3"><p>Box 5</p></div>
        <div class="col-lg-4 col-md-6 col-xl-3"><p>Box 6</p></div>
        <div class="col-lg-4 col-md-6 col-xl-3"><p>Box 7</p></div>
        <div class="col-lg-4 col-md-6 col-xl-3"><p>Box 8</p></div>
        <div class="col-lg-4 col-md-6 col-xl-3"><p>Box 9</p></div>
        <div class="col-lg-4 col-md-6 col-xl-3"><p>Box 10</p></div>
        <div class="col-lg-4 col-md-6 col-xl-3"><p>Box 11</p></div>
        <div class="col-lg-4 col-md-6 col-xl-3"><p>Box 12</p></div>
    </div>
</div>

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
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box" style="background-color:#fad28c">
							<p><strong>Important:</strong> According to the above illustration there is no need to customize the layout for mobile phones; since columns on extra small devices will automatically become horizontal and rendered as 1x12 column grid layout in absence of <code>.col-*</code> or <code>.col-sm-*</code> classes.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Nesting of Grid Columns</h2>
				<p>The Bootstrap grid columns are also nestable, that means you can put rows and columns inside an existing column. However, the formula for placing the columns will be the same, i.e. the sum of column numbers should be equal to 12 or less within a single row.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe305.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9" >

<div class="container">
    <div class="row">
        <div class="col-sm-8">Column left</div>
        <div class="col-sm-4">
            <!--Column right with nested rows and columns-->
            <div class="row">
                <div class="col-12"></div>
            </div>
            <div class="row">
                <div class="col-6"></div>
                <div class="col-6"></div>
            </div>
        </div>
    </div>
</div>

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
                <h2>Creating Variable Width Columns</h2>
                <p>You can use the <code>col-{breakpoint}-auto</code> classes to size columns based on the natural width of their content. Try out the following example to see how it works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabeb24.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10" >

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-3">Column left</div>
        <div class="col-md-auto">Variable width column</div>
        <div class="col-md-3">Column right</div>
    </div>
    <div class="row">
        <div class="col">Column left</div>
        <div class="col-auto">Variable width column</div>
        <div class="col">Column right</div>
    </div>
</div>

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
                <h2>Alignment of Grid Columns</h2>
                <p>You can use the flexbox alignment utilities to vertically and horizontally align grid columns inside a container. Try out the following examples to understand how it works:</p>
                <h3>Vertical Alignment of Grid Columns</h3>
                <p>You can use the classes <code>.align-items-start</code>, <code>.align-items-center</code>, and <code>.align-items-end</code> to align the grid columns vertically at the top, middle and bottom of a container, respectively.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba5b0-2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11" >

<div class="container">
    <div class="row align-items-start">
        <div class="col">Column one</div>
        <div class="col">Column two</div>
        <div class="col">Column three</div>
    </div>
    <div class="row align-items-center">
        <div class="col">Column one</div>
        <div class="col">Column two</div>
        <div class="col">Column three</div>
    </div>
    <div class="row align-items-end">
        <div class="col">Column one</div>
        <div class="col">Column two</div>
        <div class="col">Column three</div>
    </div>
</div>

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
                <p>Individual columns inside a row can also be aligned vertically. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0c05.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code12" >

<div class="container">
    <div class="row">
        <div class="col align-self-start">Column one</div>
        <div class="col align-self-center">Column two</div>
        <div class="col align-self-end">Column three</div>
    </div>
</div>

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
				<div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585">
                            <p><strong>Read carefully:</strong> You can skip the number in <code>.col-*</code> grid class and just use the <code>.col</code> class to create equal size columns for all devices (extra small, small, medium, large, and extra large).</p>
                        </div>
                    </div>
                </div>
                <h3>Horizontal Alignment of Grid Columns</h3>
                <p>You can use the classes <code>.justify-content-start</code>, <code>.justify-content-center</code>, and <code>.justify-content-end</code> to align the grid columns horizontally at the left, center and right of a container, respectively. Let's check out the following example to see how it works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd8e1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code13" >

<div class="container">
    <div class="row justify-content-start">
        <div class="col-4">Column one</div>
        <div class="col-4">Column two</div>
    </div>
    <div class="row justify-content-center">
        <div class="col-4">Column one</div>
        <div class="col-4">Column two</div>
    </div>
    <div class="row justify-content-end">
        <div class="col-4">Column one</div>
        <div class="col-4">Column two</div>
    </div>
</div>

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
                <p>Alternatively, you can use the class <code>.justify-content-around</code> to distribute grid columns evenly with half-size spaces on either end, whereas you can use the class <code>.justify-content-between</code> to distribute the grid columns evenly where the first column placed at the start and the last column placed at the end. Try out the following example to see how it actually works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba011.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code14" >

<div class="container">
    <div class="row justify-content-around">
        <div class="col-4">Column one</div>
        <div class="col-4">Column two</div>
    </div>
    <div class="row justify-content-between">
        <div class="col-4">Column one</div>
        <div class="col-4">Column two</div>
    </div>
</div>

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
                <p>Please check out the tutoiral on <a href="../des-css/stylel_flexible-box-layouts.php">css3 flexbox</a> to learn more about flex items alignment.</p>
                <hr />
                <h2>Reordering of Grid Columns</h2>
                <p>You can even change the visual order of your grid columns without changing their order in actual markup. Use the class <code>.order-last</code> to order the column in last, whereas use the class <code>.order-first</code> to order the column at first place. Let's checkout an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb53d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code15" >

<div class="container">
    <div class="row">
        <div class="col order-last">First, but ordered at last</div>
        <div class="col">Second, but unordered</div>
        <div class="col order-first">Last, but ordered at first</div>
    </div>
</div>

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
                <p>You can also use the <code>.order-*</code> classes to order the grid columns depending on the order numbers. Grid column with higher order number comes after the grid column with lower order number or grid column with no order classes. It includes support for 1 through 12 across all five grid tiers.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba54d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code16" >

<div class="container">
    <div class="row">
        <div class="col order-4">First, but ordered at last</div>
        <div class="col">Second, but ordered at first</div>
        <div class="col order-1">Last, but ordered at second</div>
    </div>
</div>

</textarea>
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
				<hr />
				<h2>Offsetting the Grid Columns</h2>
				<p>You can also move grid columns to the right for alignment purpose using the column offset classes like <code>.offset-sm-*</code>, <code>.offset-md-*</code>, <code>.offset-lg-*</code>, and so on.</p>
				<p>These classes offset the columns by simply increasing its left margin by specified number of columns. For example, the class <code>.offset-md-4</code> on column <code>.col-md-8</code> moves it to the right over four columns from its original position. Try out the following example to see how it works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb064.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code17" >

<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-8"></div>
    </div>
    <div class="row">        
        <div class="col-sm-8 offset-sm-4"><!--Column with 4 columns offset--></div>
    </div>
</div>

</textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code17"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});
							</script>
                    </div>
                </div>
                <p>You can also offset columns using the margin utility classes. These classes are useful in the situations where the width of the offset is not fixed. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb36c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code18" >

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 ml-auto"><!--Offset this column to right--></div>
    </div>
    <div class="row">
        <div class="col-auto mr-auto"></div>
        <div class="col-auto"><!--Move this column away from previous column--></div>
    </div>
</div>

</textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code18"), {
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
                        <div class="note-box" style="background-color:#ff8585" >
                            <p><strong>Read carefully:</strong> You can use the class <code>.col-auto</code> to create columns that only take up as much space as needed, i.e. the column sizes itself based on the contents.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Creating Compact Columns</h2>
                <p>You can remove the default gutters between columns to create compact layouts by adding the class <code>.no-gutters</code> on <code>.row</code>. This class removes the negative margins from row and the horizontal padding from all immediate children columns. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7ec9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code19" >

<div class="row no-gutters">
    <div class="col-4">Column one</div>
    <div class="col-4">Column two</div>
    <div class="col-4">Column three</div>
</div>

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
				<hr />
                <h2>Breaking Columns to a New Line</h2>
                <p>You can also create equal-width columns that span multiple rows by inserting a <code>&lt;div&gt;</code> with <code>.w-100</code> class where you want the columns to break to a new line. Additionally, you can make these breaks responsive by combining the <code>.w-100</code> class with <a href="#">responsive display utility classes</a>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5ba6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code20" >

<div class="container">
    <!-- Break columns on all devices -->
    <div class="row">
        <div class="col">.col</div>
        <div class="col">.col</div>
        <div class="w-100"></div>
        <div class="col">.col</div>
        <div class="col">.col</div>
    </div>
    <!-- Break columns on all devices except extra large devices -->
    <div class="row">
        <div class="col">.col</div>
        <div class="col">.col</div>
        <div class="w-100 d-xl-none"></div>
        <div class="col">.col</div>
        <div class="col">.col</div>
    </div>
</div>

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
                <p>We hope you've understood the basics of new Bootstrap 4 grid system. In next few chapters you'll learn how to create basic web page layouts using this flexbox grid system.</p>
                <div class="bottom-link clearfix">
                    <a href="bt_get-started.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_fixed-layout.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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