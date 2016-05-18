<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 2/27/2016
 * Time: 11:20 AM
 */

class Krauskopf_BrandDirectory_Block_Adminhtml_Brand_Form extends Mage_Adminhtml_Block_Widget_Form_Container{

    protected function _construct(){
        $this->_blockGroup = 'krauskopf_branddirectory_adminhtml';
        $this->_controller = "brand";
        $this->_mode = 'edit';

        $newOrEdit = $this->getRequest()->getParam('id')
            ? $this->__('Edit')
            : $this->__('New');
        $this->_headerText = $newOrEdit . ' ' . $this->__('Brand');
    }
}