@extends('layout.layout')

@section('container')

    <div class="card">
        <div class="card-header">
            <h2>Edit Data</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('crud.update', $crud->id) }}">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Pasien</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm" id="namapasien" name="namapasien" value="{{ $crud->nama }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm" id="pekerjaan" name="pekerjaan" value="{{ $crud->pekerjaan }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm" id="alamat" name="alamat" value="{{ $crud->alamat }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm" id="agama" name="agama" value="{{ $crud->agama }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-4">
                        <input type="email" class="form-control form-control-sm" id="email" name="email" value="{{ $crud->email }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="no_handphone" class="col-sm-2 col-form-label">No Handphone</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm" id="no_handphone" name="no_handphone" value="{{ $crud->no_handphone }}">
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="" class="col sm-4 col-form-label"></label>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
