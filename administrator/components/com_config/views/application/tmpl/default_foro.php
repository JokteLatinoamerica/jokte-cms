<?php
/**
 * @package		Jokte.Administrator
 * @subpackage	Sistema de Ayuda
 * @copyright	Comunidad Juuntos 2017. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
// no direct access
defined('_JEXEC') or die;
if (isset($this->configParams->get('ayudas')->a_foro)):
    ?>
    <script type="text/javascript">
        function resize_iframef(){
            document.getElementById("_iframef").height=768 // required for mozilla/firefox bugs, value can be "", null, or integer
            document.getElementById('_iframef').height=window.frames["_iframef"].document.body.scrollHeight
        }
    </script>
    <?php
    $attribs = array();
    $attribs['width'] ="96%";
    $attribs['id'] = "_iframef";
    $attribs['scrolling'] = "true";
    $attribs['frameborder'] = "no";
    $attribs['ALLOWTRANSPARENCY'] = "true";
    $attribs['onload'] = "resize_iframef();";
    echo JHtml::iframe('http://www.juuntos.net.ar/soporte/foro.html', '_iframef', $attribs );
else:
    echo JText::_('COM_CONFIG_NO_PERMITIDA');
endif;

