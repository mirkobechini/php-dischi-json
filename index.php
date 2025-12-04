<?php 

require_once './functions.php';

$albumList = readAlbums('./data/album.json');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP dischi json</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>

    <!-- Header -->
    
    <?php include_once "./components/Header.php"; ?>

    <!-- Main -->
    <main>
        <div class="bg-secondary-subtle">

            <div class="container p-5">
                    <div class="row row-cols-3 g-2">
                        <?php foreach($albumList as $album){?>
                           <div class="col-4">

                               <div class="card text-center bg-secondary text-white h-100" style="max-width: 220px;">
                                   <div class="card-body">
                                       <img src="<?php echo $album['cover']; ?>" class="card-img-top mb-2" alt="<?php echo $album['title']; ?>" style="width: 100%; height: 180px; object-fit: cover;">
                                       <h5 class="card-title fw-bold mb-2"><?php echo $album['title']; ?></h5>
                                       <p class="card-text mb-2"><?php echo $album['artist']; ?></p>
                                       <p class="card-text  fw-bold fs-6 mb-0"><?php echo $album['year']; ?></p>
                                    </div>
                                </div>
                            </div>
                            
                            <?php } ?>
                    </div>
        </div>
    </div>

    </main>

    <!-- Footer -->
    <?php include_once "./components/Footer.php"; ?>
    
</body>
</html>