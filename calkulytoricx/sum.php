<?
$sum = 0;

if(!empty($_POST['page']))
{
	if($_POST['page'] == 'design')
	{
		$sum += $config['design']['analitic']*$config['user']['analitic'];
	   $sum += $config['design']['programmer']*$config['user']['programmer'];
   	$sum += $config['design']['pro_programmer']*$config['user']['pro_programmer'];
    	$sum += $config['design']['RP']*$config['user']['RP'];
    	$sum += $config['design']['designer']*$config['user']['designer'];
    	$sum += $config['design']['server']*$config['user']['server'];
    	$sum += $config['design']['verstal']*$config['user']['verstal'];

	}
	elseif($_POST['page'] == 'template_design')
	{
	   $sum += $config['template_design']['analitic']*$config['user']['analitic'];
	   $sum += $config['template_design']['programmer']*$config['user']['programmer'];
  	   $sum += $config['template_design']['pro_programmer']*$config['user']['pro_programmer'];
      $sum += $config['template_design']['RP']*$config['user']['RP'];
      $sum += $config['template_design']['designer']*$config['user']['designer'];
      $sum += $config['template_design']['server']*$config['user']['server'];
      $sum += $config['template_design']['verstal']*$config['user']['verstal'];

	}elseif($_POST['page'] == 'individual_design')
	{
     $sum += $config['individual_design']['analitic']*$config['user']['analitic'];
     $sum += $config['individual_design']['programmer']*$config['user']['programmer'];
     $sum += $config['individual_design']['pro_programmer']*$config['user']['pro_programmer'];
     $sum += $config['individual_design']['RP']*$config['user']['RP'];
     $sum += $config['individual_design']['designer']*$config['user']['designer'];
     $sum += $config['individual_design']['server']*$config['user']['server'];
     $sum += $config['individual_design']['verstal']*$config['user']['verstal'];
	
	}

}



if(!empty($_POST['news'])){

    $sum += $config['news']['analitic']*$config['user']['analitic'];
    $sum += $config['news']['programmer']*$config['user']['programmer'];
    $sum += $config['news']['pro_programmer']*$config['user']['pro_programmer'];
    $sum += $config['news']['RP']*$config['user']['RP'];
    $sum += $config['news']['designer']*$config['user']['designer'];
    $sum += $config['news']['server']*$config['user']['server'];
    $sum += $config['news']['verstal']*$config['user']['verstal'];
}




if(!empty($_POST['active_direct'])){

    $sum += $config['active_direct']['analitic']*$config['user']['analitic'];
    $sum += $config['active_direct']['programmer']*$config['user']['programmer'];
    $sum += $config['active_direct']['pro_programmer']*$config['user']['pro_programmer'];
    $sum += $config['active_direct']['RP']*$config['user']['RP'];
    $sum += $config['active_direct']['designer']*$config['user']['designer'];
    $sum += $config['active_direct']['server']*$config['user']['server'];
    $sum += $config['active_direct']['verstal']*$config['user']['verstal'];
}





if(!empty($_POST['MDM'])){

    $sum += $config['MDM']['analitic']*$config['user']['analitic'];
    $sum += $config['MDM']['programmer']*$config['user']['programmer'];
    $sum += $config['MDM']['pro_programmer']*$config['user']['pro_programmer'];
    $sum += $config['MDM']['RP']*$config['user']['RP'];
    $sum += $config['MDM']['designer']*$config['user']['designer'];
    $sum += $config['MDM']['server']*$config['user']['server'];
    $sum += $config['MDM']['verstal']*$config['user']['verstal'];
}





