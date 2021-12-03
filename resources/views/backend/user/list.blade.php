{{--{{dd($users)}}--}}

@extends('backend.layouts.master')
{{--@section('title','Admin')--}}
@section('content')
    <style>
        th{
            text-align: center;
            color: #28a745;
        }
        button{
            margin: 10px;
            border-radius: 5px;
            background-color: #28a745;
        }
    </style>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
{{--                <a href="{{route("users.list")}}"><button>CREATE CATEGORY</button></a>--}}
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th colspan="3">Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th colspan="3">Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($users as $key => $user)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->phone}}</td>
                            <td>
                                @if(count($user->roles) > 0)
                                    @foreach($user->roles as $role)
                                        <p>{{$role->name}}</p>
                                    @endforeach
                                @else
                                    <p>Chưa được phân quyền</p>
                                @endif
                            </td>
                            <td>{{$user->email}}</td>
                            <td><img style="width: 300px; height: 150px" src="{{asset('img/'.$user->image)}}" alt=""></td>
                            <td><a class="btn btn-warning" href="{{route('users.detail',$user->id)}}">Detail</a></td>
                            <td><a class="btn btn-success" href="{{route('users.update',$user->id)}}">Update</a></td>
                            <td><a class="btn btn-danger" onclick="return confirm('Are you sure ??')" href="{{route('users.delete',$user->id)}}"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection







