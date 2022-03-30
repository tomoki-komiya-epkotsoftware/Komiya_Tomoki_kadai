<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP 課題1</title>
</head>
<body>
  <p>(1)<br/>
    <?php
    $var1 = 'Hello';
    $var2 = 'hello';
    $var3 = 'world';
    if(strcasecmp($var1, $var2) === 0) {
      echo '大文字と小文字を区別せずに比較する場合' . $var1 . 'と' . $var2 . 'は同じ文字列です<br/>';
    } else {
      echo '大文字と小文字を区別せずに比較する場合' . $var1 . 'と' . $var2 . 'は違う文字列です<br/>';
    }
    if(strcasecmp($var1, $var3) === 0) {
      echo '大文字と小文字を区別せずに比較する場合' . $var1 . 'と' . $var3 . 'は同じ文字列です<br/>';
    } else {
      echo '大文字と小文字を区別せずに比較する場合' . $var1 . 'と' . $var3 . 'は違う文字列です<br/>';
    }
    ?>
  </p>

  <p>(2)<br/>
    <?php
    echo $var1 . $var3 .'<br/>';
    echo '2つ以上の文字列を' . '連結して表示するプログラム。<br/>';
    ?>
  </p>

  <p>(3)<br/>
    <?php
    echo '文字列と数値' . 1 . 'を結合させるプログラム<br/>';
    $num1 = 1;
    echo $num1 . $var3 . '<br/>';
    echo $var3 . 3;
    ?>
  </p>

  <p>(4)<br/>
    <?php
    define('CORPORATION', 'エプコットソフトウェア');
    const NAME = '小宮　智生';
    echo CORPORATION . '<br/>' . NAME;
    ?>
  </p>

  <p>(5)<br/>
    <?php
    echo __LINE__ . '<br/>';
    echo __FILE__
    ?>
  </p>

  <p>(6)<br/>
    <?php
    $num2 = 300;
    echo $num2/365;
    ?>
  </p>

  <p>(7)<br/>
    <?php
    $num3 = 10;
    echo '10 となります: ' . $num3++ . '<br/>';
    echo '11 となります: ' . $num3 . '<br/>';
    ?>
  </p>

  <p>(8)<br/>
    <?php
    $num3 = 10;
    echo '10 となります: ' . $num3-- . '<br/>';
    echo '9 となります: ' . $num3 . '<br/>';
    ?>
  </p>

  <p>(9)<br/>
    <?php
    $num3 = 10;
    echo '11 となります:' . ++$num3 . ':' . $num3++ . '<br/>';
    echo '12 となります:' . $num3 . '<br/>';
    
    ?>
  </p>

  <p>(10)<br/>
    <?php
    $num4 = 3;
    $num5 = 2;
    echo $num4 + $num5;
    ?>
  </p>

  <p>(11)<br/>
    <?php
    $num6 = 1234;
    var_dump($num6);
    echo '<br/>';
    $num7 = (string)$num6;
    var_dump($num7);
    echo '<br/>';
    $num8 = strval($num6);
    var_dump($num8);
    ?>
  </p>
  
  <p>(12)<br/>
    <?php
    $locations = 3;
    $c = 2 + $locations;
    print($c);
    ?>
  </p>
</body>
</html>