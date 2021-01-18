<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="How to Use Bootstrap 4 Cards">
  <meta name="keywords" content="Bootstrap,Bootstrap4,Bootstrap 4 Cards,cards,Use Bootstrap 4 Cards">
  <meta name="author" content="webschooltoday.com">
    <title>How to Use Bootstrap 4 Cards - WebSchool Today</title>
    <?php include "../links.php" ?>
</head>
<body>

<div>
    <div class="tital">How to Use Bootstrap 4 Cards</div>

<?php include "../head_part.php" ?> 

    <div class="rg3-w clearfix"> 

<?php include "des_bootstrap.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
                    <script type="text/javascript">
	atOptions = {
		'key' : '9049f2d3c3d0cdd985d2d490bad266d3',
		'format' : 'iframe',
		'height' : 50,
		'width' : 320,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.displaycontentnetwork.com/9049f2d3c3d0cdd985d2d490bad266d3/invoke.js"></scr' + 'ipt>');
</script>
                </div>
                <a href="bt_media-objects.php" class="next-page" title="Go to Next Page">	<i class="fa fa-arrow-right" aria-hidden="true"></i>
</a>
                <a href="bt_images.php" class="previous-page" title="Go to Previous Page">	<i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>

                <h1>Bootstrap <span>Cards</span></h1>
                <p class="summary">In this tutorial you will learn how to use Bootstrap card component.</p>
                <h2>Introducing Bootstrap 4 Cards</h2>
                <p>Bootstrap 4 introduces a new flexible and extensible content container&mdash;the <strong>card</strong> component&mdash;in place of old panels, wells, and thumbnail component. It includes options for headers and footers, a wide variety of content, contextual background colors, and powerful display options.</p>
                <p class="space">In the following sections, you will see what you can do with card component.</p>
                <h2>Creating a Basic Card</h2>
                <p>The card markup is pretty straight forward. The ourter rg3-w require the base class <code>.card</code>, whereas content can be placed inside the <code>.card-body</code>. The following example will show you how to create a card with a picture mixed with some text content and a button.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab24cb.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code1" >

<div class="card" style="width: 300px;">
    <img src="images/sample.svg" class="card-img-top" alt="...">
    <div class="card-body text-center">
        <h5 class="card-title">Alice Liddel</h5>
        <p class="card-text">Alice is a freelance web designer and developer based in London. She is specialized in HTML5, CSS3, JavaScript, Bootstrap, etc.</p>
        <a href="#" class="btn btn-primary">View Profile</a>
    </div>
</div>

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
                <!--ads-->
                <div>
                    <script async="async" data-cfasync="false" src="//pl15836387.cpmprofitablenetwork.com/a10153215a0b1494db9fb84541764f6b/invoke.js"></script>
<div id="container-a10153215a0b1494db9fb84541764f6b"></div>
                </div>
                <!--ads close-->
                <h2>Content Types for Card Component</h2>
                <p>The card component support a wide variety of content, including images, text, list groups, links, navs, and more. Here are the examples of what's supported by the card.</p>
                <h3>Body Only Card</h3>
                <p>You can simply use <code>.card</code> with <code>.card-body</code> within, whenever you need to create a padded box.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab7d52.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code2" >

<div class="card">
    <div class="card-body">This is some text within a padded box.</div>
</div>

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
                <h3>Card with Header and Footer</h3>
                <p>You can also add header and footer within your cards using the <code>.card-header</code> and <code>.card-footer</code> class, respectively. Let's take a look at the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbf3d.html?" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code3" >
<div class="card text-center">
    <div class="card-header">Featured</div>
    <div class="card-body">
        <h5 class="card-title">NASA launches solar probe</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante.</p>
        <a href="#" class="btn btn-primary">Know more</a>
    </div>
    <div class="card-footer text-muted">2 days ago</div>
</div>
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
                
                <h3>Placing List Groups within Card</h3>
                <p>You can also place list groups inside the card along with other content types, as shown here.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabb1ab.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code4" >

<div class="card" style="width: 18rem;">
    <div class="card-header">Featured</div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Vestibulum at eros</li>
    </ul>
    <div class="card-body">
        <a href="#" class="card-link">Add More</a>
        <a href="#" class="card-link">Share</a>
    </div>
</div>
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
                
                <p>Feel free to mix and match multiple content types to create the card you need. The following example will create a fixed-width card with images, text, list group, and links.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab8c8e.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code5" >

<div class="card" style="width: 300px;">
    <img src="images/avatar.svg" class="w-100 border-bottom" alt="Rounded Image">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Pulvinar leo id risus pellentesque el vestibulum. Sed diam libero egetve sodales sapien vel, aliquet nibhte bibendum enim porttitor orci.</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Vestibulum at eros</li>
    </ul>
    <div class="card-body">
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
    </div>
</div>
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
                <hr />                
                <h2>Customizing the Card Background</h2>
                <p>There are several options for customizing the card backgrounds, borders, and color. You can use the text and background utility classes to change the appearance of a card.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab6641.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code6" >

<div class="card" style="width: 300px;">
    <img src="images/avatar.svg" class="w-100 border-bottom" alt="Rounded Image">
<div class="row">
    <div class="col-sm-6">
        <div class="card text-white bg-primary mb-4">
            <div class="card-body">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card text-white bg-secondary mb-4">
            <div class="card-body">
                <h5 class="card-title">Secondary card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card text-white bg-success mb-4">
            <div class="card-body">
                <h5 class="card-title">Success card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card text-white bg-danger mb-4">
            <div class="card-body">
                <h5 class="card-title">Danger card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card text-white bg-warning mb-4">
            <div class="card-body">
                <h5 class="card-title">Warning card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card text-white bg-info mb-4">
            <div class="card-body">
                <h5 class="card-title">Info card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
            </div>
        </div>
    </div>    
    <div class="col-sm-6">
        <div class="card text-white bg-dark">
            <div class="card-body">
                <h5 class="card-title">Dark card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card bg-light">
            <div class="card-body">
                <h5 class="card-title">Light card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
            </div>
        </div>
    </div>
</div>                  </textarea>    
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
                
                <hr />
                <h2>Customizing the Card Border and Text</h2>
                <p>You can also customize the text and border color of any card using the text and border utility classes. Just apply these classes on the parent <code>.card</code> or its child elements, as shown below:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf939.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        
<textarea id="code7" >

<div class="row">
    <div class="col-sm-6">
        <div class="card border-primary mb-4">
            <div class="card-body text-primary">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card border-secondary mb-4">
            <div class="card-body text-secondary">
                <h5 class="card-title">Secondary card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card border-success mb-4">
            <div class="card-body text-success">
                <h5 class="card-title">Success card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card border-danger mb-4">
            <div class="card-body text-danger">
                <h5 class="card-title">Danger card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card border-warning mb-4">
            <div class="card-body text-warning">
                <h5 class="card-title">Warning card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card border-info mb-4">
            <div class="card-body text-info">
                <h5 class="card-title">Info card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card border-dark mb-4">
            <div class="card-body text-dark">
                <h5 class="card-title">Dark card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card border-light mb-4">
            <div class="card-body text-muted">
                <h5 class="card-title">Light card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
            </div>
        </div>
    </div>        
</div>
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
                
                <hr />
                <h2>Card Layout Options</h2>
                <p>In addition to styling of the cards, Bootstrap also includes a few options for laying out the series of cards. However, these layouts are not responsive yet.</p>
                <h3>Creating Card Groups</h3>
                <p>You can use card groups to render cards as a single, attached element with equal width and height columns. Card groups use <code>display: flex;</code> to achieve their uniform sizing.</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab53cf.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                       
<textarea id="code8" >

<div class="card-group">
    <div class="card">
        <img src="images/thumbnail.svg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
    <div class="card">
        <img src="images/thumbnail.svg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Vestibulum id metus ac nisl bibendum nibh scelerisque non purus in suspendisse.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
    <div class="card">
        <img src="images/thumbnail.svg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Pulvinar leo id risus enim. Bibendum varius tincidunt pellentesque malesuada in.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
</div>
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
                
                <h3>Creating Card Decks</h3>
                <p>Card decks are similar to card groups (i.e. each card has equal width and height). The only difference is cards aren't attached to one another. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabfcae.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        
<textarea id="code9" >

<div class="card-deck">
    <div class="card">
        <img src="images/thumbnail.svg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
    <div class="card">
        <img src="images/thumbnail.svg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Vestibulum id metus ac nisl bibendum nibh scelerisque non purus in suspendisse.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
    <div class="card">
        <img src="images/thumbnail.svg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Pulvinar leo id risus enim. Bibendum varius tincidunt pellentesque malesuada in.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
</div>
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
                
                <h3>Creating Card Columns</h3>
                <p>With Bootstrap 4 you can also create grid of cards like Pinterest by wrapping them in <code>.card-columns</code>. Cards are built with <a href="../des-css/stylel_multi-column-layouts.php">CSS column properties</a> instead of flexbox for easier alignment. Cards are ordered from top to bottom and left to right. Let's check out an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab817b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code10" >

<div class="card-columns">
<div class="card">
    <img src="images/thumbnail.svg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipi elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
</div>
<div class="card p-3">
    <blockquote class="blockquote mb-0 card-body">
        <p>Nam eget purus consectetur in vehicula. Nullamr ultrices nisl risus, viverra libero.</p>
        <footer class="blockquote-footer">
            <small class="text-muted">Someone famous</small>
        </footer>
    </blockquote>
</div>
<div class="card">
    <img src="images/thumbnail.svg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Vestibulum id metus ac nisl bibendum scelerisque non dignissim purus.</p>
        <p class="card-text"><small class="text-muted">Last updated 2 mins ago</small></p>
    </div>
</div>
<div class="card bg-primary text-white text-center p-3">
    <blockquote class="blockquote mb-0">
        <p>Pulvinar leo risus vestibulum. Sed diam on sodales eget.</p>
        <footer class="blockquote-footer text-white">
            <small>Someone famous</small>
        </footer>
    </blockquote>
</div>
<div class="card text-center">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Enim arcu, interdum dignissim venenatis velc.</p>
        <p class="card-text"><small class="text-muted">Last updated 1 mins ago</small></p>
    </div>
</div>
<div class="card">
    <img src="images/thumbnail.svg" class="card-img-top" alt="...">
</div>
<div class="card p-3 text-right">
    <blockquote class="blockquote mb-0">
        <p>Quis quam ut magna consequat faucibus. Pellentesque eget nisi suscipit tincidunt. Pellentesque quam.</p>
        <footer class="blockquote-footer">
            <small class="text-muted">Someone famous</small>
        </footer>
    </blockquote>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Convallis eget pretium, bibendum non leo. Proien suscipit purus adipiscing dolor gravida fermentum sapien blandit praest interdum vel metus.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
</div>
</div>
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
                <hr />
                <h2>Creating Horizontal Cards</h2>
                <p>You can also create horizontal cards where image and text content are placed side-by-side using a combination of grid and utility classes, as shown in the following example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab784b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code11" >

<div class="card" style="max-width: 500px;">
    <div class="row no-gutters">
        <div class="col-sm-5" style="background: #868e96;">
            <img src="images/sample.svg" class="card-img-top h-100" alt="...">
        </div>
        <div class="col-sm-7">
            <div class="card-body">
                <h5 class="card-title">Alice Liddel</h5>
                <p class="card-text">Alice is a freelance web designer and developer based in London. She is specialized in HTML5, CSS3, JavaScript, Bootstrap, etc.</p>
                <a href="#" class="btn btn-primary stretched-link">View Profile</a>
            </div>
        </div>
    </div>
</div>
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
                <hr />
                <h2>Card Image Overlays</h2>
                <p>You can even turn an image into a card background and place the card's text on the top it using the class <code>.card-img-overlay</code> in place of <code>.card-body</code>. Depending on the image, you may need additional styles for better adjustments. Here's an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab658d.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        <textarea id="code12" >

<div class="card text-white" style="width: 350px;">
    <img src="images/sample.svg" class="card-img-top" alt="...">
    <div class="card-img-overlay">
        <h5 class="card-title">Alice Liddel</h5>
        <p class="card-text">Alice is a freelance web designer and developer based in London. She is specialized in HTML5, CSS3, JavaScript, Bootstrap, etc.</p>
        <a href="#" class="btn btn-primary stretched-link">View Profile</a>
    </div>
</div>
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
                
				<div class="color-box">
                    <div class="shadow">
                        <div class="info-tab note-icon" title="Important Notes"><i></i></div>
                        <div class="note-box" style="background-color:#ff8585">
                            <p><strong>Read Carefully:</strong> The card content should not be larger than the height of the image. If content is larger than the image the content will be displayed outside the image.</p>
                        </div>
                    </div>
                </div>
                <hr />
                <h2>Text Alignment inside Card</h2>
                <p>You can easily change the text alignment of any card&mdash;entirely or specific parts&mdash;with the text alignment utility classes. Let's check out an example:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabf359.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code13" >

<!-- Card with default left text alignment -->
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Lorem ipsum dolor sit amet tempor...</p>
        <a href="#" class="btn btn-primary">Know more</a>
    </div>
</div>

<!-- Card with center text alignment -->
<div class="card text-center mt-3">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Vestibulum metus bibendum nibh sapien...</p>
        <a href="#" class="btn btn-primary">Know more</a>
    </div>
</div>

<!-- Card with right text alignment -->
<div class="card text-right mt-3">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Pulvinar leo id risus pellentesque diam...</p>
        <a href="#" class="btn btn-primary">Know more</a>
    </div>
</div>
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
                <hr />
                <h2>Specifying Card Size</h2>
                <p>Cards have no specific width, they are 100% wide by default. However, you can change this as needed with custom CSS, grid classes, or sizing utility classes. Let's see how this works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelabcce9.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a><span class="box-size"><i title="Maximize"></i></span></div>
                        <textarea id="code14" >

<!-- Card sizing using grid markup -->
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet...</p>
                <a href="#" class="btn btn-primary">Know more</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Vestibulum metus bibendum nibh...</p>
                <a href="#" class="btn btn-primary">Know more</a>
            </div>
        </div>
    </div>
</div>

<!-- Card sizing using sizing utility classes -->
<div class="card w-75">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Lorem ipsum dolor sit amet...</p>
        <a href="#" class="btn btn-primary">Know more</a>
    </div>
</div>

<!-- Card sizing using sizing utility classes -->
<div class="card" style="width: 15rem;">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Lorem ipsum dolor sit amet...</p>
        <a href="#" class="btn btn-primary">Know more</a>
    </div>
</div>

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
                <hr />
                <h2>Card with Stretched Link</h2>
                <p>You can add the class <code>.stretched-link</code> to a link inside the card to make the whole card clickable (i.e. whole card act like a link). Multiple links are not recommended with stretched links.</p>
                <p>Try out the following example to see how this actually works:</p>
                <div class="example">
                    <div class="my_codeb">
                        <div class="my_codeb-title"><h4>Example</h4><a href="../codelab3610.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                        
<textarea id="code15" >

<div class="card" style="width: 300px;">
    <img src="images/sample.svg" class="card-img-top" alt="...">
    <div class="card-body text-center">
        <h5 class="card-title">Alice Liddel</h5>
        <p class="card-text">Alice is a freelance web designer and developer based in London. She is specialized in HTML5, CSS3, JavaScript, Bootstrap, etc.</p>
        <a href="#" class="btn btn-primary stretched-link">View Profile</a>
    </div>
</div>

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
                <div class="bottom-link clearfix">
                    <a href="bt_images.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i>
Previous</a>
                    <a href="bt_media-objects.php" class="next-page-bottom" style="float: right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
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
