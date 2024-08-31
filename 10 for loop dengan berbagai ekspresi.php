<?php
/* 
Contoh 1, bentuk lengkap, SERING DAN UMUM DIGUNAKAN
*/
for ($i = 0; $i <= 15; $i++) {
    echo $i;
}
echo "<hr>";
/*
Contoh 2, dengan ekspresi2 kosong, kode dihentikan dengan brak statement 
*/
for ($i = 0;; $i++) {
    if ($i > 15) {
        break;
    }
    echo $i;
}
echo "<hr>";
/* 
Contoh 3, semua ekspresi kosong
*/
$i = 0;
for (;;) {
    if ($i > 15) {
        break;
    }
    echo $i;
    $i++;
}
echo "<hr>";
/* 
Contoh 4, tanpa statement hanya ekspresi saja
 */
for ($i = 0; $i <= 15; print $i, $i++);
echo "<hr>";
print_r("<p><strong>by :alika naswa sabilaa");
