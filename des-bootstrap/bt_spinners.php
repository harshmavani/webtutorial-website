<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="How to Create Loading Icon in Bootstrap 4">
	  <meta name="keywords" content="Bootstrap,Bootstrap4,Loading Icon,Create Loading Icon in Bootstrap 4,preloader">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create Loading Icon in Bootstrap 4 - WebSchool Today</title>
    <?php include "../links.php" ?>

<style>
@-webkit-keyframes spinner-border {
to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}
}
@keyframes spinner-border {
to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}
}
.spinner-border{display:inline-block;width:2rem;height:2rem;vertical-align:text-bottom;border:.25em solid currentColor;border-right-color:transparent;border-radius:50%;-webkit-animation:spinner-border .75s linear infinite;animation:spinner-border .75s linear infinite}
.spinner-border-sm{width:1rem;height:1rem;border-width:.2em}
@-webkit-keyframes spinner-grow {
0%{-webkit-transform:scale(0);transform:scale(0)}
50%{opacity:1}
}
@keyframes spinner-grow {
0%{-webkit-transform:scale(0);transform:scale(0)}
50%{opacity:1}
}
.spinner-grow{display:inline-block;width:2rem;height:2rem;vertical-align:text-bottom;background-color:currentColor;border-radius:50%;opacity:0;-webkit-animation:spinner-grow .75s linear infinite;animation:spinner-grow .75s linear infinite}
.spinner-grow-sm{width:1rem;height:1rem}
.text-primary{color:#007bff!important}
.text-secondary{color:#6c757d!important}
.text-success{color:#28a745!important}
.text-info{color:#17a2b8!important}
.text-warning{color:#ffc107!important}
.text-danger{color:#dc3545!important}
.text-light{color:#f8f9fa!important}
.text-dark{color:#343a40!important}
.btn{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}
.btn-primary{color:#fff;background-color:#007bff;border-color:#007bff}
.btn.disabled,.btn:disabled{opacity:.65}
a.btn.disabled,fieldset:disabled a.btn{pointer-events:none}
.preview-box{padding:24px;text-align:left}
.preview-box a,.preview-box a:hover{color:#212529;text-decoration:none}
</style>
 </head>
<body>
<div>
<div class="tital">How to Create Loading Icon in Bootstrap 4</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
              </div>
              <a href="bt_jumbotron.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>
                <a href="bt_progress-bars.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Spinners</span></h1>
                <p class="summary">In this tutorial you will learn how to use the Bootstrap spinner component.</p>
                <h2>Creating the Spinners with Bootstrap</h2>
                <p>Bootstrap 4 introduces the new spinner component that you can use to show the loading state in your projects. Spinners are typically loading icons and they're built only with HTML and CSS. However, you need some custom JavaScript to show or hide them on a web page.</p>
                <p>Moreover, you can easily customize the appearance, alignment, and sizing of the spinners with the pre-defined utility classes. Now, let's see how to create them.</p>
                <p>To create a spinner or loading indicator, you can use the <code>.spinner-border</code> class:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabfd10.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<div class="spinner-border">
    <span class="sr-only">Loading...</span>
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
                <p>The special <code>.sr-only</code> class hides an element to all devices except screen readers.</p>
                <hr />
                <h2>Creating Colored Spinner</h2>
                <p>You can use the <a href="bt_helper-classes.php#color-classes">text color utility classes</a> to customize the color of spinners.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab12e8.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code2">

<div class="spinner-border text-primary">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-secondary">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-success">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-danger">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-warning">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-info">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-dark">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-border text-light">
    <span class="sr-only">Loading...</span>
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
                <h2>Creating Growing Spinners</h2>
                <p>You can also create growing spinners that repeatedly grow and fade out, like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9dd3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>

                        <textarea id="code3">
<div class="spinner-grow">
    <span class="sr-only">Loading...</span>
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
                <p>Similarly, like the border spinners you can also customize the colors of growing spinners using the text&nbsp;color utility classes, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab51ee.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code4">
		
        <div class="spinner-grow text-primary">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-success">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-danger">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-warning">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-info">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-light">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark">
            <span class="sr-only">Loading...</span>
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
                <h2>Sizing of Spinners</h2>
                <p>You can use the class <code>.spinner-border-sm</code> and <code>.spinner-grow-sm</code> to make a smaller spinner that can quickly be used within other components such as buttons.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab382f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

<div class="spinner-border spinner-border-sm">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow spinner-grow-sm">
    <span class="sr-only">Loading...</span>
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
                <p>Alternatively, you can use the custom CSS or inline styles to change the size as needed.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1202.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

<div class="spinner-border" style="width: 40px; height: 40px;">
    <span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow" style="width: 40px; height: 40px;">
    <span class="sr-only">Loading...</span>
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
                <h2>Using Spinners within Buttons</h2>
                <p>You can also use spinners within buttons to indicate an action is currently processing or taking place.</p>
                <p>Here's an example where we've placed the spinners inside the disabled buttons.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc137.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

<!-- Border spinners inside buttons -->
<button class="btn btn-primary" type="button" disabled>
    <span class="spinner-border spinner-border-sm"></span>
    <span class="sr-only">Loading...</span>
</button>
<button class="btn btn-primary" type="button" disabled>
    <span class="spinner-border spinner-border-sm"></span>
    Loading...
</button>	
<!-- Growing spinners inside buttons -->
<button class="btn btn-primary" type="button" disabled>
    <span class="spinner-grow spinner-grow-sm"></span>
    <span class="sr-only">Loading...</span>
</button>
<button class="btn btn-primary" type="button" disabled>
    <span class="spinner-grow spinner-grow-sm"></span>
    Loading...
</button>
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

                <hr />
                <h2>Alignment of Spinners</h2>
                <p>You can easily align the spinners left, right or center using the flexbox, float, or text alignment utility classes. Try out the following example to see how it actually works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabde8e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

<!-- Center alignment using flex utilities -->
<div class="d-flex justify-content-center">
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Center alignment using text alignment utilities -->
<div class="text-center">
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Right alignment using float utilities -->
<div class="clearfix">
    <div class="spinner-border float-right" role="status">
        <span class="sr-only">Loading...</span>
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
                <div class="bottom-link clearfix">
                    <a href="bt_progress-bars.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_jumbotron.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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