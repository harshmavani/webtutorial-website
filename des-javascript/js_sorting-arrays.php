<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="JavaScript Sorting Arrays">
	  <meta name="keywords" content="javascript,js,JavaScript Sorting Arrays">
	  <meta name="author" content="webschooltoday.com">
    <title>JavaScript Sorting Arrays - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">JavaScript Sorting Arrays</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_loops.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_arrays.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Sorting Arrays</span></h1>
                <p class="summary">In this tutorial you will learn how to sort array elements in JavaScript.</p>
				<h2>Sorting an Array</h2>
				<p>Sorting is a common task when working with arrays. It would be used, for instance, if you want to display the city or county names in alphabetical order.</p>
				<p>The JavaScript Array object has a built-in method <code>sort()</code> for sorting array elements in alphabetical order. The following example demonstrates how it works:</p>
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab3d09.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code1">

						var fruits = ["Banana", "Orange", "Apple", "Papaya", "Mango"];
var sorted = fruits.sort();

alert(fruits); // Outputs: Apple,Banana,Mango,Orange,Papaya
alert(sorted); // Outputs: Apple,Banana,Mango,Orange,Papaya
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
				<hr />
				<h2>Reversing an Array</h2>
				<p>You can use the <code>reverse()</code> method to reverse the order of the elements of an array.</p>
				<p>This method reverses an array in such a way that the first array element becomes the last, and the last array element becomes the first. Here's an example:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabb1ee.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code2">

						var counts = ["one", "two", "three", "four", "five"];
var reversed = counts.reverse(); 

alert(counts); // Outputs: five,four,three,two,one
alert(reversed); // Output: five,four,three,two,one
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
						<div title="Important Notes" class="info-tab note-icon"><i></i></div>
						<div class="note-box"  style="background-color:#ff8585"
>
							<p><strong>Read Carefully:</strong> The <code>sort()</code> and <code>reverse()</code> method modifies the original array and return a reference to the same array, as you can see in the above examples.</p>
						</div>
					</div>
				</div>
				<!--End:Note box-->
				<hr />
				<h2>Sorting Numeric Arrays</h2>
				<p>The <code>sort()</code> method may produce unexpected result when it is applied on the numeric arrays (i.e. arrays containing numeric values). For instance:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabb62d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code3">

						var numbers = [5, 20, 10, 75, 50, 100];
numbers.sort(); // Sorts numbers array
alert(numbers); // Outputs: 10,100,20,5,50,75
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
				<p>As you can see, the result is different from what we've expected. It happens because, the <code>sort()</code> method sorts the numeric array elements by converting them to strings (i.e. 20 becomes "20", 100 becomes "100", and so on), and since the first character of string "20" (i.e. "2") comes after the first character of string "100" (i.e. "1"), that's why the value 20 is sorted after the 100.</p>
				<p>To fix this sorting problem with numeric array, you can pass a compare function, like this:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelab6707.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code4">

						var numbers = [5, 20, 10, 75, 50, 100];

// Sorting an array using compare function
numbers.sort(function(a, b) {
    return a - b;
});
alert(numbers); // Outputs: 5,10,20,50,75,100
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
				<p>As you can see, this time we've got the correct result. Let's see how it works.</p>
				<p>When compare function is specified, array elements are sorted according to the return value of the compare function. For example, when comparing <code>a</code> and <code>b</code>:
				<ul>
					<li>If the compare function returns a value less than 0, then <code>a</code> comes first.</li>
					<li>If the compare function returns a value greater than 0, then <code>b</code> comes first.</li>
					<li>If the compare function returns 0, <code>a</code> and <code>b</code> remain unchanged with respect to each other, but sorted with respect to all other elements.</li>
				</ul>
				<p>Hence, since <code>5 - 20 = -15</code> which is less than 0, therefore 5 comes first, similarly <code>20 - 10 = 10</code> which is greater than 0, therefore 10 comes before 20, likewise <code>20 - 75 = -55</code> which is less than 0, so 20 comes before 75, similarly 50 comes before 75, and so on.</p>
				<hr />
				<h2>Finding the Maximum and Minimum Value in an Array</h2>
				<p>You can use the <code>apply()</code> method in combination with the <code>Math.max()</code> and <code>Math.min()</code> to find the maximum and minimum value inside an array, like this:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabe6eb.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code5">

						var numbers = [3, -7, 10, 8, 15, 2];

// Defining function to find maximum value
function findMax(array) {
    return Math.max.apply(null, array);
}

// Defining function to find minimum value
function findMin(array) {
    return Math.min.apply(null, array);
}

alert(findMax(numbers)); // Outputs: 15
alert(findMin(numbers)); // Outputs: -7
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
				<p></p>
				<p>The <code>apply()</code> method provides a convenient way to pass array values as arguments to a function that accepts multiple arguments in an array-like manner, but not an array (e.g. <code>Math.max()</code> and <code>Math.min()</code> methods here). So, the resulting statement <code>Math.max.apply(null, numbers)</code> in the example above is equivalent to the <code>Math.max(3, -7, 10, 8, 15, 2)</code>.</p>
				<hr />
				<h2>Sorting an Array of Objects</h2>
				<p>The <code>sort()</code> method can also be used for sorting object arrays using the compare function.</p>
				<p>The following example will show you how to sort an array of objects by property values:</p>
				<!--Code box-->
				<div class="example break">
					<div class="my_codeb">
						<div class="my_codeb-title"><h4>Example</h4><a href="../codelabe538.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
						<textarea id="code6">

						var persons = [
    { name: "Harry", age: 14 },
    { name: "Ethan", age: 30 },
    { name: "Peter", age: 21 },
    { name: "Clark", age: 42 },
    { name: "Alice", age: 16 }
];

// Sort by age
persons.sort(function (a, b) {
    return a.age - b.age;
});

console.log(persons);

// Sort by name
persons.sort(function(a, b) {
    var x = a.name.toLowerCase(); // ignore upper and lowercase
    var y = b.name.toLowerCase(); // ignore upper and lowercase
    if(x < y) {
        return -1;
    }
    if(x > y) {
        return 1;
    }
    // names must be equal
    return 0;
});

console.log(persons);
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
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_arrays.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_loops.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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