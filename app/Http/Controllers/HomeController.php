<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        echo "Halo pertemuan 8";
    }

    public function perkalian($angka1, $angka2)
    {
        echo "$angka1 x $angka2 = <br>";
        echo $angka1 * $angka2;
    }

    public function namaHewan($nama = "Manusia")
    {
        $animals = ["Buaya", "Kucing", 'Ayam', "Cicak"];
        return view('pertemuan-8', [
            "nama" => $nama,
            "animals" => $animals,
        ]);
    }

    public function home()
    {
        return view('home');
    }
}
