<?php
$file = 'DuLieu.txt';
  $data = file($file);
  // đếm số hàng
  $lines = count($data);
  // đếm số từ
  $string = file_get_contents($file);
  $words = str_word_count($string);
  // đếm khoảng trắng
  $spaces = substr_count($string, ' ');
  // đếm kí tự
  preg_match_all('/\S/ismU', $string, $matches);
  $chars = count($matches[0]);
  // echo '<pre>';
  // print_r($matches);
  // echo '</pre>';
  echo 'Tổng số hàng: ' . $lines . '<br>';
  echo 'Tổng số từ: ' . $words . '<br>';
  echo 'Tổng số khoảng trắng: ' . $spaces . '<br>';
  echo 'Tổng số kí tự: ' . $chars . '<br>';
  
  ?>
