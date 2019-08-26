<?php include "index2.php";?>
<!DOCTYPE html>  
<html>  
<head>      
<title>Структура учреждения, КУ «Управление автомобильных дорог Брянской области»</title>  
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<script src="https://vk.com/js/api/openapi.js?160" type="text/javascript"></script>

	  
<!--<script>
$(function() {
  $('.main-myButton').click(function() {
    $('.content').slideToggle();
  });
});
</script>    соц сети-->


<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<script src="https://vk.com/js/api/openapi.js?160" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="style.css"> 
<link rel="stylesheet" type="text/css" href="css/mob.css">  
 
</head>  
<body > 
<div class="background">
</div>  
	
 <div id="header" > 
    <div id="in1">
     		<div id="rihgt">
          		<img id="img" src="images/Logotip_na_chernom.jpg" >
     		</div> 	
            
          
          		<div id="left">
           				<h2 id="h2_1" > Российская Федерация</h2>
                        <h2 id="h2_1">Казённое Учреждение</h2>
 
              			<h2 id="h2" > Управление автомобильных дорог </h2>
                        <p> <h2 id="h2_2">Брянской области</h2></p>
           			
            	</div>
                <div id="left1">
                <p align="left"><b>Адрес:</b> г. Брянск, ул. Дуки, д. 80</p>
                <p align="left"><b>Телефон:</b> 8 (4832) 32-20-46</p>
                <p align="left"><b>Факс:</b> 8 (4832) 32-20-51</p>
                <p align="left"><b>Е-mail:</b> uprdor.bryansk@mail.ru</p>
                </div>
          <div id="rihgt1">
          		<img id="img_g" src="images/HWfNXzDAe4k-removebg-preview.png" >
     		</div> 
      </div>
      <nav class="one">
 
  <ul>
  <div id="one">
    <li><a href="index.php"><i class="fa fa-home fa-fw"></i>Главная</a></li>
    <li><a href="o_nas.php">О нас</a></li>
    <li><a href="zakon.php">Законодательство</a></li>
    <li><a href="fond.php">Дорожные фонды</a></li>
    <li><a href="torgi.php">Торги</a></li>
    <li><a href="dor_bez.php">Дорожная безопасность</a></li>
    <li><a href="podradchik.php">Подрядчики</a></li> 
    <li><a href="mo.php">Взаимодействие с МО</a></li>
    <li><a href="perspektiv.php">Преспективы и задачи</a></li>
    <li><a href="uslugi.php">Услуги</a></li>
    <li><a href="kontakt.php">Контакты</a></li>
    </div>
  </ul>
</nav>
  </div> 
      	<div id="container"> 
	   	
   
     <div id="main">  	
         
         <div id="in_new">
         <h2 style="color:#FFF">Контакты</h2>
         </div> 
          <div id="news_txt" >
                 
                 
                 
                    <a href="torgi_2.html"> <u><h3 align="left" id="p">Информация о торгах в 2019 году в области дорожного хозяйства</h3></u></a>
                    
                
					<p align="left" id="p">Наш адрес: 241050, г. Брянск, ул. Дуки, д. 80</p>
                    <p align="left" id="p">Наш телефон: 8 (4832) 32-20-46</p>
					<p align="left" id="p">Наш факс: 8 (4832) 32-20-51</p>
					<p align="left" id="p">Наш e-mail:<u> <a id="p" href="mailto:uprdor.bryansk@mail.ru">uprdor.bryansk@mail.ru</a></u></p>
					<br><h3 align="left" id="p">Схема проезда</h3>

                   <img id="img_upr" src="images/map2.gif">
                     
                 	
          	</div> 
    </div>  
  
   <div id="content"  >
         <div id="in">
         <h2 style="color:#FFF">Лента новостей</h2>
         </div>  	
         <div id="scrollbar" id="style-1">
         
                  <?php News() ?>

         </div>
         <!--<div> jglj</div>	-->
  </div>  
    
    
  		   	
    
    <div id="content1">
         <!--<div id="in">
         <h2 style="color:#FFF">Соцсети:</h2>
         </div> --> 	
           	 

  <ul class="submenu">
    <li><a class="main-myButton"  href="https://vk.com/bkadbryansk" target="_blank" ><i class="fa fa-vk"></i></a></li>
    <li><a class="main-myButton"  href="https://www.instagram.com/uprdor32/" target="_blank"><i class="fa fa-instagram "></i></a></li>
    <li><a href="#"><i class="fa fa-odnoklassniki"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
   
  </ul>



<!-- VK Widget -->
<!--<div class="content" id="vk_groups">
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 3 , width: "auto", height: "auto"}, 177993406);
</script>
</div>
Инстаграм
<iframe  id="inst" class="content1 content" src="https://averin.pro/widget.php?l=uprdor32&style=2&width=250&gallery=0&s=80&icc=3&icr=3&t=1&tt=Мы в Инстаграм&h=1&ttcolor=FFFFFF&th=c3c3c3&bw=f9f9f9&bscolor=FFFFFF&bs=FF0000&ts=Подписаться" allowtransparency="true" frameborder="0" scrolling="no" style="border:none;overflow:hidden;width:350px; height: 490px" ></iframe>-->
    </div>  		   	
    
    

    <div id="clear">  		   	
    </div>  							     	

 </div> 
<div id="footer">  	
         <?php Footer()?>


          </div>   

</body> 

</html>