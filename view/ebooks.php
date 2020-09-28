<!DOCTYPE html>
<html lang="en">
<head>
<script src="../javascript/code.js"></script>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="../css/estilos.css"><link>
</head>
<body>

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
    
      <!--<div class="ebook"> 
        <a href="https://www.amazon.es/Cell-BEST-SELLER-Stephen-King/dp/8483465213"><img src="../img/ebook1.jpeg" alt="ebook 1">
        <div>A través de los teléfonos móviles se envía un mensaje que convierte a todos en esclavos asesinos...</div>
      </div>
       <div class="ebook"> 
        <a href="https://www.casadellibro.com/libro-el-ciclo-del-hombre-lobo/9788499081281/1819674"><img src="../img/ebook2.jpeg" alt="ebook 2">
        <div>Una escalofriante revisión del mito del hombre lobo por el rey de la literatura de terror...</div>
      </div>
      <div class="ebook"> 
        <a href="https://www.casadellibro.com/libro-el-resplandor/9788490328729/2197218"><img src="../img/ebook3.jpeg" alt="ebook 3">
        <div>Esa es la palabra que Danny había visto en el espejo. Y, aunque no sabía leer, entendió que era un mensaje de horror...</div>
      </div>
      <div class="ebook"> 
        <a href="https://www.casadellibro.com/libro-doctor-sueno/9788401354809/2196951"><img src="../img/ebook4.jpeg" alt="ebook 4">
        <div>Una novela que entusiasmará a los millones de lectores de El resplandor y que encantará...</div>
      </div> -->

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
