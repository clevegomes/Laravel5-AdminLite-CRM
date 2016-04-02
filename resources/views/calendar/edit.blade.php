@extends('admin_template')

@section('message')
    @if($errors->any())
        <ul class="alert alert-danger alert-dismissable">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

@endsection
@section('content')
    <div class="box box-primary">

        {!! Form::model($calendar,['method'=>'PATCH','action'=>['CalendarController@update',$calendar->id]])  !!}
        <div class="row">
            <div class="col-md-6">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit a reminder</h3>
                </div>
                @include('calendar._formCalendar')
                <div class="form-group">
                    {!! Form::submit("Update",['class'=>'btn btn-block btn-primary']) !!}
                </div>
            </div>

        </div>

        {!! Form::close() !!}
    </div>
@endsection

@section("scripts")
    <script src="{{ asset ("/bower_components/admin-lte/plugins/datepicker/bootstrap-datepicker.js") }}"
            type="text/javascript"></script>
    <script>$('#datepicker').datepicker();</script>


@endsection

@section("style")
    <link href="{{ asset("/bower_components/admin-lte/plugins/datepicker/datepicker3.css")}}" rel="stylesheet" type="text/css" />
@endsection