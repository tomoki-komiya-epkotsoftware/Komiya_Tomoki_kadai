<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php_kadai5</title>
  <?php include 'php_kadai5_function.php'; ?>
</head>
<body>
<p>関数課題1<br/>
    <?php
    echo '合計(4+9): ' . addition(4,9) . '<br/>';
    echo '合計(20-9): ' . subtraction(20,9) . '<br/>';
    echo '合計(8*5): ' . multiplication(8,5) . '<br/>';
    echo '合計(100/25): ' . division(100,25) . '<br/>';
    echo '合計(30%9): ' . remainder(30,9) . '<br/>';
    ?>
  </p>

  <p>関数課題2<br/>
    <?php
    $a = 4;
    $b = 9;
    echo '合計(4+9): ' . AdditionSub($a,$b) . '<br/>';
    echo '合計(変数aは13）: ' . SubtractionSub($a, $b) . '<br/>';
    echo '合計(変数aは4）: ' . MultiplicationSub($a, $b) . '<br/>';
    echo '合計(変数aは36）: ' . DivisionSub($a, $b) . '<br/>';
    echo '合計(変数aは4）: ' . RemainderSub($a, $b) . '<br/>';
    ?>
  </p>
</body>
</html>