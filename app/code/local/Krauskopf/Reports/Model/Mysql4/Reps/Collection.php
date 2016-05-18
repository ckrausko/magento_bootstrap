<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 12/30/2015
 * Time: 8:01 PM
 */

class Krauskopf_Reports_Model_Mysql4_Reps_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract{

    protected function _construct(){
        $this->_init('krauskopf_reports/reps');
    }
}