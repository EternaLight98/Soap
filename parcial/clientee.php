<!DOCTYPE html>
<html>
<head>
    <title>pARCIAL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body class="formulario">
    <div class="container mt-5" >
        <h2 class="mb-4">Consumo de servicio parcial</h2>
        <form method="post" action="">

            <div class="form-group">
                <label for="num1" class="tex">texto:</label>
                <input type="string" class="form-control" name="name">
            </div>
            
            
            <button type="submit" class="btn btn-primary" name="calcular">Procesar</button>
        </form>

       
        <?php
        
       // require 'nusoap.php';
       // $client = new nusoap_client("https://servicios.documentosige.com.co/service.php?wsdl");

        $options= array(
            'location' 	=>	'https://servicios.documentosige.com.co/service.php?wsdl',
            'uri'		=>	'https://servicios.documentosige.com.co/service.php?wsdl'
          );
          $client=new SoapClient(NULL,$options);


        //if(isset($_POST['calcular'])) {
        

        $hello = $_POST['name'];
    

    
        
        /*$options = array(
            'location' => 'http://localhost/soap/server.php', 
            'uri' => 'http://localhost/soap/server.php',  */
       
       

      

         
            $resultado = $client->hello($hello);
             
            echo "<br>"."Resultado Operación: ".$resultado."<br>";
                      
       
   // }
    ?>
    </div>

</body>
</html>


