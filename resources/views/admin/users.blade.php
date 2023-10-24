@extends('admin.layout')

@section('content')

<div class="row g-4">
    <div class="col-12">
        <div class="bg-secondary rounded p-4">
            <h6 class="mb-4">Page Admins</h6>
            @if(auth()->user()->s_role === 1)
            <div class="table-responsive">
                <table class="table" id="admin_tbl">
                    <thead>
                        <tr>
                            <th scope="col" style=" text-align:center">Name</th>
                            <th scope="col" style="min-width: 100px ;text-align:center">Email</th>
                            <th scope="col" style="min-width: 95px ;text-align:center">Role</th>
                            @if(auth()->user()->s_role === 1)
                                <th scope="col" style="min-width: 95px ;text-align:center">Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($admins as $admin)
                            <tr style="background-color:#191C24">
                                <td>{{ $admin->name }}</td>
                                <td style="text-align: justify" >{{ $admin->email }}</td>
                                <td style="text-align: justify" >
                                    @if ($admin->s_role === 1 && $admin->role === 1)
                                        Super Admin
                                    @elseif ($admin->s_role === 0 && $admin->role === 1)
                                        Admin
                                    @else
                                        Not Admin
                                    @endif
                                </td>
                                <td style="text-align: center" >
                                    @if(auth()->user()->s_role === 1)
                                        @if ($admin->role === 0 )
                                            <form method="POST" action="{{ route('admin.make', ['id' => $admin->id]) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('PATCH') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-success btn-sm" title="Delete Album" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Accept
                                                </button>
                                            </form>
                                            <form method="POST" action="{{ route('admin.destroy', ['id' => $admin->id]) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Album" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Remove
                                                </button>
                                            </form>     
                                        @elseif ($admin->s_role === 0 && $admin->role === 1)  
                                            <form method="POST" action="{{ route('admin.destroy', ['id' => $admin->id]) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Album" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Remove
                                                </button>
                                            </form>
                                        @endif
                                    @endif                  
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
        </div>
    </div>
    <div class="col-12">
        <div class="bg-secondary rounded p-4">
            <h6 class="mb-4">Registerd Students</h6>
            <div class="table-responsive">
                <table class="table" id="std_tbl">
                    <thead>
                        <tr>
                            <th scope="col" style=" text-align:center">First Name</th>
                            <th scope="col" style=" text-align:center">Last Name</th>
                            <th scope="col" style="min-width: 150px ;text-align:center">Contact No</th>
                            <th scope="col" style="min-width: 100px ;text-align:center">Email</th>
                            <th scope="col" style="min-width: 95px ;text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                            <tr style="background-color:#191C24">
                                <td>{{ $student->f_name }}</td>
                                <td>{{ $student->l_name }}</td>
                                <td>{{ $student->contact_no }}</td>
                                <td>{{ $student->email }}</td>
                                <td style="text-align: center">
                                    <a href="mailto:{{ $student->email }}?from=your_email@example.com&subject=Rost Web" title="Edit Album"><button class="btn btn-info btn-sm"> Send Email</button></a>
                                    <form method="POST" action="{{ url('/admin123/users' . '/' . $student->id) }}" accept-charset="UTF-8" style="display:inline">
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
