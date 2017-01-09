<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-28 23:02:55
         compiled from "predlosci\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3229457455ecc69e0a5-99858006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c406287f97e28e8aa01ee1d4ffef7b75d1e20b5' => 
    array (
      0 => 'predlosci\\header.tpl',
      1 => 1464469374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3229457455ecc69e0a5-99858006',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57455ecc73b248_68458357',
  'variables' => 
  array (
    'sesija' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57455ecc73b248_68458357')) {function content_57455ecc73b248_68458357($_smarty_tpl) {?><html>
    <head>
        <title>Početna stranica</title>
        <meta charset="UTF-8">
        <meta name="author" content="valkrhlan">
        <meta name="description" content="Riješenje projekta iz kolegija WebDiP">
        <meta name="viewport" /><!--content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0,maximum-scale=1.0" --> 
        <link rel="stylesheet" type="text/css" href="css/valkrhlan_projekt.css">
      <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js" async defer><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="vanjske_biblioteke/jquery.min.js"><?php echo '</script'; ?>
>
        <!--<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"><?php echo '</script'; ?>
> -->
        <!--<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"><?php echo '</script'; ?>
>-->
        <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.js"><?php echo '</script'; ?>
>
    </head>

    <body>
        <!-- Zaglavlje-->
        <header>
            <nav>             
                <img src="img/logo.png" height="90px" size="90px" />

                <ul class="navigacija_lijevo" style="list-style-type: none;" > 
                    <?php if ($_smarty_tpl->tpl_vars['sesija']->value=='-1') {?>    
                    <li><a href="index.php">Početna</a></li>
                    <li><a href="o_autoru.html">O autoru</a></li>            

                    <?php }?>
                </ul>
                <ul class="navigacija_desno">
                    <li><a href="prijava.php">Prijava</a></li>
                    <li><a href="registracija.php">Registracija</a></li>
                </ul>
            </nav>  
        </header><?php }} ?>
