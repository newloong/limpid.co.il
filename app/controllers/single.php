<?php

namespace App;

use WP_Query;
use Sober\Controller\Controller;

class Single extends Controller
{
    public function services()
    {
        $args = array('post_type' => 'cncpt', 'posts_per_page' => -1);
        return new WP_Query($args);
    }

    public function testimonials()
    {
        $args = array('post_type' => 'testimonial', 'posts_per_page' => -1);
        return new WP_Query($args);
    }

    public function relatedPosts()
    {
        $args = array('cat' => 15, 'posts_per_page' => 4, 'post__not_in' => array(get_the_ID()));
        return new WP_Query($args);
    }
}
