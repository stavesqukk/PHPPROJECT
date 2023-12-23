<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">JUSTMUSIC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="review.php">Review</a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="cc1.jpg" alt="THE COOL COLLECTION" width="1100" height="500">
        </div>
        <div class="carousel-item">
            <img src="cc2.jpg"" alt="NEW FASHION" width="1100" height="500">
        </div>
        <div class="carousel-item">
            <img src="cc3.jpg" alt="STEP INTO SAVINGS" width="1100" height="500">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="R.jpg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h2 class="display-4">VIBE UP WIH US </h2>
            <p class="py-3">
                JUSTMUSIC is a new established company which has selled almost 50,000 products in just 3 years. Its a growing company
                who believes that new generation needs comfort with silence to enjoy and vibe up with their songs. So here we present you
                our products which are highly recommended to all the music lovers out there. So let's not waste time and order our products
                right now.
            </p>
            <a href="about.php" class="btn btn-success">LEARN MORE ABOUT US</a>
        </div>
    </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Products</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="CC.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">GAMING HEADSET BIG EARPHONES</h4>
                        <p class="card-text">NPR 2,592.26</p>
                        <a href="buy.php" class="btn btn-primary">BUY NOW</a>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="MAH.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">P9 Wire Less Stereo Bluetooth Headphone With Mic</h4>
                        <p class="card-text">NPR 2,500</p>
                        <a href="buy1.php" class="btn btn-primary">BUY NOW</a>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="RRR.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">P9 WIRELESS HEADPHONE</h4>
                        <p class="card-text">NPR 1,450</p>
                        <a href="buy2.php" class="btn btn-primary">BUY NOW</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Products</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="m.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="BH.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="OP.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="CB.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="RT.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="CCC.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="MB.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="FG.jpg" class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="SSS.jpg" class="img-fluid pb-4">
            </div>
        </div>
    </div>
</section>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">CONTACT US</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="name" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Email ID</label>
                <input type="text" name="email" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Mobile-Number</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Comment</label>
                <textarea class="form-control" name="comment"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>
<footer>
    <p class="p-3 bg-dark text-white text-center">@JUSTMUSICPRODUCTION</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
