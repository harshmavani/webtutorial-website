<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Arrays">
	  <meta name="keywords" content="javascript,JavaScript Arrays">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Arrays - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Arrays</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_sorting-arrays.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_switch-case-statements.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Arrays</span></h1>
                <p class="summary">In this tutorial you will learn how to create and manipulate arrays in JavaScript.</p>
				<h2>What is an Array</h2>
				<p>Arrays are complex variables that allow us to store more than one value or a group of values under a single variable name. JavaScript arrays can store any valid value, including strings, numbers, objects, functions, and even other arrays, thus making it possible to create more complex data structures such as an array of objects or an array of arrays.</p>
				<p>Let's suppose you want to store the name of colors in your JavaScript code. Storing the color names one by one in a variable could look something like this:</p>
				<!--Code box-->
                <div class="example break">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6a9f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        var color1 = "Red";
var color2 = "Green";
var color3 = "Blue";
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
				<p class="space">But what happens if you need to store the state or city names of a country in variables and this time this not just three may be hundred. It is quite hard and boring to store each of them in a separate variable. Also, using so many variables simultaneously and keeping track of them all will be a very difficult task. And here array comes into play. Arrays solve this problem by providing an ordered structure for storing multiple values or a group of values.</p>
				<h2>Creating an Array</h2>
				<p>The simplest way to create an array in JavaScript is enclosing a comma-separated list of values in square brackets (<code>[]</code>), as shown in the following syntax:</p>
				<div class="shadow">
					<div class="syntax"><span class="cm-keyword">var</span> myArray = [<span class="cm-string"><i>element0</i></span>, <span class="cm-string"><i>element1</i></span>, ..., <span class="cm-string"><i>elementN</i></span>];</div>
				</div>
				<p>Array can also be created using the <code>Array()</code> constructor as shown in the following syntax. However, for the sake of simplicity previous syntax is recommended.</p>
				<div class="shadow">
					<div class="syntax"><span class="cm-keyword">var</span> myArray = <span class="cm-keyword">new</span> Array(<span class="cm-string"><i>element0</i></span>, <span class="cm-string"><i>element1</i></span>, ..., <span class="cm-string"><i>elementN</i></span>);</div>
				</div>
				<p>Here are some examples of arrays created using array literal syntax:</p>
				<!--Code box-->
                <div class="example break">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2076.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        var colors = ["Red", "Green", "Blue"]; 
var fruits = ["Apple", "Banana", "Mango", "Orange", "Papaya"];
var cities = ["London", "Paris", "New York"];
var person = ["John", "Wick", 32];
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
				<!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div title="Important Notes" class="info-tab note-icon">&nbsp;</div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> An array is an ordered collection of values. Each value in an array is called an element, and each element has a numeric position in an array, known as its index.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<hr />
				<h2>Accessing the Elements of an Array</h2>
				<p>Array elements can be accessed by their index using the square bracket notation. An index is a number that represents an element's position in an array.</p>
                <p>Array indexes are zero-based. This means that the first item of an array is stored at index 0, not 1, the second item is stored at index 1, and so on. Array indexes start at 0 and go up to the number of elements minus 1. So, array of five elements would have indexes from 0 to 4.</p>
                <p>The following example will show you how to get individual array element by their index.</p>
				<!--Code box-->
                <div class="example break">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6a4d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        var fruits = ["Apple", "Banana", "Mango", "Orange", "Papaya"];
 
 document.write(fruits[0]); // Prints: Apple
 document.write(fruits[1]); // Prints: Banana
 document.write(fruits[2]); // Prints: Mango
 document.write(fruits[fruits.length - 1]); // Prints: Papaya
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
                        <div title="Important Notes" class="info-tab note-icon"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> In JavaScript, arrays are really just a special type of objects which has numeric indexes as keys. The <a href="js_data-types.php#typeof"><code>typeof</code></a> operator will return "object" for arrays.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<hr />
				<h2>Getting the Length of an Array</h2>
				<p>The <code>length</code> property returns the length of an array, which is the total number of elements contained in the array. Array length is always greater than the index of any of its element.</p>
				<!--Code box-->
                <div class="example break">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2bc5.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        var fruits = ["Apple", "Banana", "Mango", "Orange", "Papaya"];
