<?php
// JE DOIS TRAITER LE FORMULAIRE DE NEWSLETTER
$nom    = $_REQUEST["nom"] ?? "";
$prenom    = $_REQUEST["prenom"] ?? "";
$email  = $_REQUEST["email"] ?? "";
$utilisateur = $_REQUEST["utilisateur"] ?? "";
// ON VA MEMORISER L'INSCRIPTION DANS UN FICHIER TXT
// php/model/contact.txt
$ligne = 
<<<CODETEXT
---------
Nom: $nom
Prénom: $prenom
Email: $email
Utilisateur: $utilisateur
CODETEXT;

// JE VAIS CREER UN FICHIER DIFFERENT POUR CHAQUE MESSAGE
// php/model/contact-20190904-100823.txt
// https://www.php.net/manual/fr/function.date.php
$date = date("Ymd-His");
$nomFichier = "php/model/contact-$date.txt";
file_put_contents($nomFichier, $ligne, FILE_APPEND);
// envoyer un email
@mail("contact@derbeca.com", "nouveau message contact", $ligne);
// message à afficher au visiteur
$confirmation = "Merci $nom pour votre message.";