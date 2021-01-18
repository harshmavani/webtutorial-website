
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML script Tag">
      <meta name="keywords" content="html,html5,HTML script Tag">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML script Tag - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML script Tag</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>HTML <code>&lt;script&gt;</code> Tag</h1>
                <p class="topic">Topic: <a href="htl_tags.php">HTML5 Tags Reference</a><span class="topic-nav"><a href="ht_samp-tag.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="htl_section-tag.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>	
                <p>The <code>&lt;script&gt;</code> tag is used to embed or reference an executable client-side script (such as JavaScript) within an HTML or XHTML document. The <code>&lt;script&gt;</code> tag may appear any number of times in the <code><a href="ht_head-tag.php">&lt;head&gt;</a></code> or <code><a href="ht_body-tag.php">&lt;body&gt;</a></code> of an HTML document.</p>
                <p>The <code>&lt;script&gt;</code> element either contains a series of scripting statements, or it points to an external script file (through the <code><a href="#src">src</a></code> attribute) that's processed on the client side (user's computer) to add interactivity or affect the behavior of web pages.</p>
                <p>The following table summarizes the usages context and the version history of this tag.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Placement:</th>
                            <td>Inline (but can also be contained in <code><a href="ht_head-tag.php">&lt;head&gt;</a></code>)</td>
                        </tr>
                        <tr>
                            <th>Content:</th>
                            <td>Text</td>
                        </tr>
                        <tr>
                            <th>Start/End Tag:</th>
                            <td>Start tag: <strong>required</strong>, End tag: <strong>required</strong></td>
                        </tr>
                        <tr>
                            <th>Version:</th>
                            <td>HTML 4, 4.01, 5</td>
                        </tr>
                    </table>
                </div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box">
                            <p><strong>Tip:</strong> Client-side scripting refers to the type of computer programs that are executed client-side, by the user's web browser. JavaScript is the most popular client-side scripting language on the web.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Syntax</h2>
                <p>The basic syntax of the <code>&lt;script&gt;</code> tag is given with:</p>
                <div class="shadow">
                    <div class="syntax"><i>HTML&thinsp;/&thinsp;XHTML:</i> <span class="tag">&lt;script <span class="attribute">type</span>="<span class="attribute-value">text/javascript</span>"&gt;</span> ... <span class="tag">&lt;/script&gt;</span></div>
                </div>
                <p>The example below shows the <code>&lt;script&gt;</code> tag in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab35b9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <ul class="ht_code">
                            <li><code><span class="tag">&lt;script <span class="attribute">type</span>="<span class="attribute-value">text/javascript</span>"&gt;</span></code></li>
                            <li class="alt"><code>&nbsp;&nbsp;&nbsp;&nbsp;document.write("Hello World!");</code></li>
                            <li><code><span class="tag">&lt;/script&gt;</span></code></li>
                        </ul>
                    </div>
                </div>
                <hr />
                <h2>Syntax (XHTML)</h2>
                <p>There are some important differences in the way that HTML and XHTML deal with the content inside the scripts. In HTML, the content type is declared as <code>CDATA</code>, which means that <a href="ht_character-entities.php">HTML entities</a> will not be parsed. However, in XHTML, the content type is declared as <code>#PCDATA</code>, which means that entities will be parsed.</p>
                <p>To ensure that the content inside the opening <code>&lt;script&gt;</code> and closing <code>&lt;/script&gt;</code> tags parses correctly when it is included within an XHTML document, all special characters should be encoded &mdash; for example, ampersands (<code>&amp;</code>) should be encoded as <code>&amp;amp;</code>, and greater-than (<code>&gt;</code>) symbols should be encoded as <code>&amp;gt;</code> and so on, or all content should be wrapped inside a CDATA section like this:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc297.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<script type="text/javascript">
    document.write("Hello World!");
</script>

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
                            <p><strong>Read Carefully:</strong> If the <code><a href="#src">src</a></code> attribute is specified, the <code>&lt;script&gt;</code> element should not have a script embedded within its tags.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Tag-Specific Attributes</h2>
                <p>The following table shows the attributes that are specific to the <code>&lt;script&gt;</code> tag.</p>
                <div class="shadow space">
                    <table class="data">
                        <tr>
                            <th>Attribute</th>
                            <th style="width:80px;">Value</th>
                            <th>Description</th>
                        </tr>
						<tr>
                            <td><code>async</code> <span class="htl_badge"></span></td>
                            <td><code>async</code></td>
                            <td>This Boolean attribute specifies that the script should be executed asynchronously, as soon as it becomes available. Only for external scripts, it has no effect on inline scripts.</td>
                        </tr>
                        <tr>
                            <td><code>type</code></td>
                            <td><i>content-type</i></td>
                            <td>Specifies the language of the script. The most common value is <code>text/javascript</code>, which indicates a JavaScript language.</td>
                        </tr>
                        <tr>
                            <td><code>charset</code></td>
                            <td><i>charset</i></td>
                            <td>Specifies the character encoding of the external script file. This attribute must not be specified if <code>src</code> attribute is not present.
                            </td>
                        </tr>
                        <tr>
                            <td><code>defer</code></td>
                            <td><code>defer</code></td>
                            <td>This boolean attribute Specifies that script should be executed after the document has been parsed. This attribute shouldn't be used on scripts that don't have the <code>src</code> attribute.</td>
                        </tr>
                        <tr id="src">
                            <td><code>src</code></td>
                            <td><i>URL</i></td>
                            <td>Specifies the location of an external script file.</td>
                        </tr>
                        <tr>
                            <td><code>xml:space</code></td>
                            <td><code>preserve</code></td>
                            <td><a href="../definitions.php#obsolete" class="obsolete" title="Not supported in HTML5">Obsolete</a> Specifies whether whitespace should be preserved within the script element.</td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Global Attributes</h2>
                <p>Like all other HTML tags, the <code>&lt;script&gt;</code> tag supports the <a href="htl_global-attributes.php">global attributes in HTML5</a>.</p>
                <hr />
                <h2>Event Attributes</h2>
                <p>The <code>&lt;script&gt;</code> tag also supports the <a href="htl_event-attributes.php">event attributes in HTML5</a>.</p>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>&lt;script&gt;</code> tag is supported in all major modern browsers.</p>
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
                                        <li>Internet Explorer <span>3+</span></li>
                                        <li>Apple Safari <span>1+</span></li>
                                        <li>Opera <span>4+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"  style="background-color:#fad28c"
>
                            <p><strong>Important:</strong> Check out the <code><a href="ht_noscript-tag.php">&lt;noscript&gt;</a></code> element which provides an alternate content for users that have either disabled scripts in their browser or have a browser that doesn't support client-side scripting.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-html/ht_scripts.php">HTML Script</a>.</p>
                <p>Related tag: <code><a href="ht_noscript-tag.php">&lt;noscript&gt;</a></code>.</p> 
                <div class="bottom-link clearfix">
                    <a href="ht_samp-tag.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="htl_section-tag.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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