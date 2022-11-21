@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add new Posts</h1>
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


                <div class="row">
                    <div class="col-12 ">
                        <form action="{{route('admin.post.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group w-25">
                                {{--<label for="exampleInputEmail1">Add new Categories</label>--}}
                                <input type="text" name="title" class="form-control" placeholder="Name Post"
                                       value="{{old('title')}}">
                                @error('title')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                            <textarea id="summernote" name="content">
                                {{old('content')}}
                            </textarea>
                                @error('content')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>


                            <div class="form-group w-25">
                                <label>Add preview</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="preview_image" value="{{old('preview_image')}}">
                                        <label class="custom-file-label">Choose preview image</label>
                                    </div>
                                    {{--<div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>--}}
                                </div>
                                @error('preview_image')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group w-25">
                                <label>Add main image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="main_image" value="{{old('main_image')}}">
                                        <label class="custom-file-label">Choose main image</label>
                                    </div>
                                    {{--<div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>--}}
                                </div>
                                @error('main_image')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group w-25">
                                <select class="custom-select rounded-0" name="category_id">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                        {{$category->id ==old('category_id')? 'selected':''}}
                                    >{{$category->title}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label>Tags</label>
                                <select class="select2" name='tag_ids[]' multiple="multiple" data-placeholder="Select a Tags" style="width: 100%;">
                                    @foreach($tags as $tag)
                                        <option value="{{$tag->id}}"
                                            {{is_array(old('tag_ids'))&& in_array($tag->id, old('tag_ids'))?'selected':'' }}
                                        >{{$tag->title}}</option>
                                    @endforeach
                                </select>
                                @error('tag_ids')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Save post">
                            </div>
                        </form>

                    </div>

                </div>


                <!-- /.row -->
                <!-- Main row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
