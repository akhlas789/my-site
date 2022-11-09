<?php

namespace App\classes;

class About
{
    public function  index()
    {
        header("location: action.php?page=about");
    }
}