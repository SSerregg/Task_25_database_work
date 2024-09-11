<?php
session_start();


require_once '..'.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'configWays.php';
require_once AUTORIZATION;
$start = Autorization::autoriz();
require_once VIEW.'view.php';