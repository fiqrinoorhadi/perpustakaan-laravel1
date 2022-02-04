@extends('layouts.main')

@section('container')
<div class="container">
    <center><h2>Data Buku</h2></center>
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>--</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Pemrograman Web</td>
                    <td>Budi Raharjo</td>
                    <td>Informatika</td>
                    <td>2022</td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="col-2">
        </div>
    </div>
</div>
@endsection

