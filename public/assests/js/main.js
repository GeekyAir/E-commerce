$(document).ready(function(){
    $('.slick_slider .slick_img_container').on('click',function() {
        $('.slick_slider .slick_img_container').css({
            'color':'#000'
        })
        $(this).css({
            "color":"rgb(238, 152, 22)"
        })
    })

    $('.fav_icon i').on('click',function () {
        $(this).toggleClass('far fa-heart')
    })
    $('.fav_icon i').on('click',function () {
        $(this).toggleClass('fas fa-heart')
    })





/* login and register Pages */

$('.login .form_container').animate({
    top:"60px"
},800)

$('.login #to_register').on('click',function() {
   
    $('.reg_cont').css({
        display:"block"
    });

   $('.login .form_container').animate({
        top:"-1500px"
   },500)
   $('.login .reg_container').animate({
    top:"-330px"
},500);
})

$('#to_login').on('click',function() {
   
$('.form_container').animate({
        top:"60px"
   },500)
   $('.reg_container').animate({
    top:"-1500px"
},500);
})






})


/*  

edit_prod_btn 

new_product_container 

edit-prod-form

edit_btn
*/

$('.new_product_container .edit_prod_btn').on('click',function(){
    $('.new_product_container').fadeOut(200);
    $('.edit-prod-form').fadeIn(250)
})

$('.edit-prod-form .edit_btn').on('click',function(){
    $('.edit-prod-form').fadeOut(200)
    $('.new_product_container').fadeIn(250);
})

/* show video */
$('.dashboard .show_video').on('click',function(){
    $('.dashboard .video_table').fadeOut(200);
    $('.dashboard .videos_page').fadeIn(250)
})

$('.dashboard .prev_video_btn').on('click',function(){
    $('.dashboard .video_table').fadeIn(200);
    $('.dashboard .videos_page').fadeOut(250)
})


/* proceed to buy */

$('.cart-container .proceed-to').on('click',function(){
    $('.cart-container').fadeOut(200);
    $('.buy-process-container').fadeIn(250)
})

$('.buy-process-container .prev-page').on('click',function(){
    $('.buy-process-container').fadeOut(250)
    $('.cart-container').fadeIn(200);
})





/* chat box */
/* chat box */





