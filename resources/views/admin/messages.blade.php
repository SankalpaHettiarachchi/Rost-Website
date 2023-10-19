@extends('admin.layout')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded h-100 p-4">
            <h4 class="mb-4">Message Details</h4>
            <div class="form-floating mb-3">
                <input type="taxt" class="form-control" value="{{ isset($messageitem) ? $messageitem->full_name : '' }}" id="" placeholder="">
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" value="{{ isset($messageitem) ? $messageitem->email : '' }}"id="" placeholder="">
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="" id="" style="height: 150px;">{{ isset($messageitem) ? $messageitem->message : '' }}</textarea>
            </div>
        </div>
        <br>
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h4 class="mb-4">All Messages</h4>
                    <div class="table-responsive">
                        <table class="table" id="msg_tbl">
                            <thead>
                                <tr>
                                    <th scope="col" style="min-width: 100px ;text-align:center">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Message</th>
                                    <th scope="col" style="min-width: 100px ;text-align:center">Sent Date</th>
                                    <th scope="col" style="min-width: 100px ;text-align:center">Is Read</th>
                                    <th scope="col" style="min-width: 100px ;text-align:center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($messageitems as $item)
                                    <tr style="background-color:#191C24">
                                        <td>{{ $item->full_name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td style="text-align: justify">{{ $item->message }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td><input class="form-check-input " type="checkbox" {{$item->is_read ? 'checked' : '' }} disabled></td>
                                        <td>
                                            <a href="{{ route('messages.show', $item->id) }}" title=""><button class="btn btn-info btn-sm"> View</button></a>
                                            <form method="POST" action="{{ url('/admin123/messages' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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