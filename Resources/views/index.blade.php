@extends('company::layouts.master')

@section('content')
    <h1>Companies <small> List of all connected companies</small></h1>
    <hr>

    <a class='btn btn-success' href="{{ route('company.new') }}"> Create a new Company </a><br>
    <br>

    <div class='panel panel-default'>
    <div class='panel-heading'> Companies <small>({{ count($companies) }})</small></div>
    <div class='panel-body'>
      <table class='table table-condensed table-hover'>
      <thead>
      <tr>
          <th>Company Name </th>
          <th width=100px class='text-right'>Options</th>
      </tr>
      </thead>
      <tbody>
      @if(count($companies) == 0)
        <tr><td colspan=2 class='text-center info'> <br>You don't have any companies yet. <br><br></td></tr>
      @endif

      @foreach( $companies as $company)
      <tr>
          <td> {{ $company->name }} <small>({{ $company->id }})</small></td>
          <td>
              <div class='pull-right'>
                <a href="{{ route('company.delete', ['id' => $company->id]) }}" class='btn btn-danger btn-xs'> <span class='glyphicon glyphicon-trash'></span> </a>
              </div>
              <div class='pull-right' style='padding-right:10px;'>
                  <a href="{{ route('company.edit', ['id' => $company->id]) }}" class='btn btn-info btn-xs'> <span class='glyphicon glyphicon-pencil'></span> </a>
              </div>
          </td>
      </tr>
      @endforeach
      </tbody>
      </table>

    </div>
    </div>

@stop
