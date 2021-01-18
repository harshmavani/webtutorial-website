<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Media Types and Queries,media,responsive">
	  <meta name="author" content="webschooltoday.com">
    <title>Understanding CSS Media Types and Queries - WebSchool Today</title>
    <meta name="description" content="Understanding CSS Media Types and Queries" />
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Understanding CSS Media Types and Queries</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_sprites.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="style_pseudo-elements.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>CSS <span>Media Types</span></h1>
                <p class="summary">CSS media types allow you to format your documents to be presented correctly on various types of media such as screen, print, an aural browser, etc.</p>
                <h2>Introduction to Media Types</h2>
                <p>One of the most important features of style sheets is that, you can specify separate style sheets for different media types. This is one of the best ways to build printer friendly Web pages &mdash; Just assign a different style sheet for the "print" media type.</p>
                <p>Some CSS properties are only designed for certain media. For example, the <a href="../info-css/style_page-break-after-property.php"><code>page-break-after</code></a> property only applies to paged media. However there are several properties that may be shared by different media types, but may require different values for that property. The <a href="../info-css/style_font-size-property.php"><code>font-size</code></a> property for example can be used for both screen and print media, but possibly with different values.</p>
                <p class="space">A document usually needs a larger font on a computer screen as compared to the paper for better readability, also sans-serif fonts are considered easier to read on the screen, while serif fonts are popular for printing. Therefore it is necessary to specify that a style sheet, or a set of style rules, applies to certain media types.</p>
                <h2>Creating Media Dependent Style Sheets</h2>
                <p class="space">Three methods are commonly used to specify the media dependencies for style sheets:</p>
                <h2>Method 1: Using the <code>@media</code> At-rules</h2>
                <p>The <code>@media</code> rule is used to define different style rules for different media types in a single style sheet. It is usually followed by a comma-separated list of media types and the CSS declarations block containing the styles rules for target media.</p>
                <p>The style declaration in the example below tells the browser to display body content in 14 pixels Arial font on the screen, but in case of printing it will be in a 12 points Times font. However the value of <a href="../info-css/style_line-height-property.php"><code>line-height</code></a> property is set to 1.2 for both of them:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3b93.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

@media screen{
    body {
        color: #32cd32;
        font-family: Arial, sans-serif;
        font-size: 14px;
    }
}
@media print {
    body {
        color: #ff6347;
        font-family: Times, serif;
        font-size: 12pt;
    }
}
@media screen, print {
    body {
        line-height: 1.2;
    }
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Style rules outside of <a href="../info-css/style_media-rule.php"><code>@media</code></a> rules apply to all media types that the style sheet applies to. At-rules inside <code>@media</code> are invalid in CSS2.1.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Method 2: Using the <code>@import</code> At-rules</h2>
                <p>The <code>@import</code> rule is another way of setting style information for a specific target media &mdash; Just specify the comma-separated media types after the URL of the imported style sheets.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8700.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

@import url("css/screen.css") screen;
@import url("css/print.css") print;
body {
    background: #f5f5f5;
    line-height: 1.2;
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
                <p>The <code>print</code> media type in the <code>@import</code> statement instructs the browser to load an external style sheet (print.css) and use its styles only for print media.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> All <a href="../info-css/style_import-rule.php"><code>@import</code></a> statements must occur at the beginning of a style sheet, before any declarations. Any style rule specified in the style sheet itself override the conflicting style rules in the imported style sheets.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Method 3: Using the <code>&lt;link&gt;</code> element</h2>
                <p>The <code>media</code> attribute on the <a href="../info-html/html-link-tag.php"><code>&lt;link&gt;</code></a> element is used to specify the target media for an external style sheet within the HTML document.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf5b3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<link rel="stylesheet" media="all" href="css/common.css">
<link rel="stylesheet" media="screen" href="css/screen.css">
<link rel="stylesheet" media="print" href="css/print.css">

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
                <p>In this example the <code>media</code> attribute instructs the browser to load an external style sheet "screen.css" and use its styles only for screen while "print.css" for printing purpose.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> You can also specify multiple media types (each separated with comma e.g. <code>media="screen, print"</code>) as well as media quires to the <code>&lt;link&gt;</code> element.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Different Media Types</h2>
                <p class="break">The following table lists the various media types that may used to target different types of devices such as printers, handheld devices, computer screens etc.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th><pre>Media Type      </pre></th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>all</code></td>
                            <td>Used for all media type devices.</td>
                        </tr>
                        <tr>
                            <td><code>aural</code></td>
                            <td>Used for speech and sound synthesizers.</td>
                        </tr>
                        <tr>
                            <td><code>braille</code></td>
                            <td>Used for braille tactile feedback devices.</td>
                        </tr>
                        <tr>
                            <td><code>embossed</code></td>
                            <td>Used for paged braille printers.</td>
                        </tr>
                        <tr>
                            <td><code>handheld</code></td>
                            <td>Used for small or handheld devices &mdash; usually small screen devices such as mobile phones or PDAs.</td>
                        </tr>
                        <tr>
                            <td><code>print</code></td>
                            <td>Used for printers.</td>
                        </tr>
                        <tr>
                            <td><code>projection</code></td>
                            <td>Used for projected presentations, for example projectors.</td>
                        </tr>
                        <tr>
                            <td><code>screen</code></td>
                            <td>Used primarily for color computer screens.</td>
                        </tr>
                        <tr>
                            <td><code>tty</code></td>
                            <td>Used for media using a fixed-pitch character grid &mdash; such as teletypes, terminals, or portable devices with limited display capabilities.</td>
                        </tr>
                        <tr>
                            <td><code>tv</code></td>
                            <td>Used for television-type devices &mdash; low resolution, color, limited-scrollability screens, sound available.</td>
                        </tr>
                    </table>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> However there are several media types to choose from but most of the browser only support <code>all</code>, <code>screen</code> and <code>print</code> media types.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="style_pseudo-elements.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_sprites.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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