<?php

/**
 * Theme helpers.
 */

namespace App;


/**
 * Disable Gutenberg Editor
 */
add_filter('use_block_editor_for_post', '__return_false');
