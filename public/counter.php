<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PageCounter</title>
</head>
<body>
    <h1>Visitor Counter</h1>

<?php
    $visitors = 0;

    $myfile = fopen("counter.txt", "r") or die("Unable to open file!");
    $visitors = fread($myfile,filesize("counter.txt"));
    fclose($myfile);
    echo "<hr>";
    echo "<div>You got $visitors</div>";
    $visitors++;
    //example on how to add a timestamp to file name
    $dateStamp = date("Y_m_d_h_m_s");
    $fileName = "counter".$dateStamp.".txt";
    echo $fileName;
    $myfile = fopen($fileName, "w") or die("Unable to open file!");
    fwrite($myfile, $visitors);
    fclose($myfile);
    echo "<div>You got $visitors</div>";
?>
</body>
</html>