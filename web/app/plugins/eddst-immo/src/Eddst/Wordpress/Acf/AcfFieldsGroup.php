<?php

namespace Eddst\WordPress\Acf;

use Eddst\Models\HooksInterface;

class AcfFieldsGroup implements HooksInterface
{
    private $fields = [];
    private $title;
    private $location = [];
    private $order;


    public function __construct(Array $fields, String $title, Array $location, Int $order)
    {
        $this->fields = $fields;
        $this->title = $title;
        $this->location = $location;
        $this->order = $order;
    }

    public function hooks()
    {
        add_action('acf/init', [$this, 'addFieldsGroup']);
    }

    public function addFieldsGroup()
    {
        $param = [
            'key' => uniqid('group_'),
            'title' => $this->title,
            'fields' => $this->fields,
            'location' => $this->location,
            'menu_order' => $this->order,
        ];

        acf_add_local_field_group($param);
    }
}