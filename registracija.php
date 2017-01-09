<?php

include ('header.php');
include ('funkcije.php');

$smarty->assign('spol', array(-1 => '', 1 => 'M', 2 => 'Ž'));

$tekst_greski = "";
$greske = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // var_dump($_POST);
    $ime = $_POST["ime"];
    nije_uneseno($ime, "Unesite ime");

    $prezime = $_POST["prezime"];
    nije_uneseno($prezime, "Unesite prezime");

    $korime = $_POST["korime"];
    $greskeKorime = 0;
    if (!nije_uneseno($korime, "Unesite korisničko ime")) {
        if (strlen($korime) < 10) {
            obrada_greske("Korisničko ime je kraće od 10 znakova");
            $greskeKorime++;
        }
        if (!ctype_alpha($korime[0])) {
            obrada_greske("Korisničko ime ne počinje malim slovom");
            $greskeKorime++;
        } else if (!ctype_lower($korime[0])) {
            obrada_greske("Korisničko ime ne počinje malim slovom");
            $greskeKorime++;
        }
        $brVelikih = 0;
        $brPosebnih = 0;
        for ($i = 0; $i < strlen($korime); $i++) {
            if (ctype_alpha($korime[$i]) && ctype_upper($korime[$i]))
                $brVelikih++;
            if ($korime[$i] == "_" || $korime[$i] == "-" || $korime[$i] == "!" || $korime[$i] == "$" || $korime[$i] == "?")
                $brPosebnih++;
        }
        if ($brVelikih != 1) {
            obrada_greske("Korisničko ime mora sadržavati jedno veliko slovo");
            $greskeKorime++;
        }
        if ($brPosebnih != 2) {
            obrada_greske("Korisničko ime mora sadržavati dva posebna znaka[_-!$?]");
            $greskeKorime++;
        }
        if ($greskeKorime === 0) {
            $sql = "SELECT * FROM korisnik WHERE korime='$korime'";
            if (provjera_zauzetosti($sql) > 0)
                obrada_greske("Korisničko ime je već zauzeto");
        }
    }

    $lozinka1 = $_POST["lozinka1"];
    if (!nije_uneseno($lozinka1, "Unesite lozinku")) {
        if (strlen($lozinka1) < 8)
            obrada_greske("Lozinka je kraća od 8 znakova");
    }
    $lozinka2 = $_POST["lozinka2"];
    if (!nije_uneseno($lozinka2, "Unesite potvrdu lozinke")) {
        if ($lozinka2 != $lozinka1)
            obrada_greske("Lozinke se ne podudaraju");
    }
    
    $dan = $_POST["dan"];
    if (empty($dan)) {
        obrada_greske("Unesite dan rođenja");
    } else {
        if ($dan < 1 || $dan>31)
            obrada_greske("Dan rođenja mora biti u rasponu 1-31");
    }

    $mjesec = $_POST["mjesec"];
    if (empty($mjesec)) {
        obrada_greske("Unesite mjesec rođenja");
    } else if ($mjesec < 1 || $mjesec>13)
        obrada_greske("Mjesec rođenja mora biti u rasponu 1-12");

    $godina = $_POST["godina"];
    if (!nije_uneseno($godina, "Unesite godinu rođnja")) {
        if ($godina < 1906)
            obrada_greske("Godina mora biti veća od 1905");
    }
    
    $spol = $_POST["spol"];
    nije_uneseno($spol, "Odaberi spol");
    
        $tel = $_POST["telefon"];
    nije_uneseno($tel, "Unesite broj telefona");

    $email = $_POST["email"];
    if (!nije_uneseno($email, "Unesite email")) {
        if (!preg_match('/[a-zA-Z0-9]{2,}@[a-zA-Z]{2,}.[a-zA-Z]{2,}/', $email)){
            obrada_greske("Email nije dobrog formata - nesto@nesto.com");
        }
        else{
            $sql = "SELECT * FROM korisnik WHERE email='$email'";
             if (provjera_zauzetosti($sql) > 0)
                obrada_greske("Email je već zauzet");
        }
    }    
    $adresa = $_POST["adresa"];
    nije_uneseno($adresa, "Unesite adresu");
    
    $isrecaptcha = $_POST["g-recaptcha-response"];
    $recaptcha = isset($_POST["g-recaptcha-response"]);
    if (strlen($isrecaptcha) == 0)
        obrada_greske("Potvrdite da niste robot (recaptcha)<br>");
    
    if($greske===0){       
       $dat = $godina . "-" . $mjesec . "-" . $dan;
        $lozinka1=md5($lozinka1);      
        $aktivacijski_kod = date("Ymd") . date("His") . md5($korime);
        $sql = "INSERT into korisnik(korime,ime,prezime,lozinka, spol, datum_rođenja,email, telefon,adresa) VALUES('$korime','$ime','$prezime','$lozinka1','$spol','$dat', '$email','$tel', '$adresa')";
        dodaj_u_bazu($sql);
        $sql = "INSERT into aktivacijski_kod(aktivacijski_kod,korime) VALUES('$aktivacijski_kod','$korime')";
        dodaj_u_bazu($sql);
        
        $mail_to = $email;
        $mail_from = "From: valkrhlan@foi.hr";
        $mail_subject = "Aktivacijski kod";
       // $mail_body = "Aktivacijski link: https://barka.foi.hr/WebDiP/2015/zadaca_04/valkrhlan/aktivacija.php?d=".$aktivacijski_kod;
        $mail_body = "Aktivacijski link: http://localhost/Projekt_lokalno/aktivacija.php?d=".$aktivacijski_kod;

        if (mail($mail_to, $mail_subject, $mail_body, $mail_from)) {
            echo("Poslana poruka za: '$mail_to'!");
        } else {
            echo("Problem kod poruke za: '$mail_to'!");
        }
        
        header('Location:aktivacija.php');
    }
}
$smarty->assign('tekst_greske', $tekst_greski);
$smarty->display('predlosci/registracija.tpl');
$smarty->display('predlosci/footer.tpl');
?>

