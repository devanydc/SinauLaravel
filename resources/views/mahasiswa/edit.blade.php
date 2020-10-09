@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Mahasiswa</div>

                <div class="card-body">
                    @foreach($mahasiswa as $mhs)
                    <form method="POST" action="{{ route('store_mahasiswa') }}">
                        @csrf

                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="name" value="{{ $mhs->name }}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $mhs->email }}">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="dob" value="{{ $mhs->dob }">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="address" class="form-control" cols="30" rows="10">{{ $mhs->address }}</textarea>
                        </div>
                        <div class=" form-group">
                            <button type='submit'> Simpan </button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>