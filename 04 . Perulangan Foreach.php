<?php
$books = [
    "Panduan Belajar PHP untuk Pemula",
    "Membangun Aplikasi Web dengan PHP",
    "Tutorial PHP dan MySQL",
    "Membuat Chat Bot dengan PHP"
];

echo "<h5>Judul Buku PHP:</h5>";
echo "<ul>";
foreach($books as $buku){
    echo "<li>$buku</li>";
}
echo "</ul>";

$dongeng = [
    "maling kundang",
    "kancil dan kura-kura",
    "keong emas",
    "bawang merah dan bawang putih"
];

echo "<h5>Judul dongeng:</h5>";
echo "<ul>";
foreach($dongeng as $dongeng){
echo "<li>$dongeng</li>";

}
echo "</ul>";
print_r("<p><strong>by :alika naswa sabila");
?>
