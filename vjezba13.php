<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   

<?php
 /* definisanje  podataka */
 $imeRestorana="Makiko";
 $adresaRestorana = "Avde Hume 25, Sarajevo";
 $brojTelefona = "+38756293659"; 
 $koordinate_lang = "94785.5639";
 $koordinate_lat = "9457.57";
 $ocjena = "4.5";
 $status = "otvoreno";
    
?>


<h1><?php echo $imeRestorana;?></h1>
<p>
    Adresa restorana: 
    <a href= "https://maps.google.com?q=<php echo $adresaRestorana; ?">
        <?php echo $adresaRestorana; ?>
    </a>
</p>

<p>
    Broj telefona:
    <a href="tel:<?php echo $brojTelefona; ?>">
    <?php echo $brojTelefona; ?>
</p>

<p>
    Status : <?php echo $status; ?>

</p>

<p>
    Status: <?php echo $ocjena; ?>
</p>

</body>
</html>