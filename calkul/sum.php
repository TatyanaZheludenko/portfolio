<?
$sum = 0;




if(!empty($_POST['mobil'])){

    $sum += $config['mobil']['analitic'];
    $sum += $config['mobil']['programmer'];
    $sum += $config['mobil']['pro_programmer'];
    $sum += $config['mobil']['RP'];
    $sum += $config['mobil']['designer'];
    $sum += $config['mobil']['server'];
    $sum += $config['mobil']['verstal'];
}

if(!empty($_POST['landing'])){

    $sum += $config['landing']['analitic'];
    $sum += $config['landing']['programmer'];
    $sum += $config['landing']['pro_programmer'];
    $sum += $config['landing']['RP'];
    $sum += $config['landing']['designer'];
    $sum += $config['landing']['server'];
    $sum += $config['landing']['verstal'];
}


?>

<?
$summ=0;
if(!empty($_POST['mobil'])){
       

    $summ += $config['mobil']['analitic']*$config['user']['analitic'];
    $summ += $config['mobil']['programmer']*$config['user']['programmer'];
    $summ += $config['mobil']['pro_programmer']*$config['user']['pro_programmer'];
    $summ += $config['mobil']['RP']*$config['user']['RP'];
    $summ += $config['mobil']['designer']*$config['user']['designer'];
    $summ += $config['mobil']['server']*$config['user']['server'];
    $summ += $config['mobil']['verstal']*$config['user']['verstal'];
}

if(!empty($_POST['landing'])){
       

    $summ += $config['landing']['analitic']*$config['user']['analitic'];
    $summ += $config['landing']['programmer']*$config['user']['programmer'];
    $summ += $config['landing']['pro_programmer']*$config['user']['pro_programmer'];
    $summ += $config['landing']['RP']*$config['user']['RP'];
    $summ += $config['landing']['designer']*$config['user']['designer'];
    $summ += $config['landing']['server']*$config['user']['server'];
    $summ += $config['landing']['verstal']*$config['user']['verstal'];
}



?>