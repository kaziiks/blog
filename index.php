<?php
include "functions.php";
include "database.php";

$config = require ("config.php");

$db = new Database($config["Database"]);

require "router.php";