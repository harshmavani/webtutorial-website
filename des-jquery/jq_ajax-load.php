<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="jQuery Load Content from Another Page Using Ajax">
	  <meta name="keywords" content="jquery,jq,js,jQuery Load Content from Another Page Using Ajax">
	  <meta name="author" content="webschooltoday.com">
    <title>jQuery Load Content from Another Page Using Ajax - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">jQuery Load Content from Another Page Using Ajax</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_ajax-get-and-post-requests.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_ajax.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery Ajax <span>Load</span></h1>
				<p class="summary">In this tutorial you will learn how to load data from server using jQuery.</p>
				<h2>jQuery <code>load()</code> Method</h2>
				<p>The jQuery <code>load()</code> method loads data from the server and place the returned HTML into the selected element. This method provides a simple way to load data asynchronous from a web server. The basic syntax of this method can be given with:</p>
				<div class="shadow">
					<div class="syntax">$(<i>selector</i>).load(<i>URL</i>, <i>data</i>, <i>complete</i>);</div>
				</div>
				<p>The parameters of the <code>load()</code> method has the following meaning:</p>
				<ul>
					<li>The required <i>URL</i> parameter specifies the URL of the file you want to load.</li>
					<li>The optional <i>data</i> parameter specifies a set of query string (i.e. key/value pairs) that is sent to the web server along with the request.</li>
					<li>The optional <i>complete</i> parameter is basically a callback function that is executed when the request completes. The callback is fired once for each selected element.</li>
				</ul>
				<p>Let's put this method into real use. Create a blank HTML file "test-content.php" and save it somewhere in your <a href="../php-tutorial/php-get-started.php">web server</a>. Now place the following HTML code inside of this file:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab619b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<h1>Simple Ajax Demo</h1>
<p id="hint">This is a simple example of Ajax loading.</p>
<p><img src="sky.jpg" alt="Cloudy Sky"></p>

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
				<p>Now, create one more HTML file say "load-demo.php", and save it at the same location where you've saved the previous file. Now put the following HTML code inside of it:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab619b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery load() Demo</title>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("#box").load("test-content.php");
    });
});
</script>
</head>
<body>
    <div id="box">
        <h2>Click button to load new content inside DIV box</h2>
    </div>
    <button type="button">Load Content</button>
</body>
</html>

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
				<p>Finally, open this page in your browser and click the "Load Content" button. You'll see the content of DIV box is replaced by the HTML content of the "test-content.php" file.</p>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c"> 
							<p><strong>Important:</strong> To test this Ajax example you need to place the HTML files on a web server. You can <a href="../php-tutorial/php-get-started.php">set up a local web server</a> on your PC by installing WampServer or XAMPP. You must open the demo file using "http://" since Ajax makes HTTP requests.</p>
						</div>
					</div>
				</div>
				<div class="color-box break">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> Ajax request can be made only to the files that exist on the same web server that servers the page from which the Ajax request is sent, not to external or remote servers for security reasons. This is called same-origin policy.</p>
						</div>
					</div>
				</div>
				<p class="hide">Further, the callback function can have three different parameters: <code>responseTxt</code> which contains the resulting content if the call succeeds, <code>statusTxt</code> wchich contains the status of the call, and the <code>jqXHR</code> whcich contains the XMLHttpRequest object.</p>
				<p>Further, the callback function can have three different parameters:</p>
				<ul>
					<li><code>responseTxt</code> &mdash; Contains the resulting content if the request succeeds.</li>
					<li><code>statusTxt</code> &mdash; Contains the status of the request such as success or error.</li>
					<li><code>jqXHR</code> &mdash; Contains the XMLHttpRequest object.</li>
				</ul>
				<p>Here's the modified version of the previous example that will display either the success or error message to the user depending on the status of the request.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbc02.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery load() Demo</title>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("#box").load("test-content.php", function(responseTxt, statusTxt, jqXHR){
            if(statusTxt == "success"){
                alert("New content loaded successfully!");
            }
            if(statusTxt == "error"){
                alert("Error: " + jqXHR.status + " " + jqXHR.statusText);
            }
        });
    });
});
</script>
</head>
<body>
    <div id="box">
        <h2>Click button to load new content inside DIV box</h2>
    </div>
    <button type="button">Load Content</button>
</body>
</html>

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
				<hr />
				<h2>Loading Page Fragments</h2>
				<p>The jQuery <code>load()</code> also allows us to fetch only a portion of the document. This is simply achieved by appending the <code>url</code> parameter with a space followed by a <a href="#">jQuery selector</a>, let's check out the following example to make it more clear.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7068.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        
	<textarea id="code4">

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery load() Demo</title>
<script src="https://code.jquery.com/jq_1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("#box").load("test-content.php #hint");
    });
});
</script>
</head>
<body>
    <div id="box">
        <h2>Click button to load new content inside DIV box</h2>
    </div>
    <button type="button">Load Content</button>
</body>
</html>

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
				<p>The jQuery selector <code>#hint</code> within the <code>url</code> parameter (<i>line no-10</i>), specify the portion of the "test-content.php" file to be inserted inside the DIV box, which is an element that has the ID attribute with a value <code>hint</code> i.e. <code>id="hint"</code>, see the first example.</p>
				<div class="bottom-link clearfix">
					<a href="jq_ajax.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_ajax-get-and-post-requests.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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