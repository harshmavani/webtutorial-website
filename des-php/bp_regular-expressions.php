<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Regular Expressions in PHP">
	  <meta name="keywords" content="php,php basic,Regular Expressions in PHP">
	  <meta name="author" content="webschooltoday.com">
    <title>Regular Expressions in PHP - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Regular Expressions in PHP</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_exception-handling.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_json-parsing.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP <span>Regular Expressions</span></h1>
                <p class="summary">In this tutorial you will learn how regular expressions work, as well as how to use them to perform pattern matching in an efficient way in PHP.</p>
                <h2>What is Regular Expression</h2>
				<p>Regular Expressions, commonly known as "<strong>regex</strong>" or "<strong>RegExp</strong>", are a specially formatted text strings used to find patterns in text. Regular expressions are one of the most powerful tools available today for effective and efficient text processing and manipulations. For example, it can be used to verify whether the format of data i.e. name, email, phone number, etc. entered by the user was correct or not, find or replace matching string within text content, and so on.</p>
				<p>PHP (version 5.3 and above) supports Perl style regular expressions via its <code>preg_</code> family of functions. Why Perl style regular expressions? Because Perl (<em>Practical Extraction and Report Language</em>) was the first mainstream programming language that provided integrated support for regular expressions and it is well known for its strong support of regular expressions and its extraordinary text processing and manipulation capabilities.</p>
				<p>Let's begin with a brief overview of the commonly used PHP's built-in pattern-matching functions before delving deep into the world of regular expressions.</p>
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
								<td><code>preg_match()</code></td>
								<td>Perform a regular expression match.</td>
							</tr>
							<tr>
								<td><code>preg_match_all()</code></td>
								<td>Perform a global regular expression match.</td>
							</tr>							
							<tr>
								<td><code>preg_replace()</code></td>
								<td>Perform a regular expression search and replace.</td>
							</tr>
							<tr>
								<td><code>preg_grep()</code></td>
								<td>Returns the elements of the input array that matched the pattern.</td>
							</tr>
							<tr>
								<td><code>preg_split()</code></td>
								<td>Splits up a string into substrings using a regular expression.</td>
							</tr>
							<tr>
								<td><code>preg_quote()</code></td>
								<td>Quote regular expression characters found within a string.</td>
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
                            <p><strong>Read Carefully:</strong> The PHP <code>preg_match()</code> function stops searching after it finds the first match, whereas the <code>preg_match_all()</code> function continues searching until the end of the string and find all possible matches instead of stopping at the first match.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<hr />
				<h2>Regular Expression Syntax</h2>
				<p>Regular expression syntax includes the use of special characters (do not confuse with the <a href="../des-html/html-entities.php">HTML special characters</a>). The characters that are given special meaning within a regular expression, are: <code>.</code> <code>*</code> <code>?</code> <code>+</code> <code>[</code> <code>]</code> <code>(</code> <code>)</code> <code>{</code> <code>}</code> <code>^</code> <code>$</code> <code>|</code> <code>\</code>. You will need to backslash these characters whenever you want to use them literally. For example, if you want to match ".", you'd have to write <code>\.</code>. All other characters automatically assume their literal meanings.</p>
				<p class="space">The following sections describe the various options available for formulating patterns:</p>
				<h2>Character Classes</h2>
				<p>Square brackets surrounding a pattern of characters are called a character class e.g. <code>[abc]</code>. A character class always matches a single character out of a list of specified characters that means the expression <code>[abc]</code> matches only a, b or c character.</p>
				<p>Negated character classes can also be defined that match any character except those contained within the brackets. A negated character class is defined by placing a caret (<code>^</code>) symbol immediately after the opening bracket, like this <code>[^abc]</code>.</p>
				<p>You can also define a range of characters by using the hyphen (<code>-</code>) character inside a character class, like <code>[0-9]</code>. Let's look at some examples of character classes:</p>
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
				<p>The following example will show you how to find whether a pattern exists in a string or not using the regular expression and PHP <code>preg_match()</code> function:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabcb53.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
						<textarea id="code1">

&lt;?php
$pattern = "/ca[kf]e/";
$text = "He was eating cake in the cafe.";
if(preg_match($pattern, $text)){
    echo "Match found!";
} else{
    echo "Match not found.";
}
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code1"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
				<p>Similarly, you can use the <code>preg_match_all()</code> function to find all matches within a string:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7447.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
						<textarea id="code2">

&lt;?php
$pattern = "/ca[kf]e/";
$text = "He was eating cake in the cafe.";
$matches = preg_match_all($pattern, $text, $array);
echo $matches . " matches were found.";
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code2"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> Regular expressions aren't exclusive to PHP. Languages such as Java, Perl, Python, etc. use the same notation for finding patterns in text.</p>
						</div>
					</div>
				</div>
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
								<td>Matches any whitespace character (space, tab, newline or carriage return character). Same as <code>[ \t\n\r]</code></td>
							</tr>
							<tr>
								<td><code>\S</code></td>
								<td>Matches any non-whitespace character. Same as <code>[^ \t\n\r]</code></td>
							</tr>
							<tr>
								<td><code>\w</code></td>
								<td>Matches any word character (definned as a to z, A to Z,0 to 9, and the underscore). Same as <code>[a-zA-Z_0-9]</code></td>
							</tr>
							<tr>
								<td><code>\W</code></td>
								<td>Matches any non-word character. Same as <code>[^a-zA-Z_0-9]</code></td>
							</tr>
						</tbody>
					</table>
				</div>
				<p>The following example will show you how to find and replace space with a hyphen character in a string using regular expression and PHP <code>preg_replace()</code> function:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9e33-2.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
						<textarea id="code3">

