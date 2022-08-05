@extends("layout")
@section("content-header")
    <h1>Create a student
        <a href="{{url("/student/list")}}" class="btn btn-outline-info float-right">
            Back to list
        </a>
    </h1>
@endsection
@section("main")
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{url("/student/create")}}" enctype="multipart/form-data">
                    @csrf
                    @method("post")
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">StudentID</label>
                            <input value="{{old("id")}}" type="text" name="id" class="form-control" id="exampleInputEmail1" placeholder="Enter ID">
                            @error("id")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">StudentName</label>
                            <input value="{{old("name")}}" type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Enter Name">
                            @error("name")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Age</label>
                            <input value="{{old("age")}}" type="text" name="age" class="form-control" id="exampleInputPassword1" placeholder="Enter Age">
                            @error("age")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address</label>
                            <input value="{{old("address")}}" type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Enter Address">
                            @error("address")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Telephone</label>
                            <input value="{{old("name")}}" type="text" name="telephone" class="form-control" id="exampleInputPassword1" placeholder="Enter Telephone">
                            @error("telephone")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

