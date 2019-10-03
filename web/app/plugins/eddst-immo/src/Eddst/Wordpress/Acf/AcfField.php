<?php


namespace Eddst\WordPress\Acf;


class AcfField
{
    private $label;
    private $name;
    private $type;

    public function __construct(String $label, String $name, String $type)
    {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
    }

    public function get()
    {
        return [
            'key' => uniqid('field_'),
            'label' => $this->label,
            'name' => $this->name,
            'type' => $this->type
        ];
    }
}