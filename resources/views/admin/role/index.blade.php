@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Roles</h1>
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
                        <a href="{{route('admin.role.create')}}" class="btn btn-block btn-primary">Add new
                            role</a>
                    </div>
                </div>


                    <!-- /.card-header -->
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th colspan="2" class="text-center">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($roles as $role)
                                        <tr>
                                            <td>{{$role->id}}</td>
                                            <td>{{$role->title}}</td>
                                            <td>
                                                <a href="{{route('admin.role.show',$role->id)}}">
                                                    <i class="fa fa-regular fa-eye"></i>
                                                </a>
                                            </td>
                                            <td >
                                                <a href="{{route('admin.role.edit',$role->id)}}" class="text-success">
                                                    <i class="fa fa-solid fa-pen"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{route('admin.role.delete', $role->id)}}" method="POST">
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
