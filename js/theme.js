/* Parallax home section */
$(window).scroll(function (e) {
    var scrolled = $(window).scrollTop();
    $('.parallax-home-section').css('top', (-(scrolled * .35)) + 'px'); // 35 - скорость прокрутки
    $('.parallax-home-section-closets').css('top', (-(scrolled * .35)) + 'px'); // 35 - скорость прокрутки
});
/* End parallax home section */

/* Функция "Выезжало" */
function vyezjalo() {
    window.addEventListener('scroll', function() {
        var slidingHeader = document.getElementById('sliding-header');
        if (!slidingHeader) return;

        var prokrutka = window.pageYOffset;
        var screenWidth = window.innerWidth;  

        if (screenWidth >= 992) {  
            if (prokrutka > 400) {
                slidingHeader.style.top = '0px';
                slidingHeader.classList.add('show');
            } else if (prokrutka <= 400) {
                slidingHeader.style.top = '-100px';
                slidingHeader.classList.remove('show');
            }
        }
    });
}

/* Функция "Прилипало" */
function prilipalo() {
    window.addEventListener('scroll', function() {
        var prokrutka = window.pageYOffset;
        var screenWidth = window.innerWidth;
        const topMenu = document.getElementById('top-menu-2');

        if (!topMenu) {
            return;
        }

        if (screenWidth >= 992) {
            if (prokrutka > 57) {
                document.getElementById('top-menu-2').classList.add('fixed-top');
                document.getElementById('top-menu-2').style.position = 'fixed';
                document.getElementById('top-menu-2').style.top = 0;
            } else {
                document.getElementById('top-menu-2').classList.remove('fixed-top');
                document.getElementById('top-menu-2').style.position = 'absolute';
                document.getElementById('top-menu-2').style.top = '57px';
            }
        } 
    });
}




/* Убираем сообщение об успешной отправки */
function modalClose() {
    var backgroundMsg = document.getElementById('background-msg');
    var message = document.getElementById('message');
    var btnClose = document.getElementById('btn-close');
    
    if (backgroundMsg) backgroundMsg.style.display = 'none';
    if (message) message.style.display = 'none';
    if (btnClose) btnClose.style.display = 'none';
}