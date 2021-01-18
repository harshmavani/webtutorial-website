<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta name="description" content="How to Use Icons in Bootstrap">
	  <meta name="keywords" content="Bootstrap,Bootstrap4,Icons,Icons in Bootstrap,Use Icons in Bootstrap,bootstap icon">
	  <meta name="author" content="webschooltoday.com">
    <title>How to Use Icons in Bootstrap  - WebSchool Today</title>
    <?php include "../links.php" ?>

	<style>
    .bootstrap3-icons{padding-top:10px;min-width:770px;overflow-y:hidden}
    .bootstrap3-icons .glyphicon{font-size:24px;margin-bottom:20px;margin-top:5px}
    .bootstrap3-icons .glyphicon-class{display:block;text-align:center;word-wrap:break-word}
    .bootstrap3-icons ul{float:left;padding-left:0;list-style:none;padding:0;margin-bottom:15px}
    .bootstrap3-icons ul li{background-image:none;border:1px solid #DDD;float:left;font-size:14px;width:20%;box-sizing:border-box;height:132px;line-height:1.4;margin:0 -1px -1px 0;padding:10px 12px;text-align:center}
    </style>
</head>
<body>
<div>
<div class="tital">How to Use Icons in Bootstrap</div>        
<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
            </div>
            <a href="bt_navs.php" class="next-page" title="Go to Next Page"><i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_media-objects.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Icons</span></h1>
                <p class="summary">In this tutorial you will learn how to use icons in Bootstrap.</p>
                <h2>Using Icons in Bootstrap 4</h2>
                <p>The new Bootstrap 4 version doesn't include an icon library by default, unlike the previous Bootstrap 3 version that includes Glyphicons in the font format in its core.</p>
                <p>However, you can still include icons in your project using several external font based icon library. The most popular and highly compatible icon library for Bootstrap is Font Awesome. It provides 675 icons which are available in font format for better usability and scalability.</p>
                <p class="space">The advantage of using font icons is, you can create icons of any color just through applying the CSS <a href="../info-css/style_color-property.php"><code>color</code></a> property. Let's see how to include font-awesome icons in a web page.</p>
                <h2>How to Include Font Awesome</h2>
                <p>You can simply use the freely available font-awesome CDN link to include the font-awesome icons in your project. This CDN link basically points to a remote CSS file that includes all the necessary classes to generate variety of icons. Let's take a look at the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbd04.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1" >

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Including Font Awesome in Bootstrap Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <h1><i class="fa fa-globe"></i> Hello, world!</h1>
    <!-- JS files: jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

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
                <hr />
                <h2>How to Use Font Awesome Icons in Your Code</h2>
                <p>To use font-awesome icons in your code you'll require an <a href="../info-html/ht_i-tag.php"><code>&lt;i&gt;</code></a> tag along with a base class <code>.fa</code> and an individual icon class <code>.fa-*</code>. The general syntax for using font-awesome icons is:</p>
                <div class="green-box break">&lt;i class="fa fa-class-name"&gt;&lt;/i&gt;</div>
                <p>Where <code>fa-class-name</code> is the name of the particular icon class (e.g. <code>fa-search</code>, <code>fa-user</code>, <code>fa-star</code>, <code>fa-calendar</code>, <code>fa-globe</code>, etc.) defined in <code>font-awesome.min.css</code> file.</p>
                <p>For example, to use search icon you can place the following code just about anywhere:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8ba9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2" >

<button type="submit" class="btn btn-primary"><span class="fa fa-search"></span> Search</button>
<button type="submit" class="btn btn-secondary"><span class="fa fa-search"></span> Search</button>

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

				<p>Similarly, you can place icons inside the headings, paragraphs, tables, or anywhere you want. In the next chapter you will see how to use these icons in <a href="bt_navs.php">Bootstrap nav components</a>.</p>
                <div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> Remember to leave a space after the closing tag of icon element (i.e. after <code>&lt;/i&gt;</code> tag), when using the icons along with the strings of text such as inside buttons or navigation links, to ensure proper spacing between the icon and text.</p>
                        </div>
                    </div>
                </div>
                <div class="bottom-link clearfix">
                    <a href="bt_media-objects.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
 Previous</a>
                    <a href="bt_navs.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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