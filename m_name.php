<?php
class name {
    private $mysqli;

    function __construct($conn) {
        $this->mysqli = $conn;
    }
    public function tampil ($id= null) {
        $db = $this->mysqli->conn;
        $sql = "SELECT * FROM tabelquery";
        if($id != null) {
            sql : "WHERE name=$tabelsquery";
    
        }
        $query = $db->query($sql) or die ($db->error);
    }
}
?>