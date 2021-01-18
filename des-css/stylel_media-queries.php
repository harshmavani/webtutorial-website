<!DOCTYPE html>
	<html lang="en">
	<head>
        <meta name="description" conyent="Understanding the CSS3 Media Queries"
	  <meta name="keywords" content="css,css3,Media Queries">
	  <meta name="author" content="webschooltoday.com">
    <title>Understanding the CSS3 Media Queries - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Understanding the CSS3 Media Queries</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des-css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
            	<a href="stylel_filters.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <a href="stylel_miscellaneous.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                <h1>CSS3 <span>Media Queries</span></h1>
                <p class="summary">CSS media queries enable you to format your documents to be presented correctly on different size of output devices.</p>
                <h2 id="media-query">Media Queries and Responsive Web Design</h2>
                <p>Media queries allow you to customize the presentation of your web pages for a specific range of devices like mobile phones, tablets, desktops, etc. without any change in markups. A media query consists of a media type and zero or more expressions that match the type and conditions of a particular media features such as device width or screen resolution.</p>
                <p>Since media query is a logical expression it can be resolve to either true or false. The result of the query will be true if the media type specified in the media query matches the type of device the document is being displayed on, as well as all expressions in the media query are satisfied. When a media query is true, the related style sheet or style rules are applied to the target device. Here's a simple example of the media query for standard devices.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2de4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
                        /* Smartphones (portrait and landscape) ---------- */
@media screen and (min-width: 320px) and (max-width: 480px){
    /* styles */
}
/* Smartphones (portrait) ---------- */
@media screen and (max-width: 320px){
    /* styles */
}
/* Smartphones (landscape) ---------- */
@media screen and (min-width: 321px){
    /* styles */
}
/* Tablets, iPads (portrait and landscape) ---------- */
@media screen and (min-width: 768px) and (max-width: 1024px){
    /* styles */
}
/* Tablets, iPads (portrait) ---------- */
@media screen and (min-width: 768px){
    /* styles */
}
/* Tablets, iPads (landscape) ---------- */
@media screen and (min-width: 1024px){
    /* styles */
}
/* Desktops and laptops ---------- */
@media screen and (min-width: 1224px){
    /* styles */
}
/* Large screens ---------- */
@media screen and (min-width: 1824px){
    /* styles */
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
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> Media queries are an excellent way to create responsive layouts. Using media queries you can customize your website differently for users browsing on devices like smart phones or tablets without changing the actual content of the page.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Changing Column Width Based on Screen Size</h2>
				<p>You can use the CSS media query for changing the web page width and related elements to offer the best viewing experience for the user on different devices.</p>
                <p>The following style rules will automatically change the width of the container element based on the screen or viewport size. For example, if the viewport width is less than 768 pixels it will cover the 100% of the viewport width, if it is greater than the 768 pixels but less than the 1024 pixels it will be 750 pixels wide, and so on.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8bc7.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
                        .container {
    margin: 0 auto;
    background: #f2f2f2;
    box-sizing: border-box;
}
/* Mobile phones (portrait and landscape) ---------- */
@media screen and (max-width: 767px){
    .container {
        width: 100%;
        padding: 0 10px;
    }
}
/* Tablets and iPads (portrait and landscape) ---------- */
@media screen and (min-width: 768px) and (max-width: 1023px){
    .container {
        width: 750px;
        padding: 0 10px;
    }
}
/* Low resolution desktops and laptops ---------- */
@media screen and (min-width: 1024px) {
    .container {
        width: 980px;
        padding: 0 15px;
    }
}
/* High resolution desktops and laptops ---------- */
@media screen and (min-width: 1280px) {
    .container {
        width: 1200px;
        padding: 0 20px;
    }
}}
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
				<!--Note box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> You can use the CSS3 <a href="stylel_box-sizing.php">box-sizing</a> property on the elements to create more intuitive and flexible layouts with much less effort.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
                <hr />
                <h2>Changing Layouts Based on Screen Size</h2>
				<p>You can also use the CSS media query for making your multi-column website layout more adaptable and responsive for devices through little customization.</p>
                <p>The following style rule will create a two column layout if the viewport size is greater than or equal to 768 pixels, but if less than that it'll be rendered as one column layout.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7db5.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">
                        .column {
    width: 48%;
    padding: 0 15px;
    box-sizing: border-box;
    background: #93dcff;
    float: left;
}
.container .column:first-child{
    margin-right: 4%;
}
@media screen and (max-width: 767px){
    .column {
        width: 100%;
        padding: 5px 20px;
        float: none;
    }
    .container .column:first-child{
        margin-right: 0;
        margin-bottom: 20px;
    }
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
                    <a href="stylel_filters.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="stylel_miscellaneous.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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