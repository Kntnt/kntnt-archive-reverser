<?php

namespace Kntnt\Archive_Reverser;

class Settings extends Abstract_Settings {

    /**
     * Returns the settings menu title.
     */
    protected function menu_title() {
        return __('Archive Reverser', 'kntnt-archive-reverser');
    }

    /**
     * Returns all fields used on the settings page.
     */
    protected function fields() {

        $fields['taxonomies'] = [
            'type'        => 'checkbox group',
            'label'       => __('Ascending taxonomies', 'kntnt-archive-reverser'),
            'description' => __('Check taxonomies for which posts should be ordered ascending (chronological) in archives and other places where the main query is used. Archives etcetera of unchecked taxonomies will use descending (reverse chronological order) as usually.', 'kntnt-archive-reverser'),
            'options'     => wp_list_pluck(get_taxonomies(['public' => true, 'rewrite' => true], 'objects'), 'label'),
        ];

        $fields['submit'] = [
            'type' => 'submit',
        ];

        return $fields;

    }

}
