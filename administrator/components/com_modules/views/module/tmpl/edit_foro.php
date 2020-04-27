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
?>
<script type="text/javascript">
    function resize_fiframe(){
        document.getElementById("fiframe").height=768 // required for mozilla/firefox bugs, value can be "", null, or integer
        document.getElementById('fiframe').height=document.window.frames["fiframe"].document.body.scrollHeight
    }
</script>
<iframe width=96%
    id="fiframe"
    name="fiframe"    
    src="http://www.juuntos.net.ar/soporte/foro.html"
    scrolling="true"
    frameborder="no"
    ALLOWTRANSPARENCY="true"
    sandbox="allow-same-origin allow-scripts allow-popups allow-forms"
    onload=resize_fiframe();> 
</iframe> 