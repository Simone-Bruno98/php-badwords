<?php
// Creare una variabile con un paragrafo di testo a vostra scelta.
$paragrafo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quasi corrupti blanditiis sit aspernatur maxime laudantium possimus tenetur, cupiditate sequi sed qui aperiam quidem? Nisi corporis quibusdam perferendis modi esse.";
$paragrafoLeng = strlen($paragrafo);
// Una parola da censurare viene passata dall’utente tramite parametro GET.
$parolaCensurata = $_GET["censura"];
$paragrafoCensurato = str_replace($parolaCensurata, "***", $paragrafo);
$paragrafoCensuratoLeng = strlen($paragrafoCensurato);
?>

<!-- Stampare a schermo il paragrafo e la sua lunghezza. -->
<h3><?php echo $paragrafo ?></h3>
<p>Il paragrafo qui sopra è lungo <?php echo $paragrafoLeng ?> caratteri!</p>
<h1>Inserisci una parola di questo paragrafo da censurare scrivendo alla fine dell' url "?censura=*parola che vuoi censurare*"</h1>

<!-- Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<h3><?php echo $paragrafoCensurato ?></h3>
<p>Il paragrafo qui sopra è lungo <?php echo $paragrafoCensuratoLeng ?> caratteri!</p>

