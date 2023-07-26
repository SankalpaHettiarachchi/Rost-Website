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
            @foreach ($albums as $albums_item )
                <div class="col col-md-4">
                    <div class="grid">
                        <div class="entry-media">
                            @foreach ($albums_item->images->take(3) as $image_item)
                                <img src="{{ asset('uploads/'. $image_item->image_name) }}" alt class="img img-responsive">
                             @endforeach
                        </div>
                        <div class="entry-details">
                            <h3><a href="#">{{ isset($albums) ? $albums_item->album_name : '' }}</a></h3>
                            <span class="entry-date">30 November, 2018</span>

                            <div class="entry-footer">
                                <a href="{{ route('albums.click', ['id' => $albums_item->id]) }}">Show All</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            <div class="pagination">
                <ul>
                    <li class="current"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
            </div>                
        </div>
        @if( isset($album_images))
            @foreach ($album_images as $image )
                <div class="img-holder">
                    <img src="{{ asset('uploads/'. $image->image_name) }}" alt="">
                </div>
            @endforeach
        @endif
    </section>
@endsection