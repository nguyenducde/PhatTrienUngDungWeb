<?php 
    include('simple_html_dom.php');
    $url = 'https://spiderum.com/bai-dang/KHONG-CAN-DAY-NHAU-TU-DUY-uus';
    $html = file_get_html($url);
    foreach($html->find('img') as $element) {
        echo '<img src="'.$element->src.'" /><br>';
 }
//  $noidung = $html->find('#post-content-view-edit',0);
//  echo $noidung;

?>