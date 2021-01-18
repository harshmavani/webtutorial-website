<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="PHP 7 String Functions">
	  <meta name="keywords" content="php,backend,String Functions">
	  <meta name="author" content="webschooltoday.com">
    <title>PHP 7 String Functions - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">PHP 7 String Functions</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "info_php.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="bp_array-functions.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="javascript:void(0);" class="previous-page disabled" title="Go to Previous Page : Disabled"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>PHP 7 <span>String</span> Functions</h1>
                <p class="summary">The following section contains a list of useful PHP string functions.</p>
                <h2>PHP String Functions</h2>
                <p>The following string functions are the part of the PHP core so you can use these functions within your script without any further installation.</p>
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
                                <td><code>addcslashes()</code></td>
                                <td>Returns a string with backslashes before the specified characters</td>
                            </tr>
                            <tr>
                                <td><code>addslashes()</code></td>
                                <td>Returns a string with backslashes before the characters that need to be escaped. These characters are single quote ('), double quote ("), backslash (\) and NULL</td>
                            </tr>
                            <tr>
                                <td><code>bin2hex()</code></td>
                                <td>Convert binary data into hexadecimal values</td>
                            </tr>
                            <tr>
                                <td><code>chop()</code></td>
                                <td>Strip whitespace (or other characters) from the end of a string. Alias of <code>rtrim()</code></td>
                            </tr>
                            <tr>
                                <td><code>chr()</code></td>
                                <td>Returns a one-character string containing the character specified by ASCII</td>
                            </tr>
                            <tr>
                                <td><code>chunk_split()</code></td>
                                <td>Split a string into smaller chunks</td>
                            </tr>
                            <tr>
                                <td><code>convert_cyr_string()</code></td>
                                <td>Converts a string from one Cyrillic character set to another</td>
                            </tr>
                            <tr>
                                <td><code>convert_uudecode()</code></td>
                                <td>Decodes a uuencoded string</td>
                            </tr>
                            <tr>
                                <td><code>convert_uuencode()</code></td>
                                <td>Encodes a string using the uuencode algorithm</td>
                            </tr>
                            <tr>
                                <td><code>count_chars()</code></td>
                                <td>Return information about characters used in a string</td>
                            </tr>
                            <tr>
                                <td><code>crc32()</code></td>
                                <td>Calculates the crc32 polynomial of a string</td>
                            </tr>
                            <tr>
                                <td><code>crypt()</code></td>
                                <td>One-way string encryption (or hashing)</td>
                            </tr>
                            <tr>
                                <td><code>echo()</code></td>
                                <td>Output one or more strings</td>
                            </tr>
                            <tr>
                                <td><code>explode()</code></td>
                                <td>Split a string into an array by a specified string</td>
                            </tr>
                            <tr>
                                <td><code>fprintf()</code></td>
                                <td>Write a formatted string to a specified output stream</td>
                            </tr>
                            <tr>
                                <td><code>get_html_translation_table()</code></td>
                                <td>Returns the translation table used by <code>htmlspecialchars()</code> and <code>htmlentities()</code></td>
                            </tr>
                            <tr>
                                <td><code>hebrev()</code></td>
                                <td>Convert logical Hebrew text to visual text</td>
                            </tr>
                            <tr>
                                <td><code>hebrevc()</code></td>
                                <td>Convert logical Hebrew text to visual text with newline conversion</td>
                            </tr>
                            <tr>
                                <td><code>hex2bin()</code></td>
                                <td>Decodes a hexadecimally encoded binary string</td>
                            </tr>
                            <tr>
                                <td><code>html_entity_decode()</code></td>
                                <td>Convert all HTML entities to their applicable characters</td>
                            </tr>
                            <tr>
                                <td><code>htmlentities()</code></td>
                                <td>Convert all applicable characters to HTML entities</td>
                            </tr>
                            <tr>
                                <td><code>htmlspecialchars_decode()</code></td>
                                <td>Convert special HTML entities back to characters</td>
                            </tr>
                            <tr>
                                <td><code>htmlspecialchars()</code></td>
                                <td> Convert special characters to HTML entities</td>
                            </tr>
                            <tr>
                                <td><code>implode()</code></td>
                                <td>Return a string by joining the elements of an array with a specified string</td>
                            </tr>
                            <tr>
                                <td><code>join()</code></td>
                                <td>Alias of <code>implode()</code></td>
                            </tr>
                            <tr>
                                <td><code>lcfirst()</code></td>
                                <td>Converts the first character of a string to lowercase</td>
                            </tr>
                            <tr>
                                <td><code>levenshtein()</code></td>
                                <td>Calculate Levenshtein distance between two strings</td>
                            </tr>
                            <tr>
                                <td><code>localeconv()</code></td>
                                <td>Returns localized numeric and monetary formatting information</td>
                            </tr>
                            <tr>
                                <td><code>ltrim()</code></td>
                                <td>Removes whitespace (or other characters) from the beginning of a string</td>
                            </tr>
                            <tr>
                                <td><code>md5()</code></td>
                                <td>Calculate the md5 hash of a string</td>
                            </tr>
                            <tr>
                                <td><code>md5_file()</code></td>
                                <td>Calculates the md5 hash of a file</td>
                            </tr>
                            <tr>
                                <td><code>metaphone()</code></td>
                                <td>Calculate the metaphone key of a string</td>
                            </tr>
                            <tr>
                                <td><code>money_format()</code></td>
                                <td>Formats a number as a currency string</td>
                            </tr>
                            <tr>
                                <td><code>nl_langinfo()</code></td>
                                <td>Returns specific local information</td>
                            </tr>
                            <tr>
                                <td><code>nl2br()</code></td>
                                <td>Inserts HTML line breaks before all newlines in a string</td>
                            </tr>
                            <tr>
                                <td><code>number_format()</code></td>
                                <td>Format a number with grouped thousands</td>
                            </tr>
                            <tr>
                                <td><code>ord()</code></td>
                                <td>Returns the ASCII value of the first character of a string</td>
                            </tr>
                            <tr>
                                <td><code>parse_str()</code></td>
                                <td>Parses the string into variables</td>
                            </tr>
                            <tr>
                                <td><code>print()</code></td>
                                <td>Output a string</td>
                            </tr>
                            <tr>
                                <td><code>printf()</code></td>
                                <td>Output a formatted string</td>
                            </tr>
                            <tr>
                                <td><code>quoted_printable_decode()</code></td>
                                <td>Convert a quoted-printable string to an 8 bit string</td>
                            </tr>
                            <tr>
                                <td><code>quoted_printable_encode()</code></td>
                                <td>Convert a 8 bit string to a quoted-printable string</td>
                            </tr>
                            <tr>
                                <td><code>quotemeta()</code></td>
                                <td>Quotes meta characters</td>
                            </tr>
                            <tr>
                                <td><code>rtrim()</code></td>
                                <td>Removes whitespace (or other characters) from the end of a string</td>
                            </tr>
                            <tr>
                                <td><code>setlocale()</code></td>
                                <td>Set locale information</td>
                            </tr>
                            <tr>
                                <td><code>sha1()</code></td>
                                <td>Calculate the sha1 hash of a string</td>
                            </tr>
                            <tr>
                                <td><code>sha1_file()</code></td>
                                <td>Calculate the sha1 hash of a file</td>
                            </tr>
                            <tr>
                                <td><code>similar_text()</code></td>
                                <td>Calculate the similarity between two strings</td>
                            </tr>
                            <tr>
                                <td><code>soundex()</code></td>
                                <td>Calculate the soundex key of a string</td>
                            </tr>
                            <tr>
                                <td><code>sprintf()</code></td>
                                <td>Return a formatted string</td>
                            </tr>
                            <tr>
                                <td><code>sscanf()</code></td>
                                <td>Parses input from a string according to a format</td>
                            </tr>
                            <tr>
                                <td><code>str_getcsv()</code></td>
                                <td>Parse a CSV string into an array</td>
                            </tr>
                            <tr>
                                <td><code>str_ireplace()</code></td>
                                <td>Replace all occurrences of the search string with the replacement string. Case-insensitive version of <code>str_replace()</code>.</td>
                            </tr>
                            <tr>
                                <td><code>str_pad()</code></td>
                                <td>Pad a string to a certain length with another string</td>
                            </tr>
                            <tr>
                                <td><code>str_repeat()</code></td>
                                <td>Repeats a string a specified number of times</td>
                            </tr>
                            <tr>
                                <td><code>str_replace()</code></td>
                                <td>Replace all occurrences of the search string with the replacement string (case-sensitive)</td>
                            </tr>
                            <tr>
                                <td><code>str_rot13()</code></td>
                                <td>Performs the ROT13 encoding on a string</td>
                            </tr>
                            <tr>
                                <td><code>str_shuffle()</code></td>
                                <td>Randomly shuffles all characters in a string</td>
                            </tr>
                            <tr>
                                <td><code>str_split()</code></td>
                                <td>Splits a string into an array</td>
                            </tr>
                            <tr>
                                <td><code>str_word_count()</code></td>
                                <td>Counts the number of words in a string</td>
                            </tr>
                            <tr>
                                <td><code>strcasecmp()</code></td>
                                <td>Binary safe comparison of two string (case-insensitive)</td>
                            </tr>
                            <tr>
                                <td><code>strchr()</code></td>
                                <td>Finds the first occurrence of a string inside another string. Alias of <code>strstr()</code></td>
                            </tr>
                            <tr>
                                <td><code>strcmp()</code></td>
                                <td>Binary safe comparison of two string (case sensitive)</td>
                            </tr>
                            <tr>
                                <td><code>strcoll()</code></td>
                                <td>Locale based comparison of two string (case sensitive)</td>
                            </tr>
                            <tr>
                                <td><code>strcspn()</code></td>
                                <td>Returns the number of characters found in a string before any part of some specified characters are found</td>
                            </tr>
                            <tr>
                                <td><code>strip_tags()</code></td>
                                <td>Strip HTML and PHP tags from a string</td>
                            </tr>
                            <tr>
                                <td><code>stripcslashes()</code></td>
                                <td>Un-quotes a string quoted with <code>addcslashes()</code></td>
                            </tr>
                            <tr>
                                <td><code>stripos()</code></td>
                                <td>Find the position of the first occurrence of a case-insensitive substring in a string</td>
                            </tr>
                            <tr>
                                <td><code>stripslashes()</code></td>
                                <td>Un-quotes a quoted string</td>
                            </tr>
                            <tr>
                                <td><code>stristr()</code></td>
                                <td>Finds the first occurrence of a string inside another string (case-insensitive). Case-insensitive version of <code>strstr()</code></td>
                            </tr>
                            <tr>
                                <td><code>strlen()</code></td>
                                <td>Returns the length of a string</td>
                            </tr>
                            <tr>
                                <td><code>strnatcasecmp()</code></td>
                                <td>Compares two strings using a "natural order" algorithm (case-insensitive)</td>
                            </tr>
                            <tr>
                                <td><code>strnatcmp()</code></td>
                                <td>Compares two strings using a "natural order" algorithm (case-sensitive)</td>
                            </tr>
                            <tr>
                                <td><code>strncasecmp()</code></td>
                                <td>Binary safe string comparison of the first n characters (case-insensitive)</td>
                            </tr>
                            <tr>
                                <td><code>strncmp()</code></td>
                                <td>Binary safe string comparison of the first n characters (case-sensitive)</td>
                            </tr>
                            <tr>
                                <td><code>strpbrk()</code></td>
                                <td>Searches a string for any of a set of characters</td>
                            </tr>
                            <tr>
                                <td><code>strpos()</code></td>
                                <td>Find the position of the first occurrence of a substring in a string</td>
                            </tr>
                            <tr>
                                <td><code>strrchr()</code></td>
                                <td>Find the last occurrence of a character in a string</td>
                            </tr>
                            <tr>
                                <td><code>strrev()</code></td>
                                <td>Reverses a string</td>
                            </tr>
                            <tr>
                                <td><code>strripos()</code></td>
                                <td>Find the position of the last occurrence of a string inside another string (case-insensitive)</td>
                            </tr>
                            <tr>
                                <td><code>strrpos()</code></td>
                                <td>Find the position of the last occurrence of a string inside another string (case-sensitive)</td>
                            </tr>
                            <tr>
                                <td><code>strspn()</code></td>
                                <td>Returns the number of characters found in a string that contains only characters from a specified charlist</td>
                            </tr>
                            <tr>
                                <td><code>strstr()</code></td>
                                <td>Find the first occurrence of a string inside another string (case-sensitive)</td>
                            </tr>
                            <tr>
                                <td><code>strtok()</code></td>
                                <td>Splits a string into smaller strings</td>
                            </tr>
                            <tr>
                                <td><code>strtolower()</code></td>
                                <td>Converts a string to lowercase</td>
                            </tr>
                            <tr>
                                <td><code>strtoupper()</code></td>
                                <td>Converts a string to uppercase</td>
                            </tr>
                            <tr>
                                <td><code>strtr()</code></td>
                                <td>Translate characters or replace substrings</td>
                            </tr>			
                            <tr>
                                <td><code>substr()</code></td>
                                <td>Return a part of a string</td>
                            </tr>
                            <tr>
                                <td><code>substr_compare()</code></td>
                                <td>Compares of two strings from a specified start position up to the length of the comparison. The comparison is binary safe and optionally case-sensitive</td>
                            </tr>
                            <tr>
                                <td><code>substr_count()</code></td>
                                <td>Counts the number of times a substring occurs in a string</td>
                            </tr>
                            <tr>
                                <td><code>substr_replace()</code></td>
                                <td>Replaces a part of a string with another string</td>
                            </tr>
                            <tr>
                                <td><code>trim()</code></td>
                                <td>Removes whitespace (or other characters) from the beginning and end of a string</td>
                            </tr>
                            <tr>
                                <td><code>ucfirst()</code></td>
                                <td>Converts the first character of a string to uppercase</td>
                            </tr>
                            <tr>
                                <td><code>ucwords()</code></td>
                                <td>Converts the first character of each word in a string to uppercase</td>
                            </tr>
                            <tr>
                                <td><code>vfprintf()</code></td>
                                <td>Write a formatted string to a specified output stream</td>
                            </tr>
                            <tr>
                                <td><code>vprintf()</code></td>
                                <td>Output a formatted string</td>
                            </tr>
                            <tr>
                                <td><code>vsprintf()</code></td>
                                <td>Return a formatted string</td>
                            </tr>
                            <tr>
                                <td><code>wordwrap()</code></td>
                                <td>Wraps a string to a given number of characters</td>
                            </tr>
                        </tbody>
                	</table>
                </div>
                <div class="bottom-link clearfix">
                    <a href="javascript:void(0);" class="previous-page-bottom disabled" title="Disabled"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="bp_array-functions.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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