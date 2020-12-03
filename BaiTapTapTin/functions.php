<?php
// kiểm tra dữ liệu khác rỗng
  function checkEmpty($value) {
    $flag = false;
    if (!isset($value) || trim($value) == '') {
      $flag = true;
    }
    return $flag;
  }
// kiểm tra chiều dài dữ liệu
  function checkLength($value, $min, $max) {
    $flag = false;
    $length = strlen($value);
    if ($length < $min || $length > $max) {
      $flag = true;
    }
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