<?php

use BoxyBird\Inertia\Inertia;

$detail = [
    'id'      => $post->ID,
    'image'  => get_the_post_thumbnail_url($post->ID),
    'content' => apply_filters("the_content",$post->post_content),
    'excerpt' => get_the_excerpt(),
    'title'   => html_entity_decode(get_the_title($post->ID)),
    'date'  => get_the_date(null,$post->ID),
    'categories' => getTaxonomy($post->ID,"category")
];

return Inertia::render('Blog/Single', [
    'post' => $detail
]);





