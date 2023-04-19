<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <main>
        <div class="container py-5">
            <div class="row">
                <form class="py-5" method="GET" action="index.php">
                    <div class="mb-3">
                        <label for="passLength" class="form-label">Inserire lunghezza password:</label>
                        <input type="number" name="passLength" class="form-control" id="passLength" aria-describedby="passLength">
                    </div>
        
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <?php 

                    require __DIR__ . '/functions.php';
                    
                    if (isset($_GET["passLength"])) {
                        
                        $newPassw = passwGenerator($_GET["passLength"]);
                        
                        $compleatedPass = implode("", $newPassw);
                

                        echo '<h3>la Password generata è: ' . $compleatedPass . '</h3>'; 
                    }
                ?>
            </div>
        </div>
    </main>
</body>
</html>

