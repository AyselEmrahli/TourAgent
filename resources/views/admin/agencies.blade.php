@extends('layoutAdmin')

@section('page_header')
  All Tour Agencies <a href="/admin/addagency" class="pull-right btn btn-primary"><i class="fa fa-plus"></i> Add new agency</a>
@stop
@section('content')
@section('content')
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Website</th>
        <th>Phone1</th>
        <th>Mobile1</th>

      </tr>
    </thead>
    <tbody>

    @foreach( $allAgencies as $agency )
      <tr>
        <td>{{$agency->id}}</td>
        <td>{{$agency->name}}</td>
        <td>{{$agency->address}}</td>
        <td>{{$agency->email}}</td>
        <td>{{$agency->website}}</td>
        <td>{{$agency->phone1}}</td>
        <td>{{$agency->mobile1}}</td>
        <td>
          <a href="agencies/{{$agency->id}}" title="Get information about this agency" class="btn btn-sm btn-info"><i class="fa fa-info"></i></a>
          <a href="agencies/delete/{{$agency->id}}" title="Delete this agency" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
          <a href="agencies/edit/{{$agency->id}}" title="Edit this agency" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a>
        </td>
      </tr>
     @endforeach
    </tbody>
  </table>
@stop
