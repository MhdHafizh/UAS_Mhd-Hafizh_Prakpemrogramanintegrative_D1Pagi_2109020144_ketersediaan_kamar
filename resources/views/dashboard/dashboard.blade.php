@extends('layout.layout')
@section('container')

<p></p>
    <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">Jumlah Data</div>
        <div class="card-body">
            <h3 class="card-text">{{ $total_data }}</h3>
            <a href="{{ route('crud.data') }}" class="btn btn-primary">Detail</a>
        </div>
    </div>
@endsection
