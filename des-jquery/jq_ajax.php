<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Implement Ajax in jQuery">
	  <meta name="keywords" content="jquery,jq,js,How to Implement Ajax in jQuery">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Implement Ajax in jQuery - WebSchool Today</title>
	 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Implement Ajax in jQuery</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_ajax-load.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_filtering.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery <span>Ajax</span></h1>
				<p class="summary">In this tutorial you will learn what Ajax is and how it works.</p>
				<h2>What is Ajax</h2>
				<p>Ajax stands for <b>A</b>synchronous <b>J</b>avascript <b>A</b>nd <b>X</b>ml. Ajax is just a means of loading data from the server to the web browser without reloading the whole page.</p>
				<p>Basically, what Ajax does is make use of the JavaScript-based XMLHttpRequest object to send and receive information to and from a web server asynchronously, in the background, without interfering with the user's experience.</p>
				<p>Ajax has become so popular that you hardly find an application that doesn't use Ajax to some extent. The example of some large-scale Ajax-driven online applications are: Gmail, Google Maps, Google Docs, YouTube, Facebook, Flickr, etc.</p>
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> Ajax is not a new technology, in fact, Ajax is not even really a technology at all. Ajax is just a term to describe the process of exchanging data from a web server asynchronously through JavaScript, without a page refresh.</p>
						</div>
					</div>
				</div>
				<hr />
				<h2>Ajax with jQuery</h2>
				<p>Different browsers implement the Ajax differently that means if you're adopting the typical JavaScript way to implement the Ajax you have to write the different code for different browsers to ensure that Ajax would work cross-browser.</p>
				<p>But, fortunately jQuery simplifies the process of implementing Ajax by taking care of those browser differences. It offers simple methods such as <code>load()</code>, <code>$.get()</code>, <code>$.post()</code>, etc. to implement the Ajax that works seamlessly across all the browsers.</p>
				<p>In the upcoming chapters you will learn how to load data from the server as well as how to send and receive data using HTTP GET and POST method through jQuery Ajax.</p>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> Ajax requests are triggered by the JavaScript code; your code sends a request to a URL, and when the request completes, a callback function can be triggered to handle the response. Further, since the request is asynchronous, the rest of your code continues to execute while the request is being processed.</p>
						</div>
					</div>
				</div>
				<div class="bottom-link clearfix">
					<a href="jq_filtering.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_ajax-load.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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