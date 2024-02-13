<?php
echo"<pre>";
print_r($_POST);
echo"</pre>";

echo"<pre>";
print_r($_SERVER); //Addition Information related server
echo"</pre>";

echo $_SERVER['PHP_SELF']; 

echo $_SERVER['HTTP_HOST'];

?>