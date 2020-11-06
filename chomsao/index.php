<html>
  <head>
    <title>Bạn thuộc chòm sao gì?</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <?php
    $flagShowCapricorn = false;
    $flagShowAquarius = false;
    $flagShowPisces = false;
    $flagShowAries = false;
    $flagShowTaurus = false;
    $flagShowGemini = false;
    $flagShowCancer = false;
    $flagShowLeo = false;
    $flagShowVirgo = false;
    $flagShowLibra = false;
    $flagShowScorpio = false;
    $flagShowSagittarius = false;

    $flagCheckDate = true;

    $day = "";
    $mon = "";

    if (isset($_POST["day"]) && isset($_POST["month"])) {
      $day = $_POST["day"];
      $mon = $_POST["month"];

      if (is_numeric($day) && is_numeric($mon)) { 
        /*
          * Capricorn 	23/12 - 19/01	Ma kết
          * Aquarius		20/01 - 19/02	Bảo Bình
          * Pisces		20/02 - 21/03	Song Ngư
          * Aries 		22/03 - 20/04	Bạch Dương
          * Taurus 		21/04 - 21/05	Kim Ngưu
          * Gemini		22/05 - 22/06	Song Tử
          * Cancer		23/06 - 23/07	Cự Giải
          * Leo			24/07 - 23/08	Sư Tử
          * Virgo		24/08 - 23/09	Xử Nữ
          * Libra		24/09 - 23/10	Thiên Xứng
          * Scorpio 		24/10 - 22/11	Hổ Cáp
          * Sagittarius	23/11 - 22/12	Nhân Mã
        */ 
        switch($mon) {
          case 1:
            if ($day <= 19) $flagShowCapricorn	= true;
            if ($day >= 20) $flagShowAquarius = true;
            if ($day < 1 || $day > 31) $flagCheckDate = false;
          break;

          case 2:
            if ($day <= 19) $flagShowAquarius = true;
            if ($day >= 20) $flagShowPisces = true;
            if ($day < 1 || $day > 29) $flagCheckDate = false;
          break;

          case 3:
            if ($day <= 21) $flagShowPisces = true;
            if ($day >= 22) $flagShowAries = true;
            if ($day < 1 || $day > 31) $flagCheckDate = false;
					break;

			  	case 4:
            if ($day <= 20) $flagShowAries = true;
            if ($day >= 21) $flagShowTaurus = true;
            if ($day < 1 || $day > 30) $flagCheckDate = false;
					break;

          case 5:
            if ($day <= 21) $flagShowTaurus = true;
            if ($day >= 22) $flagShowGemini = true;
            if ($day < 1 || $day > 31) $flagCheckDate = false;
          break;

          case 6:
            if ($day <= 22) $flagShowGemini = true;
            if ($day >= 23) $flagShowGemini = true;
            if ($day < 1 || $day > 30) $flagCheckDate = false;
          break;

          case 7:
            if ($day >= 24) $flagShowLeo = true;
            if ($day <= 23) $flagShowCancer = true;
            if ($day < 1 || $day > 31) $flagCheckDate = false;
          break;

          case 8:
            if ($day >= 24) $flagShowVirgo = true;
            if ($day <= 23) $flagShowLeo = true;
            if ($day < 1 || $day > 31) $flagCheckDate = false;
          break;

          case 9:
            if ($day <= 24) $flagShowLibra = true;
            if ($day >= 25) $flagShowVirgo = true;
            if ($day < 1 || $day > 30) $flagCheckDate = false;
          break;

          case 10:
            if ($day <= 23) $flagShowLibra = true;
            if ($day >= 24) $flagShowScorpio = true;
            if ($day < 1 || $day > 31) $flagCheckDate = false;
          break;

          case 11:
            if ($day <= 23) $flagShowScorpio 	= true;
            if ($day >= 24) $flagShowSagittarius = true;
            if ($day < 1 || $day > 30) $flagCheckDate	= false;
          break;

          case 12:
            if ($day >= 23) $flagShowCapricorn = true;
            if ($day <= 22) $flagShowSagittarius = true;
            if ($day < 1 || $day > 31) $flagCheckDate = false;
          break;

          default:
            $flagCheckDate = false;
          break;
        }
      } else {
        $flagCheckDate = false;
      }
    } 
  ?>

  <body>
    <div class="content">
      <h1>Bạn thuộc chòm sao gì?</h1>

      <form class="form" action="#" method="post">
        <div class="row">
          <span>Ngày sinh</span>
          <input type="text" name="day" value="<?php echo $day;?>"/>
        </div>      

        <div class="row">
          <span>Tháng sinh</span>
          <input type="text" name="month" value="<?php echo $mon;?>"/>
        </div>

        <div class="row">
          <input type="submit" value="Lấy chòm sao!" />
        </div>
      </form>

      <?php if($flagShowAries == true && $flagCheckDate == true) {?>
        <div class="result">
        	<img src="https://307a0e78.vws.vegacdn.vn/view/v2/image/img.media/tinh-cach-cung-bach-duong-nu-theo-ngay-sinh.png"/>
        	<p>Cung Bạch Dương <span>(Aries - 22/3 - 20/4)</span></p>
        </div><?php };?>

      <?php if($flagShowTaurus == true && $flagCheckDate == true) {?>
        <div class="result">
        	<img src="https://media.phunutoday.vn/files/content/2020/08/10/cung-kim-nguu-1904.jpg" />
        	<p>Cung Kim Ngưu <span>(Taurus - 21/4 - 21/5)</span></p>
        </div><?php };?>

      <?php if($flagShowGemini == true && $flagCheckDate==true) {?>
        <div class="result">
        	<img src="https://cms.lichngaytot.com/medias/standard/2015/5/29/Bat-mi-bi-mat-12-thang-cua-Song-Tu-hinh-anh.jpg" />
        	<p>Cung Song Tử <span>(Gemini - 22/5 - 22/6)</span></p>
        </div><?php }?>

      <?php if($flagShowCancer == true && $flagCheckDate == true) {?>
        <div class="result">
        	<img src="https://chomsao.files.wordpress.com/2015/03/5032dd65-29c9-4411-b89b-2bad5da91fff.jpg?w=284&h=300" />
        	<p>Cung Cự Giải <span>(Cancer - 23/6 - 23/7)</span></p>
        </div><?php }?>

      <?php if($flagShowLeo == true && $flagCheckDate == true) {?>
          <div class="result">
            <img src="https://cunghoangdao.info/wp-content/uploads/2017/07/Dac-Diem-cung-Su-Tu_-2.jpg" />
            <p>Cung Sư Tử <span>(Leo - 24/7 - 23/8)</span></p>
          </div><?php }?>

      <?php if($flagShowVirgo == true && $flagCheckDate == true) {?>
        <div class="result">
        	<img src="https://tuvikhoahoc.vn/media/images/article/47213950/cung-xu-nu-1.png" />
        	<p>Cung Xử Nữ <span>(Virgo - 24/8 - 23/9)</span></p>
        </div><?php }?>      

      <?php if($flagShowLibra == true && $flagCheckDate == true) {?>
        <div class="result">
          <img src="https://netmode.com.vn/wp-content/uploads/2020/08/tinh-cach-cung-thien-binh-nu-khi-yeu-1.jpg" />
          <p>Cung Thiên Xứng <span>(Libra - 24/9 - 23/10)</span></p>
        </div><?php }?>   

      <?php if($flagShowScorpio == true && $flagCheckDate == true) {?>
        <div class="result">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSjqRbiAlGw_RWkfbK4dxaZIF8QGKdfIMzX1g&usqp=CAU" />
          <p>Cung Hổ Cáp <span>(Scorpio - 24/10 - 22/11)</span></p>
        </div><?php }?>   

      <?php if($flagShowSagittarius == true && $flagCheckDate == true) {?>
        <div class="result">
          <img src="https://i.pinimg.com/474x/d6/00/7d/d6007d70a746701e894dc0503259a744.jpg" />
          <p>Cung Nhân Mã <span>(Sagittarius - 23/11 - 22/12)</span></p>
        </div><?php }?>   

      <?php if($flagShowCapricorn == true && $flagCheckDate == true) {?>
        <div class="result">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTd8CpP-8arMDL9q2cswiVmbzRxYKkWV4ZwKg&usqp=CAU" />
          <p>Cung Ma Kết <span>(Capricorn - 23/12 - 19/1)</span></p>
        </div><?php }?>   

      <?php if($flagShowAquarius == true && $flagCheckDate == true) {?>
        <div class="result">
          <img src="https://i.pinimg.com/originals/22/ea/95/22ea952b6e64ec8fdfd1c05458bcf42d.jpg" />
          <p>Cung Bảo Bình <span>(Aquarius - 20/1 - 19/2)</span></p>
        </div><?php }?>  

      <?php if($flagShowPisces == true && $flagCheckDate == true) {?>
        <div class="result">
          <img src="https://i.pinimg.com/originals/6f/3e/0e/6f3e0ecc1cca0552430329760a409b29.jpg" />
          <p>Cung Song Ngư <span>(Pisces - 20/2 - 21/3)</span></p>
        </div><?php }?>  

      <?php if($flagCheckDate == false) {?>
        <div class="result">
          <h3>Dữ liệu không phù hợp</h3>
        </div><?php }?> 
    </div>
  </body>
</html>