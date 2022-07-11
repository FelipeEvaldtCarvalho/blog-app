@props(['categories'])
<div class="filter-container">
    <div x-data="{ show: false }">
        <button @click="show = !show">Categorias</button>
        <div x-show="show">
            <a href="#" class="block">teste</a>
            <a href="#" class="block">teste2</a>
            <a href="#" class="block">teste3</a>
        </div>
        

        {{-- <select name="category-filter" id="category-filter">
            <option value="category" disabled selected>Categorias</option>
            @foreach ($categories as $category)
            <option value="{{ $category->slug }}">{{ $category->name }}</option>
            @endforeach
            
        </select>  --}}  
    </div>
    <div>
        <select name="author-filter" id="author-filter">
            <option value="0">Autor</option>
            <option value="1">tyeste</option>
            <option value="2">tyeste2</option>
            <option value="3">tyeste3</option>
            <option value="4">4</option>
        </select>   
    </div>
    <div>
        <input type="text" name="search-filter" id="search-filter">
        <button><ion-icon name="search-outline"></ion-icon></button>
    </div>
    
</div>