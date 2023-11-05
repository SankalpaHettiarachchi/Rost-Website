@extends('site.layout')

@section('content')
    <div class="page-title news_img">
        <div class="container">
            <h1>News</h1>
        </div>
    </div>
    <section class="blog-single-main-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-9 col-sm-12 blog-single-content">
                    @if (isset($newsitems_top1) )
                        <div class="post">
                            <div class="media">
                                <img src="{{ asset('uploads/'. $newsitems_top1->cover) }}" alt class="img img-responsive ">
                            </div>
                            <div class="post-title-meta">
                                <h2>{{ isset($newsitems_top1) ? $newsitems_top1->heading : '' }}</h2>
                                <ul>
                                    <li style="color: #3b5998">{{ isset($newsitems_top1) ? \Carbon\Carbon::parse($newsitems_top1->upload_date)->format('Y F d') : '' }}<a href="#"></a></li>                                
                                </ul>
                            </div>
                            <div class="post-body">
                                <p>{{ isset($newsitems_top1) ? $newsitems_top1->description : '' }}</p>
                            </div>
                            <div class="share-post">
                                <h2>{{ isset($newsitems_top2) ? $newsitem->heading : '' }}</h2>
                                <ul>
                                    <li>
                                        <a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="btn btn-primary" style="background-color: #0082ca;" href="#!" role="button">
                                            <i class="fa fa-linkedin"> </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <br>
                    @else
                        @foreach ($newsitems_top2 as $newsitem )
                            <div class="post">
                                <div class="media">
                                    <img src="{{ asset('uploads/'. $newsitem->cover) }}" alt class="img img-responsive">
                                </div>
                                <div class="post-title-meta">
                                    <h2>{{ isset($newsitems_top2) ? $newsitem->heading : '' }}</h2> 
                                    <ul>
                                        <li style="color: #3b5998">{{ isset($newsitems_top2) ? \Carbon\Carbon::parse($newsitem->upload_date)->format('Y F d') : '' }}<a href="#"></a></li>
                                    </ul>                               
                                </div>
                                <div class="post-body">
                                    <p>{{ isset($newsitems_top2) ? $newsitem->description : '' }}</p>
                                </div>
                            </div>
                            <div class="share-post">
                                <ul>
                                    <li>
                                        <a class="btn btn-primary" style="background-color: #3b5998;" href="{{ isset($newsitems_top2) ? $newsitem->fb_link : '' }}" role="button">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="btn btn-primary" style="background-color: #0082ca;" href="{{ isset($newsitems_top2) ? $newsitem->in_link : '' }}" role="button">
                                            <i class="fa fa-linkedin"> </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <hr>
                            <br>
                        @endforeach
                    @endif
                </div>
                <div class="col col-md-3 col-sm-5">
                    <div class="blog-sidebar">
                        <div class="widget recent-post-widget">
                            <h3>Recent post</h3>
                            <ul>
                                @foreach ($newsitems_recent as $recent_item )
                                    <li>
                                        <div class="">
                                            <img class="post-pic" src="{{ asset('uploads/'. $recent_item->cover) }}" alt>
                                        </div>
                                        <div class="details">
                                            <h4>
                                                <a href="{{ route('news.click', ['id' => $recent_item->id]) }}">{{ isset($newsitems_recent) ? $recent_item->heading : '' }}</a>
                                            </h4>                                         
                                            <span>Sep 25, 2016</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    
@endsection