@extends('layout.layout')

@section('container')

    <div class="card">
        <div class="card-header">
            <h2>Tambahkan Data</h2>
        </div>
        <div class="card-body">
            <form method="GET" action="{{ route('data') }}">
                @csrf
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Pasien</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm" id="namapasien" name="namapasien">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm" id="pekerjaan" name="pekerjaan">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm" id="alamat" name="alamat">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm" id="agama" name="agama ">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm" id="email" name="email">
                    </div>
                </div>  
                <div class="row mb-3">
                    <label for="no_handphone" class="col-sm-2 col-form-label">No Handphone</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm" id="no_handphone" name="no_handphone">
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="" class="col sm-4 col-form-label"></label>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
