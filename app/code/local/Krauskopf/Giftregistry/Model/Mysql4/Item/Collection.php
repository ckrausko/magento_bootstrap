<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 3/1/2016
 * Time: 7:04 PM
 */

class Krauskopf_Giftregistry_Model_Mysql4_Item_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract{

    public function _construct(){
        $this->_init('krauskopf_giftregistry/item');
        parent::_construct();
    }
}