<?php
/*
 * Plugin Name: eddst-immo
 * Plugin URI: https://github.com/Eddaoust
 * Description: Plugin to manage the property for the real estate agency
 * Version: 1.0
 * Author: Ed Daoust
 */
require_once '/Users/edmonddaoust/Documents/Web_dev/WORDPRESS/eddst-immo/web/app/plugins/eddst-immo/vendor/autoload.php';

function acfRule(String $param, String $operator, String $value) {
    return [
        [
            [
                'param' => $param,
                'operator' => $operator,
                'value' => $value,
            ]
        ]
    ];
}

$field = new \Eddst\WordPress\Acf\AcfField('Test', 'test', \Eddst\WordPress\Acf\AcfHelper::TYPE_TEXT);
$fieldsGroup = new \Eddst\WordPress\Acf\AcfFieldsGroup([$field->get()], 'Test Group', acfRule('page', '==', '17'));

$eddst = new \Eddst\Eddst([$fieldsGroup]);
$eddst->execute();

