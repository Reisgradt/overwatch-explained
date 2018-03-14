var lp_effect_time = 300;

var $lp_btn_search = $(".btn-search");
var $lp_btn_heroes = $(".btn-heroes");
var $lp_btn_tournamets=$(".btn-tournamets");

var $lp_content_search = $(".btn-content-search");
var $lp_content_heroes = $(".btn-content-heroes");
var $lp_content_tournamets=$(".btn-content-tournamets")

//Событие, на нажатие кнопки поиска
$lp_btn_search.click(function () {
    $lp_content_heroes.hide();
    $lp_content_tournamets.hide();
    $lp_btn_heroes.removeClass("btn-nav-or").addClass("btn-nav");
    $lp_btn_tournamets.removeClass("btn-nav-or").addClass("btn-nav");

    $lp_content_search.toggle(lp_effect_time);
    $lp_btn_search.toggleClass("btn-nav").toggleClass("btn-nav-or");
});


//Событие, на нажатие кнопки героев
$lp_btn_heroes.click(function () {
    $lp_content_search.hide();
    $lp_content_tournamets.hide();
    $lp_btn_search.removeClass("btn-nav-or").addClass("btn-nav");
    $lp_btn_tournamets.removeClass("btn-nav-or").addClass("btn-nav");

    $lp_content_heroes.find('*').fadeTo(200, 0);
    $lp_content_heroes.toggle(lp_effect_time);
    $lp_btn_heroes.toggleClass("btn-nav").toggleClass("btn-nav-or");
    $lp_content_heroes.find('*').fadeTo(lp_effect_time, 1);
});

//Событие, на нажатие кнопки турниров
$lp_btn_tournamets.click(function () {
    $lp_content_heroes.hide();
    $lp_content_search.hide();
    $lp_btn_heroes.removeClass("btn-nav-or").addClass("btn-nav");
    $lp_btn_search.removeClass("btn-nav-or").addClass("btn-nav");

    $lp_content_tournamets.toggle(lp_effect_time);
    $lp_btn_tournamets.toggleClass("btn-nav").toggleClass("btn-nav-or");
});


//Убирает все окошки при щелчке вне навигационной панели
$(".content-wrapper").click(function () {
    $lp_content_search.hide();
    $lp_content_heroes.hide();
    $lp_content_tournamets.hide();

    $lp_btn_search.removeClass("btn-nav-or").addClass("btn-nav");
    $lp_btn_heroes.removeClass("btn-nav-or").addClass("btn-nav");
    $lp_btn_tournamets.removeClass("btn-nav-or").addClass("btn-nav");
});
