<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php
    $paragraph ="Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, maxime!Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, obcaecati?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta, nihil.
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, aut.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, pariatur!";
    
    $_GET["string"];

    $newParagraph = str_replace($_GET["string"],"*****",$paragraph);
    $paragraphLength = strlen($newParagraph);
    

?>

<p style= "margin: 50px;"> <?php echo "Paragrafo originale : " . $paragraph; ?> </p>

<p style= "margin: 50px;"> <?php echo "Paragrafo modificato : " . $newParagraph . " " . "Lunghezza : " . $paragraphLength ?> </p>
