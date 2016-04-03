@extends('admin_template')
<?php $count = Auth::user()->newMessagesCount(); ?>

@section('content')

    <div class="box box-warning direct-chat direct-chat-warning">
        <div class="box-header with-border">

            <h3 class="box-title">{!! $thread->subject !!}</h3>

            <div class="box-tools pull-right">
               <a href="{{url("messages")}}"> <i class="fa fa-arrow-left">Back</i></a>

                <span class="badge bg-yellow" title=" {!! $count !!} New Messages" data-toggle="tooltip">{!! $count !!}</span>

            </div>
</div>

        <div class="box-body">
            <div class="direct-chat-messages">

            @foreach($thread->messages as $message)
                    <div class="direct-chat-msg">
                        <div class="direct-chat-info clearfix">
                            <span class="direct-chat-name pull-left">{!! $message->user->name !!}</span>
                            <span class="direct-chat-timestamp pull-right">{!! $message->created_at->diffForHumans() !!}</span>
                        </div>
                        <img alt="message user image" src="{{ asset("/bower_components/admin-lte/dist/img/".$message->user->image) }}" class="direct-chat-img"><!-- /.direct-chat-img -->
                        <div class="direct-chat-text">
                            {!! $message->body !!}
                        </div>

                </div>
            @endforeach









        </div>
</div>

        <div class="box-footer">
            {!! Form::open(['route' => ['messages.update', $thread->id], 'method' => 'PUT']) !!}
                <div class="input-group">

                    {!! Form::text('message', null, ['class' => 'form-control',"name"=>"message","placeholder"=>"Type Message ..."]) !!}

                          <span class="input-group-btn">
                              {!! Form::submit('Send', ['class' => 'btn btn-warning btn-flat',"type"=>"button"]) !!}
                          </span>
                </div>

            @if($users->count() > 0)
                <div class="checkbox">
                    @foreach($users as $user)
                        <label title="{!! $user->name !!}"><input type="checkbox" name="recipients[]" value="{!! $user->id !!}">{!! $user->name !!}</label>
                    @endforeach
                </div>
            @endif
            {!! Form::close() !!}
        </div>
    </div>
















@stop