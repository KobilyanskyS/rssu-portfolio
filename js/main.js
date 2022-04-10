$(document).ready(function(){
    // Добавляет и убирает класс active у меню-бургера при нажатии на него,
    // у навигации на странице авторизации
    $('.navbar__burger').click(function(event){
        $('.navbar__burger, .navbar__items, .user_info').toggleClass('active');
    });
    // Добавляет класс active для модального окна авторизации на странице авторизации
    $('.main__button').click(function(event){
        $('.main__modal, .main__modal_block').addClass('active');
    });
    // Удаляет класс active у модального окна авторизации на странице авторизации при нажатии на крестик
    $('.close_btn').click(function(event){
        $('.main__modal').removeClass('active');
    });
    // Добавляет и убирает класс show у всплывающего меню на главной странице
    $('.username').click(function(event){
        $('.dropdown-content').toggleClass('show');
    });
    // При нажатии на меню-бургер добавляет и убирает класс show у всплывающего окна
    // А также добавляет и убирает у body класс stop-scrolling, который убирает скролл, когда меню активно
    $('.navbar__burger').click(function(event){
        $('.dropdown-content').toggleClass('show');
        $('body').toggleClass('stop-scrolling');
    });
});


////// Возможность зафиксировать меню при прокрутке //////

// $(document).on('wheel', function(e){
// 	if (e.originalEvent.wheelDelta >= 0) {
// 		$('.header').addClass('fixed');
//         $('.profiles').addClass('m_top');
// 	} else {
// 		$('.header').removeClass('fixed');
//         $('.profiles').removeClass('m_top');
// 	}
// });

// var last;
// $(document).bind('touchmove', function(e){
// 	 var current = e.originalEvent.touches[0].clientY;
// 	 if(current > last){
//         $('.header').addClass('fixed');
//         $('.profiles').addClass('m_top');
// 	 } else if(current < last){
// 		$('.header').removeClass('fixed');
//         $('.profiles').removeClass('m_top');
// 	 }
// 	 last = current;
// });


// Делает ввод пароля видимым (иконка глаза)
$(document).ready(function(){
    $('.password-control').click(
        function(event){
            if ($('#password-input').attr('type') == 'password'){
                $(this).addClass('view');
                $('#password-input').attr('type', 'text');
            } else {
                $(this).removeClass('view');
                $('#password-input').attr('type', 'password');
            }
            return false;
        }
    )
});