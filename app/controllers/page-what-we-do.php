<?php

namespace App;

use WP_Query;
use Sober\Controller\Controller;

class PageWhatWeDo extends Controller
{
    public function services()
    {
        $args = array('post_type' => 'cncpt', 'posts_per_page' => -1);
        return new WP_Query($args);
    }
}
