var category_filter = document.getElementById('category-filter');

category_filter.onchange = function(){
    var goto = this.value;
    window.location.href = goto;
}

var author_filter = document.getElementById('author-filter');

author_filter.onchange = function(){
    var goto = this.value;
    window.location.href = goto;
}