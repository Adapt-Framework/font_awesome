<?php

/*
 * Prevent direct access
 */
defined('ADAPT_STARTED') or die;
use \frameworks\adapt as adapt;

$adapt = $GLOBALS['adapt'];
$adapt->dom->head->add(new adapt\html_link(array('type' => 'text/css', 'rel' => 'stylesheet', 'href' => '/adapt/frameworks/font_awesome/static/css/font-awesome.min.css')));

?>
