<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Complete List of jQuery Selectors">
	  <meta name="keywords" content="jquery,jq,js,Complete List of jQuery Selectors">
	  <meta name="author" content="webschooltoday.com">
    <title>Complete List of jQuery Selectors - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Complete List of jQuery Selectors</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "info_jquery.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="jq_event-methods.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="javascript:void(0);" class="previous-page disabled" title="Go to Previous Page : Disabled"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
				<h1>jQuery <span>Selectors</span></h1>
				<p class="summary">The following section contains a brief overview of jQuery selectors.</p>
				<h2 class="order-info"><strong>jQuery Selectors</strong> <span class="rounded toggle">Order by Alphabet</span></h2>
				<div class="jq_selectors order-by-category">
					<p>This section contains a comprehensive list of selectors belonging to the latest jQuery JavaScript library. All the selectors are grouped into categories.</p>
					<h2>Basic Selectors</h2>
					<div class="shadow">
						<table class="data">
							<tr>
								<th style="width: 100px;">Selector</th>
								<th style="width: 150px;">Example</th>
								<th>Description</th>
							</tr>
							<tr>
								<td><code>*</code></td>
								<td><code>$("*")</code></td>
								<td>Selects all elements.</td>
							</tr>
							<tr>
								<td><code><em>#id</em></code></td>
								<td><code>$("#foo")</code></td>
								<td>Selects all elements with the <code>id="foo"</code>.</td>
							</tr>
							<tr>
								<td><code><em>.class</em></code></td>
								<td><code>$(".bar")</code></td>
								<td>Selects all elements with the <code>class="bar"</code>.</td>
							</tr>
							<tr>
								<td><code><i>element</i></code></td>
								<td><code>$("p")</code></td>
								<td>Selects all <code>&lt;p&gt;</code> elements.</td>
							</tr>
							<tr>
								<td><code><i>selector1, selector2, selectorN</i></code></td>
								<td><code>$("h1,&thinsp;p.bar,&thinsp;span")</code></td>
								<td>Selects all <code>&lt;h1&gt;</code> and <code>&lt;span&gt;</code>, but only that <code>&lt;p&gt;</code> elements that has the <code>class="bar"</code>.</td>
							</tr>
						</table>
					</div>					
					<h2>Basic Filter Selectors</h2>
					<div class="shadow">
						<table class="data">
							<tr>
								<th style="width: 100px;">Selector</th>
								<th style="width: 150px;">Example</th>
								<th>Description</th>
							</tr>						
							<tr>
								<td><code>:first</code></td>
								<td><code>$("p:first")</code></td>
								<td>Selects the first <code>&lt;p&gt;</code> element.</td>
							</tr>
							<tr>
								<td><code>:last</code></td>
								<td><code>$("p:last")</code></td>
								<td>Selects the last <code>&lt;p&gt;</code> element.</td>
							</tr>
							<tr>
								<td><code>:even</code></td>
								<td><code>$("tr:even")</code></td>
								<td>Selects all even <code>&lt;tr&gt;</code> elements, zero-indexed.</td>
							</tr>
							<tr>
								<td><code>:odd</code></td>
								<td><code>$("tr:odd")</code></td>
								<td>Selects all odd <code>&lt;tr&gt;</code> elements, zero-indexed.</td>
							</tr>
							<tr>
								<td><code>:eq()</code></td>
								<td><code>$("tr:eq(1)")</code></td>
								<td>Select the 2nd <code>&lt;tr&gt;</code> element within the matched set, zero-based index.</td>
							</tr>
							<tr>
								<td><code>:not()</code></td>
								<td><code>$("p:not(:empty)")</code></td>
								<td>Select all <code>&lt;p&gt;</code> elements that are not empty.</td>
							</tr>
							<tr>
								<td><code>:lt()</code></td>
								<td><code>$("ul li:lt(3)")</code></td>
								<td>Select all <code>&lt;li&gt;</code> elements at an index less than three within the matched set (i.e. selects 1st, 2nd, 3rd list elements), zero-based index.</td>
							</tr>
							<tr>
								<td><code>:gt()</code></td>
								<td><code>$("ul li:gt(3)")</code></td>
								<td>Select all <code>&lt;li&gt;</code> elements at an index greater than three within the matched set (i.e. selects 4th, 5th, ... list elements), zero-based index.</td>
							</tr>
							<tr>
								<td><code>:header</code></td>
								<td><code>$(":header")</code></td>
								<td>Selects all elements that are headers, like <code>&lt;h1&gt;</code>, <code>&lt;h2&gt;</code>, <code>&lt;h3&gt;</code> and so on.</td>
							</tr>
							<tr>
								<td><code>:lang()</code></td>
								<td><code>$(":lang(en)")</code></td>
								<td>Selects all elements that have a language value "<code>en</code>" i.e. <code>lang="en"</code>,  <code>lang="en-us"</code> etc.</td>
							</tr>
							<tr>
								<td><code>:root</code></td>
								<td><code>$(":root")</code></td>
								<td>Selects the document's root element which is always <code>&lt;html&gt;</code> element in a HTML document.</td>
							</tr>
							<tr>
								<td><code>:animated</code></td>
								<td><code>$(":animated")</code></td>
								<td>Select all elements that are animating at the time the selector is run.</td>
							</tr>
						</table>
					</div>
					<h2>Child Filter Selectors</h2>
					<div class="shadow">
						<table class="data">
							<tr>
								<th style="width: 155px;">Selector</th>
								<th style="width: 200px;">Example</th>
								<th>Description</th>
							</tr>
							<tr>
								<td><code>:first-child</code></td>
								<td><code>$("p:first-child")</code></td>
								<td>Selects all <code>&lt;p&gt;</code> elements that are the first child of their parent.</td>
							</tr>
							<tr>
								<td><code>:last-child</code></td>
								<td><code>$("p:last-child")</code></td>
								<td>Selects all <code>&lt;p&gt;</code> elements that are the last child of their parent.</td>
							</tr>
							<tr>
								<td><code>:nth-child(<i>n</i>)</code></td>
								<td><code>$("p:nth-child(3)")</code></td>
								<td>Selects all <code>&lt;p&gt;</code> elements that are the 3rd child of their parent.</td>
							</tr>
							<tr>
								<td><code>:only-child</code></td>
								<td><code>$("p:only-child")</code></td>
								<td>Selects all <code>&lt;p&gt;</code> elements that are the only child of their parent.</td>
							</tr>
							<tr>
								<td><code>:first-of-type</code></td>
								<td><code>$("p:first-of-type")</code></td>
								<td>Selects all <code>&lt;p&gt;</code> elements that are the first <code>&lt;p&gt;</code> element of their parent.</td>
							</tr>
							<tr>
								<td><code>:last-of-type</code></td>
								<td><code>$("p:last-of-type")</code></td>
								<td>Selects all <code>&lt;p&gt;</code> elements that are the last <code>&lt;p&gt;</code> element of their parent.</td>
							</tr>
							<tr>
								<td><code>:only-of-type</code></td>
								<td><code>$("p:only-of-type")</code></td>
								<td>Selects all <code>&lt;p&gt;</code> elements that have no siblings with the same element name.</td>
							</tr>
							<tr>
								<td><code>:nth-last-child(<i>n</i>)</code></td>
								<td><code>$("p:nth-last-child(3)")</code></td>
								<td>Selects all <code>&lt;p&gt;</code> elements that are the 3rd-child of their parent, counting from the last element to the first.</td>
							</tr>
							<tr>
								<td><code>:nth-of-type(<i>n</i>)</code></td>
								<td><code>$("p:nth-of-type(2)")</code></td>
								<td>Selects all <code>&lt;p&gt;</code> elements that are the 2nd <code>&lt;p&gt;</code> element of their parent</td>
							</tr>
							<tr>
								<td><code>:nth-last-of-type(<i>n</i>)</code></td>
								<td><code>$("p:nth-last-of-type(2)")</code></td>
								<td>Selects all <code>&lt;p&gt;</code> elements that are the 2nd-child of their parent, counting from the last element to the first.</td>
							</tr>
						</table>
					</div>
					<h2>Content Filter Selectors</h2>
					<div class="shadow">
						<table class="data">
							<tr>
								<th style="width: 100px;">Selector</th>
								<th style="width: 150px;">Example</th>
								<th>Description</th>
							</tr>
							<tr>
								<td><code>:contains()</code></td>
								<td><code>$('p:contains("Hello")')</code></td>
								<td>Selects all <code>&lt;p&gt;</code> elements that contains the text "Hello".</td>
							</tr>
							<tr>
								<td><code>:empty</code></td>
								<td><code>$("td:empty")</code></td>
								<td>Selects all <code>&lt;td&gt;</code> elements that are empty i.e that have no children including text.</td>
							</tr>
							<tr>
								<td><code>:has()</code></td>
								<td><code>$("p:has(img)")</code></td>
								<td>Selects all <code>&lt;p&gt;</code> elements which contain at least one <code>&lt;img&gt;</code> element.</td>
							</tr>
							<tr>
								<td><code>:parent</code></td>
								<td><code>$(":parent")</code></td>
								<td>Select all elements that have at least one child node either an element or text.</td>
							</tr>
						</table>
					</div>
					<h2>Form Selectors</h2>
					<div class="shadow">
						<table class="data">
							<tr>
								<th style="width: 100px;">Selector</th>
								<th style="width: 150px;">Example</th>
								<th>Description</th>
							</tr>
							<tr>
								<td><code>:input</code></td>
								<td><code>$(":input")</code></td>
								<td>Selects all input, textarea, select and button elements (basically selects all form controls).</td>
							</tr>
							<tr>
								<td><code>:text</code></td>
								<td><code>$(":text")</code></td>
								<td>Selects all input elements with <code>type="text"</code>.</td>
							</tr>
							<tr>
								<td><code>:password</code></td>
								<td><code>$(":password")</code></td>
								<td>Selects all input elements with <code>type="password"</code>.</td>
							</tr>
							<tr>
								<td><code>:radio</code></td>
								<td><code>$(":radio")</code></td>
								<td>Selects all input elements with <code>type="radio"</code>.</td>
							</tr>
							<tr>
								<td><code>:checkbox</code></td>
								<td><code>$(":checkbox")</code></td>
								<td>Selects all input elements with <code>type="checkbox"</code>.</td>
							</tr>							
							<tr>
								<td><code>:button</code></td>
								<td><code>$(":button")</code></td>
								<td>Selects all input and button elements with <code>type="button"</code>.</td>
							</tr>
							<tr>
								<td><code>:submit</code></td>
								<td><code>$(":submit")</code></td>
								<td>Selects all input and button elements with <code>type="submit"</code>.</td>
							</tr>
							<tr>
								<td><code>:reset</code></td>
								<td><code>$(":reset")</code></td>
								<td>Selects all input and button elements with <code>type="reset"</code>.</td>
							</tr>
							<tr>
								<td><code>:image</code></td>
								<td><code>$(":image")</code></td>
								<td>Selects all input elements with <code>type="image"</code>.</td>
							</tr>
							<tr>
								<td><code>:file</code></td>
								<td><code>$(":file")</code></td>
								<td>Selects all input elements with <code>type="file"</code>.</td>
							</tr>
							<tr>
								<td><code>:enabled</code></td>
								<td><code>$(":enabled")</code></td>
								<td>Selects all elements that are enabled.</td>
							</tr>
							<tr>
								<td><code>:disabled</code></td>
								<td><code>$(":disabled")</code></td>
								<td>Selects all elements that are disabled.</td>
							</tr>
							<tr>
								<td><code>:selected</code></td>
								<td><code>$(":selected")</code></td>
								<td>Selects all elements that are selected, only works for <code>&lt;option&gt;</code> elements.</td>
							</tr>
							<tr>
								<td><code>:checked</code></td>
								<td><code>$(":checked")</code></td>
								<td>Selects all elements that are checked or selected, works for checkboxes, radio buttons, and select elements.</td>
							</tr>
							<tr>
								<td><code>:focus</code></td>
								<td><code>$(":focus")</code></td>
								<td>Selects element if it is currently focused.</td>
							</tr>
						</table>
					</div>
					<hr />
					<h2>Attribute Selectors</h2>
					<div class="shadow">
						<table class="data">
							<tr>
								<th style="width: 155px;">Selector</th>
								<th style="width: 150px;">Example</th>
								<th>Description</th>
							</tr>
							<tr>
								<td><code>[attribute]</code></td>
								<td><code>$("[href]")</code></td>
								<td>Selects all elements with a <code>href</code> attribute, with any value.</td>
							</tr>
							<tr>
								<td><code>[attribute="value"]</code></td>
								<td><code>$('a[target="_blank"]')</code></td>
								<td>Selects all <code>&lt;a&gt;</code> elements that have the <code>target</code> attribute with a value equal to <code>"_blank"</code>.</td>
							</tr>
							<tr>
								<td><code>[attribute="value"]</code></td>
								<td><code>$('a[target!="_blank"]')</code></td>
								<td>Selects all <code>&lt;a&gt;</code> elements that don't have the <code>target</code> attribute, or if have don't with a value <code>"_blank"</code>.</td>
							</tr>
							<tr>
								<td><code>[attribute$="value"]</code></td>
								<td><code>$('img[src$=".png"]')</code></td>
								<td>Selects all <code>&lt;img&gt;</code> elements that have the <code>src</code> attribute with a value ending with <code>".png"</code>.</td>
							</tr>
							<tr>
								<td><code>[attribute|="value"]</code></td>
								<td><code>$('a[hreflang|="en"]')</code></td>
								<td>Selects all <code>&lt;a&gt;</code> elements that have the <code>hreflang</code> attribute with a value equal to <code>"en"</code>, or starting with <code>"en"</code> followed by a hyphen,&thinsp;like <code>"en-US"</code>.</td>
							</tr>
							<tr>
								<td><code>[attribute^="value"]</code></td>
								<td><code>$('img[title^="Smiley"]')</code></td>
								<td>Selects all <code>&lt;img&gt;</code> elements that have the <code>title</code> attribute with a value beginning exactly with a "Smiley" string.</td>
							</tr>
							<tr>
								<td><code>[attribute~="value"]</code></td>
								<td><code>$('img[title~="Kites"]')</code></td>
								<td>Selects all <code>&lt;img&gt;</code> elements that have the <code>title</code> attribute with a value containing the word "Kites", delimited by spaces.</td>
							</tr>
							<tr>
								<td><code>[attribute*="value"]</code></td>
								<td><code>$('input[name*="male"]')</code></td>
								<td>Selects all <code>&lt;input&gt;</code> elements that have the <code>name</code> attribute with&thinsp;a&thinsp;value containing the substring "male".</td>
							</tr>
						</table>
					</div>
					<h2>Hierarchy Selectors</h2>
					<div class="shadow">
						<table class="data">
							<tr>
								<th style="width: 155px;">Selector</th>
								<th style="width: 115px;">Example</th>
								<th>Description</th>
							</tr>
							<tr>
								<td><code>parent > child</code></td>
								<td><code>$("ul > li")</code></td>
								<td>Selects all <code>&lt;li&gt;</code> elements that are direct child of their parent <code>&lt;ul&gt;</code> element.</td>
							</tr>
							<tr>
								<td><code>ancestor&nbsp;descendant</code></td>
								<td><code>$("form label")</code></td>
								<td>Selects all <code>&lt;label&gt;</code> elements that are descendant of their ancestor <code>&lt;form&gt;</code> element.</td>
							</tr>
							<tr>
								<td><code>prev + next</code></td>
								<td><code>$("h1 + p")</code></td>
								<td>Selects all <code>&lt;p&gt;</code> elements that are next i.e. immediately preceded to the <code>&lt;h1&gt;</code> elements.</td>
							</tr>
							<tr>
								<td><code>prev ~ siblings</code></td>
								<td><code>$("h1 ~ p")</code></td>
								<td>Selects all <code>&lt;p&gt;</code> elements that are siblings and follow after the <code>&lt;h1&gt;</code> elements.</td>
							</tr>
						</table>
					</div>
					<h2>Visibility Filter Selectors</h2>
					<div class="shadow">
						<table class="data">
							<tr>
								<th style="width: 100px;">Selector</th>
								<th style="width: 150px;">Example</th>
								<th>Description</th>
							</tr>
							<tr>
								<td><code>:hidden</code></td>
								<td><code>$("p:hidden")</code></td>
								<td>Selects all <code>&lt;p&gt;</code> elements that are hidden.</td>
							</tr>
							<tr>
								<td><code>:visible</code></td>
								<td><code>$("p:visible")</code></td>
								<td>Selects all <code>&lt;p&gt;</code> elements that are visible.</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="jq_selectors order-by-alphabet">
					<p>This section contains a comprehensive list of selectors belonging to the latest jQuery JavaScript library. All the selectors are listed alphabetically.</p>
					<div class="shadow">
						<table class="data">
							<thead>
								<tr>
									<th>Selector</th>
									<th>Example</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>*</code></td>
									<td><code>$("*")</code></td>
									<td>Selects all elements.</td>
								</tr>
								<tr>
                                    <td><code><em>#id</em></code></td>
                                    <td><code>$("#foo")</code></td>
                                    <td>Selects all elements with the <code>id="foo"</code>.</td>
                                </tr>
                                <tr>
                                    <td><code><em>.class</em></code></td>
                                    <td><code>$(".bar")</code></td>
                                    <td>Selects all elements with the <code>class="bar"</code>.</td>
                                </tr>
                                <tr>
                                    <td><code><i>element</i></code></td>
                                    <td><code>$("p")</code></td>
                                    <td>Selects all <code>&lt;p&gt;</code> elements.</td>
                                </tr>								
                                <tr>
                                    <td><code><i>selector1, selector2, selectorN</i></code></td>
                                    <td><code>$("h1,&thinsp;p.bar,&thinsp;span")</code></td>
                                    <td>Selects all <code>&lt;h1&gt;</code> and <code>&lt;span&gt;</code>, but only that <code>&lt;p&gt;</code> elements that has the <code>class="bar"</code>.</td>
                                </tr>
								<tr>
                                    <td><code>ancestor&nbsp;descendant</code></td>
                                    <td><code>$("form label")</code></td>
                                    <td>Selects all <code>&lt;label&gt;</code> elements that are descendant of their ancestor <code>&lt;form&gt;</code> element.</td>
                                </tr>
                                <tr>
                                    <td><code>parent > child</code></td>
                                    <td><code>$("ul > li")</code></td>
                                    <td>Selects all <code>&lt;li&gt;</code> elements that are direct child of their parent <code>&lt;ul&gt;</code> element.</td>
                                </tr>                                
                                <tr>
                                    <td><code>prev + next</code></td>
                                    <td><code>$("h1 + p")</code></td>
                                    <td>Selects all <code>&lt;p&gt;</code> elements that are next i.e. immediately preceded to the <code>&lt;h1&gt;</code> elements.</td>
                                </tr>
                                <tr>
                                    <td><code>prev ~ siblings</code></td>
                                    <td><code>$("h1 ~ p")</code></td>
                                    <td>Selects all <code>&lt;p&gt;</code> elements that are siblings and follow after the <code>&lt;h1&gt;</code> elements.</td>
                                </tr>
								<tr>
									<td colspan="3" class="section">&thinsp;</td>
								</tr>
								<tr>
                                    <td><code>:animated</code></td>
                                    <td><code>$(":animated")</code></td>
                                    <td>Select all elements that are animating at the time the selector is run.</td>
                                </tr>
								<tr>
                                    <td><code>[attribute]</code></td>
                                    <td><code>$("[href]")</code></td>
                                    <td>Selects all elements with a <code>href</code> attribute, with any value.</td>
                                </tr>
								<tr>
                                    <td><code>[attribute="value"]</code></td>
                                    <td><code>$('a[target="_blank"]')</code></td>
                                    <td>Selects all <code>&lt;a&gt;</code> elements that have the <code>target</code> attribute with a value equal to <code>"_blank"</code>.</td>
                                </tr>
								<tr>
                                    <td><code>[attribute|="value"]</code></td>
                                    <td><code>$('a[hreflang|="en"]')</code></td>
                                    <td>Selects all <code>&lt;a&gt;</code> elements that have the <code>hreflang</code> attribute with a value equal to <code>"en"</code>, or starting with <code>"en"</code> followed by a hyphen,&thinsp;like <code>"en-US"</code>.</td>
                                </tr>
								<tr>
                                    <td><code>[attribute*="value"]</code></td>
                                    <td><code>$('input[name*="male"]')</code></td>
                                    <td>Selects all <code>&lt;input&gt;</code> elements that have the <code>name</code> attribute with&thinsp;a&thinsp;value containing the substring "male".</td>
                                </tr>
								<tr>
                                    <td><code>[attribute~="value"]</code></td>
                                    <td><code>$('img[title~="Kites"]')</code></td>
                                    <td>Selects all <code>&lt;img&gt;</code> elements that have the <code>title</code> attribute with a value containing the word "Kites", delimited by spaces.</td>
                                </tr>
								<tr>
                                    <td><code>[attribute$="value"]</code></td>
                                    <td><code>$('img[src$=".png"]')</code></td>
                                    <td>Selects all <code>&lt;img&gt;</code> elements that have the <code>src</code> attribute with a value ending with <code>".png"</code>.</td>
                                </tr>								
								<tr>
                                    <td><code>[attribute!="value"]</code></td>
                                    <td><code>$('a[target!="_blank"]')</code></td>
                                    <td>Selects all <code>&lt;a&gt;</code> elements that don't have the <code>target</code> attribute, or if have don't with a value <code>"_blank"</code>.</td>
                                </tr>
								<tr>
                                    <td><code>[attribute^="value"]</code></td>
                                    <td><code>$('img[title^="Smiley"]')</code></td>
                                    <td>Selects all <code>&lt;img&gt;</code> elements that have the <code>title</code> attribute with a value beginning exactly with a "Smiley" string.</td>
                                </tr>
								<tr>
                                    <td><code>:button</code></td>
                                    <td><code>$(":button")</code></td>
                                    <td>Selects all input and button elements with <code>type="button"</code>.</td>
                                </tr>
								<tr>
                                    <td><code>:checkbox</code></td>
                                    <td><code>$(":checkbox")</code></td>
                                    <td>Selects all input elements with <code>type="checkbox"</code>.</td>
                                </tr>
								<tr>
                                    <td><code>:checked</code></td>
                                    <td><code>$(":checked")</code></td>
                                    <td>Selects all elements that are checked or selected, works for checkboxes, radio buttons, and select elements.</td>
                                </tr>
								<tr>
                                    <td><code>:contains()</code></td>
                                    <td><code>$('p:contains("Hello")')</code></td>
                                    <td>Selects all <code>&lt;p&gt;</code> elements that contains the text "Hello".</td>
                                </tr>
								<tr>
                                    <td><code>:disabled</code></td>
                                    <td><code>$(":disabled")</code></td>
                                    <td>Selects all elements that are disabled.</td>
                                </tr>
								<tr>
                                    <td><code>:empty</code></td>
                                    <td><code>$("td:empty")</code></td>
                                    <td>Selects all <code>&lt;td&gt;</code> elements that are empty i.e that have no children including text.</td>
                                </tr>
								<tr>
                                    <td><code>:enabled</code></td>
                                    <td><code>$(":enabled")</code></td>
                                    <td>Selects all elements that are enabled.</td>
                                </tr>
								<tr>
                                    <td><code>:eq()</code></td>
                                    <td><code>$("tr:eq(1)")</code></td>
                                    <td>Select the 2nd <code>&lt;tr&gt;</code> element within the matched set, zero-based index.</td>
                                </tr>
								<tr>
                                    <td><code>:even</code></td>
                                    <td><code>$("tr:even")</code></td>
                                    <td>Selects all even <code>&lt;tr&gt;</code> elements, zero-indexed.</td>
                                </tr>
								<tr>
                                    <td><code>:file</code></td>
                                    <td><code>$(":file")</code></td>
                                    <td>Selects all input elements with <code>type="file"</code>.</td>
                                </tr>
								<tr>
                                    <td><code>:first-child</code></td>
                                    <td><code>$("p:first-child")</code></td>
                                    <td>Selects all <code>&lt;p&gt;</code> elements that are the first child of their parent.</td>
                                </tr>
								<tr>
                                    <td><code>:first-of-type</code></td>
                                    <td><code>$("p:first-of-type")</code></td>
                                    <td>Selects all <code>&lt;p&gt;</code> elements that are the first <code>&lt;p&gt;</code> element of their parent.</td>
                                </tr>
								<tr>
                                    <td><code>:first</code></td>
                                    <td><code>$("p:first")</code></td>
                                    <td>Selects the first <code>&lt;p&gt;</code> element.</td>
                                </tr>
								<tr>
                                    <td><code>:focus</code></td>
                                    <td><code>$(":focus")</code></td>
                                    <td>Selects element if it is currently focused.</td>
                                </tr>
								<tr>
                                    <td><code>:gt()</code></td>
                                    <td><code>$("ul li:gt(3)")</code></td>
                                    <td>Select all <code>&lt;li&gt;</code> elements at an index greater than three within the matched set (i.e. selects 4th, 5th, ... list elements), zero-based index.</td>
                                </tr>
								<tr>
                                    <td><code>:has()</code></td>
                                    <td><code>$("p:has(img)")</code></td>
                                    <td>Selects all <code>&lt;p&gt;</code> elements which contain at least one <code>&lt;img&gt;</code> element.</td>
                                </tr>
								<tr>
                                    <td><code>:header</code></td>
                                    <td><code>$(":header")</code></td>
                                    <td>Selects all elements that are headers, like <code>&lt;h1&gt;</code>, <code>&lt;h2&gt;</code>, <code>&lt;h3&gt;</code> and so on.</td>
                                </tr>
								<tr>
                                    <td><code>:hidden</code></td>
                                    <td><code>$("p:hidden")</code></td>
                                    <td>Selects all <code>&lt;p&gt;</code> elements that are hidden.</td>
                                </tr>
								<tr>
                                    <td><code>:image</code></td>
                                    <td><code>$(":image")</code></td>
                                    <td>Selects all input elements with <code>type="image"</code>.</td>
                                </tr>
								<tr>
                                    <td><code>:input</code></td>
                                    <td><code>$(":input")</code></td>
                                    <td>Selects all input, textarea, select and button elements (basically selects all form controls).</td>
                                </tr>
								<tr>
                                    <td><code>:lang()</code></td>
                                    <td><code>$(":lang(en)")</code></td>
                                    <td>Selects all elements that have a language value "<code>en</code>" i.e. <code>lang="en"</code>,  <code>lang="en-us"</code> etc.</td>
                                </tr>
								<tr>
                                    <td><code>:last-child</code></td>
                                    <td><code>$("p:last-child")</code></td>
                                    <td>Selects all <code>&lt;p&gt;</code> elements that are the last child of their parent.</td>
                                </tr>
								<tr>
                                    <td><code>:last-of-type</code></td>
                                    <td><code>$("p:last-of-type")</code></td>
                                    <td>Selects all <code>&lt;p&gt;</code> elements that are the last <code>&lt;p&gt;</code> element of their parent.</td>
                                </tr>
								<tr>
                                    <td><code>:last</code></td>
                                    <td><code>$("p:last")</code></td>
                                    <td>Selects the last <code>&lt;p&gt;</code> element.</td>
                                </tr>
								<tr>
                                    <td><code>:lt()</code></td>
                                    <td><code>$("ul li:lt(3)")</code></td>
                                    <td>Select all <code>&lt;li&gt;</code> elements at an index less than three within the matched set (i.e. selects 1st, 2nd, 3rd list elements), zero-based index.</td>
                                </tr>
								<tr>
                                    <td><code>:not()</code></td>
                                    <td><code>$("p:not(:empty)")</code></td>
                                    <td>Select all <code>&lt;p&gt;</code> elements that are not empty.</td>
                                </tr>
								<tr>
                                    <td><code>:nth-child(<i>n</i>)</code></td>
                                    <td><code>$("p:nth-child(3)")</code></td>
                                    <td>Selects all <code>&lt;p&gt;</code> elements that are the 3rd child of their parent.</td>
                                </tr>
								<tr>
                                    <td><code>:nth-last-child(<i>n</i>)</code></td>
                                    <td><code>$("p:nth-last-child(3)")</code></td>
                                    <td>Selects all <code>&lt;p&gt;</code> elements that are the 3rd-child of their parent, counting from the last element to the first.</td>
                                </tr>
								<tr>
                                    <td><code>:nth-last-of-type(<i>n</i>)</code></td>
                                    <td><code>$("p:nth-last-of-type(2)")</code></td>
                                    <td>Selects all <code>&lt;p&gt;</code> elements that are the 2nd-child of their parent, counting from the last element to the first.</td>
                                </tr>
								<tr>
                                    <td><code>:nth-of-type(<i>n</i>)</code></td>
                                    <td><code>$("p:nth-of-type(2)")</code></td>
                                    <td>Selects all <code>&lt;p&gt;</code> elements that are the 2nd <code>&lt;p&gt;</code> element of their parent</td>
                                </tr>
								 <tr>
                                    <td><code>:odd</code></td>
                                    <td><code>$("tr:odd")</code></td>
                                    <td>Selects all odd <code>&lt;tr&gt;</code> elements, zero-indexed.</td>
                                </tr>
								<tr>
                                    <td><code>:only-child</code></td>
                                    <td><code>$("p:only-child")</code></td>
                                    <td>Selects all <code>&lt;p&gt;</code> elements that are the only child of their parent.</td>
                                </tr>
								<tr>
                                    <td><code>:only-of-type</code></td>
                                    <td><code>$("p:only-of-type")</code></td>
                                    <td>Selects all <code>&lt;p&gt;</code> elements that have no siblings with the same element name.</td>
                                </tr>
								<tr>
                                    <td><code>:parent</code></td>
                                    <td><code>$(":parent")</code></td>
                                    <td>Select all elements that have at least one child node either an element or text.</td>
                                </tr>
								<tr>
                                    <td><code>:password</code></td>
                                    <td><code>$(":password")</code></td>
                                    <td>Selects all input elements with <code>type="password"</code>.</td>
                                </tr>
								 <tr>
                                    <td><code>:radio</code></td>
                                    <td><code>$(":radio")</code></td>
                                    <td>Selects all input elements with <code>type="radio"</code>.</td>
                                </tr>
								<tr>
                                    <td><code>:reset</code></td>
                                    <td><code>$(":reset")</code></td>
                                    <td>Selects all input and button elements with <code>type="reset"</code>.</td>
                                </tr>
								<tr>
                                    <td><code>:root</code></td>
                                    <td><code>$(":root")</code></td>
                                    <td>Selects the document's root element which is always <code>&lt;html&gt;</code> element in a HTML document.</td>
                                </tr>
								<tr>
                                    <td><code>:selected</code></td>
                                    <td><code>$(":selected")</code></td>
                                    <td>Selects all elements that are selected, only works for <code>&lt;option&gt;</code> elements.</td>
                                </tr>
								<tr>
                                    <td><code>:submit</code></td>
                                    <td><code>$(":submit")</code></td>
                                    <td>Selects all input and button elements with <code>type="submit"</code>.</td>
                                </tr>
								<tr>
                                    <td><code>:text</code></td>
                                    <td><code>$(":text")</code></td>
                                    <td>Selects all input elements with <code>type="text"</code>.</td>
                                </tr>
								<tr>
                                    <td><code>:visible</code></td>
                                    <td><code>$("p:visible")</code></td>
                                    <td>Selects all <code>&lt;p&gt;</code> elements that are visible.</td>
                                </tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="bottom-link clearfix">
					<a href="javascript:void(0);" class="previous-page-bottom disabled" title="Disabled"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
					<a href="jq_event-methods.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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