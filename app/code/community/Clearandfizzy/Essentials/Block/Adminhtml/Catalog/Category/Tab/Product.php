<?php
class Clearandfizzy_Essentials_Block_Adminhtml_Catalog_Category_Tab_Product 
						extends Mage_Adminhtml_Block_Catalog_Category_Tab_Product {

	
	public function __construct()
	{
		parent::__construct();
		$this->setId('catalog_category_products');
		$this->setDefaultSort('entity_id');
		$this->setUseAjax(false);
	}	
	
	public function getRowClickCallback() {
		return false;
	}
		
	public function _prepareColumns() {
		parent::_prepareColumns();
		
		$this->addColumn('action',
				array(
						'header'    => Mage::helper('catalog')->__('Action'),
						'width'     => '50px',
						'type'      => 'action',
						'getter'     => 'getId',
						'actions'   => array(
								array(
										'caption' => Mage::helper('catalog')->__('Edit'),
										'url'     => array(
												'base'=>'*/catalog_product/edit',
												'params'=>array('store'=>$this->getRequest()->getParam('store'))
										),
										'field'   => 'id'
								)
						),
						'filter'    => false,
						'sortable'  => false,
						'index'     => 'stores',
				));
		
		
	} // end 
	
	
	
}