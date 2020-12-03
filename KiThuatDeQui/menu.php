<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
<?php
  $menu = array();
  $menu[] = array('id' => 1, 'name' => 'Home', 'parent' => 0);
  $menu[] = array('id' => 2, 'name' => 'About', 'parent' => 0);
  $menu[] = array('id' => 3, 'name' => 'News', 'parent' => 0);
  $menu[] = array('id' => 4, 'name' => 'Products', 'parent' => 0);
  $menu[] = array('id' => 5, 'name' => 'Contact', 'parent' => 0);
  $menu[] = array('id' => 6, 'name' => 'Tin trong nước', 'parent' => 3);
  $menu[] = array('id' => 7, 'name' => 'Tin quốc tế', 'parent' => 3);
  $menu[] = array('id' => 8, 'name' => 'Công nghệ', 'parent' => 6);
  $menu[] = array('id' => 9, 'name' => 'Giáo dục', 'parent' => 6);
  $menu[] = array('id' => 10, 'name' => 'Y tế', 'parent' => 6);
  $menu[] = array('id' => 11, 'name' => 'Education', 'parent' => 7);
  $menu[] = array('id' => 12, 'name' => 'Breaking news', 'parent' => 7);
  $menu[] = array('id' => 13, 'name' => 'Software', 'parent' => 4);

  function deQuyMenu($array, $parent, &$newString) {
    // điều kiện dừng
    if (count($array) > 0) {
      $newString .= '<ul>';
      foreach ($array as $key => $value) {
        if ($value['parent'] == $parent) {
          $value['name'] = '<a href="targetPage.php?targetID=' . $value['id'] . '">' . $value['name'] . '</a>';
          $newString .= '<li>' . $value['name'];
          unset($array[$key]);
          $newParent = $value['id'];
          deQuyMenu($array, $newParent, $newString);
          $newString .= '</li>';
        }
      }
      $newString .= '</ul>';
    }
  }
  deQuyMenu($menu, 0, $newString);
  $newString = str_replace('<ul></ul>', '', $newString);
  echo $newString;
?>
</body>
</html>