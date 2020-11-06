<html>
  <head>
    <title>PHP Loop</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <?php
    $val = "";
  ?>
  <body>
    <div class="content">
      <h1>Xếp hình Tam giác</h1>
      <form action="/index.php" method="get">
        <input type="checkbox" name="box" value="for">
        <label for="box"> For </label><br>
        <input type="checkbox" name="box" value="while">
        <label for="box"> While</label><br>
        <input type="checkbox" name="box" value="do-while" checked>
        <label for="box"> Do-while</label><br><br>
        
        <span>Số hàng</span>
        <input type="number" name="rowNumber" value="<?php echo $val ?>"/>

        <ul>
          <li>
            <input type="checkbox" name="type" value="1" checked>
            <label for="box"> 1 </label><br><br>
            <input type="image" src="1.png" alt="Submit" />
          </li>
          <li>
            <input type="checkbox" name="type" value="2">
            <label for="box"> 2 </label><br><br>
            <input type="image" src="2.png" alt="Submit" />
          </li>
         <li>
            <input type="checkbox" name="type" value="3">
            <label for="box"> 3 </label><br><br>
            <input type="image" src="3.png" alt="Submit" />
          </li>
        </ul>

        <input class="btn" type="submit" value="Submit">
        
      </form>
        <div class="result">
          <?php
            if (isset($_GET["type"]) && isset($_GET["box"]) && isset($_GET["rowNumber"])) {
              $rowNumber = $_GET["rowNumber"];
              $box = $_GET["box"];
              $type = $_GET["type"];
              

              switch ($type) {
                case 1:
                  $i = 1;
                  $n = $rowNumber;

                  if (($n + "4") == "4") {
                    echo "ban chua nhap so hang";
                  }

                  $result = "";
                  if ($box == "while") {
                    while ($i <= $n) {
                      echo $result = str_repeat("*", $i) . "<br>";
                      $i++;
                    }
                  }

                  if ($box == "do-while") {
                    do {
                      echo $result = str_repeat("*", $i) . "<br>";
                      $i++;
                    } while(($i + 1) <= $n);
                  }

                  for ($i = 0; $i <= $n; $i++) {
                    echo $result = str_repeat("*", $i) . "<br>";
                  }
                  
                break;

                case 2:
                  $i = $rowNumber;

                  $n = 0;


                  if (($i + "4") == "4") {
                    echo "ban chua nhap so hang";
                  }

                  $result = "";
                  if ($box == "while") {
                    while ($i >= $n) {
                      echo $result = str_repeat("*", $i) . "<br>";
                      $i--;
                    }
                  }

                  if ($box == "do-while") {
                    do {
                      echo $result = str_repeat("*", $i) . "<br>";
                      $i--;
                    } while ($i >= $n + 1);
                  }
                  
                  for ($i = $rowNumber; $i >= $n; $i--) {
                    echo $result = str_repeat("*", $i) . "<br>";
                  }

                break;

                case 3:
                  $i = 1;
                  $n = $rowNumber;
                  
                  
                  if (($n + "4") == "4") {
                    echo "ban chua nhap so hang";
                  } 

                  $space = "";
                  $charater = "";
                  $result = "";
                  while ($i <= $n) {
                    $space = str_repeat("&nbsp;&nbsp;", $n - $i);
                    $charater = str_repeat("*", 2 * $i - 1);
                    echo $result = $space . $charater . "<br>"; 
                    $i++;
                  }
                break;
                    
                default:
                break;
              }
            }
        ?>
      </div>
    </div>
  </body>
</html>