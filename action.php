<?php
require_once 'vendor/autoload.php';
if (isset($_GET['page'])) {
    if ($_GET['page'] == 'home') {
        include 'pages/Home.php';
    }
    elseif ($_GET['page']=='about')
    {
        include 'pages/About.php';
    }
}

