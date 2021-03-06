<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pagesMetaTitles[$url] ?></title>
    <meta name="description" content="<?php echo $pagesMetaDescriptions[$url] ?>"/>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>
    <header>
        <div class="text-left text-uppercase">
            <p id="first-title">CONCEPTION ET R&Eacute;ALISATION DE SITES INTERNETS,<br>APPLICATIONS WEB & MOBILE</p>
            <p id="second-title"><?php echo $pagesTitles[$url] ?></p>
            <p id="region">VALENCE, MONT&Eacute;LIMAR ET SA R&Eacute;GION</p>
        </div>
        <nav>
            <ul>
                <li><a href="index.php?pages=accueil">Accueil</a></li>
                <li><a href="index.php?pages=hobbies">Hobbies</a></li>
                <li><a href="index.php?pages=contact">Contact</a></li>
            </ul>
        </nav>
    </header>
