<?php

namespace App;

use WP_Query;
use Sober\Controller\Controller;

class PagePortal extends Controller
{
    public function portals()
    {
        return get_field('portal_r');
    }

    public function videos()
    {
        return get_field('videos');
    }

    public function featuredArticles()
    {
        return get_field('featured_articles');
    }

    public function events()
    {
        $args = array('post_type' => 'event', 'posts_per_page' => 6);
        return new WP_Query($args);
    }
}
