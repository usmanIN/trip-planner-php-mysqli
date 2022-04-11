<?php 
require "./TripPlanner.php";

$trip =  new TripPlanner();

// Search by source & destination
$trip->search("Chennai","Mumbai");

// Retrive Data
$trip->fetchAll();

// Insert new data in Database
$trip->add("Delhi","Kolkata",800);
$trip->add("Ghaziabad","Lucknow",460);
$trip->add("Chandigarh","Jaipur",600);
$trip->add("Mumbai","Goa",500);
$trip->add("Chennai","Mumbai",780);


?>