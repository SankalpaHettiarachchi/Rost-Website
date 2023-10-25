@extends('admin.layout')

@section('content')
    <div class="col-sm-12">
        <div class="bg-secondary rounded h-100 p-4">
            <div class="accordion-item bg-transparent">
                <h2 class="accordion-header" id="headingOne">
                    @if(isset($newsitem))

                        <button class="accordion-button collapse show" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Update News
                        </button>
                        @else
                        <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Add News
                        </button>
                                             
                    @endif
                </h2>
                <div id="collapseOne" class="accordion-collapse {{ isset($newsitem) ? 'collapse show' : 'collapse'  }}" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body">

                        @if(isset($newsitem))
                        <form action="{{ url('/admin123/news/'.$newsitem->id) }}" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            @method("PATCH")
                        @endif
                        <form action="{{ url('/admin123/news') }}" method="POST" enctype="multipart/form-data">
                            {!! csrf_field() !!}

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="heading" placeholder="Heading" value="{{ isset($newsitem) ? $newsitem->heading : '' }}" required>
                                <label for="floatingInput">Heading</label>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control"  name="description" style="height: 120px;">{{ isset($newsitem) ? $newsitem->description : '' }}</textarea>
                                <label for="floatingTextarea">Description</label>
                            </div>

                            <div class="row">
                                <div class="form-floating mb-3 col-sm-6 col-12">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="floatingInput">Upload Date</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" name="upload_date" placeholder="name@example.com" value="{{ isset($newsitem) ? $newsitem->upload_date : '' }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3 col-sm-6 col-12">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="cover">Cover Image</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input class="form-control bg-dark" type="file" name="cover" multiple required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="fb_link" placeholder="Facebook" value="{{ isset($newsitem) ? $newsitem->fb_link : '' }}">
                                <label for="floatingInput">Facebook Link</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="in_link" placeholder="Linked In" value="{{ isset($newsitem) ? $newsitem->in_link : '' }}">
                                <label for="floatingInput">LinkedIn Link</label>
                            </div>

                                @if(isset($newsitem))
                                <div class="col-sm-2 col-form-label">
                                    <button type="submit" class="btn btn-success">Update News</button>
                                </div>                
                                @else
                                    <div class="col-sm-2 col-form-label">
                                        <button type="submit" class="btn btn-success">Save News</button>
                                    </div>
                                @endif

                            @if ($errors->any())
                                <div class="col-sm-10">
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif

                        </form>
                        <div class="col-sm-3 col-form-label">
                            <a href="{{ url('/admin123/news') }}">
                                <button class="btn btn-danger">Cancel</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-4 px-4">
        {{-- <div class="bg-secondary rounded h-100 p-4" >
            @if(isset($newsitem))
                <h4 class="mb-4">Update News</h4>
            @else
                <h4 class="mb-4">Add News</h4>
            @endif
            @if(isset($newsitem))
            <form action="{{ url('/admin123/news/'.$newsitem->id) }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @method("PATCH")
            @endif
            <form action="{{ url('/admin123/news') }}" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="heading" value="{{ isset($newsitem) ? $newsitem->heading : '' }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea type="text-aria" class="form-control" name="description" required>{{ isset($newsitem) ? $newsitem->description : '' }}</textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Upload Date</label>
                    <div class="col-sm-10">
                        <input type="date" style="max-width: 10em" class="form-control date-" name="upload_date" value="{{ isset($newsitem) ? $newsitem->upload_date : '' }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Cover Image</label>
                    <div class="col-sm-10">
                        <input class="form-control bg-dark" type="file" name="cover" multiple required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Facebook Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="fb_link" value="{{ isset($newsitem) ? $newsitem->fb_link : '' }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">LinkedIn Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="in_link" value="{{ isset($newsitem) ? $newsitem->in_link : '' }}">
                    </div>
                </div>

                @if(isset($newsitem))
                    <div class="col-sm-2 col-form-label">
                        <button type="submit" class="btn btn-success">Update News</button>
                    </div>                
                @else
                    <div class="col-sm-2 col-form-label">
                        <button type="submit" class="btn btn-primary">Save News</button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="col-sm-10">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

            </form>
        </div> --}}
        
        {{-- <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h4 class="mb-4">News on the Page</h4>
                    <div class="table-responsive">
                        <table class="table" id="news_tbl">
                            <thead>
                                <tr>
                                    <th scope="col" style=" text-align:center">Heading</th>
                                    <th scope="col" style=" text-align:center">Description</th>
                                    <th scope="col" style="min-width: 150px ;text-align:center">Upload Date</th>
                                    <th scope="col" style="min-width: 100px ;text-align:center">Cover Image</th>
                                    <th scope="col" style="min-width: 95px ;text-align:center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($newsitems as $item)
                                    <tr style="background-color:#191C24">
                                        <td>{{ $item->heading }}</td>
                                        <td style="text-align: justify" >{{ $item->description }}</td>
                                        <td>{{ $item->upload_date }}</td>
                                        <td style="text-align: center;">
                                            <img src="{{ asset('uploads/'. $item->cover) }}" alt class="img img-responsive" style="width: 75%;height:75%">
                                        </td>
                                        <td>
                                            <a href="{{ route('news.show', $item->id) }}" title="Edit Album"><button class="btn btn-info btn-sm" onclick="return confirm(&quot;Confirm Edit?&quot;)"> Edit</button></a>
                                            <form method="POST" action="{{ url('/admin123/news' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Album" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>                                
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">News On Page</h6>
            <div class="table-responsive">
                <table class="table" id="news_tbl">
                    <thead>
                        <tr>
                            <th scope="col" style=" text-align:center">Heading</th>
                            <th scope="col" style=" text-align:center">Description</th>
                            <th scope="col" style="min-width: 150px ;text-align:center">Upload Date</th>
                            <th scope="col" style="min-width: 100px ;text-align:center">Cover Image</th>
                            <th scope="col" style="min-width: 95px ;text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($newsitems as $item)
                            <tr style="background-color:#191C24">
                                <td>{{ $item->heading }}</td>
                                <td style="text-align: justify" >{{ substr($item->description, 0, 250) }}{{ strlen($item->description) > 250 ? '...' : '' }}</td>
                                <td style="text-align: center;">{{ $item->upload_date }}</td>
                                <td style="text-align: center;">
                                    <img src="{{ asset('uploads/'. $item->cover) }}" alt class="img img-responsive" style="width: 75%;height:75%">
                                </td>
                                <td>
                                    <a href="{{ route('news.show', $item->id) }}" title="Edit Album"><button class="btn btn-info btn-sm" onclick="return confirm(&quot;Images should re upload.Confirm Edit?&quot;)"> Edit</button></a>
                                    <form method="POST" action="{{ url('/admin123/news' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Album" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                        </button>
                                    </form>                                
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>                       
        </div>
    </div>  
@endsection