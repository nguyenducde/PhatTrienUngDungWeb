<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
<?php
  require_once 'functions.php';
  $error = '';
  $configs = parse_ini_file('config.ini');

  if (isset($_FILES['fileUpload'])) {
    $fileUpload = $_FILES['fileUpload'];
    $flagSize = checkFileSize($fileUpload['size'], $configs['min_size'], $configs['max_size']);
    $flagExt = checkFileExtension($fileUpload['name'], explode('|', $configs['extension']));
    if ($fileUpload['name'] != null && $flagSize && $flagExt) {
      $fileNameTmp = $fileUpload['tmp_name'];
      $random = randomString(5);
      $destination = './files/' . $random . '_' . $fileUpload['name'];
      if (move_uploaded_file($fileNameTmp, $destination)) {
        echo 'upload succeeded!';
      } else {
        echo 'upload failed!';
      }
    }
    if ($flagSize == false) {
      $error = 'Upload không thành công, vui lòng upload tập tin từ 100KB tới 5MB và có phần mở rộng là jpg, png, zip, mp3';
    }
    if ($flagExt == false) {
     $error = 'Upload không thành công, vui lòng upload tập tin từ 100KB tới 5MB và có phần mở rộng là jpg, png, zip, mp3';
    }
  }
 
?>
  <form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="fileUpload">
    <input type="submit" value="Submit">
    <?php
      echo '<p style="color:red">' . $error . '</p>';
    ?>
  </form>
</body>
</html>