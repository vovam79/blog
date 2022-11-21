@extends('main.layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Blog</h1>
            <section class="featured-posts-section">

                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{asset('storage/'.$post->preview_image)}}" alt="blog post">
                        </div>

                        <div style="display: flex; justify-content:space-between">
                            <p class="blog-post-category">{{$post->category->title}}</p>

                            @auth()
                            <form action="{{route('post.like.store',$post->id)}}" method="POST">
                                @csrf
                                <span>{{$post->like_users_count}}</span>

                                    <button type="submit" class="border-0 bg-transparent">
                                    @if(auth()->user()->PostUserLike->contains($post->id))
                                        <i class="fas fa-heart"></i>
                                    @else
                                        <i class="far fa-heart"></i>
                                    @endif
                                    </button>

                            </form>
                            @endauth
                            @guest()
                                <div>
                                <span>{{$post->like_users_count}}</span>
                                <i class="far fa-heart"></i>
                                </div>
                            @endguest
                        </div>



                        <a href="{{route('post.show',$post->id)}}" class="blog-post-permalink">

                            <h6 class="blog-post-title">{{$post->title}}</h6>
                        </a>
                    </div>

                    @endforeach
                        <div class="mx-auto" style="margin-top: -80px">
                            {{$posts->links()}}
                        </div>
                </div>

            </section>

            <div class="row">
                <div class="col-md-8">
                    <section>
                        <div class="row blog-post-row">
                            @foreach($randomPosts as $ranPost)
                            <div class="col-md-6 blog-post" data-aos="fade-up">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{asset('storage/'.$ranPost->preview_image)}}" alt="blog post">
                                </div>
                                <p class="blog-post-category">{{$ranPost->category->title}}</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">{{$ranPost->title}}</h6>
                                </a>
                            </div>
                            @endforeach
                        </div>

                    </section>
                </div>
                <div class="col-md-4 sidebar" data-aos="fade-left">
                    <div class="widget widget-post-carousel">
                        <h5 class="widget-title">Post Lists</h5>
                        <div class="post-carousel">
                            <div id="carouselId" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselId" data-slide-to="1"></li>
                                    <li data-target="#carouselId" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <figure class="carousel-item active">
                                        <img src="{{asset('assets/images/blog_widget_carousel.jpg')}}" alt="First slide">
                                        <figcaption class="post-title">
                                            <a href="#!">Front becomes an official Instagram Marketing Partner</a>
                                        </figcaption>
                                    </figure>
                                    <figure class="carousel-item">
                                        <img src="assets/images/blog_7.jpg" alt="First slide">
                                        <figcaption class="post-title">
                                            <a href="#!">Front becomes an official Instagram Marketing Partner</a>
                                        </figcaption>
                                    </figure>
                                    <div class="carousel-item">
                                        <img src="assets/images/blog_5.jpg" alt="First slide">
                                        <figcaption class="post-title">
                                            <a href="#!">Front becomes an official Instagram Marketing Partner</a>
                                        </figcaption>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-post-list">
                        <h5 class="widget-title">Post List</h5>
                        <ul class="post-list">
                            @foreach($likePosts as $likePost )
                            <li class="post">
                                <a href="#!" class="post-permalink media">
                                    <img src="{{asset('storage/'.$likePost->main_image)}}" alt="blog post">
                                    <div class="media-body">
                                        <h6 class="post-title">{{$likePost->title}}</h6>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                        <h5 class="widget-title">Categories</h5>
                        <img src="{{asset('assets/images/blog_widget_categories.jpg')}}" alt="categories" class="w-100">
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
