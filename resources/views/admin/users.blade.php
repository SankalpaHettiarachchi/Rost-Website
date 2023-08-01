@extends('admin.layout')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h4 class="mb-4">Page Admins</h4>
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
                                        <td style="text-align: justify" >
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
                    <hr>
                    <br>
                    <hr>
                    <br>
                    <hr>
                    <br>
                    <hr>
                    <br>
                    <h4 class="mb-4">Registered Students</h4>
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
                                        <td style="text-align: justify" >{{ $student->l_name }}</td>
                                        <td>{{ $student->contact_no }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>
                                            <a href="{{ route('news.show', $student->id) }}" title="Edit Album"><button class="btn btn-info btn-sm" onclick="return confirm(&quot;Confirm Edit?&quot;)"> Send Email</button></a>
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
    </div>   
@endsection
