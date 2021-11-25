@extends('backend.layouts.master')
@section('title','Admin')
@section('backend.category.detail')
    <style>
        th{
            text-align: center;
            color: #28a745;
        }
        button{
            margin: 5px;
        }
    </style>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Category Detail</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>image</th>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td><img style="width: 100px; height: 100px" src="img/{{$category->image}}" alt=""></td>
                        <td>{{$category["name"]}}</td>
                        <td><textarea name="" id="" cols="45" rows="10">{{$category->description}}</textarea></td>
{{--                        <td>{{$category["description"]}}</td>--}}
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
