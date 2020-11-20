<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>

        <?php var_dump($_POST); ?>
        <form action="traitement.php" method="post">
            <p>
                First Name: <input type="text" name="firtname" id="" placeholder="First name">
            </p>
            <p>
                Last Name: <input type="text" name="lastname" id="">
            </p>
            <input type="submit" name="lastname" id="" value="Submit">
        </form>
    </main>
    </body>
    
    </html>