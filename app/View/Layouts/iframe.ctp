<?php
/**
 *
* PHP 5
*
* CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
* Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
*
* Licensed under The MIT License
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
* @link          http://cakephp.org CakePHP(tm) Project
* @package       Cake.View.Layouts
* @since         CakePHP(tm) v 0.10.0.1076
* @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
*/
?>
<?php 
echo $this->Html->css('bootstrap');
echo $this->Html->css('main');
echo $this->Html->script('jquery-2.1.0.min');
echo $this->Html->script('misp' . $jsVersion);
echo $content_for_layout; ?>