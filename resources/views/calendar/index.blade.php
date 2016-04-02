@extends('admin_template')

@section('content')
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-9">
            <div class="box box-primary">
                <div class="box-body no-padding">
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section("scripts")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="{{ asset ("/bower_components/admin-lte/plugins/fullcalendar/fullcalendar.min.js") }}"></script>


    <script>

        $.get("events", function (data) {

            var eventsArray = [];
            var formattedEventData = [];
            for (i = 0; i < data.length; i++) {
                console.log(data[i]);
                var newEvent = [];

                newEvent[0] = "meeting with " + data[i].meeting_with + " on " + data[i].meeting_date;
                startdate = new Date(data[i].meeting_date);
//                startdate.setFullYear(2016, 3, 07, 15, 01, 00);
                newEvent[1] = startdate; //got date string here exactly similar to the calendar's
                newEvent[2] = "calendar/" + data[i].id + "/edit";
                eventsArray.push(newEvent);

            }

            for (var k = 0; k < eventsArray.length; k++) {
                formattedEventData.push({
                    title: eventsArray[k][0],
                    start: eventsArray[k][1],
//                end: eventsArray[k][2],
                    url: eventsArray[k][2]
                });
            }

            $('#calendar').fullCalendar({
                dayClick: function (date, allDay, jsEvent, view) {

                    console.log(date.format('Y-MM-D'));
                    window.location = "calendar/create?ddt=" + date.format('Y-MM-DD');

                },
                events: formattedEventData,
                color: 'yellow',
                textColor: 'black'
            });


        });


        //        ee = new Date();
        //        ee.setFullYear(2016,3,05);
        //        newEvent[2] = ee; //got date string here exactly similar to the calendar's
        //




    </script>


@endsection

@section("style")
    <link href="{{ asset("/bower_components/admin-lte/plugins/fullcalendar/fullcalendar.min.css")}}" rel="stylesheet"
          type="text/css"/>
@endsection