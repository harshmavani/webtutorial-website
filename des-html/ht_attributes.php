
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="What is Attributes in HTML">
	  <meta name="keywords" content="css,css3,What is Attributes in HTML">
	  <meta name="author" content="webschooltoday.com">
    <title>What is Attributes in HTML - WebSchool Today</title>
<?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">What is Attributes in HTML</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
                    
</div>
<a href="ht_headings.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="ht_elements.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML <span>Attributes</span></h1>
                <p class="summary">In this tutorial you will learn how to use attributes to give more meaning to HTML tags.</p>
                <h2>What are Attributes</h2>
                <p>Attributes define additional characteristics or properties of the element such as width and height of an image. Attributes are always specified in the start tag (or opening tag) and usually consists of name/value pairs like <code>name="value"</code>. Attribute values should always be enclosed in quotation marks.</p>
                <p>Also, some attributes are required for certain elements. For instance, an <code>&lt;img&gt;</code> tag must contain a <code>src</code> and <code>alt</code> attributes. Let's take a look at some examples of the attributes usages:</p>
                <!--Code box-->
                <!--ads-->
                
                <!--ads close-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf319.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">
                        <img src="images/smiley.png" width="30" height="30" alt="Smiley">
<a href="https://www.google.com/" title="Search Engine">Google</a>
<abbr title="Hyper Text Markup Language">HTML</abbr>
<input type="text" value="John Doe">
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
                <p>In the above example <code>src</code> inside the <code>&lt;img&gt;</code> tag is an attribute and image path provided is its value. Similarly <code>href</code> inside the <code>&lt;a&gt;</code> tag is an attribute and the link provided is its value, and so on.</p>
                <!--Tip box-->
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> Both single and double quotes can be used to quote attribute values. However, double quotes are most common. In situations where the attribute value itself contains double quotes it is necessary to wrap the value in single quotes, e.g., <code>value='John "Williams" Jr.'</code></p>
                        </div>
                    </div>
                </div>
                <!--End:Tip box-->
                <p>There are several attributes in HTML5 that do not consist of name/value pairs but consists of just name. Such attributes are called Boolean attributes. Examples of some commonly used Boolean attributes are <code>checked</code>, <code>disabled</code>, <code>readonly</code>, <code>required</code>, etc.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc5b1.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">
                        <input type="email" required>
<input type="submit" value="Submit" disabled>
<input type="checkbox" checked>
<input type="text" value="Read only text" readonly>
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
                <p>You will learn about all these elements in detail in upcoming chapters.</p>
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Attribute values are generally case-insensitive, except certain attribute values, like the <code>id</code> and <code>class</code> attributes. However, World Wide Web Consortium (W3C) recommends lowercase for attributes values in their specification.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <hr />
                <!--ads-->
       
                <!--ads close-->
                <h2>General Purpose Attributes</h2>
                <p>There are some attributes, such as <code>id</code>, <code>title</code>, <code>class</code>, <code>style</code>, etc. that you can use on the majority of HTML elements. The following section describes their usages.</p>
                <h3>The id Attribute</h3>
                <p>The <code>id</code> attribute is used to give a unique name or identifier to an element within a document. This makes it easier to select the element using CSS or JavaScript.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc911.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">
                        <input type="text" id="firstName">
<div id="container">Some content</div>
<p id="infoText">This is a paragraph.</p>
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
                <!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The <code>id</code> of an element must be unique within a single document. No two elements in the same document can be named with the same <code>id</code>, and each element can have only one <code>id</code>.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
                <h3>The class Attribute</h3>
                <p>Like <code>id</code> attribute, the <code>class</code> attribute is also used to identify elements. But unlike <code>id</code>, the <code>class</code> attribute does not have to be unique in the document. This means you can apply the same class to multiple elements in a document, as shown in the following example:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe216.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">
                        <input type="text" class="highlight">
<div class="box highlight">Some content</div>
<p class="highlight">This is a paragraph.</p>
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
                <!--Tip box-->
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> Since a <code>class</code> can be applied to multiple elements, therefore any style rules that are written to that <code>class</code> will be applied to all the elements having that <code>class</code>.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip box-->
                <!--ads-->
               
                <!--ads close-->
                <h3>The title Attribute</h3>
                <p>The <code>title</code> attribute to is used to provide advisory text about an element or its content. Try out the following example to understand how this actually works.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab14cf.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">
                        <abbr title="World Wide Web Consortium">W3C</abbr>
<a href="images/kites.jpg" title="Click to view a larger image">
    <img src="images/kites-thumb.jpg" alt="kites">
</a>
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
                <!--Tip box-->
                <div class="color-box break">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> The value of the <code>title</code> attribute (i.e. title text) is displayed as a tooltip by the web browsers when the user place mouse cursor over the element.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip box-->
                <h3>The style Attribute</h3>
                <p>The <code>style</code> attribute allows you to specify CSS styling rules such as color, font, border, etc. directly within the element. Let's check out an example to see how it works:</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5658.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">
                        <p style="color: blue;">This is a paragraph.</p>
<img src="images/sky.jpg" style="width: 300px;" alt="Cloudy Sky">
<div style="border: 1px solid red;">Some content</div>
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
                <p>You will learn more about styling HTML elements in <a href="ht_styles.php">HTML styles</a> chapter.</p>                
                <p>The attributes we've discussed above are also called global attributes. For more global attributes please check out the <a href="../info-html/htl_global-attributes.php">HTML5 global attributes reference</a>.</p>
                <p>A complete list of attributes for each HTML element is listed inside <a href="../info-html/htl_tags.php">HTML5 tag reference</a>.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="ht_elements.php" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="ht_headings.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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