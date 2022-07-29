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

var success_msg = document. getElementById('success-msg');

function hidde_msg() {
    success_msg.style.display = "none";
}

if (success_msg) {
    setTimeout(hidde_msg, 5000)
}