<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 3/7/2016
 * Time: 5:43 PM
 */

class Krauskopf_Giftregistry_Model_Mysql4_Entity_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract{

    public function _construct(){
        $this->_init('krauskopf_giftregistry/entity');
        parent::_construct();
    }
}