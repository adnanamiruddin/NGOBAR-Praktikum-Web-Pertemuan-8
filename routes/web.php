<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Live Coding 1: Route get
// Route::get('/pertemuan-8', function () {
//     echo "Halo pertemuan 8";
// });

// Live Coding 2: Binding parameter
// Route::get('/pertemuan-8/{nama}', function ($nama) {
//     echo "Halo $nama";
// });

// Live Coding 3: Default parameter
// Route::get('/pertemuan-8/{nama?}', function ($nama = "Manusia") {
//     echo "Halo $nama";
// });

// Live Coding 4: Return view using blade.php
// Route::get('/pertemuan-8', function () {
//     return view('pertemuan-8');
// });

// Live Coding 5: Parsing data to view
// Route::get('/pertemuan-8/{nama?}', function ($nama = "Manusia") {
//     // return view('pertemuan-8')->with('nama', $nama);
//     return view('pertemuan-8', [
//         "nama" => $nama,
//     ]);
// });

// Live Coding 6: Parsing array to view
// Route::get('/pertemuan-8/{nama?}', function ($nama = "Manusia") {
//     $animals = ["Buaya", "Kucing", 'Ayam', "Cicak"];
//     return view('pertemuan-8', [
//         "nama" => $nama,
//         "animals" => $animals,
//     ]);
// });

// Live Coding 7: Using controller
Route::get('/pertemuan-8-controller', [HomeController::class, 'index']);

// Live Coding 8: Using controller with parameter
Route::get('/pertemuan-8-controller/kali/{angka1}&{angka2}', [HomeController::class, 'perkalian']);

// Live Coding 9: Using controller to parsing data to view
Route::get('/pertemuan-8-controller/data/{nama?}', [HomeController::class, 'namaHewan']);

// Live Coding 10: Blade component
Route::get('/home', [HomeController::class, 'home']);
