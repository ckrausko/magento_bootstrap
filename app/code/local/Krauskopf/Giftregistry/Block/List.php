<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 3/12/2016
 * Time: 12:23 PM
 */

class Krauskopf_Giftregistry_Block_List extends Mage_Core_Block_Template{

    public function getCustomerRegistries(){
        $collection = null;
        $currentCustomer = Mage::getSingleton('customer/session')->getCustomer();

        if($currentCustomer){
            $collection = Mage::getModel('krauskopf_giftregistry/entity')->getCollection()
                ->addFieldToFilter('customer_id',  $currentCustomer->getId());
        }
        return $collection;
    }
}