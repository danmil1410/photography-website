<?php 
    $folder = $_POST["name"];
    if($_POST["name"] == "Wszystkie" || $_POST["name"] == ""){
        $dirname = "./images/gallery/";

    } else {
        $dirname = "./images/gallery/$folder/";
    }
    $images = glob($dirname."*.{jpg,png,tiff}",GLOB_BRACE);

        foreach($images as $image) {
            echo '<figure>
                <a href="'.$image.'" data-size="1500x1000">
                    <img src="'.$image.'" />
                </a>
                </figure>';
            }
?>