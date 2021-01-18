	<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta name="description" content="Learn how to use Bootstrap grid system which is the fastest and convenient way to create responsive website layout or design for desktops, tablets, smart phones, etc." />
	  <meta name="keywords" content="Bootstrap,Bootstrap3,Grid System">
	  <meta name="author" content="webschooltoday.com">
    <title>Understanding the Bootstrap 3 Grid System - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">Bootstrap 4 Warning, Info, Success and Error Alerts</div>

<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
            </div>
            <a href="bt_fixed-layout.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_get-started.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Grid System</span></h1>
                <p class="summary">The Bootstrap grid system is the fastest and easy way to create a layout.</p>
                <h2>What is Bootstrap Grid System</h2>
                <p>Bootstrap grid system provides the quick and easy way to create responsive website layouts. As opposed to the previous Bootstrap 2.x grid system which is fixed by default, the new version, i.e. Bootstrap 3 introduces the responsive mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases.</p>
                <p class="space">Bootstrap 3 includes predefined grid classes for quickly making grid layouts for different types of devices like cell phones, tablets, laptops and desktops, etc. For example, you can use the <code>.col-xs-*</code> class to create grid columns for extra small devices like cell phones, similarly the <code>.col-sm-*</code> class for small screen devices like tablets, the <code>.col-md-*</code> class for medium size devices like desktops and the <code>.col-lg-*</code> for large desktop screens. The following table summarizes some of the key features of the new grid system</p>
                <div class="shadow break" id="grid-features">
                    <table class="data">
                        <tr>
                            <th>Features <br /><span class="device">Bootstrap&nbsp;3&nbsp;Grid&nbsp;System</span></th>
                            <th>Extra&nbsp;small&nbsp;devices <br /><span class="device">Phones&nbsp;(&lt;768px)</span></th>
                            <th>Small&nbsp;devices <br /><span class="device">Tablets&nbsp;(&ge;768px)</span></th>
                            <th>Medium&nbsp;devices <br /><span class="device">Desktops&nbsp;(&ge;992px)</span></th>
                            <th>Large&nbsp;devices <br /><span class="device">Desktops&nbsp;(&ge;1200px)</span></th>
                        </tr>
                        <tr>
                            <td><pre>Max&nbsp;container&nbsp;width</pre></td>
                            <td>None (auto)</td>
                            <td>750px</td>
                            <td>970px</td>
                            <td>1170px</td>
                        </tr>
						<tr>
							<td>Grid behavior</td>
							<td>Horizontal at all times</td>
							<td colspan="3">Collapsed to start, horizontal above breakpoints</td>
						</tr>
                        <tr>
                            <td>Class prefix</td>
                            <td><code class="mark">.col-xs-</code></td>
                            <td><code class="mark">.col-sm-</code></td>
                            <td><code class="mark">.col-md-</code></td>
                            <td><code class="mark">.col-lg-</code></td>
                        </tr>
                        <tr>
                            <td>Max column width</td>
                            <td>Auto</td>
                            <td>~62px</td>
                            <td>~81px</td>
                            <td>~97px</td>
                        </tr>
                        <tr>
                            <td>Gutter width</td>
                            <td colspan="4">15px on each side of a column (i.e. 30px)</td>
                        </tr>
                    </table>
                </div>
                <p>Above table demonstrates one important thing, applying any <code>.col-sm-*</code> class to an element will not only affect its styling on small devices, but also on medium and large devices having a screen size greater than or equal to 768px&thinsp;(i.e.&thinsp;&ge;768px) if <code>.col-md-*</code> and <code>.col-lg-*</code> class is not present. Similarly the <code>.col-md-*</code> class will not only affect the styling of elements on medium devices, but also on large devices if a <code>.col-lg-*</code> class is not present.</p>
				<p class="space">Now the question arises how to create rows and columns using this 12 column responsive grid system. The answer is pretty simple, at first create a container that acts as a rg3-w for your rows and columns using the <code>.container</code> class, after that create rows inside the container using the <code>.row</code> class, and to create columns inside any row you can use the class <code>.col-xs-*</code>, <code>.col-sm-*</code>, <code>.col-md-*</code> and <code>.col-lg-*</code>. The columns are actual content area where we will place our contents. Let's put all these things into real action.</p>
				<h2>Creating Two Column Layouts</h2>
				<p>The following example will show you how to create two column layouts for small, medium and large devices like tables, laptops and desktops etc. However, on mobile phones, the columns will automatically become horizontal as default.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1882.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        
	<textarea id="code1">

<div class="container">
    <!--Row with two equal columns-->
    <div class="row">
        <div class="col-sm-6"><!--Column left--></div>
        <div class="col-sm-6"><!--Column right--></div>
    </div>
    
    <!--Row with two columns divided in 1:2 ratio-->
    <div class="row">
        <div class="col-sm-4"><!--Column left--></div>
        <div class="col-sm-8"><!--Column right--></div>
    </div>
    
    <!--Row with two columns divided in 1:3 ratio-->
    <div class="row">
        <div class="col-sm-3"><!--Column left--></div>
        <div class="col-sm-9"><!--Column right--></div>
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
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box" style="background-color:#fad28c"
>
							<p><strong>Important:</strong> Open the output of all grid examples inside the <a href="../codelab.html" target="_blank">CodeLab</a> editor in a new blank tab  and resize the browser window to understand how the Bootstrap responsive grid system works.</p>
						</div>
					</div>
				</div>
				<p class="space">Since Bootstrap grid system is based on 12 columns, so to keep the columns in a one line (i.e. side by side), the sum of the grid column numbers in each row should be equal to 12. If you see the above example carefully you will find the numbers of grid columns (i.e. <code>col-sm-*</code>) add up to twelve (6+6, 4+8 and 3+9) for every row.</p>
				<h2>Creating Three Column Layouts</h2>
				<p>Similarly, you can create other layouts based on the above principle. The following example will typically create three column layouts for laptops and desktops screens. It also works in tablets in landscape mode if screen resolution is more than or equal to 992 pixels (e.g. Apple iPad). However, in portrait mode it will be horizontal as usual.</p>
                <div class="my_codeb-rg3-w space">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab82de.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code2">

<div class="container">
    <!--Row with three equal columns-->
    <div class="row">
        <div class="col-md-4"><!--Column left--></div>
        <div class="col-md-4"><!--Column middle--></div>
        <div class="col-md-4"><!--Column right--></div>
    </div>
    
    <!--Row with three columns divided in 1:4:1 ratio-->
    <div class="row">
        <div class="col-md-2"><!--Column left--></div>
        <div class="col-md-8"><!--Column middle--></div>
        <div class="col-md-2"><!--Column right--></div>
    </div>
    
    <!--Row with three columns divided unevenly-->
    <div class="row">
        <div class="col-md-3"><!--Column left--></div>
        <div class="col-md-7"><!--Column middle--></div>
        <div class="col-md-2"><!--Column right--></div>
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
						<div class="note-box" style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> If more than 12 grid columns are placed within a single row, then each group of extra columns, as a whole, will wrap onto a new line.</p>
						</div>
					</div>
				</div>
				<h2>Bootstrap Layouts with Column Wrapping Feature</h2>
				<p>Now we are going to create more flexible layouts that changes the column orientation based on the viewport size. The following example will create a three column layout on medium devices like laptops and desktops, as well as on tablets (e.g. Apple iPad) in landscape mode, but on small devices like tablets in portrait mode, it will change into a two column layout where the third column moves at the bottom of the first two columns.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab476c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">
		
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-2"><!--Column one--></div>
                <div class="col-sm-9 col-md-8"><!--Column two--></div>
                <div class="col-sm-12 col-md-2"><!--Column three--></div>
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
				<p>As you can see in the example above the sum of small grid column numbers (i.e. <code>col-sm-*</code>) is <code>3&thinsp;+&thinsp;9&thinsp;+&thinsp;12&thinsp;=&thinsp;24&thinsp;&gt;&thinsp;12</code>, so the third <code><a href="../info-html/ht_div-tag.php">&lt;div&gt;</a></code> element with the class <code>.col-sm-12</code> that is adding the extra columns beyond the maximum 12 columns in a <code>.row</code>, gets wrapped onto a new line as one contiguous unit on small devices having the viewport width less than the 992 pixels.</p>
				<p>Similarly, you can create even more adaptable layouts for your websites and applications using the Bootstrap's grid column wrapping feature. In the next section, we'll discuss the other aspect of this feature. Here're some ready to use <a href="bt_grid-examples.php" target="_blank">Bootstrap grid examples</a>.</p>
				<hr />
                <h2>Creating Multi-Column Layouts with Bootstrap</h2>
                <p>With the new Bootstrap 3 mobile first grid system you can easily control how your website layout will render on different types of devices that have different screen sizes like cell phones, tablets, desktops, etc. Let's consider the following illustration.</p>
                <div class="grid-system-illustration"><img src="../lib/images/grid-system-illustration.jpg" width="530" height="148" alt="Bootstrap Grid System Illustration" /></div>
                <p>In the above illustration there are total 12 content boxes in all devices, but its placement varies according to the device screen size, like in mobile device the layout is rendered as one column grid layout which has 1 column and 12 rows placed above one another, whereas in tablet it is rendered as two column grid layout which has 2 columns and 6 rows. Further, in medium screen size devices like laptops and desktops it is rendered as three column grid layout which as 3 columns and 4 rows and finally in large screen devices like large desktops it is rendered as four column grid layout which has 4 columns and 3 rows.</p>
                <p>Now the question is how we can create such responsive layouts using this Bootstrap new mobile first grid system. Let's start with the medium device that can be a laptop or normal desktop. Since our medium device layout has 3 columns and 4 rows i.e. 3x4 grid layout, so the HTML code for making such grid structure would be something like this.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab11a1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code4">

