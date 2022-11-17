<?php

use BoxyBird\Inertia\Inertia;

$title = get_the_title(get_the_ID());

// Applies all registered 
// hooks, shortcodes, filters, etc...
$content = apply_filters(
    'the_content',
    get_the_content(null, false, get_the_ID())
);

$pageData = $wp_query;
$posts = mapping_posts($pageData);

return Inertia::render('PageIndex', [
    'title'   => $title,
    'content' => $content,
    'testdata' => $pageData,
    'posts' => $posts
]);
