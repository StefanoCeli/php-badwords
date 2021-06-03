<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    
<?php

    $paragrafo="Lorem ipsum dolor ciao sit amet consectetur, adipisicing elit. Nobis sit CIAO inventore labore. Tempora ut sequi Ciao atque nesciunt natus hic praesentium!";
    //dichiaro la variabile come un array e all'interno metto il get con il valore tutto minuscolo,tutto maiuscolo e solo con la prima lettera maiuscola
    $censura= array(strtolower($_GET['censura']),ucfirst($_GET['censura']),strtoupper($_GET['censura']));//esempio se nel get gli passo la stringa "ciao" verrà censurata in tutti i modi 
    $controllo= str_replace($censura, "***", $paragrafo);

?>

<h1>Paragrafo originale</h1>
<h1><?php echo $paragrafo ?></h1>
<h2>il paragrafo è lungo : <? echo strlen($paragrafo) ?> caratteri</h2>

<hr>
<h1>Paragrafo censurato</h1>
<h1><?php echo $controllo ?></h1>
<h2>il paragrafo è lungo : <? echo strlen($controllo) ?> caratteri</h2>

</body>
</html>