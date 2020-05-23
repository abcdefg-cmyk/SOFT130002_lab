
/*请在该区域内声明或者获取所要使用的全局变量*/
/********************************************begin************************************/
var buttonIndex=0;
var wrap=document.getElementsByClassName("wrap")[0];
var leftMove=document.getElementsByClassName("arrow_left")[0];
var rightMove=document.getElementsByClassName("arrow_right")[0];
var buttons=document.getElementsByTagName("span");
/*Global Variable Area */

/*********************************************end*************************************/



/* 任务一
 * 请参考css中的style参数、html中的内容、下方的效果要求，然后在下面区域内编写代码。
 * 效果要求：
 * ①点击左箭头prev和右箭头next的时候，可以切换到前一张图片和下一张图片。（左右箭头为html中的a标签）
 * ②每切换一张图片，右下角的数字标记对应变化。
 *      如：一开始，第1张图片显示出来，右下角的1-5的数值中，数值1位红色，2-4为绿色，表示当前显示第1张图片。
 *      点击next箭头，图片切换到第2张，同时，右下角红色数值从1切换为2，数值1,3,4,5为绿色。
 * ③当当前图片为第1张时，点击prev箭头，切换到第5张图片，且数值5置为红色。
 * 当当前图片为第5张时，点击next箭头，切换到第1张图片，且数值1置为红色。
 * ④切换图片的过程不要求，可直接切换，也可动画切换，但要求保证一定的切换动画合理性，不能出去明显的衔接不当。
 * ⑤本部分只能使用原生JS。
 */
/********************************************begin************************************/

/*Code Here*/

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
/*********************************************end*************************************/



/* 任务二
 * 请参考css中的style参数、html中的内容、下方的效果要求，然后在下面区域内编写代码。
 * 效果要求：
 * ①轮播可以自动播放，切换图片间隔为2s，每一次切换的效果与点击next箭头的效果一致。
 * ②当鼠标移入轮播区域内时，停止自动播放。
 * ③当鼠标不在轮播区域内时，开始自动播放。
 * ④页面刚加载完成时，如果鼠标不在轮播区域内，自动开始自动播放；否则，等待直到鼠标移出轮播区域，再进行自动播放。
 * ⑤本部分只能使用原生JS。
 */
/********************************************begin************************************/

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



/*********************************************end*************************************/



/* 任务三
 * 请参考css中的style参数、html中的内容、下方的效果要求，然后在下面区域内编写代码。
 * 效果要求：
 * ①点击右下角的任意一个数值，能够切换到对应图片，且相应数值变为红色。
 * ②进行①操作过后，是否自动播放，其规则与上一个任务一致。
 * ③本部分只能使用原生JS。
 */
/********************************************begin************************************/
/*Code Here*/
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

/*********************************************end*************************************/


/*任务四
 * 请参考css中的style参数、html中的内容、下方的效果要求，然后在下面区域内编写代码。
 * 效果要求：
 * ①点击某一非表头的单元格，可以编辑其内容，编辑完毕后点击其他部位，可以在界面上显示修改后的内容。
 * ②点击单元格后，光标自动定位于单元格的首个字符或者汉字前。
 * ③本部分可以使用jQuery，也可以使用原生JS。
 */
/********************************************begin************************************/
/*Code Here*/
var modifyTable=document.getElementsByTagName("td");
var table1=document.getElementsByClassName("table1")[0];
for(var rowNumber=1;rowNumber<table1.rows.length;rowNumber++){
        for(var cellNumber=0;cellNumber<table1.rows[rowNumber].cells.length;cellNumber++){
                table1.rows[rowNumber].cells[cellNumber].onclick=function(){
                       //var newInput;
                       //newInput=prompt("请输入改动内容");
                       //if(newInput!=null){this.innerHTML=newInput;}
                       changeTotext(this);
                       }
                }
        }
function changeTotext(obj)
{
    var tdValue = obj.innerText;
    obj.innerText = "";
    var txt = document.createElement("input");
    txt.type = "text";
    txt.id = "modify";
    txt.setAttribute("className","text");
    obj.appendChild(txt);
    txt.select();
}


document.onmouseup = function(){
    if (document.getElementById("modify")&&event.srcElement.id!="modify"){
       var obj=document.getElementById("modify").parentElement;
       obj.innerText=document.getElementById("modify").value;
    }
}


/*********************************************end*************************************/