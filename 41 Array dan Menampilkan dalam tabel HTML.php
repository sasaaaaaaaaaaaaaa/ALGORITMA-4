<?php
$merk    = array("Oppo", "Samsung", "Vivo", "Xiaomi", "Nokia", "Realme", "Sonny");
$harga   = array("29000000", "32000000", "19000000", "22000000", "17000000", "31000000", "29000000");

$totalArray = count($harga);

echo "<table border='1'>";
echo "<tr>";
echo "<th>Merk handphone</th>";
echo "<th>Harga handphone</th>";
echo "</tr>";

for ($i = 0; $i < $totalArray; $i++) {
    echo "<tr>";
    echo "<td>$merk[$i]</td>";
    echo "<td>$harga[$i]</td>";
    echo "</tr>";
}
echo "</table>";
echo "<br>";
print_r("<p><strong>by :alika naswa sabilaa");

