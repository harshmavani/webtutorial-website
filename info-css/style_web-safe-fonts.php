<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS Web Safe Fonts">
	  <meta name="keywords" content="css,css3,CSS Web Safe Fonts">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS Web Safe Fonts - Learn How to Use Fonts Safely on Websites</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS Web Safe Fonts</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="style_aural-properties.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

			<a href="style_color-names.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
            <h1>CSS <span>Web Safe</span> Fonts</h1>
            <p class="summary">Web-safe fonts are fonts that are extremely common and most likely to be present on a wide range of operating systems like Windows, Mac, Linux etc.</p>
            <h2>Why Choose Web Safe Fonts</h2>
            <p>It may be a situation when the fonts you are trying to use on your web pages are not appeared as it should be, because all fonts are not available on all computer system.</p>
            <p>To ensure the exact rendering of your text on most of the browser or operating systems you have to define your fonts very carefully. The <code><a href="style_font-family-property.php">font-family</a></code> CSS property can hold several font names as a fallback system. Start with the font that you want first, then the fonts you might want to fill in for the first if it is not available.</p>
            <p>You should always end the list with a generic font family, which are five: <code>serif</code>, <code>sans-serif</code>, <code>monospace</code>, <code>cursive</code> and <code>fantasy</code>. The generic font family allows the browser to select a similar font, if no any fonts defined by your are available.</p>
            <p>The following table lists the font's combinations that are most safe to use.</p>
            <div class="shadow">
                <table class="data">
                    <tr>
                        <th>font-family</th>
                        <th>Normal</th>
                        <th>Bold</th>
                    </tr>
                    <tr>
                        <td>Arial, Helvetica, sans-serif</td>
                        <td><p style="font-family:Arial, Helvetica, sans-serif;">This is normal text.</p></td>
                        <td><p style="font-family:Arial, Helvetica, sans-serif;"><strong>This is bold text.</strong></p></td>
                    </tr>
                    <tr>
                        <td>"Times New Roman", Times, serif</td>
                        <td><p style="font-family:'Times New Roman', Times, serif;">This is normal text.</p></td>
                        <td><p style="font-family:'Times New Roman', Times, serif;"><strong>This is bold text.</strong></p></td>
                    </tr>
                    <tr>
                        <td>"Courier New", Courier, monospace</td>
                        <td><p style="font-family:'Courier New', Courier, monospace;">This is normal text.</p></td>
                        <td><p style="font-family:'Courier New', Courier, monospace;"><strong>This is bold text.</strong></p></td>
                    </tr>
                </table>
            </div>
            <p>The following example shows you how to set the <code>font-family</code> property in correct manner.</p>
	    	<div class="example">
                <div class="my_codeb">
                    <div class="my_codeb-title"><h4>Example</h4><a href="../codelab55da.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                    <ul class="style_code">
                    	<li><code><span class="element">.sans-serif-font</span> {</code></li>
                        <li class="alt"><code>&nbsp;&nbsp;&nbsp;&nbsp;<span class="property">font-family</span>: <span class="property-value">Arial, Helvetica, sans-serif</span>;</code></li>
                        <li><code>}</code></li>
                        <li class="alt"><code><span class="element">.serif-font</span> {</code></li>
                        <li><code>&nbsp;&nbsp;&nbsp;&nbsp;<span class="property">font-family</span>: <span class="property-value">"Times New Roman", Times, serif</span>;</code></li>
                        <li class="alt"><code>}</code></li>
                        <li><code><span class="element">.monospace-font</span> {</code></li>
                        <li class="alt"><code>&nbsp;&nbsp;&nbsp;&nbsp;<span class="property">font-family</span>: <span class="property-value">"Courier New", Courier, monospace</span>;</code></li>
                        <li><code>}</code></li>
                    </ul>
                </div>
            </div>
            <hr />
	     <h2>Commonly Used Font Combinations</h2>
            <p class="space">The following table lists some commonly used font combinations, organized by generic family.</p>
            <h3 style="font-family: serif;">Serif Fonts</h3>
            <div class="shadow space">
                <table class="data">
                    <tr>
                        <th>font-family</th>
                        <th>Normal</th>
                        <th>Bold</th>
                    </tr>
                    <tr>
                        <td>Georgia, serif</td>
                        <td><p style="font-family:Georgia, serif;">This is normal text.</p></td>
                        <td><p style="font-family:Georgia, serif;"><strong>This is bold text.</strong></p></td>
                    </tr>
                    <tr>
                        <td>"Times New Roman", Times, serif</td>
                        <td><p style="font-family:'Times New Roman', Times, serif;">This is normal text.</p></td>
                        <td><p style="font-family:'Times New Roman', Times, serif;"><strong>This is bold text.</strong></p></td>
                    </tr>
                    <tr>
                        <td>"Palatino Linotype", Palatino, "Book Antiqua", serif</td>
                        <td><p style="font-family:'Palatino Linotype', Palatino, 'Book Antiqua', serif;">This is normal text.</p></td>
                        <td><p style="font-family:'Palatino Linotype', Palatino, 'Book Antiqua', serif;"><strong>This is bold text.</strong></p></td>
                    </tr>
                </table>
            </div>
            <h3 style="font-family: sans-serif;">Sans-Serif Fonts</h3>
            <div class="shadow space">
                <table class="data">
                    <tr>
                        <th>font-family</th>
                        <th>Normal</th>
                        <th>Bold</th>
                    </tr>
                    <tr>
                        <td>Arial, Helvetica, sans-serif</td>
                        <td><p style="font-family:Arial, Helvetica, sans-serif;">This is normal text.</p></td>
                        <td><p style="font-family:Arial, Helvetica, sans-serif;"><strong>This is bold text.</strong></p></td>
                    </tr>
                    <tr>
                        <td>"Arial Black", Gadget, sans-serif</td>
                        <td><p style="font-family:'Arial Black', Gadget, sans-serif;">This is normal text.</p></td>
                        <td><p style="font-family:'Arial Black', Gadget, sans-serif;"><strong>This is bold text.</strong></p></td>
                    </tr>
                    <tr>
                        <td>Impact, Charcoal, sans-serif</td>
                        <td><p style="font-family:Impact, Charcoal, sans-serif;">This is normal text.</p></td>
                        <td><p style="font-family:Impact, Charcoal, sans-serif;"><strong>This is bold text.</strong></p></td>
                    </tr>
                    <tr>
                        <td>Tahoma, Geneva, sans-serif</td>
                        <td><p style="font-family:Tahoma, Geneva, sans-serif;">This is normal text.</p></td>
                        <td><p style="font-family:Tahoma, Geneva, sans-serif;"><strong>This is bold text.</strong></p></td>
                    </tr>
                    <tr>
                        <td>"Trebuchet MS", Helvetica, sans-serif</td>
                        <td><p style="font-family:'Trebuchet MS', Helvetica, sans-serif;">This is normal text.</p></td>
                        <td><p style="font-family:'Trebuchet MS', Helvetica, sans-serif;"><strong>This is bold text.</strong></p></td>
                    </tr>
                    <tr>
                        <td>Verdana, Geneva, sans-serif</td>
                        <td><p style="font-family:Verdana, Geneva, sans-serif;">This is normal text.</p></td>
                        <td><p style="font-family:Verdana, Geneva, sans-serif;"><strong>This is bold text.</strong></p></td>
                    </tr>
                </table>
            </div>
            <h3 style="font-family: monospace;">Monospace Fonts</h3>
            <div class="shadow space">
                <table class="data">
                    <tr>
                        <th>font-family</th>
                        <th>Normal</th>
                        <th>Bold</th>
                    </tr>
                    <tr>
                        <td>Courier, monospace</td>
                        <td><p style="font-family:Courier, monospace;">This is normal text.</p></td>
                        <td><p style="font-family:Courier, monospace;"><strong>This is bold text.</strong></p></td>
                    </tr>
                    <tr>
                        <td>"Courier New", Courier, monospace</td>
                        <td><p style="font-family:'Courier New', Courier, monospace;">This is normal text.</p></td>
                        <td><p style="font-family:'Courier New', Courier, monospace;"><strong>This is bold text.</strong></p></td>
                    </tr>
                    <tr>
                        <td>"Lucida Console", Monaco, monospace</td>
                        <td><p style="font-family:'Lucida Console', Monaco, monospace;">This is normal text.</p></td>
                        <td><p style="font-family:'Lucida Console', Monaco, monospace;"><strong>This is bold text.</strong></p></td>
                    </tr>
                </table>
            </div>
            <h3 style="font-family: cursive;">Cursive Fonts</h3>
            <div class="shadow space">
                <table class="data">
                    <tr>
                        <th>font-family</th>
                        <th>Normal</th>
                        <th>Bold</th>
                    </tr>
                    <tr>
                        <td>"Comic Sans MS", cursive</td>
                        <td><p style="font-family:'Comic Sans MS', cursive;">This is normal text.</p></td>
                        <td><p style="font-family:'Comic Sans MS', cursive;"><strong>This is bold text.</strong></p></td>
                    </tr>
                    <tr>
                        <td>"Courier New", Courier, monospace</td>
                        <td><p style="font-family:'Courier New', Courier, monospace;">This is normal text.</p></td>
                        <td><p style="font-family:'Courier New', Courier, monospace;"><strong>This is bold text.</strong></p></td>
                    </tr>
                    <tr>
                        <td>"Lucida Console", Monaco, monospace</td>
                        <td><p style="font-family:'Lucida Console', Monaco, monospace;">This is normal text.</p></td>
                        <td><p style="font-family:'Lucida Console', Monaco, monospace;"><strong>This is bold text.</strong></p></td>
                    </tr>
                </table>
            </div>
            <h3 style="font-family: fantasy;">Fantasy Fonts</h3>
            <p class="break">There are no fantasy fonts that have good availability  across browsers and operating systems.</p>
            <div class="color-box">
                <div class="box-shadow">
                    <div class="info-tab sprite warning-icon" title="Warning">&nbsp;</div>
                    <div class="warning-box">
                        <p><strong>Warning:</strong> The fonts (Verdana, Georgia, "Comic Sans MS", "Trebuchet MS", "Arial Black", Impact) are work on Windows and MacOS but not Unix+X.</p>
                    </div>
                </div>
            </div> 
            <div class="bottom-link clearfix">
                <a href="style_color-names.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                <a href="style_aural-properties.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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