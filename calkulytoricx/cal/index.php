<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Калькулятор стоимости сайта</title>
	<script ENGINE="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js "></script>
	<link rel="stylesheet" href="css/style.css">
	<script src="/cal/js/script.js"></script>

</head>
<body>
	 

<div id="container">
  <div class="block">
    <h3>Дизайн</h3><input type="checkbox" name="channelcost" value="6000" onClick="test(this);" /> <br />
  </div>
  <div class="block">
    <h3>Новости</h3><input type="checkbox" name="channelcost" value="5000" onClick="test(this);" /> <br />
  </div>
  <div class="block">
    <h3>Верстка</h3><input type="checkbox" name="channelcost" value="4000" onClick="test(this);" /> <br />
  </div>
  <div class="block">
    <h3>Логирование</h3><input type="checkbox" name="channelcost" value="3000" onClick="test(this);" /> <br />
  </div>
</div>

<br /><br />Итого: <span id="Totalcost"> </span>
<div class="price">

</div>


</body>
</html>