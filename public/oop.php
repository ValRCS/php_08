<?php
    //here we create a new class instance based on our DB declaration
    require_once("../src/DB.php");
    $mydb = new DB(5);
    $mydb2 = new DB("bobobo");
    echo "my first db ".$mydb->name."<hr>";
    echo "my second db ".$mydb2->name."<hr>";
    //generally not a good practice to change object properties directly
    $mydb2->name = "This is my second db really!";
    echo "my second db ".$mydb2->name."<hr>";
    $mydb->printName();
    $mydb2->printName();
    // $mydb2->printAnything("kartupelis");
    echo "My secret is".$mydb->getSecret()."<hr>";
    echo "My secret is".$mydb2->getSecret()."<hr>";

    $mydb2->setSecret("bumbieris");

    echo "My secret is".$mydb2->getSecret()."<hr>";
    //deconstructors (if any) will be called here
