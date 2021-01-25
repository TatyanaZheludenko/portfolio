<?

include "settings.php";   
include "summa.php";

echo '<pre>';
print_r($config);
echo '</pre>';

  
?>

<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Вкладка 1</a></li>
    </ul>

    <div id="tabs_container">
        <div id="tabs-1">
        	   <form action="/my/" method="POST">	
        	   	<input name="design" type="checkbox" id="design" value="design"<?if(!empty($_POST['design'])){ echo 'checked';}?> > Готовый дизайн

        	   	<input type="text" value="<?if(!empty($_POST['design'])) 
        	   										{  
        	   											if($_POST['design']=='design') 	
        	   												{ 
        	   													echo $sum.' рублей';
        	   												} 
        	   										} 
        	   										else 
        	   										{
        	   											echo "0 рублей"; 

        	   											
        	   										}?>">

        	   	<input type="submit" value="Рассчитать"/>
        	   </form>
        </div>
    </div>
</div>


