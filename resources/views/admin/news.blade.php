@extends('admin.layout')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Add News</h6>
            <form action="{{ url('/admin123/news') }}" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Heading</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="heading" value="{{ isset($newsitem) ? $newsitem->heading : '' }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea type="text-aria" class="form-control" name="description">{{ isset($newsitem) ? $newsitem->description : '' }}</textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Upload Date</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="upload_date" value="{{ isset($newsitem) ? $newsitem->upload_date : '' }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Cover Image</label>
                    <div class="col-sm-10">
                        <input class="form-control bg-dark" type="file" name="cover" multiple required>                    
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add News</button>
            </form>
        </div>
        <br>
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Responsive Table</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Heading</th>
                                    <th scope="col">description</th>
                                    <th scope="col">Upload Date</th>
                                    <th scope="col">Cover Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($newsitems as $item)
                                    <tr>
                                        <td>{{ $item->heading }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->upload_date }}</td>
                                        <td>{{ $item->cover }}</td>
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
        </div>
    </div>  
@endsection