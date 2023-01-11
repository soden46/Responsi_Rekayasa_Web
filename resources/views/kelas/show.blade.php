@extends('kelas.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2> Show kelas</h2>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('kelas.index') }}"> Kembali</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama kelas:</strong>
            {{ $kelas->kelas }}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Prodi:</strong>
                {{ $kelas->prodi }}
            </div>
        </div>
    </div>
    @endsection