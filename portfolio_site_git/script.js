$(function(){
    console.log('読み込んだ');

    $('.mobile-menu').on('click',function(){
       $('header nav').addClass('mobile-menu-open').addClass('fade-in');
    });
    $('.mobile-close').on('click',function(){
        $('header nav').addClass('mobile-menu-open').remove('fade-in')
    });
});

$(function(){
    var stage = new createjs.Stage('stage');

    var circle = new createjs.Shape();
            circle.graphics.beginFill('#DF01D7').drawCircle(0,0,30);
            stage.addChild(circle); //ステージの配置
            circle.x = 50;
            circle.y = 50;

            function nextAnime(){
                console.log('next animation');
                circle.scaleX = 1;
                circle.scaleY = 1;
            }

});
