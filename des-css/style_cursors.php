<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Custom Cursor Using CSS">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create Custom Cursor Using CSS - WebSchool Today</title>
    <meta name="description" content="The cursor CSS property can be used to control how cursor will look like when user places the mouse pointer over a certain area on the web page." />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Create Custom Cursor Using CSS</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_overflow.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="style_outline.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Cursors</span></h1>
                <p class="summary">CSS cursor property used to define cursor type (i.e. mouse pointer) when the mouse moves over a certain area or, over a link on the webpage.</p>
                <h2>Changing the Look of Cursor</h2>
                <p>The browsers typically display the mouse pointer over any blank part of a web page, the gloved hand over any linked or clickable item and the edit cursor over any text or text field. With CSS you can redefine those properties to display a variety of different cursors.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9e5d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

h1 {
    cursor: move;
}
p {
    cursor: text;
}

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
                <p class="space">The table below demonstrates the different cursors that most browsers will accept. Place your mouse pointer over the "TEST" link in the output column to reveal that cursor.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th><pre>Look   </pre></th>
                            <th>Values</th>
                            <th>Example</th>
                            <th>Output</th>
                        </tr>
                        <tr>
                            <td><img src="../assets/images/default.gif" alt="Default Cursor" /></td>
                            <td><code>default</code></td>
                            <td><code>a:hover{cursor:default;}</code></td>
                            <td><a href="javascript:void(0);" style="cursor:default;">TEST</a></td>
                        </tr>
                        <tr>
                            <td><img src="../assets/images/pointer.gif" alt="Pointer Cursor" /></td>
                            <td><code>pointer</code></td>
                            <td><code>a:hover{cursor:pointer;}</code></td>
                            <td><a href="javascript:void(0);" style="cursor:pointer;">TEST</a></td>
                        </tr>
                        <tr>
                            <td><img src="../assets/images/text.gif" alt="Text Cursor" /></td>
                            <td><code>text</code></td>
                            <td><code>a:hover{cursor:text;}</code></td>
                            <td><a href="javascript:void(0);" style="cursor:text;">TEST</a></td>
                        </tr>
                        <tr>
                            <td><img src="../assets/images/wait.gif" alt="Wait Cursor" /></td>
                            <td><code>wait</code></td>
                            <td><code>a:hover{cursor:wait;}</code></td>
                            <td><a href="javascript:void(0);" style="cursor:wait;">TEST</a></td>
                        </tr>
                        <tr>
                            <td><img src="../assets/images/help.gif" alt="Help Cursor" /></td>
                            <td><code>help</code></td>
                            <td><code>a:hover{cursor:help;}</code></td>
                            <td><a href="javascript:void(0);" style="cursor:help;">TEST</a></td>
                        </tr>
                        <tr>
                            <td><img src="../assets/images/progress.gif" alt="Progress Cursor" /></td>
                            <td><code>progress</code></td>
                            <td><code>a:hover{cursor:progress;}</code></td>
                            <td><a href="javascript:void(0);" style="cursor:progress;">TEST</a></td>
                        </tr>
                        <tr>
                            <td><img src="../assets/images/crosshair.gif" alt="Crosshair Cursor" /></td>
                            <td><code>crosshair</code></td>
                            <td><code>a:hover{cursor:crosshair;}</code></td>
                            <td><a href="javascript:void(0);" style="cursor:crosshair;">TEST</a></td>
                        </tr>
                        <tr>
                            <td><img src="../assets/images/move.gif" alt="Move Cursor" /></td>
                            <td><code>move</code></td>
                            <td><code>a:hover{cursor:move;}</code></td>
                            <td><a href="javascript:void(0);" style="cursor:move;">TEST</a></td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle;"><img src="../assets/images/custom.gif" alt="Custom Cursor" style="margin-left:10px;" /></td>
                            <td><code>url()</code></td>
                            <td><code>a:hover{cursor:url("custom.cur"), default;}</code></td>
                            <td><a href="javascript:void(0);" style="cursor:url('../lib/images/cursors/custom.gif'), url('../lib/images/cursors/custom.php'), default;">TEST</a></td>
                        </tr>
                    </table>
                </div>
                <p>Check out <a href="../info-css/style_cursor-property.php">more cursors &raquo;</a></p>
                <hr />
                <h2 class="down">Creating a Customized Cursor</h2>
                <p>It is also possible to have completely customized cursors.</p>
                <p>The cursor property handles a comma-separated list of user-defined cursors values followed by the <em>generic cursor</em>. If the first cursor is specified incorrectly or can't be found, the next cursor in the comma-separated list will be used, and so on until a usable cursor is found.</p>
                <p>If none of the user-defined cursors is valid or supported by the browser, the generic cursor at the end of the list will be used instead.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> The standard format that can be used for cursors is the <code>.cur</code> format. However, you can convert images such as <code>.jpg</code> and <code>.gif</code> into <code>.cur</code> format using the image converter software freely available online.</p>
                        </div>
                    </div>
                </div>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab699a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

a {
    cursor: url("custom.gif"), url("custom.cur"), default;
}

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
                <p>In the above example <code>custom.gif</code> and <code>custom.cur</code> is the custom cursor file, uploaded to your server space, and <code>default</code> is the generic cursor that will be used if the custom cursor is missing, or isn't supported by the viewer's browser.</p>  
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                            <p><strong>Warning:</strong> If you are declaring a custom cursor, you must define a <em>generic cursor</em> at the end of the list, otherwise the custom cursor will not render correctly.</p>
                        </div>
                    </div>
                </div>
                <p>Here is a live demonstration of a custom cursor.</p>
                <div class="sky-box"><a href="javascript:void(0);" style="cursor:url('../lib/images/cursors/custom.gif'), url('../lib/images/cursors/custom.php'), default;">Hover your mouse pointer over this link to reveal the custom cursor</a></div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> IE9 and earlier versions only support URL values of the type <code>.cur</code> for static cursor, and <code>.ani</code> for animated cursor. However, browsers such as Firefox, Chrome and Safari have support for <code>.cur</code>, <code>.png</code>, <code>.gif</code> and <code>.jpg</code> but not <code>.ani</code>.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="style_outline.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_overflow.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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