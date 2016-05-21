<?php

namespace Roots\Sage\Titles;

/**
 * Page titles
 */
function title() {
  if (is_home()) {
    if (get_option('page_for_posts', true)) {
      return get_the_title(get_option('page_for_posts', true));
    } else {
      return __('Latest Posts', 'sage');
    }
  } elseif (is_archive()) {
    return get_the_archive_title();
  } elseif (is_search()) {
    return sprintf(__('Search Results for %s', 'sage'), get_search_query());
  } elseif (is_404()) {
    return __('Not Found', 'sage');
  } else {
    return get_the_title();
  }
}

function color() {
  global $post;

  $parent = $post->post_parent;

  function get_color_by_post($post) {
    $meta = $meta_color = get_post_meta($post->ID, $field['color'], true);
    return $meta['color'][0];
  }

  if($parent) {

  } else {
    return get_color_by_post($post);
  }
}