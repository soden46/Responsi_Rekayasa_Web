@extends('mahasiswaindex')

@section('content')
<div class="row mt-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>Mahasiswa</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Create New student</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>NAMA</th>
        <th>ID Prodi</th>
        <th>ID Kelas</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($mahasiswa as $mahasis)
    <tr>
        <td>{{ $mahasis->no }}</td>
        <td>{{ $mahasis->nim }}</td>
        <td>{{ $mahasis->nama }}</td>
        <td>{{ $mahasis->prodi_id }}</td>
        <td>{{ $mahasis->kelas_id }}</td>
        <td>
            <form action="{{ route('mahasiswa.destroy',$mahasiswa->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('mahasiswa.show',$mahasiswa->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$mahasiswa->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div class="row text-center">
    {!! $mahasiswa->links() !!}
</div>

@endsection