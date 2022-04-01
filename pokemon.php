<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">
   
</head>
<body>
<div class="container">
<!--1-->
<div class="pokemon">
    <?php 

      $base = "https://pokeapi.co/api/v2/pokemon/";
      $id = 20;
      $data = file_get_contents($base.$id.'/');
      $pokemon = json_decode($data);

      ?>

      <div class="img">

     <?php
      echo '<img src="'.$pokemon->sprites->front_default.'" width="200">';
     ?>

      </div>
      
      <h1 class="name">

      <?php
      echo $pokemon -> name;
      ?>

      </h1>
      
      <?php
      echo '<h2 class="abilities">Abilities</h2>';

      foreach($pokemon -> abilities as $k => $v) {
      ?>

      <h3 class="ability">

      <?php
      echo   $v -> ability -> name. '<br>';
      ?>

      </h3>

      <?php
    }
      ?>

      <h4 class="stats">
      
      <?php
      echo $pokemon -> stats[0] -> stat -> name. '<br>'; 
      echo $pokemon -> stats[0] -> base_stat. '<br>';

      echo $pokemon -> stats[1] -> stat -> name. '<br>'; 
      echo $pokemon -> stats[1] -> base_stat. '<br>';  

      echo $pokemon -> stats[2] -> stat -> name. '<br>'; 
      echo $pokemon -> stats[2] -> base_stat. '<br>'; 
      ?>

      </h4>

      <h4 class="current">Форма зараз:</h4>
      <h4 class="form">

      <?php
      $form = 0;
      echo $pokemon -> forms[$form] -> name;
      ?>

      </h4>
      <h4 class="current">Наступна форма:</h4>
      <?php 

      if($pokemon -> forms[$form+1] == elem){

      ?>
      <?php
      
      echo next($pokemon -> forms[$form] -> name);
     
      } 
      
      else {
        echo '<h4>Це остання форма</h4>';
      }
      ?>
      </div>
<!--2-->
<div class="pokemon">
      <?php 

      $base = "https://pokeapi.co/api/v2/pokemon/";
      $id = 1;
      $data = file_get_contents($base.$id.'/');
      $pokemon = json_decode($data);

      ?>

      <div class="img">

     <?php
      echo '<img src="'.$pokemon->sprites->front_default.'" width="200">';
     ?>

      </div>
      
      <h1 class="name">

      <?php
      echo $pokemon -> name;
      ?>

      </h1>
      
      <?php
      echo '<h2 class="abilities">Abilities</h2>';

      foreach($pokemon -> abilities as $k => $v) {
      ?>

      <h3 class="ability">

      <?php
      echo   $v -> ability -> name. '<br>';
      ?>

      </h3>

      <?php
    }
      ?>

      <h4 class="stats">
      
      <?php
      echo $pokemon -> stats[0] -> stat -> name. '<br>'; 
      echo $pokemon -> stats[0] -> base_stat. '<br>';

      echo $pokemon -> stats[1] -> stat -> name. '<br>'; 
      echo $pokemon -> stats[1] -> base_stat. '<br>';  

      echo $pokemon -> stats[2] -> stat -> name. '<br>'; 
      echo $pokemon -> stats[2] -> base_stat. '<br>'; 
      ?>

      </h4>

      <h4 class="current">Форма зараз:</h4>
      <h4 class="form">

      <?php
      $form = 0;
      echo $pokemon -> forms[$form] -> name;
      ?>

      </h4>
      <h4 class="current">Наступна форма:</h4>
      <?php 

      if($pokemon -> forms[$form+1] == elem){

      ?>
      <?php
      
      echo next($pokemon -> forms[$form] -> name);
     
      } 
      
      else {
        echo '<h4>Це остання форма</h4>';
      }
      ?>
      </div>
<!--3-->
        <div class="pokemon">
      <?php 

      $base = "https://pokeapi.co/api/v2/pokemon/";
      $id = 141;
      $data = file_get_contents($base.$id.'/');
      $pokemon = json_decode($data);

      ?>

      <div class="img">

     <?php
      echo '<img src="'.$pokemon->sprites->front_default.'" width="200">';
     ?>

      </div>
      
      <h1 class="name">

      <?php
      echo $pokemon -> name;
      ?>

      </h1>
      
      <?php
      echo '<h2 class="abilities">Abilities</h2>';

      foreach($pokemon -> abilities as $k => $v) {
      ?>

      <h3 class="ability">

      <?php
      echo   $v -> ability -> name. '<br>';
      ?>

      </h3>

      <?php
    }
      ?>

      <h4 class="stats">
      
      <?php
      echo $pokemon -> stats[0] -> stat -> name. '<br>'; 
      echo $pokemon -> stats[0] -> base_stat. '<br>';

      echo $pokemon -> stats[1] -> stat -> name. '<br>'; 
      echo $pokemon -> stats[1] -> base_stat. '<br>';  

      echo $pokemon -> stats[2] -> stat -> name. '<br>'; 
      echo $pokemon -> stats[2] -> base_stat. '<br>'; 
      ?>

      </h4>

      <h4 class="current">Форма зараз:</h4>
      <h4 class="form">

      <?php
      $form = 0;
      echo $pokemon -> forms[$form] -> name;
      ?>

      </h4>
      <h4 class="current">Наступна форма:</h4>
      <?php 

      if($pokemon -> forms[$form+1] == elem){

      ?>
      <?php
      
      echo next($pokemon -> forms[$form] -> name);
     
      } 
      
      else {
        echo '<h4>Це остання форма</h4>';
      }
      ?>
</div>
    </div>
</body>
</html>