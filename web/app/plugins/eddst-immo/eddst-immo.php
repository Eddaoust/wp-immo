<?php
/*
 * Plugin Name: eddst-immo
 * Plugin URI: https://github.com/Eddaoust
 * Description: Plugin to manage the property for the real estate agency
 * Version: 1.0
 * Author: Ed Daoust
 */
require_once '/Users/edmonddaoust/Documents/Web_dev/WORDPRESS/eddst-immo/web/app/plugins/eddst-immo/vendor/autoload.php';

use Eddst\WordPress\Acf\AcfFieldsGroup;
use Eddst\WordPress\Acf\AcfField;
use Eddst\WordPress\Acf\AcfHelper;

// Init new post type
$property = new \Eddst\Wordpress\PostType\Property;

// Accueil: Init ACF fields for homepage
$homeHeader = new AcfFieldsGroup([
    (new AcfField('Title', 'home_header_title', AcfHelper::TYPE_TEXT))->get(),
    (new AcfField('Subtitle', 'home_header_subtitle', AcfHelper::TYPE_TEXT))->get(),
    (new AcfField('Logo', 'logo', AcfHelper::TYPE_IMAGE))->get(),
],'Accueil Header', acfRule('page', '==', get_page_by_path('accueil')->ID), 0);

$homeBox1 = new AcfFieldsGroup([
    (new AcfField('Box Logo 1', 'box_logo_1', AcfHelper::TYPE_IMAGE))->get(),
    (new AcfField('Box Title 1', 'box_title_1', AcfHelper::TYPE_TEXT))->get(),
    (new AcfField('Box Content 1', 'box_content_1', AcfHelper::TYPE_TEXTAREA))->get(),
], 'Accueil Box 1', acfRule('page', '==', get_page_by_path('accueil')->ID), 1);

$homeBox2 = new AcfFieldsGroup([
    (new AcfField('Box Logo 2', 'box_logo_2', AcfHelper::TYPE_IMAGE))->get(),
    (new AcfField('Box Title 2', 'box_title_2', AcfHelper::TYPE_TEXT))->get(),
    (new AcfField('Box Content 2', 'box_content_2', AcfHelper::TYPE_TEXTAREA))->get(),
], 'Accueil Box 2', acfRule('page', '==', get_page_by_path('accueil')->ID), 2);

$homeBox3 = new AcfFieldsGroup([
    (new AcfField('Box Logo 3', 'box_logo_3', AcfHelper::TYPE_IMAGE))->get(),
    (new AcfField('Box Title 3', 'box_title_3', AcfHelper::TYPE_TEXT))->get(),
    (new AcfField('Box Content 3', 'box_content_3', AcfHelper::TYPE_TEXTAREA))->get(),
], 'Accueil Box 3', acfRule('page', '==', get_page_by_path('accueil')->ID), 3);

$homeBox4 = new AcfFieldsGroup([
    (new AcfField('Box Logo 4', 'box_logo_4', AcfHelper::TYPE_IMAGE))->get(),
    (new AcfField('Box Title 4', 'box_title_4', AcfHelper::TYPE_TEXT))->get(),
    (new AcfField('Box Content 4', 'box_content_4', AcfHelper::TYPE_TEXTAREA))->get(),
], 'Accueil Box 4', acfRule('page', '==', get_page_by_path('accueil')->ID), 4);

$homeMainBox = new AcfFieldsGroup([
    (new AcfField('Main Box Image', 'main_box_image', AcfHelper::TYPE_IMAGE))->get(),
    (new AcfField('Main Box Subtitle', 'main_box_subtitle', AcfHelper::TYPE_TEXT))->get(),
    (new AcfField('Main Box Title', 'main_box_title', AcfHelper::TYPE_TEXT))->get(),
    (new AcfField('Main Box Content', 'main_box_content', AcfHelper::TYPE_TEXTAREA))->get(),
], 'Accueil Main Box', acfRule('page', '==', get_page_by_path('accueil')->ID), 5);