document.write(fruits.length); // Prints: 5
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
				<h2>Looping Through Array Elements</h2>
				<p>You can use <a href="js_loops.php#for"><code>for</code></a> loop to access each element of an array in sequential order, like this:</p>
				<!--Code box-->
                <div class="example break">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5e74.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        var fruits = ["Apple", "Banana", "Mango", "Orange", "Papaya"];
 
 // Iterates over array elements
 for(var i = 0; i < fruits.length; i++) {    
     document.write(fruits[i] + "<br>"); // Print array element
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
				<p>ECMAScript 6 has introduced a simpler way to iterate over array element, which is <code>for-of</code> loop. In this loop you don't have to initialize and keep track of the loop counter variable (<code>i</code>).</p>
				<p>Here's the same example rewritten using the <code>for-of</code> loop:</p>
				<!--Code box-->
                <div class="example break">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe815.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

                        var fruits = ["Apple", "Banana", "Mango", "Orange", "Papaya"];
 
 // Iterates over array elements
 for(var fruit of fruits) {    
     document.write(fruit + "<br>"); // Print array element
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
				<p>You can also iterate over the array elements using <code>for-in</code> loop, like this:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba789.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

                        var fruits = ["Apple", "Banana", "Mango", "Orange", "Papaya"];
 
 // Loop through all the elements in the array 
 for(var i in fruits) {  
     document.write(fruits[i] + "<br>");
 }
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
				<!--Note box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> The <code>for-in</code> loop should not be used to iterate over an array where the index order is important. The <code>for-in</code> loop is optimized for iterating over <a href="js_objects.php">object's properties</a>, you should better use a <code>for</code> loop with a numeric index or <code>for-of</code> loop.</p>
                        </div>
                    </div>
                </div>
                <!--End:Note box-->
				<hr />
				<h2>Adding New Elements to an Array</h2>
				<p>To add a new element at the end of an array, simply use the <code>push()</code> method, like this:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5de4.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code8">

                        var colors = ["Red", "Green", "Blue"]; 
colors.push("Yellow");
 
document.write(colors); // Prints: Red,Green,Blue,Yellow
document.write(colors.length); // Prints: 4
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
				<p>Similarly, to add a new element at the beginning of an array use the <code>unshift()</code> method, like this:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5ac6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

                        var colors = ["Red", "Green", "Blue"]; 
colors.unshift("Yellow");
 
document.write(colors); // Prints: Yellow,Red,Green,Blue
document.write(colors.length); // Prints: 4
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
				<p>You can also add multiple elements at once using the <code>push()</code> and <code>unshift()</code> methods, like this:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba6f8.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

                        var colors = ["Red", "Green", "Blue"];
colors.push("Pink", "Voilet");
colors.unshift("Yellow", "Grey");
 
document.write(colors); // Prints: Yellow,Grey,Red,Green,Blue,Pink,Voilet
document.write(colors.length); // Prints: 7
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
				<hr />
				<h2>Removing Elements from an Array</h2>
				<p>To remove the last element from an array you can use the <code>pop()</code> method. This method returns the value that was popped out. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6994.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11">

                        var colors = ["Red", "Green", "Blue"];
var last = colors.pop();
 
document.write(last); // Prints: Blue
document.write(colors.length); // Prints: 2
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
				<p>Similarly, you can remove the first element from an array using the <code>shift()</code> method. This method also returns the value that was shifted out. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba057.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code12">

                        var colors = ["Red", "Green", "Blue"];
var first = colors.shift();
 
document.write(first); // Prints: Red
document.write(colors.length); // Prints: 2
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
				<!--Tip Box-->
				<div class="color-box">
					<div class="shadow">
						<div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
						<div class="tip-box"   style="background-color:#fad28c">
							<p><strong>Important:</strong> The <code>push()</code> and <code>pop()</code> methods runs faster than <code>unshift()</code> and <code>shift()</code>. Because <code>push()</code> and <code>pop()</code> methods simply add and remove elements at the end of an array therefore the elements do not move, whereas <code>unshift()</code> and <code>shift()</code> add and remove elements at the beginning of the array that require re-indexing of whole array.</p>
						</div>
					</div>
				</div>
				<!--End:Tip Box-->
				<hr />
				<h2>Adding or Removing Elements at Any Position</h2>
				<p>The <code>splice()</code> method is a very versatile array method that allows you to add or remove elements from any index, using the syntax <code>arr.splice(startIndex, deleteCount, elem1, ..., elemN)</code>. </p>
				<p>This method takes three parameters: the first parameter is the index at which to start splicing the array, it is required; the second parameter is the number of elements to remove (use <code>0</code> if you don't want to remove any elements), it is optional; and the third parameter is a set of replacement elements, it is also optional. The following example shows how it works:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5bcf.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code13">

                        var colors = ["Red", "Green", "Blue"];
var removed = colors.splice(0,1); // Remove the first element
 
document.write(colors); // Prints: Green,Blue
document.write(removed); // Prints: Red (one item array)
document.write(removed.length); // Prints: 1
 
removed = colors.splice(1, 0, "Pink", "Yellow"); // Insert two items at position one
document.write(colors); // Prints: Green,Pink,Yellow,Blue
document.write(removed); // Empty array
document.write(removed.length); // Prints: 0
 
removed = colors.splice(1, 1, "Purple", "Voilet"); // Insert two values, remove one
document.write(colors); //Prints: Green,Purple,Voilet,Yellow,Blue
document.write(removed); // Prints: Pink (one item array)
document.write(removed.length); // Prints: 1
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
				<p>The <code>splice()</code> method returns an array of the deleted elements, or an empty array if no elements were deleted, as you can see in the above example. If the second argument is omitted, all elements from the start to the end of the array are removed. Unlike <a href="#slice"><code>slice()</code></a> and <a href="#concat"><code>concat()</code></a> methods, the <code>splice()</code> method modifies the array on which it is called on.</p>
				<hr />
				<h2>Creating a String from an Array</h2>
				<p>There may be situations where you simply want to create a string by joining the elements of an array. To do this you can use the <code>join()</code> method. This method takes an optional parameter which is a separator string that is added in between each element. If you omit the separator, then JavaScript will use comma (<code>,</code>) by default. The following example shows how it works:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab1c89.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code14">

                        var colors = ["Red", "Green", "Blue"];
 
 document.write(colors.join()); // Prints: Red,Green,Blue
 document.write(colors.join("")); // Prints: RedGreenBlue
 document.write(colors.join("-")); // Prints: Red-Green-Blue
 document.write(colors.join(", ")); // Prints: Red, Green, Blue
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
				<p>You can also convert an array to a comma-separated string using the <code>toString()</code>. This method does not accept the separator parameter like <code>join()</code>. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe481.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code15">

                        var fruits = ["Apple", "Banana", "Mango", "Orange", "Papaya"];
var subarr = fruits.slice(1, 3);
document.write(subarr); // Prints: Banana,Mango
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
				<hr />
				<h2 id="slice">Extracting a Portion of an Array</h2>
				<p>If you want to extract out a portion of an array (i.e. subarray) but keep the original array intact you can use the <code>slice()</code> method. This method takes 2 parameters: start index (index at which to begin extraction), and an optional end index (index before which to end extraction), like <code>arr.slice(startIndex, endIndex)</code>. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2c6a.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code16">

                        var fruits = ["Apple", "Banana", "Mango", "Orange", "Papaya"];
 
 document.write(fruits.slice(2)); // Prints: Mango,Orange,Papaya
 document.write(fruits.slice(-2)); // Prints: Orange,Papaya
 document.write(fruits.slice(2, -1)); // Prints: Mango,Orange
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
				<p>If <code>endIndex</code> parameter is omitted, all elements to the end of the array are extracted. You can also specify negative indexes or offsets &mdash;in that case the <code>slice()</code> method extract the elements from the end of an array, rather then the begining. For example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf297.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code17">
                        var pets = ["Cat", "Dog", "Parrot"];
var wilds = ["Tiger", "Wolf", "Zebra"];
 
// Creating new array by combining pets and wilds arrays
var animals = pets.concat(wilds); 
document.write(animals); // Prints: Cat,Dog,Parrot,Tiger,Wolf,Zebra
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
				<hr />
				<h2 id="concat">Merging Two or More Arrays</h2>
				<p>The <code>concat()</code> method can be used to merge or combine two or more arrays. This method does not change the existing arrays, instead it returns a new array. For example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0e9c.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code18">

                        var pets = ["Cat", "Dog", "Parrot"];
var wilds = ["Tiger", "Wolf", "Zebra"];
var bugs = ["Ant", "Bee"];
 
// Creating new array by combining pets, wilds and bugs arrays
var animals = pets.concat(wilds, bugs); 
document.write(animals); // Prints: Cat,Dog,Parrot,Tiger,Wolf,Zebra,Ant,Bee
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
				<p>The <code>concat()</code> method can take any number of array arguments, so you can create an array from any number of other arrays, as shown in the following example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd575.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code19">

                        var fruits = ["Apple", "Banana", "Mango", "Orange", "Papaya"];
 
 document.write(fruits.indexOf("Apple")); // Prints: 0
 document.write(fruits.indexOf("Banana")); // Prints: 1
 document.write(fruits.indexOf("Pineapple")); // Prints: -1
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
				<hr />
				<h2>Searching Through an Array</h2>
				<p>If you want to search an array for a specific value, you can simply use the <code>indexOf()</code> and <code>lastIndexOf()</code>. If the value is found, both methods return an index representing the array element. If the value is not found, <code>-1</code> is returned. The <code>indexOf()</code> method returns the first one found, whereas the <code>lastIndexOf()</code> returns the last one found.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5df9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code20">

                        var arr = [1, 0, 3, 1, false, 5, 1, 4, 7];
 
 // Searching forwards, starting at from- index
 document.write(arr.indexOf(1, 2)); // Prints: 3
  
 // Searching backwards, starting at from index
 document.write(arr.lastIndexOf(1, 2)); // Prints: 0
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
				<p>Both methods also accept an optional integer parameter <em>from index</em> which specifies the index within the array at which to start the search. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba6f6.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code21">

                        var arr = [1, 0, 3, 1, false, 5, 1, 4, 7];
 
 document.write(arr.includes(1)); // Prints: true
 document.write(arr.includes(6)); // Prints: false
 document.write(arr.includes(1, 2)); // Prints: true
 document.write(arr.includes(3, 4)); // Prints: false
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
				<p>You can also use <code>includes()</code> method to find out whether an array includes a certain element or not. This method takes the same parameters as <code>indexOf()</code> and <code>lastIndexOf()</code> methods, but it returns <code>true</code> or <code>false</code> instead of index number. For example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2c51.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code22">

                        var arr = [1, 0, 3, 1, false, 5, 1, 4, 7];
 
 var result = arr.find(function(element) {
   return element > 4;
 });
 document.write(result); // Prints: 5
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
				<p>If you want to search an array based on certain condition then you can use the JavaScript <code>find()</code> method which is newly introduced in ES6. This method returns the value of the <em>first element</em> in the array that satisfies the provided testing function. Otherwise it return <code>undefined</code>.</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6806.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code23">

                        var arr = [1, 0, 3, 1, false, 5, 1, 4, 7];
 
 var result = arr.findIndex(function(element) {
   return element > 6;
 });
 document.write(result); // Prints: 8
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
				<p>There is one more method similar to <code>find()</code> is <code>findIndex()</code> method, which returns the index of a found element in the array instead of its value. For example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab0e70.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code24">

                        var arr = [1, 0, 3, 1, false, 5, 1, 4, 7];
 
 var result = arr.filter(function(element) {
   return element > 4;
 });
 document.write(result); // Prints: 5,7
 document.write(result.length); // Prints: 2
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code24"), {
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
				<p>The <code>find()</code> method only looks for the first element that satisfies the provided testing function. However, if you want to find out all the matched elements you can use the <code>filter()</code> method.</p>
				<p>The <code>filter()</code> method creates a new array with all the elements that successfully passes the given test. The following example will show you how this actually works:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabdc84.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code25">
                        var arr = [1, 0, 3, 1, false, 5, 1, 4, 7];
 
 var result = arr.filter(function(element) {
   return element > 4;
 });
 document.write(result); // Prints: 5,7
 document.write(result.length); // Prints: 2
     </textarea>
	                            <script>
								var editor = CodeMirror.fromTextArea(document.getElementById("code25"), {
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
                    <a href="js_switch-case-statements.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_sorting-arrays.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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