<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 2/27/2016
 * Time: 10:50 AM
 */

class Krauskopf_BrandDirectory_Model_Brand extends Mage_Core_Model_Abstract{

    const VISIBILITY_HIDDEN = '0';
    const VISIBILITY_DIRECTORY = '1';

    protected function _construct(){
        $this->_init('krauskopf_branddirectory/brand');
    }

    public function getAvailableVisibilities(){
        return array(
            self::VISIBILITY_HIDDEN
            => Mage::helper('krauskopf_branddirectory')
            ->__('Hidden'),
            self::VISIBILITY_DIRECTORY
            => Mage::helper('krauskopf_branddirectory')
            ->__('Visible in Directory'),
        );
    }

    protected function _updateTimestamps(){
        $timestamp = now();
        $this->setUpdatedAt($timestamp);

        if($this->isObjectNew()){
            $this->setCreatedAt($timestamp);
        }
        return $this;
    }

    protected function _prepareUrlKey(){
        return $this;
    }
}