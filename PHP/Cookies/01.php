<!-- 1.-----------------------Create Cookie -->
<!-- setcookie(name{name of the cookies},value{the value of the cookies},expire{Time to expire the cookies if there is no expire so user clear the cashe than the data expire},path{retrieved the path },domain{acces by the domain},secure{only true{https} and false},httponly{only for server side or client side}) -->


<!-- 2.-----------------------View Cookie -->
<!-- $_COOKIE[name] -->





<?php

$cookie_name = "user";
$cookie_value = "RishuNir";

setcookie($cookie_name, $cookie_value,time()+(86400), "/"  )

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE[$cookie_name ])){
echo "Cookies is not set";
    } else{

        echo $_COOKIE[$cookie_name ];
    }
    ?>
</body>
</html>