<?php
    require_once("../src/utilities.php");
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $conn = mysqli_connect(SERVER, USER, PW, DB);

        if (!$conn) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
        $mytitle = "";
        $myalbum = "";
        $myartist = "";
        if (isset($_POST["title"])) $mytitle = $_POST["title"];
        if (isset($_POST["album"])) $myalbum = $_POST["album"];
        if (isset($_POST["artist"])) $myartist = $_POST["artist"];
        $stmt = $conn->prepare("INSERT INTO tracks (name, album, artist) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $mytitle, $myalbum, $myartist); // "sss" means the values are 3 strings (another type is "d" or "f")

        // set parameters and execute

        $stmt->execute();
        $conn->close();
        //I reload the page (normal get) since NO BODY has been sent
        header("Location: crud.php");
    }

    require_once("../src/head.php");
?>
    <form action="crud.php" method="POST">
        <input name="title" required>
        <input name="artist" placeholder="Enter artist">
        <input name="album" value="Back in Black">
        <button type="submit">SUBMIT</button>
    </form>
<?php
 
    
    $qry = "SELECT * FROM tracks"; 
    printTable(getRows($qry), "mytablestyle");


    require_once("../src/foot.php");