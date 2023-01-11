@extends('prodi.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2> Show Prodi</h2>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('prodi.index') }}"> Kembali</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Prodi:</strong>
            {{ $prodi->prodi }}
        </div>
    </div>
</div>
@endsection