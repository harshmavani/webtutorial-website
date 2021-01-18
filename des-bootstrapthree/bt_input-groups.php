<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Learn how to use Bootstrap input group component to create attractive forms controls by adding text, icons or buttons on either side of textual inputs." /> 
	  <meta name="keywords" content="Bootstrap,Bootstrap3,Input Group">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Use Bootstrap 3 Input Group Component - WebSchool Today</title>
	<?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Use Bootstrap 3 Input Group Component</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_bootstap3.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
     </div>
                <a href="bt_forms.php" class="previous-page" title="Go to Previous Page"></a>
                <a href="bt_buttons.php" class="next-page" title="Go to Next Page"></a>
                <h1>Bootstrap <span>Input Groups</span></h1>
                <p class="summary">In this tutorial you will learn how to use the Bootstrap input group component.</p>
                <h2>Extending Form Controls with Bootstrap</h2>
                <p>Bootstrap input group component is very flexible and powerful component for creating the interactive form controls, however it is limited to textual input only.</p>
				<p class="space">In the following sections you'll see how to extend the text based <code><a href="../info-html/ht_input-tag.php">&lt;input&gt;</a></code> by adding the text or buttons before, after, or on both sides of it to make your form more attractive.</p>
                <h2>Creating Prepended and Appended Inputs</h2>
                <p>You can add text and icons or buttons before or after any text-based input.</p>
                <p>To prepend or append text and icons to an input:</p>
                <ul>
                    <li>Wrap the text or icon within a <code><a href="../info-html/ht_span-tag.php">&lt;span&gt;</a></code> element having the class <code>.input-group-addon</code> and place it before or after the <code>&lt;input&gt;</code> element.</li>
                    <li>Wrap both the <code>&lt;span&gt;</code> and text-based <code>&lt;input&gt;</code> element within a <code><a href="../info-html/ht_div-tag.php">&lt;div&gt;</a></code> element and apply  the class <code>.input-group</code> on it.</li>
                </ul>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> Bootstrap's prepending or appending feature is only available to text-based inputs. It does not support <code>&lt;select&gt;</code> or <code>&lt;textarea&gt;</code> elements.</p>
                        </div>
                    </div>
                </div>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab66d2.php">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
						<textarea id="code1">

<form>
    <div class="row">
        <div class="col-xs-4">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" class="form-control" placeholder="Username">
            </div>
        </div>
        <div class="col-xs-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Amount">
                <span class="input-group-addon">.00</span>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="input-group">
                <span class="input-group-addon">$</span>
                <input type="text" class="form-control" placeholder="US Dollar">
                <span class="input-group-addon">.00</span>
            </div>
        </div>
    </div>
</form>

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
				<h2>Checkboxes and Radio Buttons Addons</h2>
				<p>Similarly, you can place checkbox or radio button within input group's addon instead of text.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabfb15.html">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
						<textarea id="code2">

<form>
    <div class="row">
        <div class="col-xs-6">
          <div class="input-group">
            <span class="input-group-addon">
              <input type="checkbox">
            </span>
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="col-xs-6">
          <div class="input-group">
            <span class="input-group-addon">
              <input type="radio">
            </span>
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
</form>

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
				<h2>Buttons Addons for Text Inputs</h2>
                <p>You can also prepend or append buttons instead of text. Wrap buttons within the <code>&lt;span&gt;</code> element and apply the class <code>.input-group-btn</code>, instead of <code>.input-group-addon</code>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabfafa.html">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
						<textarea id="code3">

<form>
    <div class="row">
        <div class="col-xs-5">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search&hellip;">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default">Go</button>
                </span>
            </div>
        </div>
        <div class="col-xs-7">
            <div class="input-group">
                <input type="text" class="form-control"  placeholder="Type something&hellip;">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default">Action</button>
                    <button type="button" class="btn btn-default">Options</button>
                </span>
            </div>
        </div>
    </div>
</form>

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
                <h2>Adding Button Dropdowns to Text Inputs</h2>
                <p>You can also create dropdown buttons if you want to do more than one action from a button.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelaba490.html">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
						<textarea id="code4">

<form>
    <div class="row">
        <div class="col-xs-6">
            <div class="input-group">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-xs-6">
            <div class="input-group">
                <input type="text" class="form-control">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</form>

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
                <h2>Adding Segmented Dropdown Button Groups</h2>
                <p>Similarly, you can define the segmented dropdown button group where dropdown button is placed besides the other buttons.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelabd41b.html">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
						<textarea id="code5">
<form>
    <div class="row">
        <div class="col-xs-6">
            <div class="input-group">
                <div class="input-group-btn">
                    <button tabindex="-1" class="btn btn-default" type="button">Action</button>
                    <button tabindex="-1" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu"> 
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-xs-6">
            <div class="input-group">
                <input type="text" class="form-control">
                <div class="input-group-btn">
                    <button tabindex="-1" class="btn btn-default" type="button">Action</button>
                    <button tabindex="-1" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</form>

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
				<h2>Height Sizing of Input Groups</h2>
				<p>You can also add the relative form sizing classes such as <code>.input-group-lg</code> or <code>.input-group-sm</code> to the <code>.input-group</code> itself to make it larger or smaller.</p>
				<p>The contents within <code>.input-group</code> will automatically resize &mdash; there is no need for repeating the form control size classes on each element.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a title="Try this code using online Editor" class="try-btn" target="_blank" href="../codelab3f1c.html">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
						<textarea id="code6">
		
		<form>
			<div class="row">
				<div class="col-xs-4">
					<div class="input-group input-group-lg">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="col-xs-4">
					<div class="input-group input-group-lg">
						<span class="input-group-addon">
							<input type="checkbox">
						</span>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="col-xs-4">
					<div class="input-group input-group-lg">
						<div class="input-group-btn">
							<button tabindex="-1" class="btn btn-default" type="button">Action</button>
							<button tabindex="-1" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul class="dropdown-menu"> 
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div>
						<input type="text" class="form-control">
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-xs-4">
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="col-xs-4">
					<div class="input-group">
						<span class="input-group-addon">
							<input type="checkbox">
						</span>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="col-xs-4">
					<div class="input-group">
						<div class="input-group-btn">
							<button tabindex="-1" class="btn btn-default" type="button">Action</button>
							<button tabindex="-1" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul class="dropdown-menu"> 
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div>
						<input type="text" class="form-control">
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-xs-4">
					<div class="input-group input-group-sm">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="col-xs-4">
					<div class="input-group input-group-sm">
						<span class="input-group-addon">
							<input type="checkbox">
						</span>
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="col-xs-4">
					<div class="input-group input-group-sm">
						<div class="input-group-btn">
							<button tabindex="-1" class="btn btn-default" type="button">Action</button>
							<button tabindex="-1" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul class="dropdown-menu"> 
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div>
						<input type="text" class="form-control">
					</div>
				</div>
			</div>
		</form>
		
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
                    <a href="bt_forms.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_buttons.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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