<?php
   // phpinfo(); 
//servername - from Connection window! 
// WORKING WAY TO ESTABLISH CONNECTION: 
   $serverName = "DESKTOP-BL2CC8P"; //serverName\instanceName
   $connectionInfo = array( "Database" => "Transport"); 
   $conn = sqlsrv_connect($serverName, $connectionInfo); 

   if($conn){
       echo "connection established! <br/>"; 
   }else{
       echo "Connection could not be established </br>"; 
       die(print_r(sqlsrv_errors(), true)); 
   }

   $sql_stmt = sqlsrv_query($conn, "select * from vehicles"); 
   while ($row = sqlsrv_fetch_array($sql_stmt, SQLSRV_FETCH_ASSOC)){
        echo "<pre>"; 
        var_dump($row); 
        echo "</pre>";
   }



//    <?php
//    require 'data/autoload.php'; 

//    $vehicleType = new VehicleType(3);
//    $vehicleType->readFromDB(); 

//    echo "<pre>";
//    var_dump($vehicleType); 
//    echo "</pre>";



//USING A SPECIFIC USER: 
// try{
// //     $srvName = "localhost,1433"; //DESKTOP-BL2CC8P server, default port localhost // I am really not sure what the name of my server is
//     $srvName = "DESKTOP-BL2CC8P"; 
//     $connOptions = [
//         'Database' => 'Transport', 
//         'Uid' => 'myUser', 
//         'PWD' => 'qwerty', 
//         'CharacterSet' => 'UTF-8'

//     ]; 
//     $conn = sqlsrv_connect($srvName, $connOptions); 
//     if($conn == false){
//         echo "<pre>"; 
//         var_dump(sqlsrv_errors()); 
//         echo "</pre>"; 

//     }

// }
// catch(Exception $e){
//     echo 'An error has occurred!'; 
// }
// echo 'Connection established successfully!'; 