<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Regular Expressions in JavaScript">
	  <meta name="keywords" content="javascript,js,Regular Expressions in JavaScript">
	  <meta name="author" content="webschooltoday.com">
    <title>Regular Expressions in JavaScript - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Regular Expressions in JavaScript</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_form-validation.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_error-handling.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Regular Expressions</span></h1>
                <p class="summary">In this tutorial you will learn how regular expressions work, as well as how to use them to perform pattern matching in an efficient way in JavaScript.</p>
				<h2>What is Regular Expression</h2>
				<p>Regular Expressions, commonly known as "<strong>regex</strong>" or "<strong>RegExp</strong>", are a specially formatted text strings used to find patterns in text. Regular expressions are one of the most powerful tools available today for effective and efficient text processing and manipulations. For example, it can be used to verify whether the format of data i.e. name, email, phone number, etc. entered by the user is correct or not, find or replace matching string within text content, and so on.</p>
				<p>JavaScript supports Perl style regular expressions. Why Perl style regular expressions? Because Perl (<em>Practical Extraction and Report Language</em>) was the first mainstream programming language that provided integrated support for regular expressions and it is well known for its strong support of regular expressions and its extraordinary text processing and manipulation capabilities.</p>
				<p>Let's begin with a brief overview of the commonly used JavaScript's built-in methods for performing pattern-matching before delving deep into the world of regular expressions.</p>
				<div class="shadow">
					<table class="data">
						<thead>
							<tr>
								<th>Function</th>
								<th>What it Does</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>exec()</code></td>
								<td>Search for a match in a string. It returns an array of information or <code>null</code> on mismatch.</td>
							</tr>
							<tr>
								<td><code>test()</code></td>
								<td>Test whether a string matches a pattern. It returns <code>true</code> or <code>false</code>.</td>
							</tr>
							<tr>
								<td><code>search()</code></td>
								<td>Search for a match within a string. It returns the index of the first match, or <code>-1</code> if not found.</td>
							</tr>							
							<tr>
								<td><code>replace()</code></td>
								<td>Search for a match in a string, and replaces the matched substring with a replacement string.</td>
							</tr>
							<tr>
								<td><code>match()</code></td>
								<td>Search for a match in a string. It returns an array of information or <code>null</code> on mismatch.</td>
							</tr>							
							<tr>
								<td><code>split()</code></td>
								<td>Splits up a string into an array of substrings using a regular expression.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The methods <code>exec()</code> and <code>test()</code> are RegExp methods that takes a string as a parameter, whereas the methods <code>search()</code>, <code>replace()</code>, <code>match()</code> and <code>split()</code>  are String methods that takes a regular expression as a parameter.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<hr />
				<h2>Defining Regular Expressions</h2>
				<p>In JavaScript, regular expressions are represented by RegExp object, which is a native JavaScript object like String, Array, and so on. There are two ways of creating a new RegExp object &mdash; one is using the literal syntax, and the other is using the <code>RegExp()</code> constructor.</p>
				<p>The literal syntax uses forward slashes (<code><em>/pattern/</em></code>) to wrap the regular expression pattern, whereas the constructor syntax uses quotes (<code><em>"pattern"</em></code>). The following example demonstrates both ways of creating a regular expression that matches any string that begins with "Mr.".</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabaaef.php?topic=javascript&amp;file=creating-a-regular-expression" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

						// Literal syntax 
var regex = /^Mr\./;

