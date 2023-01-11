@extends('mahasiswa.layout')

@section('content')
<div class="container">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('prodi.create') }}" class="btn btn-md btn-success mb-3">Tambah Prodi</a>
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Nama Prodi</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($prodi as $prod)
                            <tr>
                                <td>{{ $prod->id }}</td>
                                <td>{{ $prod->prodi }}</td>
                                <td>
                                    <form action="{{ route('prodi.destroy',$prod->id) }}" method="POST">

                                        <a class="btn btn-info" href="{{ route('prodi.show',$prod->id) }}">Show</a>

                                        <a class="btn btn-primary" href="{{ route('prodi.edit',$prod->id) }}">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        {{ $prodi->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection