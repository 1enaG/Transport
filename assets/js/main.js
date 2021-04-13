function getData(){ //executes get request using specified address 
   console.log("I am here!"); 
    $.get("api/?action=getVehicleType&veh_type_id=3", (data) =>{ //sql_srv/
        //console.log("I am inside get!"); 
        console.log(data); //F12 to see console
   }); //not really sure if it works.. :(
   console.log("I am after get!"); 
}

$().ready(() => {
    getData(); 
}); //gets executed after page is loaded
