<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 3/1/2016
 * Time: 6:57 PM
 */

class Krauskopf_Giftregistry_Model_Mysql4_Type extends Mage_Core_Model_Mysql4_Abstract{

    public function _construct(){
        $this->_init('krauskopf_giftregistry/type', 'type_id');
    }
}