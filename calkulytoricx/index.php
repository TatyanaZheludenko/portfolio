<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Калькулятор стоимости сайта</title>
	<script ENGINE="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js "></script>
	<link rel="stylesheet" href="css/style.css">
	<script src="/js/script.js"></script>

</head>
<body>


	<ul id="tabs">
    	<li><a href="#" title="tab1">Дизайн</a></li>
    	<li><a href="#" title="tab2">Серверное</a></li>
    	<li><a href="#" title="tab3">Контентное</a></li>
    	<li><a href="#" title="tab4">Интеграция</a></li> 
    	<li><a href="#" title="tab5">Сервисное</a></li>
    	<li><a href="#" title="tab6">Дополнительно</a></li>
	</ul>

<?
include "settings.php";   
include "sum.php";
?>

<form action='/' method="POST">
	<div width="100%">	
		<div width="50%" class="left">
			<div id="content">
      		<div class="ramka" id="tab1"><?include $_SERVER['DOCUMENT_ROOT'].'/tab1.php';?></div>
          	<div class="ramka" id="tab2"><?include $_SERVER['DOCUMENT_ROOT'].'/tab2.php';?></div>
          	<div class="ramka" id="tab3"><?include $_SERVER['DOCUMENT_ROOT'].'/tab3.php';?></div>
          	<div class="ramka" id="tab4"><?include $_SERVER['DOCUMENT_ROOT'].'/tab4.php';?></div>
      		<div class="ramka" id="tab5"><?include $_SERVER['DOCUMENT_ROOT'].'/tab5.php';?></div>
      		<div class="ramka" id="tab6"><?include $_SERVER['DOCUMENT_ROOT'].'/tab6.php';?></div>
			</div>
		</div>

		<div width="50%" class="left">
   		
   		<input class="btn" type="submit" value="Подсчитать"/>
	
  			<fieldset>
  				<div class="ramka4"> </div> 
				<legend>Итог</legend> 	
			 		<p><span class="fonts"><?echo $sum;?>  </span> рублей</p>
			 		<p> <span class="fonts"> 0 </span> часов</p>
			 		<p> <span class="fonts"> 0 </span> часов разработки</p>
			 		<p> <span class="fonts"> 0 </span> месяцев</p>
			</fieldset>

	
			<fieldset>
  				<div class="ramka4"> </div> 
				<legend>Команда/часы</legend>
      			 <p><span class="fonts"> 0 </span> РП</p>
      			 <p><span class="fonts"> 0 </span> аналитики</p>
      			 <p><span class="fonts"> 0 </span> программисты</p>
      			 <p><span class="fonts"> 0 </span> программисты PRO</p>
      			 <p><span class="fonts"> 0 </span> дизайнеры</p>
      			 <p><span class="fonts"> 0 </span> верстальщики</p>
      			 <p><span class="fonts"> 0 </span> серверист</p>
      	</fieldset>
		</div>
	</div>
</form>

</body>
</html>