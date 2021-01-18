<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="Set and Get Cookies in JavaScript">
	  <meta name="keywords" content="javascript,Set and Get Cookies in JavaScript">
	  <meta name="author" content="webschooltoday.com">
    <title>Set and Get Cookies in JavaScript - WebSchool Today</title>
 <?php include "../links.php" ?></head>
<body>
<div>
<div class="tital">Set and Get Cookies in JavaScript</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "des_javascript.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="js_ajax.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

                <a href="js_form-validation.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <h1>JavaScript <span>Cookies</span></h1>
                <p class="summary">In this tutorial you will learn how to create, read, update and delete a cookie in JavaScript.</p>
				<h2>What is a Cookie</h2>
                <p>A cookie is a small text file that lets you store a small amount of data (nearly 4KB) on the user's computer. They are typically used for keeping track of information such as user preferences that the site can retrieve to personalize the page when user visits the website next time.</p>
                <p>Cookies are an old client-side storage mechanism that was originally designed for use by server-side scripting languages such as PHP, ASP, etc. However, cookies can also be created, accessed, and modified directly using JavaScript, but the process is little bit complicated and messy.</p>
				<!--Tip Box-->
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box"   style="background-color:#fad28c">
                            <p><strong>Important:</strong> A cookie can be up to 4 KB, including its name and values, cookies that exceed this length are trimmed to fit. Also, each time the browser requests a page to the server, all the data in the cookie is automatically sent to the server within the request.</p>
                        </div>
                    </div>
                </div>
                <!--End:Tip Box-->
				<!--Warning box-->
                <div class="color-box space">
                    <div class="shadow">
                        <div class="info-tab warning-icon" title="Warning"><i></i></div>
                        <div class="warning-box"  style="background-color:#ff8585"
