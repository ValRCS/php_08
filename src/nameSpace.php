<?php
    namespace RCS;

    function printH() {
        echo "Hello<hr>";
    }

    namespace RCS\Utilities;

    function printL() {
        echo "From Utilities";
    }

    namespace RCS\Common;

    function printC() {
        echo "<hr>Print common";
    }

    class myC {
        public function prC() {
            echo "<hr>PRC<hr>";
        }
    }
