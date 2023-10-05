<?php 

    include_once "../config/conexion.php";
  

?>

<htm>
    <head>
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
        <script src="https://code.jquery.com/jquery-3.0.0.js"crossorigin="anonymous"></script>
        <!-- jQuery and JS bundle w/ Popper.js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>   

        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="controlador.js"></script>
    </head>
    <body>
        <div class="container">

            <div class="row mt-3">
              <div class="col-12">
                <form class="formulario">
                    <input type="hidden" id="cat_id" name="cat_id"/>
                    <div class="form-group">
                      <label >Nombre Cliente</label>
                      <input type="text" class="form-control" id="cat_nom" name="cat_nom"  placeholder="Nombre" >
                    </div>
                    <div class="form-group">
                        <label >Producto</label>
                        <input type="text" class="form-control" id="cat_obs" name="cat_obs" placeholder="Producto" >
                    </div>
                    <div class="form-group">
                        <label >Cantidad</label>
                        <input type="text" class="form-control" id="est" name="est" placeholder="Cantidad" >
                    </div>
                    <button id="btn-guardar" type="button" class="btn btn-primary" onclick="guardar()">Guardar</button>
                    <button id="btn-actualizar" type="button" class="btn btn-primary" onclick="actualizar()" style="display:none">Actualiar</button>
                    <button type="button" class="btn btn-primary" onclick="limpiar()">nuevo</button>
                    
                  </form>
              </div>
            </div>
          </div>
        <hr>

          <table   id="tabla-categoria"  class="tabla-categoria" border="1" >
            <thead class="grupo">
              <tr class="textos">
                <th>Id</th><br>
                <th>Nombre Cliente</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Metodos</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>

    </body>
    <style>
      .tabla-categoria{
        border-radius: 50px;
        margin: auto;
        border: black;
        text-align: center;
        font-size: 20px;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        align-self: start;
        border-style: solid;
      }

      .textos{
        color: red;
      }



      .formulario{
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        margin: auto;
        font-size: 25px;
        width: 640px;
      }

      .form-control{
        border-color: black;
        border-radius: 10px;
        background-color: #d4dbe4;
      }


    </style>
    
</htm>