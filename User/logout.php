<?php
include_once("top.php");
session_destroy();
error_log("session_destroy andata", 0);
session_regenerate_id(TRUE);
error_log("session-regenerate-id andata", 0);
session_start();
error_log("session_start andata", 0);
redirectSimple("index.php");

function redirectSimple($url) {
    header("Location: $url");
    die;
}