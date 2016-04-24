@extends('layoutAdmin')

@section('page_header')
  Add new Agency
@stop
@section('content')
  {!! Form::open(['url'=>'admin/agencies','files' => true])!!}

    <div class="form-group col-md-8">
      {!! Form::label('agency_name', 'Agency Name'); !!}
      {!! Form::text('agency_name', '', array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-4">
      {!! Form::label('agency_logo', 'Logo'); !!}
      {!! Form::file('agency_logo', '', array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-12">
      {!! Form::label('agency_address', 'Agency Address'); !!}
      {!! Form::text('agency_address', '', array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-6">
      {!! Form::label('agency_email', 'Agency Email'); !!}
      {!! Form::text('agency_email', '', array('class'=>'form-control')) !!}
    </div>
   <div class="form-group col-md-6">
      {!! Form::label('agency_website', 'Agency Website'); !!}
      {!! Form::text('agency_website', '', array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-6">
      {!! Form::label('agency_phone1', 'Phone1'); !!}
      {!! Form::text('agency_phone1', '', array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-6">
      {!! Form::label('agency_phone2', 'Phone2'); !!}
      {!! Form::text('agency_phone2', '', array('class'=>'form-control')) !!}
    </div>
     <div class="form-group col-md-6">
      {!! Form::label('agency_mobile1', 'Mobile1'); !!}
      {!! Form::text('agency_mobile1', '', array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-6">
      {!! Form::label('agency_mobile2', 'Mobile2'); !!}
      {!! Form::text('agency_mobile2', '', array('class'=>'form-control')) !!}
    </div>
     <div class="form-group col-md-6">
      {!! Form::label('agency_pass', 'Password'); !!}
      {!! Form::password('agency_pass', '', array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-6">
      {!! Form::label('agency_rePass', 'Retype Password') !!}
      {!! Form::password('agency_rePass', '', array('class'=>'form-control')) !!}
    </div>
    
    <div class="form-group col-md-1 pull-right">
      {!! Form::submit('Add!',array('class'=>'btn btn-block btn-primary')); !!}
    </div>
  {!! Form::close() !!}
@stop
