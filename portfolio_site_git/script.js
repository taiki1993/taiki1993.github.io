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
                circle.graphics.beginFill('#df5953').drawCircle(0,0,70);
                stage.addChild(circle); //ステージの配置
                circle.x = 464;
                circle.y = 120;

                createjs.Tween.get(circle)
                // .to({x:400,y:400,alpha:0.5},3000, createjs.Ease.backOut)
                .to({x:600,y:30},2000, createjs.Ease.cubicIn) //1000は一秒
                // .to({x:800,y:600,scaleX:2,scaleY:2},2000, createjs.Ease.bounceOut)
                .call(nextAnime);

                function nextAnime(){
                    console.log('next animation');
                    circle.scaleX = 10;
                    circle.scaleY = 50;
                }

                // function tick(){
                // // circleの動き
                // circle.x += 200;
                // if(circle.x > stage.canvas.width){
                //     circle.x = 0;}
                // }

                var manifest = [
                    {src:'main-png/portfolio_main_desert-01.png'}
                ];

                var loadQueue = new createjs.LoadQueue();

                loadQueue.loadManifest(manifest);

                loadQueue.addEventListener('complete',function(){
                    console.log('読み込んだ');
                    addStage();
                });

                function addStage(){
                    var desert = new createjs.Bitmap(manifest.src);
                    stage.addChild(desert);
                    desert.x = 100;
                    desert.y = 100;
                }

           stage.update();
     });
