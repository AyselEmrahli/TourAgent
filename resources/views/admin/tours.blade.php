@extends('layoutAdmin')

@section('page_header')
  Bütün turlar <a href="/admin/addtour" class="pull-right btn btn-primary"><i class="fa fa-plus"></i> Yeni tur əlavə et</a>
@stop
@section('content')
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Tour Type</th>
        <th>Agency</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Qoşqar zirvəsi turu</td>
        <td>Ekstrim tur</td>
        <td>Atlas Tours</td>
        <td>Status</td>
        <td>
          <a href="#" title="Get information about this tour" class="btn btn-sm btn-info"><i class="fa fa-info"></i></a>
          <a href="#" title="Delete this tour" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
          <a href="#" title="Edit this tour" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>Qoşqar zirvəsi turu</td>
        <td>Ekstrim tur</td>
        <td>Atlas Tours</td>
        <td>Status</td>
        <td>
          <a href="#" title="Get information about this tour" class="btn btn-sm btn-info"><i class="fa fa-info"></i></a>
          <a href="#" title="Delete this tour" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
          <a href="#" title="Edit this tour" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>Qoşqar zirvəsi turu</td>
        <td>Ekstrim tur</td>
        <td>Atlas Tours</td>
        <td>Status</td>
        <td>
          <a href="#" title="Get information about this tour" class="btn btn-sm btn-info"><i class="fa fa-info"></i></a>
          <a href="#" title="Delete this tour" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
          <a href="#" title="Edit this tour" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a>
        </td>
      </tr>
    </tbody>
  </table>
@stop
