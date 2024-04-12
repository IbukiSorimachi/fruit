<?php

// 桃の価格をrand関数で生成し、配列に格納する
$peach_prices=[];
for ($i = 0; $i < 15; $i++) {
    $peach_prices[] = rand(200, 300); // 200円から300円の間の乱数を生成    
}

// イチゴの価格をrand関数で生成し、配列に格納する
$strawberry_prices=[];
for ($i = 0; $i < 15; $i++) {
    $strawberry_prices[] = rand(400, 500); // 400円から500円の間の乱数を生成
}

// 桃の最高値、最安値、平均価格を計算
$max_peach_price = max($peach_prices);
$min_peach_price = min($peach_prices);
$avg_peach_price = round(array_sum($peach_prices) / count($peach_prices),1);

// イチゴの最高値、最安値、平均価格を計算
$max_strawberry_price = max($strawberry_prices);
$min_strawberry_price = min($strawberry_prices);
$avg_strawberry_price = round(array_sum($strawberry_prices) / count($strawberry_prices),1);

// それぞれの最高値、最安値、平均価格を出力
echo "桃の最高値: " . $max_peach_price . "円";
echo "<br>";
echo "イチゴの最高値: " . $max_strawberry_price . "円";
echo "<br>";
echo "桃の最安値: " . $min_peach_price . "円";
echo "<br>";
echo "イチゴの最安値: " . $min_strawberry_price . "円";
echo "<br>";
echo "桃の平均価格: " . $avg_peach_price . "円";
echo "<br>";
echo "イチゴの平均価格: " . $avg_strawberry_price . "円";
?>
