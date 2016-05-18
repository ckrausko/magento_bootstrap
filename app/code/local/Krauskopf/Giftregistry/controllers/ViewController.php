<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 3/12/2016
 * Time: 12:05 PM
 */

class Krauskopf_Giftregistry_ViewController extends Mage_Core_Controller_Front_Action{

    public function viewAction(){
        $registryId = $this->getRequest()->getParam('registry_id');

        if($registryId){
            $entity = Mage::getModel('krauskopf_giftregistry/entity');
            if($entity->load($registryId)){
                Mage::register('loaded_registry', $entity);
                $this->loadLayout();
                $this->_initLayoutMessages('customer/session');
                $this->renderLayout();
                return $this;
            }else{
                $this->_forward('noroute');
                return $this;
            }
        }

    }
}