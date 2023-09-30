<?php

// server
class MiPrimerSoap
{
  public function suma($num1,$num2){
    return $num1+$num2;
  }

  public function resta($num1,$num2){
    return $num1-$num2;
  }

  public function multi($num1,$num2){
    return $num1*$num2;
  }

  public function div($num1,$num2){
    return $num1/$num2;
  }

  public function comparacion($num1,$num2){
    return $num1*$num2;
}

  public function factorial($num1){
    $resultado = 1;
    for($x = $num1; $x > 0; $x--){
        $resultado *= $x;
    }

    return $resultado;
}


}


/*$options= array('uri'=>'http://localhost/soap');
$server=new SoapServer('Calculadora.wsdl',$options);
$server->setClass('MiPrimerSoap');
$server->handle();
*/
?>