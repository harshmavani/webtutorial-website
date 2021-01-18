
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML map Tag">
      <meta name="keywords" content="html,html5,HTML map Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML map Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML map Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;map&gt;</code> Tag</h1>                
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_link-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="htl_mark-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>&lt;map&gt;</code> tag specifies a client-side image map.</p>	
                <p>An image map is a list of coordinates relating to a specific <a href="../des-html/ht_images.php">image</a>, created in order to <a href="../des-html/ht_links.php">hyperlink</a> areas of the image to various destinations (as opposed to a normal image link, in which the entire area of the image links to a single destination).</p>
                <p>For example, a map of the world may have each country hyperlinked to further information about that country. The intention of an image map is to provide an easy way of linking various parts of an image without dividing the image into separate image files.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Inline</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>Block and <code><a href="ht_area-tag.php">&lt;area&gt;</a></code></td>
                        </tr>
                        <tr>
                            <th>Start/End Tag:</th>
                            <td>Start tag: <strong>required</strong>, End tag: <strong>required</strong></td>
                        </tr>
                        <tr>
                            <th>Version:</th>
                            <td>HTML 3.2, 4, 4.01, 5</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;map&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;map <span class="attribute">name</span>="<i><span class="attribute">text</span></i>"&gt;</span> ... <span class="tag">&lt;/map&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;map&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe89c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<img src="shapes.png" usemap="#shapes" alt="Geometrical Shapes">
<map name="shapes">
    <area shape="circle" coords="40,40,40" href="circle.php" alt="Circle">
    <area shape="poly" coords="148,2,104,80,193,80" href="triangle.php" alt="Triangle">
    <area shape="rect" coords="226,2,323,80" href="rectangle.php" alt="Rectangle">
    <area shape="poly" coords="392,2,352,32,366,80,418,80,432,32" href="pentagon.php" alt="Pentagon">
</map>

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
                            <p><strong>Read Carefully:</strong> An image may be associated with an image map, via a <code>usemap</code> attribute. The <code>usemap</code>  attribute, if specified, must be a string beginning with a hash character (<code>#</code>) followed by the value of the <code>name</code> attribute of the <code>&lt;map&gt;</code> element.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Tag-Specific Attributes</h2>
                <p>The following table shows the attributes that are specific to the <code>&lt;map&gt;</code> tag.</p>
                <div class="shadow">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th>Value</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td><code>name</code></td>
                            <td><i>text</i></td>
                            <td>Assigns a name to the image map.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;map&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;map&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;map&gt;</code> tag is supported in all major modern browsers.</p>
                <div class="shadow">
                    <div class="support">
                        <table>
                            <tr>
                                <td><img src="../assets/images/browser.jpg" alt="Browsers Icon" /></td>
                                <td>
                                    <h2>Basic Support&mdash;</h2>
                                    <ul>
                                        <li>Firefox <span>1+</span></li>
                                        <li>Google Chrome <span>1+</span></li>
                                        <li>Internet Explorer <span>2+</span></li>
                                        <li>Apple Safari <span>1+</span></li>
                                        <li>Opera <span>4+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-html/ht_images.php">HTML Images</a>.</p>
                <p>Related tag: <code><a href="ht_area-tag.php">&lt;area&gt;</a></code>, <code><a href="ht_img-tag.php">&lt;img&gt;</a></code>.</p> 
                <div class="bottom-link clearfix">
                    <a href="ht_link-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="htl_mark-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
 </a>
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