<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-28 23:02:22
         compiled from "predlosci\registracija.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1734757457b38e96bc5-48760969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b40590bc28a8ac22fcd1d39d0c5b6cee150c0fe9' => 
    array (
      0 => 'predlosci\\registracija.tpl',
      1 => 1464469342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1734757457b38e96bc5-48760969',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57457b39177232_03694991',
  'variables' => 
  array (
    'spol' => 0,
    'tekst_greske' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57457b39177232_03694991')) {function content_57457b39177232_03694991($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\wamp\\www\\Projekt_lokalno\\vanjske_biblioteke\\Smarty\\libs\\plugins\\function.html_options.php';
?><section class="content">
    <h3>Popunite podatke za registraciju!</h3>

     <form novalidate id="formRegistracija" method="post" action="registracija.php" name="formRegistracija" enctype="multipart/form-data">                 
         <div>
             <div style="width:60%">
                <div class="polaDiva"> 
                    <label  for="ime">Ime: </label><br>
                     <input  type="text" id="ime" name="ime" placeholder="Ime" size="30" autofocus="autofocus">
                     <br>
                     <label  for="korime">Korisničko ime: </label><br>
                     <input  type="text" id="korime" name="korime" size="30" placeholder="korisničko ime" >
                     <br>
                     <label for="spol">Spol:</label>
                     <?php echo smarty_function_html_options(array('id'=>'spol','name'=>'spol','options'=>$_smarty_tpl->tpl_vars['spol']->value,'selected'=>"-1"),$_smarty_tpl);?>


                </div>
                <div class="polaDiva">
                    <label  for="prez" >Prezime: </label><br>
                    <input  type="text" id="prezime" name="prezime" size="30" maxlength="30" placeholder="Prezime"><br>
                    <label  for="lozinka1">Lozinka: </label><br>
                    <input  type="password" id="lozinka1" name="lozinka1" size="30"  placeholder="lozinka"><br>
                    <label  for="lozinka2">Potvrda lozinke: </label><br>
                    <input  type="password" id="lozinka2" name="lozinka2" size="30"  placeholder="potvrda lozinke"><br>        

                </div>
           
             <div class="lijevo" >
                 <label  for="danRod">Datum rođenja: </label><br>
                <input type="number" id="danRod" name="dan"  placeholder="dan">
                <input type="number" id="mjesecRod" name="mjesec"  placeholder="mjesec">
                <input type="number" id="godina" name="godina" placeholder="godina">
             </div>
             
             <div class="polaDiva" class="lijevo" style="margin-top:30px;">
                 <label  for="email">Email adresa: </label><br>
                    <input  type="email" id="email" name="email" size="30" placeholder="ime.prezime@posluzitelj.xxx"><br> 
                </div>
             <div class="polaDiva" class="desno" style="margin-top:30px;">
                 <label for="telefon">Broj telefona:</label> <br>
                    <input  type="text" id="telefon" name="telefon" size="30" placeholder="broj telefona"><br>
                       
            </div>
            
                     <div>
                         <label  for="adresa">Adresa:</label><br>
                         <textarea  id="adresa" name="adresa" placeholder="adresa" cols="85" rows="4"></textarea><br>
                     </div>
                   <br>
                   
        <div class="g-recaptcha" name="recaptcha" data-sitekey="6LfiwB4TAAAAAMM6hLAM2efi6H7h3nYRJUPuFdoY" ></div><br>
        
        <div id="korimeZauzeto" name="korimeZauzeto" class="ispisGresaka"></div>
        <div id="ispisGresaka" name="ispisGresaka" class="ispisGresaka">
            <?php echo $_smarty_tpl->tpl_vars['tekst_greske']->value;?>

        </div>
        
        <input  id="btnSubmitRegistracija" class="gumbi" type="submit" value=" Registriraj se "><br>  
             </div>
         </div>
       
       
    </form> 

</section>
<?php }} ?>
