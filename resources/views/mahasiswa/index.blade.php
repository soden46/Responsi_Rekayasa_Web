@extends('mahasiswa.layout')

@section('content')
<div class="container">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('mahasiswa.create') }}" class="btn btn-md btn-success mb-3">Tambah Mahasiswa</a>
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>NAMA</th>
                                <th>Nama Prodi</th>
                                <th>Nama Kelas</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($mahasiswa as $mahasis)
                            <tr>
                                <td>{{ $mahasis->id }}</td>
                                <td>{{ $mahasis->nim }}</td>
                                <td>{{ $mahasis->nama }}</td>
                                <td>{{ $mahasis->prodi_nama }}</td>
                                <td>{{ $mahasis->kelas_nama }}</td>
                                <td>
                                    <form action="{{ route('mahasiswa.destroy',$mahasis->id) }}" method="POST">

                                        <a class="btn btn-info" href="{{ route('mahasiswa.show',$mahasis->id) }}">Show</a>

                                        <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$mahasis->id) }}">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        {{ $mahasiswa->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection