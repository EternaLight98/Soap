<?php
$options= array(
  'location' 	=>	'http://localhost:90/soap/soapserver.php',
  'uri'		=>	'http://localhost:90/soap/soapserver.php'
);
$client=new SoapClient(NULL,$options);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SOAP Web Service Client Side Demo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Calculadora</h2>
  <form class="form-inline" action="" method="POST">
    <div class="form-group">
      <label for="name">numero 1</label>
      <input type="number" name="num1" class="form-control"  placeholder="Primer numero" required/>
      <label for="name">numero 2</label>
      <input type="number" name="num2" class="form-control"  placeholder="Segundo numero" required/>
    </div>
    <button type="submit" name="submit" class="btn btn-default">Enviar</button>
  </form>
  <p>&nbsp;</p>
  <h3>
  <?php
	if(isset($_POST['submit']))
	{
		$num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
		
		$response =  $client->getMessage($num1,$num2);  

		if(empty($response))
			echo "Price of that product is not available";
		else
			echo $response;
	}
   ?>
  </h3>
</div>
</body>
</html>