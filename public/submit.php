<?php
    require_once("../src/utilities.php");
    require_once("../src/head.php");
?>
    <form>
        <input name="title">
        <input name="artist" placeholder="Enter artist">
        <input name="maxsongs" type="number">
        <button type="submit">SUBMIT</button>
    </form>
   <a href="submit.php?maxsongs=10">Max 10</a>
   <a href="submit.php?order=ASC">Order By Ascending Title</a>
<?php
    echo $_SERVER['REQUEST_METHOD']."<HR>";
    $qry = "SELECT * FROM tracks"; 
    if (isset($_GET["maxsongs"])) {
        $qry .= " LIMIT ".$_GET["maxsongs"]; //FIXME add sanitization!!!
    } 
    if (isset($_GET["order"])) {
        $qry .= " ORDER BY name ".$_GET["order"]; //FIXME add sanitization!!!
    } 

    printTable(getRows($qry), "mytablestyle");


    require_once("../src/foot.php");