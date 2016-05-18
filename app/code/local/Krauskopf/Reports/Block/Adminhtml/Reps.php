<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 12/30/2015
 * Time: 8:05 PM
 */

class Krauskopf_Reports_Block_Adminhtml_Reps extends Mage_Adminhtml_Block_Widget_Grid_Container{

    public function __construct(){
        $this->_blockGroup = 'krauskopf_reports';
        $this->_controller = 'adminhtml_reps';
        $this->_headerText = $this->__('Reps');

       parent::__construct();
    }
}