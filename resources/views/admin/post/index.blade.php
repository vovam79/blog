@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Posts</h1>
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
                <div class="row pb-3">
                    <div class="col-2">
                        <a href="{{route('admin.post.create')}}" class="btn btn-block btn-primary">Add new
                            post</a>
                    </div>
                </div>


                    <!-- /.card-header -->
                    <div class="row">
                        <div class="w-100">
                            <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Category </th>
                                        <th class="w-25">Preview image</th>
                                        <th class="w-25">Main image</th>
                                        <th colspan="3" class="text-center">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{$post->id}}</td>
                                            <td>{{$post->title}}</td>
                                            <td>{{$post->content}}</td>
                                            <td>{{$post->category_id}}</td>
                                            <td>{{$post->preview_image}}</td>
                                            <td>{{$post->main_image}}</td>
                                            <td>
                                                <a href="{{route('admin.post.show',$post->id)}}">
                                                    <i class="fa fa-regular fa-eye"></i>
                                                </a>
                                            </td>
                                            <td >
                                                <a href="{{route('admin.post.edit',$post->id)}}" class="text-success">
                                                    <i class="fa fa-solid fa-pen"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{route('admin.post.delete', $post->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border-0 bg-transparent">
                                                        <i class="fa fa-solid fa-trash text-danger"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <!-- /.row -->
                    <!-- Main row -->

                </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
