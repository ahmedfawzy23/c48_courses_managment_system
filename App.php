<?php

use Classes\Course;
use Classes\Database\Mysql;
use Classes\Enrollment;
use Classes\Helpers\Request;
use Classes\Helpers\Session;
use Classes\Student;

require_once "includes/config.php";

require_once "vendor/autoload.php";


$mysql = new Mysql();

$student = new Student($mysql);
$enrollment = new Enrollment($mysql);
$course = new Course($mysql);
$session = new Session();
$request = new Request();