if(!empty($_POST['MS_Exchange'])){

    $sum += $config['MS_Exchange']['analitic']*$config['user']['analitic'];
    $sum += $config['MS_Exchange']['programmer']*$config['user']['programmer'];
    $sum += $config['MS_Exchange']['pro_programmer']*$config['user']['pro_programmer'];
    $sum += $config['MS_Exchange']['RP']*$config['user']['RP'];
    $sum += $config['MS_Exchange']['designer']*$config['user']['designer'];
    $sum += $config['MS_Exchange']['server']*$config['user']['server'];
    $sum += $config['MS_Exchange']['verstal']*$config['user']['verstal'];
}





if(!empty($_POST['MDM'])){

    $sum += $config['MDM']['analitic']*$config['user']['analitic'];
    $sum += $config['MDM']['programmer']*$config['user']['programmer'];
    $sum += $config['MDM']['pro_programmer']*$config['user']['pro_programmer'];
    $sum += $config['MDM']['RP']*$config['user']['RP'];
    $sum += $config['MDM']['designer']*$config['user']['designer'];
    $sum += $config['MDM']['server']*$config['user']['server'];
    $sum += $config['MDM']['verstal']*$config['user']['verstal'];
}





if(!empty($_POST['english'])){

    $sum += $config['english']['analitic']*$config['user']['analitic'];
    $sum += $config['english']['programmer']*$config['user']['programmer'];
    $sum += $config['english']['pro_programmer']*$config['user']['pro_programmer'];
    $sum += $config['english']['RP']*$config['user']['RP'];
    $sum += $config['english']['designer']*$config['user']['designer'];
    $sum += $config['english']['server']*$config['user']['server'];
    $sum += $config['english']['verstal']*$config['user']['verstal'];
}




if(!empty($_POST['mobil'])){

    $sum += $config['mobil']['analitic']*$config['user']['analitic'];
    $sum += $config['mobil']['programmer']*$config['user']['programmer'];
    $sum += $config['mobil']['pro_programmer']*$config['user']['pro_programmer'];
    $sum += $config['mobil']['RP']*$config['user']['RP'];
    $sum += $config['mobil']['designer']*$config['user']['designer'];
    $sum += $config['mobil']['server']*$config['user']['server'];
    $sum += $config['mobil']['verstal']*$config['user']['verstal'];
}





if(!empty($_POST['landing'])){

    $sum += $config['landing']['analitic']*$config['user']['analitic'];
    $sum += $config['landing']['programmer']*$config['user']['programmer'];
    $sum += $config['landing']['pro_programmer']*$config['user']['pro_programmer'];
    $sum += $config['landing']['RP']*$config['user']['RP'];
    $sum += $config['landing']['designer']*$config['user']['designer'];
    $sum += $config['landing']['server']*$config['user']['server'];
    $sum += $config['landing']['verstal']*$config['user']['verstal'];
}





if(!empty($_POST['serv'])){
	
	if($_POST['serv'] == 'gotoviy'){

      $sum += $config['gotoviy']['analitic']*$config['user']['analitic'];
      $sum += $config['gotoviy']['programmer']*$config['user']['programmer'];
      $sum += $config['gotoviy']['pro_programmer']*$config['user']['pro_programmer'];
      $sum += $config['gotoviy']['RP']*$config['user']['RP'];
      $sum += $config['gotoviy']['designer']*$config['user']['designer'];
      $sum += $config['gotoviy']['server']*$config['user']['server'];
      $sum += $config['gotoviy']['verstal']*$config['user']['verstal'];
   }
   elseif($_POST['serv'] == 'razvorot')
   {
      $sum += $config['razvorot']['analitic']*$config['user']['analitic'];
      $sum += $config['razvorot']['programmer']*$config['user']['programmer'];
      $sum += $config['razvorot']['pro_programmer']*$config['user']['pro_programmer'];
      $sum += $config['razvorot']['RP']*$config['user']['RP'];
      $sum += $config['razvorot']['designer']*$config['user']['designer'];
      $sum += $config['razvorot']['server']*$config['user']['server'];
      $sum += $config['razvorot']['verstal']*$config['user']['verstal'];
    }
}








?>