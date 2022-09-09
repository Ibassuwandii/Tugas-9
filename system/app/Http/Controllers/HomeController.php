<?php

namespace App\http\Controllers;

class HomeController extends controller{


    function showBeranda(){
        return view('template-admin.beranda');
    }

    
    function showKategori()
    {
        return view('template-admin.kategori');
    }

    function test($produk, $hargaMin = 0, $hargaMax =0){
        if($produk == 'Anggur'){
            echo "Tampilkan Produk Anggur";
        }elseif($produk == 'Pisang'){
            echo "Produk Pisang";
        }
        echo "<br>";
        echo "Harga Min Adalah $hargaMin <br>";
        echo "Harga Max Adalah $hargaMax <br>";
    }
}