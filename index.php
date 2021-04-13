<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicles by type</title>
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
   <!--  <script src="assets/js/popper.min.js"></script> --> <!-- makes bootstrap easier to use import { createPopper } from '@popperjs/core'; --> 
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
   
</head>
<body>
    <div class="container">
        <div class="row justify-content-around text-center header-row">
            <div class="col-12">
                <h2>List of vehicles by type</h2>
            </div>
            <div class="col-12 text-primary">
                <h4 id="veh_type">Vehicle type</h4>
            </div>
            <div class="col-12 text-primary">
                <h4 id="veh_count">Vehicle count</h4>
            </div>


            <div class="col-12 col-md-5 col-lg-3">
                <label for="">Route</label>
                <span class="text-info" id="route">route num</span>
            </div>
            <div class="col-12 col-md-5 col-lg-3">
                <label for="">Number</label>
                <span class="text-info" id="number">veh num</span>
            </div>
            <div class="col-12 col-md-5 col-lg-3">
                <label for="">Number of Seats</label>
                <span class="text-info" id="num_of_seats">seat num</span>
            </div>

        </div>
    </div>
    
</body>
</html>