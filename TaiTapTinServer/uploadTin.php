
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
<?php
   // tạo tên tập tin ngẫu nhiên
   function randomString($length = 5) {
    // tạo ra một mảng gồm các kí tự AZaz09
    $arrChar = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
    // chuyển mảng thành chuỗi
    $chars = implode($arrChar, '');
    // đảo chuỗi ngẫu nhiên
    $chars = str_shuffle($chars);
    $result = substr($chars, 0, 5);
    return $result;
  }

  if (isset($_FILES['fileUpload'])) {
    $fileUpload = $_FILES['fileUpload'];
    if ($fileUpload['name'] != null) {
      $fileNameTmp = $fileUpload['tmp_name'];
      $random = randomString(5);
      $destination = './files/' . $random . '_' . $fileUpload['name'];
      if (move_uploaded_file($fileNameTmp, $destination)) {
        echo 'upload succeeded!';
      } else {
        echo 'upload failed!';
      }
    }

  }
 
?>
  <form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="fileUpload">
    <input type="submit" value="Submit">
  </form>
</body>
</html>