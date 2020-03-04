<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/">
    <title>CodeBora_Academy</title>
</head>
<body>
<!-----------------nav bar-------------------------->
<div class="navbar fixed-top">
    <h2 class="logo">CodeBora Academy</h2>
    <input type="checkbox" id="menu-checkbox">
    <label for="menu-checkbox" class="show-menu-btn">
        <!--    <i class="fas fa-ellipsis-h"></i>-->
        <ion-icon name="menu-outline"></ion-icon>
    </label>

    <ul class="menu">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Staff</a>
        <a href="#">Events</a>
        <a href="#">Courses</a>
        <a href="#">Register</a>
        <label for="menu-checkbox" class="hide-menu-btn">
            <!--            <i class="fas fa-times"></i>-->
            <ion-icon name="close-outline"></ion-icon>
        </label>
    </ul>
</div>

<!--<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary">-->
<!--    <a class="navbar-brand" href="#">CodeBora Academy</a>-->
<!--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">-->
<!--        <span class="navbar-toggler-icon"></span>-->
<!--    </button>-->
<!---->
<!--    <div class="collapse navbar-collapse" id="navbarColor02">-->
<!--        <ul class="navbar-nav ml-auto">-->
<!--            <li class="nav-item active">-->
<!--                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#">About</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#">Gallery</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#">Staff</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#">More Info</a>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
<!---->
<!--</nav>-->
<!--carousel-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/Fully-Funded-Scholarships-in-Canada-for-South-Africans.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/aa_gallery_photo15-1132239.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/image-20160712-9264-zt66ib.jpg" class="d-block w-100" alt="...">
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
<!--section-a-->
<section class="section-a">
<!--<div class="container">-->
<!--    <div class="container">-->

    <h1>Featured Courses</h1>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-xl-4">
                <div class="card" style="width: 18rem;">
                    <img src="images/s-l300.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Data Science</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4">
                <div class="card" style="width: 18rem;">
                    <img src="images/s-l300.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Software Development</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xl-4">
                <div class="card" style="width: 18rem;">
                    <img src="images/s-l300.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cloud Computing</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
<!--    </div>-->



<!--</div>-->
</section>

        <section class="section-b">
            <h3>
                Join the Community! <br>
                We are dedicated to providing good coding <br> practices and <br>
                we would like you to be part of the community
            </h3>
            <a href=""><button>Enroll Now</button></a>
<!--            <img src="images/LOGO-Lets-Code.png" alt="">-->
        </section>


<footer>
      <div class="subscribe-form">
        <h2>Get the our latest news delivered to your inbox</h2>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="example@email.com">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Subscribe</button>
            </form>
      </div>
    <br>
    <div class="general-contacts">
    <p>General Enquiries: +254 711 0000000 <br>

        WhatsApp Enquiries:  +254 71 0000000 <br>

        Email: contact@codebora.com <br>

        Admissions Enquiries: +254 712 0000000 <br>

        Location: Bootstrap Plaza, Php Lane. Nairobi</p>
    </div>
    <br>
<!--    social media-->
    <div class="social-media">
        <h5>Visit Us on Social media</h5>

        <a href="#">Facebook</a>
        <a href="#">Twitter</a>
        <a href="#">Instagram</a>
        <a href="#">LinkedIn</a>
    </div><br>

    <h6>CodeBora Academy ISO Certified 2015 &copy</h6> <br>
    <p>Built and maintained by CodeBora Designtech copy</p>

</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>