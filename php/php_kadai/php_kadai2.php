<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP_kadai2</title>
</head>
<body>
  <p>(1)<br/>
  <?php
  $sum1 = 2+4-5;
  echo $sum1 . '<br/>';
  $sum2 = 4-5+2;
  echo $sum2 . '<br/>';
  $sum3 = 4*5/2;
  echo $sum3 . '<br/>';
  $sum4 = 5/2*4;
  echo $sum4 . '<br/>';
  ?>
</p>

<p>(2)<br/>
  <?php
  $sum5 = 2*3+4+1;
  echo $sum5 . '<br/>';
  $sum6 = 2*(3+4+1);
  echo $sum6 . '<br/>';
  ?>
</p>

<p>(3)<br/>
  <?php
  echo '①trueが実行される条件は変数$usernameにAdminと定義している場合<br/>
        $username = "Admin"; で下記の条件式がtrueとなる<br/>
        if ($username == "Admin") {<br/>
          echo ("Welcome to the admin page.");<br/>
        } else {<br/>
          echo ("Welcome to the user page.");<br/>
        }<br/>';
  echo '②falseが実行されるには変数$usernameに別の値（文字列）を代入する<br/>
        $username = "小宮智生" とした状態で上記if文を実行するとfalseとなる。';
  ?>
</p>

<p>(4)<br/>
  <?php
  $animals = ['dog', 'cat', 'rabbit', 'fox', 'bear', 'pig',];
  foreach($animals as $animal) {
    echo $animal . '<br/>';
  }
  ?>
</p>

<p>(5)<br/>
  <?php
  sort($animals);
  foreach($animals as $animal) {
    echo $animal . '<br/>';
  }
  ?>
</p>

<p>(6)<br/>
  <?php
  $users =[
            ['小宮',25,'男性'],
            ['田中',32,'男性'],
            ['鈴木',16,'女性'],
          ];

  foreach($users as $user) {
      echo $user[0] . '(' . $user[1] . '歳' . $user[2] .')<br/>';
  }
  echo '<br/>';
  $count = count($users);
  $i = 0;
  while($i < $count) {
    echo $users[$i][0] . '(' . $users[$i][1] . '歳' . $users[$i][2] .')<br/>';
    ++$i;
  }
  ?>
</p>
</body>
</html>