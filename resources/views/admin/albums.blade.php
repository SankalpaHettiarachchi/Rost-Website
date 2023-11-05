@extends('admin.layout')

@section('content')
<div class="row g-4">
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

                            <div class="col-sm-3">
                                <div class="row">
                                    @if(isset($album))
                                    <div class="col-sm-6 pb-2">
                                        <button type="submit" class="btn btn-success">Update Album</button>
                                    </div>                
                                    @else
                                        <div class="col-sm-6 pb-2">
                                            <button type="submit" class="btn btn-success">Save Album</button>
                                        </div>
                                    @endif

                                    <div class="col-sm-6">
                                        <a href="{{ url('/admin123/albums') }}">
                                            <button type="button" class="btn btn-danger">Cancel</button>
                                        </a>
                                    </div>    
                                </div>   
                            </div>

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
                    </div>
                </div>
            </div>
        </div>
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
                                    <a href="{{ route('albums.show', $item->id) }}" title="Edit Album"><button class="btn btn-info btn-sm" onclick="return confirm(&quot;Images should re upload.Confirm Edit?&quot;)"> Edit</button></a>
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
</div>
@endsection