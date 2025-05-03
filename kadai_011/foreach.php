<?php
// 連想配列の定義
$fruit = array(
    "名前" => "玉ねぎ",
    "値段" => 200,
    "産地" => "北海道"
);

// foreach文で連想配列を出力
foreach ($fruit as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
?>