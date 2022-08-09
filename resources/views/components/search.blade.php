
<div class="filter-container">
    <form action="/admin/posts" method="GET">
        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <div class="comment-box">
            <input
                type="text"
                name="search"
                id="search"
                placeholder="Pesquisar"
                value="{{ request('search')}}"
            >
            <button class="btn-search">
                <ion-icon
                    name="search-outline"
                >
                </ion-icon>
            </button>
        </div>
    </form>
</div>
