@extends('layout.layout')

@section('container')
    <div class="card">
        <div class="card-header">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th scope="col"> Nama Pasien </th>
                        <th scope="col"> Pekerjaan </th>
                        <th scope="col"> Alamat </th>
                        <th scope="col"> Agama</th>
                        <th scope="col"> Email </th>
                        <th scope="col"> No Handphone</th>
                        <th scope="col"> Edit/Delete</th>
                    </tr>
                </thead>
                <thbody>
                    @foreach ($crud as $row )
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->namapasien }}</td>
                        <td>{{ $row->pekerjaan }}</td>
                        <td>{{ $row->alamat }}</td>
                        <td>{{ $row->agama }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->no_handphone }}</td>
                        <td>
                            <a href="{{ route('crud.edit', $row->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form method="POST" action="{{ route('crud.destroy', $row->id) }}" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </thbody>
            </table>
        </div>
    </div>
@endsection