<div class="container">
    <div class="row">
        <div class="col-md-4"><p>Box 1</p></div>
        <div class="col-md-4"><p>Box 2</p></div>
        <div class="col-md-4"><p>Box 3</p></div>
        <div class="col-md-4"><p>Box 4</p></div>
        <div class="col-md-4"><p>Box 5</p></div>
        <div class="col-md-4"><p>Box 6</p></div>
        <div class="col-md-4"><p>Box 7</p></div>
        <div class="col-md-4"><p>Box 8</p></div>
        <div class="col-md-4"><p>Box 9</p></div>
        <div class="col-md-4"><p>Box 10</p></div>
        <div class="col-md-4"><p>Box 11</p></div>
        <div class="col-md-4"><p>Box 12</p></div>
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
                <p>If you see the output of the above example in a laptop or desktop having screen or viewport width greater than or equal to 992px and less than 1200px you will find it has 4 rows where each row has 3 equal columns resulting in 3x4 grid layout.</p>
                <p>But just wait, the above example has a major alignment issue. If height of any column is taller than the other it doesn't clear properly and break the layout. To fix this, use the combination of a <code>.clearfix</code> class and the responsive utility classes.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1683-2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code5">

<div class="container">
    <div class="row">
        <div class="col-md-4"><p>Box 1</p></div>
        <div class="col-md-4"><p>Box 2</p></div>
        <div class="col-md-4"><p>Box 3</p></div>
        <div class="clearfix visible-md-block"></div>
        <div class="col-md-4"><p>Box 4</p></div>
        <div class="col-md-4"><p>Box 5</p></div>
        <div class="col-md-4"><p>Box 6</p></div>
        <div class="clearfix visible-md-block"></div>
        <div class="col-md-4"><p>Box 7</p></div>
        <div class="col-md-4"><p>Box 8</p></div>
        <div class="col-md-4"><p>Box 9</p></div>
        <div class="clearfix visible-md-block"></div>
        <div class="col-md-4"><p>Box 10</p></div>
        <div class="col-md-4"><p>Box 11</p></div>
        <div class="col-md-4"><p>Box 12</p></div>
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
                <p>Since the default grid system has 12 columns and in our layout sum of the every three column number, i.e. <code>col-md-*</code> is equal to 12 that's why we cleared columns after every third occurrence. In any other scenario where columns numbers are different for every column you should use <code>.clearfix</code> after the column that makes the complete 12 column grid.</p>
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box" style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The <a href="#responsive-class">responsive utility class</a> <code>.visible-md-block</code> makes the <code>.clearfix</code> class effective only on medium size devices and it is hidden on other devices.</p>
						</div>
					</div>
				</div>
                <p>Now it's time to customize our layout for other devices. First customize it for tablet. Since inside the tablet our layout rendered as 2x6 grids (i.e. 2 columns and 6 rows). So, go ahead and add the class <code>.col-sm-6</code> on every column.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab806d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                       
	<textarea id="code6">

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4"><p>Box 1</p></div>
        <div class="col-sm-6 col-md-4"><p>Box 2</p></div>
        <div class="col-sm-6 col-md-4"><p>Box 3</p></div>
        <div class="clearfix visible-md-block"></div>
        <div class="col-sm-6 col-md-4"><p>Box 4</p></div>
        <div class="col-sm-6 col-md-4"><p>Box 5</p></div>
        <div class="col-sm-6 col-md-4"><p>Box 6</p></div>
        <div class="clearfix visible-md-block"></div>
        <div class="col-sm-6 col-md-4"><p>Box 7</p></div>
        <div class="col-sm-6 col-md-4"><p>Box 8</p></div>
        <div class="col-sm-6 col-md-4"><p>Box 9</p></div>
        <div class="clearfix visible-md-block"></div>
        <div class="col-sm-6 col-md-4"><p>Box 10</p></div>
        <div class="col-sm-6 col-md-4"><p>Box 11</p></div>
        <div class="col-sm-6 col-md-4"><p>Box 12</p></div>
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
                <p>Now, since the sum of every two column number, i.e. <code>col-sm-*</code> is equal to 12, so clear floats after every second occurrence of columns.</p>
                <p>After clearing floats for small devices our final code would be:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab83e9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code7">

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4"><p>Box 1</p></div>
        <div class="col-sm-6 col-md-4"><p>Box 2</p></div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-sm-6 col-md-4"><p>Box 3</p></div>
        <div class="clearfix visible-md-block"></div>
        <div class="col-sm-6 col-md-4"><p>Box 4</p></div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-sm-6 col-md-4"><p>Box 5</p></div>
        <div class="col-sm-6 col-md-4"><p>Box 6</p></div>
        <div class="clearfix visible-sm-block"></div>
        <div class="clearfix visible-md-block"></div>
        <div class="col-sm-6 col-md-4"><p>Box 7</p></div>
        <div class="col-sm-6 col-md-4"><p>Box 8</p></div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-sm-6 col-md-4"><p>Box 9</p></div>
        <div class="clearfix visible-md-block"></div>
        <div class="col-sm-6 col-md-4"><p>Box 10</p></div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-sm-6 col-md-4"><p>Box 11</p></div>
        <div class="col-sm-6 col-md-4"><p>Box 12</p></div>
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
						<div class="tip-box" style="background-color:#fad28c"
