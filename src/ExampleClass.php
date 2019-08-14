<?php
    class ExampleClass {
        //code goes here
        const PI = 3.14;

        //this means there is only ONE variable for whole class
        //and it is publicly accesible
        static public $myvar = 0;

        public $name = "My db";
        
        //for private use only inside class instance
        private $secret = "arbuzs";
        private $foo = "Bar";
        private $fullname = "";

        //constructor gets called each time we create a new object from our class
        public function __construct($text) {
            $this->fullname = $this->name . $text;
            echo "Created new DB! $this->fullname<hr>";
        }

        public function add($val) {
            self::$myvar += $val;
            echo self::$myvar . "<hr>";
        }

        //deconstructor gets called when the objects are destroyed (typically at the end of program)
        public function __destruct() {
            echo "Destroyed ".$this->fullname;
        }

        //getter
        public function getSecret() {
            //we can format here
            return $this->secret;
        }

        //setter
        public function setSecret($val) {
            //we can perform validation and sanitization here if needed
            $this->secret = $val;
        }

        public function printName() {
            $this->printAnything("My DB is".$this->name);
        }

        //utility function for work inside class
        private function printAnything($text) {
            echo "Printing some text:".$text."<hr>";
        }
        
    }