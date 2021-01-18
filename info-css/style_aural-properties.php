<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta name="description" content="CSS Aural Properties - An Introduction to Aural Style Sheets">
	  <meta name="keywords" content="css,css3,CSS Aural Properties - An Introduction to Aural Style Sheets">
	  <meta name="author" content="webschooltoday.com">
    <title>CSS Aural Properties - An Introduction to Aural Style Sheets</title>
    <meta name="description" content="An aural style sheet uses a combination speech synthesis and sound effects to make a web document accessible to visually challenged people and screen readers." />
 <?php include "../links.php" ?></head>
<body>
    
<div>
<div class="tital">CSS Aural Properties - An Introduction to Aural Style Sheets</div>    
<?php include "../head_part.php" ?> 


    <div class="rg3-w clearfix"> 

<?php include "info_css.php" ?>
        <div class="rg3-sec_main">
            <div class="rg3-sec_u">
                <div class="rg3-sec_i">
                    
</div>
<a href="javascript:void(0);" class="next-page disabled" title="Go to Next Page : Disabled"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>

            <a href="style_web-safe-fonts.php" class="previous-page" title="Go to Previous Page"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
            <h1>CSS <code>Aural</code> Properties</h1>
            <p class="summary">Aural properties defines the aural rendering of a document.</p>
            <h2>Aural Style Sheets</h2>
            <p>Aural style sheets are the part of CSS that uses a combination of speech synthesis and sound effects to make a web document more accessible to visually impaired and screen readers.</p>
            <p>Aural presentation can be used:</p>
            <ul>
                <li>by blind people</li>
                <li>in the automobiles</li>
                <li>in devices like home entertainment </li>
                <li>industrial and medical documentation systems</li>
                <li>to help users learning to read or who have difficulty reading</li>
            </ul>
            <p>When using aural properties, the canvas consists of a three-dimensional physical space (sound surrounds) and a temporal space (one may specify sounds before, during, and after other sounds). The CSS properties also allow you to vary the quality of synthesized speech (voice type, frequency, inflection, etc.).</p>
            <p>An example of an aural style sheet:</p>
            <div class="example">
                <div class="my_codeb">
                    <div class="my_codeb-title"><h4>Example</h4><a href="../codelabbf5b.html" target="_blank" class="try-btn" title="Try this code using online Editor">Try this code <span>&raquo;</span></a></div>
                    <textarea id="code1">

