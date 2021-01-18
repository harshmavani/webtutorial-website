<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Decoding HTML Entities in PHP</title>
</head>
<body>

<?php
$my_str = "I&#039;ll come &amp; &lt;b&gt;&quot;get you&quot;&lt;/b&gt;.";
 
// Decode &amp;, &lt;, &gt; and &quot;
echo htmlspecialchars_decode($my_str);
 
// Decode &amp;, &lt;, &gt;, &quot; and &#039;
echo htmlspecialchars_decode($my_str, ENT_QUOTES);
 
// Decode &amp;, &lt; and &gt;
echo htmlspecialchars_decode($my_str, ENT_NOQUOTES);
?>

</body>
</html>