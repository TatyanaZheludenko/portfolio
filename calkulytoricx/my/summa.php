<?
if(!empty($_POST['design'])){

	$sum1 = $config['design']['analitic']*$config['user']['analitic'];     //аналитик
                                                                                 
	$sum2 = $config['design']['programmer']*$config['user']['programmer'];   //программист

	$sum3 = $config['design']['pro_programmer']*$config['user']['pro_programmer'];    //про-программист

	$sum4 = $config['design']['RP']*$config['user']['RP'];  // РП

	$sum5 = $config['design']['designer']*$config['user']['designer'];  // дизайнер

	$sum6 = $config['design']['server']*$config['user']['server'];    // серверист

	$sum7 = $config['design']['verstal']*$config['user']['verstal'];  // верстальщик

	$sum_1 = $sum1 + $sum2 + $sum3 + $sum4 + $sum5 + $sum6 + $sum7;
}


if(!empty($_POST['template_design'])){

	$sum1_1 = $config['template_design']['analitic']*$config['user']['analitic'];     //аналитик
                                                                                 
	$sum2_1 = $config['template_design']['programmer']*$config['user']['programmer'];   //программист

	$sum3_1 = $config['template_design']['pro_programmer']*$config['user']['pro_programmer'];    //про-программист

	$sum4_1 = $config['template_design']['RP']*$config['user']['RP'];  // РП

	$sum5_1 = $config['template_design']['designer']*$config['user']['designer'];  // дизайнер

	$sum6_1 = $config['template_design']['server']*$config['user']['server'];    // серверист

	$sum7_1 = $config['template_design']['verstal']*$config['user']['verstal'];  // верстальщик

	$sum_2 = $sum1_1 + $sum2_1 + $sum3_1 + $sum4_1 + $sum5_1 + $sum6_1 + $sum7_1;
}

if(!empty($_POST['individual_design'])){

	$sum1_2 = $config['individual_design']['analitic']*$config['user']['analitic'];     //аналитик
                                                                                 
	$sum2_2 = $config['individual_design']['programmer']*$config['user']['programmer'];   //программист

	$sum3_2 = $config['individual_design']['pro_programmer']*$config['user']['pro_programmer'];    //про-программист

	$sum4_2 = $config['individual_design']['RP']*$config['user']['RP'];  // РП

	$sum5_2 = $config['individual_design']['designer']*$config['user']['designer'];  // дизайнер

	$sum6_2 = $config['individual_design']['server']*$config['user']['server'];    // серверист

	$sum7_2 = $config['individual_design']['verstal']*$config['user']['verstal'];  // верстальщик

	$sum_3 = $sum1_2 + $sum2_2 + $sum3_2 + $sum4_2 + $sum5_2 + $sum6_2 + $sum7_2;
}







if(!empty($_POST['news'])){

	$sum1_3 = $config['news']['analitic']*$config['user']['analitic'];     //аналитик
                                                                                 
	$sum2_3 = $config['news']['programmer']*$config['user']['programmer'];   //программист

	$sum3_3 = $config['news']['pro_programmer']*$config['user']['pro_programmer'];    //про-программист

	$sum4_3 = $config['news']['RP']*$config['user']['RP'];  // РП

	$sum5_3 = $config['news']['designer']*$config['user']['designer'];  // дизайнер

	$sum6_3 = $config['news']['server']*$config['user']['server'];    // серверист

	$sum7_3 = $config['news']['verstal']*$config['user']['verstal'];  // верстальщик

	$sum_4 = $sum1_3 + $sum2_3 + $sum3_3 + $sum4_3 + $sum5_3 + $sum6_3 + $sum7_3;
}



if(!empty($_POST['active_direct'])){

	$sum1_4 = $config['active_direct']['analitic']*$config['user']['analitic'];     //аналитик
                                                                                 
	$sum2_4 = $config['active_direct']['programmer']*$config['user']['programmer'];   //программист

	$sum3_4 = $config['active_direct']['pro_programmer']*$config['user']['pro_programmer'];    //про-программист

	$sum4_4 = $config['active_direct']['RP']*$config['user']['RP'];  // РП

	$sum5_4 = $config['active_direct']['designer']*$config['user']['designer'];  // дизайнер

	$sum6_4= $config['active_direct']['server']*$config['user']['server'];    // серверист

	$sum7_4 = $config['active_direct']['verstal']*$config['user']['verstal'];  // верстальщик

	$sum_5 = $sum1_4 + $sum2_4 + $sum3_4 + $sum4_4 + $sum5_4 + $sum6_4 + $sum7_4;
}



if(!empty($_POST['MS_Exchange'])){

	$sum1_5 = $config['MS_Exchange']['analitic']*$config['user']['analitic'];     //аналитик
                                                                                 
	$sum2_5 = $config['MS_Exchange']['programmer']*$config['user']['programmer'];   //программист

	$sum3_5 = $config['MS_Exchange']['pro_programmer']*$config['user']['pro_programmer'];    //про-программист

	$sum4_5 = $config['MS_Exchange']['RP']*$config['user']['RP'];  // РП

	$sum5_5 = $config['MS_Exchange']['designer']*$config['user']['designer'];  // дизайнер

	$sum6_5 = $config['MS_Exchange']['server']*$config['user']['server'];    // серверист

	$sum7_5 = $config['MS_Exchange']['verstal']*$config['user']['verstal'];  // верстальщик

	$sum_6 = $sum1_5 + $sum2_5 + $sum3_5 + $sum4_5 + $sum5_5 + $sum6_5 + $sum7_5;
}



if(!empty($_POST['MDM'])){

	$sum1_6 = $config['MDM']['analitic']*$config['user']['analitic'];     //аналитик
                                                                                 
	$sum2_6 = $config['MDM']['programmer']*$config['user']['programmer'];   //программист

	$sum3_6 = $config['MDM']['pro_programmer']*$config['user']['pro_programmer'];    //про-программист

	$sum4_6 = $config['MDM']['RP']*$config['user']['RP'];  // РП

	$sum5_6 = $config['MDM']['designer']*$config['user']['designer'];  // дизайнер

	$sum6_6 = $config['MDM']['server']*$config['user']['server'];    // серверист

	$sum7_6 = $config['MDM']['verstal']*$config['user']['verstal'];  // верстальщик

	$sum_7 = $sum1_6 + $sum2_6 + $sum3_6 + $sum4_6 + $sum5_6 + $sum6_6 + $sum7_6;
}



if(!empty($_POST['log'])){

	$sum1_7 = $config['log']['analitic']*$config['user']['analitic'];     //аналитик
                                                                                 
	$sum2_7 = $config['log']['programmer']*$config['user']['programmer'];   //программист

	$sum3_7 = $config['log']['pro_programmer']*$config['user']['pro_programmer'];    //про-программист

	$sum4_7 = $config['log']['RP']*$config['user']['RP'];  // РП

	$sum5_7 = $config['log']['designer']*$config['user']['designer'];  // дизайнер

	$sum6_7 = $config['log']['server']*$config['user']['server'];    // серверист

	$sum7_7 = $config['log']['verstal']*$config['user']['verstal'];  // верстальщик

	$sum_8 = $sum1_7 + $sum2_7 + $sum3_7 + $sum4_7 + $sum5_7 + $sum6_7 + $sum7_7;
}




if(!empty($_POST['english'])){

	$sum1_8 = $config['english']['analitic']*$config['user']['analitic'];     //аналитик
                                                                                 
	$sum2_8 = $config['english']['programmer']*$config['user']['programmer'];   //программист

	$sum3_8 = $config['english']['pro_programmer']*$config['user']['pro_programmer'];    //про-программист

	$sum4_8 = $config['english']['RP']*$config['user']['RP'];  // РП

	$sum5_8 = $config['english']['designer']*$config['user']['designer'];  // дизайнер

	$sum6_8 = $config['english']['server']*$config['user']['server'];    // серверист

	$sum7_8 = $config['english']['verstal']*$config['user']['verstal'];  // верстальщик

	$sum_9 = $sum1_8 + $sum2_8 + $sum3_8 + $sum4_8 + $sum5_8 + $sum6_8 + $sum7_8;
}




if(!empty($_POST['mobil'])){

	$sum1_9 = $config['mobil']['analitic']*$config['user']['analitic'];     //аналитик
                                                                                 
	$sum2_9 = $config['mobil']['programmer']*$config['user']['programmer'];   //программист

	$sum3_9 = $config['mobil']['pro_programmer']*$config['user']['pro_programmer'];    //про-программист

	$sum4_9 = $config['mobil']['RP']*$config['user']['RP'];  // РП

	$sum5_9 = $config['mobil']['designer']*$config['user']['designer'];  // дизайнер

	$sum6_9 = $config['mobil']['server']*$config['user']['server'];    // серверист

	$sum7_9 = $config['mobil']['verstal']*$config['user']['verstal'];  // верстальщик

	$sum_10 = $sum1_9 + $sum2_9 + $sum3_9 + $sum4_9 + $sum5_9 + $sum6_9 + $sum7_9;
}


if(!empty($_POST['landing'])){

	$sum1_10 = $config['landing']['analitic']*$config['user']['analitic'];     //аналитик
                                                                                 
	$sum2_10 = $config['landing']['programmer']*$config['user']['programmer'];   //программист

	$sum3_10 = $config['landing']['pro_programmer']*$config['user']['pro_programmer'];    //про-программист

	$sum4_10 = $config['landing']['RP']*$config['user']['RP'];  // РП

	$sum5_10 = $config['landing']['designer']*$config['user']['designer'];  // дизайнер

	$sum6_10 = $config['landing']['server']*$config['user']['server'];    // серверист

	$sum7_10 = $config['landing']['verstal']*$config['user']['verstal'];  // верстальщик

	$sum_11 = $sum1_10 + $sum2_10 + $sum3_10 + $sum4_10 + $sum5_10 + $sum6_10 + $sum7_10;
}


if(!empty($_POST['gotoviy'])){

	$sum1_11 = $config['gotoviy']['analitic']*$config['user']['analitic'];     //аналитик
                                                                                 
	$sum2_11 = $config['gotoviy']['programmer']*$config['user']['programmer'];   //программист

	$sum3_11 = $config['gotoviy']['pro_programmer']*$config['user']['pro_programmer'];    //про-программист

	$sum4_11 = $config['gotoviy']['RP']*$config['user']['RP'];  // РП

	$sum5_11 = $config['gotoviy']['designer']*$config['user']['designer'];  // дизайнер

	$sum6_11 = $config['gotoviy']['server']*$config['user']['server'];    // серверист

	$sum7_11 = $config['gotoviy']['verstal']*$config['user']['verstal'];  // верстальщик

	$sum_12 = $sum1_11 + $sum2_11 + $sum3_11 + $sum4_11 + $sum5_11 + $sum6_11 + $sum7_11;
}



if(!empty($_POST['razvorot'])){

	$sum1_12 = $config['razvorot']['analitic']*$config['user']['analitic'];     //аналитик
                                                                                 
	$sum2_12 = $config['razvorot']['programmer']*$config['user']['programmer'];   //программист

	$sum3_12 = $config['razvorot']['pro_programmer']*$config['user']['pro_programmer'];    //про-программист

	$sum4_12 = $config['razvorot']['RP']*$config['user']['RP'];  // РП

	$sum5_12 = $config['razvorot']['designer']*$config['user']['designer'];  // дизайнер

	$sum6_12 = $config['razvorot']['server']*$config['user']['server'];    // серверист

	$sum7_12 = $config['razvorot']['verstal']*$config['user']['verstal'];  // верстальщик

	$sum_13 = $sum1_12 + $sum2_12 + $sum3_12 + $sum4_12+ $sum5_12 + $sum6_12 + $sum7_12;
}







$sum =  $sum_1 + $sum_2 + $sum_3 + $sum_4 + $sum_5 + $sum_6 + $sum_7 + $sum_8 + $sum_9 + $sum_10 + $sum_11 + $sum_12 + $sum_13;












?>