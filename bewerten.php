<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bewertung = $_POST["bewertung"];
    $zeitstempel = date("Y-m-d H:i:s");

    $eintrag = "$zeitstempel,$bewertung\n";
    file_put_contents("bewertungen.csv", $eintrag, FILE_APPEND);

    echo "<p>Danke für deine Bewertung!</p>";
    echo "<a href='index.html'>Zurück zur Website</a>";
}
?>
