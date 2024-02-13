<!-- Upload file to the sever -->

<?php
if(isset($_FILES['image'])){
    echo"<pre>";
    print_r($_FILES);
    echo"</pre>";

   
    $file_name= $_FILES['image']['name'];
    $file_Size= $_FILES['image']['size'];
    $file_tem= $_FILES['image']['tmp_name'];
    $file_type= $_FILES['image']['type'];

move_uploaded_file($file_tem,"../../UploadImages/".$file_name );

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- enctype use only the file type is use -->
  <form action="" method="post" enctype="multipart/form-data">
<input type="file" name="image" id="">
<br><br>
<input type="submit" name="" id="">
  </form>
</body>
</html>