<?php
    require_once("../src/utilities.php");
    require_once("../src/head.php");
    // $myres = getRows("SELECT * FROM tracks");
    // printTable($myres, "mytablestyle");
    //printHTMLHeader
    echo $_GET["name"];
    echo $_GET["artist"];
    echo "<hr>";
    printTable(getRows("SELECT * FROM tracks"), "mytablestyle");
    require_once("../src/foot.php");