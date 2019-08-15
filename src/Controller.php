<?php
    abstract class Controller {
        //protected means only inheriting classes can use
        protected $model;
        protected $view;
        public function __construct($inview, $inmodel) {
            $this->view = $inview;
            $this->model = $inmodel;
        }

        abstract public function process();
    }