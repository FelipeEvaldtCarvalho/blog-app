@extends('layout')


@section('content')
    <div>
        <x-search
        />
    </div>

    @foreach ($posts as $post)
        <div class="admin-post-div">
            <div class="admin-post-image ">
                <img src="{{ asset("thumbs/$post->thumb") }}" height="90px">
            </div>
            <div class="admin-post-resume">
                <a class="admin-post-title" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                <p class="post-date">{{ $post->created_at->diffForHumans() }}</p>
                <div class="post-author"><p>Categoria:</p> &nbsp; <a href="/categories/{{ $post->category->slug }}">{{$post->category->name}}</a></div>
            </div>
            <div>
                <a class="btn-search" href="/admin/posts/{{ $post->id }}/edit">Editar</a>
            </div>
            <div>
                <form action="/admin/posts/{{ $post->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn-search" ><ion-icon name="trash-outline"></ion-icon></button>
                </form>
            </div>
        </div>
    @endforeach
    <div>
        {{ $posts->links('vendor.pagination.default') }}
    </div>

@endsection
