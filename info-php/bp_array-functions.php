<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="PHP 7 Array Functions">
	  <meta name="keywords" content="php,backend,Array Functions">
	  <meta name="author" content="webschooltoday.com">
    <title>PHP 7 Array Functions - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">PHP 7 Array Functions</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "info_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_file-system-functions.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_string-functions.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP 7 <span>Array</span> Functions</h1>
                <p class="summary">The following section contains a list of useful PHP array functions.</p>
                <h2>PHP Array Functions</h2>
                <p>The following array functions are the part of the PHP core so you can use these functions within your script without any further installation</p>
                <div class="shadow">
                    <table class="data">
                    	<thead>
                        	 <tr>
                                <th>Function</th>
                                <th>Description</th>
                            </tr>
                    	</thead>
                     	<tbody>
                            <tr>
                                <td><code>array()</code></td>
                                <td>Create an array</td>
                            </tr>                      
                            <tr>
                                <td><code>array_change_key_case()</code></td>
                                <td>Changes the case of all keys in an array (either lowercase or uppercase)</td>
                            </tr>
                            <tr>
                                <td><code>array_chunk()</code></td>
                                <td>Split an array into chunks of arrays</td>
                            </tr>
                            <tr>
                                <td><code>array_column()</code></td>
                                <td>Return the values from a single column in the input array</td>
                            </tr>
                            <tr>
                                <td><code>array_combine()</code></td>
                                <td>Creates an array by using one array for keys and another for its values</td>
                            </tr>
                            <tr>
                                <td><code>array_count_values()</code></td>
                                <td>Counts all the values of an array</td>
                            </tr>
                            <tr>
                                <td><code>array_diff()</code></td>
                                <td>Compare arrays values, and returns the differences</td>
                            </tr>
                            <tr>
                                <td><code>array_diff_assoc()</code></td>
                                <td>Compare arrays keys and values, and returns the differences</td>
                            </tr>
                            <tr>
                                <td><code>array_diff_key()</code></td>
                                <td>Compare arrays keys, and returns the differences</td>
                            </tr>
                            <tr>
                                <td><code>array_diff_uassoc()</code></td>
                                <td>Compare arrays keys and values, using a user-defined key comparison function, and returns the differences</td>
                            </tr>
                            <tr>
                                <td><code>array_diff_ukey()</code></td>
                                <td>Compare array keys, using a user-defined key comparison function, and returns the differences</td>
                            </tr>
                            <tr>
                                <td><code>array_fill()</code></td>
                                <td>Fill an array with values</td>
                            </tr>
                            <tr>
                                <td><code>array_fill_keys()</code></td>
                                <td>Fill an array with values, specifying keys</td>
                            </tr>
                            <tr>
                                <td><code>array_filter()</code></td>
                                <td>Filters elements of an array using a user-defined function</td>
                            </tr>
                            <tr>
                                <td><code>array_flip()</code></td>
                                <td>Flips or Exchanges all keys with their associated values in an array</td>
                            </tr>
                            <tr>
                                <td><code>array_intersect()</code></td>
                                <td>Compare arrays values, and returns the matches</td>
                            </tr>
                            <tr>
                                <td><code>array_intersect_assoc()</code></td>
                                <td>Compare arrays keys and values, and returns the matches</td>
                            </tr>
                            <tr>
                                <td><code>array_intersect_key()</code></td>
                                <td>Compare arrays keys, and returns the matches</td>
                            </tr>
                            <tr>
                                <td><code>array_intersect_uassoc()</code></td>
                                <td>Compare arrays keys and values, using a user-defined key comparison function, and returns the matches</td>
                            </tr>
                            <tr>
                                <td><code>array_intersect_ukey()</code></td>
                                <td>Compare arrays keys, using a user-defined key comparison function, and returns the matches</td>
                            </tr>
                            <tr>
                                <td><code>array_keys()</code></td>
                                <td>Return all the keys or a subset of the keys of an array</td>
                            </tr>
                            <tr>
                                <td><code>array_key_exists()</code></td>
                                <td>Checks if the specified key exists in the array</td>
                            </tr>
                            <tr>
                                <td><code>array_map()</code></td>
                                <td>Sends the elements of the given arrays to a user-defined function, which may use it to returns new values</td>
                            </tr>
                            <tr>
                                <td><code>array_merge()</code></td>
                                <td>Merges one or more arrays into one array</td>
                            </tr>
                            <tr>
                                <td><code>array_merge_recursive()</code></td>
                                <td>Merges one or more arrays into one array recursively</td>
                            </tr>
                            <tr>
                                <td><code>array_multisort()</code></td>
                                <td>Sorts multiple or multi-dimensional arrays</td>
                            </tr>
                            <tr>
                                <td><code>array_pad()</code></td>
                                <td>Inserts a specified number of items, with a specified value, to an array</td>
                            </tr>
                            <tr>
                                <td><code>array_pop()</code></td>
                                <td>Removes the last element of an array, and returns the value of the removed element</td>
                            </tr>
                            <tr>
                                <td><code>array_product()</code></td>
                                <td>Calculates the product of the values in an array</td>
                            </tr>
                            <tr>
                                <td><code>array_push()</code></td>
                                <td>Inserts one or more elements to the end of an array</td>
                            </tr>
                            <tr>
                                <td><code>array_rand()</code></td>
                                <td>Returns one or more random keys from an array</td>
                            </tr>
                            <tr>
                                <td><code>array_reduce()</code></td>
                                <td>Reduce the array to a single value by using a user-defined callback function</td>
                            </tr>
                            <tr>
                                <td><code>array_replace()</code></td>
                                <td>Replaces the values of the first array with the values from following arrays</td>
                            </tr>
                            <tr>
                                <td><code>array_replace_recursive()</code></td>
                                <td>Replaces the values of the first array with the values from following arrays recursively</td>
                            </tr>
                            <tr>
                                <td><code>array_reverse()</code></td>
                                <td>Return an array with elements in reverse order</td>
                            </tr>
                            <tr>
                                <td><code>array_search()</code></td>
                                <td>Searches an array for a given value and returns the corresponding key if successful</td>
                            </tr>
                            <tr>
                                <td><code>array_shift()</code></td>
                                <td>Removes the first element from an array, and returns the value of the removed element</td>
                            </tr>
                            <tr>
                                <td><code>array_slice()</code></td>
                                <td>Extract a slice from an array</td>
                            </tr>
                            <tr>
                                <td><code>array_splice()</code></td>
                                <td>Remove a portion of the array and replace it with something else</td>
                            </tr>
                            <tr>
                                <td><code>array_sum()</code></td>
                                <td>Calculate the sum of values in an array</td>
                            </tr>
                            <tr>
                                <td><code>array_udiff()</code></td>
                                <td>Compares only arrays values by using a user-defined comparison callback function, and returns the differences</td>
                            </tr>			
                            <tr>
                                <td><code>array_udiff_assoc()</code></td>
                                <td>Compares arrays values by using a user-defined comparison callback function, with additional keys comparison using an internal (or built-in) function, and returns the differences</td>
                            </tr>
                            <tr>
                                <td><code>array_udiff_uassoc()</code></td>
                                <td>Compares arrays keys and values by using two separate user-defined comparison callback functions, and returns the differences</td>
                            </tr>
                            <tr>
                                <td><code>array_uintersect()</code></td>
                                <td>Compares only arrays values by using a user-defined comparison callback function, and returns the matches</td>
                            </tr>
                            <tr>
                                <td><code>array_uintersect_assoc()</code></td>
                                <td>Compares arrays values by using a user-defined comparison callback function, while uses an internal (or built-in) function for comparing the key, and returns the matches</td>
                            </tr>
                            <tr>
                                <td><code>array_uintersect_uassoc()</code></td>
                                <td>Compares arrays keys and values by using two separate user-defined comparison callback functions, and returns the matches</td>
                            </tr>
                            <tr>
                                <td><code>array_unique()</code></td>
                                <td>Removes duplicate values from an array</td>
                            </tr>
                            <tr>
                                <td><code>array_unshift()</code></td>
                                <td>Adds one or more elements to the beginning of an array</td>
                            </tr>
                            <tr>
                                <td><code>array_values()</code></td>
                                <td>Return all the values of an array</td>
                            </tr>
                            <tr>
                                <td><code>array_walk()</code></td>
                                <td>Applies a user-defined function to each element of an array</td>
                            </tr>
                            <tr>
                                <td><code>array_walk_recursive()</code></td>
                                <td>Applies a user-defined function recursively to each element of an array</td>
                            </tr>
                            <tr>
                                <td><code>asort()</code></td>
                                <td>Sort an associative array by value, in ascending order</td>
                            </tr>
                            <tr>
                                <td><code>arsort()</code></td>
                                <td>Sort an associative array by value, in reverse or descending order</td>
                            </tr>
                            <tr>
                                <td><code>compact()</code></td>
                                <td>Create array containing variables and their values</td>
                            </tr>
                            <tr>
                                <td><code>count()</code></td>
                                <td>Count all elements in an array</td>
                            </tr>
                            <tr>
                                <td><code>current()</code></td>
                                <td>Return the current element in an array</td>
                            </tr>
                            <tr>
                                <td><code>each()</code></td>
                                <td>Return the current key and value pair from an array and advance the array cursor</td>
                            </tr>
                            <tr>
                                <td><code>end()</code></td>
                                <td>Sets the internal pointer of an array to its last element</td>
                            </tr>
                            <tr>
                                <td><code>extract()</code></td>
                                <td>Import variables into the current symbol table from an array</td>
                            </tr>
                            <tr>
                                <td><code>in_array()</code></td>
                                <td>Checks if a value exists in an array</td>
                            </tr>
                            <tr>
                                <td><code>key_exists()</code></td>
                                <td>Checks if the specified key exists in the array. Alias of <code>array_key_exists()</code></td>
                            </tr>
                            <tr>
                                <td><code>key()</code></td>
                                <td>Fetches a key from an array</td>
                            </tr>
                            <tr>
                                <td><code>ksort()</code></td>
                                <td>Sort an associative array by key, in ascending order</td>
                            </tr>
                            <tr>
                                <td><code>krsort()</code></td>
                                <td>Sort an associative array by key, in reverse or descending order</td>
                            </tr>
                            <tr>
                                <td><code>list()</code></td>
                                <td>Assign variables as if they were an array</td>
                            </tr>
                            <tr>
                                <td><code>natcasesort()</code></td>
                                <td>Sort an array using a case insensitive "natural order" algorithm</td>
                            </tr>
                            <tr>
                                <td><code>natsort()</code></td>
                                <td>Sort an array using a "natural order" algorithm</td>
                            </tr>
                            <tr>
                                <td><code>next()</code></td>
                                <td>Advance the internal array pointer of an array</td>
                            </tr>
                            <tr>
                                <td><code>pos()</code></td>
                                <td>Return the current element in an array. Alias of <code>current()</code></td>
                            </tr>
                            <tr>
                                <td><code>prev()</code></td>
                                <td>Rewind the internal array pointer</td>
                            </tr>
                            <tr>
                                <td><code>range()</code></td>
                                <td>Create an array containing a range of elements</td>
                            </tr>
                            <tr>
                                <td><code>reset()</code></td>
                                <td>Set the internal pointer of an array to its first element</td>
                            </tr>
                            <tr>
                                <td><code>rsort()</code></td>
                                <td>Sort an array in reverse or descending order</td>
                            </tr>
                            <tr>
                                <td><code>shuffle()</code></td>
                                <td>Shuffle an array</td>
                            </tr>
                            <tr>
                                <td><code>sizeof()</code></td>
                                <td>Count all elements in an array. Alias of <code>count()</code></td>
                            </tr>
                            <tr>
                                <td><code>sort()</code></td>
                                <td>Sort an array in ascending order</td>
                            </tr>
                            <tr>
                                <td><code>uasort()</code></td>
                                <td>Sort an array using a user-defined comparison function and maintain index association</td>
                            </tr>
                            <tr>
                                <td><code>uksort()</code></td>
                                <td>Sort an array by keys using a user-defined comparison function</td>
                            </tr>
                            <tr>
                                <td><code>usort()</code></td>
                                <td>Sort an array by values using a user-defined comparison function</td>
                            </tr>
                        </tbody>
                	</table>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_string-functions.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_file-system-functions.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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