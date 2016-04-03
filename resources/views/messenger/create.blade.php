@extends('admin_template')

@section('content')


    <div class="box box-primary">

        {!! Form::open(['route' => 'messages.store']) !!}
        <div class="row">
            <div class="col-md-12">
                <div class="box-header with-border">
                    <h3 class="box-title">Create a new message</h3>
                    <div class="box-tools pull-right">
                        <a href="{{url("messages")}}"> <i class="fa fa-arrow-left">Back</i></a>
                        </div>
                </div>
                <div class="col-md-12">
                    <!-- Subject Form Input -->
                    <div class="form-group">
                        {!! Form::label('subject', 'Subject', ['class' => 'control-label']) !!}
                        {!! Form::text('subject', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Message Form Input -->
                    <div class="form-group">
                        {!! Form::label('message', 'Message', ['class' => 'control-label']) !!}
                        {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
                    </div>

                    @if($users->count() > 0)
                        <div class="checkbox">
                            @foreach($users as $user)
                                <label title="{!!$user->name!!}"><input type="checkbox" name="recipients[]" value="{!!$user->id!!}">{!!$user->name!!}</label>
                            @endforeach
                        </div>
                        @endif

                                <!-- Submit Form Input -->
                        <div class="form-group">
                            {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
                        </div>
                </div>

            </div>

        </div>

        {!! Form::close() !!}
    </div>


@stop