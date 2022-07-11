@extends('layout')
    @section('content')
        
        <div class="post-page">
            <a class="back-link" href="/"><ion-icon name="chevron-back-outline"></ion-icon>Voltar</a>
            <div>
                <h1 class="post-title"> {{$post->title}} </h1>
                <div class="post-author"><p>por</p> &nbsp; <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a>&nbsp;<p> em </p>&nbsp;<a href="/categories/{{ $post->category->slug }}">{{$post->category->name}}</a></div>
                <p class="post-date">{{ $post->created_at->diffForHumans() }}</p>
            </div>
            <p class="post-excerpt"> {{ $post->body }} </p>
            <img src="/images/img_test.png" alt="" height="250" width="250">
        </div>
    @endsection