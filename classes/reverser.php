<?php

namespace Kntnt\Archive_Reverser;

class Reverser {

    public function run() {
        add_action('pre_get_posts', [$this, 'reverse_order']);
    }

    public function reverse_order($query) {
        if ($query->is_main_query()) {
            foreach (Plugin::option('taxonomies', []) as $taxonomy) {
                if ('category' == $taxonomy && $query->is_category() || 'post_tag' == $taxonomy && $query->is_tag() || $query->is_tax($taxonomy)) {
                    Plugin::log('Set order to ASC for %s', $taxonomy);
                    $query->set('order', 'ASC');
                    return;
                }
            }
        }
    }

}
