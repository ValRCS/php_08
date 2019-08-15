<?php
    require_once("Controller.php");
    class SongController extends Controller {
        private function processGet() {
            $username = "";
            $uid = 0;
            if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
            }
            if (isset($_SESSION['id'])) {
                $uid = $_SESSION['id'];
            }
            //TODO check $_GET for arguments
            $mysongs = $this->model->getTracks($uid);
            $this->view->render($mysongs, $username);  
        }

        private function processPost() {
            //process Post here
        }
        
        public function process() {
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                $this->processGet();
            } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $this->processPost();
            }
        }
    }