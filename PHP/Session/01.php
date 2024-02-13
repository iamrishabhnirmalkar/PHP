<!-- 1. session_start(); -->
<!-- 2.  $_SESSION[name] = value; -->
<!-- 3.. echo $_SESSION[name]; -->
<!-- Delete Session -->
<!--1. session_unset(); -->
<!--2. session_destroy(); -->

<?php
session_start();

$_SESSION["favcolor"] = "green";

echo "session variable is set"
?>
