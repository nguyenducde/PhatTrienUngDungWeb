<?php
$data = file_get_contents('https://vi.wikipedia.org/wiki/%C4%90%E1%BA%A1i_d%E1%BB%8Bch_COVID-19') or die('Không đọc được dữ liệu');
$pattern='#(?<=<table class="wikitable plainrowheaders sortable jquery-tablesorter" style="text-align:right; font-size:90%; width:390px; float:right; clear:right; margin:0px 0px 0.5em 1em;">
>).*(?=</table>)';
preg_match($pattern, $data, $matches);
$result='<table boder="1px"' . $matches[0] . '</table>';
echo $result;
?>

