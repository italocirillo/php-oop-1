<?php
require_once __DIR__ . "/db.php";
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>MOVIES</h1>
        <div class="row">
            <?php
            foreach ($movies as $movie) { ?>
                <div class="col">
                    <div class="card">
                        <img src="<?php echo $movie->cover ?>" class="card-img-top" alt="<?php echo $movie->titolo ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $movie->titolo ?></h5>
                            <p class="card-text"><?php echo $movie->descrizione ?></p>
                            <ul class="list-group list-group-flush">
                                <?php
                                foreach ($movie->generi as $genere) { ?>
                                    <li class="list-group-item"><?php echo $genere ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>
</body>

</html>