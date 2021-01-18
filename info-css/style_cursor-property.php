<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS cursor Property">
	  <meta name="keywords" content="css,css3,CSS cursor Property">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS cursor Property - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
   
    <div>
<div class="tital">CSS counter-reset Property</div>  
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css_inner.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
                <h1>CSS <code>cursor</code> Property</h1>
                <p class="topic">Topic: <a href="stylel_properties.php">CSS3 Properties Reference</a><span class="topic-nav"><a href="style_counter-reset-property.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a><a href="style_direction-property.php"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></span></p>
                <h2>Description</h2>
                <p>The <code>cursor</code> CSS property specifies the type of cursor to be displayed when the pointer is placed over an element.</p>
                <p>The following table summarizes the usages context and the version history of this property.</p>
                <div class="shadow">
                    <table class="data description">
                        <tr>
                            <th>Default value:</th>
                            <td><code>auto</code></td>
                        </tr>
                        <tr>
                            <th>Applies to:</th>
                            <td>All elements</td>
                        </tr>
                        <tr>
                            <th>Inherited:</th>
                            <td>Yes</td>
                        </tr>
						<tr>
							<th>Animatable:</th>
							<td>No. <a href="style_animatable-properties.php"><i>See</i> <em>animatable properties</em></a>.</td>
						</tr>
                        <tr>
                            <th>Version:</th>
                            <td>CSS 2, 3</td>
                        </tr>
                    </table>
                </div>	
                <hr />
                <h2>Syntax</h2>
                <p>The syntax of the property is given with:</p>
                <div class="shadow">
                    <div class="syntax">
                        <table>
                            <tr>
                                <td><span class="property">cursor</span>:&nbsp;</td>
                                <td>[url(<i>address of cursor file</i>),]<sup>0 or more times</sup> | <span class="keyword">auto</span> | <span class="keyword">default</span> | <span class="keyword">none</span> |
								<span class="keyword">context-menu</span> | <span class="keyword">help</span> | <span class="keyword">pointer</span> | <span class="keyword">progress</span> | <span class="keyword">wait</span> | <span class="keyword">cell</span> |  <span class="keyword">crosshair</span> | <span class="keyword">text</span> | <span class="keyword">vertical-text</span> |
								<span class="keyword">alias</span> | <span class="keyword">copy</span> | <span class="keyword">move</span> | <span class="keyword">no-drop</span> | <span class="keyword">not-allowed</span> | <span class="keyword">grab</span> | <span class="keyword">grabbing</span> | 
								<span class="keyword">e-resize</span> | <span class="keyword">n-resize</span> | <span class="keyword">ne-resize</span> | <span class="keyword">nw-resize</span> | 
                                <span class="keyword">s-resize</span> | <span class="keyword">se-resize</span> | <span class="keyword">sw-resize</span> | <span class="keyword">w-resize</span> |
								<span class="keyword">ew-resize</span> | <span class="keyword">ns-resize</span> | <span class="keyword">nesw-resize</span> | <span class="keyword">nwse-resize</span> | <span class="keyword">col-resize</span> | <span class="keyword">row-resize</span> |
								<span class="keyword">all-scroll</span> | <span class="keyword">zoom-in</span> | <span class="keyword">zoom-out</span> |
                                <a href="../definitions.php#initial">initial</a> | <a href="../definitions.php#inherit">inherit</a></td>
                            </tr>                        
						</table>
                    </div>
                </div>
                <p>The example below shows the <code>cursor</code> property in action.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9e5d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        h1 {
    cursor: copy;
}
p {
    cursor: help;
}
a {
    cursor: url("custom.gif"), url("custom.cur"), default;
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
                <p>The cursor property handles a comma-separated list of user-defined cursors values followed by the "generic cursor". If the first cursor is specified incorrectly or can't be found, the next cursor in the comma-separated list will be used, and so on until a usable cursor is found.</p>
                <p>If none of the user-defined cursors is valid or supported by the browser, the generic cursor at the end of the list will be used instead. <a href="../des-css/style_cursors.php">Learn more.</a></p>
                <hr />
                <h2>Property Values</h2>
                <p>The following table describes the values of this property.</p>
                <div class="shadow space">
                    <table class="data">
                        <tr>
                            <th style="width: 100px;">Value</th>
                            <th>Look</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td colspan="3" class="section"><strong>General</strong></td>
                        </tr>
                        <tr>
                            <td style="cursor: auto;"><code>auto</code></td>
                            <td>&nbsp;</td>
                            <td>The browser determines the cursor to display based on the current context. E.g. equivalent to text when hovering text. This is default.</td>
                        </tr>
						<tr>
                            <td style="cursor: default;"><code>default</code></td>
                            <td><img src="../assets/images/default-cursor.gif" alt="Default Cursor" /></td>
                            <td>The default cursor for the platform, without regard for the context, typically an arrow.</td>
                        </tr>
						<tr>
                            <td style="cursor: none;"><code>none</code></td>
                            <td>&nbsp;</td>
                            <td>No cursor is rendered.</td>
                        </tr>
						<tr>
							<td style="cursor: initial;"><code>initial</code></td>
							<td></td>
							<td>Sets this property to its default value.</td>
						</tr>
						<tr>
                            <td style="cursor: inherit;"><code>inherit</code></td>
							<td></td>
                            <td>If specified, the associated element takes the <a href="../definitions.php#computed-value">computed value</a> of its parent element <code>cursor</code> property.</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="section"><strong>Links & status Cursors</strong></td>
                        </tr>
						<tr>
                            <td style="cursor: context-menu;"><code>context-menu</code></td>
                            <td><img src="../assets/images/context-menu-cursor.gif" alt="Context-menu Cursor" /></td>
                            <td>Indicates that a context-menu is available.</td>
                        </tr>						
                        <tr>
                            <td style="cursor: help;"><code>help</code></td>
                            <td><img src="../assets/images/help-cursor.gif" alt="Help Cursor" /></td>
                            <td>Indicates that help is available.</td>
                        </tr>
                        <tr>
                            <td style="cursor: pointer;"><code>pointer</code></td>
                            <td><img src="../assets/images/pointer-cursor.gif" alt="Pointer Cursor" /></td>
                            <td>A cursor that indicates a link, typically a hand with an extended index finger.</td>
                        </tr>
                        <tr>
                            <td style="cursor: progress;"><code>progress</code></td>
                            <td><img src="../assets/images/progress-cursor.gif" alt="Progress Cursor" /></td>
                            <td>A progress indicator. The program is performing some processing but the user can still interact with the interface (unlike for <code>wait</code>).</td>
                        </tr>
                        <tr>
                            <td style="cursor: wait;"><code>wait</code></td>
                            <td><img src="../assets/images/wait-cursor.gif" alt="Wait Cursor" /></td>
                            <td>Indicates that the program is busy and the user should wait. </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="section"><strong>Selection Cursors</strong></td>
                        </tr>
						<tr>
                            <td style="cursor: cell;"><code>cell</code></td>
                            <td><img src="../assets/images/cell-cursor.gif" alt="Cell Cursor" /></td>
                            <td>Indicates that a cell (or set of cells) can be selected.</td>
                        </tr>
                        <tr>
                            <td style="cursor: crosshair;"><code>crosshair</code></td>
                            <td><img src="../assets/images/crosshair-cursor.gif" alt="Crosshair Cursor" /></td>
                            <td>A simple crosshair. Often used to indicate selection in a bitmap.</td>
                        </tr>
                        <tr>
                            <td style="cursor: text;"><code>text</code></td>
                            <td><img src="../assets/images/text-cursor.gif" alt="Text Cursor" /></td>
                            <td>Indicates text that can be selected, typically an I-beam.</td>
                        </tr>
						<tr>
                            <td style="cursor: vertical-text;"><code>vertical-text</code></td>
                            <td><img src="../assets/images/vertical-text-cursor.gif" alt="Vertical-text Cursor" /></td>
                            <td>Indicates that vertical text can be selected, a sideways I-beam.</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="section"><strong>Drag and Drop Cursors</strong></td>
                        </tr>
						<tr>
                            <td style="cursor: alias;"><code>alias</code></td>
                            <td><img src="../assets/images/alias-cursor.gif" alt="Alias Cursor" /></td>
                            <td>Indicates that an alias or shortcut is to be created.</td>
                        </tr>
						<tr>
                            <td style="cursor: copy;"><code>copy</code></td>
                            <td><img src="../assets/images/copy-cursor.gif" alt="Copy Cursor" /></td>
                            <td>Indicates that something can be copied.</td>
                        </tr>
                        <tr>
                            <td style="cursor: move;"><code>move</code></td>
                            <td><img src="../assets/images/move-cursor.gif" alt="Move Cursor" /></td>
                            <td>Indicates that the hovered object can be moved.</td>
                        </tr>
						<tr>
                            <td style="cursor: no-drop;"><code>no-drop</code></td>
                            <td><img src="../assets/images/no-drop-cursor.gif" alt="No-drop Cursor" /></td>
                            <td>Indicates that the dragged item cannot be dropped at the current location.</td>
                        </tr>
						<tr>
                            <td style="cursor: not-allowed;"><code>not-allowed</code></td>
                            <td><img src="../assets/images/not-allowed-cursor.gif" alt="Not-allowed Cursor" /></td>
                            <td>Indicates that something cannot be done.</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="section"><strong>Resizing & scrolling Cursors</strong></td>
                        </tr>
						<tr>
                            <td style="cursor: all-scroll;"><code>all-scroll</code></td>
                            <td><img src="../assets/images/all-scroll-cursor.gif" alt="All-scroll Cursor" /></td>
                            <td>Indicates that something can be scrolled in any direction (panned).</td>
                        </tr>
						<tr>
                            <td style="cursor: col-resize;"><code>col-resize</code></td>
                            <td><img src="../assets/images/col-resize-cursor.gif" alt="Col-resize Cursor" /></td>
                            <td>Indicates that the column can be resized horizontally.</td>
                        </tr>
						<tr>
                            <td style="cursor: row-resize;"><code>row-resize</code></td>
                            <td><img src="../assets/images/row-resize-cursor.gif" alt="Row-resize Cursor" /></td>
                            <td>Indicates that the row can be resized vertically.</td>
                        </tr>
                        <tr>
                            <td style="cursor: n-resize;"><code>n-resize</code></td>
                            <td><img src="../assets/images/n-resize-cursor.gif" alt="N-resize Cursor" /></td>
							<td>Indicates that some edge is to be moved up (north).</td>
                        </tr>
                        <tr>
							<td style="cursor: e-resize;"><code>e-resize</code></td>
                            <td><img src="../assets/images/e-resize-cursor.gif" alt="E-resize Cursor" /></td>
							<td>Indicates that some edge is to be moved right (east).</td>
                        </tr>
						<tr>
                            <td style="cursor: s-resize;"><code>s-resize</code></td>
                            <td><img src="../assets/images/s-resize-cursor.gif" alt="S-resize Cursor" /></td>
							<td>Indicates that some edge is to be moved down (south).</td>
                        </tr>
						<tr>
                            <td style="cursor: w-resize;"><code>w-resize</code></td>
                            <td><img src="../assets/images/w-resize-cursor.gif" alt="W-resize Cursor" /></td>
							<td>Indicates that some edge is to be moved left (west).</td>
                        </tr>
                        <tr>
                            <td style="cursor: ne-resize;"><code>ne-resize</code></td>
                            <td><img src="../assets/images/ne-resize-cursor.gif" alt="NE-resize Cursor" /></td>
							<td>Indicates that some edge is to be moved up and right (north/east).</td>
                        </tr>
                        <tr>
                            <td style="cursor: nw-resize;"><code>nw-resize</code></td>
                            <td><img src="../assets/images/nw-resize-cursor.gif" alt="NW-resize Cursor" /></td>
							<td>Indicates that some edge is to be moved up and left (north/west).</td>
                        </tr>                        
                        <tr>
                            <td style="cursor: se-resize;"><code>se-resize</code></td>
                            <td><img src="../assets/images/se-resize-cursor.gif" alt="SE-resize Cursor" /></td>
							<td>Indicates that some edge is to be moved down and right (south/east).</td>
                        </tr>
                        <tr>
                            <td style="cursor: sw-resize;"><code>sw-resize</code></td>
                            <td><img src="../assets/images/sw-resize-cursor.gif" alt="SW-resize Cursor" /></td>
							<td>Indicates that some edge is to be moved down and left (south/west).</td>
                        </tr>
						<tr>
                            <td style="cursor: ew-resize;"><code>ew-resize</code></td>
                            <td><img src="../assets/images/ew-resize-cursor.gif" alt="EW-resize Cursor" /></td>
							<td rowspan="4">Indicates a bidirectional resize cursor.</td>
                        </tr>
						<tr>
                            <td style="cursor: ns-resize;"><code>ns-resize</code></td>
                            <td><img src="../assets/images/ns-resize-cursor.gif" alt="NS-resize Cursor" /></td>
                        </tr>
						<tr>
                            <td style="cursor: nesw-resize;"><code>nesw-resize</code></td>
                            <td><img src="../assets/images/nesw-resize-cursor.gif" alt="NESW-resize Cursor" /></td>
                        </tr>
						<tr>
                            <td style="cursor: nwse-resize;"><code>nwse-resize</code></td>
                            <td><img src="../assets/images/nwse-resize-cursor.gif" alt="NWSE-resize Cursor" /></td>
                        </tr>
						<tr>
                            <td colspan="3" class="section"><strong>Zoom and Grab Cursors</strong></td>
                        </tr>
						<tr>
                            <td style="cursor: zoom-in;"><code>zoom-in</code></td>
                            <td><img src="../assets/images/zoom-in-cursor.gif" alt="Zoom-in Cursor" /></td>
                            <td>Indicates that something can be zoomed in.</td>
                        </tr>
						<tr>
                            <td style="cursor: zoom-out;"><code>zoom-out</code></td>
                            <td><img src="../assets/images/zoom-out-cursor.gif" alt="Zoom-out Cursor" /></td>
                            <td>Indicates that something can be zoomed out.</td>
                        </tr>
						<tr>
                            <td style="cursor: grab;"><code>grab</code></td>
                            <td><img src="../assets/images/grab-cursor.gif" alt="Grab Cursor" /></td>
                            <td>Indicates that something can be grabbed (dragged to be moved).</td>
                        </tr>
						<tr>
                            <td style="cursor: grabbing;"><code>grabbing</code></td>
                            <td><img src="../assets/images/grabbing-cursor.gif" alt="Grabbing Cursor" /></td>
                            <td>Indicates that something is grabbed.</td>
                        </tr>
                    </table>                
				</div>
                <hr />
                <h2>Browser Compatibility</h2>
                <p>The <code>cursor</code> property is supported in all major modern browsers.</p>
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
                                        <li>Internet Explorer <span>4+</span></li>
                                        <li>Apple Safari <span>1.2+</span></li>
                                        <li>Opera <span>7+</span></li>
                                    </ul>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr />
                <h2>Further Reading</h2>
                <p>See tutorial on: <a href="../des-css/style_cursors.php">CSS Cursors</a>.</p> 
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="style_counter-reset-property.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="style_direction-property.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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