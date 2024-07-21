@extends('layouts.adminin')
@section('isinya')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Edit Data Mahasiswa
            </div>
            <div class="card-body">
               <form action="{{ url('mahasiswa/'.$mahasiswa->id, []) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="my-input">NIM Mahasiswa</label>
                        <input id="my-input" class="form-control" type="text" name="nim" value="{{ $mahasiswa ->nim ?? old('nim') }}">
                        <span class="text-danger">{{ $errors->first('nim') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Nama Mahasiswa</label>
                        <input id="my-input" class="form-control" type="text" name="nama" value="{{ $mahasiswa ->nama ?? old('nama') }}">
                        <span class="text-danger">{{ $errors->first('nama') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="my-select">Jurusan</label>
                        <select id="my-select" class="form-control" name="jurusan">
                        <option value="">Pilih Jurusan</option>
                            @foreach ( $list_js as $a )
                                <option value="{{ $a }}" @selected($a==$mahasiswa->jurusan)>{{ $a }}</option>
        
                            @endforeach
                        </select>               
                        <span class="text-danger">{{ $errors->first('jurusan') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="my-input">Nomor Hp</label>
                        <input id="my-input" class="form-control" type="text" name="nomor_hp" value="{{ $mahasiswa ->nomor_hp ?? old('nomor_hp') }}">
                        <span class="text-danger">{{ $errors->first('nomor_hp') }}</span>
                    </div>
               <form>
            </div>
            <div class="card-footer">
                <button type="sumbit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
        
    </div>
</div>
@endsection