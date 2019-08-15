<?php
    require_once("View.php");
    class SongView extends View {
        public function render($songs, $user) {
            echo $this->getHead("My Songs", "style.css", "songs.js");
            if (!$user) {
                echo $this->getLogin();
            }
            echo "Hello $user";
            echo $this->getSubmit();
            // echo "Your name is :".$user['name']."<br>";
            $haveColumnNames = false;
            foreach ($songs as $row) {
                //print_r($row);
                if (!$haveColumnNames) {
                    echo "<div class='row'>";
                    foreach ($row as $key => $value) {
                        echo "<div class='cell'>$key</div>";
                    }
                    echo "</div><hr>";
                    $haveColumnNames = true;
                }
                echo "<div class='row'>";
                foreach ($row as $value) {
                    echo "<div class='cell'>$value</div>";
                }
                echo "</div>";
                echo "<hr>";
            }
            echo $this->getFoot();
        }
    }