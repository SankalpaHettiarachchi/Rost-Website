@extends('admin.layout')

@section('content')
    <div class="container-fluid pt-4 px-4">
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
                            <div id="calender" style=""><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">October 2023</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="10/01/2023" class="day weekend">1</td><td data-action="selectDay" data-day="10/02/2023" class="day">2</td><td data-action="selectDay" data-day="10/03/2023" class="day">3</td><td data-action="selectDay" data-day="10/04/2023" class="day">4</td><td data-action="selectDay" data-day="10/05/2023" class="day">5</td><td data-action="selectDay" data-day="10/06/2023" class="day">6</td><td data-action="selectDay" data-day="10/07/2023" class="day weekend">7</td></tr><tr><td data-action="selectDay" data-day="10/08/2023" class="day weekend">8</td><td data-action="selectDay" data-day="10/09/2023" class="day">9</td><td data-action="selectDay" data-day="10/10/2023" class="day">10</td><td data-action="selectDay" data-day="10/11/2023" class="day">11</td><td data-action="selectDay" data-day="10/12/2023" class="day">12</td><td data-action="selectDay" data-day="10/13/2023" class="day">13</td><td data-action="selectDay" data-day="10/14/2023" class="day weekend">14</td></tr><tr><td data-action="selectDay" data-day="10/15/2023" class="day weekend">15</td><td data-action="selectDay" data-day="10/16/2023" class="day">16</td><td data-action="selectDay" data-day="10/17/2023" class="day">17</td><td data-action="selectDay" data-day="10/18/2023" class="day">18</td><td data-action="selectDay" data-day="10/19/2023" class="day">19</td><td data-action="selectDay" data-day="10/20/2023" class="day active today">20</td><td data-action="selectDay" data-day="10/21/2023" class="day weekend">21</td></tr><tr><td data-action="selectDay" data-day="10/22/2023" class="day weekend">22</td><td data-action="selectDay" data-day="10/23/2023" class="day">23</td><td data-action="selectDay" data-day="10/24/2023" class="day">24</td><td data-action="selectDay" data-day="10/25/2023" class="day">25</td><td data-action="selectDay" data-day="10/26/2023" class="day">26</td><td data-action="selectDay" data-day="10/27/2023" class="day">27</td><td data-action="selectDay" data-day="10/28/2023" class="day weekend">28</td></tr><tr><td data-action="selectDay" data-day="10/29/2023" class="day weekend">29</td><td data-action="selectDay" data-day="10/30/2023" class="day">30</td><td data-action="selectDay" data-day="10/31/2023" class="day">31</td><td data-action="selectDay" data-day="11/01/2023" class="day new">1</td><td data-action="selectDay" data-day="11/02/2023" class="day new">2</td><td data-action="selectDay" data-day="11/03/2023" class="day new">3</td><td data-action="selectDay" data-day="11/04/2023" class="day new weekend">4</td></tr><tr><td data-action="selectDay" data-day="11/05/2023" class="day new weekend">5</td><td data-action="selectDay" data-day="11/06/2023" class="day new">6</td><td data-action="selectDay" data-day="11/07/2023" class="day new">7</td><td data-action="selectDay" data-day="11/08/2023" class="day new">8</td><td data-action="selectDay" data-day="11/09/2023" class="day new">9</td><td data-action="selectDay" data-day="11/10/2023" class="day new">10</td><td data-action="selectDay" data-day="11/11/2023" class="day new weekend">11</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2023</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month active">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year active">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
                        </div>
                    </div>
                </div>
            </div>
@endsection