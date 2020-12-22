<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->


    <link rel="stylesheet" href="public/css/style.css">
    <title>Boutique</title>
</head>

<body>
    <?php
    include "menu.php";
    include "messages.php";
    ?>
    <div class="container">
        <div class="row">
            <?php echo $page; ?>
        </div>
    </div>
    <footer>
        <div class="footer-copyright">
            <div class="container">
                &copy 2020 - VANMAK David
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>