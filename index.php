
<?php 

$albumFile = file_get_contents('./data/album.json');

$albumList = json_decode($albumFile, true);

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
        <div class="bg-secondary">

            <div class="container py-2">
                <ul class = "list-group">
                    
                    <?php
                foreach($albumList as $album){?>
                    <li><?php echo $album["title"] ;?></li>
                <?php } ?>
            </ul>
        </div>
    </div>

    </main>

    <!-- Footer -->
    <?php include_once "./components/Footer.php"; ?>
    
</body>
</html>