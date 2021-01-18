<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="How to Create Typeahead in Bootstrap 4">
	  <meta name="keywords" content="Bootstrap,Bootstrap4,Create Typeahead in Bootstrap 4,Typeahead">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Create Typeahead in Bootstrap 4 - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>
<div>
<div class="tital">How to Create Typeahead in Bootstrap 4</div>    
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
             </div>
             <a href="bt_scrollspy.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_carousel.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Typeahead</span></h1>
                <p class="summary">In this tutorial you will learn how to create typeaheads with Bootstrap.</p>
                <h2>Creating Typeaheads with Bootstrap</h2>
                <p>The typeahead input fields are very popular in modern web forms. The main purpose of using typeahead is to improve the user experience by supplying hints or a list of possible choices based on the text they've entered while filling a form or searching something &mdash; like the Google instant search.</p>
				<p>Typeahead functionality also saves time and reduces the number of potential errors, because the user has less likelihood of making a spelling mistake. Typeahead plugin has been dropped from the Bootstrap (v3.0+), in favor of using <a href="http://twitter.github.io/typeahead.js/" rel="nofollow" target="_blank">Twitter typeahead</a>.</p>
                <p class="space">Twitter typeaheads is a fast and fully-featured autocomplete library inspired by twitter.com's autocomplete search functionality. To create Twitter typeaheads first download <code>typeahead.js</code> from here &mdash; <a href="http://twitter.github.io/typeahead.js/" rel="nofollow" target="_blank">http://twitter.github.io/typeahead.js/</a> and include in your project, after that you can turn any text-based <a href="../info-html/ht_input-tag.php"><code>&lt;input&gt;</code></a> element into a typeahead.</p>
                <h2>Creating Twitter Typeahead with Local Dataset</h2>
				<p>The following example will show you how to create Twitter typeahead with local dataset.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabaa74.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1">

<script>
$(document).ready(function(){
    // Defining the local dataset
    var cars = ['Audi', 'BMW', 'Bugatti', 'Ferrari', 'Ford', 'Lamborghini', 'Mercedes Benz', 'Porsche', 'Rolls-Royce', 'Volkswagen'];
    
    // Constructing the suggestion engine
    var cars = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        local: cars
    });
    
    // Initializing the typeahead
    $('.typeahead').typeahead({
        hint: true,
        highlight: true, /* Enable substring highlighting */
        minLength: 1 /* Specify minimum characters required for showing suggestions */
    },
    {
        name: 'cars',
        source: cars
    });
});
</script>

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

				<div class="color-box">
					<div class="shadow">
						<div class="info-tab note-icon" title="Important Notes"><i></i></div>
						<div class="note-box" style="background-color:#ff8585">
							<p><strong>Read Carefully:</strong> Bloodhound is the <code>typeahead.js</code> suggestion engine. It is very flexible and offers advanced functionalities such as prefetching remote data, fast lookups through intelligent caching using the browser <a href="../des-html/htl_web-storage.php">local storage</a>, etc.</p>
						</div>
					</div>
				</div>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box" style="background-color:#fad28c">
                            <p><strong>Important:</strong> Set <code>autocomplete="off"</code> for the input box if you want to prevent default browser menus from appearing over the Bootstrap type-ahead dropdown.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Creating Twitter Typeahead External Dataset</h2>
                <p>You can also specify external dataset through a URL pointing to a JSON file containing an array of datums. The individual units that compose datasets are called datums.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab2d64.php" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                      
	<textarea id="code2">

<script>
$(document).ready(function(){
    // Sonstructs the suggestion engine
    var countries = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        // The url points to a json file that contains an array of country names
        prefetch: 'data/countries.json'
    });
    
    // Initializing the typeahead with remote dataset without highlighting
    $('.typeahead').typeahead(null, {
        name: 'countries',
        source: countries,
        limit: 10 /* Specify max number of suggestions to be displayed */
    });
});
</script>

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

                <div class="bottom-link clearfix">
                    <a href="bt_carousel.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_scrollspy.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
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