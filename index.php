<!DOCTYPE html>
<html>

<head>

    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">WebTech Assignment</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Project Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About our developers</a>
                </li>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>

                <li class="nav-item">

                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/a1.jpg" alt="Nujabes" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/a2.jpg" alt="Neotic" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/a3.jpg" alt="BLUME" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <section class="my-5">
        <div class="py-5">
            <h1 class="text-center">Project Description</h1>
        </div>
        <div class="container-fluidss">
            <div class="row">
                <div class="col-lg-6" col-md-6 col-12>
                    <img src="images/a5.jpg" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-6" col-md-6 col-12>
                    <p class="py-3">This website was created by Amitesh , Ishan , Tanay and R Gopikrishnan for the purpose of webtech project submission. All of us have given a lot of blood and sweat into this website. At this point if you are reading , I shall let you know that my text bring will you nowhere of interest so it's better to stop reading right now if you do not want to get bored. However if you chose to get bored , I'll request you to simply read this again and again </p>
                    <a href="about.php" class="btn btn-success"> Want to know more about the developers?</a>
                </div>
                <div class="col-lg-6" col-md-6 col-12>

                </div>
            </div>
            <div class="w-50 m-auto">
                <form action="userdata.php" method="post">
                    <div class="py-5">
                        <h2 class="text-center"> Let us know more </h2>
                        <label> FullName</label>
                        <input type="text" name="user" autocomplete="off" class="form-control">
                    </div>
                    <div class="py-5">
                        <label> Email</label>
                        <input type="text" name="email" autocomplete="off" class="form-control">
                    </div>
                    <div class="py-5">
                        <label> Mobile</label>
                        <input type="text" name="mobile" autocomplete="off" class="form-control">
                    </div>
                    <div class="py-5">
                        <label> Comments</label>
                        <textarea class="form-control">
            </textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/validator.min.js"></script>

</html>