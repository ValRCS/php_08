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
    }