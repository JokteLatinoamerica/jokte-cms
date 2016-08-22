<?php
/**
 * @package		Joomla.Administrator
 * @subpackage	com_admin
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */
// no direct access
defined('_JEXEC') or die;
jimport( 'joomla.html.html.tabs' );
jimport( 'joomla.html.html.sliders' );

$document = JFactory::getDocument();
$renderer = $document->loadRenderer('modules');
$position = 'cpanel';
$optionm  = array('style' => 'sliders');

$options = array(
    'onActive' => 'function(title, description){
        description.setStyle("display", "block");
        title.addClass("open").removeClass("closed");
    }',
    'onBackground' => 'function(title, description){
        description.setStyle("display", "none");
        title.addClass("closed").removeClass("open");
    }',
    'startOffset' => 0,
    'useCookie' => true,
);

?>
<div id="content-box">
    <div id="element-box-disc">
        <div class="m" >
            <div class="adminform">
                <div class="cpanel-left">
                    <?php echo JHtml::_('tabs.start', 'tab_group_id', $options); ?>

                    <?php echo JHtml::_('tabs.panel', JText::_('ACERCA_DE_JOKTE'), 'panel_1_id'); ?>
                    <p><strong>Jokte! CMS</strong> es un <a href="https://es.wikipedia.org/wiki/Bifurcaci%C3%B3n_(desarrollo_de_software)" target="_blank">fork o bifurcación</a> del CMS <strong>Joomla!™</strong> surgido por una iniciativa de la <a href="http://www.juuntos.org" target="_blank"><strong>Comunidad Juuntos</strong> </a>quienes, ejerciendo la licencia GNU/GPL que posee este último, decidieron relanzar un nuevo proyecto enfocado en <em>América Latina y el Caribe</em>.</p>
                    <p><strong>Jokte! CMS</strong> es un <em>"<strong>C</strong>ontenedor <strong>M</strong>ultimedia <strong>S</strong>istematizado</em>", un software de entorno que permite desarrollar páginas web para la internet o para intranets de un modo rápido, amigable y seguro.</p>

                    <?php echo JHtml::_('tabs.panel', JText::_('ACERCA_DE_LICENCIAS'), 'panel_2_id'); ?>
                    <p>Los desarrolladores de Jokte! y la Comunidad Juuntos no tienen vinculación contractual de afiliación ni relación alguna con el Proyecto Joomla!™ y con Open Source Matters.</p>
                    <p>La palabra Joomla! y el logo de Joomla!™ tienen licencias restringidas (Copyright) por Open Source Matters.</p>
                    <p>Jokte! es Software Libre distribuido bajo la Licencia GNU/GPL y el logo de Jokte! tiene licencia Creative Commons.</p>

                    <?php echo JHtml::_('tabs.panel', JText::_('ACERCA_DE_MANIFIESTO'), 'panel_3_id'); ?>
                    <p style="text-align: justify;">Somos una Comunidad de personas de Latinoamérica, usuarios del sistema Joomla!® y del software libre, que nos hemos reunido a nivel continental, para intercambiar conocimiento técnico y desarrollar herramientas que permitan mejorar nuestras propias capacidades, respetando nuestras lenguas originarias y fortaleciendo nuestra identidad cultural en toda su diversidad, para avanzar en procesos de apropiación social de las tecnologías, en beneficio de nuestras comunidades y redes.</p>
                    <p style="text-align: justify;">Juuntos convoca a personas y comunidades que deseen organizarse con libertad plena para apoyar iniciativas y movimientos relacionados con el Software y la Cultura Libres y en especial la creación de aplicaciones desarrolladas a partir de la Plataforma Joomla!®.</p>
                    <p style="text-align: justify;">Una comunidad de desarrolladores que buscan alcanzar un manejo experto de la Tecnología Web, en base al intercambio de conocimiento de dominio público, el trabajo colaborativo y democrático, y a la creación, uso y adaptación de herramientas de Software Libre.</p>
                    <p style="text-align: justify;">Afirmamos que la Tecnología Web manejada a nivel avanzado o experto contribuye al mejoramiento de las condiciones de vida de quienes la utilicen. De ahí nuestro interés de apoyar los procesos de transferencia tecnológica y el intercambio de conocimientos implícitos en ella, en la necesidad de crear o adaptar herramientas para objetivos específicos, particularmente aquellas que permitan su libre utilización, modificación y distribución en proyectos personales, sociales y comerciales.</p>
                    <p style="text-align: justify;">El <em>intercambio de conocimiento</em> lo propiciamos subscribiendo al “espíritu del Copyleft”, que promueve la libre circulación de saberes y técnicas en el Ciberespacio, y el fortalecimiento del Dominio Público, como patrimonio de la humanidad.</p>
                    <p style="text-align: justify;">El <em>trabajo colaborativo y democrático, lo implementamos basándonos en las dinámicas colectivas, que han permitido la producción de grandes iniciativas como Wikipedia o el sistema GNU/Linux; en la inteligencia colectiva, y en el reconocimiento social del usuario en el legado creativo de su trabajo.</em></p>
                    <p style="text-align: justify;">La <em>creación, uso y adaptación de herramientas de software libre</em> la enmarcamos en el derecho de utilización de los sistemas de software, aplicaciones y herramientas que habiéndose licenciado bajo la Licencia Pública General (GNU/GPL) y de otras licencias Copyleft, forman parte del acervo de conocimiento tecnológico de libre uso, con el que hoy contamos en el mundo.</p>
                    <p style="text-align: justify;">Juuntos, al ser fundada por usuarios <em>expertos en el sistema </em>Joomla!®, tendrá iniciativas que estarán muy relacionadas con dicha plataforma. Esto no agota ni restringe las herramientas que utilizaremos, pero define la base desde donde realizaremos nuestros principales proyectos.</p>
                    <p style="text-align: justify;">En ese sentido, una de nuestras principales tareas será intercambiar conocimiento en torno a Joomla!®, brindando soporte a los usuarios de Latinoamérica, para facilitar su proceso de apropiación y manejo avanzado de este software líder en el mundo.</p>
                    <p style="text-align: justify;">Joomla!® en tanto código, está licenciado bajo la <em>GNU/GPL </em>versión 2, lo que implica que es posible utilizar el sistema libremente, así como editar, ampliar y compartir las <em>modificaciones</em> efectuadas en éste.</p>
                    <p style="text-align: justify;">Joomla!®, en su dimensión corporativa, al tener su “marca” o imagen (nombre y logotipo) un licenciamiento Copyright restringe su uso libre, obligando a cumplir normativas no siempre compatibles con nuestro objetivo central de apoyar el emprendimiento de iniciativas para el mejoramiento de las condiciones de vida de las personas.</p>
                    <p style="text-align: justify;">Por este motivo, y en base al derecho que nos concede la <em>GNU/GPL</em>, hemos comenzado el desarrollo de la plataforma “Jokte!", que se basa y es completamente compatible con Joomla!®, pero con una imagen corporativa licenciada bajo Copyleft. Una nueva “marca” que cualquier desarrollador podrá utilizar libremente en sus proyectos personales, comunitarios y comerciales.</p>
                    <p style="text-align: justify;">Juuntos se compromete, ante los usuarios de “Jokte!” y de toda la comunidad, a dar soporte, mantener actualizado su versionado y realizar los desarrollos específicos que sean requeridos por la propia comunidad de usuarios.</p>
                    <p style="text-align: justify;">Para hacer más tangible nuestro compromiso con la Comunidad, hemos redactado un “Pacto Social” en el que definimos las bases y conceptos que guiarán el desarrollo de nuestra Comunidad.</p>
                    <p style="text-align: justify;">Invitamos a desarrolladores y usuarios de América Latina y el mundo a integrarse a la comunidad Juuntos.org</p>

                    <?php echo JHtml::_('tabs.panel', JText::_('ACERCA_DE_PACTO'), 'panel_4_id'); ?>
                    <p style="text-align: justify;">El grupo Fundador y Coordinador de la Comunidad Juuntos.org, ha creado este contrato social, que es una declaración de intenciones y un conjunto de principios que suscribimos y nos comprometemos a respetar ante la comunidad latinoamericana y mundial.</p>
                    <p style="text-align: justify;"><strong> </strong></p>
                    <p style="text-align: justify;"><span style="font-size: 12pt;"><strong>Contrato Social entre Personas, Colectivos y Comunidades participantes en Juuntos.</strong></span></p>
                    <p style="text-align: justify;"> </p>
                    <p style="text-align: justify;">1) La Comunidad Juuntos, suscribe los conceptos descritos en el documento denominado “Manifiesto de Juuntos” y se compromete a respetar y hacer valer sus plantemientos, mientras exísta nuestra Comunidad.</p>
                    <p style="text-align: justify;"> </p>
                    <p style="text-align: justify;">2) Juuntos orientará todo su esfuerzo organizativo a la creación, reproducción y difusión del conocimiento de Dominio Público, en el ámbito preferente de la tecnología web, por lo que toda su producción de código o software, herramientas para la gestión de la información, herramientas para el aprendizaje, etc. será de libre uso, reproducción y distribución.</p>
                    <p style="text-align: justify;"> </p>
                    <p style="text-align: justify;">3) Juuntos implementará un sistema democrático participativo, para la toma de decisiones de las principales líneas de trabajo de la Comunidad, considerando que cada participante tiene derecho a voz y voto, que podrá expresar en sistemas de votaciones electrónicas que con la tecnología actual podemos contar.</p>
                    <p style="text-align: justify;"> </p>
                    <p style="text-align: justify;">4) Juuntos se hace partícipe de las directrices principales de la Free Software Foundation, en particular de aquellos aspectos relacionados con el avance conceptual de las licencias GPL y el espíritu Copyleft.</p>
                    <p style="text-align: justify;"> </p>
                    <p style="text-align: justify;">5) Juuntos inicialmente actuará en el territorio de latinoamérica y el caribe, apoyarando a personas y organizaciones que tengan una relación deficitaria con la tecnología web y que a la vez se propongan similares objetivos a los de nuestra Comunidad.</p>
                    <p style="text-align: justify;"> </p>
                    <p style="text-align: justify;">6) Juuntos promoverá y realizará acciones, cuando se requiera, en función de mantener el Ciberespacio libre, esto es, como un espacio público ideal para la libre circulación de saberes y técnicas, y el intercambio de conocimiento de Dominio Público.<br /> <br />7) Juuntos asume conceptos e ideas fundamentales que forman parte del espíritu que le da origen, los cuales son:</p>
                    <p style="text-align: justify;"><ul><li>Libre Acceso al conocimiento</li><li>Comercio Justo</li><li>Respeto irrestricto a los Derechos Humanos</li></ul></p>
                    <p style="text-align: justify;"> </p>
                    <p style="text-align: justify;"><span style="font-size: 8pt;">NOTA: Participar en Juuntos implica aceptar y suscribir este Contrato Social, por cada uno de sus miembros.</span></p>
                    <?php echo JHtml::_('tabs.end'); ?>
                </div>
                <div class="cpanel-right">
                    <?php echo JHtml::_('sliders.start', 'position-icon', array('useCookie' => 1));?>
                    <?php echo $renderer->render($position, $optionm, null); ?>
                    <?php echo JHtml::_('sliders.end');?>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
</div>