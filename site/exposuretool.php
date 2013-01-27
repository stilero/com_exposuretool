<?php
/**
 * Description of Exposure_Tool
 *
 * @version  1.0
 * @author Daniel Eliasson (joomla@stilero.com)
 * @copyright  (C) 2013-jan-27 Stilero Webdesign (www.stilero.com)
 * @category Components
 * @license	GPLv2
 */

// no direct access
defined('_JEXEC') or die('Restricted access'); 
define('EXPTOOL_ASSETS', JURI::root().'media/exposuretool/assets/');

JHTML::addIncludePath(JPATH_COMPONENT.DS.'helpers');
require_once JPATH_COMPONENT.DS.'controller.php';
$controller = JRequest::getWord('view');

if ( $controller) { 
    $path = JPATH_COMPONENT.DS.'controllers'.DS.$controller.'.php';
    if ( file_exists($path)) {
        require_once $path;
    } else {       
        $controller = '';	   
    }
}
$classname    = 'ExposuretoolController'.$controller;
$controller   = new $classname();

// Perform the Request task
$controller->execute(JRequest::getCmd('task', 'display'));
 
// Redirect if set by the controller
$controller->redirect();