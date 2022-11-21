@extends('main.layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Categories</h1>
            <section class="featured-posts-section">

                <div class="row">

                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                       <ui>
                           @foreach($categories as $category)
                           <li><a href="{{route('category.post.index', $category->id)}}">{{$category->title}}</a></li>
                           @endforeach
                       </ui>
                    </div>



                </div>

            </section>



        </div>

    </main>
@endsection
