@extends('admin_template')

@section('content')
    <div class="box box-warning direct-chat direct-chat-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Direct Chat</h3>

            <div class="box-tools pull-right">
                <span class="badge bg-yellow" title="" data-toggle="tooltip" data-original-title="3 New Messages">3</span>
                <button data-widget="collapse" class="btn btn-box-tool" type="button"><i class="fa fa-minus"></i>
                </button>
                <button data-widget="chat-pane-toggle" title="Contacts" data-toggle="tooltip" class="btn btn-box-tool" type="button">
                    <i class="fa fa-comments"></i></button>
                <button data-widget="remove" class="btn btn-box-tool" type="button"><i class="fa fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <!-- Conversations are loaded here -->
            <div class="direct-chat-messages">
                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Jane Doe</span>
                        <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                    </div>
                    <!-- /.direct-chat-info -->
                    <img alt="message user image" src="{{ asset("/bower_components/admin-lte/dist/img/guest.png") }} " class="direct-chat-img"><!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                       Testing Testing 123
                    </div>
                    <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right">John Doe</span>
                        <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                    </div>
                    <!-- /.direct-chat-info -->
                    <img alt="message user image" src="{{ asset("/bower_components/admin-lte/dist/img/guest.png") }}" class="direct-chat-img"><!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                        Testing Testing 123
                    </div>
                    <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left">Jane Doe</span>
                        <span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span>
                    </div>
                    <!-- /.direct-chat-info -->
                    <img alt="message user image" src="{{ asset("/bower_components/admin-lte/dist/img/guest.png") }} " class="direct-chat-img"><!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                        Testing Testing 123
                    </div>
                    <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right">John Doe</span>
                        <span class="direct-chat-timestamp pull-left">23 Jan 6:10 pm</span>
                    </div>
                    <!-- /.direct-chat-info -->
                    <img alt="message user image" src="{{ asset("/bower_components/admin-lte/dist/img/guest.png") }}" class="direct-chat-img"><!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                        Testing Testing 123
                    </div>
                    <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

            </div>
            <!--/.direct-chat-messages-->

            <!-- Contacts are loaded here -->
            <div class="direct-chat-contacts">
                <ul class="contacts-list">
                    <li>
                        <a href="#">
                            <img alt="User Image" src="{{ asset("/bower_components/admin-lte/dist/img/guest.png") }} " class="contacts-list-img">

                            <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Count Dracula
                                  <small class="contacts-list-date pull-right">2/28/2015</small>
                                </span>
                                <span class="contacts-list-msg">How have you been? I was...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                        </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                        <a href="#">
                            <img alt="User Image" src="dist/img/user7-128x128.jpg" class="contacts-list-img">

                            <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Sarah Doe
                                  <small class="contacts-list-date pull-right">2/23/2015</small>
                                </span>
                                <span class="contacts-list-msg">I will be waiting for...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                        </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                        <a href="#">
                            <img alt="User Image" src="{{ asset("/bower_components/admin-lte/dist/img/guest.png") }}" class="contacts-list-img">

                            <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Nadia Jolie
                                  <small class="contacts-list-date pull-right">2/20/2015</small>
                                </span>
                                <span class="contacts-list-msg">I'll call you back at...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                        </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                        <a href="#">
                            <img alt="User Image" src="dist/img/user5-128x128.jpg" class="contacts-list-img">

                            <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Nora S. Vans
                                  <small class="contacts-list-date pull-right">2/10/2015</small>
                                </span>
                                <span class="contacts-list-msg">Where is your new...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                        </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                        <a href="#">
                            <img alt="User Image" src="dist/img/user6-128x128.jpg" class="contacts-list-img">

                            <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  John K.
                                  <small class="contacts-list-date pull-right">1/27/2015</small>
                                </span>
                                <span class="contacts-list-msg">Can I take a look at...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                        </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                        <a href="#">
                            <img alt="User Image" src="dist/img/user8-128x128.jpg" class="contacts-list-img">

                            <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Kenneth M.
                                  <small class="contacts-list-date pull-right">1/4/2015</small>
                                </span>
                                <span class="contacts-list-msg">Never mind I found...</span>
                            </div>
                            <!-- /.contacts-list-info -->
                        </a>
                    </li>
                    <!-- End Contact Item -->
                </ul>
                <!-- /.contatcts-list -->
            </div>
            <!-- /.direct-chat-pane -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <form method="post" action="#">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type Message ..." name="message">
                          <span class="input-group-btn">
                            <button class="btn btn-warning btn-flat" type="button">Send</button>
                          </span>
                </div>
            </form>
        </div>
        <!-- /.box-footer-->
    </div>

@endsection