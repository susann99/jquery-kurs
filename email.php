<?php

$empfaenger = 'susann_rieder@yahoo.de';
$betreff = 'Nachricht von jQuery';
$nachricht = $inhalt;
$header = 'From: susann_rieder@yahoo.de' . "\r\n" .
    'Reply-To: susann_rieder@yahoo.de' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($empfaenger, $betreff, $nachricht, $header);
?>
