<?php
    if (count($_POST)==0) {
        header('location: contact.php');
    }
    if (!empty($_POST['prenom'])) {
        $prenom=ucfirst(strtolower($_POST['prenom']));
        echo 'le prénom est : '.$prenom.'<br />'."\n";
    } else {
        echo "Erreur : le prénom est vide !"."\n";
        exit(0);
    }


    if (!empty($_POST['nom'])) {
        $nom=mb_strtoupper($_POST['nom']);
        echo 'le nom est : '.$nom.'<br />'."\n";
    } else {
        echo "Erreur : le nom est vide !"."\n";
        exit(0);
    }


    if (!empty($_POST['email'])) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $email=$_POST['email'];
            echo 'L\'email est : '.$email.'<br />'."\n";
    } else {
        echo "Erreur : l\'email n\'est pas valide !"."\n";
        exit(0);
    }}else{
        echo "Erreur : l\'email n\'est pas valide !"."\n";
        exit(0);
    }


    if (!empty($_POST['message'])) {
        $message=$_POST['message'];
        echo 'le message est : '.$message.'<br />'."\n";
    } else {
        echo "Erreur : le message est vide !"."\n";
        exit(0);
    }
    
    echo '<br /><br />De la part de : '.$prenom.' '.$nom.'.<br />'.'A l\'adresse : '.$email.'<br />'.$message.'<br />';

    $destinataire = 'mohamedamir.chaal@gmail.com';
    $sujet = 'Demande de renseignement --- '.date('d/m/Y');
    $headers = 'From: mmi21d05@mmi-troyes.fr' . "\r\n" .
    'Reply-To: mmi21d05@mmi-troyes.fr' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    if (mail($destinataire, $sujet, $message, $headers)) {
    echo 'Message envoyé : OK !'."\n";
    // on revient à la page d'accueil
    //header('Location: index.php');
    } else {
    echo 'Erreur : message non envoyé !'."\n";
    }
    // Mail de confirmation pour l’internaute
    $headers = 'From: mmi21d05@mmi-troyes.fr' . "\r\n" .
    'Reply-To: no-reply@mmi-troyes.fr' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    if (mail($_POST['email'], 'Confirmation de demande', 'Nous avons bien reçu votre demande !', $headers)) {
    echo '<br />Message de confirmation envoyé : OK !'."\n";
    // on revient à la page d'accueil
    //header('Location: index.php');
    } else {
    echo 'Erreur : message de confirmation non envoyé !'."\n";
    }
    header('location: index.php')
?>
