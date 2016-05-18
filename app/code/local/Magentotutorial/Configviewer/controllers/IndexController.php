<?php
/**
 * Created by PhpStorm.
 * User: Cody
 * Date: 1/31/2016
 * Time: 1:27 PM
 */

class Magentotutorial_Configviewer_IndexController extends Mage_Core_Controller_Front_Action{

    public function indexAction(){
       $this->loadLayout();
       $this->renderLayout();
    }


    public function paramsAction() {
        echo '
';
        foreach($this->getRequest()->getParams() as $key=>$value) {
            echo '
Param: '.$key.'
';
            echo '
Value: '.$value.'
';
        }
        echo '
';
    }
}