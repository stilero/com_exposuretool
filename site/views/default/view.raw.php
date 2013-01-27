<?php
/**
 * Description of Exposure_Tool
 *
 * @version  1.0
 * @author Daniel Eliasson (joomla@stilero.com)
 * @copyright  (C) 2013-jan-27 Stilero Webdesign (www.stilero.com)
 * @category Components
 * @license	GPLv2
 * 
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * HTML View class for the HelloWorld Component
 */
class ExposuretoolViewDefault extends JView{
    function display($tpl = null) {
        /*JToolBarHelper::title(JText::_('Exposure_Tool View.html', 'generic.png'));
        JToolBarHelper::deleteList();
        JToolBarHelper::editListX();
        JToolBarHelper::addNewX();
        $model =& $this->getModel();
        $view =& $model->getView();
        $this->assignRef('view.htmls', $view);*/
        JHTML::script('http://code.jquery.com/jquery-latest.js');

        JHTML::script(EXPTOOL_ASSETS.'js/noconflict.js');
        JHTML::script(EXPTOOL_ASSETS.'js/bootstrap.min.js');
        JHtml::stylesheet(EXPTOOL_ASSETS.'css/bootstrap.min.css');
        parent::display($tpl);
    }
}
