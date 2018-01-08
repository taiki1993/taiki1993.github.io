$(function(){
    console.log('読み込んだ');

    $('.mobile-menu').on('click',function(){
       $('header nav').addClass('mobile-menu-open').addClass('fade-in');
    });
    $('.mobile-close').on('click',function(){
        $('header nav').addClass('mobile-menu-open').remove('fade-in')
    });
});
