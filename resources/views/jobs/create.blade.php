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

        {!! Form::open(['action'=>'JobsController@store']) !!}
        <div class="row">
            <div class="col-md-6">
                <div class="box-header with-border">
                    <h3 class="box-title">Add a job</h3>
                </div>
                @include('jobs._formJob')
                <div class="form-group">
                    {!! Form::submit("Create",['class'=>'btn btn-block btn-primary']) !!}
                </div>
            </div>

        </div>

        {!! Form::close() !!}
    </div>
@endsection

@section("scripts")
    <script src="{{ asset ("/bower_components/admin-lte/plugins/daterangepicker/moment.min.js") }}"></script>
    <script src="{{ asset ("/bower_components/admin-lte/plugins/daterangepicker/daterangepicker.js") }}"
            type="text/javascript"></script>
    <script>$('#reservation').daterangepicker();</script>


@endsection

@section("style")
    <link href="{{ asset("/bower_components/admin-lte/plugins/daterangepicker/daterangepicker-bs3.css")}}" rel="stylesheet" type="text/css" />
@endsection