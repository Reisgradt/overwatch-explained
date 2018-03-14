var updownElem = document.getElementById("updown");
var navList = document.getElementById("nav-list-js");
var mainNav = document.getElementById("main-nav-js");

var minHeight = 500;
var minWidth = 1200;
var scale = document.height;

$("#main-nav-js").ready(function () {
    navList.style.left = 0;
    $("#nav-list-js").removeClass('hidden');
    if (document.documentElement.clientWidth > 1200) {
        var scrolled = mainNav.getBoundingClientRect();
        scrolled = scrolled.left + pageXOffset;
        if (scrolled != 0) {
            navList.style.left = scrolled + "px";
        }
    }
});

window.onscroll = function () {

/*Всё это для скроллящей кнопочки вверх/вниз*/
    var scrolled = window.pageYOffset || document.documentElement.scrollTop;

    switch (updownElem.className) {
    case '':
        if (scrolled > 210) {
            updownElem.className = 'up';
        }
        break;

    case 'up':
        if (scrolled == 0) {
            updownElem.className = '';
        }
        break;

    case 'down':
        if (scrolled > 210) {
            updownElem.className = 'up';
        }
        break;
    }
}

var pageYLabel = 0;

updownElem.onclick = function () {
    var pageY = window.pageYOffset || document.documentElement.scrollTop;

    switch (this.className) {
    case 'up':
        pageYLabel = pageY;
        window.scrollTo(0, 0);
        this.className = 'down';
        break;

    case 'down':
        window.scrollTo(0, pageYLabel);
        this.className = 'up';
    }

}

window.onresize = function () {
    navList.style.left = 0;
    if (document.documentElement.clientWidth > 1200) {
        var scrolled = mainNav.getBoundingClientRect();
        scrolled = scrolled.left + pageXOffset;
        if (scrolled != 0) {
            navList.style.left = scrolled + "px";
        }
    }


}
