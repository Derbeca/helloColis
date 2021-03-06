<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rentabilisez vos trajets grâce au transport des colis de façon et contribuez à impulser la transition écologique.">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>HelloColis - Rentabiliser vos déplacements en transportant de colis</title>
</head>
<body>
    <div id="fond">
        <!-- MODALS -->
        <div id="modalInterUrbain" class="modal">
            <div>
                <img src="assets/svg/icon_interurbain.svg" alt="icône service inter-urbain" class="iconService"/>
                <img src="assets/svg/icon_fermer.svg" alt="icône fermer" class="btnFermer"/>
                <h4>HelloColis INTER-URBAIN</h4>
                <p>Pour optimiser les déplacements individuels et permettre une livraison express plus pratique, plus flexible et plus économique.</p>
            </div>
        </div>
        <div id="modalVoyage" class="modal">
            <div>
                <img src="assets/svg/icon_voyage.svg" alt="icône service voyage" class="iconService"/>
                <img src="assets/svg/icon_fermer.svg" alt="icône fermer" class="btnFermer"/>
                <h4>HelloColis VOYAGE</h4>
                <p>Pour mettre en relation des voyageurs ayant de l'espace libre dans leur bagage avec des particuliers souhaitant expédier des colis à l'étranger ou acquérir des produits venus d'ailleurs.</p>
            </div>
        </div>
        <div id="modalSante" class="modal">
            <div>
                <img src="assets/svg/icon_sante.svg" alt="icône service santé" class="iconService"/>
                <img src="assets/svg/icon_fermer.svg" alt="icône fermer" class="btnFermer"/>
                <h4>HelloColis SANTÉ</h4>
                <p>Pour permettre à nos partenaires du secteur médical de plannifier des livraisons de médicaments pour les patients à mobilité réduite.</p>
            </div>
        </div>
        <div id="modalMarketplace" class="modal">
            <div>
                <img src="assets/svg/icon_marketplace.svg" alt="icône service imarketplace" class="iconService"/>
                <img src="assets/svg/icon_fermer.svg" alt="icône fermer" class="btnFermer"/>
                <h4>HelloColis MARKETPLACE</h4>
                <p>Pour mettre à disposition des vendeurs des espaces de vente, et faciliter le contact vendeur-acheteur pour l’expédition des produits.</p>
            </div>
        </div>
        <!-- FIN MODALS -->
        <header>
            <a href="index.php" id="logo"><img src="assets/svg/logo_helloColis_color.svg" alt="logo hellocolis"/></a>
            <div id="icons-resaux">
                <a href="https://twitter.com/search?q=%40hellocolisvip&src=typed_query"><img src="assets/svg/icon_twitter.svg" alt="logo twitter"/></a>
                <a href="https://www.linkedin.com/company/hello-colis/?originalSubdomain=fr"><img src="assets/svg/icon_linkedin.svg" alt="logo linkedin"/></a>
                <a href="https://www.facebook.com/hellocolis"><img src="assets/svg/icon_facebook.svg" alt="logo facebook"/></a>
                <a href="https://www.instagram.com/hellocolisvip/?hl=af"><img src="assets/svg/icon_instagram.svg" alt="logo instagram"/></a>
            </div>
        </header>
        <div id="conteneur">      
            <div id="container-cta">
                <h2>Et si vos colis 
                    voyageaient plus vite, 
                    pour moins cher 
                    et en toute sécurité?</h2>
                <div id="btn-cta">
                    <a href="inscription.php" class="bouton orange">JE M'INSCRIS</a>
                    <a href="#services" class="bouton vert">EN SAVOIR PLUS</a>
                </div>
            </div>
            <div id="texte">
                <p class="texte">La plateforme qui met en relation
                    des voyageurs et des expéditeurs
                    dans une démarche d’entraide
                    et d’économie collaborative.</p>
            </div>
        </div>
            <div class="info">
                <div class="block">
                    <img src="assets/svg/icon_innovateur.svg" alt="image innovation"/>
                    <h3>innovateur</h3>
                    <p>Des solutions innovantes,<br> 
                        dans le secteur de la mobilité.</p>
                    <a href="instructions.php" class="bouton orange">COMMENT ÇA MARCHE</a>
                </div>
                <div class="block">
                    <img src="assets/svg/icon_securite.svg" alt="image sécurité"/>
                    <h3>sécurisé</h3>
                    <p>Simple et pratique <br> 
                        et en toute sécurité.</p>
                    <a href="assets/pdf/chartesecurite-HelloColis.pdf" class="bouton">CHARTE SÉCURITÉ</a>
                </div>
                <div class="block">
                    <img src="assets/svg/icon_ecologique.svg" alt="image écologie"/>
                    <h3>écologique</h3>
                    <p>Une alternative pour faciliter <br>
                        la transition écologique.</p>
                    <a href="assets/pdf/charteecologique-HelloColis.pdf" class="bouton vert">CHARTE ÉCOLOGIQUE</a>
                </div>
            </div>
            <div class="services">
                <a name="services"></a>
                <h3>Découvrez nos services</h3>
                <div class="btn-services">
                    <div id="btnInterUrbain">
                        <img src="assets/svg/icon_interurbain.svg" alt="logo service inter-urbain"/>
                        <p>Inter-urbain</p>
                    </div>
                    <div id="btnVoyage">
                        <img src="assets/svg/icon_voyage.svg" alt="logo service voyage"/>
                        <p>Voyage</p>
                    </div>
                    <div id="btnSante">
                        <img src="assets/svg/icon_sante.svg" alt="logo service santé"/>
                        <p>Santé</p>
                    </div>
                    <div id="btnMarketplace">
                        <img src="assets/svg/icon_marketplace.svg" alt="logo service marketplace"/>
                        <p>Marketplace</p>
                    </div>
                </div>
            </div> 
        <footer>
            <div class="infoFooter">
                <h5>PLUS D'INFORMATION</h5>
                <a href="inscription.php" class="bouton orange">JE M'INSCRIS</a>
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
    </div>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/main.js"></script>  
</body>
</html>