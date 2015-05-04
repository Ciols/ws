<?php
 
// première étape : désactiver le cache lors de la phase de test
ini_set("soap.wsdl_cache_enabled", "0");
 
// lier le client au fichier WSDL
$clientSOAP = new SoapClient('HelloYou.wsdl');
 
// executer la methode getHello
var_dump($_GET);
if (isset($_GET['nom']) && isset($_GET['prenom'])) {
    $nom = htmlentities($_GET['nom']);
    $prenom = htmlentities($_GET['prenom']);
    echo $clientSOAP->getHello($nom,$prenom);
} else {
    echo $clientSOAP->getHello('Monsieur','Inconnu');
}
