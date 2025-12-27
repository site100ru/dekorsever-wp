/* Parallax home section */
$(window).scroll(function(e){
	var scrolled = $(window).scrollTop();
	$('.parallax-home-section').css('top',(-(scrolled*.35) )+'px'); // 35 - скорость прокрутки
});
/* End parallax home section */



/* Функция "Выезжало */	
function vyezjalo(){
    var slidingHeader = document.getElementById('sliding-header');
    if (!slidingHeader) return;
    
    onscroll = function(){
        var prokrutka = window.pageYOffset;
        
        if (window.screen.width >= 992) {
            if (prokrutka > 400) {
                slidingHeader.style.top = '0px';
                slidingHeader.classList.add('show');
            } else if (prokrutka <= 400) {
                slidingHeader.style.top = '-100px';
                slidingHeader.classList.remove('show');
            }
        }
    }
}



/* Функция "Прилипало" */
function prilipalo() {
    var topMenu = document.getElementById('top-menu-2');
    if (!topMenu) return;
    
    let lastScrollTop = 0;
    
    window.addEventListener('scroll', function() {
        var prokrutka = window.pageYOffset;
        
        // Закрываем подменю при скролле на мобильных
        if (window.innerWidth < 992) {
            const scrollDifference = Math.abs(prokrutka - lastScrollTop);
            
            if (scrollDifference > 5) {
                // Закрываем основное меню
                const openNavbar = document.querySelector('.navbar-collapse.show');
                if (openNavbar) {
                    const collapseInstance = bootstrap.Collapse.getOrCreateInstance(openNavbar);
                    collapseInstance.hide();
                }
                
                // Закрываем dropdown меню
                const openDropdowns = document.querySelectorAll('.dropdown-menu.show');
                openDropdowns.forEach(dropdown => {
                    const dropdownToggle = dropdown.previousElementSibling;
                    if (dropdownToggle) {
                        const dropdownInstance = bootstrap.Dropdown.getOrCreateInstance(dropdownToggle);
                        dropdownInstance.hide();
                    }
                });
            }
        }
        
        lastScrollTop = prokrutka;
        
        // Оригинальная логика прилипания
        if (window.innerWidth >= 769) {
            if (prokrutka > 50) {
                topMenu.classList.add('fixed-top');
                topMenu.style.position = 'fixed';
                topMenu.style.top = 0;
                topMenu.classList.add('show');
            } else {
                topMenu.classList.remove('fixed-top');
                topMenu.style.position = 'absolute';
                topMenu.style.top = '57px';
                topMenu.classList.remove('show');
            }
        } else {
            topMenu.style.position = '';
            topMenu.style.top = 0;
            topMenu.classList.add('fixed-top');
            topMenu.classList.remove('show');
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