/* Parallax home section */
$(window).scroll(function(e){
	var scrolled = $(window).scrollTop();
	$('.parallax-home-section').css('top',(-(scrolled*.35) )+'px'); // 35 - скорость прокрутки
});
/* End parallax home section */



/* Функция "Выезжало */	
function vyezjalo(){
	onscroll = function(){
		var prokrutka = window.pageYOffset;
		if ( window.screen.width >= 992 ) {
			if ( prokrutka > 400) {
				document.getElementById('sliding-header').style.top = '0px';
			} else if ( prokrutka <= 400 ) {
				document.getElementById('sliding-header').style.top = '-100px';
			}
		}
	}
}



/* Функция "Прилипало" */
function prilipalo() {
    let lastScrollTop = 0;
    
    window.addEventListener('scroll', function() {
        var prokrutka = window.pageYOffset;
        
        // Закрываем подменю при скролле на мобильных
        if (window.innerWidth < 992) {
            // Проверяем, прокрутили ли больше 5 пикселей
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
                document.getElementById('top-menu-2').classList.add('fixed-top');
                document.getElementById('top-menu-2').style.position = 'fixed';
                document.getElementById('top-menu-2').style.top = 0;
            } else {
                document.getElementById('top-menu-2').classList.remove('fixed-top');
                document.getElementById('top-menu-2').style.position = 'absolute';
                document.getElementById('top-menu-2').style.top = '57px';
            }
        } else {
            document.getElementById('top-menu-2').style.position = '';
            document.getElementById('top-menu-2').style.top = 0;
            document.getElementById('top-menu-2').classList.add('fixed-top');
        }
    });
}ы



/* Убираем сообщение об успешной отправки */
function modalClose () {
	document.getElementById('background-msg').style.display = 'none';
	document.getElementById('message').style.display = 'none';
	document.getElementById('btn-close').style.display = 'none';
}