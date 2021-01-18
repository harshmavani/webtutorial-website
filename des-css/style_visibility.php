<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="keywords" content="css,css3,Display,Visibility">
	  <meta name="author" content="webschooltoday.com">
    <title>Deference Between CSS Display and Visibility - WebSchool Today</title>
    <meta name="description" content="Deference Between CSS Display and Visibility" />
    
<style>
.demo-box div,.demo-box div img{width:100%;height:80px;display:block}
.demo-box div{cursor:pointer;margin-bottom:15px;box-shadow:5px 5px 0 #ececec}
.demo-box div img{background:url(../lib/images/visibility-vs-display-demo-sprite.jpg) no-repeat left top transparent}
.demo-box .display-none.one img{background-position:0 0}
.demo-box .visibility-hidden.two img{background-position:0 -80px}
.demo-box .display-none.three img{background-position:0 -160px}
.demo-box .visibility-hidden.four img{background-position:0 -240px}
.rounded.reset-all{font-size:12px;float:right;padding:4px 30px 4px 10px;background:url(../lib/images/sprite-1.0.png) no-repeat 130% -534px #B7D2E3}
</style>
<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Deference Between CSS Display and Visibility</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            <a href="style_display.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            <a href="style_position.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            <h1>CSS <span>Visibility</span></h1>
            <p class="summary">The visibility property determines whether an element is visible or hidden.</p>
            <h2>Controlling the Visibility of Elements</h2>
            <p class="break">You can use the <code>visibility</code> property to control whether an element is visible or not. This property can take one of the following values listed in the table below:</p>
            <div class="shadow">
                <table class="data">
                    <tr>
                    	<th>Value</th>
                    	<th>Description</th>
                    </tr>
                    <tr>
                    	<td><code>visible</code></td>
                    	<td>Default value. The box and its contents are visible.</td>
                    </tr>
                    <tr>
                    	<td><code>hidden</code></td>
                    	<td>The box and its content are invisible, but still affect the layout of the page.</td>
                    </tr>
                    <tr>
                    	<td><code>collapse</code></td>
                    	<td>This value causes the entire row or column to be removed from the display. This value is used for row, row group, column, and column group elements.</td>
                    </tr>
                    <tr>
                    	<td><code>inherit</code></td>
                    	<td>Specifies that the value of the visibility property should be inherited from the parent element i.e. takes the same visibility value as specified for its parent. </td>
                    </tr>
                </table>
            </div>
            <p>The style rule <code>visibility: collapse;</code> however removes the internal table elements, but it does not affect the layout of the table in any other way. The space normally occupied by the table elements will be filled by the subsequent siblings.</p>
	    	<!--Note box-->
            <div class="color-box">
                <div class="shadow">
                    <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                    <div class="note-box"  style="background-color:#ff8585">
                        <p><strong>Read Carefully:</strong> If the style rule <code>visibility: collapse;</code> is specified for other elements rather than the table elements, it causes the same behavior as <code>hidden</code>.</p>
                    </div>
                </div>
            </div>
            <!--End:Note box-->
	    	<hr />
            <h2 id="visibility-vs-display">CSS Visibility vs Display</h2>
            <p>The display and visibility CSS properties appear to be the same thing, but they are in fact quite different and often confuse those new to web development.</p>
            <ul>
            	<li><code>visibility: hidden;</code> hides the element, but it still takes up space in the layout. Child element of a hidden box will be visible if their visibility is set to visible.</li>
            	<li><code>display: none;</code> turns off the display and removes the element completely from the document. It does not take up any space, even though the HTML for it is still in the source code. All child elements also have their display turned off, even if their display property is set to something other than none.</li>
            </ul>
            <p class="space">Check out the following demo to find out how display and visibility affect the layouts.</p>
            <hr />
            <h2>CSS Visibility vs Display Demo <span class="rounded reset-all">Reset All</span></h2>
            <div class="demo-box">
                <div class="display-none one"><img src="../lib/images/transparent.gif" alt="Click on me i will removed" /></div>
                <div class="visibility-hidden two"><img src="../lib/images/transparent.gif" alt="Click on me i will hide" /></div>
                <div class="display-none three"><img src="../lib/images/transparent.gif" alt="Click on me i will removed" /></div>
                <div class="visibility-hidden four"><img src="../lib/images/transparent.gif" alt="Click on me i will hide" /></div>
            </div>
            <!--Bottom Navigation-->
            <div class="bottom-link clearfix">
                <a href="style_display.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                <a href="style_position.php" class="next-page-bottom">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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