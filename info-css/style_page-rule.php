<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS @page Rule">
	  <meta name="keywords" content="css,css3,CSS @page Rule">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS @page Rule</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">CSS @page Rule</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            <h1>CSS <code>@page</code> rule</h1>
            <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_import-rule.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="javascript:void(0);" class="disabled" title="Disabled"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
	    	<h2>Description</h2>
	    	<p>The <code>@page</code> rule defines the dimensions, orientation, and margins of a page box in a styleSheet, which are used for print previewing and printing Web documents from the browser. Generally, within this construct various CSS properties like size, page, and margin are used to specify the dimensions, orientation, margins, etc. of the page box.</p>
	    	<p>The page box is a rectangular region that contains two areas:</p>
            <ul>
                <li>The <strong>page area</strong>. The page area includes the boxes laid out on that page. The edges of the first page area establish the rectangle that is the initial containing block of the document. The canvas background is painted within and covers the page area. </li>
                <li>The <strong>margin area</strong>, which surrounds the page area. The page margin area is transparent. </li>
            </ul>
            <hr />
	    	<h2>Syntax</h2>
            <p>The syntax of this at-rule is given with:</p>
            <div class="shadow">
                <div class="syntax">
       				<table>
                        <tr>
                            <td>
                                <span class="at-rule">@page</span> [<span class="selector">:left</span> | <span class="selector">:right</span> | <span class="selector">:first</span>] {<br />
                                &nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">/* print-specific rules */</span><br />
                                }
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <p>The example below shows the <code>@page</code> property in action.</p>
	    	<div class="example">
                <div class="my_codeb">
                    <div class="my_codeb-title"><h4>Example</h4><a href="../codelab92cb.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                    <ul class="style_code lead-zero">
						<li><code><span class="at-rule">@page</span> {</code></li>
						<li class="alt"><code>&nbsp;&nbsp;&nbsp;&nbsp;<span class="property">margin</span>: <span class="property-value">2in</span>;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">/* default for all pages */</span></code></li>
						<li><code>}</code></li>
						<li class="alt"><code><span class="at-rule">@page</span> <span class="selector">:left</span> {</code></li>
						<li><code>&nbsp;&nbsp;&nbsp;&nbsp;<span class="property">margin</span>: <span class="property-value">1in</span>;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">/* margin on left page */</span></code></li>
						<li class="alt"><code>}</code></li>
						<li><code><span class="at-rule">@page</span> <span class="selector">:right</span> {</code></li>
						<li class="alt"><code>&nbsp;&nbsp;&nbsp;&nbsp;<span class="property">margin</span>: <span class="property-value">3in</span>;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">/* margin on right page */</span></code></li>
						<li><code>}</code></li>
						<li class="alt"><code><span class="at-rule">@page</span> <span class="selector">:first</span> {</code></li>
						<li><code>&nbsp;&nbsp;&nbsp;&nbsp;<span class="property">margin-top</span>: <span class="property-value">5in</span>;&nbsp;&nbsp;&nbsp;&nbsp;<span class="comment">/* top margin on first page */</span></code></li>
						<li class="alt"><code>}</code></li>
                    </ul>
                </div>
            </div>
			<hr />
	    	<h2>Browser Compatibility</h2>
            <p>The <code>@page</code> rule is poorly supported.</p>
            <div class="shadow">
                <div class="support">
                    <table>
                        <tr>
                            <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                            <td>
                                <h2>Basic Support&mdash;</h2>
                                <ul>
                                    <li>Firefox <span>(None)</span></li>
                                    <li>Google Chrome <span>2+</span></li>
                                    <li>Internet Explorer <span>8+</span></li>
                                    <li>Apple Safari <span>5+</span></li>
                                    <li>Opera <span>6+</span></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <hr />
	    	<h2>Further Reading</h2>
            <p>See tutorial on: <a href="../des-css/style_media-types.php">CSS Media Types</a>.</p>
            <div class="bottom-link clearfix">
                <a href="style_media-rule.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                <a href="javascript:void(0);" class="next-page-bottom disabled" title="Disabled" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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