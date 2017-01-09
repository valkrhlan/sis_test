$(document).ready(function () {

    $('#formRegistracija').submit(function (event) {
        event.preventDefault();
        validirajFormu();
    });

    //validacija
    function validirajFormu() {
              
        var pom = document.getElementById('korimeZauzeto');
        pom.innerHTML = "";
        var tekstKrivo = "";
        var krivo = 0;
       // $('#ime').removeClass("kriviUnos");
        if ($('#ime').val() === "") {
            tekstKrivo += "Unesite ime <br>";
            krivo++;
        //    $('#ime').addClass("kriviUnos");
        }
      //  $('#prezime').removeClass("kriviUnos");
        if ($('#prezime').val() === "") {
            tekstKrivo += "Unesite prezime <br>";
            krivo++;
        //    $('#prezime').addClass("kriviUnos");
        }
        
       // $('#korime').removeClass("kriviUnos");
        if ($('#korime').val() === "") {
            tekstKrivo += "Unesite korisničko ime <br>";
            krivo++;
         //   $('#korime').addClass("kriviUnos");
        } else {
            var korimeKrivo = 0;
            var re = /[-_$?!a-zA-Z0-9]{10,}/;
            var ok = re.test($('#korime').val());
            if (!ok) {
                korimeKrivo++;
                tekstKrivo += "Korisničko ime mora biti min 10 znakova <br>";
                krivo++;
            }
            re = /^[a-z]/;
            var ok = re.test($('#korime').val());
            if (!ok) {
                korimeKrivo++;
                krivo++;
                tekstKrivo += "Korisničko ime mora započeti malim slovom<br>";
            }
            re = /[A-Z]{1}/;
            var ok = re.test($('#korime').val());
            if (!ok) {
                korimeKrivo++;
                krivo++;
                tekstKrivo += "Korisničko ime mora sadržavati veliko slovo<br>";
            }


            re = /[a-zA-z0-9]*[-_$?!]{1}[a-zA-z0-9]*[-_$?!]{1}[a-zA-z0-9]*/;
            var ok = re.test($('#korime').val());
            if (!ok) {
                korimeKrivo++;
                tekstKrivo += "Korisničko ime mora sadržavati dva specijalana znaka<br>";
                krivo++;
            }
            
             else {
                form_data = {
                    action: 'validacija_korime',
                    korime: $('#korime').val()
                };                                                     
                $.ajax({
                    type: "POST",
                    url: "funkcije.php",
                    data: form_data,
                    success: function(result){
                        if(result == 0) {
                            var divKorimeGreska = document.getElementById('korimeZauzeto');
                            divKorimeGreska.innerHTML = "Korisničko ime je zauzeto<br>";
                            krivo++;
                        }      
                    },
                     async: false
                    
                });
            }
           // if (korimeKrivo > 0) {
             //   $('#korime').addClass("kriviUnos");
            //}
        }
     
       // $('#lozinka1').removeClass("kriviUnos");
        if ($('#lozinka1').val() === "") {
            tekstKrivo += "Unesite lozinku <br>";
            krivo++;
         //   $('#lozinka1').addClass("kriviUnos");
        } else {
            var re = /[#$!?a-zA-Z0-9]{8,}/;
            var ok = re.test($('#lozinka1').val());
            if (!ok) {
                tekstKrivo += "Lozinka mora imati minimalno 8 znakova <br>";
                krivo++;
             //   $('#lozinka1').addClass("kriviUnos");
            }

        }
      //  $('#lozinka2').removeClass("kriviUnos");
        if ($('#lozinka2').val() === "") {
            tekstKrivo += "Unesite potvrdu lozinke <br>";
            krivo++;
        //    $('#lozinka2').addClass("kriviUnos");
        } else {
            if ($('#lozinka2').val() !== $('#lozinka1').val()) {
                tekstKrivo += "Lozinke se ne podudaraju <br>";
                krivo++;
          //      $('#lozinka2').addClass("kriviUnos");
            }
        }
        //$('#spol').removeClass("kriviUnos");
        if ($('#spol').val() === "-1") {
            tekstKrivo += "Odaberite spol <br>";
            krivo++;
          //  $('#spol').addClass("kriviUnos");
        }
        //$('#danRod').removeClass("kriviUnos");
        if ($('#danRod').val() === "") {
            tekstKrivo += "Unesite dan rođenja<br>";
            krivo++;
          //  $('#danRod').addClass("kriviUnos");
        } else {
            if ($('#danRod').val() < 1 || $('#danRod').val() > 31) {
                tekstKrivo += "Dan rođenja mora biti u rasponu 1-31<br>";
                krivo++;
            //    $('#danRod').addClass("kriviUnos");

            }
        }
        //$('#mjesecRod').removeClass("kriviUnos");
        if ($('#mjesecRod').val() === "") {
            tekstKrivo += "Unesite mjesec rođenja<br>";
            krivo++;
          //  $('#mjesecRod').addClass("kriviUnos");
        } else {
            if ($('#mjesecRod').val() < 1 || $('#mjesecRod').val() > 12) {
                tekstKrivo += "Mjesec rođenja mora biti u rasponu 1-12<br>";
                krivo++;
            //    $('#mjesecRod').addClass("kriviUnos");
            }
        }
        //$('#godina').removeClass("kriviUnos");
        if ($('#godina').val() === "") {
            tekstKrivo += "Unesite godinu rođenja<br>";
            krivo++;
          //  $('#godina').addClass("kriviUnos");
        } else {
            if ($('#godina').val() < 1906) {
                tekstKrivo += "Godina rođenja mora biti veća od 1905<br>";
                krivo++;
            //    $('#godina').addClass("kriviUnos");
            }
        }

        //$('#email').removeClass("kriviUnos");
        if ($('#email').val() === "") {
            tekstKrivo += "Unesite email<br>";
            krivo++;
          //  $('#email').addClass("kriviUnos");
        } else {
            re = /[a-zA-Z0-9]{2,}@[a-zA-Z]{2,}.[a-zA-Z]{2,}/;
            ok = re.test($('#email').val());
            if (!ok) {
                tekstKrivo += "Email nije dobro upisan <br>";
                krivo++;
            //    $('#email').addClass("kriviUnos");
            }
        }
        //$('#telefon').removeClass("kriviUnos");
        if ($('#telefon').val() === "") {
            tekstKrivo += "Unesite broj telefona<br>";
            krivo++;
          //  $('#telefon').addClass("kriviUnos");

        }
        //$('#adresa').removeClass("kriviUnos");
        if ($('#adresa').val() === "") {
            tekstKrivo += "Unesite adresu<br>";
            krivo++;
          //  $('#adresa').addClass("kriviUnos");
        }


        tekstKrivo += "<br>";
        var div = document.getElementById('ispisGresaka');
        div.innerHTML = tekstKrivo;
                
       // if($('#korimeZauzeto').text()==="Korisničko ime je zauzeto"){
         //   krivo++;
           // $('#korime').addClass("kriviUnos");
        //}

        if (krivo === 0) {
            $('#formRegistracija').unbind('submit').submit();
        }

    }
    ;

});

