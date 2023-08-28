<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body class="formulario">
    <div class="container mt-5" >
        <h2 class="mb-4">Calculadora</h2>
        <form method="post" action="">

            <div class="form-group">
                <label for="num1" class="tex">Número 1:</label>
                <input type="number" class="form-control" name="num1">
            </div>
            
            <div class="form-group">
                <label for="num2" class="tex">Número 2:</label>
                <input type="number" class="form-control" name="num2">
            </div>
            
            <div class="form-group">
                <label for="operacion">Operación:</label>
                <select class="form-control" name="operacion">
                    <option value="suma">Suma</option>
                    <option value="resta">Resta</option>
                    <option value="multi">Multiplicación</option>
                    <option value="div">División</option>
                    <option value="factorial">Factorial del Primer numero</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary" name="calcular">Calcular</button>
        </form>

       
        <?php
        if(isset($_POST['calcular'])) {
        
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];
        
        $options = array(
            'location' => 'http://localhost/soap/soapserver.php', 
            'uri' => 'http://localhost/soap/soapserver.php', 
        );

        try {
            $client = new SoapClient('Calculadora.wsdl', $options);

            if($operacion === 'suma') {
                $resultado = $client->suma($num1, $num2);
            } elseif($operacion === 'resta') {
                $resultado = $client->resta($num1, $num2);
            } elseif($operacion === 'multi') {
                $resultado = $client->multi($num1, $num2);
            } elseif($operacion === 'div') {
                if($num2 != 0) {
                    $resultado = $client->div($num1, $num2);
                } else {
                    echo "No se puede dividir por cero.";
                }
            }elseif($operacion === 'factorial'){
                $resultado = $client->factorial($num1);
            }

            echo "<br>"."Resultado Operación: ".$resultado."<br>";
                      
        } catch (SoapFault $e) {
            echo "Error: " . $e->getMessage();
        } 
    }
    ?>
    </div>

</body>
</html>
