<?php
    //here we create a new class instance based on our DB declaration
    require_once("../src/DB.php");
    $mydb = new DB();
    $mydb2 = new DB();
    echo "my first db ".$mydb->name."<hr>";
    echo "my second db ".$mydb2->name."<hr>";
    $mydb2->name = "This is my second db really!";
    echo "my second db ".$mydb2->name."<hr>";
