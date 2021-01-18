
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="HTML5 Event Attributes">
      <meta name="keywords" content="html,html5,HTML5 Event Attributes">
	  <meta name="author" content="webschooltoday.com">
    <title>HTML5 Event Attributes - WebSchool Today</title>
  	<?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">HTML5 Event Attributes</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="ht_language-codes.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

            	<a href="ht_color-picker.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>HTML5 <span>Event</span> Attributes</h1>
				<p class="summary">The HTML5 event attributes are global and can be applied to most of the elements.</p>
				<h2 id="global-attributes">Event Attributes in HTML5</h2>
				<p class="break">The following event attributes can be applied to the most of the elements for the execution of JavaScript when certain events occur, with some exceptions where it is not relevant such as elements found inside the <code><a href="ht_head-tag.php">&lt;head&gt;</a></code> section, e.g. <code><a href="ht_title-tag.php">&lt;title&gt;</a></code>, <code><a href="ht_base-tag.php">&lt;base&gt;</a></code>, <code><a href="ht_link-tag.php">&lt;link&gt;</a></code> etc.</p>
				<h2>Window Events</h2>
				<p>Events related to the <code>window</code> object (applies to the <code><a href="ht_body-tag.php">&lt;body&gt;</a></code> tag):</p>
				<div class="shadow">
					<table class="data">
						<thead>
							<tr>
								<th style="width: 125px;">Attribute</th>
								<th>Value</th>
								<th>Description</th>
							</tr>
						</thead>					
						<tbody>
							<tr>
								<td>onafterprint</td>
								<td><i>script</i></td>
								<td>Fires after the associated document is printed.</td>
							</tr>
							<tr>
								<td>onbeforeprint</td>
								<td><i>script</i></td>
								<td>Fires before the associated document is printed.</td>
							</tr>
							<tr>
								<td>onbeforeunload</td>
								<td><i>script</i></td>
								<td>Fires before a document being unloaded.</td>
							</tr>
							<tr>
								<td>onerror</td>
								<td><i>script</i></td>
								<td>Fires when document errors occur.</td>
							</tr>
							<tr>
								<td>onhashchange</td>
								<td><i>script</i></td>
								<td>Fires when the fragment identifier part of the document's URL i.e. the portion of a URL that follows the sign (#) changes.</td>
							</tr>
							<tr>
								<td>onload</td>
								<td><i>script</i></td>
								<td>Fires when the document has finished loading.</td>
							</tr>
							<tr>
								<td>onmessage</td>
								<td><i>script</i></td>
								<td>Fires when the message event occurs i.e. when user sends a cross-document message or a message is sent from a worker with <code>postMessage()</code> method. See <a href="../des-html/htl_web-workers.php">HTML5 Web Workers</a>.</td>
							</tr>
							<tr>
								<td>onoffline</td>
								<td><i>script</i></td>
								<td>Fires when the network connection fails and the browser starts working offline.</td>
							</tr>
							<tr>
								<td>ononline</td>
								<td><i>script</i></td>
								<td>Fires when the network connections returns and the browser starts working online.</td>
							</tr>
							<tr>
								<td>onpagehide</td>
								<td><i>script</i></td>
								<td>Fires when the page is hidden, such as when a user is moving to another webpage.</td>
							</tr>
							<tr>
								<td>onpageshow</td>
								<td><i>script</i></td>
								<td>Fires when the page is shown, such as when a user navigates to a webpage.</td>
							</tr>
							<tr>
								<td>onpopstate</td>
								<td><i>script</i></td>
								<td>Fires when changes are made to the active history.</td>
							</tr>
							<tr>
								<td>onresize</td>
								<td><i>script</i></td>
								<td>Fires when the browser window is resized.</td>
							</tr>
							<tr>
								<td>onstorage</td>
								<td><i>script</i></td>
								<td>Fires when a <a href="../des-html/htl_web-storage.php">Web Storage</a> area is updated.</td>
							</tr>
							<tr>
								<td>onunload</td>
								<td><i>script</i></td>
								<td>Fires immediately before the document is unloaded or the browser window is closed.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<hr />
				<h2>Form Events</h2>
				<p>Events that occur due to the user interacting with the HTML form controls.</p>
				<div class="shadow">
					<table class="data">
						<thead>
							<tr>
								<th style="width: 125px;">Attribute</th>
								<th>Value</th>
								<th>Description</th>
							</tr>
						</thead>        
						<tbody>
							<tr>
								<td>onblur</td>
								<td><i>script</i></td>
								<td>Fires when an element loses focus.</td>
							</tr>
							<tr>
								<td>onchange</td>
								<td><i>script</i></td>
								<td>Fires when the value or state of the element is changed.</td>
							</tr>						
							<tr>
								<td>onfocus</td>
								<td><i>script</i></td>
								<td>Fires when the element receives focus.</td>
							</tr>
							<tr>
								<td>oninput</td>
								<td><i>script</i></td>
								<td>Fires when the value of an element is changed by the user.</td>
							</tr>
							<tr>
								<td>oninvalid</td>
								<td><i>script</i></td>
								<td>Fires when a submittable element do not satisfy their constraints during form validation.</td>
							</tr>
							<tr>
								<td>onreset</td>
								<td><i>script</i></td>
								<td>Fires when the user resets a form.</td>
							</tr>
							<tr>
								<td>onselect</td>
								<td><i>script</i></td>
								<td>Fires when some text is being selected or the current selection is changed by the user.</td>
							</tr>
							<tr>
								<td>onsearch</td>
								<td><i>script</i></td>
								<td>Fires when the user writes something in a <a href="../des-html/htl_new-input-types.php#search-input">search input</a> field.</td>
							</tr>
							<tr>
								<td>onsubmit</td>
								<td><i>script</i></td>
								<td>Fires when a form is submitted.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<hr />
				<h2>Mouse Events</h2>
				<p>Events that occur due to the user interacting with a pointing device such as a mouse:</p>
				<div class="shadow">
					<table class="data">
						<thead>
							<tr>
								<th style="width: 125px;">Attribute</th>
								<th>Value</th>
								<th>Description</th>
							</tr>  
						</thead>
						<tbody>
							<tr>
								<td>onclick</td>
								<td><i>script</i></td>
								<td>Fires when the user clicks the left mouse button on the element.</td>
							</tr>
							<tr>
								<td>ondblclick</td>
								<td><i>script</i></td>
								<td>Fires when the user double-clicks on the element.</td>
							</tr>
							<tr id="contextmenu">
								<td>oncontextmenu</td>
								<td><i>script</i></td>
								<td>Fires when a context menu is triggered by the user through right-click on the element.</td>
							</tr>
							<tr>
								<td>ondrag</td>
								<td><i>script</i></td>
								<td>Fires when the user drags an element. The <code>ondrag</code> event fires throughout the drag operation.</td>
							</tr>
							<tr>
								<td>ondragend</td>
								<td><i>script</i></td>
								<td>Fires when the user releases the mouse button at the end of a drag operation.</td>
							</tr>
							<tr>
								<td>ondragenter</td>
								<td><i>script</i></td>
								<td>Fires when the user drags an element to a valid drop target.</td>
							</tr>
							<tr>
								<td>ondragleave</td>
								<td><i>script</i></td>
								<td>Fires when an element leaves a valid drop target during a drag operation.</td>
							</tr>
							<tr>
								<td>ondragover</td>
								<td><i>script</i></td>
								<td>Fires when an element is being dragged over a valid drop target.</td>
							</tr>
							<tr>
								<td>ondragstart</td>
								<td><i>script</i></td>
								<td>Fires when the user starts to drag a text selection or selected element.</td>
							</tr>
							<tr>
								<td>ondrop</td>
								<td><i>script</i></td>
								<td>Fires when the mouse button is released during a drag-and-drop operation i.e. when dragged element is being dropped.</td>
							</tr>
							<tr>
								<td>onmousedown</td>
								<td><i>script</i></td>
								<td>Fires when the mouse button is pressed over an element.</td>
							</tr>
							<tr>
								<td>onmousemove</td>
								<td><i>script</i></td>
								<td>Fires when the user moves the mouse pointer over an element.</td>
							</tr>
							<tr>
								<td>onmouseout</td>
								<td><i>script</i></td>
								<td>Fires when the user moves the mouse pointer outside the boundaries of an element.</td>
							</tr>
							<tr>
								<td>onmouseover</td>
								<td><i>script</i></td>
								<td>Fires when the user moves the mouse pointer onto an element.</td>
							</tr>
							<tr>
								<td>onmouseup</td>
								<td><i>script</i></td>
								<td>Fires when the user releases the mouse button while the mouse is over an element.</td>
							</tr>
							<tr>
								<td>onmousewheel</td>
								<td><i>script</i></td>
								<td><a class="deprecated" href="../definitions.php#deprecated">Deprecated</a> Use the <code>onwheel</code> attribute instead.</td>
							</tr>
							<tr>
								<td>onscroll</td>
								<td><i>script</i></td>
								<td>Fires when the user scrolls the contents of an element by scrolling the element's scrollbar.</td>
							</tr>
							<tr>
								<td>onshow</td>
								<td><i>script</i></td>
								<td>Fires when a <code><a href="#contextmenu">contextmenu</a></code> event was fired onto an element that has a <code>contextmenu</code> attribute.</td>
							</tr>
							<tr>
								<td>ontoggle</td>
								<td><i>script</i></td>
								<td>Fires when the user opens or closes the <code><a href="htl_details-tag.php">&lt;details&gt;</a></code> element.</td>
							</tr>
							<tr>
								<td>onwheel</td>
								<td><i>script</i></td>
								<td>Fires when the user scrolls the contents of an element by rolling the mouse wheel up or down over an element.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<hr />
				<h2>Keyboard Events</h2>
				<p>Events that occur by the user interaction with the keyboard:</p>
				<div class="shadow">
					<table class="data">
						<thead>
							<tr>
								<th style="width: 125px;">Attribute</th>
								<th>Value</th>
								<th>Description</th>
							</tr>
						</thead>        
						<tbody>
							<tr>
								<td>onkeydown</td>
								<td><i>script</i></td>
								<td>Fires when the user presses a key.</td>
							</tr>
							<tr>
								<td>onkeypress</td>
								<td><i>script</i></td>
								<td>Fires when the user presses an alphanumeric key.</td>
							</tr>
							<tr>
								<td>onkeyup</td>
								<td><i>script</i></td>
								<td>Fires when the user releases a key.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<hr />
				<h2>Clipboard Events</h2>
				<p>Events related to modification of the clipboard, that is copy, cut and paste:</p>
				<div class="shadow">
					<table class="data">
						<thead>
							<tr>
								<th style="width: 125px;">Attribute</th>
								<th>Value</th>
								<th>Description</th>
							</tr>
						</thead>    
						<tbody>
							<tr>
								<td>oncopy</td>
								<td><i>script</i></td>
								<td>Fires when the user copies the element or selection, adding it to the system clipboard.</td>
							</tr>
							<tr>
								<td>oncut</td>
								<td><i>script</i></td>
								<td>Fires when the element or selection is removed from the document and added to the system clipboard.</td>
							</tr>
							<tr>
								<td>onpaste</td>
								<td><i>script</i></td>
								<td>Fires when the user pastes data, transferring the data from the system clipboard to the document.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<hr />
				<h2>Media Events</h2>
				<p>Events that occur when handling media elements that are embedded inside the HTML documents, such as <code><a href="htl_audio-tag.php">&lt;audio&gt;</a></code> and <code><a href="htl_video-tag.php">&lt;video&gt;</a></code> elements:</p>
				<div class="shadow">
					<table class="data">
						<thead>
							<tr>
								<th style="width: 125px;">Attribute</th>
								<th>Value</th>
								<th>Description</th>
							</tr>
						</thead>        
						<tbody>
							<tr>
								<td>onabort</td>
								<td><i>script</i></td>
								<td>Fires when playback is aborted, but not due to an error.</td>
							</tr>
							<tr>
								<td>oncanplay</td>
								<td><i>script</i></td>
								<td>Fires when enough data is available to play the media, at least for a couple of frames, but would require further buffering.</td>
							</tr>
							<tr>
								<td>oncanplaythrough</td>
								<td><i>script</i></td>
								<td>Fires when entire media can be played to the end without requiring to stop for further buffering.</td>
							</tr>
							<tr>
								<td>oncuechange</td>
								<td><i>script</i></td>
								<td>Fires when the text track cue in a <code><a href="htl_track-tag.php">&lt;track&gt;</a></code> element changes.</td>
							</tr>
							<tr>
								<td>ondurationchange</td>
								<td><i>script</i></td>
								<td>Fires when the duration of the media changes.</td>
							</tr>
							<tr>
								<td>onemptied</td>
								<td><i>script</i></td>
								<td>Fires when the media element is reset to its initial state, either because of a fatal error during load, or because the <code>load()</code> method is called to reload it.</td>
							</tr>
							<tr>
								<td>onended</td>
								<td><i>script</i></td>
								<td>Fires when the end of playback is reached.</td>
							</tr>
							<tr>
								<td>onerror</td>
								<td><i>script</i></td>
								<td>Fires when an error occurs while fetching the media data.</td>
							</tr>
							<tr>
								<td>onloadeddata</td>
								<td><i>script</i></td>
								<td>Fires when media data is loaded at the current playback position.</td>
							</tr>
							<tr>
								<td>onloadedmetadata</td>
								<td><i>script</i></td>
								<td>Fires when metadata of the media (like duration and dimensions) has finished loading.</td>
							</tr>
							<tr>
								<td>onloadstart</td>
								<td><i>script</i></td>
								<td>Fires when loading of the media begins.</td>
							</tr>
							<tr>
								<td>onpause</td>
								<td><i>script</i></td>
								<td>Fires when playback is paused, either by the user or programmatically.</td>
							</tr>
							<tr>
								<td>onplay</td>
								<td><i>script</i></td>
								<td>Fires when playback of the media starts after having been paused i.e. when the <code>play()</code> method is requested.</td>
							</tr>
							<tr>
								<td>onplaying</td>
								<td><i>script</i></td>
								<td>Fires when the audio or video has started playing.</td>
							</tr>
							<tr>
								<td>onprogress</td>
								<td><i>script</i></td>
								<td>Fires periodically to indicate the progress while downloading the media data.</td>
							</tr>
							<tr>
								<td>onratechange</td>
								<td><i>script</i></td>
								<td>Fires when the playback rate or speed is increased or decreased, like slow motion or fast forward mode.</td>
							</tr>
							<tr>
								<td>onseeked</td>
								<td><i>script</i></td>
								<td>Fires when the seek operation ends.</td>
							</tr>
							<tr>
								<td>onseeking</td>
								<td><i>script</i></td>
								<td>Fires when the current playback position is moved.</td>
							</tr>
							<tr>
								<td>onstalled</td>
								<td><i>script</i></td>
								<td>Fires when the download has stopped unexpectedly.</td>
							</tr>
							<tr>
								<td>onsuspend</td>
								<td><i>script</i></td>
								<td>Fires when the loading of the media is intentionally stopped.</td>
							</tr>
							<tr>
								<td>ontimeupdate</td>
								<td><i>script</i></td>
								<td>Fires when the playback position changed, like when the user fast forwards to a different playback position.</td>
							</tr>
							<tr>
								<td>onvolumechange</td>
								<td><i>script</i></td>
								<td>Fires when the volume is changed, or playback is muted or unmuted.</td>
							</tr>
							<tr>
								<td>onwaiting</td>
								<td><i>script</i></td>
								<td>Fires when playback stops because the next frame of a video resource is not available.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> The event attributes described above, however applied to all the HTML elements, though they are not useful for all elements. For example, only media elements will receive a volumechange event fired by the browser.</p>
						</div>
					</div>
				</div>
				<div class="bottom-link clearfix">
					<a href="ht_color-picker.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="ht_language-codes.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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