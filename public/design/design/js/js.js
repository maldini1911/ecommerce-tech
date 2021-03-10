/*global $, document, window*/

$(document).ready(function () {
    "use strict";

    var menu         =   $(".toggle-menu .menu"),
        pop          =   $(".pop"),
        popNav       =   $(".pop nav"),
        navBar       =   $(".nav-bar"),
        viewCart     =   $(".view-cart"),
        cartProducts =   $(".view-cart .in-cart .row"),
		headerSlider =   $(".header-slider"),
		headerImg    =   $(".header-img"),
        responsive   =   $(".responsive"),
        scroll       =   $(".scroll"),
        underScroll  =   $(".under-scroll"),
        moreProducts =   $(".more-products"),
		left         =   $(".split-text .left"),
		right        =   $(".split-text .right"),
		scrollTop    =   $(".scrollTop"),
		bulb         =   $(".bulb");


	/* change nav-bar theme */

	$(".bulb i").click(function () {

		navBar.toggleClass("dark-nav-bar");
		$(this).toggleClass("dark-bulb");
	});

	/* end change nav-bar theme */

    /*form*/

    $(".login-form .message a").click(function (e) {

        e.preventDefault();
        $(".login-page").hide();
        $(".up").show();

    });

    $(".up .back").click(function (e) {

        e.preventDefault();
        $(".login-page").show();
        $(".up").hide();

    });

    /*end form*/

    /*nav-bar scrolled*/

    $(window).scroll(function () {

        if ($(this).scrollTop() >= 100) {

            $(navBar).addClass("scrolled");

            if (navBar.hasClass("dark-nav-bar")) {
				$(".dark-nav-bar").addClass("dark-scrolled");
			}

        } else {
            $(navBar).removeClass("scrolled");

			if (navBar.hasClass("dark-nav-bar")) {
				$(".dark-nav-bar").removeClass("dark-scrolled");
			}
        }

    });

    /*end nav-bar scrolled*/


    /* main-bgcolor on nav button*/

    $(".nav-bar .nav > li").mouseover(function () {

        $(this).addClass("main-bgcolor");

    });

    $(".nav-bar .nav > li").mouseleave(function () {

        $(this).removeClass("main-bgcolor");

    });

    /* end main-bgcolor on nav button*/

    //counting on cart

    $(".nav .cart span").text(cartProducts.length);

    //end counting on cart

    //cart show and hide

    $(".close i").click(function () {

        viewCart.animate({
            right: "-500px",
            opacity: "0"
        });

    });

    $(document).keydown(function (e) {
        if (e.keyCode === 27) {

            viewCart.animate({
                right: "-500px",
                opacity: "0"
            });

        }
    });

    $(".cart").click(function () {

        viewCart.animate({
            right: "0px",
            opacity: "1"
        });

    });

    $(document).on("click", ".view-cart .in-cart .delete", function () {

        $(this).parent(".row").remove();

        cartProducts.length = cartProducts.length - 1;
        $(".nav .cart span").text(cartProducts.length);

    });


    //end cart show and hide


     // trigger smooth scroll

    $(".view-cart").niceScroll({

        cursorcolor: "#fff",
        cursorwidth: "15",
        cursorborder: "none",
        cursorheight: "30",
        scrollspeed: "1"

    });


    // menu and popup
    menu.click(function () {

        if (menu.hasClass("fa-bars")) {

            $(pop).show(0);

            $(popNav).css({
                top: "50px",
                transform: "scale(1)"
            });

            $(this).delay(1000).removeClass("fa-bars");
            $(this).addClass("fa-long-arrow-left");

        } else if (menu.hasClass("fa-long-arrow-left")) {
            $(pop).hide(0);

            $(popNav).css({
                top: "150px",
                transform: "scale(.5)"
            });


            $(this).delay(1000).removeClass("fa-long-arrow-left");
            $(this).addClass("fa-bars");
        }

    });
    // end menu and popup


    /* header slider*/

    $('header .bxslider').bxSlider({
        pager: false,
        auto: true,
        speed: 1000,
        pause: 5000
    });

    /* end header slider*/

    /* start header scroll*/

    $(window).scroll(function () {

        if ($(this).scrollTop() >= 700) {

            $("header .scroll .overlay").css("opacity", "1");
            $("header .scroll .overlay p").css({

                opacity: "1",
                top: "600px"

            });

        } else {
            $("header .scroll .overlay").css("opacity", "0");
            $("header .scroll .overlay p").css({

                opacity: "0",
                top: "100px"

            });
        }

    });

    $("header i").click(function () {

        $("html, body").animate({
            scrollTop: "950"
        }, 1000);

    });

    /* end header scroll*/

	// show scroll button

	$(window).scroll(function () {

		if ($(window).scrollTop() >= 1000) {
            if (scrollTop.is(":hidden")) {

                scrollTop.fadeIn();
            }
        } else {

            scrollTop.fadeOut();
        }

	});

     // end scroll event

    // scroll to top
    scrollTop.click(function () {

        $("html, body").animate({
            scrollTop: "0"
        }, 500);

    });

    /* responsive stuff, start popular slider */

    if ($(window).width() <= 991) {

        responsive.removeClass("popular");
        responsive.addClass("popular-tablet");

        scroll.addClass("hidden");
        underScroll.addClass("hidden");
    }

    $(window).resize(function () {

        if ($(window).width() <= 991) {

            responsive.addClass("popular-tablet");
            responsive.removeClass("popular");

            scroll.addClass("hidden");
            underScroll.addClass("hidden");

        } else {

            responsive.addClass("popular");
            responsive.removeClass("popular-tablet");
            scroll.removeClass("hidden");
            underScroll.removeClass("hidden");
        }

    });

    if ($(window).width() <= 500) {

        moreProducts.addClass("hidden");
		headerSlider.addClass("hidden");
		headerImg.removeClass("hidden");
		bulb.addClass("hidden");

		responsive.addClass("popular-mobile");
        responsive.removeClass("popular-tablet popular");
    }

    $(window).resize(function () {

        if ($(window).width() <= 500) {
            moreProducts.addClass("hidden");
			headerSlider.addClass("hidden");
			headerImg.removeClass("hidden");
			bulb.addClass("hidden");

			responsive.addClass("popular-mobile");
            responsive.removeClass("popular-tablet popular");

        } else {
            moreProducts.removeClass("hidden");
			headerSlider.removeClass("hidden");
			headerImg.addClass("hidden");
			bulb.removeClass("hidden");

			responsive.addClass("popular");
            responsive.removeClass("popular-tablet popular-mobile");
        }

    });

	if ($(window).width() <= 575) {

        left.removeClass("fl-left");
        right.removeClass("fl-right");
    }

    $(window).resize(function () {

        if ($(window).width() <= 575) {
            left.removeClass("fl-left");
            right.removeClass("fl-right");
        } else {
            left.addClass("fl-left");
            right.addClass("fl-right");
        }

    });

    $('.popular .bxslider').bxSlider({
        minSlides : 4,
        maxSlides : 4,
        slideWidth: 400,
        slideMargin: 20,
        auto: true,
        pause: 4000,
        pager: true
    });

	$('.popular-tablet .bxslider').bxSlider({
        minSlides : 2,
        maxSlides : 2,
        slideWidth: 400,
        slideMargin: 10,
        auto: true,
        pause: 4000,
        pager: true
    });

    $('.popular-mobile .bxslider').bxSlider({
        minSlides : 1,
        maxSlides : 1,
        slideWidth: 300,
        slideMargin: 10,
        auto: true,
        pause: 4000,
        pager: true
    });

    /* responsive stuff, end popular slider */

    /* about */

    $('.about .slider .bxslider').bxSlider();

    /* end about */

    /*shop*/

     /* drop down menu*/

    $(".shop .sort div h6").click(function () {

        if ($(this).siblings().is(":hidden")) {

            $(this).siblings().addClass("bg-p mobile-p");
            $(this).children().toggleClass("fa-chevron-up");
            $(this).children().toggleClass("fa-chevron-down");

        } else {

            $(this).siblings().removeClass("bg-p mobile-p");

            $(this).children().toggleClass("fa-chevron-up");
            $(this).children().toggleClass("fa-chevron-down");

        }

    });

    $(".shop .ad i").click(function () {

        $(this).parent().fadeOut(50);

    });

    /*end shop*/

	/*html scroll*/

	$("html").niceScroll({

        cursorcolor: "#0d6db6",
		cursorborder: "none",
        cursorwidth: "15px",
		zindex: "999999",
		cursoropacitymin: ".7",
		cursorborderradius: "0px",
		scrollspeed: "10"

    });

    /* end html scroll*/

    /* more products */

    $('.pgwSlider').pgwSlider();

    /* end more products */


    /* highlights slider*/

    var stack = $('.stack').paperstack({});
    $('#next').click(stack.next);

	$('#prev').click(stack.previous);

    /* end highlights slider*/


});

