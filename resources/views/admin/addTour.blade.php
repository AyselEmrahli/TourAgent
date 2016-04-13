@extends('layoutAdmin')

@section('page_header')
  Add new Tour
@stop
@section('content')
  {!! Form::open() !!}

    <div class="form-group col-md-6">
      {!! Form::label('tour_title', 'Başlıq (Turun adı)'); !!}
      {!! Form::text('tour_title', '', array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-2">
      {!! Form::label('price', 'Qiyməti'); !!}
      {!! Form::text('tour_price', '', array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-4">
      {!! Form::label('tour_type', 'Turun tipini seçin'); !!}
      {!! Form::select('tour_type',array(null),null,array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-4">
      {!! Form::label('last_reg_date', 'Tura son qeydiyyat tarixi'); !!}
      {!! Form::date('last_reg_date', null, array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-4">
      {!! Form::label('start_date', 'Turun başlanğıc tarixi'); !!}
      {!! Form::date('start_date', null, array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-4">
      {!! Form::label('end_date', 'Turun son tarixi'); !!}
      {!! Form::date('end_date', null, array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-4">
      {!! Form::label('tour_country', 'Ölkəni seçin'); !!}
      {!! Form::select('tour_country',array('aze' => 'Azerbaijan', 'tr' => 'Turkey'),null,array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-4">
      {!! Form::label('tour_city', 'Regonu/Şəhəri seçin'); !!}
      {!! Form::select('tour_city',array('1' => 'Baku', '2' => 'Ganja'),null,array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-4">
      {!! Form::label('tour_hotel', 'Gecələmə/Otel'); !!}
      {!! Form::text('tour_hotel', '', array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-4">
      {!! Form::label('tour_transport', 'Transport/Nəqliyyat'); !!}
      {!! Form::text('tour_transport', '', array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-4">
      {!! Form::label('tour_weather', 'Tur zamanı hava haqqında(URL)'); !!}
      {!! Form::text('tour_weather', '', array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-4">
      {!! Form::label('tour_img', 'Şəkil seçin'); !!}
      {!! Form::file('tour_img', array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-6">
      {!! Form::label('tour_include', 'Tur paketinə daxildir');  !!}
      {!! Form::textarea('tour_include', '',array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-6">
      {!! Form::label('tour_note', 'Xüsusi qeydlər');  !!}
      {!! Form::textarea('tour_note', '',array('class'=>'form-control')) !!}
    </div>
    <div class="form-group col-md-2 pull-left">
    <div class="checkbox">
      <label>{!! Form::checkbox('tour_status', '1');!!}Tur yayımlansın</label>
    </div>
    </div>
    <div class="form-group col-md-1 pull-right">
      {!! Form::submit('Add!',array('class'=>'btn btn-block btn-primary')); !!}
    </div>
  {!! Form::close() !!}
@stop
