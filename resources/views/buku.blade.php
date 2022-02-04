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
                    <th>--</th>
                </tr>
                @foreach ($bukus as $buku)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $buku['judul'] }}</td>
                    <td>{{ $buku['pengarang'] }}</td>
                    <td>{{ $buku['penerbit'] }}</td>
                    <td></td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="col-2">
        </div>
    </div>
</div>
@endsection

