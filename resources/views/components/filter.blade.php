@props(['categories', 'authors', 'currentCategory', 'currentAuthor'])
<div class="filter-container">
    <div>
        <select name="category-filter" id="category-filter">
            @if($currentCategory)
            <option value="/">Categorias</option>
            @else
            <option value="/" selected>Categorias</option>
            @endif
            @foreach ($categories as $category)
            <option 
                value="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category')) }}"
                @if($currentCategory)
                @if ($currentCategory->slug == $category->slug)
                selected
                @endif
                @endif
            >
                {{ $category->name }}
            </option>
            @endforeach
        </select>   
    </div>
    <div>
        <select name="author-filter" id="author-filter">
            @if($currentAuthor)
            <option value="/">Autores</option>
            @else
            <option value="/" selected>Autores</option>
            @endif
            @foreach ($authors as $author)
            <option 
                value="/?author={{ $author->username }}&{{ http_build_query(request()->except('author')) }}"
                @if($currentAuthor)
                @if ($currentAuthor->name == $author->name)
                selected
                @endif
                @endif
            >
                {{ $author->name }}
            </option>
            @endforeach
        </select> 
    </div>
    <div>
        <form action="/" method="GET">
            @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <input 
                type="text" 
                name="search" 
                id="search" 
                placeholder="Pesquisar" 
                value="{{ request('search')}}"
            >
            <button>
                <ion-icon 
                    name="search-outline"
                >
                </ion-icon>
            </button>
        </form>
    </div>
    
</div>