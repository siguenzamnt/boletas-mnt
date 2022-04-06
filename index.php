<?php
  $mysqli = new mysqli('localhost', 'root', '', 'db_mnt_cr');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>MNT C.R</title>
  </head>
  <body>
    <h1>MULTI NEGOCIOS TECNOLÓGICOS COSTA RICA CJP 
      <br>
      San José, Costa Rica. Ced. Jurídica: 3-101-605557
      <br>
      <b>(506) 2226-2153 / (506) 2226-0449</b>
      <br><b>E-mails: info@mntcr.net / soporte@mntcr.com</b>
      <br><b>www.mntcr.com</b>
    </h1>
    <div><img src="logo.png" class="logo"></div>
        </div>
    <div>
      <p class="num-boleta"> BOLETA N°: </p>
    </div>
    <!--Check Inicio de Boleta-->
    <form action="mailto:msiguenza@mntcr.com" method="POST">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" name="mantenimiento de equipo" id="flexCheckDefault"checked>
      <label class="form-check-label" for="flexCheckDefault">
        MANTENIMIENTO DE EQUIPO
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" name="entrega de proyecto" id="flexCheckChecked" >
      <label class="form-check-label" for="flexCheckChecked">
        ENTREGA DE PROYECTO
      </label>
    </div>
    <br>
    <br>   
    <div>
      <label for="validationDefaultUsername" class="fecha-label">FECHA</label>
      <input class="fecha" type="date" name="fecha" id="">
      <br>
      <label for="validationDefaultUsername" class="fecha-label">HORA ENTRADA</label>
      <input class="tiempo-entrada" type="time" name="t_entrada" id="">
      <br>
      <label for="validationDefaultUsername" class="fecha-label">HORA SALIDA</label>
      <input class="tiempo-entrada" type="time" name="t_salida" id="">
    </div>
    <br>
    <br>
    <!--Clientes -->
    <div class="clientes">                        
    <p>Seleccione un cliente:</p>
    <p>CLIENTE:
      <select>
        <option value="0">Seleccione:</option>
        <?php
          $query = $mysqli -> query ("SELECT * FROM clientes");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[id].'">'.$valores[clientes].'</option>';
          }
        ?>
      </select>
    </p>
  </div>
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label">ENCARGADO 1</label>
        <input type="text" class="form-control" name="encargado1" id="validationDefault02" value="" required>
      </div>
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label">TELÉFONO</label>
        <input type="text" class="form-control" name="telefono" id="validationDefault02" value="" required>
      </div>
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label">TÉCNICO</label>
        <input type="text" class="form-control" name="tecnico1" id="validationDefault02" value="" >
      </div>
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label">TÉCNICO</label>
        <input type="text" class="form-control" name="tecnico2" id="validationDefault02" value="" >
      </div>
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label">TÉCNICO</label>
        <input type="text" class="form-control" name="tecnico3" id="validationDefault02" value="" >
      </div>
      <div class="mb-3">
        <label for="validationTextarea" class="form-label">DETALLES</label>
        <textarea class="form-control is-invalid" id="validationTextarea" name="detalles" placeholder="Por favor coloque el detalle del trabajo realizado." required></textarea>
        <div class="invalid-feedback">
          Por favor coloque el detalle del trabajo realizado.
        </div>
        <div class="mb-3">
          <label for="formFileMultiple" class="form-label">Subir Fotografías</label>
          <input class="form-control" type="file" id="formFileMultiple" multiple>
        </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">ENVIAR BOLETA DE TRABAJO</button>
      </div>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>