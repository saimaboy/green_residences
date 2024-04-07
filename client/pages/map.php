<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBICHjsg4_yq3SOJGyqUfw_UO8h2Jz_LfU&callback=initMap&loading=async" defer></script>


    <!-- <?php require('links.php') ?> -->
    <link rel="stylesheet" href="common_admin.css">

    <title>Warden Panel</title>

    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>

<body class="bg-light" onload="getLocation(); ">
    <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
        <h3 class="mb-0 h-font">Warden Panel</h3>
        <a href="admin.php" class="btn btn-light btn-sm">LOG OUT</a>
    </div>


    <div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container-fluid flex-lg-column align-items-stretch">
                <h5 class="mt-2 text-light">Warden panel</h5>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#admindropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="admindropdown">
                    <ul class="nav nav-pills flex-column">


                        <li class="nav-item">
                            <a class="nav-link text-white" href="warden.php">All Properties</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="map.php">View Map</a>
                        </li>



                </div>
            </div>

        </nav>
    </div>


    <div class="container-fluid" id="main-content">

        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4 mt-5">All Locations</h3>
              
                <div class="col-lg-6 col-md-6 px-4">
                    <div class="bg-white rounded shadow p-5">
                    
                        <div id="map" style="width: 500px;height: 500px;"></div>
                        <script>
                            function initMap() {
                                const map = new google.maps.Map(document.getElementById("map"), {
                                    zoom: 7,
                                    center: {
                                        lat: 7.9917939,
                                        lng: 79.8316158,
                                    },
                                });

                                <?php
                               
                                $hname = 'localhost';
                                $uname = 'root';  
                                $pass = '';       
                                $db = 'green_residences';    

                               
                                $conn = new mysqli($hname, $uname, $pass, $db);

                             
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                          
                                $sql = "SELECT * FROM property WHERE accepted = 1";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                 
                                    while ($row = $result->fetch_assoc()) {
                                        
                                        echo "(function() {\n";
                                        echo "var marker = new google.maps.Marker({\n";
                                        echo "position: {\n";
                                        echo "lat: " . $row["latitude"] . ",\n";
                                        echo "lng: " . $row["longitude"] . "\n";
                                        echo "},\n";
                                        echo "map,\n";
                                        echo "title: '" . $row["room_name"] . "',\n";
                                        echo "});\n";

                                       
                                        echo "var contentString = '<div class=\"card\" style=\"max-width: 200px;\">";
                                        echo "<img src=\"data:image/jpeg;base64," . base64_encode($row['room_image']) . "\" class=\"card-img-top\" alt=\"Room Image\">";
                                        echo "<div class=\"card-body\">";
                                        echo "<h5 class=\"card-title\">" . $row["room_name"] . "</h5>";
                                        echo "<h6 class=\"card-subtitle mb-3 text-muted\">Rs. " . $row["room_price"] . " per year</h6>";
                                        echo "<div class=\"features mb-3\">";
                                        echo "<h6 class=\"mb-1\">Features</h6>";
                                        echo "<span class=\"badge rounded-pill bg-light text-dark\">" . $row["room_features"] . "</span>";
                                        echo "</div>";
                                        echo "<div class=\"facilities mb-3\">";
                                        echo "<h6 class=\"mb-1\">Facilities</h6>";
                                        echo "<span class=\"badge rounded-pill bg-light text-dark\">" . $row["room_facilities"] . "</span>";
                                        echo "</div>";
                                        echo "<h6 class=\"mb-1\">Student count</h6>";
                                        echo "<span class=\"badge rounded-pill bg-light text-dark\">" . $row["student_count"] . " students</span>";
                                        echo "</div>";
                                        echo "</div>';\n";

                                        
                                        echo "var infowindow = new google.maps.InfoWindow({\n";
                                        echo "content: contentString \n";
                                        echo "});\n";

                                    
                                        echo "marker.addListener('click', function() {infowindow.open(map, marker); });\n";
                                        echo "})();\n";
                                    }
                                }

                          
                                $conn->close();
                                ?>
                            }

                            window.initMap = initMap;
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>