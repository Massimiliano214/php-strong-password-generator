

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Sicura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <main>
        <div class="container rounded py-5">
            <?php
                session_start();
                if (!empty($_SESSION['passwordRediretta'])) {
                    echo '<h3>la Password generata è: ' . $_SESSION['passwordRediretta'] . '</h3>'; 
                }
            ?>
            <div class="py-5">
                <a class="bottone" href="http://localhost/php-strong-password-generator/index.php">Genera Nuova Password</a>
    
            </div>
        </div>
    </main>
</body>
</html>