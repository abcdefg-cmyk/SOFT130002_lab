
    var elementButton=document.getElementsByClassName("top");

    elementButton[0].addEventListener("click",function(){
                                                                scrollTo(0,500);
                                                                });




var buttonIndex=0;
var wrap=document.getElementsByClassName("wrap")[0];
var leftMove=document.getElementsByClassName("arrow_left")[0];
var rightMove=document.getElementsByClassName("arrow_right")[0];
var buttons=document.getElementsByTagName("span");


leftMove.onclick=function(){left();}
rightMove.onclick=function(){right();}
    var distance;
function buttonColor(){
    for(var k=0;k<buttons.length;k++){
       buttons[k].className="";}
       buttons[buttonIndex].className="on";}//使按钮颜色随图片变化
function left(){
    //var distance;
    if(wrap.style.left=="0px"){
        distance=-2400;}//最左边第五张时跳到第四张
    else{
        distance=parseInt(wrap.style.left)+600;
        }
    wrap.style.left=distance+"px";//往左
    if(buttonIndex==0){buttonIndex=4;}
    else{buttonIndex--;}
    buttonColor();//按钮颜色
    }
function right(){
    //var distance;
    if(wrap.style.left=="-3600px"){
        distance=-1200;}//最右边第一张时跳到第二张
    else{
        distance=parseInt(wrap.style.left)-600;
        }
    wrap.style.left=distance+"px";//向右
    if(buttonIndex==4){buttonIndex=0;}
        else{buttonIndex++;}
        buttonColor();//按钮颜色
    }


/*Code Here*/
//自动播放
var i=null;
function autoPlay(){
    i=setInterval("right()",2000);
    }
//setInterval(right,2000);
autoPlay();
var container=document.getElementsByClassName("container")[0];
wrap.onmouseover=function(){clearInterval(i);}
document.getElementsByClassName("arrow arrow_left")[0].onmouseover=function(){clearInterval(i);}
document.getElementsByClassName("arrow arrow_right")[0].onmouseover=function(){clearInterval(i);}
wrap.onmouseout=function(){autoPlay();}





/*for(var i=0;i<buttons.length;i++){

     buttons[i].addEventlistener('click',function(){
                                                          for(var number=0;number<buttons.length;number++){
                                                             buttons[number].className="";}
                                                             buttons[i].className="on";}
                                                    );
                                                    }*/
  for (var number = 0;number < buttons.length; number++){
            (function(number){
                buttons[number].onclick=function(){
                    //clearInterval(i);
                    var dis=buttonIndex-number;
                    if(buttonIndex==4&&wrap.style.left!=="-3000px"){
                        dis=dis-5;
                    }//显示第五张但实际上是第一张，将wrap移到实际第五张的位置

                    else if(buttonIndex == 0 && wrap.style.left!=="-600px"){
                        dis=5+dis;
                    }//显示第七张图片
                    wrap.style.left=parseInt(wrap.style.left)+dis*600+"px";
                    buttonIndex=number;
                    buttonColor();
                }
            })(number);//????
        }