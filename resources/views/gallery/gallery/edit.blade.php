@extends('layouts.master')

@section('content')

    <h1>Edit Gallery</h1>
    <hr/>

    {!! Form::model($gallery, [
        'method' => 'PATCH',
        'url' => ['gallery', $gallery->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                {!! Form::label('title', 'Title: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
                {!! Form::label('foto', 'Foto: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('foto', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('deskripsi') ? 'has-error' : ''}}">
                {!! Form::label('deskripsi', 'Deskripsi: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('deskripsi', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection