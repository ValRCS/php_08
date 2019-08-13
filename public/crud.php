<?php
    session_start();
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
        if (!isset($_SESSION['id'])) {
            header("Location: tough.php");
        }
        $stmt = $conn->prepare("INSERT INTO tracks (name, album, artist, uid) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssd", $mytitle, $myalbum, $myartist, $_SESSION['id']); // "sss" means the values are 3 strings (another type is "d" or "f")

        // set parameters and execute

        $stmt->execute();
        $conn->close();
        //I reload the page (normal get) since NO BODY has been sent
        header("Location: crud.php");
    }

    require_once("../src/head.php");
    if (isset($_SESSION['username'])) {
        echo "Hello".$_SESSION['username'];
        echo "Your ID".$_SESSION['id']."<br>";
    }
    if (isset($_COOKIE['TestCookie'])) {
        echo "Aha! Your cookie name is: ".$_COOKIE['TestCookie'];
        echo "<br>";
    }

?>
    <form action="crud.php" method="POST">
        <input name="title" required>
        <input name="artist" placeholder="Enter artist">
        <input name="album" value="Back in Black">
        <button type="submit">SUBMIT</button>
    </form>
<?php
 
    if (isset($_SESSION["id"])) {
        $qry = "SELECT * FROM tracks WHERE uid = ".$_SESSION["id"].";"; 
        printTable(getRows($qry), "mytablestyle");
    } 
    
    


    require_once("../src/foot.php");