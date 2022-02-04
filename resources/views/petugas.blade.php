@extends('layouts.main')

@section('container')
<div class="container">
    <center><h2>Data Petugas</h2></center>
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>No.Tlp</th>
                    <th>--</th>
                </tr>
                {{-- @dd($petugass) --}}
                @foreach ($petugass as $petugas)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $petugas['nama'] }}</td>
                    <td>{{ $petugas['jabatan'] }}</td>
                    <td>{{ $petugas['tlp'] }}</td>
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

