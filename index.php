<?php

$paragraph = 
'Astro del ciel,
pargol divin,
mite Agnello redentor,
tu che i vati da lungi sognar,
tu che angeliche voci annunziar
luce dona alle menti,
pace infondi nei cuor.';

$word= $_GET['word'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>
    <p><?php echo $paragraph ?></p>
    <pre><?php var_dump( strlen($paragraph) ) ?></pre>
    <h3>Inserisci una parola che vuoi censurare</h3>

    <form action="" method="GET">
        <div>
        <input type="text" name="word" id="">
        </div>
    </form>

    <p><?php echo str_replace($word, "***", $paragraph);  ?></p>
    <pre><?php var_dump( strlen($paragraph) ) ?></pre>

</body>
</html>