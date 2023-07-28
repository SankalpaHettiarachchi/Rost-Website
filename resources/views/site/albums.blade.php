@extends('site.layout')

@section('content')
    <div class="page-title">
        <div class="container">
            <h1>Albums</h1>
        </div>
    </div>
    <section class="blog-content-section section-padding">
        <div class="container">
            <div class="row blog-s2-grids">
                @foreach ($albums as $albums_item )
                    <div class="col col-md-4">
                        <div class="grid">
                            <div class="entry-details">
                                <div class="gallery">
                                    @foreach ($albums_item->images->take(3) as $index => $image_item)
                                        <div class="col box" tabindex="{{ $index + 1 }}">
                                            <img src="{{ asset('uploads/' . $image_item->image_name) }}" alt="">
                                        </div>
                                    @endforeach
                                </div>
                                <h3><a href="#">{{ isset($albums) ? $albums_item->album_name : '' }}</a></h3>
                                <div class="album_des">
                                    <span class="entry-date">{{ isset($albums) ? $albums_item->description : '' }}</span>
                                </div>
                                <div class="entry-footer">
                                    <a href="{{ route('albums.click', ['id' => $albums_item->id]) }}">Show all {{ isset($albums) ? $albums_item->image_count : '' }} images </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <br>
            @if( isset($album_images))
            <hr>
                <div class="container">
                    <h3>{{ isset($album_name) ? $album_name->album_name : '' }} - {{ isset($album_name) ? \Carbon\Carbon::parse($album_name->upload_date)->format('Y F d') : '' }}</h3>
                    <br>
                    <div class="row gallery1">
                        @foreach ($album_images as $image)
                            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 image-item">
                                <a href="{{ asset('uploads/'. $image->image_name) }}" class="image-link" style="padding: 4% 0% 4% 0%">
                                <img src="{{ asset('uploads/'. $image->image_name) }}" style="padding: 4% 0% 4% 0%">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection