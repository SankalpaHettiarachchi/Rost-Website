@extends('site.layout')

@section('content')
<div class="page-title">
    <div class="container">
        <h1>Album</h1>
    </div>
</div>
    <section class="blog-content-section section-padding">
        <div class="container">
            <div class="row blog-s2-grids">
                <div class="col col-md-4">
                    <div class="grid">
                        <div class="entry-media">
                            <img src="images/blog-s2/img-1.jpg" alt class="img img-responsive">
                        </div>
                        <div class="entry-details">
                            <h3><a href="#">Approach to Assessing Supply Chain Risk</a></h3>
                            <span class="entry-date">30 November, 2018</span>

                            <div class="entry-footer">
                                <a href="#" class="read-more">Show All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination">
                <ul>
                    <li class="current"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
            </div>                
        </div>
    </section>
@endsection