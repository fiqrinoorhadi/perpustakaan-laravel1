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

Route::get('/petugas', function () {

    $data_petugass =[
        ['nama' => 'Agung Widodo', 'jabatan'=>'Pustakawan', 'tlp'=>'088098765'],
        ['nama' => 'Bagus Prasetyo', 'jabatan'=>'Pustakawan', 'tlp'=>'088098765'],
        ['nama' => 'Doni Salman', 'jabatan'=>'Pustakawan', 'tlp'=>'088098765'],
        ['nama' => 'Eren Jeager', 'jabatan'=>'Kepala perpustakaan', 'tlp'=>'088098765']
    ];

    return view('petugas',[
        'title'      => 'Petugas',
        'petugass'   => $data_petugass
    ]);
});

Route::get('/anggota', function () {

    $data_anggotas =[
        ['nama' => 'Adam Malik', 'kelas'=>'XII RPL 1', 'jurusan'=>'Rekayasa Perangkat Lunak'],
        ['nama' => 'Alfian Muhammad', 'kelas'=>'XII RPL 1', 'jurusan'=>'Rekayasa Perangkat Lunak'],
        ['nama' => 'Agung Widodo', 'kelas'=>'XII RPL 1', 'jurusan'=>'Rekayasa Perangkat Lunak'],
        ['nama' => 'Agung Widodo', 'kelas'=>'XII RPL 1', 'jurusan'=>'Rekayasa Perangkat Lunak']
    ];

    return view('anggota',[
        'title'      => 'Anggota',
        'anggotas'   => $data_anggotas

    ]);
});

Route::get('/buku', function () {

    $data_bukus =[
        ['judul' => 'Pemrograman Web', 'pengarang'=>'Budi Raharjo', 'penerbit'=>'Informatika'],
        ['judul' => 'Pemrograman PHP OOP', 'pengarang'=>'Budi Raharjo', 'penerbit'=>'Informatika'],
        ['judul' => 'Basis Data', 'pengarang'=>'Budi Raharjo', 'penerbit'=>'Informatika'],
        ['judul' => 'Agung Widodo', 'pengarang'=>'Budi Raharjo', 'penerbit'=>'Informatika']
    ];

    return view('buku',[
        'title'      => 'Buku',
        'bukus'   => $data_bukus

    ]);
});

