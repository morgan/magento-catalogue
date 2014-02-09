<?php

require_once "app/code/core/Mage/Catalog/controllers/CategoryController.php";

/**
 * Catalogue index controller for providing layered navigation for the root category
 * 
 * @package		Catalogue
 * @author		Micheal Morgan <micheal@morgan.ly>
 * @copyright	(c) 2014 Micheal Morgan
 * @license		MIT
 */
class MagnifyStudio_Catalogue_IndexController extends Mage_Catalog_CategoryController
{
	/**
	 * indexAction
	 * 
	 * @access	public
	 * @return	void
	 */
	public function indexAction()
	{
		$this->viewAction();
	}

	/**
	 * Overload and initiate using root category. Note: Under the Admin Panel for the root 
	 * category, in "Display Settings" -> "Is Anchor" needs to be set to "Yes"
	 * 
	 * @static
	 * @access	public
	 * @param	mixed	string|NULL
	 * @param	array
	 * @return	Storage_Connection
	 */
	protected function _initCatagory()
	{
		Mage::dispatchEvent('catalog_controller_category_init_before', array('controller_action' => $this));

		$categoryId = Mage::app()->getStore()->getRootCategoryId();

		$category = Mage::getModel('catalog/category')
			->setStoreId(Mage::app()->getStore()->getId())
			->load($categoryId);

		Mage::getSingleton('catalog/session')->setLastVisitedCategoryId($category->getId());
		Mage::register('current_category', $category);
		Mage::register('current_entity_key', $category->getPath());

		try {
			Mage::dispatchEvent(
				'catalog_controller_category_init_after',
				array(
					'category' => $category,
					'controller_action' => $this
				)
			);
		} catch (Mage_Core_Exception $e) {
			Mage::logException($e);
			return false;
		}

		return $category;
	}
}
