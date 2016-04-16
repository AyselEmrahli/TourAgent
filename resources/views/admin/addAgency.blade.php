@extends('layoutAdmin')

@section('page_header')
  Add new Agency
@stop
@section('content')
  {!! Form::open(['url'=>'admin/agencies'])!!}

    <div class="form-group col-md-8">
      {!! Form::label('name', 'Agency Name'); !!}
      {!! Form::text('agency_name', '', array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-4">
      {!! Form::label('logo', 'Logo'); !!}
      {!! Form::file('agency_logo', '', array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-12">
      {!! Form::label('address', 'Agency Address'); !!}
      {!! Form::text('agency_address', '', array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-6">
      {!! Form::label('email', 'Agency Email'); !!}
      {!! Form::text('agency_email', '', array('class'=>'form-control')) !!}
    </div>
   <div class="form-group col-md-6">
      {!! Form::label('website', 'Agency Website'); !!}
      {!! Form::text('agency_website', '', array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-6">
      {!! Form::label('phone1', 'Phone1'); !!}
      {!! Form::text('agency_phone1', '', array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-6">
      {!! Form::label('phone2', 'Phone2'); !!}
      {!! Form::text('agency_phone2', '', array('class'=>'form-control')) !!}
    </div>
     <div class="form-group col-md-6">
      {!! Form::label('mobile1', 'Mobile1'); !!}
      {!! Form::text('agency_mobile1', '', array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-6">
      {!! Form::label('mobile2', 'Mobile2'); !!}
      {!! Form::text('agency_mobile2', '', array('class'=>'form-control')) !!}
    </div>
     <div class="form-group col-md-6">
      {!! Form::label('password', 'Password'); !!}
      {!! Form::text('agency_pass', '', array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-6">
      {!! Form::label('repassword', 'Retype Password'); !!}
      {!! Form::text('agency_rePass', '', array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-2 pull-left">
    <div class="checkbox">
      <label>{!! Form::checkbox('agency_license', '1');!!}License</label>
    </div>
    </div>
    <div class="form-group col-md-1 pull-right">
      {!! Form::submit('Add!',array('class'=>'btn btn-block btn-primary')); !!}
    </div>
  {!! Form::close() !!}
@stop
