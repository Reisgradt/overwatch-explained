var canvas = document.getElementById('modal-canvas');
var m_context = canvas.getContext('2d');
var profCanvas = document.getElementById('profCanvas');
var p_context = profCanvas.getContext('2d');

var img = new Image();
var profImg = new Image();

var rect = canvas.getBoundingClientRect();
var xImage = rect.left, yImage = rect.top;
//var canvasPosX = rect.left, canvasPosY = rect.top;
var x = 0, y = 0, dx = 0, dy = 0;
var scale = 1;

function handleFiles(files) {
    //var context = document.querySelector('canvas').getContext("2d");
    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var imageType = /^image\//;

        if (!imageType.test(file.type)) {
            continue;
        }

        img = new Image();
        img.file = file;
        img.src = URL.createObjectURL(file);
        //preview.appendChild(img); // Assuming that "preview" is the div output where the content will be displayed.

        var reader = new FileReader();
        reader.onload = (function (aImg) {
            return function (e) {
                $('.black-bg').show();
                $('.modal-block').show();
                scale = 1;


                m_context.clearRect(0, 0, canvas.width, canvas.height);
                m_context.width = m_context.width;
                m_context.drawImage(img,0,0,img.width,img.height);
            };
        })(img);

        reader.readAsDataURL(file);

    }
}
function drag() {
    if (xImage+dx*scale <= 0 && yImage+dy*scale <= 0 && -(xImage+dx*scale)+400 <= Math.floor(img.width*scale) && -(yImage+dy*scale)+400 <= Math.floor(img.height*scale)) {
        canvas.width = canvas.width;
        m_context.drawImage(img, xImage, yImage, Math.floor(img.width*scale), Math.floor(img.height*scale));
        xImage += dx*scale;
        yImage += dy*scale;
    }
}
function calcXY(evt) {
    dx = evt.clientX - x;
    dy = evt.clientY - y;
    x = evt.clientX;
    y = evt.clientY;
}


$('#modal-canvas').mousedown(function () {
    window.addEventListener('mousemove', drag);
});

window.addEventListener('mousemove', calcXY);

$('#modal-canvas').mouseup(function () {
    window.removeEventListener('mousemove', drag);
});

$('.black-bg').click(function () {
    $('.black-bg').hide();
    $('.modal-block').hide();
    window.removeEventListener('mousemove', drag);

    var canvasUrl = canvas.toDataURL();
    profImg.onload = function () {
        profCanvas.width = profCanvas.width;
        p_context.drawImage(profImg, 0, 0, 200, 200);
    }
    profImg.src = canvasUrl;
    canvasUrl = canvasUrl.replace(/data:image.*;base64,/, '');
    canvasUrl = canvasUrl.replace(/\s/g, '+');
    $('#b64img').val(canvasUrl);

});
$('#zoom-plus').click(function () {
    scale += 0.3;
    drag();
});
$('#zoom-sub').click(function () {
    scale -= 0.3;
    if (scale < 1) {
        scale = 1;
    }
    if (-(xImage)+400 > Math.floor(img.width*scale)) {
        xImage = Math.floor(img.width*scale) - 400 - 5;
    }
    if (-(yImage)+400 > Math.floor(img.height*scale)) {
        yImage = Math.floor(img.height*scale) - 400 - 5;
    }
    drag();
});
