@extends('site.layout')

@section('content')
    <div class="page-title">
        <div class="container">
            <h1>News</h1>
        </div>
    </div>
    <section class="blog-single-main-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-9 col-sm-12 blog-single-content">
                    <div class="post">
                        <div class="media">
                            <img src="{{ asset('uploads/'. $newsitems->cover) }}" alt class="img img-responsive">
                        </div>
                        <div class="post-title-meta">
                            <h2>{{ isset($newsitems) ? $newsitems->heading : '' }}</h2>
                            <ul>
                                <li><a href="#">21 feb, 2016</a></li>
                            </ul>
                        </div>
                        <div class="post-body">
                            <p>{{ isset($newsitems) ? $newsitems->description : '' }}</p>
                        </div>
                    </div>
                </div>

                <div class="col col-md-3 col-sm-5">
                    <div class="blog-sidebar">
                        <div class="widget recent-post-widget">
                            <h3>Recent post</h3>
                            <ul>
                                <li>
                                    <div class="post-pic">
                                        <img src="images/blog/thumb-2/img-1.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">Micenas placerat nibh loreming fentum</a></h4>
                                        <span>Sep 25, 2016</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-pic">
                                        <img src="images/blog/thumb-2/img-2.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">Integer suscipit sit amet</a></h4>
                                        <span>Sep 25, 2016</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-pic">
                                        <img src="images/blog/thumb-2/img-3.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <h4><a href="#">Praeent vehicula neget tempus</a></h4>
                                        <span>Sep 25, 2016</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    
@endsection