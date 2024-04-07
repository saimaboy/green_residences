<nav class="navbar navbar-expand-lg navbar-dark bg-success px-lg-3 sticky-top  " style=" height:5rem">
    <div class="container" >
        <a class="navbar-brand" href="../client/public/index.php">
            <img src="../../img/original.svg" class="img-fluid custom-img" style="width: 150px;" alt="Logo of the project">
        </a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0" style="line-height: 1;">
                <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="../public/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="../pages/rooms.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="../pages/facilities.php">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="../pages/contact.php">Contact Us</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
    <a href="http://localhost:8080/green_residences/admin/admin.php" class="btn btn-dark me-lg-3 me-2">
        <i class="fas fa-sign-out-alt me-1"></i> Log Out
    </a>
</div>

        </div>
    </div>
</nav>


<div class="modal fade" id="LoginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="">
                <div class="modal-header ">
                    <h1 class="modal-title fs-5 d-flex align-items-center">
                        <i class="bi bi-person-circle fs-3 me-2"></i>User Login
                    </h1>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control shadow-none">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control shadow-none">
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <button type="submit" class="btn btn-dark shadow-none">Login</button>
                        <a href="javascript:void(0)" class="text-decoration-none text-secondary">Forgot Password?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="RegisterModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="">
                <div class="modal-header ">
                    <h1 class="modal-title fs-5 d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registration
                    </h1>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-md-6 ps-0 md-3 mt-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control shadow-none">
                            </div>

                            <div class="col-md-6 ps-0 mt-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control shadow-none">
                            </div>

                            <div class="col-md-6 ps-0 md-3 mt-3">
                                <label class="form-label">Phone Number</label>
                                <input type="number" class="form-control shadow-none">
                            </div>

                            <div class="col-md-6 ps-0 md-3 mt-3 ">
                                <label class="form-label">Picture</label>
                                <input type="file" class="form-control shadow-none">
                            </div>

                            <div class="col-md-12 ps-0 md-3 mt-3 ">
                                <label class="form-label">Address</label>
                                <textarea class="form-control shadow-none" rows="1"></textarea>
                            </div>

                            <div class="col-md-6 ps-0 md-3 mt-3">
                                <label class="form-label">Pincode</label>
                                <input type="number" class="form-control shadow-none">
                            </div>

                            <div class="col-md-6 ps-0 md-3 mt-3 ">
                                <label class="form-label">Date Of Birth</label>
                                <input type="date" class="form-control shadow-none">
                            </div>

                            <div class="col-md-6 ps-0 md-3 mt-3 ">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none">
                            </div>

                            <div class="col-md-6 ps-0 md-3 mt-3 ">
                                <label class="form-label">Comfirm Password</label>
                                <input type="password" class="form-control shadow-none">
                            </div>

                        </div>
                    </div>
                    <div class="text-center my-1 mt-3">
                        <button type="submit" class="btn btn-dark shadow-none">Register</button>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>