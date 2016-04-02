<div class="box-body">

    <div class='form-group'>
        {!! Form::label('company_id','Company:') !!}
        {!! Form::select('company_id',$companyList,$calendar->company_id,['class'=>'form-control']) !!}
    </div>

    <div class='form-group'>
        {!! Form::label('country','Country:') !!}
        {!! Form::select('country',$countriesList,$calendar->country,['class'=>'form-control']) !!}
    </div>

    <div class='form-group'>
        {!! Form::label('city','City:') !!}
        {!! Form::text('city',$calendar->city,['class'=>'form-control']) !!}
    </div>


    <div class='form-group'>
        {!! Form::label('meeting_with','Meeting with:') !!}
        {!! Form::text('meeting_with',$calendar->meeting_with,['class'=>'form-control']) !!}
    </div>

    <div class='form-group'>
        {!! Form::label('type','Type:') !!}
        {!! Form::text('type',$calendar->type,['class'=>'form-control']) !!}
    </div>

    <div class='form-group'>
        {!! Form::label('meeting_date','Meeting Date:') !!}
        <div class="input-group date">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            {!! Form::text('meeting_date',$calendar->meeting_date,['class'=>'form-control',"id"=>"datepicker"]) !!}
        </div>
    </div>





    <div class='form-group'>
        {!! Form::label('meeting_from_time','Time:') !!}
        <div class="row">
            <div class="col-md-4">
                <div class="input-group">

                    <div class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    {!! Form::text('meeting_from_time',$calendar->meeting_from_time,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="col-md-4">

                <div class="input-group">

                    <div class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    {!! Form::text('meeting_to_time',$calendar->meeting_to_time,['class'=>'form-control']) !!}
                </div>
            </div>
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('remind_minutes','Remind me before (in Min) :') !!}
        {!! Form::text('remind_minutes',$calendar->remind_minutes,['class'=>'form-control']) !!}
    </div>


</div>


