<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 2/27/2016
 * Time: 10:58 AM
 */

class Krauskopf_BrandDirectory_Model_Resource_Brand_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract{

    protected function _construct(){
        parent::_construct();

        $this->_init('krauskopf_branddirectory/brand',
            'krauskopf_branddirectory/brand'
        );
    }
}