<!-- 
Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.X
 Stampare a schermo il paragrafo e la sua lunghezza.X
Una parola da censurare viene passata dall'utente tramite parametro GET.X
Stampare di nuovo il paragrafo e la sua lunghezza,
 dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.


 -->


<?php

$text = 'Tyger Tyger burning bright In the forests of the night What immortal hand or eye Could frame thy fearful symmetry In what distant deeps or skies Burnt the fire of thine eyes On what wings dare he aspire What the hand dare ieze the fire And what shoulder  what art Could twist the sinews of thy heart And when thy heart began to beat What dread hand  what dread feet What the hammer what the chain In what furnace was thy brain What the anvil what dread grasp Dare its deadly terrors clasp When the stars threw down their spears And waterd heaven with their tears Did he smile his work to see Did he who made the Lamb make thee Tyger Tyger burning bright In the forests of the night What immortal hand or eye Dare frame thy fearful symmetry'; 

$word = $_GET["word"];

$text_array = explode(' ', strtolower($text));

$text_censor_array = $text_array;


for ($i = 0; $i <= count($text_array); $i++) { 
    if ($text_array[$i] === $word){
        $text_censor_array[$i] = '***';
    }
};


$text_censor = implode(" ", $text_censor_array);

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

    <h1>Badwords</h1>

    <h3>Uncensored Text:</h3>

    <p>
        <?php echo $text ?>
    </p>
    
    <div>Text Lenght: <?php echo strlen($text); ?></div>

    <h2>Badword is: <?php echo $word ?></h2>

    <h3>Censored Text:</h3>

    <p>
    <?php echo $text_censor ?>
    </p>

    <div>Censored Text Lenght: <?php echo strlen($text_censor); ?></div>



</body>
</html>