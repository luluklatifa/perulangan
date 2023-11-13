<?php 
for ($i = 0; $i < 10; $i++){
    // blok kode yang akan diulang disini
    echo "<h2>Ini perulangan ke-$i</h2> <br>";
}

while($ulangi < 10){
    echo "<p>Ini adalah perulangan ke-$ulangi</p> <br>";
    $ulangi++;
} 

$ul4ngi = 10;
do {
    echo "<p>ini adalah perulangan ke-$ulangi</p> <br>";
    $ul4ngi--;
} while ($ul4ngi > 0);

$books = [
    "Panduan Belajar PHP untuk pemula",
    "Membangun Aplikasi Web dengan PHP",
    "Tutorial PHP dan MySQL",
    "Membuat Chat Bot dengan PHP"
];
echo "<h5>Judul Buku PHP:</h5>";
echo "<ul>";
foreach($books as $buku){
    echo "<li>$buku</li>";
}
echo "</ul> <br>"; 

for($l = 0; $l < 5; $l++){
    for($j = 0; $j < 10; $j++){
        echo "Ini perulangan ke ($i, $j) <br>";
    }
}

$k = 0;
while($k < 10){
    for($m = 0; $m <10; $m++){
        echo "Ini perulangan ke ($i, $j)<br>";
    }
    $k++;
}
?> 