<?php
/**
 * @package		Jokte.Administrator
 * @subpackage	Sistema de Ayuda
 * @copyright	Copyright (C) 2012 - 2017 Comunidad Juuntos. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
// no direct access
defined('_JEXEC') or die;

// Reviso si existe la configuración
if (isset($this->configParams->get('ayudas')->a_pdf)) {

    // Reviso si está permitida
    if ($this->configParams->get('ayudas')->a_pdf) {

        // Reviso si existe la configuración
        if (isset($this->configParams->get('ayudas')->url_pdf)) {
            $file = JURI::root().$this->configParams->get('ayudas')->url_pdf;

            // Reviso si existe el archivo
            if ($fp = curl_init($file)) {
                $url = "http://docs.google.com/viewer?url=". $file . "&embedded=true"; ?>
                <!-- Método que no me agrada para ajustar tamaño del iframe vía javascript. Hay que hacer un script en Mootools -->
                <script type="text/javascript">
                    function resize_iframep() {
                        document.getElementById("_iframep").height = 768 // required for mozilla/firefox bugs, value can be "", null, or integer
                        document.getElementById('_iframep').height = window.frames["_iframep"].document.body.scrollHeight
                    }
                </script>
                <?php
                $attribs = array();
                $attribs['width'] = "96%";
                $attribs['id'] = "_iframep";
                $attribs['scrolling'] = "true";
                $attribs['frameborder'] = "no";
                $attribs['ALLOWTRANSPARENCY'] = "true";
                $attribs['onload'] = "resize_iframep();";
                echo JHtml::iframe($url, '_iframep', $attribs);
            } else {
                echo JText::_('COM_CONFIG_NO_EXISTE_RECURSO');
            }
        } else {
            echo JText::_('COM_CONFIG_NO_INDICADAURL');
        }
    } else {
        echo JText::_('COM_CONFIG_NO_PERMITIDA');
    }
} else {
    echo JText::_('COM_CONFIG_NO_CONFIGURADA');
}


