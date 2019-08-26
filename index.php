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

<link rel="stylesheet" type="text/css" href="../style.css"> 
<link rel="stylesheet" type="text/css" href="css/mob.css">  
 
</head>  
<body > 
<div class="background">
</div>  

	
 <div id="header" > 
    <div id="in1">
     		<div id="rihgt">
          		<img id="img" src="../images/Logotip_na_chernom.jpg" >
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
          		<img id="img_g" src="../images/HWfNXzDAe4k-removebg-preview.png" >
     		</div> 
      </div>
      
      <nav class="one">
 
  <ul>
  <div id="one">
    <li><a href="../index.php"><i class="fa fa-home fa-fw"></i>Главная</a></li>
    <li><a href="../o_nas.php">О нас</a></li>
    <li><a href="../zakon.php">Законодательство</a></li>
    <li><a href="../fond.php">Дорожные фонды</a></li>
    <li><a href="../torgi.php">Торги</a></li>
    <li><a href="../dor_bez.php">Дорожная безопасность</a></li>
    <li><a href="../podradchik.php">Подрядчики</a></li> 
    <li><a href="../mo.php">Взаимодействие с МО</a></li>
    <li><a href="../perspektiv.php">Преспективы и задачи</a></li>
    <li><a href="../uslugi.php">Услуги</a></li>
    <li><a href="../kontakt.php">Контакты</a></li>
    </div>
  </ul>
</nav>
  </div> 
      		   	
  <div id="container">
  
     <div id="main">  	
     <div id="scrollbar1"> 

         <!--<div id="in">
         <h2 style="color:#FFF">Главные новости</h2>
         </div> -->
         <div id="container1">
  <table>
  <tr>
  <td style="width:50%">
  <div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="images/_Xp5erFm6GI.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="images/ybn9A5JyhZQ.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="images/Jy4uXXAl5QQ.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="images/p33Ex8T5i5Q.jpg" style="width:100%">
</div>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<!--<a class="next" onclick="plusSlides(1)"> > </a>
--><br>
</div>
  
  </td>
  <td style="width:50%; padding:0" align="top">
  <img src="images/L7Za_8CKZMc.jpg" style="width:100%; margin-top: -14px;">
  </td>
  </tr>
  </table>
    
     
     </div>

        <br>
        

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<!--<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>-->

        <!-- <img id="img_upr" src="images/Управа.jpg"> -->
         
        <h2> <p style="color:#000; font-size:24px" id="zag1" align="left" style="text-indent: 25px;">Реализация национального проекта «Безопасные и качественные автомобильные дороги»</p> </h2>
<p style="color:#000; font-size:22px" id="zag1" align="left" style="text-indent: 25px;">Реализация национального проекта «Безопасные и качественные автомобильные дороги», разработанного Минтрансом России в целях исполнения положений президентского Указа «О национальных целях и стратегических задачах развития Российской Федерации на период до 2024 года», станет логичным продолжением начатой два года назад масштабной работы в сфере дорожного хозяйства. Тогда эффективным механизмом федеральной поддержки регионов стал приоритетный проект «Безопасные и качественные дороги» (2017–2018 годы), работы в рамках которого проводились на территории 38 крупнейших городских агломераций в составе 36 субъектов России.</p>
<p style="color:#000; font-size:22px" id="zag1" align="left" style="text-indent: 25px;">Масштаб национального проекта охватывает практически всю страну, в нем принимают участие 83 субъекта России (за исключением Москвы и Санкт-Петербурга) и 104 городские агломерации. </p>
<p style="color:#000; font-size:22px" id="zag1" align="left" style="text-indent: 25px;">Куратор нацпроекта — заместитель Председателя Правительства Российской Федерации Максим Акимов, руководитель — Министр транспорта Российской Федерации Евгений Дитрих, администратор — первый заместитель Министра транспорта Российской Федерации Иннокентий Алафинов.</p>
<p style="color:#000; font-size:22px" id="zag1" align="left" style="text-indent: 25px;">Работа будет вестись сразу по четырем направлениям. Под эгидой Минтранса России — проекты «Дорожная сеть» и «Общесистемные меры развития дорожного хозяйства». Министерство внутренних дел Российской Федерации будет курировать проект «Безопасность дорожного движения», Министерство обороны Российской Федерации — «Автомобильные дороги Минобороны России».</p>
<p style="color:#000; font-size:22px" id="zag1" align="left" style="text-indent: 25px;">Основная «дорожная» составляющая будет реализована в рамках федеральных проектов «Дорожная сеть» и «Общесистемные меры развития дорожного хозяйства», среди основных задач которых — увеличение к 2024 году доли автодорог регионального значения в нормативном состоянии с 43,1 % (на конец 2017 года) до 50,9 %, что составит порядка 260,5 тыс. км; снижение количества мест концентрации ДТП в два раза по сравнению с 2017 годом; доведение показателя протяженности дорог городских агломераций в нормативе к 2024 году до 85 %; снижение доли федеральных и региональных трасс, работающих в режиме перегрузки, на 10 % по сравнению с 2017 годом.</p>
<p style="color:#000; font-size:22px" id="zag1" align="left" style="text-indent: 25px;">Предусмотрены мероприятия по обеспечению сохранности дорожной сети, в том числе за счет размещения автоматических пунктов весогабаритного контроля транспортных средств на региональной дорожной сети (АПВГК), внедрению интеллектуальных транспортных систем, расширению системы фотовидеофиксации нарушений правил дорожного движения. Особое внимание — технологическому росту в отрасли. Будет создан Реестр новых и наилучших технологий, материалов. В 2024 году планируется увеличить долю контрактов на осуществление дорожной деятельности, предусматривающих их использование, до 80 %.</p>
<p style="color:#000; font-size:22px" id="zag1" align="left" style="text-indent: 25px;">Финансирование программ дорожной деятельности субъектов России будет осуществляться из федерального и регионального бюджетов.</p>
<p style="color:#000; font-size:22px" id="zag1" align="left" style="text-indent: 25px;"></p>
<p style="color:#000; font-size:22px" id="zag1" align="left" style="text-indent: 25px;"></p>

    	<img src="images/GYOYvpxxnBY.jpg" style="width:100%">
   
            
   </div>         
            
    </div>  
  
    <div id="content"  >
         <div id="in">
         <h2 style="color:#FFF ;  font-family:western;" >Лента новостей</h2>
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