@extends('layout')

@section('content')
    @if (Request::path() == '/')
        <x-filter :categories="$categories"></x-filter>
    @endif

    @foreach ($posts as $post)
        <div class="post-div">
            <div class="post-image">
                <img src="/images/img_test.png" alt="">
            </div>
            <div class="post-resume">
                <p class="post-date">{{ $post->created_at->diffForHumans() }}</p>
                <a class="post-title" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                <p class="post-excerpt"> {{ $post->excerpt }} ...</p>
                <div class="post-author"><p>por</p> &nbsp; <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a>&nbsp;<p> em </p>&nbsp;<a href="/categories/{{ $post->category->slug }}">{{$post->category->name}}</a></div>
            </div>
        </div>
    @endforeach

@endsection