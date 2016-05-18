<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 2/27/2016
 * Time: 11:08 AM
 */

class Krauskopf_BrandDirectory_Block_Adminhtml_Brand extends Mage_Adminhtml_Block_Widget_Grid_Container{

    protected function _construct(){

        parent::_construct();

        $this->_blockGroup = 'krauskopf_branddirectory_adminhtml';

        $this->_controller = 'brand';

        $this->_headerText = Mage::helper('krauskopf_branddirectory')
            ->__('Brand Directory');
    }

    public function getCreateUrl(){

        return $this->getUrl('krauskopf_branddirectory_admin/brand/edit');
    }
}