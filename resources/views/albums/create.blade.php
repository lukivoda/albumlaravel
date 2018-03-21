@extends('layouts.app')

@section('content')
    <h1>Create album</h1>

    {!! Form::open(['route' => 'albums.store','files' => true]) !!}
    {{--empty string is value--}}
    {{ Form::bsText('name','',array_merge(['placeholder' => 'Album name']) ) }}
    {{ Form::bsTextarea('description','',array_merge(['placeholder' => 'Album Description']) ) }}
    {{Form::bsFile('cover_image')}}
    {{ Form::bsSubmit('Submit') }}

    {!! Form::close() !!}


    @endsection