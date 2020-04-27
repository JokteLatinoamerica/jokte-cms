<?php
defined('_JEXEC') or die('Restricted access');
 
jimport('joomla.form.formfield');
 
// The class name must always be the same as the filename (in camel case)
class JFormFieldValores extends JFormField {
 
	//The field class must know its own type through the variable $type.
	protected $type = 'Valores';
 
	public function getLabel() {
		// code that returns HTML that will be shown as the label
	}
 
	protected function getInput() {
        $doc 	 = JFactory::getDocument();
		$fielset = "function doToogle(name, selector){
                        var campo = document.getElementById(selector);
                        alert(campo);
                        if (campo === 'list' || campo === 'combo' || campo === 'checkboxes'){                            
                            document.getElementById(name).style.display = 'none';
                        }    					
					}";
		$doc->addScriptDeclaration($fielset);        
        $num_field = preg_replace('/\D/', '', $this->name);
        dump($num_field);
        $search = "'jformparamscampocustom".$num_field."'";   
        $jscrip = "onload=doToogle(this.name,$search)";
        $html = '<input name="' . $this->name . '" id="'.$this->name.'" value="' . $this->value . '" '. $jscrip .' />';
        return $html;		
	}	
}