// Constructor syntax
var regex = new RegExp("^Mr\\.");
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
				<p>As you can see, the regular expression literal syntax is shorter and easier to read. Therefore it is preferable to use the literal syntax. We'll also use it throughout this tutorial.</p>
				<!--Note box-->
				<div class="color-box space">
					<div class="shadow">
						<div title="Important Notes" class="info-tab note-icon"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> When using the constructor syntax, you've to double-escape <a href="#special-characters">special characters</a>, which means to match "." you need to write <code>"\\."</code> instead of <code>"\."</code>. If there is only one backslash, it would be interpreted by JavaScript's string parser as an escaping character and removed.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<h2>Pattern Matching with Regular Expression</h2>
				<p>Regular expression patterns include the use of letters, digits, punctuation marks, etc., plus a set of special regular expression characters (do not confuse with the <a href="../des-html/html-entities.php">HTML special characters</a>).</p>
				<p id="special-characters">The characters that are given special meaning within a regular expression, are: <br /><code>.</code> <code>*</code> <code>?</code> <code>+</code> <code>[</code> <code>]</code> <code>(</code> <code>)</code> <code>{</code> <code>}</code> <code>^</code> <code>$</code> <code>|</code> <code>\</code>. You will need to backslash these characters whenever you want to use them literally. For example, if you want to match ".", you'd have to write <code>\.</code>. All other characters automatically assume their literal meanings.</p>
				<p class="space">The following sections describe the various options available for formulating patterns:</p>
				<h2 id="character-classes">Character Classes</h2>
				<p>Square brackets surrounding a pattern of characters are called a character class e.g. <code>[abc]</code>. A character class always matches a single character out of a list of specified characters that means the expression <code>[abc]</code> matches only a, b or c character.</p>
				<p>Negated character classes can also be defined that match any character except those contained within the brackets. A negated character class is defined by placing a caret (<code>^</code>) symbol immediately after the opening bracket, like <code>[^abc]</code>, which matches any character except a, b, and c.</p>
				<p>You can also define a range of characters by using the hyphen (<code>-</code>) character inside a character class, like <code>[0-9]</code>. Let's look at some examples of the character classes:</p>
				<div class="shadow">
					<table class="data">
						<thead>
							<tr>
								<th>RegExp</th>
								<th>What it Does</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>[abc]</code></td>
								<td>Matches any one of the characters a, b, or c.</td>
							</tr>
							<tr>
								<td><code>[^abc]</code></td>
								<td>Matches any one character other than a, b, or c.</td>
							</tr>
							<tr>
								<td><code>[a-z]</code></td>
								<td>Matches any one character from lowercase a to lowercase z.</td>
							</tr>
							<tr>
								<td><code>[A-Z]</code></td>
								<td>Matches any one character from uppercase a to uppercase z.</td>
							</tr>
							<tr>
								<td><code>[a-Z]</code></td>
								<td>Matches any one character from lowercase a to uppercase Z.</td>
							</tr>
							<tr>
								<td><code>[0-9]</code></td>
								<td>Matches a single digit between 0 and 9.</td>
							</tr>
							<tr>
								<td><code>[a-z0-9]</code></td>
								<td>Matches a single character between a and z or between 0 and 9.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<p>The following example will show you how to find whether a pattern exists within a string or not using the regular expression with the JavaScript <code>test()</code> method:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab46f9.php?topic=javascript&amp;file=match-a-single-character-using-regular-expression" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
						<textarea id="code2">

						var regex = /ca[kf]e/;
var str = "He was eating cake in the cafe.";

// Test the string against the regular expression
if(regex.test(str)) {
    alert("Match found!");
} else {
    alert("Match not found.");
}
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
				<p>Further, you can add the <a href="#flags">global flag</a> <code>g</code> to a regular expression to find all matches in a string:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9a29.php?topic=javascript&amp;file=find-all-occurrences-of-a-pattern-in-a-string-using-regular-expression" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

						var regex = /ca[kf]e/g;
var str = "He was eating cake in the cafe.";
var matches = str.match(regex);
alert(matches.length); // Outputs: 2
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
				<!--Tip Box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> Regular expressions aren't exclusive to JavaScript. Languages such as Java, Perl, Python, PHP, etc. use the same notation for finding patterns in text.</p>
						</div>
					</div>
				</div>
				<!--End:Tip Box-->
				<hr />
				<h2>Predefined Character Classes</h2>
				<p>Some character classes such as digits, letters, and whitespaces are used so frequently that there are shortcut names for them. The following table lists those predefined character classes:</p>
				<div class="shadow">
					<table class="data">
						<thead>
							<tr>
								<th style="width: 60px;">Shortcut</th>
								<th>What it Does</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>.</code></td>
								<td>Matches any single character except newline <code>\n</code>.</td>
							</tr>
							<tr>
								<td><code>\d</code></td>
								<td>matches any digit character. Same as <code>[0-9]</code></td>
							</tr>
							<tr>
								<td><code>\D</code></td>
								<td>Matches any non-digit character. Same as <code>[^0-9]</code></td>
							</tr>
							<tr>
								<td><code>\s</code></td>
								<td>Matches any whitespace character (space, tab, newline or carriage return character). <br />Same as <code>[ \t\n\r]</code></td>
							</tr>
							<tr>
								<td><code>\S</code></td>
								<td>Matches any non-whitespace character. <br />Same as <code>[^ \t\n\r]</code></td>
							</tr>
							<tr>
								<td><code>\w</code></td>
								<td>Matches any word character (definned as a to z, A to Z,0 to 9, and the underscore). <br />Same as <code>[a-zA-Z_0-9]</code></td>
							</tr>
							<tr>
								<td><code>\W</code></td>
								<td>Matches any non-word character. Same as <code>[^a-zA-Z_0-9]</code></td>
							</tr>
						</tbody>
					</table>
				</div>
				<p>The following example will show you how to find and replace space with a hyphen character in a string using regular expression with the JavaScript <code>replace()</code> method:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1448.php?topic=javascript&amp;file=find-and-replace-characters-in-a-string-using-regular-expression" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
						<textarea id="code4">

						var regex = /\s/g;
var replacement = "-";
var str = "Earth revolves around\nthe\tSun";

