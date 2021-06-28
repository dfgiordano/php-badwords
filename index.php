<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php
    $paragraph ="Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, maxime!Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, obcaecati?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta, nihil.
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, aut.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, pariatur!";
    $paragraphLength = strlen($paragraph);
    /* http://localhost:8888/php-badwords/?string=Lorem  */
    $_GET["string"];

    $newParagraph = str_replace($_GET["string"],"***",$paragraph);
    $newParagraphLength = strlen($newParagraph);
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <p style= "margin: 50px;"> <?php echo "Paragrafo originale : " . $paragraph . " " . "$paragraphLength" ; ?> </p>

    <p style= "margin: 50px;"> <?php echo "Paragrafo modificato : " . $newParagraph . " " . "Lunghezza : " . "$newParagraphLength" ; ?> </p> 
    </body>
</html>