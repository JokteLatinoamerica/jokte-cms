<?php 
/**
* @version		1.0.0
* @package		Jokte.element
* @copyright	Copyleft 2012 - 2014 Comunidad Juuntos, Proyecto Jokte!
* @license		GNU/GPL 3.0
*/
defined('_JEXEC') or die('Restricted access');

jimport('joomla.form.formfield');

class JFormFieldSeparador extends JFormField
{
	/**
	 * Element name
	 * @access	protected
	 * @var		string
	 */
	protected $type 	= 'Separador';	
	
	/**
	 * Clear space label 
	 */
	public function getLabel() {
		$label = '';
		return $label; 
	}
	
	/**
	 * Otuput News Elements
	*/
	function getInput()
	{
		$class    	= $this->element['class'];
		$value		= $this->element['value'];
		$title		= $this->element['default'];
		$color		= $this->element['fielname'];
		$logo		= $this->element['logo'];
		$leyend		= $this->element['leyend'];
				
		// Ruta para skins
		$rute 		= '../media/separadores/';
		$urlback	= $rute.'back-tit-'.$color.'.png';
        
		// Ruta logo 
		$urllogo	= '../images/'.$logo;
		
		// Generate HTML output
		$html   ='<p style="clear:both;"></p>';
		switch ($class->data($class))
		{
			case "textdesc":
				$html .='<div class="separador-main"><p class="separador-textdesc">'.JText::_($value).'</p></div>';
				break;
			case "title":
				$html .='<div class="separador-main"><p class="separador-title" style="background: url("'.$urlback.'")repeat-x;">'.JText::_($title).'</p></div>';
				break;
			case "fulltext":
                if ($logo) {
                    $html .='<div class="separador-main" style="height:100px">';
                    $html .='<img src="'.$urllogo.'" with="100px" style="float:left" alt="'.JText::_($title).'" title="'.JText::_($title).'" />';
                    $html .='<p class="separador-full-title">.: '.JText::_($title).' :.</p>';
                    $html .='<p class="separador-full-textdesc">'.JText::_($value).'</p></div>';                
                }else{
                    $html .='<div class="separador-main"><p class="separador-full-title">.: '.JText::_($title).' :.</p>';
                    $html .='<p class="separador-full-textdesc">'.JText::_($value).'</p></div>';
                }
				break;
			case "about":
				$html .='<div class="separador-main"><p class="separador-about">';
				$html .='<img src="'.$urllogo.'" alt="extension-logo" title="Jokte! Extension" class="separador-img" />';
				$html .= JText::_($leyend);
				$html .='</p></div>';
		}		
		return $html;
	}
	
}
?>