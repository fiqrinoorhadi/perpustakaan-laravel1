<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIP TB | {{ $title }}</title>
    <!-- fil css ini harus dihubungkan menggunakan tag link -->
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        table{
            max-width: 100%;
            font-size : 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <br>
                <h1><center>Perpustakaan SMK Taruna Bangsa</center></h1>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @include('layouts.nav')
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @yield('container')
            </div>
        </div>
        <div class="row">
            <div class="col">
                <center>@ FIQRI NOOR HADI 2021</center>
            </div>
        </div>
    </div>
<script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
