document.toggle = function(source, menu_id, css_class){
    var menu = document.getElementById(menu_id);
    menu.classList.toggle(css_class);
    source.classList.toggle(css_class);
}