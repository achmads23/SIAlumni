@extends('layouts.master')

@section('content')

    <h1>Gallery</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Title</th><th>Foto</th><th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $gallery->id }}</td> <td> {{ $gallery->title }} </td><td> {{ $gallery->foto }} </td><td> {{ $gallery->deskripsi }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection