<?php
    class Model {
        private $db;

        public function __construct($config) {
            $this->db = $this->getDBConn($config);
        }

        private function getDBConn($cfg) {
            $conn = mysqli_connect($cfg::SERVER, $cfg::USER, $cfg::PW, $cfg::DB);

            if (!$conn) {
                echo "Error: Unable to connect to MySQL." . PHP_EOL;
                echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                exit;
                //maybe return null?
            }
            // echo "Connection successful!";
            return $conn;
        }

        public function getTracks($uid) {
            $result = null;
            //per spec show all if not logged in
            if (!$uid) $qry = "SELECT * FROM tracks";
            else $qry = "SELECT * FROM tracks WHERE uid = ".$uid.";"; 
            $result = $this->db->query($qry);
            //key is to return someting which is a general type of data structure
            //in this case we return an associative array;
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function deleteTrack($id, $uid) {

            $stmt = $this->db->prepare("DELETE FROM tracks WHERE id = ? AND uid = ? ;");
            $stmt->bind_param("ss", $id, $uid ); // "sss" means the values are 3 strings (another type is "d" or "f")

            // set parameters and execute

            $stmt->execute();   

            return true;//TODO return false if delete failed?
        }

        public function addTrack($row) {
            $db = $this->db;

            $stmt = $db->prepare("INSERT INTO tracks (name, album, artist, uid) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("sssd", $row['name'], $row['album'], $row['artist'], $row['uid']); // "sss" means the values are 3 strings (another type is "d" or "f")
            // set parameters and execute
    
            $stmt->execute();

            return true; //maybe return track id on success?
        }

        public function updateTrack($row) {
            $stmt = $this->db->prepare("UPDATE tracks SET name = ?, artist = ?, album = ?  WHERE id = ?;");
            $stmt->bind_param("sssd",  $row['name'], $row['artist'], $row['album'], $row['id']); // "sss" means the values are 3 strings (another type is "d" or "f")

            // set parameters and execute

            $stmt->execute();

            return true;
        }
    }