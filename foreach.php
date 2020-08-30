<?php 

// $nama = array("tejo","budi","siti",100);

// var_dump($nama);

// echo "<br>";

// foreach ($nama as $key) {
//     echo $key;
//     echo "<br>";
// }

$nama = array(
    "tejo" => "surabaya",
    'budi' => 'Malang Raya',
    'siti' => 'Sidoarjo'
);

var_dump($nama);
echo "<br>";

foreach ($nama as $key => $value) {
    echo $key.'-'.$value;
    echo "<br>";
}

?>