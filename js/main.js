$(document).ready(function(){
    $('.navbar__burger').click(function(event){
        $('.navbar__burger, .navbar__items, .user_info').toggleClass('active');
    });
});
// $(document).ready(function(){
//     PopUpHide();
// });

$(document).ready(function(){
    $('.main__button').click(function(event){
        $('.main__modal, .main__modal_block').addClass('active');
    });
});
$(document).ready(function(){
    $('.close_btn').click(function(event){
        $('.main__modal').removeClass('active');
    });
});

$(document).ready(function(){
    $('.username').click(function(event){
        $('.dropdown-content').toggleClass('show');
    });
});

$(document).ready(function(){
    $('.navbar__burger').click(function(event){
        $('.dropdown-content').toggleClass('show');
    });
});


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

// function PopUpShow(){
//     $(".main__modal").show();
// }
// function PopUpHide(){
//     $(".main__modal").hide();
// }