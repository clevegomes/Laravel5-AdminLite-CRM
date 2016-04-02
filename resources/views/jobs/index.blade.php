@extends('admin_template')

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Jobs {{ $stat }}</h3>

            <div class="box-tools pull-right">
                <a class="btn btn-sm btn-flat btn-warning pull-left" href="{{ url('jobs/create') }}">Add Job</a>
                <a class="btn btn-sm btn-info btn-flat pull-left" href="{{ url('jobs') }}">List live jobs</a>
                <a class="btn btn-sm btn-info btn-flat pull-left" href="{{ url('jobs?stat=expired') }}">List expired jobs</a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                @foreach($jobs as $job)

                    <div class="col-md-4">
                    <div class="box box-warning direct-chat direct-chat-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title">  <i class="fa fa-list-alt"></i>
                                <a style="color:#0c0c0c " href="{{ url('jobs/'.$job->id.'/edit') }}"> {{$job->job_title}}</a></h3>
                            </div>
                        <div class=" box-body col-md-11" style="padding-left: 15px;">
                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                <i class="fa fa-university"></i> <b>Job Title: </b>
                                 <span class="pull-right ">   {{$job->company->company_name}}</span>
</li>
                                <li>

                                <i class="fa fa-map-marker"></i> <b>Country: </b>
                                    <span class="pull-right"> {{$job->country}}</span>
                                </li>

                            <li>
                                <i class="fa fa-pie-chart"></i> <b>Sector: </b> <span class="pull-right">{{$job->sector}}</span>
                          </li><li>
                                <i class="fa fa-pie-chart"></i> <b>URL on Bloovo: </b> <span class="pull-right">{{$job->url_on_bloovo}}</span>
                            </li><li>

                            <i class="fa fa-calendar"></i> <b>Open From: </b> <span class="pull-right">{{\Carbon\Carbon::parse($job->opening_date)->format("m/d/Y")}}</span>
                            </li><li>

                            <i class="fa fa-calendar"></i> <b>Till: </b> <span class="pull-right">{{\Carbon\Carbon::parse($job->closing_date)->format("m/d/Y")}}</span>
                            </li>
                            </ul>
                        </div>
                        <div class="box-footer"></div>
                        </div>



                        </div>




                @endforeach
            </div>
        </div>
    </div>



@endsection