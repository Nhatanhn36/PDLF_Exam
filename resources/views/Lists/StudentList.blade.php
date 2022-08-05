@extends('layout')

@section('title', "Category List")

@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Student List</h1>
        </div>
        <div class="col-sm-6">
            <a href="{{url("/student/create")}}"><button type="submit" class="btn btn-primary float-right">Add student</button></a>
        </div>
    </div>
@endsection

@section('main')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form method="get" action="{{url("/student/list")}}">
                    <div class="card-header">
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 900px;">
                                <input type="text" name="name" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>StudentID</th>
                            <th>StudentName</th>
                            <th>Age</th>
                            <th>Address</th>
                            <th>Telephone</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($student as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->age}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->telephone}}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $student->appends(app("request")->input())->links() !!}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
@endsection

