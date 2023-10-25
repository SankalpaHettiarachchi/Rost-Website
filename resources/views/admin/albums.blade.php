@extends('admin.layout')

@section('content')
    <div class="col-sm-12">
        <div class="bg-secondary rounded h-100 p-4">
            <div class="accordion-item bg-transparent">
                <h2 class="accordion-header" id="headingOne">
                    @if(isset($album))

                        <button class="accordion-button collapse show" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Update Album
                        </button>
                        @else
                        <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Add Album
                        </button>
                                            
                    @endif
                </h2>
                <div id="collapseOne" class="accordion-collapse {{ isset($album) ? 'collapse show' : 'collapse'  }}" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body">

                        @if(isset($album))
                        <form action="{{ url('/admin123/albums/'.$album->id) }}" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            @method("PATCH")
                        @endif
                        <form action="{{ url('/admin123/albums') }}" method="POST" enctype="multipart/form-data">
                            {!! csrf_field() !!}

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="al_name" placeholder="Heading" value="{{ isset($album) ? $album->album_name : '' }}" required>
                                <label for="floatingInput">Alubm Name</label>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control"  name="al_date" style="height: 120px;">{{ isset($album) ? $album->description : '' }}</textarea>
                                <label for="floatingTextarea">Description</label>
                            </div>

                            <div class="row">
                                <div class="form-floating mb-3 col-sm-6 col-12">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="floatingInput">Upload Date</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" name="al_description" placeholder="name@example.com" value="{{ isset($album) ? $album->upload_date : '' }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3 col-sm-6 col-12">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label for="cover">Images</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input class="form-control bg-dark" type="file" name="ad_iamges[]" multiple required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                @if(isset($album))
                                <div class="col-sm-2 col-form-label">
                                    <button type="submit" class="btn btn-success">Update Album</button>
                                </div>                
                                @else
                                    <div class="col-sm-2 col-form-label">
                                        <button type="submit" class="btn btn-success">Save Album</button>
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
                            <a href="{{ url('/admin123/albums') }}">
                                <button class="btn btn-danger">Cancel</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-4 px-4">
        {{-- <div class="bg-secondary rounded h-100 p-4">
            @if(isset($album))
                <h6 class="mb-4">Update Album</h6>
            @else
                <h6 class="mb-4">Add Album</h6>
            @endif
                @if(isset($album))
                <form action="{{ url('/admin123/albums/'.$album->id) }}" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    @method("PATCH")
                @endif
                <form action="{{ url('/admin123/albums') }}" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Album Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="al_name" value="{{ isset($album) ? $album->album_name : '' }}"  required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Upload Date</label>
                    <div class="col-sm-10">
                        <input type="date" style="max-width: 10em" class="form-control date-" name="al_date" value="{{ isset($album) ? $album->upload_date : '' }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" aria-label="With textarea" name="al_description" required> {{ isset($album) ? $album->description : '' }}</textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Images</label>
                    <div class="col-sm-10">
                        <input class="form-control bg-dark" type="file" name="ad_iamges[]" multiple required>
                    </div>
                </div>
                @if(isset($album))
                    <button type="submit" class="btn btn-success">Update Album</button>                
                @else
                    <button type="submit" class="btn btn-primary">Save Album</button>
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
        {{-- <br>
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Albums</h6>
            <div class="table-responsive">
                <table class="table" id="albm_tbl">
                    <thead>
                        <tr>
                            <th scope="col" style=" text-align:center">Album Name</th>
                            <th scope="col" style=" text-align:center">Description</th>
                            <th scope="col" style="min-width: 150px ;text-align:center">Upload Date</th>
                            <th scope="col" style="min-width: 100px ;text-align:center">Image Count</th>
                            <th scope="col" style="min-width: 95px ;text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($albums as $item)
                            <tr style="background-color:#191C24">
                                <td>{{ $item->album_name }}</td>
                                <td style="text-align: justify" >{{ $item->description }}</td>
                                <td>{{ $item->upload_date }}</td>
                                <td>{{ $item->image_count }}</td>
                                <td>
                                    <a href="{{ route('albums.show', $item->id) }}" title="Edit Album"><button class="btn btn-info btn-sm" onclick="return confirm(&quot;Confirm Edit?&quot;)"> Edit</button></a>
                                    <form method="POST" action="{{ url('/admin123/albums' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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
        </div> --}}
    </div>
    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Abums on Pagee</h6>
            <div class="table-responsive">
                <table class="table" id="albm_tbl">
                    <thead>
                        <tr>
                            <th scope="col" style="min-width: 150px; text-align:center">Album Name</th>
                            <th scope="col" style="min-width: 150px; text-align:center">Description</th>
                            <th scope="col" style="min-width: 150px; text-align:center">Upload Date</th>
                            <th scope="col" style="min-width: 130px; text-align:center">Image Count</th>
                            <th scope="col" style="min-width:  95px; text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($albums as $item)
                            <tr style="background-color:#191C24">
                                <td>{{ $item->album_name }}</td>
                                <td style="text-align: justify">{{ substr($item->description, 0, 100) }}{{ strlen($item->description) > 100 ? '...' : '' }}</td>
                                <td style="text-align: center">{{ $item->upload_date }}</td>
                                <td style="text-align: center">{{ $item->image_count }}</td>
                                <td>
                                    <a href="{{ route('albums.show', $item->id) }}" title="Edit Album"><button class="btn btn-info btn-sm" onclick="return confirm(&quot;Confirm Edit?&quot;)"> Edit</button></a>
                                    <form method="POST" action="{{ url('/admin123/albums' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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