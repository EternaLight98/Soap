<?php
// client
/*



$client=new SoapClient(NULL,$options);

*/

if(isset($_REQUEST["name"])){
  $name=$_REQUEST["name"];
}else{
  $name='Andres';
}

$options= array(
  'location' 	=>	'http://localhost:90/soap/sinwsdl/soapserver.php',
  'uri'		=>	'http://localhost:90/soap/sinwsdl/soapserver.php'
);
$client=new SoapClient(NULL,$options);

if(isset($_REQUEST["name"])){
  $data['respuesta']=$client->saludo($name.'!!');
  echo json_encode($data);
}else{
  echo $client->saludo($name.'!!')."</br>";
  echo "resultado de la suma ".$client->suma(3,5)."</br>";//  8
  echo "resultado de la resta ".$client->restas(8,2)."</br>"; //6
  echo "resultado de la mutiplicacion ".$client->multi(2,6)."</br>"; //12
  echo "resultado de la division".$client->div(12,2)."</br>"; //6
  
}


?>