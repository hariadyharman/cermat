@extends('layout.main')
@section('container')
    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/500x400/?{{ $posts[0]->category->name }}"class="card-img-top "
                alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
                <h3 class="card-title">{{ $posts[0]->title }}</h3>
                <p><small>
                        by. <a
                            href="/authors/{{ $posts[0]->author->username }}"class="text-decoration-none">{{ $posts[0]->author->name }}
                        </a>
                        in <a
                            href="/categories/{{ $posts[0]->category->slug }}"class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>

                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">read more....</a>
            </div>
        </div>
    @else
        <p class="text-centre fs-4">not found post</p>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <div class="card">
                    <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}" class="card-img-top"
                        alt="{{ $post->category->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>

    </div>


    @foreach ($posts->skip(1) as $post)
        <article class="mb-3 border-bottom pb-3">

            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none"> {{ $post->title }}
                </a>
            </h2>


            <p>by. <a href="/authors/{{ $post->author->username }}"class="text-decoration-none">{{ $post->author->name }}
                </a>
                in <a
                    href="/categories/{{ $post->category->slug }}"class="text-decoration-none">{{ $post->category->name }}</a>
            </p>

            <p>{!! $post->excerpt !!}</p>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">read more....</a>

        </article>
    @endforeach
@endsection
