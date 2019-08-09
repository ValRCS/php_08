<?php
    require_once("../src/utilities.php");
    require_once("../src/head.php");
    // $myres = getRows("SELECT * FROM tracks");
    // printTable($myres, "mytablestyle");
    //printHTMLHeader
    printTable(getRows("SELECT * FROM tracks"), "mytablestyle");
    require_once("../src/foot.php");