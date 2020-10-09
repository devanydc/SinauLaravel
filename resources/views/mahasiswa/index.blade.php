@extends('layouts.app')

@section('content') {{-- nama @yield sesuai dengan d app.blade.php --}}
<div class="row mt-5">
    <div class="col-lg">
        <h1>Data Mahasiswa</h1>
        <a href="{{ route('create_mahasiswa') }}" class="btn btn-primary my-3">
            Tambah Data Mahasiswa
        </a>

        <table class="table">
            @foreach($mahasiswa as $mhs)
            <tr>
                <td>{{ $mhs->name }}</td>
                <td>{{ $mhs->email }}</td>
                <td>{{ $mhs->dob }}</td>
                <td>{{ $mhs->address }}</td>
                <td>
                    <a href="/mahasiswa/edit/{{ $mhs->name }}">Edit</a>
                    |
                    <a href="/mahasiswa/hapus/{{ $mhs->name }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>


    </div>
</div>



@endsection