// Replace spaces, newlines and tabs
document.write(str.replace(regex, replacement) + "<hr>");

// Replace only spaces
document.write(str.replace(/ /g, "-"));
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
				<hr />				
				<h2 id="repetition-quantifiers">Repetition Quantifiers</h2>
				<p>In the previous section we've learnt how to match a single character in a variety of fashions. But what if you want to match on more than one character? For example, let's say you want to find out words containing one or more instances of the letter p, or words containing at least two p's, and so on.</p>
				<p>This is where quantifiers come into play. With quantifiers you can specify how many times a character in a regular expression should match. Quantifiers can be applied to the individual characters, as well as <a href="#character-classes">classes of characters</a>, and <a href="#grouping">groups of characters</a> contained by the parentheses.</p>
				<p>The following table lists the various ways to quantify a particular pattern:</p>
				<div class="shadow">
					<table class="data">
						<thead>
							<tr>
								<th style="width: 80px;">RegExp</th>
								<th>What it Does</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>p+</code></td>
								<td>Matches one or more occurrences of the letter p.</td>
							</tr>
							<tr>
								<td><code>p*</code></td>
								<td>Matches zero or more occurrences of the letter p.</td>
							</tr>
							<tr>
								<td><code>p?</code></td>
								<td>Matches zero or one occurrences of the letter p.</td>
							</tr>
							<tr>
								<td><code>p{2}</code></td>
								<td>Matches exactly two occurrences of the letter p.</td>
							</tr>
							<tr>
								<td><code>p{2,3}</code></td>
								<td>Matches at least two occurrences of the letter p, but not more than three occurrences.</tr>
							<tr>
								<td><code>p{2,}</code></td>
								<td>Matches two or more occurrences of the letter p.</td>
							</tr>
							<tr>
								<td><code>p{,3}</code></td>
								<td>Matches at most three occurrences of the letter p</td>
							</tr>
						</tbody>
					</table>
				</div>
				<p>The regular expression in the following example will splits the string at comma, sequence of commas, whitespace, or combination thereof using the JavaScript <code>split()</code> method:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab634c.php?topic=javascript&amp;file=split-a-string-using-regular-expression" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

						var regex = /[\s,]+/;
var str = "My favourite colors are red, green and blue";
var parts = str.split(regex);

// Loop through parts array and display substrings
for(var part of parts){
    document.write("<p>" + part + "</p>");
}
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
				<hr />
				<h2>Position Anchors</h2>
				<p>There are certain situations where you want to match at the beginning or end of a line, word, or string. To do this you can use anchors. Two common anchors are caret (<code>^</code>) which represent the start of the string, and the dollar (<code>$</code>) sign which represent the end of the string.</p>
				<div class="shadow">
					<table class="data">
						<thead>
							<tr>
								<th>RegExp</th>
								<th>What it Does</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>^p</code></td>
								<td>Matches the letter p at the beginning of a line.</td>
							</tr>
							<tr>
								<td><code>p$</code></td>
								<td>Matches the letter p at the end of a line.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<p>The regular expression in the following example will match only those names in the names array which start with the letter "J" using the JavaScript <code>test()</code> function:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb288.php?topic=javascript&amp;file=match-strings-beginning-with-specific-characters-using-regular-expression" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

						var regex = /^J/;
var names = ["James Bond", "Clark Kent", "John Rambo"];

// Loop through names array and display matched names
for(var name of names) {
    if(regex.test(name)) {
        document.write("<p>" + name + "</p>")
    }
}
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
				<hr />
				<h2 id="flags">Pattern Modifiers (Flags)</h2>
				<p>A pattern modifier allows you to control the way a pattern match is handled. Pattern modifiers are placed directly after the regular expression, for example, if you want to search for a pattern in a case-insensitive manner, you can use the <code>i</code> modifier, like this: <code>/pattern/i</code>.</p>
				<p>The following table lists some of the most commonly used pattern modifiers.</p>
				<div class="shadow">
					<table class="data">
						<thead>
							<tr>
								<th>Modifier</th>
								<th>What it Does</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>g</code></td>
								<td>Perform a global match i.e. finds all occurrences.</td>
							</tr>
							<tr>
								<td><code>i</code></td>
								<td>Makes the match case-insensitive manner.</td>
							</tr>
							<tr>
								<td><code>m</code></td>
								<td>Changes the behavior of <code>^</code> and <code>$</code> to match against a newline boundary (i.e. start or end of each line within a multiline string), instead of a string boundary.</td>
							</tr>							
							<tr>
								<td><code>o</code></td>
								<td>Evaluates the expression only once.</td>
							</tr>
							<tr>
								<td><code>s</code></td>
								<td>Changes the behavior of <code>.</code> (dot) to match all characters, including newlines.</td>
							</tr>
							<tr>
								<td><code>x</code></td>
								<td>Allows you to use whitespace and comments within a regular expression for clarity.</td>
							</tr>
						</tbody>
					</table>
				</div>				
				<p>The following example will show you how to use the <code>g</code> and <code>i</code> modifiers in a regular expression to perform a global and case-insensitive search with the JavaScript <code>match()</code> method.</p>
                <!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2513.php?topic=javascript&amp;file=match-the-pattern-in-a-case-insensitive-manner-using-regular-expression" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

						var regex = /color/gi;
