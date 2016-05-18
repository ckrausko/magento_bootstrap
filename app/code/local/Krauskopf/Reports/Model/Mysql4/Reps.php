<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 12/30/2015
 * Time: 8:00 PM
 */

class Krauskopf_Reports_Mysql4_Reps extends Mage_Core_Model_Mysql4_Abstract{
    protected function _construct(){
        $this->_init('krauskopf_reports/reps', 'id');
    }
}