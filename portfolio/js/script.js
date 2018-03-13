$(function(){
  console.log('読み込んだ');


// レスポンシブメニュー
  $('.res_menu').on('click',function(){
     $('.responsive_menu').addClass('res_menu-open').addClass('fade-in');
  });
  $('.responsive_menu p').on('click',function(){
      $('.responsive_menu').removeClass('res_menu-open').removeClass('fade-in');
  });


});
