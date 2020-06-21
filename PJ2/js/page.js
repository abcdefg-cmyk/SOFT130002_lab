function schangepage(page){

    //var vuid="";

       //var vudate=udate;

        var vuid=searchmform.uid.value;

       var vudate=searchmform.udate.value;

       var duid=searchmform.uid.defaultValue;

       var dudate=searchmform.udate.defaultValue;

       if(vuid!=duid&&vudate==dudate)

       {

              var vudate="";

               var changeUrl="search_mdata.php?vuid="+vuid+"&vudate="+vudate+"&page="+page;

                            $.get(changeUrl,function(str){                          

                                          $("#meterdatapage").html(str);                                       

                                });

       }

       if(vuid==duid&&vudate!=dudate){

              var vuid="";

               var changeUrl="search_mdata.php?vuid="+vuid+"&vudate="+vudate+"&page="+page;

                            $.get(changeUrl,function(str){                          

                                          $("#meterdatapage").html(str);                                       

                                });

       }

       if(vuid!=duid&&vudate!=dudate){

              var changeUrl="search_mdata.php?vuid="+vuid+"&vudate="+vudate+"&page="+page;

                            $.get(changeUrl,function(str){                          

                                          $("#meterdatapage").html(str);                                       

                                });

       }

       else if(vuid==duid&&vudate==dudate)

       {

 

                     $.post("datapage.php",{page:page},function(data){

                          $("#meterdatapage").html(data);

                      });

       }

    }

 

       function spage_go(stype, scur_page, spagenum){     

       var spage=scur_page;

       //var udate=vudate;

       switch(parseInt(stype)){

              case 1: spage=1; break;                           //首页

              case 0: if(scur_page>=2) spage=scur_page-1; break;       //上一页

              case 2: if(scur_page<=spagenum-1) spage=scur_page+1; break; //下一页

              case 3: spage=spagenum; break;                            //尾页

              case 4: spage = scur_page; break;                         //点击某一页的页码

       }

       schangepage(spage);

    }

