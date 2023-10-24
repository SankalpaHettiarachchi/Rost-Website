@extends('admin.layout')

@section('content')

    
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Students</p>
                                <h6 class="mb-0">{{ isset($news_count) ? $news_count : '' }}</h6>
                            </div>
                        </div>
                    </div>
                    @if(auth()->user()->s_role === 1)
                        <div class="col-sm-6 col-xl-3">
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                                <i class="fa fa-chart-bar fa-3x text-primary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Total Admins</p>
                                    <h6 class="mb-0">{{ isset($admins_count) ? $admins_count : '' }}</h6>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Albums</p>
                                <h6 class="mb-0">{{ isset($albums_count) ? $albums_count : '' }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total News</p>
                                <h6 class="mb-0">{{ isset($students_count) ? $students_count : '' }}</h6>
                            </div>
                        </div>
                    </div>
                    @if(auth()->user()->s_role === 1)
                        <div class="col-sm-6 col-xl-3">
                            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                                <i class="fa fa-chart-bar fa-3x text-primary"></i>
                                <div class="ms-3">
                                    <p class="mb-2">Admin Requests</p>
                                    <h6 class="mb-0">{{ isset($admins_pending_Count) ? $admins_pending_Count : '' }}</h6>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Messages</p>
                                <h6 class="mb-0">{{ isset($messages_count) ? $messages_count : '' }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Unread Messages</p>
                                <h6 class="mb-0">{{ isset($unread_messages_count) ? $unread_messages_count : '' }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Messages</h6>
                                <a href="">Show All</a>
                            </div>
                            @foreach ($Show_fourmessages as $message )
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="assests/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">{{ $message->full_name }}</h6>
                                        <small>{{ $message->created_at->diffForHumans() }}</small>
                                    </div>
                                    <span>{{ substr($message->message, 0, 30) }}{{ strlen($message->message) > 30 ? '...' : '' }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @if(auth()->user()->s_role === 1)
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Admin Requests</h6>
                                <a href="">Show All</a>
                            </div>
                            @foreach ($Show_four_admin as $admin )
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="assests/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">{{ $admin->name }}</h6>
                                        <small>{{ $admin->created_at->diffForHumans() }}</small>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                </div>
@endsection