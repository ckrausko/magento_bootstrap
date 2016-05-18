<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 3/7/2016
 * Time: 5:40 PM
 */

class Krauskopf_Giftregistry_Model_Entity extends Mage_Core_Model_Abstract{

    public function _construct(){

        $this->_init('krauskopf_giftregistry/entity');
        parent::_construct();
    }

    public function updateRegistryData($customer, $data){

        try{
            if(!empty($data)){
                
            }
        }

    }

}