<?php
include_once("top.php");
include ("common.php");
session_destroy();
session_regenerate_id(TRUE);
session_start();
redirectSimple("index.php");
