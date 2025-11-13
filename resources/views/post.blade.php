@extends('layout.main')
@section('container')
    <article>

        <h1> {{ $post->title }}</h1>
        <p>by. <a href="/authors/{{ $post->author->username }}"class="text-decoration-none">{{ $post->author->name }} </a>
            in <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none">{{ $post->category->name }}</a>
        </p>

        <p>{!! $post->body !!}</p>

    </article>
    <a href="/posts" class="d-block mt-5">back to post</a>
@endsection
