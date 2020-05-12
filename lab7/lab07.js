const works = [
    { author: "Micheal Jackson",lifetime:"1022-1055",tips: "Human", photos: ["human1.jpg","human2.jpg","human3.jpg"] },
    { author: "Maria JK",lifetime:"1920-2001", tips: "Classical", photos: ["classical1.jpg","classical2.jpg"] },
    { author: "John Herry UY", lifetime:"1894-1928",tips: "Abstract", photos: ["abstract1.jpg","abstract2.jpg","abstract3.jpg","abstract4.jpg","abstract5.jpg"] },
    { author: "Coco",lifetime:"1777-1799", tips: "Beauty",  photos: ["beauty1.jpg","beauty2.jpg"] }
];



//var elementTotal=document.getElementsByClassName("flex-container justify")[0];//添加item类


for(var number=0;number<works.length;number++){
    var elementTotal=document.getElementsByClassName("flex-container justify");
    var ItemDiv=document.createElement("div");//创建itemDiv
    ItemDiv.classList.add("item");//添加item类名


    var Genre=document.createElement("h4");
    var GenreContent=document.createTextNode("Genre : "+works[number].tips);//添加Genre标题
    Genre.appendChild(GenreContent);
    ItemDiv.appendChild(Genre);//把Genre添加到itemDiv

    var innerBox1=document.createElement("div");//创建inner-box块一
    innerBox1.classList.add("inner-box");//添加inner-box类名
    var Author=document.createElement("h3");
    var AuthorContent=document.createTextNode(works[number].author+"      ");
    var Lifetime=document.createElement("h5");
    Lifetime.style.display="inline";
    var LifetimeContent=document.createTextNode(works[number].lifetime);//添加生平信息
    Lifetime.appendChild(LifetimeContent);
    Author.appendChild(AuthorContent);//添加作者姓名
    Author.appendChild(Lifetime);
    innerBox1.appendChild(Author);
    ItemDiv.appendChild(innerBox1);


    var innerBox2=document.createElement("div");//创建inner-box块二
    innerBox2.classList.add("inner-box");//添加inner-box类名
    var PhotoTitle=document.createElement("h3");
    var PhotoTitleContent=document.createTextNode("Popular Photos");
    PhotoTitle.appendChild(PhotoTitleContent);
    innerBox2.appendChild(PhotoTitle);
    //添加照片标题
    for(var i=0;i<works[number].photos.length;i++){
      var photo=document.createElement("img");
      photo.src=works[number].photos[i];
      innerBox2.appendChild(photo);
      photo.style.width="70px";
      photo.style.height="70px";
      photo.style.marginLeft="10px";
             }
             //add photos
    ItemDiv.appendChild(innerBox2);//添加inner-box2



    var buttonNode=document.createElement("button");
    buttonNode.classList.add("button");
    var button=document.createElement("h4");
    var buttonContent=document.createTextNode("visit");
    button.appendChild(buttonContent);
    buttonNode.appendChild(button);
    ItemDiv.appendChild(buttonNode);//添加按钮



    /*var elementButton=document.getElementsByClassName("button");

    elementButton[0].addEventListener("click",function(){
                                                                scrollTo(0,100);
                                                                });*/
    /*elementButton[1].addEventListener("click",function(){
                                                                    scrollTo(0,200);
                                                                    });*/







    var elementItem=document.getElementsByClassName ("item");
    elementTotal[0].appendChild(ItemDiv);//将ItemDiv添加到类中
    //elementTotal[0].appendChild(Genre);

}


function move(){
       scrollTo(0 ,100);
       }




    var elementButton=document.getElementsByClassName("button");

    elementButton[0].addEventListener("click",function(){
                                                                scrollTo(0,500);
                                                                });
    elementButton[1].addEventListener("click",function(){
                                                                scrollTo(0,900);
                                                                });

    elementButton[2].addEventListener("click",function(){
                                                                scrollTo(0,1300);
                                                                });
