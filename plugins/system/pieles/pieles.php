<?php
/**
 * @copyright   Copyright (C) 2012 - 2016 Comunidad Juuntos. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

/**
 * Plugin Jokte Pieles 
 * @paquete		Plugin
 * @subpaquete	System
 * @desde		1.4
 */

/* Librerías necesarias */
JLoader::import('joomla.application.component.model');

/* Modelo */
JLoader::register('ContentModelArticle', JPATH_BASE . '/components/com_content/models/article.php');

class plgSystemPieles extends JPlugin
{
    function onAfterInitialise()
    {

        // Application name (site or administrator)
        $app = JFactory::getApplication();
        $name = $app->getName();

        // Parser URL if SEF
        $router  = JApplication::getRouter();
        $url_ins = JURI::getInstance();
        $query   = $router->parse($url_ins);
        $url_par = JURI::getInstance()->buildQuery($query);
        $url     = JString::parse_str($url_par);

        /** Criterio para sobreescribir la vista */
        if ($name == 'site' &&  $url->option == 'com_content' &&  $url->view == 'article')
        {
			// Instancia del modelo
			$items_model 	= JModel::getInstance( 'article', 'ContentModel' );

            // Seteo del artículo de la vista
			$art = $items_model->getItem($url->id);
			// Parámetros
			$params = new JRegistry($art->attribs);

			/** Solo sobreescribo la vista si se ha optado desde los parámetros*/
			if ($params->get('show_piel'))
			{
				JRequest::setVar('view', 'pieljokte');
				JRequest::setVar('layout', 'pieljokte');
				JLoader::register('ContentViewPieljokte', __DIR__ . '/com_content/views/pieljokte/ContentViewPieljokte.php');
			}
        }
    }
}


