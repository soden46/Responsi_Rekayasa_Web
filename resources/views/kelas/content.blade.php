@extends('mahasiswaindex')

@section('content')
<div class="row mt-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>Kelas</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-success" href="{{ route('kelas.create') }}"> Create New Kelas</a>
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
        <th>NAMA Kelas</th>
        <th>NAMA PRODI</th>
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
<div class="row text-center">
    {!! $kelas->links() !!}
</div>

@endsection