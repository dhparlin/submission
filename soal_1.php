<?php
$x1 = [1, 2, 3, 4, 5, 6, 8, 9, 10];
$x2 = range(1, 10);
$missing = array_diff($x2, $x1);
echo "Y : " . implode(',', $missing);
