<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php_kadai4</title>
</head>
<body>
<p>(1)<br/>
    <?php
    $weekends = array(
                'monday' => '月曜日',
                'tuesday' => '火曜日',
                'wednesday' => '水曜日',
                'thursday' => '木曜日',
                'friday' => '金曜日',
              );
    foreach($weekends as $weekend) {
      echo $weekend . '<br/>';
    }
    ?>
  </p>

  <p>(2)<br/>
    <?php
    $animals = array(
                'dog' => '犬',
                'cat' => '猫',
                'rabbit' => 'うさぎ',
                'fox' => 'きつね',
                'bear' => '熊',
                'pig' => '豚',
              );
    foreach($animals as $key => $animal) {
      echo $key . '=>' . $animal . '<br/>';
    };
    ?>
  </p>

  <p>(3)<br/>
    <?php
    echo $weekends['monday'] . '<br/>';
    echo $weekends['wednesday'] . '<br/>';
    echo $animals['fox'] . '<br/>';
    echo $animals['pig'] . '<br/>';
    $keys = array_keys($weekends);
    echo $keys[1] . '<br/>';
    ?>
  </p>

  <p>(4)<br/>
    <?php
    echo count($weekends) . '<br/>';
    echo count($animals) . '<br/>';
    ?>
  </p>

  <p>(5)<br/>
    <?php
    $PersonalData = array(
      0 => array(
        'name' => '小宮',
        'age' => 25,
        'gender' => '男性',
      ),
      1 => array(
        'name' => '田中',
        'age' => 32,
        'gender' => '男性',
      ),
      2 => array(
        'name' => '鈴木',
        'age' => 18,
        'gender' => '女性',
      ),
      3 => array(
        'name' => '山田',
        'age' => 72,
        'gender' => '女性',
      ),
      4 => array(
        'name' => '佐藤',
        'age' => 49,
        'gender' => '男性',
      ),
    );
    foreach($PersonalData as $array) {
      echo '------------------------<br/>';
      foreach($array as $key => $value) {
        echo 'key: ' . $key . ' value: ' . $value . '<br/>';
      }
    };
    echo '<br/>';
    echo '名前は' . $PersonalData[0]['name'] . '、年齢は' . $PersonalData[0]['age'] . '、性別は' . $PersonalData[0]['gender'] . 'です。<br/>';
    ?>
  </p>
</body>
</html>