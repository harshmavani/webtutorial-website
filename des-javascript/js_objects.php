<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Objects">
	  <meta name="keywords" content="javascript,js,JavaScript Objects">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Objects - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Objects</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_dom-nodes.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_functions.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Objects</span></h1>
                <p class="summary">In this tutorial you will learn how to create and use objects in JavaScript.</p>
				<h2>What is an Object?</h2>
				<p>JavaScript is an object-based language and in JavaScript almost everything is an object or acts like an object. So, to work with JavaScript effectively and efficiently we need to understand how objects work as well as how to create your own objects and use them.</p>
				<p class="space">A JavaScript object is just a collection of named values. These named values are usually referred to as properties of the object. If you remember from the <a href="js_arrays.php">JavaScript arrays</a> chapter, an array is a collection of values, where each value has an index (a numeric key) that starts from zero and increments by one for each value. An object is similar to an array, but the difference is that you define the keys yourself, such as name, age, gender, and so on. In the following sections we'll learn about objects in detail.</p>
				<h2>Creating Objects</h2>	
				<p>An object can be created with curly brackets <code>{}</code> with an optional list of properties. A property is a "key: value" pair, where the key (or <em>property name</em>) is always a string, and value (or <em>property value</em>) can be any data type, like strings, numbers, Booleans or complex data type like arrays, functions, and other objects. Additionally, properties with functions as their values are often called methods to distinguish them from other properties. A typical JavaScript object may look like this:</p>
				<!--Code box-->
                <div class="example">
                	<div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6588.php?topic=javascript&amp;file=creating-objects" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        var person = {
    name: "Peter",
    age: 28,
    gender: "Male",
    displayName: function() {
        alert(this.name);
    }
};
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
				<p>The above example creates an object called <code>person</code> that has three properties <code>name</code>, <code>age</code>, and <code>gender</code> and one method <code>displayName()</code>. The <code>displayName()</code> method displays the value of <code>this.name</code>, which resolves to <code>person.name</code>. This is the easiest and preferred way to create a new object in JavaScript, which is known as <em>object literals</em> syntax.</p>
				<p>The property names generally do not need to be quoted unless they are reserved words, or if they contain spaces or special characters (anything other than letters, numbers, and the <code>_</code> and <code>$</code> characters), or if they start with a number, as shown in the following example:</p>
				<!--Code box-->
                <div class="example">
                	<div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabd074.php?topic=javascript&amp;file=quoting-property-names-of-an-object" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                    	<textarea id="code2">

                        var person = {
    "first name": "Peter",
    "current age": 28,
    gender: "Male"
};
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
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> Since ECMAScript 5, reserved words can be used as object's property names without quoting. However, you should avoid doing this for better compatibility.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>Accessing Object's Properties</h2>
				<p>To access or get the value of a property, you can use the dot (<code>.</code>), or square bracket (<code>[]</code>) notation, as demonstrated in the following example:</p>
				<!--Code box-->
                <div class="example">
                	<div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab5001.php?topic=javascript&amp;file=get-properties-values-of-an-object" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        var book = {
    "name": "Harry Potter and the Goblet of Fire",
    "author": "J. K. Rowling",
    "year": 2000
};

// Dot notation
document.write(book.author);  // Prints: J. K. Rowling

// Bracket notation
document.write(book["year"]); // Prints: 2000
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
				<p>The dot notation is easier to read and write, but it cannot always be used. If the name of the property is not valid (i.e. if it contains spaces or special characters), you cannot use the dot notation; you'll have to use bracket notation, as shown in the following example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba00a.php?topic=javascript&amp;file=access-properties-of-an-object-using-bracket-notation" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        var book = {
    name: "Harry Potter and the Goblet of Fire",
    author: "J. K. Rowling",
    "publication date": "8 July 2000"
};

// Bracket notation
document.write(book["publication date"]); // Prints: 8 July 2000
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
				<p>The square bracket notation offers much more flexibility than dot notation. It also allows you to specify property names as variables instead of just string literals, as shown in the example below:</p>
				<!--Code box-->
                <div class="example">
                	<div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab05ce.php?topic=javascript&amp;file=dynamically-access-object-properties-using-variables" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        var person = {
    name: "Peter",
    age: 28,
    gender: "Male"
};

