<?php
/**
 * @package		Jokte.Site
 * @subpackage	com_content
 * @copyright	Copyleft 2012 - 2014 Comunidad Juuntos.
 * @license		GNU General Public License version 3
 */

defined('_JEXEC') or die('Acceso directo a este archivo no permitido');

jimport('joomla.html.html');

abstract class JHtmlAdjuntos {

    static function lista($id, $text, $params) {

        // TODO: verificar que el artículo tenga archivos adjuntos
        
        // TODO: obtener el objeto con la lista de adjuntos
        
        // TODO: construir la tabla html

        $html = "";
        $html .= "<table>";
        $html .= "  <thead>";
        $html .= "      <tr>";
        $html .= "          <td>Tipo</td>";
        $html .= "          <td>Nombre de Archivo</td>";
        $html .= "          <td>Info</td>";
        $html .= "      </tr>";
        $html .= "  </thead>";
        $html .= "</table>";

        return $html;
    }
}

