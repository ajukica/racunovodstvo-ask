<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $ime = htmlspecialchars($_POST["ime"]);

    $email = htmlspecialchars($_POST["email"]);

    $telefon = htmlspecialchars($_POST["telefon"]);

    $poruka = htmlspecialchars($_POST["poruka"]);



    $primatelj = "info@racunovodstvo-ask.hr";


    $naslov = "Novi upit sa ASK web stranice";


    $sadrzaj = "

Ime:
$ime

Email:
$email


Telefon:
$telefon


Poruka:

$poruka

";

    $zaglavlje = "From: web@racunovodstvo-ask.hr\r\n";

    $zaglavlje .= "Reply-To: $email\r\n";

    $zaglavlje .= "Content-Type: text/plain; charset=UTF-8\r\n";
if (mail($primatelj, $naslov, $sadrzaj, $zaglavlje)) {

    header("Location: kontakt.html?status=success");
    exit();

} else {

    header("Location: kontakt.html?status=error");
    exit();

}


}

?>