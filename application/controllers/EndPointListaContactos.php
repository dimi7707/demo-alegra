<?php 
/*$myArray = array('firstname' =>  'Dimitri', 
    						'lastname' =>  'Avila',
    						'seniority' => 10,
    						'dep' => "Management",
    						'hired' => "01/10/2016"	 
    						 );
$misDatos=array();
$misDatos['data']=$myArray;
*/
$data = array("start" => 0,
			  "limit" => 30,
			  "order_direction" => 'ASC',
			  "order_field" => 'name',			  
			  "metadata" => false);
$ch = curl_init("https://app.alegra.com/api/v1/contacts/ -u 'dimi7707@gmail.com:accesoAlegra100**'");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
$response = curl_exec($ch);
		// Se cierra el recurso CURL y se liberan los recursos del sistema
		curl_close($ch);		
		if(!$response) {
		    echo "vacioo";
		}else{
			var_dump($response);
		}
$misDatos=array();
$misDatos['data']=$response;
header('Content-Type: application/json');
print json_encode($misDatos);
exit();
 ?>