<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Array Playground</h1>
<?php
    require_once("../src/utilities.php");
    //rewrite this using foreach syntax so it works
    $b = [1,3,5,53,5,7];
    $b[10]=55;
    // for ($i = 0; $i < count($b); $i++) {
    //     echo "\$b[$i] is".$b[$i];
    //     echo "<br>";
    // }

    printArr($b);
 

?>
</body>
</html>