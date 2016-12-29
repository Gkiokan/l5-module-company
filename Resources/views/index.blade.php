@extends('company::layouts.master')

@section('content')
    <h1>Companies <small> List of all connected companies</small></h1>

    <a class='btn btn-success' href="{{ route('company.new') }}"> Create a new Company </a>
    <p>
        This view is loaded from module: {!! config('company.name') !!}
    </p>
@stop
