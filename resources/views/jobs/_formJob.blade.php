<div class="box-body">
    <div class='form-group'>
        {!! Form::label('job_title','Job Title:') !!}
        {!! Form::text('job_title',$job->job_title,['class'=>'form-control'])  !!}
    </div>

    <div class='form-group'>
        {!! Form::label('opening_closing_date','Opening Date - Closing Date') !!}
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            {!! Form::text('opening_closing_date',$job->opening_date." - ".$job->closing_date,['class'=>'form-control','id'=>'reservation'])  !!}
        </div>
    </div>

    <div class='form-group'>
        {!! Form::label('company_id','Company:') !!}
        {!! Form::select('company_id',$companyList,$job->company_id,['class'=>'form-control']) !!}
    </div>

    <div class='form-group'>
        {!! Form::label('country','Country:') !!}
        {!! Form::select('country',$countriesList,$job->country,['class'=>'form-control']) !!}
    </div>

    <div class='form-group'>
        {!! Form::label('city','City:') !!}
        {!! Form::text('city',$job->city,['class'=>'form-control'])  !!}
    </div>
    <div class='form-group'>
        {!! Form::label('sector','Sector:') !!}
        {!! Form::text('sector',$job->sector,['class'=>'form-control'])  !!}
    </div>

    <div class='form-group'>
        {!! Form::label('url_on_bloovo','URL on Bloovo:') !!}
        {!! Form::text('url_on_bloovo',$job->url_on_bloovo,['class'=>'form-control'])  !!}
    </div>



</div>


