@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add new Tag</h1>
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
                <form action="{{route('admin.tag.store')}}" method="POST">
                    @csrf
                    <div class="row col-4">
                        <div class="form-group">
                            {{--<label for="exampleInputEmail1">Add new Categories</label>--}}
                            <input type="text" name="title" class="form-control" placeholder="Name Tag">
                            @error('title')
                             <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Save tag">
                </form>
                <!-- /.row -->
                <!-- Main row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
