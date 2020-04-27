<?php
/**
 * @package		Jokte.Administrator
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * ***************************************************************************************
 * Warning: Some creations, modifications and improved were made by the Community Juuntos
 * for the latinamerican Project Jokte! CMS
 * Last Modification: 24/08/2016 by Tux Merlin
 * Version: Jokte Rayen 1.4.0
 ***************************************************************************************
 */
// no direct access
defined('_JEXEC') or die;
if (!empty ($this->params->ayudaremota)):    
    ?>
    <?php /* Iframe redimension*/ ?>
    <script type="text/javascript">
        function resize_riframe(){
            document.getElementById("riframe").height=768;// required for mozilla/firefox bugs, value can be "", null, or integer
            document.getElementById('riframe').height=window.frames["riframe"].document.body.scrollHeight;
        }
    </script>

    <?php /* Iframe definition */ ?>
    <iframe width=96%
        id="riframe"
        name="riframe"
        src="<?php echo $this->params->ayudaremota; ?>"
        scrolling="true"
        frameborder="no"
        ALLOWTRANSPARENCY="true"
        sandbox="allow-same-origin allow-scripts allow-popups allow-forms"
        onerror=resize_riframe();>
    </iframe>
<?php endif; ?>