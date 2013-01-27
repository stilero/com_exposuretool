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

// No direct access to this file
defined('_JEXEC') or die('Restricted access');?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap 101 Template</title>
        <!-- Bootstrap -->
        <link href="<?php print EXPTOOL_ASSETS; ?>css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="<?php print EXPTOOL_ASSETS; ?>js/noconflict.js"></script>
        <script src="<?php print EXPTOOL_ASSETS; ?>js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Exposure Tool</h1>
            <p class="lead">
                Lorem ipsum
            </p>
            <h3>Exposure: +2 EV</h3>
            <form>
                <div class="input-append">
                    <label>Aperture</label>
                    <select class="span2" placeholder=".span1">
                         <option>Select</option>
                         <option>f/5.6</option>
                     </select>
                      <a class="btn"><i class="icon-chevron-up"></i>Up</a>
                      <a class="btn" ><i class="icon-chevron-down"></i>Down</a>
                </div>
                <div class="input-append">
                    <label>ISO</label>
                    <select class="span2" placeholder=".span1">
                         <option>Select ISO</option>
                         <option>100</option>
                     </select>
                      <a class="btn"><i class="icon-chevron-up"></i>Up</a>
                      <a class="btn" ><i class="icon-chevron-down"></i>Down</a>
                </div>
                <div class="input-append">
                    <label>Shutter</label>
                    <select class="span2" placeholder=".span1">
                         <option>Select</option>
                         <option>1/100s</option>
                     </select>
                      <a class="btn"><i class="icon-chevron-up"></i>Up</a>
                      <a class="btn" ><i class="icon-chevron-down"></i>Down</a>
                </div>
                <div class="input-append">
                    <label>Flash Effect</label>
                    <select class="span2" placeholder=".span1">
                         <option>Select</option>
                         <option>1/1</option>
                     </select>
                      <a class="btn"><i class="icon-chevron-up"></i>Up</a>
                      <a class="btn" ><i class="icon-chevron-down"></i>Down</a>
                </div>
                <div>
                    <button class="btn btn-large btn-success" type="button"><i class="icon-play icon-white"></i> Start Timer</button>
                </div>
                <div>
                    <button class="btn btn-large btn-danger" type="button"><i class="icon-stop icon-white"></i> Stop Timer</button>
                </div>
            </form>
        </div>
        
    </body>
</html>