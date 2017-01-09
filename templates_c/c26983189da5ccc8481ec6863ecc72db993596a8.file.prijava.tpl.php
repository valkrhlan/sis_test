<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-25 21:50:05
         compiled from "predlosci\prijava.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19265745fd9eda64c2-98278308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c26983189da5ccc8481ec6863ecc72db993596a8' => 
    array (
      0 => 'predlosci\\prijava.tpl',
      1 => 1464205803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19265745fd9eda64c2-98278308',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5745fd9ee59031_40202356',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5745fd9ee59031_40202356')) {function content_5745fd9ee59031_40202356($_smarty_tpl) {?><section class="content">
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
</section><?php }} ?>
