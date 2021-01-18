<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="PHP 7 Sanitize and Validate Filters">
	  <meta name="keywords" content="php,backend,Sanitize and Validate Filters">
	  <meta name="author" content="webschooltoday.com">
    <title>PHP 7 Sanitize and Validate Filters - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Sanitize and Validate Filters</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "info_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_error-levels.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="bp_mysqli-functions.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP 7 <span>Filters</span></h1>
                <p class="summary">The PHP filters is used to sanitize and validate and data coming from insecure sources, like user input.</p>
                <h2>PHP Filter Functions</h2>
                <p>Since PHP 5.2.0, the filter functions are enabled by default. You can use them directly in your code without any further installation.</p>
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
                                <td>filter_has_var()</td>
                                <td>Checks if variable of specified type exists</td>
                            </tr>
                            <tr>
                                <td>filter_id()</td>
                                <td>Returns the ID number of a specified filter</td>
                            </tr>
                            <tr>
                                <td>filter_input()</td>
                                <td>Gets a specific external variable by name and optionally filters it</td>
                            </tr>
                            <tr>
                                <td>filter_input_array()</td>
                                <td>Gets multiple external variables and optionally filters them</td>
                            </tr>
                            <tr>
                                <td>filter_list()</td>
                                <td>Returns an array of all supported filters</td>
                            </tr>
                            <tr>
                                <td>filter_var_array()</td>
                                <td>Gets multiple variables and optionally filters them</td>
                            </tr>
                            <tr>
                                <td>filter_var()</td>
                                <td>Filters a variable with a specified filter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr />
                <h2>PHP Sanitize Filters</h2>
                <p>The sanitize filters are used to sanitize or clean the user inputs.</p>
                <div class="shadow">
                	<table class="data">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>FILTER_SANITIZE_EMAIL</td>
                                <td>Remove all characters except letters, digits and <em>!#$%&amp;'*+-/=?^_`{|}~@.[]</em></td>
                            </tr>
                            <tr>
                                <td>FILTER_SANITIZE_ENCODED</td>
                                <td>URL-encode string, optionally strip or encode special characters.</td>
                            </tr>
                            <tr>
                                <td>FILTER_SANITIZE_MAGIC_QUOTES</td>
                                <td>Apply <code>addslashes()</code>.</td>
                            </tr>
                            <tr>
                                <td>FILTER_SANITIZE_NUMBER_FLOAT</td>
                                <td> Remove all characters except digits, <em>+-</em> and optionally <em>.,eE</em></td>
                            </tr>
                            <tr>
                                <td>FILTER_SANITIZE_NUMBER_INT</td>
                                <td>Remove all characters except digits, plus (+) and minus (-) sign.</td>
                            </tr>
                            <tr>
                                <td>FILTER_SANITIZE_SPECIAL_CHARS</td>
                                <td>HTML-escape <em>'"&lt;&gt;&amp;</em> and characters with ASCII value less than 32, optionally strip or encode other special characters.</td>
                            </tr>
                            <tr>
                                <td>FILTER_SANITIZE_STRING</td>
                                <td>Strip tags, optionally strip or encode special characters.</td>
                            </tr>
                            <tr>
                                <td>FILTER_SANITIZE_STRIPPED</td>
                                <td>Alias of "string" filter.</td>
                            </tr>
                            <tr>
                                <td>FILTER_SANITIZE_URL</td>
                                <td>Remove all characters except letters, digits and <em>$-_.+!*'(),{}|\\^~[]`&lt;&gt;#%";/?:@&amp;=</em></td>
                            </tr>
                            <tr>
                                <td>FILTER_UNSAFE_RAW</td>
                                <td>Do nothing, optionally strip or encode special characters.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr />
                <h2>Validate Filters</h2>
                <p>The sanitize filters are used to validate the user inputs.</p>
                <div class="shadow">
                	<table class="data">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>FILTER_VALIDATE_BOOLEAN</td>
                                <td>Returns TRUE for "1", "true", "on" and "yes". Returns FALSE otherwise.</td>
                            </tr>
                            <tr>
                                <td>FILTER_VALIDATE_EMAIL</td>
                                <td>Validates value as e-mail.</td>
                            </tr>
                            <tr>
                                <td>FILTER_VALIDATE_FLOAT</td>
                                <td>Validates value as float.</td>
                            </tr>
                            <tr>
                                <td>FILTER_VALIDATE_INT</td>
                                <td>Validates value as integer optionally from the specified range.</td>
                            </tr>
                            <tr>
                                <td>FILTER_VALIDATE_IP</td>
                                <td>Validates value as IP address, optionally only IPv4 or IPv6 or not from private or reserved ranges.</td>
                            </tr>
                            <tr>
                                <td>FILTER_VALIDATE_REGEXP</td>
                                <td>Validates value against regexp, a Perl-compatible regular expression.</td>
                            </tr>
                            <tr>
                                <td>FILTER_VALIDATE_URL</td>
                                <td>Validates value as URL, optionally with required components.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bp_mysqli-functions.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_error-levels.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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