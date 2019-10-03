<?php

namespace Eddst\Wordpress\PostType;

use Eddst\Models\HooksInterface;

class Property implements HooksInterface
{
    public function hooks()
    {
        add_action('init', [$this, 'createPropertyType']);
    }

    public function createPropertyType()
    {
        $labels = [
            'name'               => 'Propriétés',
            'singular_name'      => 'Propriété',
            'menu_name'          => 'Propriétés',
            'name_admin_bar'     => 'Propriétés',
            'view'               => 'Voire une propriété',
            'all_items'          => 'Toutes les propriétés',
            'search_items'       => 'Chercher propriétés',
            'not_found'          => 'Propriété non trouvé',
            'not_found_in_trash' => 'Propriété non trouvé'
        ];

        $args = [
            'labels'             => $labels,
            'public'             => true,
            'query_var'          => true,
            'rewrite'            => true,
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false
        ];

        register_post_type('property', $args);
    }
}