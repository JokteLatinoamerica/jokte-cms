<?php
/**
 * @package		Jokte.Administrator
 * @subpackage	Sistema de Ayuda Yachay
 * @copyright	Copyright (C) 2012 - 2017 Comunidad Juuntos. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
// no direct access
defined('_JEXEC') or die;

// Reviso si existe la configuración
if (isset($this->configParams->get('ayudas')->a_video)) {

    // Reviso si está permitida
    if ($this->configParams->get('ayudas')->a_video) {

        // Reviso si existe la configuración
        if (isset($this->configParams->get('ayudas')->url_video)) {
            $file = $this->configParams->get('ayudas')->url_video;

            // Reviso si existe
            if ($fp = curl_init($file)) { ?>
                <!-- Método que no me agrada para ajustar tamaño del iframe vía javascript. Hay que hacer un script en Mootools -->
                <script type="text/javascript">
                    function resize_iframev() {
                        document.getElementById("_iframev").height = 768 // required for mozilla/firefox bugs, value can be "", null, or integer
                        document.getElementById('_iframev').height = window.frames["_iframev"].document.body.scrollHeight
                    }
                </script>
                <?php
                $attribs = array();
                $attribs['width'] = "96%";
                $attribs['id'] = "_iframev";
                $attribs['scrolling'] = "true";
                $attribs['frameborder'] = "no";
                $attribs['ALLOWTRANSPARENCY'] = "true";
                $attribs['onload'] = "resize_iframev();";
                echo JHtml::iframe($file, '_iframev', $attribs);
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