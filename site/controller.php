<?php
/**
 * Controller Controller
 *
 * @version  1.0
 * @author Daniel Eliasson (joomla@stilero.com)
 * @copyright  (C) 2013-jan-27 Stilero Webdesign (www.stilero.com)
 * @category Components
 * @subpackage Exposure_Tool
 * @license	GPLv2
 * 
 */

// no direct access
defined('_JEXEC') or die('Restricted access'); 

// import joomla controller library
jimport('joomla.application.component.controller');

class ExposuretoolController extends JController{
    
    public static $modelName = 'default';
    public static $viewName = 'default';
    
    public function display(){
        $view =& $this->getView( self::$viewName, 'raw' );
        //$model =& $this->getModel(  self::$modelName );
        //$view->setModel( $model, true );
        $view->display();
    }
}
