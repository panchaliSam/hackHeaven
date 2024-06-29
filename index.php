<?php
// Start session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HackHeaven</title>
    <link type="image/jpg" sizes="24x24" rel="icon" href="./Assets/icons/HackHeaven Logos/Icon PNG.png">

    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css"
    rel="stylesheet"
    />

    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"
    ></script>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
        rel="stylesheet"
    />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- MDB CSS -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css"
        rel="stylesheet"
    />
    
    <!-- CSS styles -->
     <link rel="stylesheet" href="./Assets/css/scrollBar.css">

    <!--Js-->
    <script src="./Assets/js/navbar.js"></script>

</head>

<body class="custom-scrollbar">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #1D1D1B;">
        <!-- Container wrapper -->
        <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="https://mdbgo.com/">
            <img
            src="./Assets/icons/HackHeaven Logos/Dark BG PNG.png"
            height="64"
            alt="HackHeaven Logo"
            loading="lazy"
            style="margin-top: -1px;"
            />
        </a>

        <!-- Toggle button -->
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarButtonsExample"
            aria-controls="navbarButtonsExample"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="./index.php" style="color: white;">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                style="color: white;"
                >
                Explore
                </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Popular</a></li>
            <li><a class="dropdown-item" href="#">New Releases</a></li>
            <li><a class="dropdown-item" href="#">Trending</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdown2"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            style="color: white;"
            >
            Community
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <li><a class="dropdown-item" href="#">Forums</a></li>
            <li><a class="dropdown-item" href="#">Groups</a></li>
            <li><a class="dropdown-item" href="#">Events</a></li>
            </ul>
        </li>
        </ul>
        <!-- Left links -->

        <div class="d-flex align-items-center">
        <button type="button" class="btn btn-success px-3 me-2" style="width: 100px;" data-bs-toggle="modal" data-bs-target="#signInModal">
            Sign In
        </button>
        <button type="button" class="btn btn-success me-3" style="width: 100px;" data-bs-toggle="modal" data-bs-target="#signUpModal">
            Sign Up
        </button>
        </div>
        </div>
        <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>

    <!-- Sign In Modal -->
    <div class="modal fade" id="signInModal" tabindex="-1" aria-labelledby="signInModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="signInModalLabel">Sign In</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="./Assets/Pages/user-dashboard.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" required>
                </div>
                <center><button type="submit" class="btn btn-primary" style="background-color: green;">Sign In</button></center>
            </form>
          </div>
        </div>
      </div>
    </div>

        <!-- Sign Up Modal -->
     <div class="modal fade" id="signUpModal" tabindex="-1" aria-labelledby="signUpModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signUpModalLabel">Sign Up</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="./Assets/Pages/user-dashboard.php" method="POST">
                <div class="mb-3">
                    <label for="signUpFirstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="signUpFirstName">
                </div>
                <div class="mb-3">
                    <label for="signUpLastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="signUpLastName">
                </div>
                <div class="mb-3">
                    <label for="signUpEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="signUpEmail" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="signUpPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="signUpPassword">
                </div>
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="termsCheck">
                    <label class="form-check-label" for="termsCheck">I agree to the terms and conditions</label>
                </div>
                <center><button type="submit" class="btn btn-primary" style="background-color: green;">Sign Up</button></center>
            </form>
            </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"
    ></script>
    <!-- MDB JS -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"
    ></script>

    <!--Image Carsouel-->
    <div id="carouselExampleControls" class="carousel slide d-flex justify-content-center align-items-center" data-ride="carousel" style="width: 80%; margin: 0 auto;">
        <div class="carousel-inner" style="width: 100%; height: 100%;">
            <div class="carousel-item active">
                <img src="./Assets/Images/Home1.jpg" class="d-block w-100" alt="HomeImage" style="max-width: 100%; max-height: 600px; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="./Assets/Images/Home2.jpg" class="d-block w-100" alt="HomeImage" style="max-width: 100%; max-height: 600px; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="./Assets/Images/Home3.jpg" class="d-block w-100" alt="HomeImage" style="max-width: 100%; max-height: 600px; object-fit: cover;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <script>
        // Auto carousel change
        $('.carousel').carousel({
            interval: 5000 // Adjust the interval (in milliseconds) as needed
        });
    </script>

    <hr>

    <div class="about-section">
        <h1><center>Who We Are ?</center></h1>

        <div class="about-para-section" style="margin: 0 20px;">
            <p>At HackHeaven, we are passionate about fostering innovation and collaboration within Sri Lanka's vibrant tech community. Our platform serves as a comprehensive hub, meticulously curating and showcasing all the hackathons across Sri Lanka. Whether you're a seasoned developer or an aspiring tech enthusiast, HackHeaven connects you with exciting opportunities to participate, compete, and innovate.</p>

            <p>Explore our platform to discover upcoming hackathons, learn about their themes, and seamlessly apply to showcase your skills. Join us in shaping the future of technology through creativity, teamwork, and relentless innovation. Welcome to HackHeaven, where every idea has the potential to change the world.</p>
        </div>

    </div>

    <!--Images-->
    <div class="card-container" style="overflow-x: auto; white-space: nowrap; margin: 0 5px;">
        <div class="card" style="display: inline-block; width: 18rem; margin-right: 10px; background-color:black;">
            <img class="card-img-top" src="./Assets/Images/Hackathon.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title" style="color: white;">HackX</h5>
                <a href="#" class="btn btn-primary" style="background-color: green;">View</a>
            </div>
        </div>
        
        <div class="card" style="display: inline-block; width: 18rem; margin-right: 10px; background-color:black;">
            <img class="card-img-top" src="./Assets/Images/Hackathon.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title" style="color: white;">CodeFest</h5>
                <a href="#" class="btn btn-primary" style="background-color: green;">View</a>
            </div>
        </div>
        <div class="card" style="display: inline-block; width: 18rem; margin-right: 10px; background-color:black;">
            <img class="card-img-top" src="./Assets/Images/Hackathon.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title" style="color: white;">CodeFest</h5>
                <a href="#" class="btn btn-primary" style="background-color: green;">View</a>
            </div>
        </div>
        
        <div class="card" style="display: inline-block; width: 18rem; margin-right: 10px; background-color:black;">
            <img class="card-img-top" src="./Assets/Images/Hackathon.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title" style="color: white;">CodeFest</h5>
                <a href="#" class="btn btn-primary" style="background-color: green;">View</a>
            </div>
        </div>

        <div class="card" style="display: inline-block; width: 18rem; margin-right: 10px; background-color:black;">
            <img class="card-img-top" src="./Assets/Images/Hackathon.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title" style="color: white;">CodeFest</h5>
                <a href="#" class="btn btn-primary" style="background-color: green;">View</a>
            </div>
        </div>
    </div>

    <br><br>

    <hr>

    <!--Footer-->
    <footer class="bg-body-tertiary text-center" >
        <!-- Grid container -->
        <div class="container p-4 pb-0" >
            <!-- Section: Social media -->
            <section class="mb-4">
            <!-- Facebook -->
            <a
            data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #3b5998;"
                href="#!"
                role="button"
                ><i class="fab fa-facebook-f"></i
            ></a>

            <!-- Twitter -->
            <a
                data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #55acee;"
                href="#!"
                role="button"
                ><i class="fab fa-twitter"></i
            ></a>

            <!-- Google -->
            <a
                data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #dd4b39;"
                href="#!"
                role="button"
                ><i class="fab fa-google"></i
            ></a>

            <!-- Instagram -->
            <a
                data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #ac2bac;"
                href="#!"
                role="button"
                ><i class="fab fa-instagram"></i
            ></a>

            <!-- Linkedin -->
            <a
                data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #0082ca;"
                href="#!"
                role="button"
                ><i class="fab fa-linkedin-in"></i
            ></a>
            <!-- Github -->
            <a
                data-mdb-ripple-init
                class="btn text-white btn-floating m-1"
                style="background-color: #333333;"
                href="#!"
                role="button"
                ><i class="fab fa-github"></i
            ></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #1D1D1B; color:white;">
            © 2024 Copyright : 
            <img src="./Assets/icons/HackHeaven Logos/Name White.png" height="15px">
        </div>
        <!-- Copyright -->
    </footer>

</body>
</html>
