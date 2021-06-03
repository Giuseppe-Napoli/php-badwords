<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>

  <?php
    $nome = 'Badwords';
    $testo = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel iure, fugit amet necessitatibus dolores aliquam debitis veritatis maxime est architecto, id temporibus numquam ea cumque accusamus reprehenderit nobis placeat vitae?';
    $parola = $_GET["parola"];

    //strpos = cerca all'interno di $testo la $parola e torna la posizione in cui si trova
    if(strpos($testo, $parola) !== false){
      //sostituisci la $parola con '***' dove? nel $testo!
       $censurato = str_replace($parola, "***", $testo);
    }
  ?>

  <h1><?php echo $nome ?> </h1>
  <h3>La lunghezza del testo è di:  <?php echo strlen($testo) ?> caratteri</h3>
  <p> <strong>Il testo è: </strong> <?php echo $testo ?></p>

  <hr>

  <h1><?php echo $nome ?> </h1>
  <h3>La lunghezza del testo censurato è di:  <?php echo strlen($censurato) ?> caratteri</h3>
  <p> <strong>Il testo censurato è: (scrivi nell'indirizzo localhost "?parola='parola presente nel testo' ") </strong> <?php echo  $censurato ?></p>

</body>
</html>