<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="Working with CSS3 Filter Effects" />
	  <meta name="keywords" content="css,css3,Filter Effects">
	  <meta name="author" content="webschooltoday.com">
    <title>Working with CSS3 Filter Effects - WebSchool Today</title>
    
<style>
table.filter-demo{margin:20px 0 5px}
table.filter-demo td{text-align:center;padding:5px 40px 5px 0}
.filter-demo .image-box{width:150px;display:inline-block;border-radius:300px;border:6px solid #f5f7f9}
.filter-demo .image-box img{display:block;width:150px}
img.blur{-webkit-filter:blur(2px);filter:blur(2px)}
img.extra-blur{-webkit-filter:blur(5px);filter:blur(5px)}
img.high-brightness{-webkit-filter:brightness(200%);filter:brightness(200%)}
img.low-brightness{-webkit-filter:brightness(50%);filter:brightness(50%)}
img.high-contrast{-webkit-filter:contrast(200%);filter:contrast(200%)}
img.low-contrast{-webkit-filter:contrast(50%);filter:contrast(50%)}
img.small-shadow{-webkit-filter:drop-shadow(2px 2px 4px orange);filter:drop-shadow(2px 2px 4px orange)}
img.large-shadow{-webkit-filter:drop-shadow(4px 4px 10px orange);filter:drop-shadow(4px 4px 10px orange)}
img.complete-gray{-webkit-filter:grayscale(100%);filter:grayscale(100%)}
img.partial-gray{-webkit-filter:grayscale(50%);filter:grayscale(50%)}
img.hue-normal{-webkit-filter:hue-rotate(150deg);filter:hue-rotate(150deg)}
img.hue-wrap{-webkit-filter:hue-rotate(480deg);filter:hue-rotate(480deg)}
img.partially-inverted{-webkit-filter:invert(80%);filter:invert(80%)}
img.fully-inverted{-webkit-filter:invert(100%);filter:invert(100%)}
img.transparent{-webkit-filter:opacity(80%);filter:opacity(80%)}
img.highly-transparent{-webkit-filter:opacity(30%);filter:opacity(30%)}
img.un-saturated{-webkit-filter:saturate(0%);filter:saturate(0%)}
img.super-saturated{-webkit-filter:saturate(200%);filter:saturate(200%)}
img.complete-sepia{-webkit-filter:sepia(100%);filter:sepia(100%)}
img.partial-sepia{-webkit-filter:sepia(30%);filter:sepia(30%)}
</style>
<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Working with CSS3 Filter Effects</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<a href="stylel_flexible-box-layouts.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <a href="stylel_media-queries.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <h1>CSS3 <span>Filters</span></h1>
                <p class="summary">The CSS3 filter effects provide an easy way to apply the visual effect to the images.</p>
                <h2>Understanding the CSS3 Filter Functions</h2>
                <p>In this chapter we'll discuss about the filter effects introduced in CSS3 that you can use to perform visual effect operations like blur, balancing contrast or brightness, color saturation etc. on graphical elements like an image before it is drawn onto the web page.</p>
                <p class="break">The filter effects can be applied to the element using the CSS3 <code>filter</code> property, which accept one or more filter function in the order provided.</p>
				<div class="shadow break">
					<div class="syntax">
						<table>
							<tr>
								<td><span class="property">filter:</span></td>
								<td>&nbsp;<span class="keyword">blur()</span> | <span class="keyword">brightness()</span> | <span class="keyword">contrast()</span> | <span class="keyword">drop-shadow()</span> | <span class="keyword">grayscale()</span> | <span class="keyword">hue-rotate()</span> | <span class="keyword">invert()</span> | <span class="keyword">opacity()</span> | <span class="keyword">sepia()</span> | <span class="keyword">saturate()</span> | <span class="keyword">url()</span>;</td>
							</tr>
						</table>						 
					</div>
				</div>
				<!--Warning box-->
                <div class="color-box space ie-only">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                            <p><strong>Warning:</strong> The CSS3 filter effects currently not supported in any version of the Internet Explorer. Older versions of IE supported a non-standard <code>filter</code> property for creating effects like opacity, but this feature has been deprecated.</p>
                        </div>
                    </div>
                </div>
                <!--End:Warning box-->
				<h2>The Blur Effect</h2>
                <p>Photoshop like Gaussian blur effect can be applied to an element using the <code>blur()</code> function. This function accepts CSS length value as parameter which defines the blur radius. A larger value will create more blur. If no parameter is provided, then a value <code>0</code> is used.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4a08.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
						img {
    -webkit-filter: blur(5px); /* Chrome, Safari, Opera */
    filter: blur(5px);
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
                <!--End:Code box-->
				<p>&mdash; The output of the above example will look something like this:</p>
				<table class="filter-demo">
					<tr>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" />
							</div>
						</td>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" class="blur" />
							</div>
						</td>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" class="extra-blur" />
							</div>
						</td>
					</tr>
					<tr>
						<td><code>blur(0)</code></td>
						<td><code>blur(2px)</code></td>
						<td><code>blur(5px)</code></td>
					</tr>
				</table>
				<hr />
				<h2>Setting the Image Brightness</h2>
				<p>The <code>brightness()</code> function can be used to set the brightness of an image. A value of <code>0%</code> will create an image that is completely black. Whereas, a value of <code>100%</code> or <code>1</code> leaves the images unchanged. Other values are linear multipliers on the effect.</p>
				<p>You can also set the brightness higher than the 100% which results in brighter image. If the amount parameter is missing, a value of <code>1</code> is used. Negative values are not allowed.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabde8c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
						img.bright {
    -webkit-filter: brightness(200%); /* Chrome, Safari, Opera */
    filter: brightness(200%);
}
img.dark {
    -webkit-filter: brightness(50%); /* Chrome, Safari, Opera */
    filter: brightness(50%);
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
                <!--End:Code box-->
				<p>&mdash; The output of the above example will look something like this:</p>
				<table class="filter-demo">
					<tr>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" class="low-brightness" />
							</div>
						</td>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" />
							</div>
						</td>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" class="high-brightness" />
							</div>
						</td>
					</tr>
					<tr>
						<td><code>brightness(50%)</code></td>
						<td><code>brightness(100%)</code></td>
						<td><code>brightness(200%)</code></td>
					</tr>
				</table>
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box">
							<p><strong>Note:</strong> The filter functions that take a value expressed with a percent sign (e.g. <code>75%</code>) also accept the value expressed as decimal (like, <code>0.75</code>). If the value is invalid, the function returns <code>none</code> and no filter effect will be applied.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>Adjusting the Image Contrast</h2>
				<p>The <code>contrast()</code> function is used to adjust the contrast on an image. A value of <code>0%</code> will create an image that is completely black. Whereas, a value of <code>100%</code> or <code>1</code> leaves the image unchanged. Values over 100% are also allowed which provide results with less contrast. If the amount parameter is missing or omitted, a value of <code>1</code> is used.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb0a2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code3">
						img.bright {
    -webkit-filter: contrast(200%); /* Chrome, Safari, Opera */
    filter: contrast(200%);
}
img.dim {
    -webkit-filter: contrast(50%); /* Chrome, Safari, Opera */
    filter: contrast(50%);
}
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
                <!--End:Code box-->
				<p>&mdash; The output of the above example will look something like this:</p>
				<table class="filter-demo">
					<tr>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" class="low-contrast" />
							</div>
						</td>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" />
							</div>
						</td>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" class="high-contrast" />
							</div>
						</td>
					</tr>
					<tr>
						<td><code>contrast(50%)</code></td>
						<td><code>contrast(100%)</code></td>
						<td><code>contrast(200%)</code></td>
					</tr>
				</table>
				<hr />
				<h2>Adding Drop Shadow to Images</h2>
				<p>You can use the <code>drop-shadow()</code> function to apply the drop shadow effect to the images like Photoshop. This function is similar to the <a href="../info-css/stylel_box-shadow-property.php"><code>box-shadow</code></a> property.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba4b2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code4">
						img {
    -webkit-filter: drop-shadow(4px 4px 10px orange); /* Chrome, Safari, Opera */
    filter: drop-shadow(4px 4px 10px orange);
}
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
                <!--End:Code box-->
				<p>&mdash; The output of the above example will look something like this:</p>
				<table class="filter-demo">
					<tr>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" />
							</div>
						</td>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" class="small-shadow" />
							</div>
						</td>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" class="large-shadow" />
							</div>
						</td>
					</tr>
					<tr>
						<td><code>drop-shadow(0)</code></td>
						<td><code>drop-shadow(2px 2px 4px orange)</code></td>
						<td><code>drop-shadow(4px 4px 10px orange)</code></td>
					</tr>
				</table>
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box">
							<p><strong>Note:</strong> The first and second parameters of the <code>drop-shadow()</code> function specifies the horizontal and vertical offset of the shadow respectively, whereas the third parameter specify the blur radius and the last parameter specifies the shadow color, just like the <code>box-shadow</code> property, with one exception, the '<code>inset</code>' keyword is not allowed.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>Converting an Image to Grayscale</h2>
				<p>The images can be converted to grayscale using the <code>grayscale()</code> function. A value of <code>100%</code> is completely grayscale. A value of <code>0%</code> leaves the image unchanged. Values between <code>0%</code> and <code>100%</code> are linear multipliers on the effect. If the amount parameter is missing, a value of <code>0</code> is used.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba7ea.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code5">
						img.complete-gray {
    -webkit-filter: grayscale(100%); /* Chrome, Safari, Opera */
    filter: grayscale(100%);
}
img.partial-gray {
    -webkit-filter: grayscale(50%); /* Chrome, Safari, Opera */
    filter: grayscale(50%);
}
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
                <!--End:Code box-->
				<p>&mdash; The output of the above example will look something like this:</p>
				<table class="filter-demo">
					<tr>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" />
							</div>
						</td>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" class="partial-gray" />
							</div>
						</td>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" class="complete-gray" />
							</div>
						</td>
					</tr>
					<tr>
						<td><code>grayscale(0)</code></td>
						<td><code>grayscale(50%)</code></td>
						<td><code>grayscale(100%)</code></td>
					</tr>
				</table>
				<hr />
				<h2>Applying Hue Rotation on Image</h2>
				<p>The <code>hue-rotate()</code> function applies a hue rotation on the image. The passed parameter defines the number of degrees around the color circle the image samples will be adjusted. A value of <code>0deg</code> leaves the image unchanged. If the '<code>angle</code>' parameter is missing, a value of <code>0deg</code> is used. There is no maximum value, the effect of values above <code>360deg</code> wraps around.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3102.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code6">
						img.hue-normal {
    -webkit-filter: hue-rotate(150deg); /* Chrome, Safari, Opera */
    filter: hue-rotate(150deg);
}
img.hue-wrap {
    -webkit-filter: hue-rotate(480deg); /* Chrome, Safari, Opera */
    filter: hue-rotate(480deg);
}
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
                <!--End:Code box-->
				<p>&mdash; The output of the above example will look something like this:</p>
				<table class="filter-demo">
					<tr>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" />
							</div>
						</td>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" class="hue-normal" />
							</div>
						</td>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" class="hue-wrap" />
							</div>
						</td>
					</tr>
					<tr>
						<td><code>hue-rotate(0)</code></td>
						<td><code>hue-rotate(150deg)</code></td>
						<td><code>hue-rotate(480deg)</code></td>
					</tr>
				</table>				
				<hr />
				<h2>The Invert Effect</h2>
				<p>The invert effect like Photoshop can be applied to an image with the <code>invert()</code> function. A value of <code>100%</code> or <code>1</code> is completely inverted. A value of <code>0%</code> leaves the input unchanged. Values between <code>0%</code> and <code>100%</code> are linear multipliers on the effect. If the '<code>amount</code>' parameter is missing, a value of <code>0</code> is used. Negative values are not allowed.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5119.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">
						img.partially-inverted {
    -webkit-filter: invert(80%); /* Chrome, Safari, Opera */
    filter: invert(80%);
}
img.fully-inverted {
    -webkit-filter: invert(100%); /* Chrome, Safari, Opera */
    filter: invert(100%);
}
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
                <!--End:Code box-->
				<p>&mdash; The output of the above example will look something like this:</p>
				<table class="filter-demo">
					<tr>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" />
							</div>
						</td>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" class="partially-inverted" />
							</div>
						</td>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" class="fully-inverted" />
							</div>
						</td>
					</tr>
					<tr>
						<td><code>invert(0)</code></td>
						<td><code>invert(80%)</code></td>
						<td><code>invert(100%)</code></td>
					</tr>
				</table>
				<hr />
				<h2>Applying Opacity to Images</h2>
				<p>The <code>opacity()</code> function can be used to apply transparency to the images. A value of <code>0%</code> is completely transparent. A value of <code>100%</code> or <code>1</code> leaves the image unchanged. Values between <code>0%</code> and <code>100%</code> are linear multipliers on the effect. If the '<code>amount</code>' parameter is missing, a value of <code>1</code> is used. This function is similar to the <a href="../info-css/stylel_opacity-property.php"><code>opacity</code></a> property.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbd9a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code8">
						img {
    -webkit-filter: opacity(80%); /* Chrome, Safari, Opera */
    filter: opacity(80%);
}
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
                <!--End:Code box-->
				<p>&mdash; The output of the above example will look something like this:</p>
				<table class="filter-demo">
					<tr>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" />
							</div>
						</td>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" class="transparent" />
							</div>
						</td>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" class="highly-transparent" />
							</div>
						</td>
					</tr>
					<tr>
						<td><code>opacity(100%)</code></td>
						<td><code>opacity(80%)</code></td>
						<td><code>opacity(30%)</code></td>
					</tr>
				</table>
				<hr />
				<h2>Applying Sepia Effect to Images</h2>
				<p>The <code>sepia()</code> function converts the image to sepia. A value of <code>100%</code> or <code>1</code> is completely sepia. A value of <code>0%</code> leaves the image unchanged. Values between <code>0%</code> and <code>100%</code> are linear multipliers on the effect. If the '<code>amount</code>' parameter is missing, a value of <code>0</code> is used.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7ddb.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">
						img.complete-sepia {
    -webkit-filter: sepia(100%); /* Chrome, Safari, Opera */
    filter: sepia(100%);
}
img.partial-sepia {
    -webkit-filter: sepia(30%); /* Chrome, Safari, Opera */
    filter: sepia(30%);
}
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
                <!--End:Code box-->
				<p>&mdash; The output of the above example will look something like this:</p>
				<table class="filter-demo">
					<tr>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" />
							</div>
						</td>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" class="partial-sepia" />
							</div>
						</td>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" class="complete-sepia" />
							</div>
						</td>
					</tr>
					<tr>
						<td><code>sepia(0%)</code></td>
						<td><code>sepia(30%)</code></td>
						<td><code>sepia(100%)</code></td>
					</tr>
				</table>
				<!--Tip Box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box">
							<p><strong>Tip:</strong> In photographic terms, sepia toning is a specialized treatment to give a black-and-white photograph a warmer tone (reddish-brown) to enhance its archival quality.</p>
						</div>
					</div>
				</div>
				<!--End:Tip Box-->
				<hr />
				<h2>Adjusting the Saturation of Images</h2>
				<p>The <code>saturate()</code> function can be used to adjust the saturaion of an image. A value of <code>0%</code> is completely un-saturated. A value of <code>100%</code> leaves the image unchanged. Other values are linear multipliers on the effect. Values of amount over 100% are also allowed, providing super-saturated results. If the '<code>amount</code>' parameter is missing, a value of <code>1</code> is used.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab115e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">
						img.un-saturated {
    -webkit-filter: saturate(0%); /* Chrome, Safari, Opera */
    filter: saturate(0%);
}
img.super-saturated {
    -webkit-filter: saturate(200%); /* Chrome, Safari, Opera */
    filter: saturate(200%);
}
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
                <!--End:Code box-->
				<p>&mdash; The output of the above example will look something like this:</p>
				<table class="filter-demo">
					<tr>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" />
							</div>
						</td>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" class="super-saturated" />
							</div>
						</td>
						<td>
							<div class="image-box">
								<img src="../assets/images/parrot.png" alt="Parrot Image" class="un-saturated" />
							</div>
						</td>
					</tr>
					<tr>
						<td><code>saturate(100%)</code></td>
						<td><code>saturate(200%)</code></td>
						<td><code>saturate(0%)</code></td>
					</tr>
				</table>
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box">
							<p><strong>Note:</strong> The <code>url()</code> function specifies a filter reference to a specific filter element. For example, <code>url(commonfilters.svg#foo)</code>. If the filter reference to an element that didn't exist or the referenced element is not a filter element, then the whole filter chain is ignored. No filter is applied to the element.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->				
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="stylel_flexible-box-layouts.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="stylel_media-queries.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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