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
    function resize_iframe(){
        document.getElementById("_iframe").height=768 // required for mozilla/firefox bugs, value can be "", null, or integer
        document.getElementById('_iframe').height=window.frames["_iframe"].document.body.scrollHeight
    }
</script>

<iframe width=96%
        id="_iframe"
        name="_iframe"
        src="http://www.juuntos.net.ar/soporte/foro.html"
        scrolling="true"
        frameborder="no"
        ALLOWTRANSPARENCY="true"
        onload=resize_iframe();>

</iframe>