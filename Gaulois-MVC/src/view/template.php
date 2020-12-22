<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?= $titre ?>
    </title>
    <meta name="description" content="Best website ever.">
    <!-- Facebbok And Twitter Meta-->
    <meta property="og:title" content="European Travel Destinations">
    <meta property="og:description" content="Offering tour packages for individuals or groups.">
    <meta property="og:image" content="http://euro-travel-example.com/thumbnail.jpg">
    <meta property="og:url" content="http://euro-travel-example.com/index.htm">
    <meta name="twitter:card" content="summary_large_image">
    <!-- Facebbok And Twitter Meta END-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <header>
        <nav>

            <a href="http://localhost:8081/index.php?action=gauloisParLieu">
                Gaulois Par Lieu
            </a>
            <a href="http://localhost:8081/index.php?action=gauloisSpecialiteParVillage">
                Spécilaité d'un Gaulois Par Village
            </a>
            <a href="http://localhost:8081/index.php?action=nombreDeGauloisParSpecialite">
                Nombre de Gaulois par specialité
            </a>
            <a href="http://localhost:8081/index.php?action=histortiqueBatailles">
                Histortique des Batailles
            </a>
            <a href="http://localhost:8081/index.php?action=gauloisParLieu">
                Gaulois Par Lieu
            </a>
            <a href="http://localhost:8081/index.php?action=gauloisParLieu">
                Gaulois Par Lieu
            </a>
            <a href="http://localhost:8081/index.php?action=gauloisParLieu">
                Gaulois Par Lieu
            </a>
            <a href="http://localhost:8081/index.php?action=gauloisParLieu">
                Gaulois Par Lieu
            </a>
            <a href="http://localhost:8081/index.php?action=gauloisParLieu">
                Gaulois Par Lieu
            </a>
        </nav>
    </header>
    <div class="container" id="contenu">
        <!-- D'ou vient le contenu ?  -->
        <?= $contenu ?>
    </div>
    <script src="application.js" async defer></script>
</body>

</html>