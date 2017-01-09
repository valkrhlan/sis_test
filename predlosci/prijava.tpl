<section class="content">
    <h3>Popunite podatke za prijavu!</h3>

     <form id="form1" method="post" action="prijava.php" name="formPrijava" enctype="multipart/form-data">    
         <label for="korime">Korisničko ime:</label><br>
        <input  type="text" id="korime" name="korisnicko_ime" size="30" placeholder="korisničko ime">
        <div id="korimeGreske" name="korimeGreske">
            <p>Greske korisničkog imena//tu dodaj da se stvarne greske ispisuju</p>
        </div>
        
        <label  for="prez" >Prezime: </label><br>
        <input  type="text" id="prez" name="prezime" size="30" maxlength="30" placeholder="Prezime"><br>
        <div id="prezimeGreske" name="prezimeGreske">
            <p>Greske prezimena//tu dodaj da se stvarne greske ispisuju</p>
        </div>
        <div class="g-recaptcha" name="recaptcha" data-sitekey="6LfiwB4TAAAAAMM6hLAM2efi6H7h3nYRJUPuFdoY" ></div><br>
        <p id="recaptchaGeska" name="recaptchaGeska">Potvrdi da nisi robot!//tu dodaj da se stvarne greske ispisuju</p>
        <input  id="btnSubmitRegistracija" class="gumbi" type="submit" value=" Prijavi se "><br>  

         
     </form>
</section>