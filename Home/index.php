<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Booststrap prova</title>
        <meta charset="utf-8">
        <!--The width=device-width part sets the width of the page to follow the screen-width of the device (which will vary depending on the device). The initial-scale=1 part sets the initial zoom level when the page is first loaded by the browser.-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Bootstrap CDN Bootstrap core CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!--Complete JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link href="index.css" rel="stylesheet">
    </head>

    <body>

    <nav class="navbar navbar-default navbar-static-top"> <!--navbar-fixed-top-->
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">PittyVeg</a>
            </div>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
<!--                    <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a> </li>-->
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">I nostri piatti <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Primi piatti</a></li>
                            <li><a href="#">Secondi piatti</a></li>
                            <li><a href="#">Burgers</a></li>
                            <li><a href="#">Dolci</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Chi siamo</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-map-marker"></span> Dove trovarci</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Contatti</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="User/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
<!--                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>-->
            </div>
        </div>
    </nav>

    <!-----------------------------Carousel-------------------------------->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="#"><img src="img/dessert4.jpg" alt="dessert1"></a>
            </div>

            <div class="item">
                <img src="img/dessert2.jpg" alt="dessert2">
            </div>

            <div class="item">
                <img src="img/dessert3.jpg" alt="dessert3">
            </div>

        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <footer class="footer">
        <div class="container-fluid w3c">
            <a href="http://validator.w3.org/check/referer">
                <img src="http://www.cs.washington.edu/education/courses/cse190m/12sp/homework/4/w3c-html.png" alt="Valid HTML" />
            </a>
            <a href="http://jigsaw.w3.org/css-validator/check/referer">
                <img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS" />
            </a>
        </div>
    </footer>
    </body>

</html>
