@extends('admin_template')

@section('content')
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-university"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">My Companies</span>
                    <span class="info-box-number">{{$report["total_comp"]}}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>


        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-exchange"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Approached Companies</span>
                    <span class="info-box-number">{{$report["apr_comp"]}}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>


        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-undo"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Prospect Companies</span>
                    <span class="info-box-number">{{$report["pros_comp"]}}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </div>


        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-star-half-empty"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Hit Rate %</span>
                    <span class="info-box-number">{{$report["hitrate"]}}%</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>

    </div>


    <div class="box box-warning">

        <div class="box-body">
            <div class="row">
                <div class="col-md-5 col-sm-6 col-xs-12 ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 ">


                            <div class="box box-danger direct-chat direct-chat-warning" style="margin-top: 20px;">
                                <div class="box-header with-border">
                                    <h3 class="box-title"><i class="fa fa-list-alt"></i> Targets</h3>
                                </div>
                                <div style="padding-left: 15px;" class=" box-body col-md-11">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li>
                                            <i class="fa fa-university"></i> <b>Req Companies for quarterly target: </b>
                                            <span class="pull-right ">  {{$report["pending_companies_quarter"]}}</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-university"></i> <b>Req Companies for monthly target: </b>
                                            <span class="pull-right "> {{$report["pending_companies_month"]}}</span>
                                        </li>
                                        <li>
                                            <i class="fa  fa-pencil-square "></i> <b>Req Jobs for quarterly target: </b>
                                            <span class="pull-right ">   {{$report["pending_jobs_quarter"]}}</span>
                                        </li>
                                        <li>

                                            <i class="fa fa-pencil-square "></i> <b>Req Jobs for monthly target: </b>
                                            <span class="pull-right"> {{$report["pending_jobs_month"]}}</span>
                                        </li>


                                    </ul>
                                </div>
                                <div class="box-footer"></div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12 ">
                            <h3 class="box-title"><i class="fa fa-list-alt"></i> Total Jobs: {{$report["total_jobs"]}}
                            </h3>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h3 class="box-title"><i class="fa fa-unlock"></i> Open Jobs: {{$report["open_jobs"]}}
                            </h3>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h3 class="box-title"><i class="fa fa-lock"></i> Closed Jobs: {{ $report["open_closed"]}}
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <canvas id="myPiChart" width="200" height="200"></canvas>
                </div>


            </div>
        </div>
        <!-- /.box-body -->
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12 ">

            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">My companies by country</h3>
                </div>
                <!-- /.box-header -->



                <div class="box-body">

                    @foreach($report["companies_by_country"] as $selcountry)
                        <p>{{$selcountry["country"]}} : </p>
                        <div class="progress">
                            <div style="width: {{$selcountry["total"]}}%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40"
                                 role="progressbar" class="progress-bar progress-bar-primary progress-bar-striped">
                                <span class="sr-only">{{$selcountry["total"]}}% Complete (success)</span>
                            </div>
                        </div>

                    @endforeach


                </div>
            </div>

        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 ">

            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">My companies by sector</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    @foreach($report["companies_by_sector"] as $selsector)
                        <p>{{$selsector["sector"]}} : </p>
                        <div class="progress">
                            <div style="width: {{$selsector["total"]}}%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40"
                                 role="progressbar" class="progress-bar progress-bar-primary progress-bar-striped">
                                <span class="sr-only">{{$selsector["total"]}}% Complete (success)</span>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>

        </div>
    </div>



    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Target vs Performance of Companies Posted</h3>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-8 ">
                    <div class="chart">
                        <canvas style="height: 225px; width: 501px;" id="barChart1" width="501" height="225"></canvas>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 ">


                    <div class="box-body">
                        <div style="width: 100%; margin-bottom: 10px;" class="btn-group">
                            <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                            <ul id="color-chooser" class="fc-color-picker">
                                <li> <i class="fa fa-square" style="color: #0073b7"></i></li>
                            </ul> Target Level:
                        </div>
                        <div style="width: 100%; margin-bottom: 10px;" class="btn-group">
                            <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                            <ul id="color-chooser" class="fc-color-picker">
                                <li> <i class="fa fa-square" style="color: #B1CCDA"></i></li>
                            </ul>Achieved Level:
                        </div>

                        <!-- /input-group -->
                    </div>
                </div>


            </div>
        </div>
    </div>



    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Target vs Performance of Jobs Posted</h3>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-8 ">
                    <div class="chart">
                        <canvas style="height: 225px; width: 501px;" id="barChart2" width="501" height="225"></canvas>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 ">


                    <div class="box-body">
                        <div style="width: 100%; margin-bottom: 10px;" class="btn-group">
                            <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                           <ul id="color-chooser" class="fc-color-picker">
                                <li> <i class="fa fa-square" style="color: #0073b7"></i></li>
                            </ul> Target Level:
                        </div>
                        <div style="width: 100%; margin-bottom: 10px;" class="btn-group">
                            <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                            <ul id="color-chooser" class="fc-color-picker">
                                <li> <i class="fa fa-square" style="color: #B1CCDA"></i></li>
                            </ul>Achieved Level:
                        </div>

                        <!-- /input-group -->
                    </div>
                </div>


            </div>
        </div>
    </div>



