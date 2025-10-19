<?php
/**
 * Remove Tags from Posts
 *
 * Removes the post_tag taxonomy from WordPress posts, hiding tags in admin panel.
 *
 * @author      Torwald45
 * @link        https://github.com/Torwald45/wp-snippet-remove-tags-post
 * @license     GPL-2.0-or-later
 * @version     1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

add_action('init', 'torwald45_rmtags_unregister_taxonomy');

/**
 * Removes tags taxonomy from blog posts
 */
function torwald45_rmtags_unregister_taxonomy() {
    unregister_taxonomy_for_object_type('post_tag', 'post');
}
