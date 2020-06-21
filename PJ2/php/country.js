
var city=[
    ['Shanghai','Kunming','Beijing','Yantai'],
    ['Tokyo', 'Osaka', 'Kamakura'],
    ['Roma','Milan','Venice','Florence'],
    ['New York','San Francisco', 'Washington']
];
function GetCity(){
    var Country=document.select.country;
    var City=document.select.city;
    var country=city[Country.selectedIndex-1];
    City.length=1;
    for(var i=0;i<country.length;i++){
        City[i+1]=new Option(country[i],country[i]);
    }
}
var buttonIndex=0;
var buttons=document.getElementsByTagName("span");
var showPageImage=document.getElementsByClassName("ui six doubling cards");

    var distance;
function buttonColor(){
    for(var k=0;k<buttons.length;k++){
       buttons[k].className="";}
       buttons[buttonIndex].className="on";}//使按钮颜色随图片变化

  for (var number = 0;number < buttons.length; number++){
            (function(number){
                buttons[number].onclick=function(){
                    var dis=buttonIndex-number;
                    buttonIndex=number;
                    buttonColor();
                    //buttons[number].innerHTML="7";
                    //showPageImage[0].innerHTML=<?php require_once('getCountry.php'); selectCountries(0);?> ;
                }
            })(number);//????
        }