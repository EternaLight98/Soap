<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <div>
      <form method="post" action>
        <div  class="form-group">
          <label for="num1">Numero 1</label>
          <input type="number" name="num1" required>
        </div>

        <div  class="form-group">
          <label for="num2">Numero 2</label>
          <input type="number" name="num2" required>
        </div>

        <div class="form-group">
          <label for="operaciones">Operaciones</label>
          <select class="form-group" name="operaciones">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multi">Multiplicación</option>
            <option value="div">División</option>
          </select>
          <button type="submit" class="btn btn-primary" name="calcular">Calcular</button>
      </form> 
  
</body>
</html>