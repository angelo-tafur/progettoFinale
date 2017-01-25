<?php
if (!isset($_SESSION["name"])) {
    //Includo la barra di navigazione per un utante che non ha ancora fatto login
    include ("navBar_login.html");

} else {
    //Includo la barra di navigazione per l'utente loggato sul sito
    include ("navBar_logout.html");
}
