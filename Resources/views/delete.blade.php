@extends('company::layouts.master')

@section('content')
    <h1>Delete Company <small></small></h1>
    <hr>

    You are going to delete <b>{{ $company->name }}</b>!<br>
    Are you sure? <br>
    <br>
    <br>
    <form action="{{ route('company.delete.final', ['id' => $company->id]) }}" method='POST'>

      <button type='submit' class='btn btn-lg btn-success'> Yes, delete it! </button>
      <button type='button' class='btn btn-lg btn-danger'
              onclick='javascript:history.back()'> No, leave it! </button>

      {{ csrf_field() }}
      {{ method_field('delete') }}
    </form>

@stop
