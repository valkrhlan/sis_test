<?php

class Sesija {

    const KORISNIK = "korisnik";
    const TIP = "tip";
    const TELEFON = "telefon";
    const EMAIL = "email";
    const DATUM = "datum";
    const VRIJEME = "vrijeme";
 
    const SESSION_NAME = "prijava_sesija";

    static function kreirajSesiju() {
        session_name(self::SESSION_NAME);

        if (session_id() == "") {
            session_start();
        }
    }

    static function kreirajKorisnika($korime,$tip,$tel,$email) {
        self::kreirajSesiju();
        $_SESSION[self::KORISNIK] = $korime;
        $_SESSION[self::TIP] = $tip;
        $_SESSION[self::TELEFON] = $tel;
        $_SESSION[self::EMAIL] = $email;
        $_SESSION[self::DATUM] = date('d:m:Y');
        $_SESSION[self::VRIJEME] = date('H:i:s');
    }

/*    static function kreirajKorisnickoIme($korisnik) {
        self::kreirajSesiju();
        $_SESSION[self::KORISNIK] = $korisnik;
    }
        static function kreirajTip($tip) {
        self::kreirajSesiju();
        $_SESSION[self::TIP] = $tip;
    }
        static function kreirajTelefon($tel) {
        self::kreirajSesiju();
        $_SESSION[self::TELEFON] = $tel;
    }
*/
    static function dajKorisnika() {
        self::kreirajSesiju();
        if (isset($_SESSION[self::KORISNIK])) {
            $korisnik = $_SESSION[self::KORISNIK];
        } else {
            return null;
        }
        return $korisnik;
    }

    static function dajTiP() {
        self::kreirajSesiju();
        if (isset($_SESSION[self::TIP])) {
            $tip = $_SESSION[self::TIP];
        } else {
            return null;
        }
        return $tip;
    }
        static function dajTelefon() {
        self::kreirajSesiju();
        if (isset($_SESSION[self::TELEFON])) {
            $tel = $_SESSION[self::TELEFON];
        } else {
            return null;
        }
        return $tel;
    }

   static function dajEmail() {
        self::kreirajSesiju();
        if (isset($_SESSION[self::EMAIL])) {
            $email = $_SESSION[self::EMAIL];
        } else {
            return null;
        }
        return $email;
    }
    
       static function dajDatum() {
        self::kreirajSesiju();
        if (isset($_SESSION[self::DATUM])) {
            $dat = $_SESSION[self::DATUM];
        } else {
            return null;
        }
        return $dat;
    }
    
        static function dajVrijeme() {
        self::kreirajSesiju();
        if (isset($_SESSION[self::VRIJEME])) {
            $vrijeme = $_SESSION[self::VRIJEME];
        } else {
            return null;
        }
        return $vrijeme;
    }
  
 
    /**
     * Odjavljuje korisnika tj. briše sesiju
     */
    static function obrisiSesiju() {
        session_name(self::SESSION_NAME);
        if (session_id()!= "") {
            session_unset();
            session_destroy();
        }
    }

}
