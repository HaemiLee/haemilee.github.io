<?php   
// File: UJEI_wellness_main.php
// Name: Haemi Lee
// Class: CS 325, January 2022
// Final Project
// Due date: 01/27/2022
    

    $db = new PDO("mysql:dbname=hlee22;host=localhost", "hlee22", "wu4vjuc6qd");
    // $currImageNum = $_GET["galleryNum"];
    // echo $currImageNum+1;

    $currImageNum = rand(1, 10);

    $query="SELECT imageName FROM gallery WHERE id = ".$currImageNum;
    $image = $db->query($query)->fetchAll(PDO::FETCH_ASSOC);
    foreach ($image as $i){
        foreach($i as $j){
            echo "Gallery/".$j;
        }
    }
?>