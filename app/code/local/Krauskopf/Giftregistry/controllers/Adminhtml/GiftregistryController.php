<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 3/12/2016
 * Time: 9:54 PM
 */

class Krauskopf_Giftregistry_Adminhtml_GiftregistryController extends Mage_Adminhtml_Controller_Action{

    public function indexAction(){

        $this->loadLayout();
        $this->renderLayout();
        return $this;
    }

    public function editAction()
    {
        $this->loadLayout();
        $this->renderLayout();
        return $this;
    }
    public function saveAction()
    {
        $this->loadLayout();
        $this->renderLayout();
        return $this;
    }
    public function newAction()
    {
        $this->loadLayout();
        $this->renderLayout();
        return $this;
    }
    public function massDeleteAction()
    {
        $this->loadLayout();
        $this->renderLayout();
        return $this;
    }


}