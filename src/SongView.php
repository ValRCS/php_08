<?php
    require_once("View.php");
    class SongView extends View {
        public function render($songs, $user) {
            echo $this->getHead("My Songs", "style.css", "songs.js");
            echo "Hello $user";
            echo "Starting Render<hr>";
            // echo "Your name is :".$user['name']."<br>";

            foreach ($songs as $row) {
                print_r($row);
                echo "<hr>";
            }
            echo $this->getFoot();
        }
    }