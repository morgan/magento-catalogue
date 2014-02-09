<?php
/**
 * Catalogue Manufacturers
 * 
 * @package		Catalogue
 * @author		Micheal Morgan <micheal@morgan.ly>
 * @copyright	(c) 2014 Micheal Morgan
 * @license		MIT
 */
class MagnifyStudio_Catalogue_ManufacturersController extends Mage_Core_Controller_Front_Action
{
	/**
	 * indexAction
	 * 
	 * @access	public
	 * @return	void
	 */
	public function indexAction()
	{
		$this->loadLayout();
		
		$this->renderLayout();
	}
}
