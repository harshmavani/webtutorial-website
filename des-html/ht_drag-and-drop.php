
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="How to Use HTML5 Drag and Drop Feature">
	  <meta name="keywords" content="css,css3,How to Use HTML5 Drag and Drop Feature">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Use HTML5 Drag and Drop Feature - WebSchool Today</title>
	<meta name="description" content="In this tutorial you will learn how to drag an element on a web page and drop it to other location using the HTML5 drag and drop feature." />
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">How to Use HTML5 Drag and Drop Feature</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="../ht_examples.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

            	<a href="htl_geolocation.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML5 <span>Drag and Drop</span></h1>
                <p class="summary">In this tutorial you will learn how to use the HTML5 drag and drop feature.</p>
				<h2>Drag and Drop an Element</h2>
				<p>The HTML5 drag and drop feature allows the user to drag and drop an element to another location. The drop location may be a different application. While dragging an element a translucent representation of the element is follow the mouse pointer.</p>
				<p>Let's try out the following example to understand how it basically works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7c7a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
                        <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Using Drag and Drop</title>
<script>
    function dragStart(e) {
        // Sets the operation allowed for a drag source
        e.dataTransfer.effectAllowed = "move";
    
        // Sets the value and type of the dragged data
        e.dataTransfer.setData("Text", e.target.getAttribute("id"));
    }
    function dragOver(e) {
        // Prevent the browser default handling of the data
        e.preventDefault();
        e.stopPropagation();
    }
    function drop(e) {
        // Cancel this event for everyone else
        e.stopPropagation();
        e.preventDefault();
    
        // Retrieve the dragged data by type
        var data = e.dataTransfer.getData("Text");
    
        // Append image to the drop box
        e.target.appendChild(document.getElementById(data));
    }
</script>
<style>
    #dropBox {
        width: 300px;
        height: 300px;
        border: 5px dashed gray;
        background: lightyellow;
        text-align: center;
        margin: 20px 0;
        color: orange;
    }
    #dropBox img {
        margin: 25px;
    }
</style>
</head>
<body>
    <h2>Drag and Drop Demo</h2>
    <p>Drag and drop the image into the drop box:</p>
    <div id="dropBox" ondragover="dragOver(event);" ondrop="drop(event);">
        <!--Dropped image will be inserted here-->
    </div>
    <img src="../images/kites.jpg" id="dragA" draggable="true" ondragstart="dragStart(event);" width="250" height="250" alt="Flying Kites">
</body>
</html>
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
				<!--Tip Box-->
                <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> You can make an element draggable by setting the draggable attribute to true, like <code>draggable="true"</code>. However, in most web browsers, text selections, images, and anchor elements with an <code>href</code> attribute are draggable by default.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
				<hr />
				<!--ads-->
				
				<!--ads close-->
				<h2>Drag and Drop Events</h2>
				<p>A number of events are fired during the various stages of the drag and drop operation. But mouse events such as mousemove are not fired during a drag operation.</p>
				<p>The following table provides you a brief overview of all the drag and drop events.</p>
				<div class="shadow">
					<table class="data">
						<thead>
							<tr>
								<th>Event</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>ondragstart</code></td>
								<td>Fires when the user starts dragging an element.</td>
							</tr>
							<tr>
								<td><code>ondragenter</code></td>
								<td>Fires when a draggable element is first moved into a drop listener.</td>
							</tr>
							<tr>
								<td><code>ondragover</code></td>
								<td>Fires when the user drags an element over a drop listener.</td>
							</tr>
							<tr>
								<td><code>ondreagleave</code></td>
								<td>Fires when the user drags an element out of drop listener.</td>
							</tr>
							<tr>
								<td><code>ondrag</code></td>
								<td>Fires when the user drags an element anywhere; fires constantly but can give X and Y coordinates of the mouse cursor.</td>
							</tr>
							<tr>
								<td><code>ondrop</code></td>
								<td>Fires when the user drops an element into a drop listener successfully.</td>
							</tr>
							<tr>
								<td><code>ondragend</code></td>
								<td>Fires when the drag action is complete, whether it was successful or not. This&thinsp;event&thinsp;is&thinsp;not&thinsp;fired when dragging a file to the browser from the desktop.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The HTML5's drag and drop feature is supported in all major modern browsers like Firefox, Chrome, Opera, Safari and Internet Explorer 9 and above.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="htl_geolocation.php" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="../ht_examples.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
 Page</a>
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