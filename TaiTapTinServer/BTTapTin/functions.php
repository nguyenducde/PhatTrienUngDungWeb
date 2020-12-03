<?php
// check file size
  function checkFileSize($size, $min, $max) {
    $flag = false;
    if ($size >= $min && $size <= $max) { $flag = true; }
    return $flag;
  }
  // check file extension
  function checkFileExtension($fileName, $arrExtension) {
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $flag = false;
    if (in_array(strtolower($ext), $arrExtension) == true) { $flag = true; }
    return $flag;
  }

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
?>