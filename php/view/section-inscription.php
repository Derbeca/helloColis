<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Inscrivez-vous pour recevoir plus d'informations sur les services HelloColis">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Inscription: devenir membre de la communauté - HelloColis</title>
</head>
<body>
        <header>
            <a href="index.php" id="logo"><img src="assets/svg/logo_helloColis_color.svg" alt="logo hellocolis"/></a>
            <div id="icons-resaux">
                <a href=""><img src="assets/svg/icon_twitter.svg" alt="logo twitter"/></a>
                <a href=""><img src="assets/svg/icon_linkedin.svg" alt="logo linkedin"/></a>
                <a href=""><img src="assets/svg/icon_facebook.svg" alt="logo facebook"/></a>
                <a href=""><img src="assets/svg/icon_instagram.svg" alt="logo instagram"/></a>
            </div>
        </header>
        <main>
            <div class="inscription">
                <h2>Inscrivez-vous</h2>
                <h4>pour plus d'informations</h4>
                <p>“Nous nous engageons à respecter vos données personnelles et garantissons que nous ne les divulguerons ou revendrons en aucun cas à un tiers.”</p>
                <p>* champs obligatoires</p>
                <form method="POST" action="api-json.php" class="ajax">
                    <input type="text" name="nom" placeholder="Nom*" required/>
                    <input type="text" name="prenom" placeholder="Prénom*" required/>
                    <input type="mail" name="email" placeholder="Email*" required/>
                    <h5>Qui êtes vous?</h5>
                    <div class="mesOptions">
                        <div class="options">
                            <input type="radio" name="utilisateur" value="Expediteur"/>
                            <label>Expéditeur</label>
                        </div>
                        <div class="options">
                            <input type="radio" name="utilisateur" value="Voyageur"/>
                            <label>Voyageur</label>
                        </div>
                        <div class="options">
                            <input type="radio" name="utilisateur" value="E-commerçant"/>
                            <label>E-commerçant</label>
                        </div>
                        <div class="options">
                            <input type="radio" name="utilisateur" value="Agence"/>
                            <label>Agence Voyage</label>
                        </div>
                    </div>
                    <div class="check">
                        <input type="checkbox" name="autorisation" value="Oui"/>
                        <p>J’autorise HelloColis à m’envoyer des contenus par mail.</p>
                    </div>  

                        <button type="submit" class="bouton btn-form">S'INSCRIRE</button>
                        <div class="confirmation">
                        <!-- ICI ON VERRA LE MESSAGE DE CONFIRMATION -->
                        </div>
                        <input type="hidden" name="idForm" value="contact">
                </form>
            </div>
        </main>
        <footer>
            <div class="infoFooter">
                <h5>PLUS D'INFORMATION</h5>
                <a href="inscription.html" class="bouton orange">JE M'INSCRIS</a>
            </div>
            <div class="contact">
                <h5>NOUS CONTACTER</h5>
                <div>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>Le Carburateur <br>211 Chemin de La Madrague Ville <br>13015 Marseille</p>
                </div>
                <div>
                    <p><i class="fa fa-mobile" aria-hidden="true"></i>06 19 56 76 65</p>
                </div>
                <div>
                    <p><i class="fa fa-at" aria-hidden="true"></i>contact.hellocolis@gmail.com</p>
                </div>
            </div>
            <div class="liens">
                <a href="instructions.php">Comment ça marche</a>
                <p>|</p>
                <a href="assets/pdf/chartesecurite-HelloColis.pdf">Charte sécurité</a>
                <p>|</p>
                <a href="assets/pdf/charteecologique-HelloColis.pdf">Charte écologique</a>
                <p>|</p>
                <a href="assets/pdf/conditionsgeneralesd'utilisation-HelloColis.pdf">Conditions Générales d'Utilisation</a>
            </div>
            <p class="droits">©hellocolis2020</p>
        </footer>
        <script src="assets/js/main-contact.js"></script> 
    
</body>
</html>