<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 8/2/2015
 * Time: 1:19 PM
 */
class Krauskopf_Adminform_Adminhtml_Adminform extends Mage_Adminhtml_Controller_Action{

    public function indexAction(){
        $this->loadLayout();
        $this->_setActiveMenu(krauskopf/form);

        $this->renderLayout();


    }
}