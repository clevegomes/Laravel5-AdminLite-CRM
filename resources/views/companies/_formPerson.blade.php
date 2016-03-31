<div class="box-body">
    <div class='form-group'>
        {!! Form::label('contact_person','Contact Person name:') !!}
        {!! Form::text('contact_person',$company->contact_person,['class'=>'form-control'])  !!}
    </div>

    <div class='form-group'>
        {!! Form::label('contact_phone','Contact Phone:') !!}
        {!! Form::text('contact_phone',$company->contact_phone,['class'=>'form-control'])  !!}
    </div>
    <div class='form-group'>
        {!! Form::label('contact_mobile','Contact Mobile:') !!}
        {!! Form::text('contact_mobile',$company->contact_mobile,['class'=>'form-control'])  !!}
    </div>
    <div class='form-group'>
        {!! Form::label('contact_email','Contact Email:') !!}
        {!! Form::text('contact_email',$company->contact_email,['class'=>'form-control'])  !!}
    </div>
    <div class='form-group'>
        {!! Form::label('comments','Comments:') !!}
        {!! Form::textarea('comments',$company->comments,['class'=>'form-control'])  !!}
    </div>

</div>

