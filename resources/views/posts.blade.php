@extends('layout')


@section('content')
        <div>
            <x-filter 
                :categories="$categories" 
                :authors="$authors"
                :currentCategory="$currentCategory" 
                :currentAuthor="$currentAuthor"
            />
        </div>

    @foreach ($posts as $post)
        <div class="post-div">
            <div class="post-image">
                <img src="/images/img_test.png" alt="">
            </div>
            <div class="post-resume">
                <p class="post-date">{{ $post->created_at->diffForHumans() }}</p>
                <a class="post-title" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                <div class="post-excerpt"> {!! $post->excerpt !!} </div>
                <div class="post-author"><p>por</p> &nbsp; <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a>&nbsp;<p> em </p>&nbsp;<a href="/categories/{{ $post->category->slug }}">{{$post->category->name}}</a></div>
            </div>
        </div>
    @endforeach
    <div>
        {{ $posts->links('vendor.pagination.default') }}
    </div>

@endsection