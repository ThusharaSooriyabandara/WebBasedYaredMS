<?php
session_start();
require 'Vehicle Registration/dbcon.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Chart.js CSS -->
    <link href="https://cdn.jsdelivr.net/npm/chart.js" rel="stylesheet">

    <title>Vehicle CRUD</title>
   

    <style>
body {
  background-image: url('Vehicle Registration/admin main.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  opacity: 1;
}
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            margin-top: 2rem;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .float-end {
            margin-left: auto;
        }

        th {
            text-align: center;
        }

        img.vehicle-photo {
            max-width: 100px;
            max-height: 100px;
            object-fit: cover;
        }

        .btn-action {
            margin-right: 5px;
        }

        .no-records {
            text-align: center;
            margin-top: 1rem;
        }

        .custom-header {
            background-color: #FF6E31;
            color: #1A120B;
            padding: 1rem;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.1);
        }

        .custom-header h2 {
            margin: 0;
            font-size: 24px;
            font-smooth: 20%;

        }

        .custom-header .btn-primary {
            background-color: #1A120B; /* Change the button color to green */
            border-color: #1A120B; /* Change the border color to green */
            margin-left: 10px;
        }

        .search-bar {
            margin-top: 1rem;
            display: flex;
            justify-content: flex-end;
        }

        .search-input {
            max-width: 200px;
            margin-right: 10px;
        }
    .btn-view {
        background-color: #1A120B;
        border-color: #1A120B;
    }
            .header {
            background-color: black;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            width: 100%;
            
            top: 0;
            left: 0;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .logo img {
            vertical-align: middle;
            height: 80px;
            width: 80px;
            margin-right: 10px;
        }
        .nav-links {
            margin-right: 20px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            padding: 10px 15px;
            border-radius: 5px;
        }

    </style>
</head>

<body>
    <div class="header">
        <a class="logo" href="#home">
            <img src="logo.png" alt="Logo">
           
        </a>
        <div class="nav-links">

            <a href="first_main_page.php">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </div>
    </div>
    
    <div class="container">
        <?php
        // Get the count of registered vehicles
        $count_query = "SELECT COUNT(*) as total FROM vehicle_details";
        $count_result = mysqli_query($con, $count_query);
        $total_vehicles = 0;
        if ($count_result) {
            $total_vehicles = mysqli_fetch_assoc($count_result)['total'];
        }

        // Get the count of vehicles in REPAIR COMPLETE
        $running_query = "SELECT COUNT(*) as running_total FROM vehicle_details WHERE status = 'REPAIR COMPLETE'";
        $running_result = mysqli_query($con, $running_query);
        $running_vehicles = 0;
        if ($running_result) {
            $running_vehicles = mysqli_fetch_assoc($running_result)['running_total'];
        }

        // Get the count of vehicles in "GARAGE(UNDER REPAIR)" status
        $garage_query = "SELECT COUNT(*) as garage_total FROM vehicle_details WHERE status = 'GARAGE(UNDER REPAIR)'";
        $garage_result = mysqli_query($con, $garage_query);
        $garage_vehicles = 0;
        if ($garage_result) {
            $garage_vehicles = mysqli_fetch_assoc($garage_result)['garage_total'];
        }

     
        ?>

        <div class="custom-header">
    <div class="logo">
        <img src="logo.png" alt="Company Logo" height="150">
    </div>
    <div class="header-content">
        <h2><b>Vehicle Details</b></h2><br>
        <div class="vehicle-stats">
            <p class="m-0"><strong>Total Vehicles:</strong> <?= $total_vehicles ?></p>
            <p class="m-0"><strong>Vehicles in REPAIR COMPLETE:</strong> <?= $running_vehicles ?></p>
            <p class="m-0"><strong>Vehicles in Repair:</strong> <?= $garage_vehicles ?></p>
        </div>
    </div>
    <div class="header-actions">
        
                <a href="Vehicle operator.php" class="btn btn-primary float-end" style="background-color: #1A120B; color: white;">Vehicle Operator Home</a>
    </div>
</div>
        </div>
        <div class="container">
            <?php include('Vehicle Registration/message.php'); ?>

            <div class="search-bar">
                <input type="text" class="form-control search-input" id="searchVehicle" placeholder="Search Registration Number">
            </div>

        <div class="card mt-4">
            <div class="card-body">
                <?php
                $query = "SELECT * FROM vehicle_details";
                $query_run = mysqli_query($con, $query);

                if (mysqli_num_rows($query_run) > 0) {
                ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Registration Number</th>
                                    <th>Engine Number</th>
                                    <th>Chassis Number</th>
                                    <th>Vehicle Class</th>
                                    <th>Taxation Class</th>
                                    <th>Make</th>
                                    <th>Type of Body</th>
                                    <th>Color 1</th>
                                    <th>Color 2</th>
                                    <th>Fuel Type</th>
                                    <th>Cylinder Capacity</th>
                                    <th>First Registration</th>
                                    <th>Responsible Owner</th>
                                    <th>Status</th>
                                    <th>Remarks</th>
                                    <th>Vehicle Photo</th>
                                    
                                </tr>
                            </thead>
                            <tbody id="vehicleTable">
                                <?php
                                while ($vehicle = mysqli_fetch_assoc($query_run)) {
                                ?>
                                    <tr>
                                        <td><?= $vehicle['id']; ?></td>
                                        <td><?= $vehicle['Registration_Number']; ?></td>
                                        <td><?= $vehicle['Engine_Number']; ?></td>
                                        <td><?= $vehicle['Chassis_No']; ?></td>
                                        <td><?= $vehicle['Vehicle_Class']; ?></td>
                                        <td><?= $vehicle['Taxation_Class']; ?></td>
                                        <td><?= $vehicle['Make']; ?></td>
                                        <td><?= $vehicle['Type_of_body']; ?></td>
                                        <td><?= $vehicle['Color_1']; ?></td>
                                        <td><?= $vehicle['Color_2']; ?></td>
                                        <td><?= $vehicle['fual_type']; ?></td>
                                        <td><?= $vehicle['Cylinder_Capacity']; ?></td>
                                        <td><?= $vehicle['First_Registration']; ?></td>
                                        <td><?= $vehicle['Responsible_Owner']; ?></td>
                                        <td><?= $vehicle['status']; ?></td>
                                        <td><?= $vehicle['Remarks']; ?></td>

                                        <td>
                                        <img src="Vehicle Registration/uploads/<?= $vehicle['Vehicle_Photo']; ?>" alt="Vehicle Photo" width="100">
                                        </td>
                                      

                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                <?php
                } else {
                    echo '<div class="no-records"><h5>No Records Found</h5></div>';
                }
                ?>
            </div>
        </div>

        <!-- Column Chart -->
        <div class="card mt-4">
            <div class="card-header">
                <h4>Vehicle Class Distribution</h4>
            </div>
            <div class="card-body">
                <canvas id="vehicleClassChart" width="400" height="200"></canvas>
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="card mt-4">
            <div class="card-header">
                <h4>Responsible Owner Distribution</h4>
            </div>
            <div class="card-body">
                <canvas id="ownerChart" width="400" height="200"></canvas>
            </div>
        </div>
        <!-- Bar Chart for Vehicle Status -->
<div class="card mt-4">
    <div class="card-header">
        <h4>Vehicle Status Distribution</h4>
    </div>
    <div class="card-body">
        <canvas id="statusChart" width="400" height="200"></canvas>
    </div>
</div>
    </div>

    <!-- Chart.js Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Vehicle Class Distribution Data
            var vehicleClassData = <?php
                $query_vehicle_class = "SELECT Vehicle_Class, COUNT(*) as count FROM vehicle_details GROUP BY Vehicle_Class";
                $query_vehicle_class_run = mysqli_query($con, $query_vehicle_class);
                $vehicle_class_labels = [];
                $vehicle_class_counts = [];
                while ($vehicle_class = mysqli_fetch_assoc($query_vehicle_class_run)) {
                    $vehicle_class_labels[] = $vehicle_class['Vehicle_Class'];
                    $vehicle_class_counts[] = $vehicle_class['count'];
                }
                echo json_encode([
                    'labels' => $vehicle_class_labels,
                    'counts' => $vehicle_class_counts
                ]);
                ?>;

            // Vehicle Class Chart
            var ctxClass = document.getElementById('vehicleClassChart').getContext('2d');
            var vehicleClassChart = new Chart(ctxClass, {
                type: 'bar',
                data: {
                    labels: vehicleClassData.labels,
                    datasets: [{
                        label: 'Vehicle Class',
                        data: vehicleClassData.counts,
                        backgroundColor: 'rgba(255, 110, 49, 0.9)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

// Responsible Owner Distribution Data
var ownerData = <?php
    $query_owner = "SELECT Responsible_Owner, COUNT(*) as count FROM vehicle_details GROUP BY Responsible_Owner";
    $query_owner_run = mysqli_query($con, $query_owner);
    $owner_labels = [];
    $owner_counts = [];
    while ($owner = mysqli_fetch_assoc($query_owner_run)) {
        $owner_labels[] = $owner['Responsible_Owner'];
        $owner_counts[] = $owner['count'];
    }
    echo json_encode([
        'labels' => $owner_labels,
        'counts' => $owner_counts
    ]);
    ?>;
var ctx = document.getElementById('ownerChart').getContext('2d');
var ownerChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ownerData.labels,
        datasets: [{
            label: 'Responsible Owner',
            data: ownerData.counts,
            backgroundColor: [
                'rgba(255, 110, 49, 0.9)',   // FF6E31 color
                'rgba(26, 18, 11, 1)'      // 1A120B color
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: 'bottom'
            }
        }
    }
});
        });

        // Vehicle Search Functionality
        document.getElementById('searchVehicle').addEventListener('input', function() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById('searchVehicle');
            filter = input.value.toUpperCase();
            table = document.getElementById('vehicleTable');
            tr = table.getElementsByTagName('tr');

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName('td')[1]; // Index 1 is the column of Registration Number
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = '';
                    } else {
                        tr[i].style.display = 'none';
                    }
                }
            }
        });
         document.addEventListener("DOMContentLoaded", function() {
        // ... (previous code for other charts) ...

        // Vehicle Status Distribution Data
        var statusData = <?php
            $query_status = "SELECT status, COUNT(*) as count FROM vehicle_details GROUP BY status";
            $query_status_run = mysqli_query($con, $query_status);
            $status_labels = [];
            $status_counts = [];
            while ($status = mysqli_fetch_assoc($query_status_run)) {
                $status_labels[] = $status['status'];
                $status_counts[] = $status['count'];
            }
            echo json_encode([
                'labels' => $status_labels,
                'counts' => $status_counts
            ]);
            ?>;
        var ctxStatus = document.getElementById('statusChart').getContext('2d');
        var statusChart = new Chart(ctxStatus, {
            type: 'bar',
            data: {
                labels: statusData.labels,
                datasets: [{
                    label: 'Vehicle Status',
                    data: statusData.counts,
                    backgroundColor: 'rgba(0, 128, 0, 0.9)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
