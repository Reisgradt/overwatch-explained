//Событие, на нажатие кнопки пАтасовки
$(".scrimmage_rules_btn").click(function () {
    $(".scrimmage_review").slideUp();
    $(".scrimmage_rules").slideToggle();
});
$(".scrimmage_review_btn").click(function () {
    $(".scrimmage_rules").slideUp();
    $(".scrimmage_review").slideToggle();
});
