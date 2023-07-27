@extends('admin.layout')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded h-100 p-4">
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
        </div>
        <br>
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
        </div>
    </div>
@endsection