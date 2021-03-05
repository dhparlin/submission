<?php

$angka = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15);
$no = 0;

echo "<table border=1>";
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 5; $j++) {
        echo "<td>";
        $angkabaru[$i][$j] = $angka[$no];
        $angkabaru1[$j][$i] = $angkabaru[$i][$j];
        echo $angkabaru[$i][$j];
        echo "</td>";
        $no++;
    }
}
echo "</table>";

echo "Nilai Maksimal berdasarakan kolom: <br>";
for ($i = 0; $i < 3; $i++) {
    $jumlah[$i] = array_sum($angkabaru1[$i]);
    echo $jumlah[$i] . ",";
}
