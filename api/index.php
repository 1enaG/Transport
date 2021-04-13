<?php 
include __DIR__ . '/../data/autoload.php'; 

if($_GET['action'] == 'getVehicleType'){
    $vehicleType = new VehicleType((int)$_GET['veh_type_id']); //exam code
    $vehicleType->readFromDB();

    $data = ['vehicleType' => $vehicleType]; 
}else{
    $data = ['error' => 'bad request']; 
}

header('Access-Control-Allow-Origin: *'); 
header('Content-type:application/json'); 
header('Accept-Language: *');


//echo "<pre>";
var_dump($vehicleType); 
//echo "</pre>";


//echo json_encode($data); //doesn't work for some reason

//url to access: 
//localhost/sql_srv/api/?action=getVehicleType&veh_type_id=3