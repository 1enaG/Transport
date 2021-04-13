<?php 

class Vehicle implements JsonSerializable {
    private $id;
    private $route; 
    private $number; 
    private $numberOfSeats; 
    private $vehicleType;  //object of VehicleType class! 
//change routeId to Route!! 
    function __construct(int $id, Route $route = null , string $number = '', int $numberOfSeats = 0, VehicleType $vehicleType = null){
        $this->id = $id; 
        $this->route = $route; 
        $this->number = $number; 
        $this->numberOfSeats = $numberOfSeats; 
        $this->vehicleType = $vehicleType; 
    }

    function getId(){
        return $this->id; 
    }
    function getRoute(){
        return $this->route; 
    }
    function getNumber(){
        return $this->number; 
    }
    function getNumberOfSeats(){
        return $this->numberOfSeats; 
    }
    function getVehicleType(){
        return $this->vehicleType; 
    }

    public function jsonSerialize(){
        return [
            'id' => $this->id, 
            'route' => $this->route,  //pass in route somehow.. 
            'number' => $this->number, 
            'numberOfSeats' => $this->numberOfSeats, 
            'vehicleType' => $this->vehicleType,  //what do i send here? 
        ]; 
    }

    
    // public function readFromDB(){
    //     $db = new TransportDB(); 
    //     $sql = 'select id, type_name
    //     from vehicleTypes
    //     where id = '.$this->id; 

    //     $vehicleTypeHead = $db->executeQuery($sql); 
    //     if(!$vehicleTypeHead || !$vehicleTypeHead[0]){
    //         return false; 
    //     }
    //     $this->typeName = $vehicleTypeHead[0]['type_name']; 

    //     return true; 
    // }

   
}