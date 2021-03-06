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
        {!! Form::model($company,['method'=>'PATCH','action'=>['CompaniesController@update',$company->id]])  !!}
        <div class="row">
            <div class="col-md-6">
                <div class="box-header with-border">
                    <h3 class="box-title">Add a New Approached Company</h3>
                </div>
                @include('companies._formCompany')

            </div>
            <div class="col-md-6">
                <div class="box-header with-border">
                    <h3 class="box-title">Contact person details</h3>
                </div>
                @include('companies._formPerson')
                <div class="form-group">
                    {!! Form::submit("Update",['class'=>'btn btn-block btn-primary']) !!}
                </div>
            </div>
        </div>

        {!! Form::close() !!}
    </div>
@endsection