//loading screen


$(window).on('load', function () {
    'use strict';

    $(".load .img").fadeOut(1000,
        function () {
            $("body").css("overflow", "auto");
            $(this).parentsUntil(".home").fadeOut(1000,
                  function () {

                    $(this).remove();
                });
        });
});

//== Start Shop ========
$('input[type=radio]').change(function(){
    $value= $(this).attr('data-filter');
    if(! $(this).is(':checked')){

        $('#all').show('1000');

    }else{
        $(".products section").not("#"+$value).hide('1000');
        $(".products section").filter("#"+$value).show('1000');
    }
});

//======= Spical Messages ==================
$('.no-login').on('click', function(){
    $('.not-login').fadeIn(1000).delay(1000).fadeOut();
});

//==========================================

//==== ADD BY AJAX
$('#add_shop').click(function(e){
     e.preventDefault();
$form = $('#create_order').serialize();
$url = $('#create_order').attr('action');
$qty = $('.amount').val();
if($qty != null && $.isNumeric($qty))
{
    $.ajax({
        url:$url,
        dataType:'json',
        data:$form,
        type:'post',
        success: function(data){
            if(data.status == true)
            {
                $('.success-add').fadeIn(1000).delay(1000).fadeOut();
                if($('div').hasClass("item_order"))
                {
                    $('.item_order').append(data.result);
                }else{
                    $('.in-cart').append('<div class="row item_order"></div>');
                    $('.item_order').append(data.result);
                }


                $("#total-price").html(data.total + ' USD');
            }
        },error:function(){
            $('.match_product').removeClass('hidden').delay(5000).fadeOut(1000);
        },
     });
}

return false;

});

