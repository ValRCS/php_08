<?php
    require_once("Controller.php");
    class SongController extends Controller {
        public function process() {
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                //TODO check $_GET for arguments
                $mysongs = $this->model->getTracks(5);
                $this->view->render($mysongs, "Valdis");
            }

        }
    }