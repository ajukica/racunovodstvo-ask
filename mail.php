<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $ime = htmlspecialchars($_POST["ime"]);

    $email = htmlspecialchars($_POST["email"]);

    $telefon = htmlspecialchars($_POST["telefon"]);

    $poruka = htmlspecialchars($_POST["poruka"]);



    $primatelj = "info@ask-racunovodstvo.hr";


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


        echo "

<h2>
<h1>Hvala na upitu</h1>

<p>
Vaša poruka je uspješno poslana.
ASK računovodstveni servis javit će vam se u najkraćem roku.
</p>
</h2>

<p>
Javit ćemo vam se uskoro.
</p>

";


    } else {


        echo "

<h2>
Greška kod slanja poruke.
</h2>

";

    }


}

?>