//===> Edit Order By Ajax
$('.qty').keyup(function(e){

    $input = $(this);
    $price = $('.price_order').val();
    $url =  $input.attr('data-url');
    var qty = parseInt($input.val());
    if($.isNumeric(qty))
    {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
            url:$url,
            type: "POST",
            dataType: 'json',
            data:{qty:qty},
            success: function(data){
                $qty_order = data.qty;
                $input.parent('p').next().html($price * $qty_order + ' USD');
                $("#total-price").html(data.total + ' USD');

            },error:function(data){
                alert('erros');

            },
        });
    }

});

//==== DELETE BY AJAX =======
function delete_order(url) {
    $(this).hide();
    $url = url;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url:$url,
        type: 'DELETE',
        dataType:'json',
        success:function (data) {
            window.location.reload();
            $('div[id-order="'+data.order_id+'"]').remove();
            $("#total-price").html(data.total+' USD');
            $(".nav .cart span").text(cartProducts.length);
        },
    });

};


$('#checkout').click(function(){
   $url = $(this).attr('data-url');
   var token = $(this).attr('data-token');
   $total = $('#total-price').html();
   if($total == 0)
   {
      $(this).removeAttr('data-url');
      $('#message_checkout').html('Not Found Orders To Checkout !!');
      $('#message_checkout').addClass('alert-danger');
      $('#message_checkout').removeClass('alert-success');
   }else{
        $.ajax({
            url:$url,
            type:"POST",
            dataType:"html",
            data: {
                "_token": token,
            },
            success:function(data){
                window.location.reload();
                $('#message_checkout').removeClass('alert-danger');
                $('#message_checkout').addClass('alert-success');
                $("#total-price").html('0 USD');

            },
        });
   }

});

