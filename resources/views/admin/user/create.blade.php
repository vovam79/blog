@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add new Users</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                {{--<div class="row">
                    Add new Categories
                </div>--}}
                <form action="{{route('admin.user.store')}}" method="POST">
                    @csrf
                    <div class="row col-2">
                        <div class="form-group">
                            {{--<label for="exampleInputEmail1">Add new Categories</label>--}}
                            <input type="text" name="name" class="form-control" placeholder="Name User"
                                   value="{{old('name')}}">
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <select name="role_id" class="form-control">
                                @foreach($roles as $role)
                                    <option
                                        {{$role->id == old('role_id')?'selected':''}} value="{{$role->id}}">{{$role->title}}</option>
                                @endforeach
                            </select>
                            @error('role_id')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email"
                                   value="{{old('email')}}">
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        {{--<div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password"
                                   value="{{old('password')}}">
                            @error('password')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>--}}
                    </div>

                    <input type="submit" class="btn btn-primary" value="Save User">
                </form>
                <!-- /.row -->
                <!-- Main row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
