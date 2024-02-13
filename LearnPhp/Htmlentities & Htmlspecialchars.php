<?php
$str ="A 'quote' is <b>bolde</b>";
$str01 = '<a href="https://www.youtube.com/watch?v=auyV2KOI_TQ">This is Youtube</a>';


echo $str . "<br><br>";
echo $str01 . "<br><br>";

echo htmlentities($str); //A 'quote' is &lt;b&gt;bolde&lt;/b&gt; this is show in view source file

?>
