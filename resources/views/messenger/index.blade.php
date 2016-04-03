@extends('admin_template')

@section('content')


    <div class="box box-primary">
        <div class="box-header ui-sortable-handle" style="cursor: move;">
            <i class="ion ion-clipboard"></i>

            <h3 class="box-title">List Of Active Chat Topic</h3>

            <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">

                      <a href="{{ url('messages/create') }}" class="btn btn-default pull-right" type="button">   <i class="fa fa-plus"></i> Add new chat topic </a>
                </ul>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            @if (Session::has('error_message'))
                <div class="alert alert-danger" role="alert">
                    {!! Session::get('error_message') !!}
                </div>
            @endif
                @if($threads->count() > 0)
                    <ul class="todo-list ui-sortable">

                    @foreach($threads as $thread)



                            <li>
                                <!-- drag handle -->
                      <span class="handle ui-sortable-handle">
                        <i class="fa fa-comment"></i>
                      </span>
                                <span class="text">
<a href="{{ url('messages/'.$thread->id) }}">
                                    Subject: {{$thread->subject}} | Body: {{$thread->latestMessage->body }} | Creator: {{$thread->creator()->name }} | Participants: {{$thread->participantsString(Auth::id())}}
</a>
                                    <small class="label label-warning"><i class="fa fa-clock-o"></i>
                                        {!! $thread->created_at !!}
                                    </small>
                                    @if($thread->isUnread($currentUserId))
                            <small class="label label-danger"><i class="fa fa-clock-o"></i> Unread</small>
                                    @endif
                                </span>

                            </li>


                    @endforeach
                    </ul>

                @else
                    <p>Sorry, no threads.</p>
                @endif



        </div>
</div>











@stop