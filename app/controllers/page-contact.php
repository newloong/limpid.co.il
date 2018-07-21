<?php

namespace App;

use WP_Query;
use Sober\Controller\Controller;

class PageContact extends Controller
{
    public function map()
    {
        return get_field('map', 'options');
    }
}
