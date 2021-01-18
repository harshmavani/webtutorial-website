<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Overflow">
      <meta name="author" content="webschooltoday.com">
      <meta name="description" content="Handling Text Overflow in CSS3" />

    <title>Handling Text Overflow in CSS3 - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Handling Text Overflow in CSS3</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<a href="stylel_gradients.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <a href="stylel_drop-shadows.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <h1>CSS3 <span>Text Overflow</span></h1>
                <p class="summary">CSS3 new text properties provide more control over the text rendering.</p>
                <h2>Handling Text Overflow in CSS3</h2>
                <p class="space">CSS3 introduced several new property properties for modifing the text contents, however some of these properties are existed from a long time. These properties give you precise control over the rendering of text on the web browser.</p>
                <h2>Hiding Overflow Text</h2>
                <p>Text can overflow, when it is prevented from wrapping, for example, if the value of <a href="../info-css/css-white-space-property.php"><code>white-space</code></a> property is set to <code>nowrap</code> for the containing element or a single word is too long to fit like a long email address. In such situation you can use the CSS3 <a href="../info-css/stylel_text-overflow-property.php"><code>text-overflow</code></a> property to determine how the overflowed text content will be displayed.</p>
                <p>You can either display or clip the overflowed text or clip and display an ellipsis or a custom string in palace of the clipped text to indicate the user.</p>
				<p>Values Accepted by the <code>word-break</code> property are: <code>clip</code> and <code>ellipsis</code> and <code><i>string</i></code>.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba25c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        p {
    width: 400px;
    overflow: hidden;
    white-space: nowrap;
    background: #cdcdcd;
}
p.clipped {
    text-overflow: clip; /* clipped the overflowed text */
}
p.ellipses {
    text-overflow: ellipsis; /* display '…' to represent clipped text */
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
				<!--Warning box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box">
                            <p><strong>Warning:</strong> The <code><i>string</i></code> value for the <code>text-overflow</code> property is not supported in most of the web browsers, you should better avoid this.</p>
                        </div>
                    </div>
                </div>
                <!--End:Warning box-->
                <hr />
                <h2>Breaking Overflow Text</h2>
                <p>You can also break a long word and force it to wrap onto a new line that overflows the boundaries of containing element using the CSS3 <a href="../info-css/stylel_word-wrap-property.php"><code>word-wrap</code></a> property.</p>
				<p>Values Accepted by the <code>word-wrap</code> property are: <code>normal</code> and <code>break-word</code>.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc6cc.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
                        p {
    width: 200px;
    background: #ffc4ff;
    word-wrap: break-word;
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
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"  style="background-color:#fad28c"
>
							<p><strong>Important:</strong> Please check out the individual property reference for all the possible values and the Browser support for these CSS properties.</p>
						</div>
					</div>
				</div>
                <hr />
                <h2>Specify Word Breaking Rules</h2>
                <p>You can also specify the line breaking rules for the text (i.e. how to break lines within words) yourself using the CSS3 <a href="../info-css/stylel_word-break-property.php"><code>word-break</code></a> property.</p>
                <p>Values Accepted by the <code>word-break</code> property are: <code>normal</code>, <code>break-all</code> and <code>keep-all</code>.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab88cc.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">
                        p {
    width: 150px;
    padding: 10px;
}
p.break {
    background: #bedb8b;
    word-break: break-all;
}
p.keep {
    background: #f09bbb;
    word-break: keep-all;
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
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="stylel_gradients.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="stylel_drop-shadows.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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