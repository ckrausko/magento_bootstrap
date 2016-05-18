<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 2/27/2016
 * Time: 10:56 AM
 */

class Krauskopf_BrandDirectory_Model_Resource_Brand extends Mage_Core_Model_Resource_Db_Abstract{
    protected function _construct(){
        $this->_init('krauskopf_branddirectory/brand', 'entity_id');
    }
}