@endsection

@section("scripts")
    <script src="{{ asset ("/bower_components/admin-lte/plugins/chartjs/Chart.min.js") }}"
            type="text/javascript"></script>



    <script>

        var data = [
            {
                value: {{$report["open_closed"]}},
                color: "#F7464A",
                highlight: "#FF5A5E",
                label: "Closed Jobs"
            },
            {
                value: {{$report["open_jobs"]}},
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "Open Jobs"
            }
        ]


        var options = []

        // Get the context of the canvas element we want to select
        var ctx = document.getElementById("myPiChart").getContext("2d");

        //        For a pie chart
        var myPieChart = new Chart(ctx).Pie(data, options);

//--------------------------------------------------------------------------------------------------------
        var data = {
            labels: ["January", "February", "March", "April", "May", "June", "July","August","September","October","November","December"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "#0073b7",
                    strokeColor: "rgba(220,220,220,0.8)",
                    highlightFill: "rgba(220,220,220,0.75)",
                    highlightStroke: "rgba(220,220,220,1)",
                    data: {!! json_encode($report["companyMonths_target"]) !!}
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(151,187,205,0.5)",
                    strokeColor: "rgba(151,187,205,0.8)",
                    highlightFill: "rgba(151,187,205,0.75)",
                    highlightStroke: "rgba(151,187,205,1)",
                    data: {!! json_encode($report["companyMonths_achieved"]) !!}
                }
            ]
        };
        var options = []

        // Get the context of the canvas element we want to select

        var ctx = document.getElementById("barChart1").getContext("2d");
        var myBarChart = new Chart(ctx).Bar(data, options);

//-------------------------------------------------------------------------------------------------------------------

        var data = {
            labels: ["January", "February", "March", "April", "May", "June", "July","August","September","October","November","December"],

            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "#0073b7",
                    strokeColor: "rgba(220,220,220,0.8)",
                    highlightFill: "rgba(220,220,220,0.75)",
                    highlightStroke: "rgba(220,220,220,1)",
                    data: {!! json_encode($report["jobMonths_target"]) !!}
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(151,187,205,0.5)",
                    strokeColor: "rgba(151,187,205,0.8)",
                    highlightFill: "rgba(151,187,205,0.75)",
                    highlightStroke: "rgba(151,187,205,1)",
                    data: {!! json_encode($report["jobMonths_achieved"]) !!}
                }
            ]
        };
        var options = []

        // Get the context of the canvas element we want to select
        var ctx = document.getElementById("barChart2").getContext("2d");


        var myBarChart = new Chart(ctx).Bar(data, options);




    </script>


@endsection

@section("style")
    {{--<link href="{{ asset("/bower_components/admin-lte/plugins/daterangepicker/daterangepicker-bs3.css")}}" rel="stylesheet" type="text/css" />--}}
@endsection