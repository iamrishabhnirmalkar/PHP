
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
<form  action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
Name: <input type="text" name="fname"> <br><br>
Age: <input type="text" name="age"> <br><br>

<input type="submit" name="save">

    </form>
    <?php 
    //We use codint if the save is isset or save is click than codition start
   if(isset($_POST['save'])){
    echo $_POST['fname']. "<br>";
    echo $_POST['age']. "<br>";

   }
    ?>
</body>
</html>