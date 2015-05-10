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
jimport('joomla.filesystem.file');

abstract class JHtmlAdjuntos {

    static function contar($id) {
        $db = JFactory::getDbo();

        $query = $db->getQuery(true);

        $columnas = array('propietario_id');
        $query
            ->select($db->quoteName($columnas))
            ->from($db->quoteName('#__adjuntos'))
            ->where($db->quoteName('propietario_id') . ' = ' . $id);

        $db->setQuery($query);
        $adjuntos = $db->loadObjectList();

        $count = count($adjuntos);

        return $count;
    }

    static function listar($id, $text, $params) {

        $doc = JFactory::getDocument();
        $doc->addScriptDeclaration('
        function mostrarInfo(el, event) {
            event.preventDefault();
            var el = $$(el);

            var file = el.get("data-file");
            var hash = el.get("data-hash");
            var size = el.get("data-size");
            var mime = el.get("data-mime");

            info = new Element("div");
            info.appendHTML("<h2>Información de Archivo</h2>");
            info.appendHTML("<hr />");
            info.appendHTML("<h3>Nombre:</h3>");
            info.appendHTML("<p>"+el.get("data-file")+"</p>");
            info.appendHTML("<h3>Hash:</h3>");
            info.appendHTML("<p>"+el.get("data-hash")+"</p>");
            info.appendHTML("<h3>Tamaño:</h3>");
            info.appendHTML("<p>"+el.get("data-size")+"</p>");
            info.appendHTML("<h3>Tipo Mime:</h3>");
            info.appendHTML("<p>"+el.get("data-mime")+"</p>");
            info.appendHTML("<h3>Icono:</h3>");
            info.appendHTML("<img src="+el.get("data-mime-icon")+" />");

            SqueezeBox.resize({x:320, y:450});
            SqueezeBox.setContent("adopt", info);
        }'
        );

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

        $mimeIcon = JMime::checkIcon($adjunto->mime_type);
        $rutaArchivo = self::obtenerRutaArchivo($adjunto->hash, $adjunto->nombre_archivo);
        $fileSize = JFile::getSize(self::obtenerRutaArchivo($adjunto->hash, $adjunto->nombre_archivo, true));

        $html .= "      <tr>";
        $html .= "          <td>";
        $html .= "              <img src='".$mimeIcon."'";
        $html .= "                   alt='".$adjunto->mime_type."'";
        $html .= "                   title='".$adjunto->mime_type."'/>";
        $html .= "          </td>";
        $html .= "          <td>";
        $html .= "              <a href='".$rutaArchivo."'";
        $html .= "                 title='".$adjunto->nombre_archivo."'>";
        $html .= "                  ".$adjunto->nombre_archivo;
        $html .= "              </a>";
        $html .= "          </td>";
        $html .= "          <td>";
        $html .= "              <a href='javascript:void(0)' class='modal' onClick='mostrarInfo(this, event)' data-file='".$adjunto->nombre_archivo."' data-mime-icon='".$mimeIcon."' data-hash='".$adjunto->hash."' data-size='".$fileSize."' data-mime='".$adjunto->mime_type."'>";
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

    private function obtenerRutaArchivo($hash, $nombre, $absolute=false) {
        $dir = "/uploads";
        $src = $dir . DS . $hash . '-' . $nombre;

        if ($absolute) {
            $src = JPATH_ROOT . $src;
        }

        return $src;
    }
}

