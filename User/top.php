<!DOCTYPE html>
<html lang="en">
<head>
    <title>Prova finale</title>
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

    <link href="header.css" rel="stylesheet">

</head>
<?php
if (!isset($_SESSION)) {
    session_start();
}

include_once("navBar.php"); ?>
