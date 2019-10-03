<?php

namespace Eddst\WordPress\Acf;

use Eddst\Models\HooksInterface;

class AcfFieldsGroup implements HooksInterface
{
    private $fields = [];
    private $title;
    private $location = [];


    public function __construct(Array $fields, String $title, Array $location)
    {
        $this->fields = $fields;
        $this->title = $title;
        $this->location = $location;
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
        ];

        acf_add_local_field_group($param);
    }
}