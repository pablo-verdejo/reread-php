<!DOCTYPE html>
<html lang="en">
<head>
<script src="../javascript/code.js"></script>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<script src="./js/code.js"></script>
</head>
<body onload="descriptionImg()">

<div class="logo">Re-Read</div>

<div class="header">
  <h1>Re-Read</h1>
  <p>En Re-Read podrás encontrar libros de segunda mano en perfecto estado. También vender los tuyos. Porque siempre hay libros leídos y libros por leer. Por eso Re-compramos y Re-vendemos para que nunca te quedes sin ninguno de los dos.</p>
</div>

<div class="row">
  
  <div class="column left">

    <div class="topnav">
      <a href="../index.php">Re-Read</a>
      <a href="libros.php">Libros</a>
      <a href="ebooks.php">eBooks</a>
    </div>

        <h3>Toda la actualidad en eBook</h3>

      <div>
        <form action="ebooks.php" method="POST">
          <label for="autor">Autor</label>
          <input type="text" id="autor" name="autor" placeholder="Introduce el autor...">

          <!-- 
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

            <label for="country">Country</label>
            <select id="country" name="country">
              <option value="australia">Australia</option>
              <option value="canada">Canada</option>
              <option value="usa">USA</option>
            </select> 
          -->
        
          <input type="submit" value="Buscar">
        </form>
      </div>
    <?php
      if(isset($_POST[''])){
        //filtrara los ebooks que se mostraran en la pagina
      }else{
        //mostrara todo los ebooks
      }

    ?>
    <?php
        //Conexion a BDE
        include "../services/connection.php";
        //Seleccion y muestra de base de datos
        $result = mysqli_query($conn, "SELECT Books.Description, Books.img, Books.Title FROM Books WHERE eBook != '0'");

        if(!empty($result) && mysqli_num_rows($result) > 0) {
          //Datos de salirda de cada fila (fila = row)
          $i=0;
          while ($row = mysqli_fetch_array($result)) {
            $i++;
            echo "<div class='eBooks'>";
            //Añadimos la imagen la pagina con la etiqueta img de HTML
            echo "<img src=../img/".$row['img']." alt=".$row['Title']."'>";
            //Añadimos el titulo de la pagina con la etiqueta H2
            echo "<div class='desc'>".$row['Description']."</div>";
            echo "</div>";
            if ($i%3==0) {
              echo "<div style='clear:both;'></div>";
            }
          }
        } else{
          echo "0 resultados";
        }

        echo "</div>";

        $result = mysqli_query($conn, "SELECT Books.Title FROM Books WHERE Top > 0");

        echo "<div class='column right'>";
          echo "<h2>Top ventas</h2>";
          if(!empty($result) && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
              echo "<p>".$row['Title']."</p>";
            }
          }
        echo "</div>";

    ?>
          
</div>

</body>
</html>
