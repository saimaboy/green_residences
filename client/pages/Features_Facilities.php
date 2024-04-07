<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel-Features & Facilities</title>
    <link rel="stylesheet" href="common_admin.css">
    <?php require('links.php') ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <style>
        .custom-bg {
            background-color: #2ec1ac;
        }

        .custom-bg:hover {
            background-color: #279e8c;
        }
    </style>
</head>

<body>

    <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
        <h3 class="mb-0 h-font">ADMIN PANEL</h3>
        <a href="admin.php" class="btn btn-light btn-sm">LOG OUT</a>
    </div>
    <?php include("admin_header.php") ?>



    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4"></h3>
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">


                        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2 mb-4 custom-bg border-0" data-bs-toggle="modal" data-bs-target="#facilitiesModel">
                            <i class="bi bi-file-earmark-plus-fill"></i> Add facilitie
                        </button>


                        <div class="table-responsive-md" style="height: 450px; overflow-y: scroll;">
                            <table class="table table-hover border">
                                <thead class="sticky-top">
                                    <tr class="bg-dark text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">image</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php



                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                   
                                        if (isset($_POST['title'], $_POST['description'], $_FILES['image'])) {
                                      
                                            $hname = 'localhost';
                                            $uname = 'root';  
                                            $pass = '';      
                                            $db = 'green_residences';    

                                      
                                            $mysqli = new mysqli($hname, $uname, $pass, $db);

                                      
                                            if ($mysqli->connect_error) {
                                                die("Connection failed: " . $mysqli->connect_error);
                                            }

                                          
                                            $stmt = $mysqli->prepare("INSERT INTO facilities (title, description, image) VALUES (?, ?, ?)");

                                          
                                            $stmt->bind_param("sss", $title, $description, $image);

                                        
                                            $title = $_POST['title'];
                                            $description = $_POST['description'];

                                     
                                            if ($_FILES['image']['error'] == UPLOAD_ERR_OK) {
                                                $image = file_get_contents($_FILES['image']['tmp_name']); 

                                                $stmt->execute();  if ($stmt->errno) {
                                                    echo "Error: " . $stmt->error;
                                                } else {
                                                    echo "Facility added successfully.";
                                                }
                                            } else {
                                                echo "Error uploading file.";
                                            }

                                            $stmt->close();
                                            $mysqli->close();
                                        }
                                 
                                    }

                                    // // Check if the function 'filteration' is already defined
                        
                                    $mysqli = new mysqli("localhost", "root", "", "green_residences");
                                    if ($mysqli->connect_errno) {
                                        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
                                        exit();
                                    }

                                    if (isset($_POST['delete'])) {
                                        $id = $_POST['delete'];

                                     
                                        $delete_query = "DELETE FROM facilities WHERE id = ?";
                                        $stmt = $mysqli->prepare($delete_query);
                                        $stmt->bind_param("i", $id);
                                        $stmt->execute();
                                    }

                                  
                                    $sql = "SELECT id, title, description, image FROM facilities";
                                    $result = $mysqli->query($sql);
                                    $i = 1;

                       
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" .  $i++ . "</td>";
                                            echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['image']) . "' width='40px'></td>"; 
                                            echo "<td>" . $row['title'] . "</td>";
                                            echo "<td>" . $row['description'] . "</td>";
                                            echo "<td>
                        <form method='post'>
                            <button type='submit' name='delete' value='" . $row['id'] . "' class='btn btn-danger'>Delete</button>
                        </form>
                      </td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='5'>No data available</td></tr>";
                                    }

                                    $mysqli->close();
                                    ?>
                                </tbody>
                            </table>


                        </div>








                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('scripts.php') ?>
</body>



</html>