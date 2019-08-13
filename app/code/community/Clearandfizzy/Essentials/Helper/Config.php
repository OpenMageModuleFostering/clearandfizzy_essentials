<?php 
class Clearandfizzy_Essentials_Helper_Config {
		
	/**
	 * Returns the value for System -> Configuration
	 * 							/ Clearandfizzy / 
	 * @return boolean
	 */
	
	public function isCategoryProductTabEnabled() {
		$value = Mage::getStoreConfig('clearandfizzy_essentials/categoryproducttab/isenabled');
		return $value;
	} // end 
	
}