$homeAgentDetails = new AcfFieldsGroup([
    (new AcfField('Agent Subtitle', 'agent_subtitle', AcfHelper::TYPE_TEXT))->get(),
    (new AcfField('Agent Job', 'agent_job', AcfHelper::TYPE_TEXT))->get(),
    (new AcfField('Agent Name', 'agent_name', AcfHelper::TYPE_TEXT))->get(),
    (new AcfField('Agent Description', 'agent_description', AcfHelper::TYPE_TEXTAREA))->get(),
    (new AcfField('Agent Email', 'agent_email', AcfHelper::TYPE_EMAIL))->get(),
    (new AcfField('Agent Phone', 'agent_phone', AcfHelper::TYPE_TEXT))->get(),
    (new AcfField('Agent Image', 'agent_image', AcfHelper::TYPE_IMAGE))->get(),
], 'Accueil Agent Details', acfRule('page', '==', get_page_by_path('accueil')->ID), 6);

$homeFooter = new AcfFieldsGroup([
    (new AcfField('Agency Description', 'agency_description', AcfHelper::TYPE_TEXTAREA))->get(),
    (new AcfField('Agency Mail', 'agency_mail', AcfHelper::TYPE_EMAIL))->get(),
    (new AcfField('Agency Address', 'agency_address', AcfHelper::TYPE_TEXTAREA))->get(),
    (new AcfField('Agency Phone', 'agency_phone', AcfHelper::TYPE_TEXT))->get(),
    (new AcfField('Agency Facebook', 'agency_facebook', AcfHelper::TYPE_URL))->get(),
    (new AcfField('Agency Instagram', 'agency_instagram', AcfHelper::TYPE_URL))->get(),
    (new AcfField('Agency Twitter', 'agency_twitter', AcfHelper::TYPE_URL))->get(),
], 'Accueil Footer', acfRule('page', '==', get_page_by_path('accueil')->ID), 7);

// Property: Init fields for
$propertyFields = new AcfFieldsGroup([
    (new AcfField('Titre', 'property_title', AcfHelper::TYPE_TEXT))->get(),
    (new AcfField('Sous-Titre', 'property_subtitle', AcfHelper::TYPE_TEXT))->get(),
    (new AcfField('Description', 'property_description', AcfHelper::TYPE_TEXTAREA))->get(),
    (new AcfField('Image 1', 'property_image_1', AcfHelper::TYPE_IMAGE))->get(),
    (new AcfField('Image 2', 'property_image_2', AcfHelper::TYPE_IMAGE))->get(),
    (new AcfField('Image 3', 'property_image_3', AcfHelper::TYPE_IMAGE))->get(),
    (new AcfField('Image 4', 'property_image_4', AcfHelper::TYPE_IMAGE))->get(),
    (new AcfField('Chambres', 'property_rooms', AcfHelper::TYPE_NUMBER))->get(),
    (new AcfField('Emplacements parking', 'property_parking', AcfHelper::TYPE_NUMBER))->get(),
    (new AcfField('Nombre d\'étages', 'property_step', AcfHelper::TYPE_NUMBER))->get(),
    (new AcfField('Bureaux', 'property_office', AcfHelper::TYPE_NUMBER))->get(),
    (new AcfField('Cave', 'property_basement', AcfHelper::TYPE_NUMBER))->get(),
    (new AcfField('Grenier', 'property_roof', AcfHelper::TYPE_NUMBER))->get(),
    (new AcfField('Raccordement eau', 'property_trash', AcfHelper::TYPE_BOOL))->get(),
    (new AcfField('Raccordement égout', 'property_trasheee', AcfHelper::TYPE_BOOL))->get(),
], 'Infos Propriété', acfRule('post_type', '==', 'property'), 0);


$eddst = new \Eddst\Eddst([
    $property,
    $homeHeader, $homeBox1, $homeBox2, $homeBox3, $homeBox4, $homeMainBox, $homeAgentDetails, $homeFooter,
    $propertyFields
]);
$eddst->execute();


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

