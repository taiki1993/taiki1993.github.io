$(function(){
  console.log('読み込んだ');


// レスポンシブメニュー
  $('.res_menu').on('click',function(){
     $('.responsive_menu').addClass('res_menu-open').addClass('fade-in');
  });
  $('.responsive_menu p').on('click',function(){
      $('.responsive_menu').removeClass('res_menu-open').removeClass('fade-in');
  });

// portfolio Menu
  $('.pic_box1').on('click',function(){
     $('.res_pf_inst1').addClass('pic_box1-open').addClass('fade-in');
  });
  $('.res_pf_inst1 h2').on('click',function(){
      $('.res_pf_inst1').removeClass('pic_box1-open').removeClass('fade-in');
  });

  $('.pic_box8').on('click',function(){
     $('.res_pf_inst8').addClass('pic_box8-open').addClass('fade-in');
  });
  $('.res_pf_inst8 h2').on('click',function(){
      $('.res_pf_inst8').removeClass('pic_box8-open').removeClass('fade-in');
  });

  $('.pic_box2').on('click',function(){
     $('.res_pf_inst2').addClass('pic_box2-open').addClass('fade-in');
  });
  $('.res_pf_inst2 h2').on('click',function(){
      $('.res_pf_inst2').removeClass('pic_box2-open').removeClass('fade-in');
  });

  $('.pic_box3').on('click',function(){
     $('.res_pf_inst3').addClass('pic_box3-open').addClass('fade-in');
  });
  $('.res_pf_inst3 h2').on('click',function(){
      $('.res_pf_inst3').removeClass('pic_box3-open').removeClass('fade-in');
  });

  $('.pic_box4').on('click',function(){
     $('.res_pf_inst4').addClass('pic_box4-open').addClass('fade-in');
  });
  $('.res_pf_inst4 h2').on('click',function(){
      $('.res_pf_inst4').removeClass('pic_box4-open').removeClass('fade-in');
  });

  $('.pic_box5').on('click',function(){
     $('.res_pf_inst5').addClass('pic_box5-open').addClass('fade-in');
  });
  $('.res_pf_inst5 h2').on('click',function(){
      $('.res_pf_inst5').removeClass('pic_box5-open').removeClass('fade-in');
  });

  $('.pic_box6').on('click',function(){
     $('.res_pf_inst6').addClass('pic_box6-open').addClass('fade-in');
  });
  $('.res_pf_inst6 h2').on('click',function(){
      $('.res_pf_inst6').removeClass('pic_box6-open').removeClass('fade-in');
  });

  $('.pic_box7').on('click',function(){
     $('.res_pf_inst7').addClass('pic_box7-open').addClass('fade-in');
  });
  $('.res_pf_inst7 h2').on('click',function(){
      $('.res_pf_inst7').removeClass('pic_box7-open').removeClass('fade-in');
  });

});
