@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Post</h1>
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
                <form action="{{route('admin.post.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row col-4">
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Name Category" value="{{$post->title}}">
                            @error('title')
                             <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group w-50">
                            <textarea id="summernote" name="content">
                                {{$post->content}}
                            </textarea>
                        @error('content')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group w-25">
                        <label>Add preview</label>
                        <div class="w-100 mb-3">
                            <img class="w-100" src="{{asset('storage/'.$post->preview_image)}}" alt="preview_image">
                        </div>
                        <div class="input-group">
                            <div class="custom-file">

                                <input type="file" class="custom-file-input" name="preview_image" value="{{$post->preview_image}}">
                                <label class="custom-file-label">Choose preview image</label>
                            </div>
                        </div>
                        @error('preview_image')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group w-25">
                        <label>Add main image</label>
                        <div class="w-100 mb-3">
                            <img class="w-100" src="{{asset('storage/'.$post->main_image)}}" alt="main_image">
                        </div>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="main_image" value="{{$post->main_image}}">
                                <label class="custom-file-label">Choose main image</label>
                            </div>
                        </div>
                        @error('main_image')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group w-25">
                        <select class="custom-select rounded-0" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"
                                    {{$category->id == $post->category_id? 'selected':''}}
                                >{{$category->title}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tags</label>
                        <select class="select2" name='tag_ids[]' multiple="multiple" data-placeholder="Select a Tags" style="width: 100%;">
                            @foreach($tags as $tag)
                            <option value="{{$tag->id}}"
                            {{is_array($post->tags->pluck('id')->toArray())&& in_array($tag->id, $post->tags->pluck('id')->toArray())?'selected':'' }}
                            >{{$tag->title}}</option>
                            @endforeach
                        </select>
                        @error('tag_ids')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <input type="submit" class="btn btn-primary" value="Update post">
                </form>
                <!-- /.row -->
                <!-- Main row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
