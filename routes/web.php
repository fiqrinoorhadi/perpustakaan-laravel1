<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.main');
});

$petugass =[
    ['nama' => 'Agung Widodo', 'jabatan'=>'Pustakawan', 'tlp'=>'088098765'],
    ['nama' => 'Bagus Prasetyo', 'jabatan'=>'Pustakawan', 'tlp'=>'088098765'],
    ['nama' => 'Doni Salman', 'jabatan'=>'Pustakawan', 'tlp'=>'088098765'],
    ['nama' => 'Eren Jeager', 'jabatan'=>'Kepala perpustakaan', 'tlp'=>'088098765']
];
$anggotas =[
    ['nama' => 'Adam Malik', 'kelas'=>'XII RPL 1', 'jurusan'=>'Rekayasa Perangkat Lunak'],
    ['nama' => 'Alfian Muhammad', 'kelas'=>'XII RPL 1', 'jurusan'=>'Rekayasa Perangkat Lunak'],
    ['nama' => 'Agung Widodo', 'kelas'=>'XII RPL 1', 'jurusan'=>'Rekayasa Perangkat Lunak'],
    ['nama' => 'Agung Widodo', 'kelas'=>'XII RPL 1', 'jurusan'=>'Rekayasa Perangkat Lunak']
];
$buku =[
    ['judul' => 'Pemrograman Web', 'pengarang'=>'Budi Raharjo', 'Penerbit'=>'Informatika'],
    ['judul' => 'Pemrograman PHP OOP', 'pengarang'=>'Budi Raharjo', 'Penerbit'=>'Informatika'],
    ['judul' => 'Basis Data', 'pengarang'=>'Budi Raharjo', 'Penerbit'=>'Informatika'],
    ['judul' => 'Agung Widodo', 'pengarang'=>'Budi Raharjo', 'Penerbit'=>'Informatika']
];

Route::get('/petugas', function () {
    return view('petugas',[
        'title'      => 'Petugas',
        'petugass'   => 'asdasd'
    ]);
});

Route::get('/anggota', function () {
    return view('anggota',[
        'title'      => 'Anggota',
        'anggotas'   => 'asdasd'

    ]);
});

Route::get('/buku', function () {
    return view('buku',[
        'title'      => 'Buku',
        'bukus'   => 'asdasd'

    ]);
});

