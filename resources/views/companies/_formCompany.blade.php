<div class="box-body">
    <div class='form-group'>
        {!! Form::label('company_name','Company:') !!}
        {!! Form::text('company_name',$company->company_name,['class'=>'form-control'])  !!}
    </div>
    <div class='form-group'>
        {!! Form::label('country','Country:') !!}
        {!! Form::select('country',$countriesList,$company->country,['class'=>'form-control']) !!}
    </div>

    <div class='form-group'>
        {!! Form::label('city','City:') !!}
        {!! Form::text('city',$company->city,['class'=>'form-control'])  !!}
    </div>
    <div class='form-group'>
        {!! Form::label('sector','Sector:') !!}
        {!! Form::text('sector',$company->sector,['class'=>'form-control'])  !!}
    </div>
    <div class='form-group'>
        {!! Form::label('phone','Phone:') !!}
        {!! Form::text('phone',$company->phone,['class'=>'form-control'])  !!}
    </div>
    <div class='form-group'>
        {!! Form::label('email','Email:') !!}
        {!! Form::text('email',$company->email,['class'=>'form-control'])  !!}
    </div>
    <div class='form-group'>
        {!! Form::label('website','Website:') !!}
        {!! Form::text('website',$company->website,['class'=>'form-control'])  !!}
    </div>
    <div class='form-group'>
        {!! Form::label('profile_url','Profile Url:') !!}
        {!! Form::text('profile_url',$company->profile_url,['class'=>'form-control'])  !!}
    </div>

    <div class='form-group'>
        {!! Form::label('level','Level:') !!}
        {!! Form::select('level',$levels,$company->level,['class'=>'form-control']) !!}
    </div>
</div>

