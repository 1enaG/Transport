<?php 
class Route implements JsonSerializable {
    private $id;
    private $routeNumber; 
    private $vehicleType; 

    function __construct(int $id, string $routeNumber = "", VehicleType $vehicleType = null ){
        $this->id = $id; 
        $this->routeNumber = $routeNumber; 
        $this->vehicleType = $vehicleType; 
    }

    function getId(){
        return $this->id; 
    }

    function getRouteNumber(){
        return $this->routeNumber; 
    }

    function getVehicleType(){
        return $this->vehicleType; 
    }

    public function jsonSerialize(){
        return [
            'id' => $this->id, 
            'routeNumber' => $this->routeNumber, 
            'vehicleType' => $this->vehicleType, 
            //add vehicleType !
        ]; 
    }
}