>
							<p><strong>Important:</strong> For convenience choose your primary target device and create layout for that device first after that add classes to make it responsive for other devices.</p>
						</div>
					</div>
				</div>
                <p>Similarly, you can customize the layout for larger devices like a large desktop screen. Here's the final code after combining the whole process.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7a8a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code8">

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3"><p>Box 1</p></div>
        <div class="col-sm-6 col-md-4 col-lg-3"><p>Box 2</p></div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-sm-6 col-md-4 col-lg-3"><p>Box 3</p></div>
        <div class="clearfix visible-md-block"></div>
        <div class="col-sm-6 col-md-4 col-lg-3"><p>Box 4</p></div>
        <div class="clearfix visible-sm-block"></div>
        <div class="clearfix visible-lg-block"></div>
        <div class="col-sm-6 col-md-4 col-lg-3"><p>Box 5</p></div>
        <div class="col-sm-6 col-md-4 col-lg-3"><p>Box 6</p></div>
        <div class="clearfix visible-sm-block"></div>
        <div class="clearfix visible-md-block"></div>
        <div class="col-sm-6 col-md-4 col-lg-3"><p>Box 7</p></div>
        <div class="col-sm-6 col-md-4 col-lg-3"><p>Box 8</p></div>
        <div class="clearfix visible-sm-block"></div>
        <div class="clearfix visible-lg-block"></div>
        <div class="col-sm-6 col-md-4 col-lg-3"><p>Box 9</p></div>
        <div class="clearfix visible-md-block"></div>
        <div class="col-sm-6 col-md-4 col-lg-3"><p>Box 10</p></div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-sm-6 col-md-4 col-lg-3"><p>Box 11</p></div>
        <div class="col-sm-6 col-md-4 col-lg-3"><p>Box 12</p></div>
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
						<div class="tip-box" style="background-color:#fad28c"
>
							<p><strong>Important:</strong> According to the above illustration there is no need to customize the layout for extra small devices like mobile phones; since columns on extra small devices are always horizontal and rendered as one column grid layout by default.</p>
						</div>
					</div>
				</div>
                <hr />
				<h2>Offsetting the Grid Columns</h2>
				<p>You can also move grid columns to the right for alignment purpose using the column offset classes like <code>.col-md-offset-*</code>, <code>.col-sm-offset-*</code>, etc.</p>
				<p>These classes offset the columns by simply increasing its left margin by specified number of columns. For example, the class <code>.col-sm-offset-4</code> on the column <code>.col-sm-8</code> moves it to the right over four columns from its original position.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf377.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-8"></div>
    </div>
    <div class="row">        
        <div class="col-sm-8 col-sm-offset-4"><!--Column with 4 columns offset--></div>
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
				<h2>Nesting of Grid Columns</h2>
				<p>The Bootstrap grid columns are nestable, that means you can put rows and columns inside an existing column. However, the formula for placing the columns will be the same, i.e. the sum of column numbers should be equal to 12 or less within a single row.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7b29.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

