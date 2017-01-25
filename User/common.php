<?php
function redirectSimple($url) {
    header("Location: $url");
    die;
}