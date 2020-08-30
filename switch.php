<?php 

    $hari =7;

    // switch ($hari) {
    //     case 1:
    //         echo "minggu";
    //         break;
    //     case 2:
    //         echo "senen";
    //         break;
    //     case 3:
    //         echo "selasa";
    //         break;
    //     case 4:
    //         echo "rabu";
    //         break;
    //     case 5:
    //         echo "kamis";
    //         break;
    //     case 6:
    //         echo "jum'at";
    //         break;
    //     case 7:
    //         echo "sabtu";
    //         break;
        
    //     default:
    //         echo "Hari belum dibuat";
    //         break;
    // }

    $pilihan = 'ubah';

    switch ($pilihan) {
        case 'tambah':
            echo "anda memilih tambah";
            break;
        case 'ubah':
            echo "anda memilih ubah";
            break;
        case 'hapus':
            echo "anda memilih hapus";
            break;
        
        default:
            echo "pilihan belum ada";
            break;
    }


?>