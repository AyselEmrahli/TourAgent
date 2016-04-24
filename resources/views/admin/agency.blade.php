@extends('layoutAdmin')

@section('page_header')
  {{$agenc->name}}<a href="/admin/agencies" class="pull-right btn btn-primary"><i class="fa fa-chevron-left"></i> Geri</a>
@stop
@section('content')
  <div id="singletour-wrap">
    <div id="content-wrap">
      <div class="col-md-7">

        <div class="row">
          <div class="panel panel-default">
            <div class="panel-body">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <td><b>Address</b></td>
                    <td>{{$agenc->address}}</td>
                  </tr>
                  <tr>
                    <td><b>Email</b></td>
                    <td>{{$agenc->email}}</td>
                  </tr>
                  <tr>
                    <td><b>Website</b></td>
                    <td>{{$agenc->website}}</td>
                  </tr>
                  <tr>
                    <td><b>Phone 1</b></td>
                    <td>{{$agenc->phone1}}</td>
                  </tr>
                  <tr>
                    <td><b>Phone 2</b></td>
                    <td>{{$agenc->phone2}}</td>
                  </tr>
                  <tr>
                    <td><b>Mobile 1</b></td>
                    <td>{{$agenc->mobile1}}</td>
                  </tr>
                  <tr>
                    <td><b>Mobile 2</b></td>
                    <td>{{$agenc->mobile2}}</td>
                  </tr>
                   <tr>
                    <td><b>Logo</b></td>
                    <td> <img src="{{$agenc->img}}" class="img img-responsive img-thumbnail" alt="" /></td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>
        </div>
        <div class="tour-note">
          <div class="page-header">
            <h1>Qeydlər</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

@stop