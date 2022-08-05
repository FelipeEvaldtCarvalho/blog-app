@extends('layout')

@section('content')
<div class="form-container">
    <a class="back-link register-back" href="/"><ion-icon name="chevron-back-outline"></ion-icon>Voltar</a>
    <div class="register-form">
        <form class="form-box" method="POST" action="/admin/posts/store">
            @csrf
            <div class="form-title">
                <img src="/images/post.png" height="200px">
                <h2 class="m-t">Crie sua Publicação</h2>
            </div>
            <div class="form-group">
                <label for="title">Titulo</label>
                <input type="text" name="title">
                @error('title')
                <p class="error-msg">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="category_id">Categoria</label>
                <select name="category_id">
                    <option value="0">Selecione...</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category_id')
                <p class="error-msg">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Texto</label>
                <textarea name="body" rows="7"></textarea>
                @error('body')
                <p class="error-msg">{{ $message }}</p>
                @enderror
            </div>
            <div class="button-group">
                <button class="btn-register" type="submit">Postar</button>
            </div>

        </form>
    </div>
</div>
@endsection