@extends('person.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Comment {{$comment->id}}</h1>
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

                <form action="{{route('person.comment.update', $comment->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="row col-4">
                        <div class="form-group">
                            {{--<label for="exampleInputEmail1">Add new Categories</label>--}}
                            <input type="text" name="message" class="form-control"  value="{{$comment->message}}">
                            @error('message')
                             <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Update comment">
                </form>
                <!-- /.row -->
                <!-- Main row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
