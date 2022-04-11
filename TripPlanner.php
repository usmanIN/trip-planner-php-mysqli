<?php 
 
require("./Database.php");


class TripPlanner extends Database{

    public function search($source, $destination, $data=''){
        
        $result = Database::query("SELECT * FROM trip WHERE source_city='".$source."' AND destination_city='".$destination."' ");
        echo "<pre>";
        print_r($result->fetch_object());
        echo "</pre>";
    }

    public function fetchAll(){
        $result = Database::query("SELECT * FROM trip");
        echo "<pre>";
        while($rows = $result->fetch_object()){
            print_r($rows);
        }
        echo "</pre>";        
    }

    public function add($source, $destination, $cost){

        $query = "INSERT INTO trip (source_city,destination_city,cost) VALUES ('".$source."','".$destination."','".$cost."') ";
        $db = new Database();        
        $db->query($query);

    }
}



?>