&lt;?php
$pattern = "/\s/";
$replacement = "-";
$text = "Earth revolves around\nthe\tSun";
// Replace spaces, newlines and tabs
echo preg_replace($pattern, $replacement, $text);
echo "&lt;br&gt;";
// Replace only spaces
echo str_replace(" ", "-", $text);
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code3"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
				<hr />				
				<h2>Repetition Quantifiers</h2>
				<p>In the previous section we've learnt how to match a single character in a variety of fashions. But what if you want to match on more than one character? For example, let's say you want to find out words containing one or more instances of the letter p, or words containing at least two p's, and so on. This is where quantifiers come into play. With quantifiers you can specify how many times a character in a regular expression should match.</p>
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
								<td>Matches at least two occurrences of the letter p, but not more than three occurrences of the letter p.</tr>
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
				<p>The regular expression in the following example will splits the string at comma, sequence of commas, whitespace, or combination thereof using the PHP <code>preg_split()</code> function:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabaace.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
						<textarea id="code4">

&lt;?php
$pattern = "/[\s,]+/";
$text = "My favourite colors are red, green and blue";
$parts = preg_split($pattern, $text);
 
// Loop through parts array and display substrings
foreach($parts as $part){
    echo $part . "&lt;br&gt;";
}
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code4"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
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
				<p>The regular expression in the following example will display only those names from the names array which start with the letter "J" using the PHP <code>preg_grep()</code> function:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab97bf.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
						<textarea id="code5">

&lt;?php
$pattern = "/^J/";
$names = array("Jhon Carter", "Clark Kent", "John Rambo");
$matches = preg_grep($pattern, $names);
 
// Loop through matches array and display matched names
foreach($matches as $match){
    echo $match . "&lt;br&gt;";
}
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code5"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
				<hr />
				<h2>Pattern Modifiers</h2>
				<p>A pattern modifier allows you to control the way a pattern match is handled. Pattern modifiers are placed directly after the regular expression, for example, if you want to search for a pattern in a case-insensitive manner, you can use the <code>i</code> modifier, like this: <code>/pattern/i</code>. The following table lists some of the most commonly used pattern modifiers.</p>
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
								<td><code>i</code></td>
								<td>Makes the match case-insensitive manner.</td>
							</tr>
							<tr>
								<td><code>m</code></td>
								<td>Changes the behavior of <code>^</code> and <code>$</code> to match against a newline boundary (i.e. start or end of each line within a multiline string), instead of a string boundary.</td>
							</tr>
							<tr>
								<td><code>g</code></td>
								<td>Perform a global match i.e. finds all occurrences.</td>
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
				<p>The following example will show you how to perform a global case-insensitive search using the <code>i</code> modifier and the PHP <code>preg_match_all()</code> function.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2f9c.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
						<textarea id="code6">

&lt;?php
$pattern = "/color/i";
$text = "Color red is more visible than color blue in daylight.";
$matches = preg_match_all($pattern, $text, $array);
echo $matches . " matches were found.";
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code6"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
				<p>Similarly, the following example shows how to match at the beginning of every line in a multi-line string using <code>^</code> anchor and <code>m</code> modifier with PHP <code>preg_match_all()</code> function.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6153.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
						<textarea id="code7">

&lt;?php
$pattern = "/^color/im";
$text = "Color red is more visible than \ncolor blue in daylight.";
$matches = preg_match_all($pattern, $text, $array);
echo $matches . " matches were found.";
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code7"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
				<hr />
				<h2>Word Boundaries</h2>
				<p>A word boundary character ( <code>\b</code>) helps you search for the words that begins and/or ends with a pattern. For example, the regexp <code>/\bcar/</code> matches the words beginning with the pattern car, and would match cart, carrot, or cartoon, but would not match oscar.</p>
				<p>Similarly, the regexp <code>/car\b/</code> matches the words ending with the pattern car, and would match scar, oscar, or supercar, but would not match cart. Likewise, the <code>/\bcar\b/</code> matches the words beginning and ending with the pattern car, and would match only the word car.</p>
				<p>The following example will highlight the words beginning with car in bold:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2944.html" target="_blank" class="try-btn" title="Run this code to view the output">Run this code <span>&raquo;</span></a></div>
						<textarea id="code8">

&lt;?php
$pattern = '/\bcar\w*/';
$replacement = '&lt;b&gt;$0&lt;/b&gt;';
$text = 'Words begining with car: cart, carrot, cartoon. Words ending with car: scar, oscar, supercar.';
echo preg_replace($pattern, $replacement, $text);
?&gt;

 </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code8"), {
									mode: "text/html",
									tabMode: "indent",
									styleActiveLine: true,
									lineNumbers: true,
									lineWrapping: true
								});

							</script>                    </div>
                </div>
				<p>We hope you have understood the basics of regular expression. To learn how to validate form data using regular expression, please check out the tutorial on <a href="bp_form-validation.php">PHP Form Validation</a>.</p>
                <div class="bottom-link clearfix">
                    <a href="bp_json-parsing.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_exception-handling.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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