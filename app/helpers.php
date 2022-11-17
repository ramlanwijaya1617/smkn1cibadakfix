<?php

if (!function_exists('get_menu_items_by_registered_slug')) {
    function get_menu_items_by_registered_slug($menu_slug)
    {
        $menu_items = [];

        if (
            ($locations = get_nav_menu_locations()) &&
            isset($locations[$menu_slug])
        ) {
            $menu = get_term($locations[$menu_slug]);

            $menu_items = wp_get_nav_menu_items($menu->term_id);
        }

        return $menu_items;
    }
}
if (!function_exists('get_post_id_by_slug')) {
    function get_post_id_by_slug($slug)
    {
        $post = get_page_by_path($slug);

        if ($post) {
            return $page->ID;
        } else {
            return null;
        }
    }
}

function timeago($date) 
{
    $timestamp = strtotime($date);	
    
    $strTime = array("sec", "min", "hour", "day", "month", "year");
    $length = array("60","60","24","30","12","10");

    $currentTime = time();
    if($currentTime >= $timestamp) {
         $diff     = time()- $timestamp;
         for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
         $diff = $diff / $length[$i];
         }

         $diff = round($diff);
         return $diff . " " . $strTime[$i] . "(s) ago";
    }
}


function mapping_posts($post)
{
    $data = [
        "post_id"     => $post->ID,
        "link"        => get_permalink($post->ID),
        "title"       => html_entity_decode(get_the_title($post->post_title)),
        "slug"        => $post->post_name,
        "date"        => [
            "value"        => get_the_date(null, $post->ID),
            "timeago"   => timeago($post->post_date),
        ],
        "author"      => [
            'author_name' => get_the_author_meta('display_name', $post->post_author),
            'author_uri'  => getUserSlug($post->post_author,get_the_author_meta('nickname')),
        ],
        "excerpt"     => apply_filters("the_excerpt", get_the_excerpt($post->ID) ?? substr(strip_tags($post->post_content), 0, 100)),
        "type"        => get_post_type($post->ID),
    ];
    return $data;
}

function getPostContent($post_id){
    return apply_filters("the_content", get_the_content("", false, $post_id));
}

function getTaxonomyList($post_id, $taxonomy) {
    $tax = wp_get_post_terms($post_id, $taxonomy);
    return implode(", ",array_map(function($item){
        return $item->name;
    },$tax));
}

function getTaxonomy($post_id, $taxonomy) {
    $tax = wp_get_post_terms($post_id, $taxonomy);
    return array_map(function($item) use ($taxonomy){
        return [
            "title" => $item->name,
            "permalink"=> $taxonomy == "category" ? get_category_link($item->term_id) : get_permalink($item->term_id),
        ];
    },$tax);
}

function getUserSlug($user_id, $author_nicename = ''){
    global $wp_rewrite;
 
    $author_id = (int) $user_id;
    $link      = $wp_rewrite->get_author_permastruct();
 
    if ( empty( $link ) ) {
        $file = home_url( '/' );
        $link = $file . '?author=' . $author_id;
    } else {
        if ( '' === $author_nicename ) {
            $user = get_userdata( $author_id );
            if ( ! empty( $user->user_nicename ) ) {
                $author_nicename = $user->user_nicename;
            }
        }
        $link = str_replace( '%author%', $author_nicename, $link );
        $link = home_url( user_trailingslashit( $link ) );
    }
 
    /**
     * Filters the URL to the author's page.
     *
     * @since 2.1.0
     *
     * @param string $link            The URL to the author's page.
     * @param int    $author_id       The author's ID.
     * @param string $author_nicename The author's nice name.
     */
    $link = apply_filters( 'author_link', $link, $author_id, $author_nicename );
 
    return $link;
}


//  'thumbnail'       // Thumbnail (Note: different to Post Thumbnail)
//  'medium'          // Medium resolution
//  'large'           // Large resolution
//  'full'            // Original resolution
//  array( 100, 100)  // Other resolutions
function defautlImageResource($img_size){
    $def_thumbnail=get_template_directory_uri()."/dist/images/default/no-image-150.webp";;
    $def_medium=get_template_directory_uri()."/dist/images/default/no-image-medium.webp";
    $def_large=get_template_directory_uri()."/dist/images/default/no-image.webp";
    $def_full=get_template_directory_uri()."/dist/images/default/no-image.webp";
    $srcimg = $def_full;
    if ($img_size == 'thumbnail') {
       $srcimg = $def_thumbnail;
    }elseif ($img_size == 'medium') {
       $srcimg = $def_medium;
    }
    elseif ($img_size == 'large') {
       $srcimg = $def_large;
    }
    return $srcimg;
}

function getMediaImage($attachment_id,$img_size){
    return wp_get_attachment_image_src( $attachment_id, $img_size, $icon = false ) ? wp_get_attachment_image_src( $attachment_id, $img_size, $icon = false ) : defautlImageResource($img_size);
}

function getPostThumbnail($post_id,$img_size){
    return get_the_post_thumbnail_url($post_id) ? get_the_post_thumbnail_url($post_id,$img_size) : defautlImageResource($img_size);
}

