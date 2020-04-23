静态网页地址：http://htmlpreview.github.io/?https://github.com/abcdefg-cmyk/SOFT130002_lab/blob/master/PJ1/Index.html



我的个人网页主页为index.html,采用intellij编写。
所有网页的主要组成部分：头部（header）
                            header占总高度的5%，分为首页（homepage），搜索（search），浏览（browse），个人栏。
                            其中，每一栏各占宽度的25%。
                            
                            头部的背景色为黑色，字体显示白色。
                            
                            当鼠标移动到上面时，对应条目的背景色显示为白色，字体显示为黑色。
                            
                            在浏览页，搜索页，首页，对应的栏目始终显示高亮。
                         
                            个人栏的下拉菜单使用ul,li实现，下拉菜单一开始隐藏，当鼠标移动到个人栏时显示下拉菜单。
                            
                    内容
                    
                    底部（footer）
                            底部高度占5%，背景显示为黑色，个人信息靠右显示。
首页（homepage）
     1.头部
     2.内容
         首先是一张高清的大图，宽度占100%。
         头图下方为一个div，内含6张缩略图，缩略图的标题和简介都放置在对应，图片的下方，宽度与对应图片的宽度大致相同。
         div的高度和宽度固定，且div居中。
         
         
         右侧有两个按钮，始终在右下角固定位置，采用fixed，点击TOP会回到顶部，点击REFRESH会显示“已刷新页面”。
      3.底部
         
         
浏览（browse）
     1.头部
     2.内容
         （1）左侧div为搜索栏，可以根据输入对应的标题搜索，点击按钮会显示对话框“已显示搜索结果”。下方为“根据热门国家搜索”和“根据热门城市搜索”，
         点击对应的国家和城市会显示搜索结果。
         当鼠标移动到对应的菜单上时，字体显示为黑色，背景显示为白色。
         （2）右侧div用来显示搜索结果，div顶部为select的二级联动，底部为1-9的页码。点击按钮会显示图片的搜索结果。
     3.底部
     
     
     
搜索（search）
     1.头部
     2.内容
         （1）同浏览页一样，左侧为搜索栏。有两个按钮可用于搜索，分别根据不同的分类方式搜索。点击按钮会显示搜索结果。
         （2）右侧div用于显示搜索结果，搜索得到的图片带有标题和简介，点击图片时会跳转到图片详情。
     3.底部


照片（photos）
     1.头部
     2.内容
         每一张图片下方有两个按钮，点击“修改”会跳转到上传界面，点击删除会出现对话框“图片已删除”。
         图片右侧为图片的标题和简略描述。
         该div底部为1-9的页码，居中。
     3.底部
     
     
     
     
     
收藏（collection）
     1.头部
     2.内容
         其余与照片界面相同，图片下方的为一个按钮“取消收藏”。
     3.底部
     
     
     
登录（index）
     1.头部
     2.内容
        包括用户名，密码，确认密码三个input，下方为两个按钮“登录”，“注册”，按规定填写完点击登录可以跳转到首页，点击注册可以跳转到注册界面。
     3.底部
     
     
     
     
     
注册（login）
     1.头部
     2.内容
         包括邮箱，手机，用户名，密码，确认密码。
         下方为“注册”和“返回登录界面”。点击可回到登录界面。
     3.底部