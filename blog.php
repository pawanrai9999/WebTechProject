<?php
/*
 * Author: Pawan
 * Date: Oct 21, 2018
 * File Name: about.php
 * Lisence: MIT
 */
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Geek</title>
        <link rel="icon" href="assets/media/img/geek.png">
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">

        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/mainscript.js"></script>
    </head>
    <body>
        <div class="container-fluid">

            <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary">
                <span class="navbar-brand">
                    <img class="icon-image" src="assets/media/img/geek.svg">
                </span>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerA1" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerA1">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="about.php">About US<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0" method="get" action="search.php">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>

            <div class="jumbotron jumbotron-fluid top-margin text-center">

                <div class="container justify-content-center">
                    <img class="img-fluid float-left header-image" src="assets/media/img/developers.svg">
                    <h1 class="display-4">Welcome to Geek!</h1>
                    <p class="lead">Place for Web Development</p>
                </div>

                <form class="justify-content-center align-items-center form-inline" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                    <div class="input-group mb-2 mr-sm-2">
                        <label for="headerSubscribeEmail" class="pr-2">Get the latest feed </label>

                        <input name="subscriberEmail" type="text" class="form-control" id="headerSubscribeEmail" type="email" placeholder="Email">

                    </div>

                    <button type="submit" class="btn btn-info mb-2">Subscribe</button>
                </form>
                
            
            </div>
            <div class="row justify-content-center align-items-center ">
                <div class="col text-center">
                    <h2>Story of HTML</h2>
                    <hr>
                    <img class="img-fluid" src="assets/media/img/html5.png">
                    <p>This is the very interesting story of how HTML became most used markup....</p>
                    <button class="btn btn-dark">Read More</button>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col text-center">
                    <h2>Dynamic Pages of PHP</h2>
                    <hr>
                    <img class="img-fluid" src="assets/media/img/php.png">
                    <p>From Facebook to Yahoo! almost everyone has used php in their life time ....</p>
                    <button class="btn btn-dark">Read More</button>
                </div>
            </div>

        </div>
        <div class="container w-75 text-center justify-content-center align-items-center">
                    
                     </div>
    </body>
</html>
