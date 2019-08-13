<?php 
/**
 * 
 * @author gareth
 *
 */
class Clearandfizzy_Essentials_Model_Observers_Adminhtml_Catalog_Category_Tabs {
	

	/**
	 * 
	 * @param Varien_Event_Observer $observer
	 * @return void|unknown
	 */
	public function actionProductTab(Varien_Event_Observer $observer) {

		// return immediately if this feature is not enabled
		if ( Mage::helper('clearandfizzy_essentials/config')->isCategoryProductTabEnabled() == false) {
			return;
		} // end 
		
		// get tabs
		$tabs = $observer->getTabs();

		// remove the old tab
		$tabs->removeTab('products');
		
		Mage::app()->getLayout()->unsetBlock('category.product.grid');
		
		// add our new one
		$tabs->addTab('products_enhanced', array(
				'label'     => Mage::helper('catalog')->__('Category Products *'),
				            'content'   => Mage::app()->getLayout()->createBlock(
                'clearandfizzy_essentials/adminhtml_catalog_category_tab_product',
                'category.product.grid.clearandfizzy'
            )->toHtml(),
		));
	
		return $tabs;
	} // end 
	
	
} // end 