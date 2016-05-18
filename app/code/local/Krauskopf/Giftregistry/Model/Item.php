<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 3/1/2016
 * Time: 7:01 PM
 */

class Krauskopf_Giftregistry_Model_Item extends Mage_Core_Model_Abstract{

    public function __construct(){
        $this->_init('krauskopf_giftregistry/item');
        parent::_construct();
    }
}