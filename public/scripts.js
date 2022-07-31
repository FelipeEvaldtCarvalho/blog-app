var category_filter = document.getElementById('category-filter');

try {
    category_filter.onchange = function(){
        var goto = this.value;
        window.location.href = goto;
    }
} catch (error) {
    console.log(error)
}

var author_filter = document.getElementById('author-filter');

try {
    author_filter.onchange = function(){
        var goto = this.value;
        window.location.href = goto;
    }
} catch (error) {
    console.log(error)
}


var success_msg = document. getElementById('success-msg');

function hidde_msg() {
    success_msg.style.display = "none";
}

if (success_msg) {
    setTimeout(hidde_msg, 5000)
}

var acc_opt = document.getElementById('account-opt');
var acc_button = document.getElementById('acc-btn');
var acc_opt_visible = false;

function show_acc_opt () {
    acc_opt_visible = !acc_opt_visible;

    if( acc_opt_visible ) {
        return acc_opt.style.display = "flex";
    } else {
        return acc_opt.style.display = "none";
    }
}

acc_button.onclick = show_acc_opt;