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
    <link type="image/jpg" sizes="24x24" rel="icon" href="./Assets/icons/logo.jpg">

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

    <!--Js-->
    <script src="./Assets/js/navbar.js"></script>
    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #D9D9D9;">
        <!-- Container wrapper -->
        <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="https://mdbgo.com/">
            <img
            src="./Assets/icons/logo.jpg"
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
                <a class="nav-link" href="#" style="color: black;">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                style="color: black;"
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
            style="color: black;"
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
        <button type="button" class="btn btn-success px-3 me-2" style="width: 100px;">
            Sign In
        </button>
        <button type="button" class="btn btn-success me-3" style="width: 100px;">
            Sign Up
        </button>
        </div>
        </div>
        <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>

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
        <div class="card" style="display: inline-block; width: 18rem; margin-right: 10px;">
            <img class="card-img-top" src="./Assets/Images/Hackathon.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title 1</h5>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        
        <div class="card" style="display: inline-block; width: 18rem; margin-right: 10px;">
            <img class="card-img-top" src="./Assets/Images/Hackathon.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title 2</h5>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="display: inline-block; width: 18rem; margin-right: 10px;">
            <img class="card-img-top" src="./Assets/Images/Hackathon.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title 1</h5>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        
        <div class="card" style="display: inline-block; width: 18rem; margin-right: 10px;">
            <img class="card-img-top" src="./Assets/Images/Hackathon.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title 2</h5>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card" style="display: inline-block; width: 18rem; margin-right: 10px;">
            <img class="card-img-top" src="./Assets/Images/Hackathon.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title 2</h5>
                <a href="#" class="btn btn-primary">Go somewhere</a>
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
        <div class="text-center p-3" style="background-color: #D9D9D9;">
            © 2024 Copyright:
            <a class="text-body" href="https://mdbootstrap.com/">HackHeaven</a>
        </div>
        <!-- Copyright -->
    </footer>

</body>
</html>
