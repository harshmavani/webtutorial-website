<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Strings">
	  <meta name="keywords" content="javascript,js,JavaScript Strings">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Strings - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Strings</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_numbers.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_events.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Strings</span></h1>
                <p class="summary">In this tutorial you will learn how to create and manipulate strings in JavaScript.</p>
				<h2>What is String in JavaScript</h2>
				<p>A string is a sequence of letters, numbers, special characters and arithmetic values or combination of all. Strings can be
created by enclosing the string literal (i.e. string characters) either within single quotes (<code>'</code>) or double quotes (<code>"</code>), as shown in the example below:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab60ec.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        var myString = 'Hello World!'; // Single quoted string
var myString = "Hello World!"; // Double quoted string
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
				<p>You can use quotes inside a string, as long as they don't match the quotes surrounding the string:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabff2e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        var str1 = "it's okay";
var str2 = 'He said "Goodbye"';
var str3 = "She replied 'Calm down, please'";
var str4 = 'Hi, there!"; // Syntax error - quotes must match
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
				<p>However, you can still use single quotes inside a single quoted strings or double quotes inside double quoted strings by escaping the quotes with a backslash character (<code>\</code>), like this:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8a7a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        var str1 = 'it\'s okay';
var str2 = "He said \"Goodbye\"";
var str3 = 'She replied \'Calm down, please\'';
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
				<p>The backslash (<code>\</code>) is called an escape character, whereas the sequences <code>\'</code> and <code>\"</code> that we've used in the example above are called <em>escape sequences</em>.</p>
				<hr />
				<h2>JavaScript Escape Sequences</h2>
				<p>Escape sequences are also useful for situations where you want to use characters that can't be typed using a keyboard. Here are some other most commonly used escape sequences.</p>
				<ul>
                    <li><code>\n</code> is replaced by the newline character</li>
					<li><code>\t</code> is replaced by the tab character</li>
                    <li><code>\r</code> is replaced by the carriage-return character</li>                    
                    <li><code>\b</code> is replaced by the backspace character</li>
                    <li><code>\\</code> is replaced by a single backslash (<code>\</code>)</li>
                </ul>
				<p>Here's an example to clarify the how escape sequences actually works:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe0b3.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        var str1 = "The quick brown fox \n jumps over the lazy dog.";
document.write("<pre>" + str1 + "</pre>"); // Create line break
 
var str2 = "C:\Users\Downloads";
document.write(str2); // Prints C:UsersDownloads
 
var str3 = "C:\\Users\\Downloads";
document.write(str3); // Prints C:\Users\Downloads
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
				<h2 class="section-title"><span>Performing Operations on Strings</span></h2>
				<p>JavaScript provides several properties and methods to perform operations on string values. Technically, only objects can have properties and methods. But in JavaScript primitive data types can act like objects when you refer to them with the property access notation (i.e. dot notation).</p>
				<p class="room">JavaScript making it possible by creating a temporary rg3-w object for primitive data types. This process is done automatically by the JavaScript interpreter in the background.</p>
				<h2>Getting the Length of a String</h2>
				<p>The length property returns the length of the string, which is the number of characters contained in the string. This includes the number of special characters as well, such as <code>\t</code> or <code>\n</code>.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe806.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        var str1 = "This is a paragraph of text.";
document.write(str1.length); // Prints 28
 
var str2 = "This is a \n paragraph of text.";
document.write(str2.length); // Prints 30, because \n is only one character
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
				<!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> Since <code>length</code> is a property, not a function, so don't use parentheses after it like <code>str.length()</code>. Instead just write <code>str.length</code>, otherwise it will produce an error.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<hr />
				<h2>Finding a String Inside Another String</h2>
				<p>You can use the <code>indexOf()</code> method to find a substring or string within another string. This method returns the index or position of the first occurrence of a specified string within a string.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6c01.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

                        var str = "If the facts don't fit the theory, change the facts.";
var pos = str.indexOf("facts");
alert(pos); // 0utputs: 7
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
				<p>Similarly, you can use the <code>lastIndexOf()</code> method to get the index or position of the last occurrence of the specified string within a string, like this:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8260.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

                        var str = "If the facts don't fit the theory, change the facts.";
var pos = str.lastIndexOf("facts");
alert(pos); // 0utputs: 46
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
				<p>Both the <code>indexOf()</code>, and the <code>lastIndexOf()</code> methods return <code>-1</code> if the substring is not found. Both methods also accept an optional integer parameter which specifies the position within the string at which to start the search. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0ae7.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

                        var str = "If the facts don't fit the theory, change the facts.";
 
 // Searching forwards
 var pos1 = str.indexOf("facts", 20);
 alert(pos1); // 0utputs: 46
  
 // Searching backwards
 var pos2 = str.lastIndexOf("facts", 20);
 alert(pos2); // 0utputs: 7
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
				<!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> Characters in a string are indexed from left to right. The index of the first character is <code>0</code>, and the index of the last character of a string called <code>myStr</code> is <code>myStr.length - 1</code>.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<hr />
				<h2>Searching for a Pattern Inside a String</h2>
				<p>You can use the <code>search()</code> method to search a particular piece of text or pattern inside a string.</p>
				<p>Like <code>indexOf()</code> method the <code>search()</code> method also returns the index of the first match, and returns <code>-1</code> if no matches were found, but unlike <code>indexOf()</code> method this method can also take a <em>regular expression</em> as its argument to provide advanced search capabilities.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb5fc.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

                        var str = "Color red looks brighter than color blue.";
 
 // Case sensitive search
 var pos1 = str.search("color");
 alert(pos1); // 0utputs: 30
  
 // Case insensitive search using regexp
 var pos2 = str.search(/color/i);
 alert(pos2); // 0utputs: 0
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
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The <code>search()</code> method does not support global searches; it ignores the <code>g</code> flag or modifier (i.e. <code>/pattern/g</code>) of its regular expression argument.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<p>You will learn more about regular expressions in the upcoming chapters.</p>
				<hr />
				<h2>Extracting a Substring from a String</h2>
				<p>You can use the <code>slice()</code> method to extract a part or substring from a string.</p>
				<p>This method takes 2 parameters: <em>start index</em> (index at which to begin extraction), and an optional <em>end index</em> (index before which to end extraction), like <code>str.slice(startIndex, endIndex)</code>.</p>
				<p>The following example slices out a portion of a string from position 4 to position 15:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb3dc.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

                        var str = "The quick brown fox jumps over the lazy dog.";
var subStr = str.slice(4, 15);
document.write(subStr); // Prints: quick brown
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
				<p>You can also specify negative values. The negative value is treated as <code>strLength + startIndex</code>, where <code>strLength</code> is the length of the string (i.e. <code>str.length</code>), for example, if <code>startIndex</code> is <code>-5</code> it is treated as <code>strLength - 5</code>. If <code>startIndex</code> is greater than or equal to the length of the string, <code>slice()</code> method returns an empty string. Also, if optional <code>endIndex</code> is not specified or omitted, the <code>slice()</code> method extracts to the end of the string.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc399.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11">

                        var str = "The quick brown fox jumps over the lazy dog.";
document.write(str.slice(-28, -19)); // Prints: fox jumps
document.write(str.slice(31)); // Prints: the lazy dog.
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
				<p>You can also use the <code>substring()</code> method to extract a section of the given string based on start and end indexes, like <code>str.substring(startIndex, endIndex)</code>. The <code>substring()</code> method is very similar to the <code>slice()</code> method, except few differences:</p>
				<ul>
					<li>If either argument is less than <code>0</code> or is <code>NaN</code>, it is treated as <code>0</code>.</li>
					<li>If either argument is greater than <code>str.length</code>, it is treated as if it were <code>str.length</code>.</li>
					<li>If <code>startIndex</code>  is greater than <code>endIndex</code>, then <code>substring()</code> will swap those two arguments; for example, <code>str.substring(5, 0) == str.substring(0, 5)</code>.</li>
				</ul>
				<p>The following example will show you how this method actuallty works:</p>
				<!--Code box-->
                <div class="example break">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2417.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code12">

                        var str = "The quick brown fox jumps over the lazy dog.";
document.write(str.substring(4, 15)); // Prints: quick brown
document.write(str.substring(9, 0)); // Prints: The quick
document.write(str.substring(-28, -19)); // Prints nothing
document.write(str.substring(31)); // Prints: the lazy dog.
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code12"), {
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
				<h3>Extracting a Fixed Number of Characters from a String</h3>
				<p>JavaScript also provide the <code>substr()</code> method which is similar to <code>slice()</code> with a subtle difference, the second parameter specifies the number of characters to extract instead of ending index, like <code>str.substr(startIndex, length)</code>. If <code>length</code> is <code>0</code> or a negative number, an empty string is returned. The following example demonstrates how it works:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf111.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code13">

                        var str = "The quick brown fox jumps over the lazy dog.";
document.write(str.substr(4, 15)); // Prints: quick brown fox
document.write(str.substr(-28, -19)); // Prints nothing
document.write(str.substr(-28, 9)); // Prints: fox jumps
document.write(str.substr(31)); // Prints: the lazy dog.
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code13"), {
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
				<h2>Replacing the Contents of a String</h2>
				<p>You can use the <code>replace()</code> method to replace part of a string with another string. This method takes two parameters a regular expression to match or substring to be replaced and a replacement string, like <code>str.replace(regexp|substr, newSubstr)</code>.</p>
				<p>This <code>replace()</code> method returns a new string, it doesn't affect the original string that will remain unchanged. The following example will show you how it works:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab9b48.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code14">

                        var str = "Color red looks brighter than color blue.";
var result = str.replace("color", "paint");
alert(result); // 0utputs: Color red looks brighter than paint blue.
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code14"), {
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
				<p>By default, the <code>replace()</code> method replaces only the first match, and it is case-sensitive. To replace the substring within a string in a case-insensitive manner you can use a <em>regular expression (regexp)</em> with an <code>i</code> modifier, as shown in the example below:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2a86.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code15">

                        var str = "Color red looks brighter than color blue.";
var result = str.replace(/color/i, "paint");
alert(result); // 0utputs: paint red looks brighter than color blue.
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code15"), {
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
				<p>Similarly, to replace all the occurrences of a substring within a string in a case-insensitive manner you can use the <code>g</code> modifier along with the <code>i</code> modifier, like this:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe5a8.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code16">

                        var str = "Color red looks brighter than color blue.";
var result = str.replace(/color/ig, "paint");
alert(result); // 0utputs: paint red looks brighter than paint blue.
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code16"), {
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
				<h2>Converting a String to Uppercase or Lowercase</h2>
				<p>You can use the <code>toUpperCase()</code> method to convert a string to uppercase, like this:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb493.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code17">

                        var str = "Hello World!";
var result = str.toUpperCase();
document.write(result); // Prints: HELLO WORLD!
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code17"), {
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
				<p>Similarly, you can use the <code>toLowerCase()</code> to convert a string to lowercase, like this:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3c01.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code18">

                        var str = "Hello World!";
var result = str.toLowerCase();
document.write(result); // Prints: hello world!
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code18"), {
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
				<h2>Concatenating Two or More Strings</h2>
				<p>You can concatenate or combine two or more strings using the <code>+</code> and <code>+=</code> <a href="js_operators.php#assignment">assignment operators</a>.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3f5a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code19">

                        var hello = "Hello";
var world = "World";
var greet = hello + " " + world;
document.write(greet); // Prints: Hello World
 
var wish  = "Happy";
    wish += " New Year";
document.write(wish); // Prints: Happy New Year
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code19"), {
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
				<p>JavaScript also provides <code>concat()</code> method to combine strings, but it is not recommended.</p>
				<hr />
				<h2>Accessing Individual Characters from a String</h2>
				<p>You can use the <code>charAt()</code> method to access individual character from a string, like <code>str.charAt(index)</code>. The <code>index</code> specified should be an integer between <code>0</code> and <code>str.length - 1</code>. If no index is provided the first character in the string is returned, since the default is <code>0</code>.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab09f2.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code20">

                        var str = "Hello World!";
document.write(str.charAt());  // Prints: H
document.write(str.charAt(6)); // Prints: W
document.write(str.charAt(30)); // Prints nothing
document.write(str.charAt(str.length - 1)); // Prints: !
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code20"), {
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
				<p>There is even better way to do this. Since ECMAScript 5, strings can be treated like read-only arrays, and you can access individual characters from a string using square brackets (<code>[]</code>) instead of the <code>charAt()</code> method, as demonstrated in the following example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe356.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code21">

                        var str = "Hello World!";
document.write(str[0]); // Prints: H
document.write(str[6]); // Prints: W
document.write(str[str.length - 1]); // Prints: !
document.write(str[30]); // Prints: undefined
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code21"), {
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
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The only difference between accessing the character from a string using the <code>charAt()</code> and square bracket (<code>[]</code>) is that if no character is found, <code>[]</code> returns <a href="js_data-types.php#undefined"><code>undefined</code></a>, whereas the <code>charAt()</code> method returns an empty string.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<hr />
				<h2>Splitting a String into an Array</h2>
				<p>The <code>split()</code> method can be used to splits a string into an array of strings, using the syntax <code>str.split(separator, limit)</code>. The <code>seperator</code> argument specifies the string at which each split should occur, whereas the <code>limit</code> arguments specifies the maximum length of the array.</p>
				<p>If <code>separator</code> argument is omitted or not found in the specified string, the entire string is assigned to the first element of the array. The following example shows how it works:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5dcb.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code22">

                        var fruitsStr = "Apple, Banana, Mango, Orange, Papaya";
var fruitsArr = fruitsStr.split(", ");
document.write(fruitsArr[0]); // Prints: Apple
document.write(fruitsArr[2]); // Prints: Mango
document.write(fruitsArr[fruitsArr.length - 1]); // Prints: Papaya
 
// Loop through all the elements of the fruits array 
for(var i in fruitsArr) {  
    document.write("<p>" + fruitsArr[i] + "</p>");
}
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code22"), {
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
				<p>To split a string into an array of characters, specify an empty string (<code>""</code>) as a separator.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab4d9a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code23">
                        var str = "INTERSTELLAR";
var strArr = str.split("");
document.write(strArr[0]); // Prints: I
document.write(strArr[1]); // Prints: N
document.write(strArr[strArr.length - 1]); // Prints: R
 
// Loop through all the elements of the characters array and print them
for(var i in strArr) {  
    document.write("<br>" + strArr[i]);
}
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code23"), {
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
                <p>You will learn about looping statements in detail <a href="js_loops.php">JavaScript loops</a> chapter.</p>
				<!--Bottom Navigation-->				
                <div class="bottom-link clearfix">
                    <a href="js_events.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_numbers.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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