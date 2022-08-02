@extends('layout')
    @section('content')
        
        <div class="post-page">
            <a class="back-link" href="/"><ion-icon name="chevron-back-outline"></ion-icon>Voltar</a>
            <div>
                <h1 class="post-title"> {{$post->title}} </h1>
                <div class="post-author"><p>por</p> &nbsp; <a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a>&nbsp;<p> em </p>&nbsp;<a href="/?category={{ $post->category->slug }}">{{$post->category->name}}</a></div>
                <p class="post-date">{{ $post->created_at->diffForHumans() }}</p>
            </div>
            <div class="post-excerpt"> {!! $post->body !!} </div>
            <img src="/images/img_test.png" alt="" height="250" width="250">
        </div>

        <div class="coment-container">
            <h2>Comentários:</h2>
            @auth
            <form method="POST" action="/posts/{{ $post->slug }}/comment" class="comment-form">
                @csrf
                <img src="https://i.pravatar.cc/70?img={{ auth()->user()->id }}" alt="{{ auth()->user()->name }}">
                <div class="comment-box">
                    <textarea required name="body" placeholder="Escreva um comentário..." rows="1"></textarea>
                    <button>Comentar</button>
                </div>
            </form>
            <hr>
            @else
            <hr>
            <h3><a class="login-link" href="/login">Faça login</a> para deixar um comentário</h3>
            <hr>
            @endauth
            @foreach ($comments as $comment)
            <article class="coment-box">
                <div>
                    <img src="https://i.pravatar.cc/70?img={{ $comment->author->id }}" alt="{{ $comment->author->name }}">
                </div>
                <div class="coment-text">
                    <header class="coment-header">
                        <h3><strong>{{ $comment->author->name }}</strong></h3>
                        <p class="post-date">{{ $comment->created_at->diffForHumans() }}</p>
                    </header>

                    <p>{{ $comment->body }}</p>
                </div>
            </article>
            <hr>
            @endforeach
            <div>
                {{ $comments->links('vendor.pagination.default') }}
            </div>
        </div>
    @endsection
