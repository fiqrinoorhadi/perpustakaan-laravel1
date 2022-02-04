@extends('layouts.main')

@section('container')
<div class="container">
    <center><h2>Data Anggota</h2></center>
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>--</th>
                </tr>
                @foreach ($anggotas as $anggota)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $anggota['nama'] }}</td>
                    <td>{{ $anggota['kelas'] }}</td>
                    <td>{{ $anggota['jurusan'] }}</td>
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

