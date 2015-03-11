<?php
/**
 * @package		Jokte.Site
 * @subpackage	com_content
 * @copyright	Copyleft 2012 - 2014 Comunidad Juuntos.
 * @license		GNU General Public License version 3
 */

defined('_JEXEC') or die('Acceso directo a este archivo no permitido');

jimport('joomla.html.html');
jimport('joomla.filesystem.mime');

abstract class JHtmlAdjuntos {

    static function lista($id, $text, $params) {

        $db = JFactory::getDbo();

        $query = $db->getQuery(true);

        $columnas = array('propietario_id', 'nombre_archivo','hash','ruta', 'mime_type');
        $query
            ->select($db->quoteName($columnas))
            ->from($db->quoteName('#__adjuntos'))
            ->where($db->quoteName('propietario_id') . ' = ' . $id);

        $db->setQuery($query);
        $adjuntos = $db->loadObjectList();

        // verificar que el artículo tenga archivos adjuntos
        if (empty($adjuntos)) return;

        // construir la tabla html

        $html = "";
        $html .= "<table>";
        $html .= "  <thead>";
        $html .= "      <tr>";
        $html .= "          <td>Tipo</td>";
        $html .= "          <td>Nombre de Archivo</td>";
        $html .= "          <td>Info</td>";
        $html .= "      </tr>";
        $html .= "  </thead>";
        $html .= "  <tbody>";

        foreach($adjuntos as $adjunto) {

        $html .= "      <tr>";
        $html .= "          <td>";
        $html .= "              <img src='".JMime::checkIcon($adjunto->mime_type)."'";
        $html .= "                   alt='".$adjunto->mime_type."'";
        $html .= "                   title='".$adjunto->mime_type."'/>";
        $html .= "          </td>";
        $html .= "          <td>";
        $html .= "              <a href='".self::obtenerRutaArchivo($adjunto->hash, $adjunto->nombre_archivo)."'";
        $html .= "                 title='".$adjunto->nombre_archivo."'>";
        $html .= "                  ".$adjunto->nombre_archivo;
        $html .= "              </a>";
        $html .= "          </td>";
        $html .= "          <td>";
        $html .= "              <a href='#'>";
        $html .= "                  <img src='".JURI::root()."media/adjuntos/file-info-icon.png'";
        $html .= "                       title='Información'/>";
        $html .= "              </a>";
        $html .= "          </td>";
        $html .= "      </tr>";

        }

        $html .= "  </tbody>";
        $html .= "</table>";

        return $html;
    }

    private function obtenerRutaArchivo($hash, $nombre) {

        $dir = "/uploads";

        $src = $dir . DS . $hash . '-' . $nombre;

        return $src;
    }
}

