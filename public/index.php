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

        $a12 = 120000000000;
        const MY_PI = 3.14;
        var_dump($a12);

        echo "<hr>";
        echo "Largest int".PHP_INT_MAX;
        echo "<hr>";
        echo PHP_INT_MIN;
        echo "<hr>";
        echo MY_PI;
        echo "<hr>";
        
        echo "My variable a: {$a12} and ".MY_PI." more stuff {$myString}";
        echo "<hr>";
        $truth = $a > $a12;
        echo (int)$truth;
        var_dump($truth);
        echo "<hr>";
        $cars = array("Volvo","BMW","Toyota");
        var_dump($cars);
        echo "<hr>";
        echo $cars[1];
        echo "<hr>";
        $cars['myfavorite'] = "Zapins";
        var_dump($cars);
        echo "<hr>";
        echo $cars["myfavorite"];
        $cars[100]="Volga";
        //with empty brackets we get the next index after the largest
        $cars[]="Mersis";

        array_push($cars, "Volvo", "VW", $a12);
        $a13 = array_pop($cars);
        echo $a13;
        var_dump($cars);
        echo "<hr>";

        $mytable = "<table style='border: 2px solid;'>";
        $mytable .= "<tr><td>KEY</td><td>VALUE</td></tr>";
        foreach($cars as $key => $value) {
            $mytable .= "<tr id='$key'>";
            $mytable .= "<td>$key</td>";
            $mytable .= "<td>$value</td>";
            $mytable .= "</tr>";
        }
        $mytable .= "</table>";
        echo $mytable;

        echo "We have this many cars ".count($cars);
        echo "<hr>";

        foreach($cars as $value) {
            echo "Just the Value=" . $value;
            echo "<br>";
        }
        $a=array("A","Cat","Dog","A","Dog");
        $b = [1,3,5,53,5,7];
        $b[10]=55;
        for ($i = 0; $i < count($b); $i++) {
            echo "\$b[$i] is".$b[$i];
            echo "<br>";
        }
        $c = [
            1 => "Foo",
            5 => "Bar", 
            "Fizz" => "Buzz"
        ];
        $c[]="Fizzbuzz";
        var_dump($c);
        echo "<hr>";
        echo $c[6];
        echo "<hr>";
        var_dump($b);
        $counter = array_count_values($a);
        print_r($counter);
        echo "<hr>";
        echo $counter['A'];
    ?>
</body>
</html>