<div class="container">
    <div class="row">
        <div class="col-xs-8"><!--Column left--></div>
        <div class="col-xs-4">
            <!--Column right with nested rows and columns-->
            <div class="row">
                <div class="col-xs-12"></div>
            </div>
            <div class="row">
                <div class="col-xs-12"></div>
            </div>
        </div>
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
                <h2 id="responsive-class">Bootstrap Responsive Utilities Classes</h2>
				<p>You can use the following responsive classes to enable the visibility of elements on certain devices that screen sizes falls with the specific range.</p>
				<p>As of v3.2.0, the <code>.visible-*-*</code> classes for each breakpoint come in three variations, one for each CSS <code><a href="../info-css/style_display-property.php">display</a></code> property value: <code>inline</code>, <code>block</code> and <code>inline-block</code>.</p>
				<div class="shadow">
					<table class="data">
						<thead>
							<tr>
								<th style="width:140px;">Class</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>.visible-xs-*</code></td>
								<td>Makes the element visible only on extra small devices having screen width less than 768px. Hidden on others.</td>
							</tr>
							<tr>
								<td><code>.visible-sm-*</code></td>
								<td>Makes the element visible only on small devices having screen width greater than or equal to 768px (i.e. &ge;768px) but less than 992px. Hidden on others.</td>
							</tr>
							<tr>
								<td><code>.visible-md-*</code></td>
								<td>Makes the element visible only on medium devices having screen width greater than or equal to 992px (i.e. &ge;992px) but less than 1200px. Hidden on others.</td>
							</tr>
							<tr>
								<td><code>.visible-lg-*</code></td>
								<td>Makes the element visible only on large devices having screen width greater than or equal to 1200px (i.e. &ge;1200px). Hidden on others.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box" style="background-color:#fad28c"
>
							<p><strong>Important:</strong> You can also mix these classes to make the elements visible on multiple devices. For example, you can apply the class <code>.visible-xs-*</code> and <code>.visible-md-*</code> on any element to make it visible on extra small and medium devices.</p>
						</div>
					</div>
				</div>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabb2b9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11">

<p class="visible-xs-block">This paragraph is visible only on extra small devices.</p>
<p class="visible-sm-block">This paragraph is visible only on small devices.</p>
<p class="visible-md-block">This paragraph is visible only on medium devices.</p>
<p class="visible-lg-block">This paragraph is visible only on large devices.</p>

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
				<p>Similarly you can use these hidden utility classes to hide the elements on certain devices.</p>
				<div class="shadow">
					<table class="data">
						<thead>
							<tr>
								<th style="width:130px;">Class</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>.hidden-xs</code></td>
								<td>Hide the elements only on extra small devices having screen width less than 768px. Visible on others.</td>
							</tr>
							<tr>
								<td><code>.hidden-sm</code></td>
								<td>Hide the elements only on small devices having screen width greater than or equal to 768px (i.e. &ge;768px) but less than 992px. Visible on others.</td>
							</tr>
							<tr>
								<td><code>.hidden-md</code></td>
								<td>Hide the elements only on medium devices having screen width greater than or equal to 992px (i.e. &ge;992px) but less than 1200px. Visible on others.</td>
							</tr>
							<tr>
								<td><code>.hidden-lg</code></td>
								<td>Hide the elements only on large devices having screen width greater than or equal to 1200px (i.e. &ge;1200px). Visible on others.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box" style="background-color:#fad28c"
>
							<p><strong>Important:</strong> You can also mix these classes to make the elements hidden on multiple devices. For example you can apply the class <code>.hidden-xs</code> and <code>.hidden-md</code> on any element to make it hidden on extra small and medium devices.</p>
						</div>
					</div>
				</div>
				<div class="example">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab7b8b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code12">

<p class="hidden-xs">This paragraph is hidden only on extra small devices.</p>
<p class="hidden-sm">This paragraph is hidden only on small devices.</p>
<p class="hidden-md">This paragraph is hidden only on medium devices.</p>
<p class="hidden-lg">This paragraph is hidden only on large devices.</p>

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
				<p>Similar to the regular responsive classes, you can use the following utility classes to show or hide certain elements for printing purpose or devices.</p>
				<div class="shadow">
					<table class="data">
						<thead>
							<tr>
								<th style="width:262px;">Class</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>.visible-print-block</code></td>
								<td>Hide block elements for browser rendering while visible for print.</td>
							</tr>
							<tr>
								<td><code>.visible-print-inline</code></td>
								<td>Hide inline elements for browser rendering while visible for print.</td>
							</tr>
							<tr>
								<td><code>.visible-print-inline-block</code></td>
								<td>Hide inline-block elements for browser rendering while visible for print.</td>
							</tr>
							<tr>
								<td><code>.hidden-print</code></td>
								<td>Hide elements for printing while visible on browser.</td>
							</tr>
						</tbody>
					</table>
				</div>
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