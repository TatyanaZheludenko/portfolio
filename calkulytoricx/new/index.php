<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
	<title>Кнопка</title>
</head>

<body> 

	<div id="tabs">
		<ul>
    		<li><a href="#tabs-1">Вкладка 1</a></li>
		</ul>

		<div id="tabs_container">
    		<div id="tabs-1">
 				<form  method="POST">
 					<input name="design" type="radio" id="analitic" value="analitic" checked> Готовый дизайн
 					<input type="text" value="<?if($_POST['design']=='analitic'){ echo 5; }?>">
					<input type="submit" value="Рассчитать">
				</form>
			</div>
    	</div>
    </div>

	

</body>

</html>