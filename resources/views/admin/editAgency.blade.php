@extends('layoutAdmin')

@section('page_header')
    Edit: {{$upAgency->name}} <a href="/admin/agencies" class="pull-right btn btn-primary"><i class="fa fa-chevron-left"></i> Geri</a>
@stop
@section('content')

    {!! Form::open(['url' => 'admin/agencies/edit/'.$upAgency->id.'/update','files' => true])!!}

    <div class="form-group col-md-8">
        {!! Form::label('agency_name', 'Name'); !!}
        {!! Form::text('agency_name',  $upAgency->name , array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-4">
     <img src="{{$upAgency->img}}" class="img-responsive" />
        {!! Form::label('agency_logo', 'Logo'); !!}
        {!! Form::file('agency_logo', '', array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-12">
        {!! Form::label('agency_address', 'Address'); !!}
        {!! Form::text('agency_address', $upAgency->address, array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('agency_email', 'Email'); !!}
        {!! Form::text('agency_email', $upAgency->email, array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('agency_website', 'Website'); !!}
        {!! Form::text('agency_website', $upAgency->website, array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('agency_phone1', 'Phone1'); !!}
        {!! Form::text('agency_phone1', $upAgency->phone1, array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('agency_phone2', 'Phone2'); !!}
        {!! Form::text('agency_phone2', $upAgency->phone2, array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('agency_mobile1', 'Mobile1'); !!}
        {!! Form::text('agency_mobile1', $upAgency->mobile1, array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('agency_mobile2', 'Mobile2'); !!}
        {!! Form::text('agency_mobile2', $upAgency->mobile2, array('class'=>'form-control')) !!}
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
        {!! Form::submit('UPDATE!',array('class'=>'btn  btn-primary')) !!}
    </div>
    {!! Form::close() !!}
@stop
