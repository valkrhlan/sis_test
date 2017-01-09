<html>
    <head>
        <title>Početna stranica</title>
        <meta charset="UTF-8">
        <meta name="author" content="valkrhlan">
        <meta name="description" content="Riješenje projekta iz kolegija WebDiP">
        <meta name="viewport" /><!--content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0,maximum-scale=1.0" --> 
        <link rel="stylesheet" type="text/css" href="css/valkrhlan_projekt.css">
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <script src="vanjske_biblioteke/jquery.min.js"></script>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>-->
        <script type="text/javascript" src="js/jquery.js"></script>
    </head>

    <body>
        <!-- Zaglavlje-->
        <header>
            <nav>             
                <img src="img/logo.png" height="90px" size="90px" />

                <ul class="navigacija_lijevo" style="list-style-type: none;" > 
                    {if $sesija eq '-1'}    
                    <li><a href="index.php">Početna</a></li>
                    <li><a href="o_autoru.html">O autoru</a></li>            

                    {/if}
                </ul>
                <ul class="navigacija_desno">
                    <li><a href="prijava.php">Prijava</a></li>
                    <li><a href="registracija.php">Registracija</a></li>
                </ul>
            </nav>  
        </header>