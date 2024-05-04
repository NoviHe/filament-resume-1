$(document).ready(function() {
    $(".lightSlider").lightSlider({
        item:3,
        auto:true,
        loop:true,
        pauseOnHover: true,
        slideMove:1,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed:600,
        adaptiveHeight:true,
        responsive : [
            {
                breakpoint:800,
                settings: {
                    item:2,
                    slideMove:1,
                    slideMargin:6,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:1,
                    slideMove:1
                  }
            }
        ]
    });  
});

$(document).ready(function(){
    $('#button').on('click',function(){
        let send_mail
        let name = $('#name').val();
        let email = $('#email').val();
        let subject = $('#subject').val();
        let message = $('#message').val();
        if (name != 0) {
            send_mail = 'mailto:noovv9@gmail.com?subject='+subject+'&body=Hi,I am '+name+'. '+message;
        } else {
            send_mail = 'mailto:noovv9@gmail.com';
        }
        location.href = send_mail;
    })
});