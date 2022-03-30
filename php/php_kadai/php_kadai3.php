<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php_kadai3</title>
</head>
<body>
<p>(1)<br/>
    <?php
    $a = rand(0,2);
    if($a === 0) {
      echo '変数aは0です！';
    } elseif($a === 1) {
      echo '変数aは1です！';
    } else {
      echo '変数aは2です！';
    };
    ?>
  </p>

  <p>(2)<br/>
    <?php
    $b = rand(0,1);
    $msg = $b === 0 ? 'こんにちは、初めまして' : 'さようなら、また会いましょう';
    echo $msg;
    ?>
  </p>

  <p>(3)<br/>
    <?php
    $c = rand(1,4);
    switch($c) {
      case 1:
        echo '変数cは1です。';
        break;
      case 2:
        echo '変数cは2です。';
        break;
      case 3:
        echo '変数cは3です。';
        break;
      case 4:
        echo '変数cは4です。';
        break;
    };
    ?>
  </p>

  <p>(4)<br/>
    <?php
    switch($c) {
      case 1:
        echo '変数cは1です。';
      case 2:
        echo '変数cは2です。';
      case 3:
        echo '変数cは3です。';
      case 4:
        echo '変数cは4です。';
    };
    ?>
  </p>

  <p>(5)<br/>
    <?php
    $d = rand(1,6);
    switch($d) {
      case 1:
        echo '変数cは1です。';
        break;
      case 2:
        echo '変数cは2です。';
        break;
      case 3:
        echo '変数cは3です。';
        break;
      case 4:
        echo '変数cは4です。';
        break;
      default:
      echo 'エラーです。正しい数値を入力してください';
    };
    ?>
  </p>

  <p>(6)<br/>
    <?php
    $c = rand(1,4);
    switch($c):
      case 1:
    ?>
        <p>変数cは1です。</p>
        <?php break; ?>
      <?php case 2: ?>
        <p>変数cは2です。</p>
        <?php break; ?>
      <?php case 3: ?>
        <p>変数cは3です。</p>
        <?php break; ?>
      <?php case 4: ?>
        <p>変数cは4です。</p>
        <?php break; ?>
    <?php endswitch ?>
  </p>

  <p>(7)<br/>
    <?php
    $e = 1;
    while($e<11) {
      echo $e;
      echo '<br/>';
      $e++;
    };
    ?>
  </p>

  <p>(8)<br/>
    <?php
      $f = 1;
      do {
        echo $f;
        echo '<br/>';
        $f++;
      }while($f<11);
    ?>
  </p>

  <p>(9)<br/>
      <?php
        for ($counter = -3; $counter < 10; $counter++) {
          if($counter === 0) {
            break;
          }
          echo 100 / $counter;
          echo '<br/>';
        };
      ?>
  </p>

  <p>(10)<br/>
  <?php
        for ($counter = -3; $counter < 10; $counter++) {
          if($counter === 0) {
            continue;
          }
          echo 100 / $counter;
          echo '<br/>';
        };
      ?>
  </p>
</body>
</html>