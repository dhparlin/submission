<?php
// $total = 0;
// for ($i = 1; $i <= 15; $i++) {
//     echo $i;
//     $total += $i;
//     if ($i % 2 == 0) {
//         echo '-' . $total . '-';
//         $total = 0;
//     }
// }
// $total = 0;
// $j = 1;
// for ($i = 1; $i <= 15; $i++) {

//     echo $i;
//     if ($j % 2) {
//         $total += $i;
//     }

//     if ($i % 3 == 0) {
//         echo '-' . $total . '-';
//         $total = 0;
//         $j = 0;
//     }
//     $j++;
// }
// for ($i = 1; $i < 10; $i++) {
//     echo $i;
//     if ($i % 3) echo '<br/>';
// }
$arrays = [[1, 2], [3, 4], [5, 6]];

foreach ($arrays as list($a, $b)) {
    $c = $a + $b;
    echo ($c . ', '); // 3, 7, 11, 
}

$x = [1, 5, 6, 1, 0, 1];
$y = [6];

foreach ($x as list($a, $b)) {
    $c = $a + $b;
    echo ($c . ',');
}