h1, h2, h3, h4, h5, h6 {
    voice-family: male;
    stress: 20;
    richness: 90;
    cue-before: url("pop.au");
}
p {
    azimuth: center-left;
}
quotes {
    volume: x-soft;
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
            <p>This will direct the speech synthesizer to speak headers in a very rich male voice (a kind of "audio font").Before speaking the headers; a sound sample will be played from the given URL.</p>
            <p>Paragraphs will appear to come from front left (if the sound system is capable of spatial audio). And quotes will be very soft.</p>
            <div class="shadow">
                <table class="data">
                    <tr>
                        <th>Property</th>
                        <th><pre>Values               </pre></th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td><code>azimuth</code></td>
                        <td><i>angle</i><br /><code>left-side</code><br /><code>far-left</code><br /><code>left</code><br /><code>center-left</code><br /><code>center</code><br /><code>center-right</code><br /><code>right</code><br /><code>far-right</code><br /><code>right-side</code><br /><code>behind</code><br /><code>leftwards</code><br /><code>rightwards</code><br /><code><a href="../definitions.php#inherit">inherit</a></code></td>
                        <td>Sets where the sound should come from horizontally.</td>
                    </tr>
                    <tr>
                        <td><code>cue</code></td>
                        <td><i>cue-before</i><br /><i>cue-after</i><br /><code><a href="../definitions.php#inherit">inherit</a></code></td>
                        <td>Shorthand for setting the cue properties (i.e. cue-before and cue-after) in one declaration.</td>
                    </tr>
                    <tr>
                        <td><code>cue-after</code></td>
                        <td><code>none</code><br /><i>url</i><br /><code><a href="../definitions.php#inherit">inherit</a></code></td>
                        <td>Specifies a sound to be played after speaking an element's content to delimit it from other.</td>
                    </tr>
                    <tr>
                        <td>cue-before</td>
                        <td><code>none</code><br /><i>url</i><br /><code><a href="../definitions.php#inherit">inherit</a></code></td>
                        <td>Specifies a sound to be played before speaking an element's content to delimit it from other.</td>
                    </tr>
                    <tr>
                        <td>elevation</td>
                        <td><i>angle</i><br /><code>below</code><br /><code>level</code><br /><code>above</code><br /><code>higher</code><br /><code>lower</code><br /><code><a href="../definitions.php#inherit">inherit</a></code></td>
                        <td>Sets where the sound should come from vertically.</td>
                    </tr>
                    <tr>
                        <td><code>pause</code></td>
                        <td><i>pause-before</i><br /><i>pause-after</i><br /><code><a href="../definitions.php#inherit">inherit</a></code></td>
                        <td>Shorthand for setting the pause properties (i.e. pause-before and pause-after) in one declaration.</td>
                    </tr>
                    <tr>
                        <td><code>pause-after</code></td>
                        <td><i>time</i><br /><i>%</i><br /><code><a href="../definitions.php#inherit">inherit</a></code></td>
                        <td>Specify a pause to be observed after speaking an element's content.</td>
                    </tr>
                    <tr>
                        <td><code>pause-before</code></td>
                        <td><i>time</i><br /><i>%</i><br /><code><a href="../definitions.php#inherit">inherit</a></code></td>
                        <td>Specify a pause to be observed before speaking an element's content.</td>
                    </tr>
                    <tr>
                        <td><code>pitch</code></td>
                        <td><i>frequency</i><br /><code>x-low</code><br /><code>low</code><br /><code>medium</code><br /><code>high</code><br /><code>x-high</code><br /><code><a href="../definitions.php#inherit">inherit</a></code></td>
                        <td>Specifies the average pitch (a frequency) of the speaking voice. The average pitch of a voice depends on the voice family.</td>
                    </tr>
                    <tr>
                        <td><code>pitch-range</code></td>
                        <td><i>number</i><br /><code><a href="../definitions.php#inherit">inherit</a></code></td>
                        <td>Specifies variation in average pitch.</td>
                    </tr>
                    <tr>
                        <td><code>play-during</code></td>
                        <td><code>auto</code><br /><code>none</code><br /><code>url</code><br /><code>mix</code><br /><code>repeat</code><br /><code><a href="../definitions.php#inherit">inherit</a></code></td>
                        <td>Specifies a sound to be played as a background while an element's content is spoken.</td>
                    </tr>
                    <tr>
                        <td><code>richness</code></td>
                        <td><i>number</i><br /><code><a href="../definitions.php#inherit">inherit</a></code></td>
                        <td>Specifies the richness of the speaking voice.</td>
                    </tr>
                    <tr>
                        <td><code>speak</code></td>
                        <td><code>normal</code><br /><code>none</code><br /><code>spell-out</code><br /><code><a href="../definitions.php#inherit">inherit</a></code></td>
                        <td>Specifies whether text will be rendered aurally and if so, in what manner.</td>
                    </tr>
                    <tr>
                        <td><code>speak-header</code></td>
                        <td><code>always</code><br /><code>once</code><br /><code><a href="../definitions.php#inherit">inherit</a></code></td>
                        <td>Specifies whether table headers are spoken before every cell, or only before a cell when that cell is associated with a different header than the previous cell.</td>
                    </tr>
                    <tr>
                        <td><code>speak-numeral</code></td>
                        <td><code>digits</code><br /><code>continuous</code><br /><code><a href="../definitions.php#inherit">inherit</a></code></td>
                        <td>Specifies how numerals are spoken.</td>
                    </tr>
                    <tr>
                        <td><code>speak-punctuation</code></td>
                        <td><code>none</code><br /><code>code</code><br /><code><a href="../definitions.php#inherit">inherit</a></code></td>
                        <td>Specifies how punctuation characters are spoken.</td>
                    </tr>
                    <tr>
                        <td><code>speech-rate</code></td>
                        <td><i>number</i><br /><code>x-slow</code><br /><code>slow</code><br /><code>medium</code><br /><code>fast</code><br /><code>x-fast</code><br /><code>faster</code><br /><code>slower</code><br /><code><a href="../definitions.php#inherit">inherit</a></code></td>
                        <td>Specifies the speaking rate i.e. number of words spoken per minute.</td>
                    </tr>
                    <tr>
                        <td><code>Stress</code></td>
                        <td><i>number</i><br /><code><a href="../definitions.php#inherit">inherit</a></code></td>
                        <td>Specifies the "stress" in the speaking voice.</td>
                    </tr>
                    <tr>
                        <td><code>voice-family</code></td>
                        <td><i>specific-voice</i><br /><i>generic-voice</i><br /><code><a href="../definitions.php#inherit">inherit</a></code></td>
                        <td>Specifies a comma-separated, prioritized list of voice family names.</td>
                    </tr>
                    <tr>
                        <td><code>volume</code></td>
                        <td><i>number</i><br /><i>%</i><br /><code>silent</code><br /><code>x-soft</code><br /><code>soft</code><br /><code>medium</code><br /><code>loud</code><br /><code>x-loud </code><br /><code><a href="../definitions.php#inherit">inherit</a></code></td>
                        <td>Specifies the volume of the speaking voice.</td>
                    </tr>
                </table>
            </div>
            
            <div class="bottom-link clearfix">
                <a href="style_web-safe-fonts.php" class="previous-page-bottom"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                <a href="javascript:void(0);" class="next-page-bottom disabled" title="Disabled" style="float:right;">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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