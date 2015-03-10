<?php
/**
 * @version 0.1.0
 * @package Jokte.Plugin
 * @copyright CopyLeft Comparte Igual. Comunidad Juuntos Latinoamérica.
 * @license GNU/GPL v3.0
 */

defined('_JEXEC') or die('Acceso directo a este archivo restringido');

jimport('joomla.plugin.plugin');

class plgContentJokteadjuntos extends JPlugin {

    function onContentPrepare ($context, &$article, &$params, $offset=0) {

        $text = &$article;

        var_dump($text);
    }

}
