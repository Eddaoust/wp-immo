<?php


namespace Eddst\WordPress\Acf;


abstract class AcfHelper
{
    const TYPE_TEXT = 'text';
    const TYPE_TEXTAREA = 'textarea';
    const TYPE_NUMBER = 'number';
    const TYPE_RANGE = 'range';
    const TYPE_EMAIL = 'email';
    const TYPE_URL = 'url';
    const TYPE_PASSWORD = 'password';
    const TYPE_IMAGE = 'image';
    const TYPE_WYSIWYG = 'wysiwyg';
    const TYPE_OEMBED = 'oembed';
    const TYPE_BOOL = 'true_false';
}