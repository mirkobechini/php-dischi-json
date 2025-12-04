<?php 
require_once './functions.php';
$filePath = './data/album.json';


if(isset($_POST['title']) && isset($_POST['artist']) && isset($_POST['year'])){
    $newAlbum = [
        'title' => $_POST['title'],
        'artist' => $_POST['artist'],
        'cover' => "#",
        'year' => $_POST['year']
    ];

    addAlbum($filePath, $newAlbum);

    header("Location: ./index.php");
}

?>