var key = prompt("Enter any property name to get its value");
alert(person[key]); // Outputs: Peter (if enter "name")
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
				<h2>Looping Through Object's Properties</h2>
				<p>You can iterate through the key-value pairs of an object using the <code>for...in</code> loop. This loop is specially optimized for iterating over object's properties. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabe7ba.php?topic=javascript&amp;file=loop-through-an-object" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code6">

                        var person = {
    name: "Peter",
    age: 28,
    gender: "Male"
};

// Iterating over object properties
for(var i in person) {  
    document.write(person[i] + "<br>"); // Prints: name, age and gender
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
				<h2>Setting Object's Properties</h2>
				<p>Similarly, you can set the new properties or update the existing one using the dot (<code>.</code>) or bracket (<code>[]</code>) notation, as demonstrated in the following example:</p>
				<!--Code box-->
                <div class="example">
                	<div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3150.php?topic=javascript&amp;file=set-the-properties-of-an-object" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code7">

                        var person = {
    name: "Peter",
    age: 28,
    gender: "Male"
};

// Setting a new property
person.country = "United States";
document.write(person.country); // Prints: United States

person["email"] = "peterparker@mail.com";
document.write(person.email); // Prints: peterparker@mail.com

// Updating existing property
person.age = 30;
document.write(person.age); // Prints: 30

person["name"] = "Peter Parker";
document.write(person.name); // Prints: Peter Parker
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
				<hr />
				<h2>Deleting Object's Properties</h2>
				<p>The <code>delete</code> operator can be used to completely remove properties from an object. Deleting is the only way to actually remove a property from an object. Setting the property to <code>undefined</code> or <code>null</code> only changes the value of the property. It does not remove property from the object.</p>
				<!--Code box-->
                <div class="example">
                	<div class="my_codeb">
					<div class="my_codeb-title"><h4>Example</h4><a href="../codelabea8b.php?topic=javascript&amp;file=remove-properties-from-an-object" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                	<textarea id="code8">

                    var person = {
    name: "Peter",
    age: 28,
    gender: "Male",
    displayName: function() {
        alert(this.name);
    }
};

// Deleting property
delete person.age;
alert(person.age); // Outputs: undefined
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
							<p><strong>Read Carefully:</strong> The <code>delete</code> operator only removes an object property or array element. It has no effect on variables or declared functions. However, you should avoid <code>delete</code> operator for deleting an array element, as it doesn't change the array's length, it just leaves a hole in the array.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>Calling Object's Methods</h2>
				<p>You can access an object's method the same way as you would access properties&mdash;using the dot notation or using the square bracket notation. Here's an example:</p>
				<!--Code box-->
                <div class="example">
                	<div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbdbf.php?topic=javascript&amp;file=call-the-methods-of-an-object" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code9">

                        var person = {
    name: "Peter",
    age: 28,
    gender: "Male",
    displayName: function() {
        alert(this.name);
    }
};

person.displayName(); // Outputs: Peter
person["displayName"](); // Outputs: Peter
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
				<hr />
				<h2>Manipulating by Value vs. Reference</h2>
				<p>JavaScript objects are reference types that mean when you make copies of them, you're really just copying the references to that object. Whereas <a href="js_data-types.php">primitive values</a> like strings and numbers are assigned or copied as a whole value. To better understand all this, let's check out the following example:</p>
				<!--Code box-->
                <div class="example">
                	<div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabc564-2.php?topic=javascript&amp;file=copy-by-value" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code10">

                        var message = "Hello World!";

var greet = message; // Assign message variable to a new variable
greet = "Hi, there!";

document.write(message);  // Prints: Hello World!
document.write(greet);  // Prints: Hi, there!
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
				<p>In the above example, we have made a copy of a variable <code>message</code> and changed the value of that copy (i.e. variable <code>greet</code>). The two variables remain distinct and separate. But, if we do the same thing with an object, we will get a different result, as you see in the following example:</p>
				<!--Code box-->
                <div class="example">
                	<div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelaba73d.php?topic=javascript&amp;file=copy-by-reference" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11">

                        var person = {
    name: "Peter",
    age: 28,
    gender: "Male"
};

var user = person; // Assign person variable to a new variable
user.name = "Harry";

document.write(person.name);  // Prints: Harry
document.write(user.name);  // Prints: Harry
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
				<p>You can clearly see, any changes made to the variable <code>user</code> also change the <code>person</code> variable; it happens because both variables reference the same object. So, simply copying the object does not actually clone it but copies the reference to that object.</p>
				<!--Bottom Navigation-->				
                <div class="bottom-link clearfix">
                    <a href="js_functions.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_dom-nodes.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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