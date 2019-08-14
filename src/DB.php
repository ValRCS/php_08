<?php
    class DB {
        //code goes here
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