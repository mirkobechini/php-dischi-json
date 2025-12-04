<?php

function readAlbums(string $filePath){
    $albumFile = file_get_contents($filePath);
    return $albumList = json_decode($albumFile, true);
}


function addAlbum(string $filePath, array $newAlbum){
    $albumList = json_decode(file_get_contents($filePath), true);
    $albumList[] = $newAlbum;
    $json_album = json_encode($albumList);
    file_put_contents($filePath, $json_album);
}
?>