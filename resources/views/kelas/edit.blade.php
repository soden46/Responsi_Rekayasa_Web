@extends('kelas.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2>Edit Kelas</h2>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('kelas.index') }}"> Kembali</a>
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

<form action="{{ route('kelas.update',$kelas->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Kelas:</strong>
                <input type="text" name="nama_kelas" value="{{ $kelas->kelas }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Prodi:</strong>
                <input type="text" name="nama_prodi" value="{{ $kelas->prodi }}" class="form-control" placeholder="Nama Prodi">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>

</form>
@endsection