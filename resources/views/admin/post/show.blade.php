@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 ">
                    <div class="col-sm-6 d-flex align-items-center ">
                        <h1 class="m-0 mr-2">{{$post->title}}</h1>
                        <a href="{{route('admin.post.edit',$post->id)}}" class="text-success">
                            <i class="fa fa-solid fa-pen"></i>
                        </a>
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

                <!-- /.card-header -->
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <th>{{$post->id}}</th>
                                    </tr>
                                    <tr>
                                        <td>Title</td>
                                        <td>{{$post->title}}</td>
                                    </tr>
                                    <tr>
                                        <td>Category</td>
                                        <td>{{$post->category_id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Preview image</td>
                                        <td>{{$post->preview_image}}</td>
                                    </tr>
                                    <tr>
                                        <td>Main image</td>
                                        <td>{{$post->main_image}}</td>
                                    </tr>

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
