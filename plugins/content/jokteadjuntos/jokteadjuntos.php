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

        JHTML::_('behavior.modal');

        // Realiza algunas validaciones de cocnfiguración antes de
        // continuar con la ejecución para traer los archivos arjuntos
        // TODO: Buscar una forma más elegante para estas validaciones
        if($context != 'com_content.article') return;
        if(!$params->get('show_attachments', '1')) return;

        // Verifica que el artículo tenga archivos adjuntos
        $totalAdjuntos = JHtml::_('adjuntos.contar', $article->id);
        if ($totalAdjuntos == 0) return;

        // Incluye los archivos adjuntos dentro del texto del artículo
        $article->text .= "<h3>Archivos adjuntos</h3>";        
        $article->text .= JHtml::_('adjuntos.listar', $article->id, $article->text, $params);
    }
}