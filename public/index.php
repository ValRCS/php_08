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
            echo $a+$b;
        }
    ?>
    <p>just a paragraph</p>
    <?php
        $a = 2019;
        echo $a+30;
        echo "<hr>";
        echo "Hello my Dynamic Page!<hr>".date("Y/m/d:h:m:s");
        echo "<hr>";
        echo getcwd();
    ?>
    <main>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto ab tempore sint, dignissimos sunt iure molestiae maxime aspernatur. Cupiditate repudiandae, veritatis fugiat quasi provident dignissimos totam debitis aspernatur asperiores eligendi!</p>
    </main>
    <?php
        echo "<footer>(C)".date("Y")."</footer>";
        echo $_SERVER['HTTP_USER_AGENT']."<hr>";
        echo $a+"44444"; //here "44444" will be type converted to integer
        add2(55,33);
    ?>
</body>
</html>