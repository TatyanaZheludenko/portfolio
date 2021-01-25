<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Калькулятор стоимости сайта</title>
	<script ENGINE="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js "></script>
	<link rel="stylesheet" href="css/style.css">
	<script src="/js/script.js"></script>

</head>

<body>

<?
include "settings.php";   
include "sum.php";


?>



 

<form action='/' method="POST">
	
		
			<table  width="100%" cellpadding="5">
   <tr>
    
    
  
				<th><fieldset>

					<legend>Список услуг</legend> 	
					<div><?include $_SERVER['DOCUMENT_ROOT'].'/tab1.php';?></div>

				</fieldset> </th>
	</div>


	
   		<th>
			<fieldset>

  				
				<legend>Итог</legend> 	
			 	<p><span class="fonts"> <?echo $summ;?> </span> рублей</p>
			 	<p><span class="fonts"> <?echo $sum;?> </span> часов разработки</p>
			 	<p><span> 0 </span> часов</p>
			 	<p><span> 0 </span> месяцев</p>
			 	<input class="btn" type="submit" value="Подсчитать"/>
			</fieldset>



		</th>
			 </tr>
	</div>

</form>

</body>
</html>