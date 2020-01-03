<?php
header("Refresh:5; url=./");

$nom=htmlspecialchars($_POST['nom']);
$mail=htmlspecialchars($_POST['mail']);
$sujet=htmlspecialchars($_POST['sujet']);
$message=htmlspecialchars($_POST['message']);
$no_email=htmlspecialchars($_POST['no_email']);

$headers = "From: noreply@sylvainallain.fr";

$destinataire="contact@sylvainallain.fr";

if($no_email == ''){
    if (mail($destinataire,$sujet,$message,$headers)) {
        echo "Votre message a bien été envoyé. Merci <?= $_nom ?> !<br>";
    } else {
        echo "Une erreur s'est produite, veuillez réessayer.<br>";
    }
    
}else{
    echo "Une erreur s'est produite. Etes-vous un robot ?";
}


?>

<p>Vous allez bientot etre redirigé vers la page d'acceuil<br>
Si vous n'etes pas redirigé au bout de 5 secondes,cliquez <a href="https://www.sylvainallain.fr">ici</a>
</p>

