@extends('admin.layout')

@section('content')

    <div class="col-sm-12" style="display: {{ isset($messageitem) ? 'block' : 'none'  }} ">
        <div class="bg-secondary rounded h-100 p-4">
            <div class="accordion-item bg-transparent">
                <h6 class="mb-4">Messages</h6>

                <div id="collapseOne" class="accordion-collapse {{ isset($messageitem) ? 'collapse show' : 'collapse'  }}" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="al_name" placeholder="Heading" value="{{ isset($messageitem) ? $messageitem->full_name : '' }}" required>
                            <label for="floatingInput">Name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="al_name" placeholder="Heading" value="{{ isset($messageitem) ? $messageitem->email : '' }}" required>
                            <label for="floatingInput">Email</label>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control"  name="al_date" style="height: 120px;">{{ isset($messageitem) ? $messageitem->message : '' }}</textarea>
                            <label for="floatingTextarea">Message</label>
                        </div>

                        <div class="col-sm-3 col-form-label">
                            <a href="mailto:{{ isset($messageitem) ? $messageitem->email : '' }}?from=your_email@example.com&subject=Rost Web">
                                <button class="btn btn-success">Replay</button>
                            </a>
                        </div>
                        <div class="col-sm-3 col-form-label">
                            <a href="{{ url('/admin123/messages') }}">
                                <button class="btn btn-danger">Back</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid pt-4 px-4">
        {{-- <div class="bg-secondary rounded h-100 p-4">
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
            <div class="form-floating">
                <a href="fgh" title=""><button class="btn btn-info"> Reply</button></a>
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
        </div> --}}
    </div>

    <div class="col-sm-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Messages</h6>
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
                                <td style="text-align: justify">{{ substr($item->message, 0, 100) }}{{ strlen($item->message) > 100 ? '...' : '' }}</td>
                                <td style="text-align: center">{{ $item->created_at }}</td>
                                <td style="text-align: center"><input class="form-check-input " type="checkbox" {{$item->is_read ? 'checked' : '' }} disabled></td>
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
@endsection