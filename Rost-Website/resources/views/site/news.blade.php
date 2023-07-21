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
                            <img src="images/blog-detail/img-1.jpg" alt class="img img-responsive">
                        </div>
                        <div class="post-title-meta">
                            <button class="btn">Construction</button>
                            <h2>Arnold Engineering Development Complex build with us</h2>
                            <ul>
                                <li><a href="#">Hasib sharif</a></li>
                                <li><a href="#">21 feb, 2016</a></li>
                            </ul>
                        </div>
                        <div class="post-body">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                            <p>Which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum genera tors on the Internet tend to repeat predefined chunks as necessary, making this the first true genera tor on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence </p>
                        </div>
                        <div class="gallery-post">
                            <div class="gallery">
                                <div>
                                    <img src="images/blog-detail/img-2.jpg" alt class="img img-responsive">
                                </div>
                                <div>
                                    <img src="images/blog-detail/img-3.jpg" alt class="img img-responsive">
                                </div>
                            </div>
                            
                            <h3>Lorem Ipsum is not simply random text. </h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
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