<?php
/**
 * @version 0.1.0
 * @package Jokte.Plugin
 * @copyright CopyLeft Comparte Igual. Comunidad Juuntos Latinoamérica.
 * @license GNU/GPL v3.0
 */

defined('_JEXEC') or die('Acceso directo a este archivo restringido');

jimport('joomla.plugin.plugin');
jimport('joomla.html.html');

class plgContentJokteadjuntos extends JPlugin {

    public function onContentBeforeDisplay ($context, &$article, &$params, $offset = 0 ) {

        // Realiza algunas validaciones antes de continuar con la
        // ejecución para traer los archivos arjuntos
        // TODO: Buscar una forma más elegante para estas validaciones
        if(!$params->get('enabled', 1)) return;
        if($context != 'com_content.article') return;
        if(!$params->get('show_attachments')) return;

        $article->text .= JHtml::_('adjuntos.lista', $article->id, $article->text, $params);
    }

}
