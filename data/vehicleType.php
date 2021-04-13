<?php 
//we want to output info about each vehicle type and the vehicles within it (alternatively, could be route + its vehicles )
class VehicleType implements JsonSerializable {
    private $id;
    private $typeName; 
    private $vehicleCount; 
    private $vehicles = []; 
    

    function __construct(int $id, string $typeName = ""){
        $this->id = $id; 
        $this->typeName = $typeName; 
    }
    function getId(){
        return $this->id; 
    }
   
    function getTypeName(){
        return $this->typeName; 
    }
    function getVehicleCount(){
        return $this->vehicleCount; 
    }
    
    function getVehicles(){
        return $this->vehicles; 
    }
    public function readFromDB(){
        $db = new TransportDB(); 
        $sql = 'select id, type_name, vehicle_count
        from vehicleTypes
        where id = '.$this->id; 

        $vehicleTypeHead = $db->executeQuery($sql); 
        if(!$vehicleTypeHead || !$vehicleTypeHead[0]){
            return false; 
        }
        $this->typeName = $vehicleTypeHead[0]['type_name']; 
        $this->vehicleCount = $vehicleTypeHead[0]['vehicle_count']; 
        //getting info about the vehicles of this type: 
        $sql = 'select id, route_id, number, number_of_seats
        from vehicles
        where vehicle_type_id = '.$this->id; 
        
        if($vehicles = $db->executeQuery($sql)){
            foreach($vehicles as $vehicle){
                //id, route, number, numberOfSeats, vehicleType
                $this->vehicles[] = new Vehicle($vehicle['id'], 
                    new Route($vehicle['route_id']), 
                    $vehicle['number'], 
                    $vehicle['number_of_seats'], 
                    $this //vehicleType                  
                ); 
            }
        }
        
        return true; 
    }

    public function jsonSerialize(){
        return [
            'id' => $this->id, 
            'typeName' => $this->typeName, 
            'vehicleCount' => $this->vehicleCount, 
            'vehicles' => $this->vehicles, 
        ]; 
    }


}