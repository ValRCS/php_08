<?php
    //here we create a new class instance based on our ExampleClass declaration
    require_once("../src/ExampleClass.php");
    echo ExampleClass::$myvar;
    ExampleClass::$myvar++;
    echo ExampleClass::$myvar;
    ExampleClass::$myvar++;
    echo "<hr>";

    $mydb = new ExampleClass(5);
    $mydb2 = new ExampleClass("bobobo");
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

    //constants live inside overall class not each object!
    echo $mydb::PI . "<hr>";
    echo ExampleClass::PI;
    echo "<hr>";

    //here we call a method to modify a static variable
    $mydb->add(10);
    $mydb2->add(20);

    //deconstructors (if any) will be called here
