@extends('kelas.layout')

@section('content')
<div class="container">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('kelas.create') }}" class="btn btn-md btn-success mb-3">Tambah Prodi</a>
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Nama Kelas</th>
                                <th>Nama prodi</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($kelas as $kls)
                            <tr>
                                <td>{{ $kls->id }}</td>
                                <td>{{ $kls->kelas }}</td>
                                <td>{{ $kls->prodi }}</td>
                                <td>
                                    <form action="{{ route('kelas.destroy',$kls->id) }}" method="POST">

                                        <a class="btn btn-info" href="{{ route('kelas.show',$kls->id) }}">Show</a>

                                        <a class="btn btn-primary" href="{{ route('kelas.edit',$kls->id) }}">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        {{ $kelas->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection