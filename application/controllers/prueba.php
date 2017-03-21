<?php 
$myArray = array('firstname' =>  'Dimitri', 
    						'lastname' =>  'Avila',
    						'seniority' => 10,
    						'dep' => "Management",
    						'hired' => "01/10/2016"	 
    						 );
$misDatos=array();
$misDatos['data']=$myArray;
header('Content-Type: application/json');
print json_encode($misDatos);
exit();

 ?>