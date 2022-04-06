<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hoop Hotel Welcome Page</title>
    <link rel="stylesheet" href="css/bootstrapCarousel.css">
    <script src="javascript/jquery.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">

</head>

<body>
<header>
    <?php
    $catalog = array("catalogId" => "1", "catalogName" => "Reservation");
    $catalogs = array($catalog);
    $catalog = array("catalogId" => "2", "catalogName" => "Amenity and Service");
    $catalogs[count($catalogs)] = $catalog;
    ?>
    <div id="leftHeader">
        <div id="logo">
            <a href="index.php">
                <img src="images/logo.png" alt="logo"/>
            </a>
        </div>
        <div>
            <a href="index.php">
                <h1>Hoop Hotel</h1>
            </a>
        </div>
    </div>
    <div id="midHeader">
        <form id="searchBoxForm">
            <label for="searchBox"></label><input id="searchBox" type="text" name="category" value=" Search">
            <input id="searchIcon" type="image" src="images/search_icon.png"
                   alt="search icon">
        </form>
        <div class="dropdown">
            <p class="dropdownSelect">Catalog</p>
            <div class="dropdownContent">
                <?php
                foreach ($catalogs as $catalog) {
                    extract($catalog);
                    echo "<p><a href='catalog.php?catalogId=$catalogId'>$catalogName</a></p>";
                }
                ?>
            </div>
        </div>
    </div>
    <div id="rightHeader">
        <div id="rightTopHeader">
            <p>Phone number: 12345678</p>
        </div>
        <div id="rightBottomHeader">
            <div class="headerButton"><a href="#">About Us</a></div>
            <div class="headerButton"><a href="#">orders</a></div>
            <div class="headerButton"><a href="#">login</a></div>
        </div>
    </div>
</header>

<main>
    <section id="mainTop">
        <section id="mainLeft">
            <div>
                <h1>Welcome to Hoop Hotel!</h1>
            </div>
            <div>
                <p>We offer an immersive living experiences for all basketball lovers!</p>
                <p>Our lobby is a basketball court! <br>We have 4 NBA team themed floors and rooms, <br>basketball icons
                    can
                    be seen everywhere, sports energy <br>stations, sneaker display wall are all available for you to
                    expolore!</p>
            </div>
            <div>
                <p>We also have autographed jerseys from Kobe, <br>Jordan, and Yao Ming for you to pay your respects!
                </p>
            </div>
            <div>
                <p>Book with us TODAY!</p>
            </div>
        </section>
        <section id="mainRight">
            <div id="catalogDisplay">
                <?php
                foreach ($catalogs as $catalog) {
                    extract($catalog);
                    $catalogFileName = str_replace(' ', '_', strtolower($catalogName));
                    echo "
                    <div class='catalog'>
                        <div>
                            <a href='catalog.php?catalogId=$catalogId'><h3>$catalogName</h3></a>
                        </div>
                        <div>
                            <a href='catalog.php?catalogId=$catalogId'><img src='images/$catalogFileName.png' alt=$catalogName></a>
                        </div>
                    </div>
                ";
                }
                ?>
            </div>
        </section>
    </section>
    <section id="mainBottom">
        <h2>Carousel Example</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <img src="images/reservation.png" alt="Los Angeles" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Los Angeles</h3>
                        <p>LA is always so much fun!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="images/reservation.png" alt="Chicago" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Chicago</h3>
                        <p>Thank you, Chicago!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="images/reservation.png" alt="New York" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>New York</h3>
                        <p>We love the Big Apple!</p>
                    </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>
</main>

<footer>
    <div id="footerLeft">
        <a href="#">&copy; Hoop Hotel</a>
        <p>Address: 150 E 42nd St, New York, NY 10017</p>
        <a href="https://www.google.com/maps/place/Mount+Sinai+Corporate+Building/@40.7501604,-73.9751251,19.03z/data=!3m1!5s0x89c25903b85ceed3:0xc177ff1e66ebe1e8!4m13!1m7!3m6!1s0x89c2590397b13805:0x9004db6d1bbfc09d!2sE+41st+St,+New+York,+NY!3b1!8m2!3d40.7501902!4d-73.9751125!3m4!1s0x89c259f03cdffdc7:0x92895f164efbe8e7!8m2!3d40.7506936!4d-73.9753895">Direction</a>
    </div>
    <div id="footerRight">
        <a href="#"><img src="images/facebook_icon.png" alt="Facebook"/></a>
        <a href="#"><img src="images/twitter_icon.png" alt="Twitter"/></a>
        <a href="#"><img src="images/instagram_icon.png" alt="Instagram"/></a>
    </div>
</footer>

</body>
</html>

