@extends('mahasiswa.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2>Edit mahasiswa</h2>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('mahasiswa.index') }}"> Kembali</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('mahasiswa.update',$mahasiswa->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIM:</strong>
                <input type="text" name="nim" value="{{ $mahasiswa->nim }}" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control" placeholder="Name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Kelas:</strong>
                <input class="form-control" name="kelas_nama" value="{{ $mahasiswa->nama_kelas }}"></input>
            </div>
            <div class="form-group">
                <strong>Nama Prodi:</strong>
                <input class="form-control" name="prodi_nama" value="{{ $mahasiswa->nama_prodi }}"></input>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>

</form>
@endsection