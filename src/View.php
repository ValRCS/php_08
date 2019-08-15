<?php
    abstract class View {
        abstract public function render($data, $user);

        public function getHead($title, $css, $js) {
            $str = <<<MYHEAD
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>$title</title>
                <link rel="stylesheet" href="styles/$css">
                <script src="scripts/$js"></script>

            </head>
            <body>
MYHEAD; //we have to place MYHEAD (or whatever we chose) at START of the LINE!!!!
            return $str;
        }

        public function getFoot() {
            return "</body></html>";
        }

        public function getLogin() {
            $str = <<<MYLOGIN
            <form method="POST" action="login.php">
    Save Login<input type="checkbox" name="savelogin">
    Login<input name = "uname">
    Password
    <input name="pw">
    <button type="submit" name="login">LOGIN</button>
    <button type="submit" name="logout">LOGOUT</button>
    
</form>
MYLOGIN;
            return $str;
        }

        public function getSubmit() {
            $str = <<<MYSUBMIT
            <form action="songs.php" method="POST">
            <input name="title" required="">
            <input name="artist" placeholder="Enter artist">
            <input name="album" value="">
            <button type="submit">SUBMIT</button>
        </form>
MYSUBMIT;
            return $str;
        }
    }