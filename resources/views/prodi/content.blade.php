@extends('mahasiswaindex')

@section('content')
<div class="row mt-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>Prodi</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-success" href="{{ route('prodi.create') }}"> Create New Prodi</a>
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
        <th>NAMA PRODI</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($prodi as $prod)
    <tr>
        <td>{{ $prod->id }}</td>
        <td>{{ $prod->prodi }}</td>
        <td>
            <form action="{{ route('prodi.destroy',$prod->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('mahasprodiiswa.show',$prod->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('prodi.edit',$prod->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div class="row text-center">
    {!! $prodi->links() !!}
</div>

@endsection