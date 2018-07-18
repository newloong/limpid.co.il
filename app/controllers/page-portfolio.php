<?php

namespace App;

use WP_Query;
use Sober\Controller\Controller;

class PagePortfolio extends Controller
{
    public function projects()
    {
        $args = array('cat' => 1);
        return new WP_Query($args);
    }

    public function categories()
    {
        $categoryNames = [];
        $categories = get_term_children(1, 'category');

        foreach ($categories as $category) {
            $term = get_term_by('id', $category, 'category');

            $categoryNames[] = array(
                'slug' => str_replace(' ', '-', $term->name),
                'name' => $term->name
            );
        }

        return $categoryNames;
    }
}