var str = "Color red is more visible than color blue in daylight.";
var matches = str.match(regex); // global, case-insensitive match
console.log(matches);
// expected output: ["Color", "color"]
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code7"), {
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
				<p>Similarly, the following example shows how to match at the beginning of every line in a multi-line string using the <code>^</code> anchor and <code>m</code> modifier with the JavaScript <code>match()</code> method.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf3e6.php?topic=javascript&amp;file=match-a-pattern-in-a-multiline-string-using-regular-expression" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

						var regex = /^color/gim;
var str = "Color red is more visible than \ncolor blue in daylight.";
var matches = str.match(regex); // global, case-insensitive, multiline match
console.log(matches);
// expected output: ["Color", "color"]
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code8"), {
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
				<hr />
				<h2>Alternation</h2>
				<p>Alternation allows you to specify alternative version of a pattern. Alternation in a regular expression works just like the <code>OR</code> operator in an <code>if-else</code> conditional statement.</p>
				<p>You can specify alternation using a vertical bar (<code>|</code>). For example, the regexp <code>/fox|dog|cat/</code> matches the string "fox", or the string "dog", or the string "cat". Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabad26.php?topic=javascript&amp;file=specify-alternative-version-of-a-pattern-in-a-regular-expression" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

						var regex = /fox|dog|cat/;
var str = "The quick brown fox jumps over the lazy dog.";
var matches = str.match(regex);
console.log(matches);
// expected output: ["fox", index: 16, ...]
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code9"), {
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
						<div title="Important Notes" class="info-tab note-icon"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> Alternatives are evaluated from left to right until a match is found. If the left alternative matches, the right alternative is ignored completely even if it has a match.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2 id="grouping">Grouping</h2>
				<p>Regular expressions use parentheses to group subexpressions, just like mathematical expressions. Parentheses allow a <a href="#repetition-quantifiers">repetition quantifier</a> to be applied to an entire subexpression.</p>
				<p>For example, in regexp <code>/go+/</code> the quantifier <code>+</code> is applied only to the last character <code>o</code> and it matches the strings "go", "goo", and so on. Whereas, in regexp <code>/(go)+/</code> the quantifier <code>+</code> is applied to the group of characters <code>g</code> and <code>o</code> and it matches the strings "go", "gogo", and so on.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd0ad.php?topic=javascript&amp;file=grouping-subexpressions-in-a-regular-expression" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
						<textarea id="code10">

						var regex = /(go)+/i; 
var str = "One day Gogo will go to school.";
var matches = str.match(regex); // case-insensitive match
console.log(matches);
// expected output: ["Gogo", "go", index: 8, ...]
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code10"), {
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
						<div title="Important Notes" class="info-tab note-icon"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> If the string matches the pattern, the <code>match()</code> method returns an array containing the entire matched string as the first element, followed by any results captured in parentheses, and the index of the whole match. If no matches were found, it returns <code>null</code>.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<!--Tip Box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> If the regular expression includes the <code>g</code> flag, the <code>match()</code> method only returns an array containing all matched substrings rather than match object. Captured groups, index of the whole match, and other properties are not returned.</p>
						</div>
					</div>
				</div>
				<!--End:Tip Box-->
				<hr />
				<h2>Word Boundaries</h2>
				<p>A word boundary character ( <code>\b</code>) helps you search for the words that begins and/or ends with a pattern. For example, the regexp <code>/\bcar/</code> matches the words beginning with the pattern car, and would match cart, carrot, or cartoon, but would not match oscar.</p>
				<p>Similarly, the regexp <code>/car\b/</code> matches the words ending with the pattern car, and would match oscar or supercar, but would not match cart. Likewise, the <code>/\bcar\b/</code> matches the words beginning and ending with the pattern car, and would match only the word car.</p>
				<p>The following example will highlight the words beginning with car in bold:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6437.php?topic=javascript&amp;file=match-words-starts-or-ends-with-a-pattern-using-regular-expression" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
                        <textarea id="code11">

						var regex = /(\bcar\w*)/g;
var str = "Words begining with car: cart, carrot, cartoon. Words ending with car: oscar, supercar.";
var replacement = '<b>$1</b>';
var result = str.replace(regex, replacement);
document.write(result);
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code11"), {
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
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_error-handling.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_form-validation.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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