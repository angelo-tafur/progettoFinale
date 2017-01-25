<?php
if (!isset($_SESSION["name"])) {
    error_log("Non è stata imposta la SESSION['name']", 0);?>
<!-----------------Navigation Bar with login------------->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><em>PittyVeg</em></a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <!--<li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a> </li>-->
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
<!--                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
                <li><button type="button" class="btn btn-danger navbar-btn" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</button></li>
                <!--                <li><a href="#" style="padding: 0 10px;" ><button class="btn btn-primary navbar-btn"><span class="glyphicon glyphicon-user"></span> Register</button></a></li>-->
<!--                <li><button type="button" class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Register</button></li>-->

            </ul>

        </div>
    </div>
</nav>

    <?php
} else {
    error_log("È stata impostata la SESSION['name']". $_SESSION["name"], 0);?>
    <!-----------------Navigation Bar with login------------->
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><em>PittyVeg</em></a>
            </div>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <!--<li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a> </li>-->
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
                    <!--                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
                    <li><button type="button" class="btn btn-success navbar-btn" data-toggle="modal" data-target="#logoutModal"><span class="glyphicon glyphicon-log-out"></span> Logout</button></li>
                </ul>

            </div>
        </div>
    </nav>
<?php
} ?>
