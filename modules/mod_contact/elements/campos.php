<?php
defined('_JEXEC') or die('Restricted access');
 
jimport('joomla.form.formfield');

class JFormFieldCampos extends JFormField { 
	
	protected $type = 'Valores';
 
	public function getLabel() {
        
	}
 
	protected function getInput() {
        $doc 	 = JFactory::getDocument();
		$fielset = "function doToogle(campo, ocultar){                        
                        if (campo === 'text' || campo === 'textarea' || campo === 'calendar'){
                            document.getElementById(ocultar).style.display = 'none';
                            document.getElementById(ocultar).value = '';
                        }    					
					}";
		$doc->addScriptDeclaration($fielset);        
        
        $num_field = preg_replace('/\D/', '', $this->name);
        $search = "'jform_params_valor".$num_field."'";   
        $jscrip = "onchange=doToogle(this.value,$search)";        
        $selected = $this->value;
        $name = $this->name;        		
        $options = (array) $this->getOptions();        
        $html = JHtml::_('select.genericlist', $options, $name, "" , 'value', 'text', $selected);        
        return $html;
	}

	protected function getOptions() {
		$assigned 	= array();
		$assigned[] = JHTML::_('select.option', '', '- '. JText::_( 'SELECT_CUSTOM_TYPE' ) .' -' );
		$assigned[] = JHTML::_('select.option', 'text', JText::_( 'CUSTOM_TYPE_TEXT' ) );
		$assigned[] = JHTML::_('select.option', 'textarea', JText::_( 'CUSTOM_TYPE_TEXTAREA' ) );
		$assigned[] = JHTML::_('select.option', 'list', JText::_( 'CUSTOM_TYPE_LIST' ) );
		$assigned[] = JHTML::_('select.option', 'calendar', JText::_( 'CUSTOM_TYPE_CALENDAR' ) );
		$assigned[] = JHTML::_('select.option', 'checkbox', JText::_( 'CUSTOM_TYPE_CHECKBOX' ) );
		$assigned[] = JHTML::_('select.option', 'checkboxes', JText::_( 'CUSTOM_TYPE_CHECKBOXES' ) );
		$assigned[] = JHTML::_('select.option', 'combo', JText::_( 'CUSTOM_TYPE_COMBO' ) );
        $assigned[] = JHTML::_('select.option', 'radio', JText::_( 'CUSTOM_TYPE_COMBO' ) );
		return array_merge($assigned);
	}
}