<?php

function readAlbums(string $filePath){
    $albumFile = file_get_contents($filePath);
    return $albumList = json_decode($albumFile, true);
}
?>