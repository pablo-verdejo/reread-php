<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Estilos enlazados-->
<link rel="stylesheet" type="text/css" href="../css/estilos.css">

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
    <!--Ebooks-->
    <!-- <div class="eBooks">
      <a target="_blank" href="https://www.amazon.es/Los-hombres-del-Norte-793-1241-ebook/dp/B01CTCDSDW/ref=tmm_kin_swatch_0?_encoding=UTF8&qid=1600711738&sr=8-1">
      <img src="../img/libro1.jpg" alt="eBook 1">
      <div>Los hombres del norte</div>
    </div>
    
    <div class="eBooks">
      <a href="https://www.amazon.es/dos-metros-ti-Rachael-Lippincott-ebook/dp/B07M6SH243/ref=tmm_kin_swatch_0?_encoding=UTF8&qid=1600711897&sr=8-3">
      <img src="../img/libro2.jpg" alt="eBook 2">
      <div>A dos metros de ti</div>
    </div>

    <div class="eBooks">
      <a href="https://www.amazon.es/hija-que-no-so%C3%B1aste-ebook/dp/B07FPWGRX7/ref=sr_1_1?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=HXVELQH1DFVT&dchild=1&keywords=la+hija+que+no+so%C3%B1aste&qid=1600711983&sprefix=la+hija+que+no+so%2Caps%2C203&sr=8-1">
      <img src="../img/libro3.jpg" alt="eBook 3">
      <div>La hija que no soñaste</div>
    </div>

    <div class="eBooks">
      <a href="https://www.amazon.es/El-d%C3%ADa-que-perdi%C3%B3-cordura-ebook/dp/B01MRXGBQK/ref=tmm_kin_swatch_0?_encoding=UTF8&qid=1600712027&sr=8-1">
      <img src="../img/libro4.jpg" alt="eBook 4">
      <div>El dia que se perdio la cordura</div>
    </div>
    -->
    <?php

    include '../services/connection.php';

    $result = mysqli_query($conn, "SELECT books.Description, books.img, books.title FROM books WHERE eBook !='0'");

    if(!empty($result) && mysqli_num_rows($result) > 0){
      while ($row = mysqli_fetch_array($result)){
        echo "<div class='eBooks'>";
        // Añadimos la Imagen a la pagina
        echo "<img src=../img/".$row['img']." alt='".$row['title']."'>";
        // Añadimos el titulo a la pagina
        echo "<div class='desc'>".$row['title']."</div>";
        echo "</div>";
      }
    }else {
      echo "0 Resultados";
    }

    ?>
  </div>

  <div class="column right">
    <h2>TOP VENTAS</h2>
    <p>Cien años de soledad.</p>
    <p>Crónica de una muerte anunciada.</p>
    <p>El otoño del patriarca.</p>
    <p>El general en su laberinto.</p>
  </div>
  
</div>
  
</body>
</html>
