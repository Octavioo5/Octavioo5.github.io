<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 7</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .col-1.card{
            height:50px;
            width:60px;
        }
        .escalera{
            background-image:url('escalera.png');
            background-size:cover;
        }
        .serpiente{
            background-image: url('serpiente.png');
            background-size:contain;
            width:60px; 
        }
        .casilla{
          color:white;
        }
        .ficha{
            background-image:url('ficha.png');
            background-size:contain;
            background-repeat:no-repeat;
            background-position:center;
        }
</style>
</head>
<body>
        <div class="container">
        <h1>Practica 7 tablero de serpientes y escaleras</h1><hr>
          
        <form action="practica7.php" method="POST"> 
         <input type="submit" value="jugar" class="btn btn-sucess"><hr>
         <div class= "row">
    <?php
   $colores=["#A93226","#21BF0D","#0085D3","#FFCC00","#08E3C3","#9D64D6"];
   $casilla=0;
   if (isset($_POST["casilla"])) {
    $dado=rand(1,12);
    echo "<h2> Resultado del dado =".$dado."</h2>";
    $casilla=$dado+intval($_POST["casilla"]);
    echo "<h3>El jugador estaba en la casilla " .intval($_POST["casilla"])." y paso a la casilla " .$casilla."</h3>";
   
    if ($casilla >= 100) {
      echo "<h1>El jugador gano</h1>";
      $casilla=100;
     }
     //Serpientes
     if ($casilla == 99) {
        $casilla=49;
        echo "<h3>El jugador cayo en una <img src='serpiente.png' width='50px'> y bajo a la casilla 49 </h3>";
      
     }
     if ($casilla == 95) {
      $casilla=85;
      echo "<h3>El jugador cayo en una <img src='serpiente.png' width='50px'> y bajo a la casilla 85 </h3>";
    
   }
   if ($casilla == 93) {
      $casilla=83;
      echo "<h3>El jugador cayo en una <img src='serpiente.png' width='50px'> y bajo a la casilla 83 </h3>";
    
   }
   if ($casilla ==64) {
    $casilla=54;
    echo "<h3>El jugador cayo en una <img src='serpiente.png' width='50px'> y bajo a la casilla 54 </h3>";
  
  }
  if ($casilla ==54 ) {
      $casilla=44;
      echo "<h3>El jugador cayo en una <img src='serpiente.png' width='50px'> y bajo a la casilla 44 </h3>";
    
   }
   if ($casilla == 54) {
    $casilla= 44;
    echo "<h3>El jugador cayo en una <img src='serpiente.png' width='50px'> y bajo a la casilla 44 </h3>";
  
  }
  if ($casilla == 58) {
      $casilla=48;
      echo "<h3>El jugador cayo en una <img src='serpiente.png' width='50px'> y bajo a la casilla 44 </h3>";
    
   }
   if ($casilla == 36) {
    $casilla=26;
    echo "<h3>El jugador cayo en una <img src='serpiente.png' width='50px'> y bajo a la casilla 26 </h3>";
  
  }
  if ($casilla == 17) {
      $casilla=7;
      echo "<h3>El jugador cayo en una <img src='serpiente.png' width='50px'> y bajo a la casilla 7 </h3>";
    
    }
    //Escaleras
    if ($casilla == 4) {
      $casilla=14;
      echo "<h3>El jugador cayo en una <img src='escalera.png' width='50px'> y subio a la casilla 14 </h3>";
    
    }
    if ($casilla == 9) {
      $casilla=19;
      echo "<h3>El jugador cayo en una <img src='escalera.png' width='50px'> y subio a la casilla 19 </h3>";
    
    }
    if ($casilla == 40) {
      $casilla=50;
      echo "<h3>El jugador cayo en una <img src='escalera.png' width='50px'> y subio a la casilla 30 </h3>";
    
    }
    if ($casilla == 28) {
      $casilla=38;
      echo "<h3>El jugador cayo en una <img src='escalera.png' width='50px'> y subio a la casilla 38 </h3>";
    
    }
    if ($casilla == 33) {
      $casilla=43;
      echo "<h3>El jugador cayo en una <img src='escalera.png' width='50px'> y subio a la casilla 45 </h3>";
    
    }
    if ($casilla == 71) {
      $casilla=81;
      echo "<h3>El jugador cayo en una <img src='escalera.png' width='50px'> y subio a la casilla 81 </h3>";
    
    }
    if ($casilla == 77) {
      $casilla=87;
      echo "<h3>El jugador cayo en una <img src='escalera.png' width='50px'> y subio a la casilla 87 </h3>";
    
    }
    if ($casilla == 80) {
      $casilla=90;
      echo "<h3>El jugador cayo en una <img src='escalera.png' width='50px'> y subio a la casilla 90 </h3>";
    
    }
  }else{
    $casilla=0;
      }
    ?>
        <?php  
  for($i=100; $i >0; $i--){ 
  if ($casilla == $i) {
    echo "<div class='col-1 card  m-1 casilla ficha' style='background-color:".$colores[rand(0,5)]."'>".$i."</div>";  
     }else if ($i == 4 || $i == 9 || $i == 33 || $i == 28 || $i == 40 || $i == 80 || $i ==71 || $i == 77){
      echo "<div class='col-1 card  m-1 casilla escalera' style='background-color:".$colores[rand(0,5)]."'>".$i."</div>";
     }else if($i == 17 || $i == 54 || $i == 58 || $i == 64 || $i == 87 || $i == 93 || $i == 95 || $i == 99 || $i == 36){
      echo "<div class='col-1 card  m-1 casilla serpiente' style='background-color:".$colores[rand(0,5)]."'>".$i."</div>";
     }else{
      echo "<div class='col-1 card  m-1 casilla' style='background-color:".$colores[rand(0,5)]."'>".$i."</div>";
              }
            }
?>
</div>
<input type="hidden" name="casilla" value="<?php echo $casilla; ?> ">
</form>

</div>
    
</body>
</html>