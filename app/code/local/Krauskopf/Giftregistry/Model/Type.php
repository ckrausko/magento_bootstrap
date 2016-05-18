<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 3/1/2016
 * Time: 6:55 PM
 */

class Krauskopf_Giftregistry_Model extends Mage_Core_Model_Abstract{


    public function __construct(){
        $this->_init('krauskopf_giftregistry/type');
        parent::_construct();
    }
}