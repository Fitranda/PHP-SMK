<?php 

    // Array dimensi

    // $nama = array("joni","tejo","budi","siti",100,2.5);

    // var_dump($nama);

    // echo "<br>";

    // echo $nama[5];

    // echo "<br>";

    // for ($i=0; $i < 6 ; $i++) { 
    //    echo $nama[$i].',';
    // }

    // foreach ($nama as $key ) {
    //     echo $key.',';
    // }

    // array assosiatif

    // $nama = array(
    //     'joni' => "Surabaya",
    //     'budi' => 'Malang Raya',
    //     'tejo' => 'Jakarta',
    //     'siti' => 'Sidoarjo'
    // );

    $nama['joni'] = "Surabaya";
    $nama['budi'] = "Malang Raya";
    $nama['tejo'] = "Jakarta";
    $nama['siti'] = "Sidoarjo";

    var_dump($nama);

    echo "<br>";

    echo $nama['budi'];

    echo "<br>";

    foreach ($nama as $key => $value) {
        echo $key.' => '.$value;
        echo "<br>";
    }

?>