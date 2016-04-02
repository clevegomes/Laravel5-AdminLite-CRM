@extends('admin_template')

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Companies {{ $levels[$level] }}</h3>

            <div class="box-tools pull-right">
                <a class="btn btn-sm btn-flat btn-warning pull-left" href="{{ url('companies/create') }}">Add Company</a>
                <a class="btn btn-sm btn-info btn-flat pull-left" href="{{ url('companies') }}">List Registered</a>
                <a class="btn btn-sm btn-info btn-flat pull-left" href="{{ url('companies?level=apr') }}">List Approached</a>
                <a class="btn btn-sm btn-info btn-flat pull-left" href="{{ url('companies?level=pros') }}">List Prospects</a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                @foreach($companies as $company)

                    <div class="col-md-4">
                        <!-- Widget: user widget style 1 -->
                        <div class="box box-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header bg-aqua-active">

                                <h3 class="widget-user-username">
                                    <a style="color: floralwhite" href="{{ url('companies/'.$company->id.'/edit') }}">
                                        {{$company->company_name}}
                                    </a>
                                </h3>


                                <h5 class="widget-user-desc"><i class="fa fa-user"></i> {{ $company->contact_person}}
                                </h5>
                            </div>
                            <div class="widget-user-image">
                                <img alt="User Avatar"
                                     src="{{ asset("/bower_components/admin-lte/dist/img/logo128x128/".$company->logoimg) }}"
                                     class="img-circle">
                            </div>
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-6 border-right">
                                        <div class="description-block">
                                    <span class="description-text"><i
                                                class="fa fa-map-marker"></i> {{$company->country}}</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-6 border-right">
                                        <div class="description-block">
                                    <span class="description-text"><i
                                                class="fa fa-phone"></i> {{$company->phone}}</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-6">
                                        <div class="description-block">

                                <span class="description-text">
                                    <i class="fa  fa-pie-chart"></i>
                                    {{$company->sector}}</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->


                                    <div class="col-sm-6">
                                        <div class="description-block">

                                <span class="description-text">
                                    <i class="fa  fa-envelope"></i>
                                    {{$company->email}}</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->


                            </div>
                        </div>
                        <!-- /.widget-user -->
                    </div>

                @endforeach
            </div>
        </div>
    </div>



@endsection