<?php
// JE DOIS TRAITER LE FORMULAIRE DE NEWSLETTER
$nom    = $_REQUEST["nom"] ?? "";
$prenom    = $_REQUEST["prenom"] ?? "";
$email  = $_REQUEST["email"] ?? "";
$utilisateur = $_REQUEST["utilisateur"] ?? "";
$autorisation = $_REQUEST["autorisation"] ?? "";

if(empty($autorisation)) {
    $autorisation = 'Non';
} 
// ON VA MEMORISER L'INSCRIPTION DANS UN FICHIER TXT
// php/model/contact.txt
$ligne = 
<<<CODETEXT
Nom: $nom
Prenom: $prenom
Email: $email
Utilisateur: $utilisateur
Autorisation: $autorisation
---------
\n
CODETEXT;



file_put_contents("php/model/inscriptions.csv", $ligne, FILE_APPEND);

// JE VAIS CREER UN FICHIER DIFFERENT POUR CHAQUE MESSAGE
// php/model/contact-20190904-100823.txt
// https://www.php.net/manual/fr/function.date.php
/* $date = date("Ymd-His");
$nomFichier = "php/model/contact-$date.txt";
file_put_contents($nomFichier, $ligne, FILE_APPEND); */
// envoyer un email
@mail("contact.hellocolis@gmail.com", "nouveau message contact", $ligne);
// message à afficher au visiteur
$confirmation = "Merci $nom pour votre message.";