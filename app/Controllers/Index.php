<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class Index extends Controller
{
    public function threeLastArticles()
    {
        $posts = new WP_Query(array(
            'posts_per_page' => 3
        ));

        //var_dump($posts->posts);
        return $posts->posts;
    }

    public static function getAuthor($authorId): string
    {
        return("author ID : " . $authorId);
    }
}
