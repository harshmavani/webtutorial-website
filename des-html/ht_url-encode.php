
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="What is URL Encoding in HTML">
	  <meta name="keywords" content="css,css3,What is URL Encoding in HTML">
	  <meta name="author" content="webschooltoday.com">
    <title>What is URL Encoding in HTML - WebSchool Today</title>
 
<style type="text/css">
table.url-encoding td{padding:5px 0;text-align:center;background:#fff}
.encode-rg3-w{padding:15px 0 10px}
.encode-area{width:100%;resize:none;display:block;padding:1px 5px;margin-bottom:15px;overflow-y:auto;border:1px solid #D2D2D2;font-size:15px;font-family:inherit}
.action-btn{margin:0 10px 10px 0}
</style>
<?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">What is URL Encoding in HTML</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_html.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="ht_validation.html" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="ht_url.html" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>HTML <span>URL Encoding</span></h1>
                <p class="summary">In this tutorial you will learn how to encode URL to safely transmit data over the internet.</p>
                <h2>What is URL Encoding</h2>
                <p>According to <a href="https://tools.ietf.org/html/rfc3986" rel="nofollow" target="_blank">RFC 3986</a>, the characters in a URL only limited to a defined set of reserved and unreserved US-ASCII characters. Any other characters are not allowed in a URL. But URL often contains characters outside the US-ASCII character set, so they must be converted to a valid US-ASCII format for worldwide interoperability. URL-encoding, also known as percent-encoding is a process of encoding URL information so that it can be safely transmitted over the internet.</p>
                <p>To map the wide range of characters that is used worldwide, a two-step process is used:</p>
                <ul>
                    <li>At first the data is encoded according to the UTF-8 character encoding.</li>
                    <li>Then only those bytes that do not correspond to characters in the unreserved set should be percent-encoded like %HH,&thinsp;where HH is the hexadecimal value of the byte.</li>
                </ul>
                <p>For example, the string: <b>Fran&ccedil;ois</b> would be encoded as: <b>Fran%C3%A7ois</b></p>
                <p>&Ccedil;, &ccedil; (c-cedilla) is a Latin script letter.</p>
                <hr />
                <h2>Reserved Characters</h2>
                <p>Certain characters are reserved or restricted from use in a URL because they may (or may not) be defined as delimiters by the generic syntax in a particular <a href="ht_url.html">URL scheme</a>. For example, forward slash <code>/</code> characters are used to separate different parts of a URL.</p>
                <p class="break">If data for a URL component contains character that would conflict with a reserved set of characters, which is defined as a delimiter in the URL scheme then the conflicting character must be percent-encoded before the URL is formed. Reserved characters in a URL are:</p>
                <div class="shadow">
                    <table class="data url-encoding">
                        <tr>                        																	
                            <td><code>!</code></td>
                            <td><code>#</code></td>
                            <td><code>$</code></td>
                            <td><code>&amp;</code></td>
                            <td><code>'</code></td>
                            <td><code>(</code></td>
                            <td><code>)</code></td>
                            <td><code>*</code></td>
                            <td><code>+</code></td>
                            <td><code>,</code></td>
                            <td><code>/</code></td>
                            <td><code>:</code></td>
                            <td><code>;</code></td>
                            <td><code>=</code></td>
                            <td><code>?</code></td>
                            <td><code>@</code></td>
                            <td><code>[</code></td>
                            <td><code class="plain">]</code></td>
                        </tr>                    																	
                        <tr>
                            <td><code>%21</code></td>
                            <td><code>%23</code></td>
                            <td><code>%24</code></td>
                            <td><code>%26</code></td>
                            <td><code>%27</code></td>
                            <td><code>%28</code></td>
                            <td><code>%29</code></td>
                            <td><code>%2A</code></td>
                            <td><code>%2B</code></td>
                            <td><code>%2C</code></td>
                            <td><code>%2F</code></td>
                            <td><code>%3A</code></td>
                            <td><code>%3B</code></td>
                            <td><code>%3D</code></td>
                            <td><code>%3F</code></td>
                            <td><code>%40</code></td>
                            <td><code>%5B</code></td>
                            <td><code class="plain">%5D</code></td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2>Unreserved Characters</h2>
                <p class="break">Characters that are allowed in a URL but do not have a reserved purpose are called unreserved. These include uppercase and lowercase letters, decimal digits, hyphen, period, underscore, and tilde. The following table lists all the unreserved characters in a URL:</p>
                <div class="shadow">
                    <table class="data url-encoding">
                        <tr>
                            <td><code>A</code></td>
                            <td><code>B</code></td>
                            <td><code>C</code></td>
                            <td><code>D</code></td>
                            <td><code>E</code></td>
                            <td><code>F</code></td>
                            <td><code>G</code></td>
                            <td><code>H</code></td>
                            <td><code>I</code></td>
                            <td><code>J</code></td>
                            <td><code>K</code></td>
                            <td><code>L</code></td>
                            <td><code>M</code></td>
                            <td><code>N</code></td>
                            <td><code>O</code></td>
                            <td><code>P</code></td>
                            <td><code>Q</code></td>
                            <td><code>R</code></td>
                            <td><code>S</code></td>
                            <td><code>T</code></td>
                            <td><code>U</code></td>
                            <td><code>V</code></td>
                            <td><code>W</code></td>
                            <td><code>X</code></td>
                            <td><code>Y</code></td>
                            <td><code class="plain">Z</code></td>
                        </tr>
                        <tr>
                            <td><code>a</code></td>
                            <td><code>b</code></td>
                            <td><code>c</code></td>
                            <td><code>d</code></td>
                            <td><code>e</code></td>
                            <td><code>f</code></td>
                            <td><code>g</code></td>
                            <td><code>h</code></td>
                            <td><code>i</code></td>
                            <td><code>j</code></td>
                            <td><code>k</code></td>
                            <td><code>l</code></td>
                            <td><code>m</code></td>
                            <td><code>n</code></td>
                            <td><code>o</code></td>
                            <td><code>p</code></td>
                            <td><code>q</code></td>
                            <td><code>r</code></td>
                            <td><code>s</code></td>
                            <td><code>t</code></td>
                            <td><code>u</code></td>
                            <td><code>v</code></td>
                            <td><code>w</code></td>
                            <td><code>x</code></td>
                            <td><code>y</code></td>
                            <td><code class="plain">z</code></td>
                        </tr>
                        <tr>
                            <td><code>0</code></td>
                            <td><code>1</code></td>
                            <td><code>2</code></td>
                            <td><code>3</code></td>
                            <td><code>4</code></td>
                            <td><code>5</code></td>
                            <td><code>6</code></td>
                            <td><code>7</code></td>
                            <td><code>8</code></td>
                            <td><code>9</code></td>
                            <td><code>-</code></td>
                            <td><code>_</code></td>
                            <td><code>.</code></td>
                            <td><code>~</code></td>
                            <td colspan="12"></td>
                        </tr>
                    </table>
                </div>
                <hr />
                <h2 id="url-encoder">URL Encoding Converter</h2>
                <p>The following converter encodes and decodes the characters according to <a href="https://tools.ietf.org/html/rfc3986" rel="nofollow" target="_blank">RFC 3986</a>.</p>
                <div class="encode-rg3-w">
                    <form action="#" class="clearfix">
                        <textarea id="data" class="encode-area" spellcheck="false" rows="4">Fran&ccedil;ois</textarea>
                        <input type="button" value="Encode" class="action-btn" onclick="urlEncode();" />
                        <input type="button" value="Decode" class="action-btn" onclick="urlDecode();" />
                    </form>
                </div>
                <p>Enter some character and click on encode or decode button to see the output.</p>
                <!--Bottom Navigation-->
                <div class="bottom-link clearfix">
                    <a href="ht_url.html" class="previous-page-bottom"><i class="fa fa-arrow-right" aria-hidden="true"></i> Previous</a>
                    <a href="ht_validation.html" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
 Page</a>
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