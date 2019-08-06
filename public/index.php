<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        function add2($a,$b) {
            global $globC;
            $myLocal = 200;
            echo $a+$b+$globC+$myLocal;
            echo "<hr>";
        }
    ?>
    <p>just a paragraph</p>
    <?php
        $a = 2019;
        $data = 555.888;
        $date = date("Y/m/d");
        $manyTags = "<section>";
        $manyTags .= "<p>Lorem</p>";
        $manyTags .= "</section>";
        
        echo "<hr>";
        var_dump($a);
        echo $a+"300"; //javascript plus
        echo "<hr>";
        echo (string)$a."300"; //javascript plus
        $myString = (string)$a;
        echo "<hr>";
        echo $myString."<hr>";
        
        var_dump($a, $data, $date);
        echo "<hr>";
        echo $manyTags;
        // echo "Hello my Dynamic Page!<hr>".date("Y/m/d:h:m:s");
        // echo "<hr>";
        // echo getcwd();
    ?>
    <main>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto ab tempore sint, dignissimos sunt iure molestiae maxime aspernatur. Cupiditate repudiandae, veritatis fugiat quasi provident dignissimos totam debitis aspernatur asperiores eligendi!</p>
    </main>
    <?php
        echo "<footer>(C)".date("Y")."</footer>";
        echo $_SERVER['HTTP_USER_AGENT']."<hr>";
        echo $a+"44444"; //here "44444" will be type converted to integer
        echo "<hr>";
        $globC = 45.77;
        add2(55,33);
        // var_dump($GLOBALS);
        // echo "<hr>";
        // echo $GLOBALS["DOCUMENT_ROOT"];
        function myTest() {
            static $x = 0; //notice the 2nd time we call the function it does not assing it zero
            echo $x;
            echo "<br>";
            $x += 10;
            $y = 0;
            echo $x;
            echo "<br>";
            echo $y;
            echo "<hr>";
            $y++;
            $x++;
        }
        
        myTest();
        myTest();
        myTest();
    ?>
</body>
</html>