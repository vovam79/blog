@extends('person.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Comment Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('person.main.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">{{auth()->user()->email}}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="w-50">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Post Id</th>
                                    <th>Message</th>
                                    <th colspan="3" class="text-center">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $comment)
                                    <tr>
                                        <td>{{$comment->id}}</td>
                                        <td>{{$comment->post_id}}</td>
                                        <td>{{$comment->message}}</td>

                                        <td>
                                            <a href="{{route('person.comment.show',$comment->id)}}">
                                                <i class="fa fa-regular fa-eye"></i>
                                            </a>
                                        </td>

                                        <td>
                                            <a href="{{route('person.comment.edit',$comment->id)}}">
                                                <i class="fa fa-solid fa-pen"></i>
                                            </a>
                                        </td>

                                        <td>
                                            <form action="{{route('person.comment.delete', $comment->id)}}" method="POST">
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
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
