<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="jQuery Event Object">
	  <meta name="keywords" content="jquery,jq,js,jQuery Event Object">
	  <meta name="author" content="webschooltoday.com">
    <title>jQuery Event Object - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">jQuery Event Object</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "info_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="javascript:void(0);" class="next-page disabled" title="Go to Previous Page : Disabled"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="jq_event-methods.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery <span>Event</span> Object</h1>
				<p class="summary">The following section contains a brief overview of jQuery event object.</p>
				<h2 class="order-info"><strong>jQuery Event Object</strong></h2>
				<p>This section contains a brief overview of jQuery's event object and its properties.</p>
				<div class="shadow">
					<table class="data">
						<tr>
							<th>Method</th>
							<th>Description</th>
						</tr>						
						<tr>
							<td><code>event.currentTarget</code></td>
							<td>The current DOM element within the event bubbling phase.</td>
						</tr>
						<tr>
							<td><code>event.data</code></td>
							<td>An optional object of data passed to an event method when the current executing handler is bound.</td>
						</tr>
						<tr>
							<td><code>event.delegateTarget</code></td>
							<td>Returns the element where the currently-called jQuery event handler was attached.</td>
						</tr>
						<tr>
							<td><code>event.isDefaultPrevented()</code></td>
							<td>Returns whether <code>event.preventDefault()</code> was ever called on this event object.</td>
						</tr>
						<tr>
							<td><code>event.isImmediatePropagationStopped()</code></td>
							<td>Returns whether <code>event.stopImmediatePropagation()</code> was ever called on this event object.</td>
						</tr>
						<tr>
							<td><code>event.isPropagationStopped()</code></td>
							<td>Returns whether <code>event.stopPropagation()</code> was ever called on this event object.</td>
						</tr>
						<tr>
							<td><code>event.metaKey</code></td>
							<td>Indicates whether the Windows key or  Command key (on Mac keyboard) was pressed when the event fired.</td>
						</tr>
						<tr>
							<td><code>event.namespace</code></td>
							<td>Returns the namespace specified when the event was triggered.</td>
						</tr>
						<tr>
							<td><code>event.pageX</code></td>
							<td>Returns the mouse position relative to the left edge of the document.</td>
						</tr>
						<tr>
							<td><code>event.pageY</code></td>
							<td>Returns the mouse position relative to the top edge of the document.</td>
						</tr>
						<tr>
							<td><code>event.preventDefault()</code></td>
							<td>If this method is called, the default action of the event will not be triggered.</td>
						</tr>
						<tr>
							<td><code>event.relatedTarget</code></td>
							<td>Returns the other DOM element involved in the event, if any.</td>
						</tr>
						<tr>
							<td><code>event.result</code></td>
							<td>The last or previous value returned by an event handler that was triggered by this event.</td>
						</tr>
						<tr>
							<td><code>event.stopImmediatePropagation()</code></td>
							<td>Keeps the rest of the handlers from being executed and prevents the event from bubbling up the DOM tree.</td>
						</tr>
						<tr>
							<td><code>event.stopPropagation()</code></td>
							<td>Prevents the event from bubbling up the DOM tree, preventing any parent handlers from being notified of the event.</td>
						</tr>
						<tr>
							<td><code>event.target</code></td>
							<td>Returns the DOM element that triggered the event.</td>
						</tr>
						<tr>
							<td><code>event.timeStamp</code></td>
							<td>Returns difference in milliseconds between the time the event is triggered and January 1, 1970.</td>
						</tr>
						<tr>
							<td><code>event.type</code></td>
							<td>Returns the type of event that was triggered.</td>
						</tr>
						<tr>
							<td><code>event.which</code></td>
							<td>Indicates the specific key or button that was pressed for key or mouse events.</td>
						</tr>
					</table>
				</div>
				<div class="bottom-link clearfix">
					<a href="jq_event-methods.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="javascript:void(0);" class="next-page-bottom disabled" title="Disabled" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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