>
                            <p><strong>Read Carefully:</strong> Don't store sensitive data such as a password or credit card information in cookies since it could potentially be manipulated by the malicious user.</p>
                        </div>
                    </div>
                </div>
                <!--End:Warning box-->
				<h2>Creating a Cookie in JavaScript</h2>
				<p>In JavaScript, you can create, read, and delete cookies with the <code>document.cookie</code> property. This property represents all the cookies associated with a document.</p>
				<p>To create or store a new cookie, assign a <code><em>name=value</em></code> string to this property, like this:</p>
				<div class="green-box break">
					document.cookie = "firstName=Christopher";
				</div>
				<p>A cookie value cannot contain semicolons, commas, or spaces. For this reason, you will need to use the JavaScript's built-in function <code>encodeURIComponent()</code> to encode the values containing these characters before storing it in the cookie. Likewise, you'll need to use the corresponding <code>decodeURIComponent()</code> function when you read the cookie value.</p>
				<div class="pink-box break">
					document.cookie = "name=" + encodeURIComponent("Christopher Columbus");
				</div>
				<p>By default, the lifetime of a cookie is the current browser session, which means it is lost when the user exits the browser. For a cookie to persist beyond the current browser session, you will need to specify its lifetime (in seconds) with a <code>max-age</code> attribute. This attribute determine how long a cookie can be remain on the user's system before it is deleted, e.g., following cookie will live for 30 days.</p>
				<div class="sky-box break">
					document.cookie = "firstName=Christopher; max-age=" + 30*24*60*60;
				</div>
				<p>You can also specify the lifetime of a cookie with the <code>expires</code> attribute. This attribute takes an exact date (in GMT/UTC format) when the cookie should expire, rather than an offset in seconds.</p>
				<div class="red-box break">
					document.cookie = "firstName=Christopher; expires=Thu, 31 Dec 2099 23:59:59 GMT";
				</div>
				<p>Here's a function that sets a cookie with an optional <code>max-age</code> attribute. You can also use the same function to delete a cookie by passing the value <code>0</code> for <code>daysToLive</code> parameter.</p>
				<!--Code box-->
                <div class="example break">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab760f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

                        function setCookie(name, value, daysToLive) {
    // Encode value in order to escape semicolons, commas, and whitespace
    var cookie = name + "=" + encodeURIComponent(value);
    
    if(typeof daysToLive === "number") {
        /* Sets the max-age attribute so that the cookie expires
        after the specified number of days */
        cookie += "; max-age=" + (daysToLive*24*60*60);
        
        document.cookie = cookie;
    }
}
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
				<p>By default, a cookie is available to all web pages in the same directory or any subdirectories of that directory. However, if you specify a <code>path</code> the cookie is available to all web pages in the specified path and to all web pages in all subdirectories of that path. For example, if the path is set to <code>/</code> the cookie is available throughout a website, regardless of which page creates the cookie.</p>
				<div class="green-box break">
					document.cookie = "firstName=Christopher; path=/";
				</div>
				<p>Further, you can use the <code>domain</code> attribute if you want a cookie to be available across subdomains. By default, cookies are available only to the pages in the domain they were set in.</p>
				<p>If a cookie created by a page on <code>blog.example.com</code> sets its <code>path</code> attribute to <code>/</code> and its <code>domain</code> attribute to <code>example.com</code>, that cookie is also available to all web pages on <code>backend.example.com</code>, <code>portal.example.com</code>. However, you cannot share cookies outside of a domain.</p>
				<div class="pink-box break">
					document.cookie = "firstName=Christopher; path=/; domain=example.com";
				</div>
				<p>There is also a boolean attribute named <code>secure</code>. If this attribute is specified, the cookie will be only be transmitted over a secure (i.e. encrypted) connection such as HTTPS.</p>
				<div class="sky-box break">
					document.cookie = "firstName=Christopher; path=/; domain=example.com; secure";
				</div>
				<hr />
				<h2>Reading a Cookie</h2>
				<p>Reading a cookie is a slightly more complex because the <code>document.cookie</code> property simply returns a string containing <em>a semicolon and a space</em> separated list of all cookies (i.e. <code><em>name=value</em></code> pairs, for example, <code>firstName=John; lastName=Doe;</code>). This string doesn't contain the attributes such as <code>expires</code>, <code>path</code>, <code>domain</code>, etc. that may have been set for the cookie.</p>
				<p>In order to get the individual cookie from this list, you need to make use of <code>split()</code> method to break it into individual <code><em>name=value</em></code> pairs, and search for the specific name, as shown below:</p>
				<!--Code box-->
                <div class="example break">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab760f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2">

                        function getCookie(name) {
    // Split cookie string and get all individual name=value pairs in an array
    var cookieArr = document.cookie.split(";");
    
    // Loop through the array elements
    for(var i = 0; i < cookieArr.length; i++) {
        var cookiePair = cookieArr[i].split("=");
        
        /* Removing whitespace at the beginning of the cookie name
        and compare it with the given string */
        if(name == cookiePair[0].trim()) {
            // Decode the cookie value and return
            return decodeURIComponent(cookiePair[1]);
        }
    }
    
    // Return null if not found
    return null;
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
				<p>Now we're going to create one more function <code>checkCookie()</code> that will check whether the <code>firstName</code> cookie is set or not by utilizing the above <code>getCookie()</code> function, and if it is set then this function will display a greeting message, and if it is not then this function will prompt user to enter their first name and store it in the cookie using our previously created <code>setCookie()</code> function.</p>
				<!--Code box-->
                <div class="example break">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab760f.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3">

                        function checkCookie() {
    // Get cookie using our custom function
    var firstName = getCookie("firstName");
    
    if(firstName != "") {
        alert("Welcome again, " + firstName);
    } else {
        firstName = prompt("Please enter your first name:");
        if(firstName != "" && firstName != null) {
            // Set cookie using our custom function
            setCookie("firstName", firstName, 30);
        }
    }
}
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
				<hr />
				<h2>Updating a Cookie</h2>
				<p>The only way to update or modify a cookie is to create another cookie with the same <code>name</code> and <code>path</code> as an existing one. Creating a cookie with the same name but with a different path then that of an existing one will add an additional cookie. Here's an example:</p>
				<!--Code box-->
                <div class="example break">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4">

                        // Creating a cookie
document.cookie = "firstName=Christopher; path=/; max-age=" + 30*24*60*60;

// Updating the cookie
document.cookie = "firstName=Alexander; path=/; max-age=" + 365*24*60*60;
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
				<h2>Deleting a Cookie</h2>
				<p>To delete a cookie, just set it once again using the same <code>name</code>, specifying an empty or arbitrary value, and setting its <code>max-age</code> attribute to 0. Remember that if you've specified a <code>path</code>, and <code>domain</code> attribute for the cookie, you'll also need to include them when deleting it.</p>
				<!--Code box-->
                <div class="example break">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="javascript:void(0);" target="_blank" class="try-btn disabled" title="Disabled">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5">

                        // Deleting a cookie
document.cookie = "firstName=; max-age=0";

// Specifying path and domain while deleting cookie
document.cookie = "firstName=; path=/; domain=example.com; max-age=0";
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
				<p>However, to delete a cookie using the <code>expires</code> attribute, simply set its value (i.e. the expiration date) to a date that has already passed, as demonstrated below.</p>
				<div class="red-box break">
					document.cookie = "firstName=; path=/; expires=Thu, 01 Jan 1970 00:00:00 GMT";
				</div>
				<!--Bottom Navigation-->
				<div class="bottom-link clearfix">
                    <a href="js_form-validation.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                    <a href="js_ajax.php" class="next-page-bottom" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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