<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 12/30/2015
 * Time: 8:16 PM
 */

class Krauskopf_Reports_Block_Adminhtml_Reps_Edit extends Mage_Adminhtml_Block_Widget_Form_Container{

    public function __construct(){
        $this->_blockGroup = 'krauskopf_reports';
        $this->_controller = 'adminhtml_reps';

        parent::__construct();

        $this->_updateButton('save', 'label', $this->__('Save Reps'));
        $this->updateButton('delete', 'label', $this->__('Delete Reps'));

    }

    public function getHeaderText(){

        if(Mage::register('krauskopf_reports')->getId()){
            return $this->__('Edit Reps');
        }
        else{
            return $this->__('New Reps');
        }
    }
}