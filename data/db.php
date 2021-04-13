<?php 
class TransportDB {
    private $errText = ""; 
    private $conn; 

    function getErrText(){
        return $this->errText; 
    }

    function connect(){
        $this->errText = ""; 
        try{
            $serverName = "DESKTOP-BL2CC8P"; //serverName\instanceName
            $connectionInfo = array( "Database" => "Transport"); 
            $this->conn = sqlsrv_connect($serverName, $connectionInfo); 

            if($this->conn == false){
                $this->errText = FormatErrors(sqlsrv_errors());  //format errors: array -> string 
                return false; 
            }
            return true; 

        }
        catch(Exception $e){
            $this->errText = "An unknown error has occurred"; 
            return false; 
        }
    } //end of connect 
    function disconnect(){
        sqlsrv_close($this->conn); 
    }

    function executeQuery($sqlText, $flg_disconnect = true){ //makeQuery  (flag - for future )
        $this->errText = ""; 
        $result = []; 
        try{
            if($this->conn || $this->connect()){
                $sql_stmt = sqlsrv_query($this->conn, $sqlText);
                if(!$sql_stmt){
                    $this->errText = FormatErrors(sqlsrv_errors()); 
                    return false; 
                }
                while($row = sqlsrv_fetch_array($sql_stmt, SQLSRV_FETCH_ASSOC)){
                    $result[] = $row; //do we need the [] here?..
                }
                sqlsrv_free_stmt($sql_stmt); //free the variable after using 
                return $result; 
            }
        }
        catch(Exception $e){
            $this->errText = "An unknown error has occurred"; 
            return false; 
        }
    }

    // function FormatErrors($errors){
    //     echo "there are some errors"; 

    // }


}