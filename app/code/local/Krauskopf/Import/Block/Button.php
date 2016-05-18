<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 8/16/2015
 * Time: 10:01 AM
 */

class Krauskopf_Import_Block_Button extends Mage_Adminhtml_Block_Widget_Form_Container{

    public function addButt(){
        parent::__construct();
        $this->_addButton('do_something_crazy', array(
            'label'     => Mage::helper('krauskopf_import')->__('Export Order'),
            'onclick'   => "confirmSetLocation('sdfa', '{$this->getUrl('*/yourmodule/crazy')}')",
            'class'     => 'go'
        ), 0, 100, 'header');

    return $this;
    }


}

//  $this->addButton('do_something_crazy', array(
//  'label'     => Mage::helper('your_module')->__('Export Order'),
//   'onclick'   => "confirmSetLocation('sdfa', '{$this->getUrl('*/yourmodule/crazy')}')",
//  'class'     => 'go'
//  ));